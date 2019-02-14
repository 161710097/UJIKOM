<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Produk;
use App\KategoriProduk;
use App\KategoriArtikel;
use App\Testimoni;
use App\Contact;
use App\Merk;
use App\Cart;
use App\user;
use Auth;
use DB;

class FrontendController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('search');
        $produk = Produk::where('nama','LIKE','%'.$search.'%')->orderBy('created_at','desc')->paginate(6);
        $merk = Merk::all();
        $testimoni = Testimoni::all();
        $mycart = cart::all();
        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(3);
        $contact = Contact::all();
        return view ('Frontend.home', compact('artikel','testimoni','merk','mycart','produk','contact','search'));
    }

    public function home()
    {
    	$produk = Produk::orderBy('created_at','desc')->paginate(6);
    	$kategoriproduk = KategoriProduk::all();
    	$kategoriartikel = KategoriArtikel::all();
    	$testimoni = Testimoni::all();
    	$contact = Contact::all();
    	$merk = Merk::all();
    	$mycart = cart::all();
    	$artikel = Artikel::orderBy('created_at', 'desc')->paginate(3);

    	return view('Frontend.home',compact('mycart','merk','testimoni','produk','kategoriproduk','kategoriartikel','artikel','slide','contact')); 
    }

    public function artikel()
    {
    	$mycart = cart::all();
    	$artikel = Artikel::all();
		$contact = Contact::all();

    	return view('Frontend.blog',compact('mycart','artikel','contact')); 
    }

    public function detailartikel(Artikel $berita)
    {
        // $berita = Artikel::findOrFail($id);
        $mycart = cart::all();
        $previous = Artikel::where('id', '<', $berita->id)->orderBy('id', 'desc')->first();
        $next = Artikel::where('id', '>', $berita->id)->orderBy('id')->first();
        $related = Artikel::where('kategori_id',$berita->kategori_id)->orderBy('created_at','desc')->take(4)->get();
        $contact = Contact::all();
        return view ('Frontend.detailartikel',compact('mycart','berita','contact','previous','next','related'));
    }

    public function artikelkategori(KategoriArtikel $kategori)
    {
        $contact = Contact::all();
        $mycart = cart::all();
        $artikel = $kategori->Artikel()->latest()->paginate(5);
        return view('Frontend.blog', compact('mycart','artikel','contact'));
    }

    public function produk(Request $request)
    {
        $search = $request->get('search');
        $mycart = cart::all();
    	$produk = Produk::where('nama','LIKE','%'.$search.'%')->orderBy('created_at','desc')->paginate(6);
        $contact = Contact::all();
        return view ('Frontend.produk', compact('mycart','produk','contact','search')); 
    }

    public function detailproduk(Produk $produk)
    {
        // $barang = Barang::findOrFail($id);
        $contact = Contact::all();
        $mycart = cart::all();
        $related = Produk::where('kategori_id',$produk->kategori_id)->orderBy('created_at','desc')->take(4)->get();
        return view ('Frontend.detailproduk',compact('mycart','produk','contact','related'));
    }

    public function produkartikel(KategoriProduk $kategori)
    {
        $contact = Contact::all();
        $mycart = cart::all();
        $produk = $kategori->Produk()->latest()->paginate(5);
        return view('Frontend.produk', compact('mycart','produk','contact'));
    }

    public function cart()
    {
    	$mycart = cart::all();
    	$artikel = Artikel::all();
		$contact = Contact::all();

    	return view('Frontend.mycart',compact('mycart','artikel','contact')); 
    }

    public function about()
    {
    	$mycart = cart::all();
    	$contact = Contact::all();
    	return view('Frontend.aboutus', compact('contact','mycart'));
    }

    public function filter (Request $request)
    {
        if ($request->ajax()) {
            $start = $request->start;
            $end = $request->end;

            $produk = Produk::where('harga','>=', $start)->where('harga','>=', $end)->orderBy('harga', 'DECS')->paginate(6);
            dd($produk);
            return response()->json($produk);
        }
        else{
            echo "tidak ada";
        }
    }

    public function mycart()
    {
    	$mycart = Cart::where('user_id',Auth::user()->id)->select('user_id','produk_id',(DB::raw('sum(total_harga) as total_harga')),(DB::raw('sum(quantity) as quantity')))
    	->groupBy(DB::raw('(produk_id)'))
    	->get();
    	$contact = Contact::all();
    	$produk = Produk::all();
    	$cart = Cart::all();
    	
    	return view('Frontend.mycart', compact('contact','cart','mycart','produk'));	
    }
}
