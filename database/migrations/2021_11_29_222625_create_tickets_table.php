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
            $table->id();
            $table->string('nama_tiket', 255);
            $table->integer('harga');
            $table->unsignedBigInteger('dibuat_oleh');
            $table->unsignedBigInteger('diupdate_oleh');
            $table->foreign('dibuat_oleh')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('diupdate_oleh')->references('id')->on('users')->cascadeOnDelete();
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
        Schema::dropIfExists('tickets');
    }
}
