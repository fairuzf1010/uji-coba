<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkbaronasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkbaronas', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('kategori');
            $table->string('judul_file');
            $table->string('deskripsi_file');
            $table->string('link_file');
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
        Schema::dropIfExists('linkbaronas');
    }
}
