<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_anggota', 30);
            $table->string('nip_anggota', 18)->unique();
            $table->timestamps();
        });

        Schema::table('ketua', function (Blueprint $table){
            $table->foreign('id_anggota')
                  ->references('id')
                  ->on('anggota')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ketua', function (Blueprint $table){
            $table->dropForeign('ketua_id_anggota_foreign');
        });

        Schema::dropIfExists('anggota');
    }
}
