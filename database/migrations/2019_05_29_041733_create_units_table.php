<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('my_employees');
            $table->string('room_no');
            $table->string('available');
            $table->string('unit_type');
            $table->integer('square_feet');
            $table->decimal('price',9,2);
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
        Schema::dropIfExists('my_units');
    }
}
