<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('email')->unique();

            $table->datetime('email_verified_at')->nullable();

            $table->string('password');

            $table->string('instagram');

            $table->string('pekerjaan');

            $table->string('instansi');

            $table->date('date');

            $table->string('kecamatan');

            $table->string('Alamat');

            $table->longText('tanya')->nullable();

            $table->boolean('status')->default(0);


            $table->string('remember_token')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
