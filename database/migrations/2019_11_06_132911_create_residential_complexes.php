<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentialComplexes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residential_complexes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logo');
            $table->string('representative');
            $table->string('telephone');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->enum('complexe_type', ['1','2','3']);//complexes_type = houses, aapartaments, mixed
            $table->integer('number_houses');
            $table->integer('number_in');
            $table->integer('number_out');            
            $table->enum('motorcycles_parking',['0', '1'])->default('0');//0 = no, 1 = yes
            $table->integer('motorcycles_places')->nullable();
            $table->enum('bikes_parking',['0', '1'])->default('0');//0 = no, 1 = yes
            $table->integer('bikes_places')->nullable();
            $table->enum('cars_parking',['0', '1'])->default('0');//0 = no, 1 = yes
            $table->integer('cars_places')->nullable();
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
        Schema::dropIfExists('residential_complexes');
    }
}
