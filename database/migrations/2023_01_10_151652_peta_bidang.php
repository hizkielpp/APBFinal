<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petaBidang', function (Blueprint $table) {
            $table->id();
            $table->string('nomor')->unique();
            $table->string('judul')->unique();
            $table->longText('deskripsi');
            $table->string('namaGambar');
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
        Schema::dropIfExists('petaBidang');
    }
};
