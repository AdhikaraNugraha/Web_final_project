<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('', function () {
//     return view('welcome');
// });



Route::get('/','mahasiswaCont@viewDashboard');
Route::get('mhs/msg/{msg}','mahasiswaCont@viewMahasiswaWithMsg');
Route::get('mhs/viewtambahmahasiswa','mahasiswaCont@viewTambahMahasiswa');
Route::get('mhs/vieweditmahasiswa/{id}','mahasiswaCont@viewEditMahasiswa');
Route::get('mhs/viewdeletemahasiswa/{id}','mahasiswaCont@viewDeleteMahasiswa');
Route::post('mhs/prosestambahmahasiswa','mahasiswaCont@prosesTambahMahasiswa');
Route::post('mhs/proseseditmahasiswa','mahasiswaCont@prosesEditMahasiswa');
Route::get('mhs/prosesdeletemahasiswa/{id}','mahasiswaCont@prosesDeleteMahasiswa');


Route::get('jurusan','jurusanCont@viewJurusan');


Auth::routes();

Route::get('/list', 'mahasiswaCont@viewMahasiswa');
Route::get('/dashboard', 'mahasiswaCont@viewDashboard');