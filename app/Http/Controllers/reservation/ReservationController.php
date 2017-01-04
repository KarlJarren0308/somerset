<?php

namespace App\Http\Controllers\reservation;

use Auth;
use PDF;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UtilityHelper;
use App\Http\Requests\reservation\ReservationRequest;
use App\ReservationsModel;

class ReservationController extends Controller
{
    use UtilityHelper;

    /**
     * Check if user is logged in
     * Check the usertype of logged in user
     *
    */
    public function __construct()
    {
        if(Auth::user()->userType->type === 'Guest') {
            $this->middleware('user.type:reservation', [
                'except' => ['index']
            ]);
        } else {
            $this->middleware('user.type:reservation');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            if(Auth::user()->userType->type === 'Guest') {
                return view('errors.404');
            } else {
                $reservationList = $this->getReservations(null);

                return view('reservation.reservation_list', compact('reservationList'));
            }
        } catch(\Exception $ex) {
            return view('errors.404');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $homeOwnerMembersList = $this->getHomeOwnerInformation(null);
            $amenities = $this->getAmenities(null);

            if(Auth::user()->userType->type === 'Guest') {
                return view('guest_reservation.create_reservation', compact('homeOwnerMembersList', 'amenities'));
            } else {
                return view('reservation.create_reservation', compact('homeOwnerMembersList', 'amenities'));
            }
        } catch(\Exception $ex) {
            return view('errors.404');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationRequest $request)
    {
        $homeOwnerId = $request->input('homeOwnerId');
        $amenityId = $request->input('amenityId');
        $numberOfHours = $request->input('numberOfHours');
        $reservationDate = $request->input('reservationDate');
        $reservationTime = $request->input('reservationTime');
        $rentPrice = $request->input('rentPrice');
        $reservationDateTime = date('Y-m-d', strtotime($request->input('reservationDate'))) . ' ' . date('H:i:s', strtotime($request->input('reservationTime')));
        $isAvailable = true;

        try {
            $reservations = ReservationsModel::where('amenity_id', $amenityId)->get();

            foreach($reservations as $reservation) {
                if(!$this->checkIfDateTimeRangeOverlap($reservationDateTime, date('Y-m-d H:i:s', strtotime('+' . $numberOfHours . ' hours', strtotime($reservationDateTime))), $reservation->reservation_date, date('Y-m-d H:i:s', strtotime('+' . $reservation->number_of_hours . ' hours', strtotime($reservation->reservation_date))))) {
                    $isAvailable = true;
                } else {
                    $isAvailable = false;

                    break;
                }
            }

            if($isAvailable) {
                $reservationId = $this->insertRecord('reservations', array(
                    'home_owner_id' => $homeOwnerId,
                    'amenity_id' => $amenityId,
                    'reservation_amount' => ($rentPrice * $numberOfHours),
                    'amount_paid' => (($rentPrice * $numberOfHours) / 2),
                    'number_of_hours' => $numberOfHours,
                    'reservation_date' => date('Y-m-d H:i:s', strtotime($reservationDateTime))
                ));

                $reservationReceiptId = $this->insertRecord('reservations_receipt', array(
                    'reservation_id' => $reservationId,
                    'amount_paid' => (($rentPrice * $numberOfHours) / 2)
                ));

                if(Auth::user()->userType->type !== 'Guest') { 
                    $this->createSystemLogs('Created a New Reservation');
                }
                
                flash()->success('Reservation successfully created.');
            } else {
                flash()->error('Your reservation has been cancelled. Date and Time of reservation conflicts with another reservation.');
            }
        } catch(\Exception $ex) {
            flash()->error('Error occured on line ' . $ex->getLine() . ': ' . $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $reservation = $this->getReservations($id);

            if(Auth::user()->userType->type==='Guest') {
                return view('guest_reservation.show_reservation', compact('reservation'));
            }else{
                return view('reservation.show_reservation', compact('reservation'));
            }    
        } catch(\Exception $ex) {
            return view('errors.404');
        }
    }

    /**
     * Show reservation receipt
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function receipt($id)
    {
        $receipt = $this->getReservationReceipts($id);

        return PDF::loadView('pdf.reservation_receipt', compact('receipt'))->stream('reservation_receipt_' . date('m_d_y') . '.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $reservation =$this->getReservations($id);
            if($reservation->amount_paid == $reservation->reservation_amount) {
                return redirect()->back()->withErrors(['message'=>'Cannot delete paid reservation']);
            } else {
                $this->deleteRecordWithWhere('reservations', array('id' => $id));

                if(Auth::user()->userType->type === 'Guest') {
                    flash()->success('Reservation has been cancelled.')->important();

                    return redirect('guest-reservations');
                } else {
                    $this->createSystemLogs('Deleted an Existing Reservation');

                    flash()->success('Record successfully deleted')->important();

                    return redirect('reservations');
                }
            }
        } catch(\Exception $ex) {
            return view('errors.404');
        }
    }

    public function getHomeOwnerReservations()
    {
        $reservationList = ReservationsModel::where('home_owner_id', Auth::user()->home_owner_id)->get();

        return view('guest_reservation.reservation_list', compact('reservationList'));
    }
}
