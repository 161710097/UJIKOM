<?php

namespace App\Http\Controllers;

use App\Cart;
use App\user;
use App\Produk;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::all();
        return view('cart.index',compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'user_id' => 'required|',
            'produk_id'=> 'required',
            'quantity' => 'required'
        ]);
        $a = new Cart;
        $barang = Produk::find($request->produk_id);
        $a->user_id = $request->user_id;
        $a->produk_id = $request->produk_id;
        $a->quantity = $request->quantity;
        $a->total_harga = $request->quantity * $barang->harga;
        $barang->stock = $barang->stock - $request->quantity;
        $barang->save();
        $a->save();
        return response()->json(['success'=>true]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cart = Cart::find($request->input('id'));
        $cart->delete();
        return redirect()->route('mycart');
    }
}
