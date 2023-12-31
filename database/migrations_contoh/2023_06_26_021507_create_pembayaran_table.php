<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pembayaran');
             $table->integer('id_petugas');
              $table->string('nisn');
               $table->date('tgl_bayar');
                $table->string('bulan_dibayar');
                 $table->string('tahun_dibayar');
                  $table->integer('id_spp');
                   $table->integer('jumlah_bayar');
                    $table->datetime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
