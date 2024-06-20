<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Restrodetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restrodetails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('restro_id');
            $table->string('name');
            $table->string('contact');
            $table->string('email');
            $table->longText('address');
            $table->string('cost_per_two');
            $table->longText('cuisine');
            $table->time('otime');
            $table->time('ctime');
            $table->time('wotime');
            $table->time('wctime');
            $table->longText('description');
            $table->longText('must_try');
            $table->string('select');
            $table->string('offer');
            $table->string('restro_facilities')->nullable();
            $table->string('tp');
            $table->string('iep');
            $table->string('mp');
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
        Schema::dropIfExists('restrodetails');
    }
}
