<?php

namespace App\Http\Controllers\amenities;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UtilityHelper;

class AmenitiesController extends Controller
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
                'except' => ['create', 'edit', 'destroy']
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
                $amenities = $this->getAmenities(null);

                return view('amenities.amenity_list', compact('amenities'));
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
            return view('amenities.create_amenity');
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
    public function store(Request $request)
    {
        $amenity = $request->input('amenity');
        $rentPricePerHour = $request->input('rentPricePerHour');

        try {
            $amenityId = $this->insertRecord('amenities', array(
                'amenity' => $amenity,
                'rent_price_per_hour' => $rentPricePerHour
            ));

            $this->createSystemLogs('Created a New Amenity');

            flash()->success('Reservation successfully created.');
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
        //
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
            $this->deleteRecordWithWhere('amenities', array('id' => $id));

            if(Auth::user()->userType->type === 'Guest') {
                return view('errors.404');
            } else {
                $this->createSystemLogs('Deleted an Existing Amenity');

                flash()->success('Record successfully deleted')->important();

                return redirect('reservations');
            }
        } catch(\Exception $ex) {
            return view('errors.404');
        }
    }
}
