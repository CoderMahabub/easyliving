<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service');
            $table->string('sub_service');
            $table->string('service_date');
            $table->string('service_time');
            $table->string('client_name');
            $table->string('client_phone');
            $table->string('client_email');
            $table->string('password');
            $table->string('client_address');
            $table->timestamps();




                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
