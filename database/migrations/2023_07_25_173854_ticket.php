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
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->string('nama_travel');
            $table->string('kota_keberangkatan');
            $table->unsignedBigInteger('terminal_keberangkatan_id');
            $table->string('terminal_tujuan');
            $table->string('kota_tujuan');
            $table->string('jam_keberangkatan');
            $table->string('jam_tujuan');
            $table->integer('jumlah_tiket');
            $table->integer('harga_tiket');
            $table->timestamps();

            $table->foreign('terminal_keberangkatan_id')->references('id')->on('terminal');
            // $table->foreign('terminal_tujuan_id')->references('id')->on('terminal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('ticket');
    }
};
