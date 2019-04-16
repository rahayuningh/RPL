<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePserviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pservice', function (Blueprint $table) {
            $table->bigIncrements('id_pservice');
            $table->string('nama_pservice');
            $table->string('alamat_pservice');
            $table->integer('notelp_pservice');
            $table->string('email_pservice');
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
        Schema::dropIfExists('pservice');
    }
}
