<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alat_id');
            $table->string('warna_alat');
            $table->string('kerusakan');
            $table->bigInteger('biaya');
            $table->string('keluhan');
            $table->string('filename') -> nullable();
            $table->integer('layanan_id');
            $table->string('nama_customer');
            $table->string('alamat_customer');
            $table->char('notelp_customer',15);
            $table->string('email_customer');
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
        Schema::dropIfExists('pesanan');
    }
}
