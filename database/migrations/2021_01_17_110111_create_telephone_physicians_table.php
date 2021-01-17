<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelephonePhysiciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telephone_physicians', function (Blueprint $table) {
            $table->id();
            $table->integer(column: 'areacode');
            $table->integer(column: 'number');
            $table->string(column: 'description');
            $table->foreignId(column: 'phisician_id')->constrained();
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
        Schema::dropIfExists('telephone_physicians');
    }
}
