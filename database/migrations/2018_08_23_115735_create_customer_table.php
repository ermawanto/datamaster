<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->double('kode_customer')->default(0);
            $table->string('nama_customer');
            $table->string('nama_pimpinan'); 
            $table->string('alamat');
            $table->string('kode_propinsi');
            $table->string('kode_kabupaten');
            $table->double('sales_group')->default(0);
            $table->double('no_telepon')->default(0);
            $table->string('npwp');
            $table->string('email');
            $table->double('active')->default(0);
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
        Schema::drop('customer');
    }
}