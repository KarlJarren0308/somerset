<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create amenities Table in the database if it doesn't exist
        if(!Schema::hasTable('amenities')) {
            Schema::create('amenities', function (Blueprint $table) {
                $table->increments('id');
                $table->string('amenity', 255);
                $table->decimal('rent_price', 10, 2)->default(0.00);
                $table->Integer('rent_hours')->default(1);
                $table->Integer('created_by')->unsigned()->nullable();
                $table->foreign('created_by')->references('id')->on('users');
                $table->Integer('updated_by')->unsigned()->nullable();
                $table->foreign('updated_by')->references('id')->on('users');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop amenities Table if it exist
        Schema::dropIfExists('amenities');
    }
}
