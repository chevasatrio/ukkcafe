<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_detail_transaksi');
            $table->bigInteger('id_transaksi')->unsigned();
            $table->bigInteger('id_menu')->unsigned();
            $table->bigInteger('harga');
            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_menu')->references('id_menu')->on('menu')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transaksi');
    }
}
