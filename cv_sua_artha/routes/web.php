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

Route::get('/', function () {
    return view('welcome');
    return redirect()->route('login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/profile', 'HomeController@profile')->name('profile');
	Route::get('/changepass', 'HomeController@changepass')->name('changepass');

	Route::get('/user', 'userController@index')->name('user');

	Route::get('/jenis', 'JenisController@index')->name('jenis');
	Route::get('/tambahjenis', 'JenisController@create')->name('tambahjenis');
	Route::post('/tambahjenis/simpan', 'JenisController@simpan')->name('tambahjenis.simpan');
	Route::get('/showjenis/{kodejenis}', 'JenisController@show')->name('showjenis');
	Route::get('/editjenis/{kodejenis}', 'JenisController@edit')->name('editjenis');
	Route::post('/editjenis/simpan/{kodejenis}', 'JenisController@update')->name('editjenis.simpan');
	Route::post('/jenis/destroy/{kodejenis}', 'JenisController@destroy')->name('jenis.destroy');

	Route::get('/produk', 'ProdukController@index')->name('produk');
	Route::get('/tambahproduk', 'ProdukController@create')->name('tambahproduk');
	Route::post('/tambahproduk/simpan', 'ProdukController@simpan')->name('tambahproduk.simpan');
	Route::get('/showproduk/{kodeproduk}', 'ProdukController@show')->name('showproduk');
	Route::get('/editproduk/{kodeproduk}', 'ProdukController@edit')->name('editproduk');
	Route::post('/editproduk/simpan/{kodeproduk}', 'ProdukController@update')->name('editproduk.simpan');
	Route::post('/produk/destroy/{kodeproduk}', 'ProdukController@destroy')->name('produk.destroy');

	Route::get('/pesan', 'PesanController@index')->name('pesan');
	Route::get('/mypesan', 'PesanController@my')->name('mypesan');
	Route::get('/pesancustom', 'PesanController@custom')->name('pesancustom');
	Route::get('/pesancustoms/{id}', 'PesanController@customs')->name('pesancustoms');
	Route::post('/pesancustom/simpan', 'PesanController@simpan')->name('pesancustom.simpan');
	Route::get('/pesangitar', 'PesanController@gitar')->name('pesangitar');
	Route::get('/pesangitare', 'PesanController@gitare')->name('pesangitare');
	Route::get('/pesanbass', 'PesanController@bass')->name('pesanbass');
	Route::get('/pesanbasse', 'PesanController@basse')->name('pesanbasse');
	Route::post('/pesangitar/simpan', 'PesanController@simpan')->name('pesangitar.simpan');
	Route::post('/pesangitare/simpan', 'PesanController@simpan')->name('pesangitare.simpan');
	Route::post('/pesanbass/simpan', 'PesanController@simpan')->name('pesanbass.simpan');
	Route::post('/pesanbasse/simpan', 'PesanController@simpan')->name('pesanbasse.simpan');
	Route::get('/showpesan/{kodepesan}', 'PesanController@show')->name('showpesan');
	Route::get('/editpesan/{kodepesan}', 'PesanController@edit')->name('editpesan');
	Route::post('/editpesan/simpan/{kodepesan}', 'PesanController@update')->name('editpesan.simpan');
	Route::post('/pesan/destroy/{kodepesan}', 'PesanController@destroy')->name('pesan.destroy');
	Route::get('/pesan/cetak', 'PesanController@cetak')->name('pesan.cetak');
	Route::get('/settingpesan', 'PesanController@settingpesan')->name('settingpesan');
	Route::get('/pesan/search/{tanggal}/', 'PesanController@search')->name('searchpesan');
	
	Route::get('/tambahbahan', 'BahanController@create')->name('tambahbahan');
	Route::post('/tambahbahan/simpan', 'BahanController@simpan')->name('tambahbahan.simpan');
	Route::get('/showbahan/{id}', 'BahanController@show')->name('showbahan');
	Route::get('/editbahan/{id}', 'BahanController@edit')->name('editbahan');
	Route::post('/bahan/destroy/{id}', 'BahanController@destroy')->name('bahan.destroy');
	Route::post('/editbahan/simpan/{id}', 'BahanController@update')->name('editbahan.simpan');
	
	Route::get('/tambahmotif', 'MotifController@create')->name('tambahmotif');
	Route::post('/tambahmotif/simpan', 'MotifController@simpan')->name('tambahmotif.simpan');
	Route::get('/showmotif/{id}', 'MotifController@show')->name('showmotif');
	Route::get('/editmotif/{id}', 'MotifController@edit')->name('editmotif');
	Route::post('/motif/destroy/{id}', 'MotifController@destroy')->name('motif.destroy');
	Route::post('/editmotif/simpan/{id}', 'MotifController@update')->name('editmotif.simpan');
	
	Route::get('/tambahmodel', 'ModelController@create')->name('tambahmodel');
	Route::post('/tambahmodel/simpan', 'ModelController@simpan')->name('tambahmodel.simpan');
	Route::get('/showmodel/{id}', 'ModelController@show')->name('showmodel');
	Route::get('/editmodel/{id}', 'ModelController@edit')->name('editmodel');
	Route::post('/model/destroy/{id}', 'ModelController@destroy')->name('model.destroy');
	Route::post('/editmodel/simpan/{id}', 'ModelController@update')->name('editmodel.simpan');
	
	Route::get('/tambahukuran', 'UkuranController@create')->name('tambahukuran');
	Route::post('/tambahukuran/simpan', 'UkuranController@simpan')->name('tambahukuran.simpan');
	Route::get('/showukuran/{id}', 'UkuranController@show')->name('showukuran');
	Route::get('/editukuran/{id}', 'UkuranController@edit')->name('editukuran');
	Route::post('/ukuran/destroy/{id}', 'UkuranController@destroy')->name('ukuran.destroy');
	Route::post('/editukuran/simpan/{id}', 'UkuranController@update')->name('editukuran.simpan');

	Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
	Route::get('/transaksi/tambah/{KodeProduk}', 'TransaksiController@tambah')->name('tambahkeranjang');
	Route::get('/tambahtransaksi', 'TransaksiController@create')->name('tambahtransaksi');
	Route::post('/tambahtransaksi/simpan', 'TransaksiController@simpan')->name('tambahtransaksi.simpan');
	Route::get('/showtransaksi/{kodetransaksi}', 'TransaksiController@show')->name('showtransaksi');
	Route::get('/edittransaksi/{kodetransaksi}', 'TransaksiController@edit')->name('edittransaksi');
	Route::post('/edittransaksi/simpan/{kodetransaksi}', 'TransaksiController@update')->name('edittransaksi.simpan');
	Route::post('/transaksi/destroy/{kodetransaksi}', 'TransaksiController@destroy')->name('transaksi.destroy');
	Route::get('/transaksi/cetak', 'TransaksiController@cetak')->name('transaksi.cetak');
	Route::get('/laporan', 'LaporanController@show')->name('laporan');
	Route::get('/laporan/cetak', 'LaporanController@cetak')->name('laporan.cetak');
	Route::get('/transaksi/search/{tanggal}/', 'TransaksiController@search')->name('searchtransaksi');
	Route::get('/laporan/search/{tanggal}/', 'LaporanController@search')->name('searchlaporan');
});