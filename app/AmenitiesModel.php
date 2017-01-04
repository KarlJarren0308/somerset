<?php

/*
* @Description: Serves as model for Amenities in Database
* @Date:        11/27/2016
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmenitiesModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'amenities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amenity',
        'rent_price_per_hour'
    ];

    public function user(){
        return $this->belongsTo('App\User','created_by');
    }
}
