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
            'rent_price' => '200',
            'rent_hours' => '1'
        );
        $amenities[] = array(
            'amenity' => 'Function Hall',
            'rent_price' => '3000',
            'rent_hours' => '4'
        );
        $amenities[] = array(
            'amenity' => 'Swimming Pool',
            'rent_price' => '3000',
            'rent_hours' => '4'
        );

        DB::table('amenities')->insert($amenities);
    }
}
