<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNullableFieldAtUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('password')->nullable()->change();
            $table->string('kode_anggota')->nullable()->change();
            $table->longText('alamat')->nullable()->change();
            $table->string('telp')->nullable()->change();
            $table->integer('tinggi')->nullable()->change();
            $table->integer('berat')->nullable()->change();
            $table->string('jenis_kelamin')->nullable()->change();
            $table->integer('usia')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('password')->nullable(false)->change();
            $table->string('kode_anggota')->nullable(false)->change();
            $table->longText('alamat')->nullable(false)->change();
            $table->string('telp')->nullable(false)->change();
            $table->integer('tinggi')->nullable(false)->change();
            $table->integer('berat')->nullable(false)->change();
            $table->string('jenis_kelamin')->nullable(false)->change();
            $table->integer('usia')->nullable(false)->change();

        });
    }
}