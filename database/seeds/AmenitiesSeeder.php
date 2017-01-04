<?php

use Illuminate\Database\Seeder;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities = array();
        $amenities[] = array(
            'amenity' => 'Basketball Court',
            'rent_price_per_hour' => '200'
        );
        $amenities[] = array(
            'amenity' => 'Function Hall',
            'rent_price_per_hour' => '2000'
        );
        $amenities[] = array(
            'amenity' => 'Adult-size Swimming Pool',
            'rent_price_per_hour' => '80'
        );
        $amenities[] = array(
            'amenity' => 'Kiddie-size Swimming Pool',
            'rent_price_per_hour' => '60'
        );

        DB::table('amenities')->insert($amenities);
    }
}
