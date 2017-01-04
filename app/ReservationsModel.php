<?php

/*
* @Description: Serves as model for Reservations in Database
* @Date:        11/27/2016
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationsModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reservations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'home_owner_id',
        'amenity_id',
        'reservation_amount',
        'amount_paid',
        'number_of_hours',
        'reservation_date'
    ];

    public function user(){
        return $this->belongsTo('App\User','created_by');
    }

    public function homeOwner(){
        return $this->belongsTo('App\HomeOwnerInformationModel', 'home_owner_id');
    }

    public function facility(){
        return $this->belongsTo('App\AmenitiesModel', 'amenity_id');
    }

    public function receipts() {
        return $this->hasMany('App\ReservationsReceiptModel', 'reservation_id');
    }
}
