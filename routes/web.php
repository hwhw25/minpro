<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataDosenController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datadosen',[DataDosenController::class,'index']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/postlogin','LoginController@postlogin')->name('postlogin');
Route::get('/logout','LoginController@logout')->name('logout');

Route::get('/home/halaman-admin', 'HomeController@halamanAdmin')->name('halaman-admin');
Route::get('/home/halaman-dosen', 'HomeController@halamanDosen')->name('halaman-dosen');
Route::get('/home/halaman-mahasiswa', 'HomeController@halamanMahasiswa')->name('halaman-mahasiswa');

Route::get('/home/halaman-admin/admin-data-dosen', 'HomeController@halamanDataDosen');
Route::get('/home/halaman-admin/admin-data-dosen/add', 'DosenController@add')->name('admin-data-dosen');
Route::POST('/home/halaman-admin/admin-data-dosen/tambah', 'DosenController@tambah');
Route::get('/home/halaman-admin/admin-data-mahasiswa', 'HomeController@halamanDataMahasiswa');
Route::get('/home/halaman-admin/admin-rekap-perwalian', 'HomeController@halamanRekapPerwalian');


Route::get('/home/halaman-mahasiswa/mahasiswa-perwalian', 'MahasiswaController@mataKuliahSI');
Route::get('/home/halaman-mahasiswa/mahasiswa-perwalian/create', 'MahasiswaController@create');

Route::group(['middleware' => ['auth','ceklevel:admin,dosen,mahasiswa']], function() {
    Route::get('/home','HomeController@index');

});

Route::group(['middleware' => ['auth','ceklevel:admin']], function() {
    Route::get('/halaman-admin','HomeController@halamanAdmin')->name('halaman-admin');

});

Route::group(['middleware' => ['auth','ceklevel:dosen,admin']], function() {
    Route::get('/halaman-dosen','HomeController@halamanDosen')->name('halaman-dosen');

});

Route::group(['middleware' => ['auth','ceklevel:mahasiswa,admin']], function() {
    Route::get('/halaman-mahasiswa','HomeController@halamanMahasiswa')->name('halaman-mahasiswa');

});

