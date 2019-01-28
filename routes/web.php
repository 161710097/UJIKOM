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
Route::get('/check', function () {
    return view('Frontend.checkout');
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
	Route::get('fotoproduk/{id}','ProdukFotoController@create')->name('fotoproduk.create');
	Route::post('fotoproduk/{id}/create','ProdukFotoController@store')->name('fotoproduk.store');
	Route::get('fotoproduk','ProdukFotoController@index')->name('fotoproduk.index');
	// Route::resource('fotoproduk','ProdukFotoController');
	Route::resource('cart','CartController');
	Route::resource('transaksi','TransaksiController');
	Route::get('/mycart','FrontendController@mycart')->name('mycart');

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
Route::get('/produk', 'FrontendController@produk')->name('produk');
Route::get('/produk/{produk}', 'FrontendController@detailproduk');
Route::get('/produk/kategori/{kategori}', 'FrontendController@produkartikel');
Route::get('/mycart','FrontendController@mycart')->name('mycart');
Route::post('/produk','CartController@store')->name('tambah');
Route::get('/deletecart','CartController@destroy');

Route::group(['prefix'=>'member', 'middleware'=>['auth','role:member|admin']], function () {
// Route diisi disini...
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontendController@home');
Route::get('/cart', 'FrontendController@cart');
Route::get('/aboutus', 'FrontendController@about')->name('about');
Route::get('/artikel', 'FrontendController@artikel');
Route::get('/artikel/{berita}', 'FrontendController@detailartikel');
Route::get('/artikel/kategori/{kategori}', 'FrontendController@artikelkategori');
Route::get('/produk', 'FrontendController@produk')->name('produk');
Route::get('/produk/{produk}', 'FrontendController@detailproduk');
Route::get('/produk/kategori/{kategori}', 'FrontendController@produkartikel');
Route::get('/mycart','FrontendController@mycart')->name('mycart');
Route::post('/produk','CartController@store')->name('tambah');
Route::get('/deletecart','CartController@destroy');

});
Route::get('/produks','FrontendController@filter')->name('filter'); 
Route::post('/komentar','KomentarController@store');


Route::group(['middleware'=>'auth'],function(){
    Route::get('/add-cart/{produk_id}', function($produk_id){
        // $produk = \App\Product::find($product_id);
        $exist = \App\Cart::where('user_id', \Auth::user()->id)->where('produk_id',$produk_id)->first();
        if($exist){
            $exist->quantity = $exist->quantity + 1;
            $exist->save(); 
        }else{    
            $data = new \App\Cart;
            $data->produk_id = $produk_id;
            $data->quantity = 1;
            $data->user_id = \Auth::user()->id;
            $data->save();
       
        }
        return redirect()->back();
    });    

    Route::get('cart/{user_id}', function ($user_id) {
        $mycart = \App\cart::all();
        $contact = \App\Contact::all();
        return view('Frontend.mycart', compact('mycart','contact'));
    });

    Route::get('cart/delete/{id}', function ($id) {
        $cart = \App\Cart::find($id)->delete();
        return redirect()->back();
    });

    Route::post('cart/edit/{user_id}', function ( \Illuminate\Http\Request $request, $user_id) {
        for($i = 0; $i < count($request->id); $i++){
            $cart = \App\Cart::find($request->id[$i]);
            $cart->quantity = $request->quantity[$i];
            $cart->save();
        }

        return redirect()->back();
    });

    Route::get('check/{user_id}', function($user_id){
    	$cart = \App\Cart::all();
    	$mycart = \App\Cart::all();
    	$produk = \App\produk::orderBy('created_at','desc')->paginate(5);
    	return view('Frontend.checkout',compact('cart','produk','mycart'));

    });

    Route::post('checkout/{user_id}',function( \Illuminate\Http\Request $request, $user_id){
        $request->validate([
        	'nama' => 'required|',
        	'nama_lengkap' => 'required|',
        	'email' => 'required|',
        	'no_tlp' => 'required|',
        	'alamat' => 'required|',
            'kota_kab' => 'required|',
            'prov' => 'required|',
            'kode_pos' => 'required|',
            'catatan' => 'required|',
            'bukti_transfer' => 'required|',
            'produk_id' => 'required|',
        ]);
        // dd(json_decode($request->chart));
        foreach(json_decode($request->chart) as $data){

            $transaksi = new \App\Transaksi;
            $transaksi->nama = $request->nama;
            $transaksi->nama_lengkap = $request->nama_lengkap;
            $transaksi->email = $request->email;
            $transaksi->no_tlp = $request->no_tlp;
            $transaksi->pengiriman = $request->pengiriman;
            $transaksi->jumlah_brg = $data->jumlah_brg;
            $transaksi->pembayaran = $request->pembayaran;
            $transaksi->product_id = $data->product_id;
            $transaksi->user_id = \Auth::user()->id;

            $transaksi->save();
        }

        $del = \App\Cart::where('user_id', $user_id)->delete();

        return redirect()->back();
    });

});