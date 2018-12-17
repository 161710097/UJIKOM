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

class FrontendController extends Controller
{
    public function home()
    {
    	
    	$produk = Produk::orderBy('created_at','desc')->paginate(6);
    	$kategoriproduk = KategoriProduk::all();
    	$kategoriartikel = KategoriArtikel::all();
    	$testimoni = Testimoni::all();
    	$contact = Contact::all();
    	$merk = Merk::all();
    	$artikel = Artikel::orderBy('created_at', 'desc')->paginate(3);

    	return view('Frontend.home',compact('merk','testimoni','produk','kategoriproduk','kategoriartikel','artikel','slide','contact')); 
    }

    public function artikel()
    {
    	
    	$artikel = Artikel::all();
		$contact = Contact::all();

    	return view('Frontend.blog',compact('artikel','contact')); 
    }

    public function detailartikel(Artikel $berita)
    {
        // $berita = Artikel::findOrFail($id);
        $previous = Artikel::where('id', '<', $berita->id)->orderBy('id', 'desc')->first();
        $next = Artikel::where('id', '>', $berita->id)->orderBy('id')->first();
        $related = Artikel::where('kategori_id',$berita->kategori_id)->orderBy('created_at','desc')->take(4)->get();
        $contact = Contact::all();
        return view ('Frontend.detailartikel',compact('berita','contact','previous','next','related'));
    }

    public function artikelkategori(KategoriArtikel $kategori)
    {
        $contact = Contact::all();
        $artikel = $kategori->Artikel()->latest()->paginate(5);
        return view('Frontend.blog', compact('artikel','contact'));
    }

    public function produk(Request $request)
    {
        $search = $request->get('search');
    	$produk = Produk::where('nama','LIKE','%'.$search.'%')->orderBy('created_at','desc')->paginate(6);
        $contact = Contact::all();
        return view ('Frontend.produk', compact('produk','contact','search')); 
    }

    public function detailproduk(Produk $produk)
    {
        // $barang = Barang::findOrFail($id);
        $contact = Contact::all();
        $related = Produk::where('kategori_id',$produk->kategori_id)->orderBy('created_at','desc')->take(4)->get();
        return view ('Frontend.detailproduk',compact('produk','contact','related'));
    }

    public function produkartikel(KategoriProduk $kategori)
    {
        $contact = Contact::all();
        $produk = $kategori->Produk()->latest()->paginate(5);
        return view('Frontend.produk', compact('produk','contact'));
    }

    public function cart()
    {
    	
    	$artikel = Artikel::all();
		$contact = Contact::all();

    	return view('Frontend.mycart',compact('artikel','contact')); 
    }

    public function about()
    {
    	$contact = Contact::all();

    	return view('Frontend.aboutus', compact('contact'));
    }
}
