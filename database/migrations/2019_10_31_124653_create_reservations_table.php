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
            $table->integer('service_price_id')->default(1);
            $table->string('service_date');
            $table->string('service_time');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('client_email');
            $table->string('phone_number');
            $table->string('client_address');
            $table->string('client_sub_district');
            $table->string('client_district');
            $table->string('employee_id')->nullable();
            $table->string('status');
            $table->softDeletes();
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
