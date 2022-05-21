<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteTanggalBayarFieldAtPembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->dropColumn('tanggal_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->timestamp('tanggal_bayar');
        });
    }
}