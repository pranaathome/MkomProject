<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKetua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketua', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ketua', 30);
            $table->string('nip_ketua', 18)->unique();
            $table->integer('id_anggota')
                  ->unsigned()
                  ->nullable();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table){
            $table->foreign('id_ketua')
                  ->references('id')
                  ->on('ketua')
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
        Schema::table('users', function (Blueprint $table){
            $table->dropForeign('users_id_ketua_foreign');
        });

        Schema::dropIfExists('ketua');
    }
}
