<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('level', ['admin', 'mahasiswa']);
            $table->string('nama_mhs', 30);
            $table->string('nim', 9)->unique();
            $table->string('prodi', 30);
            $table->string('no_telp', 30)->unique();
            $table->text('judul');
            $table->string('hari_kolo', 10);
            $table->string('hari_sidang', 10);
            $table->date('tanggal_kolo');
            $table->date('tanggal_sidang');
            $table->time('waktu_mulai_kolo')->nullable();
            $table->time('waktu_selesai_kolo')->nullable();
            $table->time('waktu_mulai_sidang')->nullable();
            $table->time('waktu_selesai_sidang')->nullable();
            $table->date('terbit_penelitian');
            $table->date('terbit_kolo');
            $table->string('penerima');
            $table->longText('tujuan');
            $table->string('tempat');
            $table->unsignedInteger('id_ketua')->nullable();
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
        Schema::dropIfExists('users');
    }

    // INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES (NULL, 'Prana', 'prana@email.com', NULL, '$2y$10$qRYCq5MQDyIDK.X0rwFPIOF0bJdYfYxOegEJQrxIlacXT0TM62c/y', NULL, 'admin', '2019-07-29 21:23:21', '2019-07-29 21:23:21');

    // INSERT INTO `users` (`id`, `nim`, `nama`, `prodi`, `no_telp`, `judul`, `id_dosen`, `created_at`, `updated_at`) VALUES ('1', 'G64150100', 'Awan Pribadi', 'Program Studi A', '081195969659', 'Judul Satu', '1', '2019-07-17 01:00:00', NULL);
}
