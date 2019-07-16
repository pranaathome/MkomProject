<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('form-test', function(){
    $halaman = 'form-test';
    return view('form')->with(compact('halaman'));
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('mahasiswa/dashboard', 'MahasiswaController@index')->name('mahasiswa.dashboard');
Route::get('mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::get('mahasiswa/{mahasiswa}', 'MahasiswaController@show')->name('mahasiswa.show');
Route::post('mahasiswa', 'MahasiswaController@store')->name('mahasiswa.store');

// Route::get('form', 'FormController@index')->name('form');
// Route::get('form/create', 'FormController@create')->name('form.create');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
});

// Route::get('sampledata', function () {
//     DB::table('mahasiswa')->insert([
//         [
//             'nim'        => 'G64150001',
//             'nama'       => 'Agus Yulianto',
//             'prodi'      => 'Program Studi A',
//             'no_telp'    => '081-123-434-323',
//             'judul'      => 'Judul Satu',
//             'created_at' => '2019-07-15 14:11:30',
//             'updated_at' => '2019-07-15 14:13:10'
//         ],
//         [
//             'nim'        => 'G64150002',
//             'nama'       => 'Agustina Anggraeni',
//             'prodi'      => 'Program Studi B',
//             'no_telp'    => '081-345-594-456',
//             'judul'      => 'Judul Dua',
//             'created_at' => '2019-07-15 14:11:30',
//             'updated_at' => '2019-07-15 14:13:10'
//         ],
//         [
//             'nim'        => 'G64150003',
//             'nama'       => 'Bayu Firmansyah',
//             'prodi'      => 'Program Studi C',
//             'no_telp'    => '081-435-029-994',
//             'judul'      => 'Judul Tiga',
//             'created_at' => '2019-07-15 14:11:30',
//             'updated_at' => '2019-07-15 14:13:10'
//         ],
//         [
//             'nim'        => 'G64150004',
//             'nama'       => 'Citra Rahmawati',
//             'prodi'      => 'Program Studi D',
//             'no_telp'    => '081-088-646-333',
//             'judul'      => 'Judul Empat',
//             'created_at' => '2019-07-15 14:11:30',
//             'updated_at' => '2019-07-15 14:13:10'
//         ],
//         [
//             'nim'        => 'G64150005',
//             'nama'       => 'Dirgantara Laksana',
//             'prodi'      => 'Program Studi E',
//             'no_telp'    => '081-222-643-555',
//             'judul'      => 'Judul Lima',
//             'created_at' => '2019-07-15 14:11:30',
//             'updated_at' => '2019-07-15 14:13:10'
//         ],
//         [
//             'nim'        => 'G64150006',
//             'nama'       => 'Eko Satrio',
//             'prodi'      => 'Program Studi F',
//             'no_telp'    => '081-342-333-888',
//             'judul'      => 'Judul Enam',
//             'created_at' => '2019-07-15 14:11:30',
//             'updated_at' => '2019-07-15 14:13:10'
//         ],
//         [
//             'nim'        => 'G64150007',
//             'nama'       => 'Firda Ayu Larasati',
//             'prodi'      => 'Program Studi G',
//             'no_telp'    => '081-223-494-242',
//             'judul'      => 'Judul Tujuh',
//             'created_at' => '2019-07-15 14:11:30',
//             'updated_at' => '2019-07-15 14:13:10'
//         ],
//         [
//             'nim'        => 'G64150008',
//             'nama'       => 'Galang Rambu Anarki',
//             'prodi'      => 'Program Studi H',
//             'no_telp'    => '081-235-038-254',
//             'judul'      => 'Judul Delapan',
//             'created_at' => '2019-07-15 14:11:30',
//             'updated_at' => '2019-07-15 14:13:10'
//         ],
//         [
//             'nim'        => 'G64150009',
//             'nama'       => 'Haris Purnomo',
//             'prodi'      => 'Program Studi I',
//             'no_telp'    => '081-822-629-234',
//             'judul'      => 'Judul Sembilan',
//             'created_at' => '2019-07-15 14:11:30',
//             'updated_at' => '2019-07-15 14:13:10'
//         ],
//         [
//             'nim'        => 'G64150010',
//             'nama'       => 'Indra Birowo',
//             'prodi'      => 'Program Studi J',
//             'no_telp'    => '081-555-664-433',
//             'judul'      => 'Judul Sepuluh',
//             'created_at' => '2019-07-15 14:11:30',
//             'updated_at' => '2019-07-15 14:13:10'
//         ],
//     ]);
// });
