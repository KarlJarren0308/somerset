<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create reservations Table in the database if it doesn't exist
        if(!Schema::hasTable('reservations')) {
            Schema::create('reservations', function (Blueprint $table) {
                $table->increments('id');
                $table->Integer('home_owner_id')->unsigned();
                $table->foreign('home_owner_id')->references('id')->on('home_owner_information');
                $table->Integer('amenity_id')->unsigned();
                $table->foreign('amenity_id')->references('id')->on('amenities');
                $table->Integer('created_by')->unsigned()->nullable();
                $table->foreign('created_by')->references('id')->on('users');
                $table->Integer('updated_by')->unsigned()->nullable();
                $table->foreign('updated_by')->references('id')->on('users');
                $table->decimal('reservation_amount', 10, 2)->default(0.00);
                $table->decimal('amount_paid', 10, 2)->default(0.00);
                $table->Integer('number_of_hours')->unsigned();
                // $table->Boolean('is_paid')->default(0);
                $table->timestamp('reservation_date');
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
        // Drop reservations Table if it exist
        Schema::dropIfExists('reservations');
    }
}
