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

Route::get('/artikell', function () {
    return view('Frontend.detailartikel');
});
Route::get('/detailproduk', function () {
    return view('Frontend.detailproduk');
});
Route::get('/min', function () {
    return view('dashboard.admin');
});

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function () {
// Route diisi disini...
	Route::resource('contact','ContactController');
	Route::resource('testimoni','TestimoniController');
	Route::resource('kategoriartikel','KategoriArtikelController');
	Route::resource('artikel','ArtikelController');
	Route::post('artikel/{publish}', 'ArtikelController@Publish')->name('artikel.publish');
	Route::resource('merk','MerkController');
	Route::resource('kategoriproduk','KategoriProdukController');
	Route::resource('produk','ProdukController');
	Route::post('produk/{publish}', 'ProdukController@Publish')->name('produk.publish');
	Route::resource('fotoproduk','ProdukFotoController');
	Route::resource('cart','CartController');
	Route::resource('transaksi','TransaksiController');

}); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Frontend
Route::get('/', 'FrontendController@home');

Route::get('/cart', 'FrontendController@cart');
Route::get('/aboutus', 'FrontendController@about')->name('about');
Route::get('/artikel', 'FrontendController@artikel');
Route::get('/artikel/{berita}', 'FrontendController@detailartikel');
Route::get('/artikel/kategori/{kategori}', 'FrontendController@artikelkategori');
Route::get('/produk', 'FrontendController@produk');
Route::get('/produk/{produk}', 'FrontendController@detailproduk');
Route::get('/produk/kategori/{kategori}', 'FrontendController@produkartikel');
