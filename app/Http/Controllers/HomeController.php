<?php

namespace App\Http\Controllers;
use App\Produk;
use App\Merk;
use App\Artikel;
use App\KategoriArtikel;
use App\KategoriProduk;
use App\Testimoni;
use App\Contact;
use App\Cart;
use Auth;
use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Laratrust::hasRole('admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('member')) return $this->memberDashboard();
    }

    protected function adminDashboard()
    {
        return view('dashboard.admin');
    }
    protected function memberDashboard()
    {
        $produk =Produk::all();
        $merk = Merk::all();
        $artikel =Artikel::all();
        $testimoni = Testimoni::all();
        $contact = Contact::all();
        $cart = Cart::all();
        $mycart = Auth::user()->cart()->get();
        return view('Frontend.home',compact('mycart','cart','produk','contact','merk','artikel','testimoni'));
    }
}
