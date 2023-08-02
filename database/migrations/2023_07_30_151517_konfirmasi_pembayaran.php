<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('konfirmasi_pembayaran', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id_tiket');
            // $table->integer('id_user');
            $table->string('nama_penumpang');
            $table->string('image');
            // $table->string('email');
            // $table->string('id_pemesanan');
            // $table->integer('status');
            // $table->integer('no_telpon');
            $table->integer('id_pemesanan')->unique();
            $table->timestamps();

            // $table->foreign('id_tiket')->references('id')->on('ticket');
            // $table->foreign('terminal_tujuan_id')->references('id')->on('terminal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
