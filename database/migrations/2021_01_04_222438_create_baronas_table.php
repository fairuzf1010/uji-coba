<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaronasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        // electra structure db

        // id
        // nama_tim
        // nama_ketua
        // kelas_ketua -> tidak wajib buat umum
        // nama_anggota
        // kelas_anggota -> tidak wajib buat umum
        // sekolah
        // alamat_sekolah
        // nama_pembina
        // nomor_hp
        // pembayaran_bank
        // pembayaran_atas_nama
        // pembayaran_status
        // pembyaran_bukti_transfer
        // created_at
        // modified_at









        Schema::create('baronas', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran')->nullable();
            $table->string('email');
            $table->string('nama_tim')->nullable();
            $table->string('kategori');
            $table->string('nama_ketua');
           // $table->string('kelas_ketua')->nullable();
            $table->string('nama_anggota');
           // $table->string('kelas_anggota')->nullable();
            $table->string('sekolah');
            $table->string('alamat_sekolah');
            $table->string('nama_pembina')->nullable();
            $table->string('nomor_hp');
            $table->string('region')->nullable();
            $table->string('pembayaran_bank')->nullable();
            $table->string('pembayaran_atas_nama')->nullable();
            $table->integer('pembayaran_status');
            $table->string('pembayaran_bukti')->nullable();
            $table->string('file_ktp_ketua')->nullable();
            $table->string('file_ktp_anggota')->nullable();
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
        Schema::dropIfExists('baronas');
    }
}
