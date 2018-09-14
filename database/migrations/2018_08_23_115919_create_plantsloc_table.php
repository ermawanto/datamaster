<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantslocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantsloc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_plant');
            $table->string('nama_plant'); 
            $table->string('code_storage_location');
            $table->string('nama_storage_location');
            $table->string('code_shipping_point');
            $table->string('nama_shipping_point');
            $table->double('code_propinsi')->default(0);
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
        Schema::dropIfExists('plantsloc');
    }
}
