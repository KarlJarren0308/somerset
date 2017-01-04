<?php

/*
* @Description: Serves as model for Reservations Receipt in Database
* @Date:        01/04/2016
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationsReceiptModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reservations_receipt';

    public function reservation() {
        return $this->belongsTo('App\ReservationsModel', 'reservation_id');
    }
}
