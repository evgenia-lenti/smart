<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            /*$table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->foreignId('period_id')->constrained();
            $table->integer('number_of_spots');
            $table->boolean('paid');
            $table->timestamps();*/
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('telephone');
            $table->string('email');
            $table->foreignId('course_id')->constrained();
            $table->foreignId('period_id')->nullable()->constrained();
            //$table->integer('number_of_spots');
            $table->boolean('paid');
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
        Schema::dropIfExists('tickets');
    }
}