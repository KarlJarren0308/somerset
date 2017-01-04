<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create reservations receipt Table in the database if it doesn't exist
        if(!Schema::hasTable('reservations_receipt')) {
            Schema::create('reservations_receipt', function (Blueprint $table) {
                $table->increments('id');
                $table->Integer('reservation_id')->unsigned();
                $table->foreign('reservation_id')->references('id')->on('reservations');
                $table->decimal('amount_paid', 10, 2)->default(0.00);
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
        // Drop reservations receipt Table if it exist
        Schema::dropIfExists('reservations_receipt');
    }
}
