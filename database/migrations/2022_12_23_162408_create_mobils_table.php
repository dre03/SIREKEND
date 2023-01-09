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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('merk_id')->constrained('merks')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nopol');
            $table->string('warna');
            $table->integer('cc');
            $table->integer('km_mobil');
            $table->integer('tahun');
            $table->double('harga_sewa');
            $table->text('deskripsi');
            $table->binary('foto');
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
        Schema::dropIfExists('mobils');
    }
};
