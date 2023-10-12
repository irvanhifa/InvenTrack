<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang')
                ->constrained('Barang')
                ->onUpdate('cascade');
                // ->onDelete('cascade'); tergantung mau dihapus juga apa gak
            $table->string('nama_peminjam', 50);
            $table->dateTime('tanggal_pinjam', $precision = 0);
            $table->dateTime('tanggal_kembali', $precision = 0);
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
        Schema::dropIfExists('Peminjaman');
    }
}
