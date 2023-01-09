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
        Schema::create('perawatans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->double('biaya');
            $table->text('deskripsi');
            $table->foreignId('mobil_id')->constrained('mobils')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('jenis_perawatan_id')->constrained('jenis_perawatans')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('perawatans');
    }
};
