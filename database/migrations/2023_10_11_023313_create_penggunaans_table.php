<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Penggunaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang')
                ->constrained('Barang')
                ->onUpdate('cascade');
                // ->onDelete('cascade'); tergantung mau dihapus juga apa gak
            $table->string('nama_pengguna', 50);
            $table->dateTime('tanggal_keluar', $precision = 0);
            $table->string('lokasi_pemasangan', 100);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Penggunaan');
    }
}
