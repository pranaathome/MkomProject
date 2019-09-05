<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePengesah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengesah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip_pengesah', 21)->unique();
            $table->string('nama_pengesah', 255);
            $table->timestamps();
        });

        Schema::table('formulir', function (Blueprint $table){
                $table->foreign('id_pengesah')
                      ->references('id')
                      ->on('pengesah')
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
        Schema::table('formulir', function (Blueprint $table){
            $table->dropForeign('pengesah_id_anggota_foreign');
        });

        Schema::dropIfExists('pengesah');
    }
}
