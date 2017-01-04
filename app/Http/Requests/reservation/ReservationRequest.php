<?php

/*
* @Description: Request Validation for Reservations
* @Date:        11/27/2016
*/

namespace App\Http\Requests\reservation;

use App\Http\Requests\Request;

class ReservationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method())
        {
            case 'GET': break;
            case 'DELETE': break;
            //for insert
            case 'POST': {
                return [
                    'homeOwnerId' => 'required',
                    'amenityId' => 'required',
                    'numberOfHours' => 'required|numeric',
                    'reservationDate' => 'required',
                    'reservationTime' => 'required',
                ];
            }
            //for update
            case 'PATCH': {  
                return [
                    'homeOwnerId' => 'required',
                    'amenityId' => 'required',
                    'numberOfHours' => 'required|numeric',
                    'reservationDate' => 'required|after:today',
                    'reservationTime' => 'required',
                ];
            }
            //default
            default: break;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'homeOwnerId.required' => 'Reserved By field is required.',
            'amenityId.required' => 'Amenity field is required.',
            'number_of_hours.required' => 'Number of Hours field is required.',
            'number_of_hours.numeric' => 'Number of Hours field should be a valid number.',
            'reservationDate.required' => 'Reservation Date field is required.',
            'reservationDate.after' => 'Reservation Date should be after today.',
            'reservationTime.required' => 'Reservation Time field is required.',
        ];
    }
}
