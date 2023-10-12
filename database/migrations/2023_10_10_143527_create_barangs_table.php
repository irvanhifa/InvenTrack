<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Barang', function (Blueprint $table) {
            $table->id()->unique();
            $table->boolean('jenis');
            $table->string('nama', 250);
            $table->string('merk', 50);
            $table->smallInteger('stok');
            $table->string('satuan_stok', 10);
            $table->string('path_foto', 50);
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
        Schema::dropIfExists('Barang');
    }
}
