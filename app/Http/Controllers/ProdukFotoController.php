<?php

namespace App\Http\Controllers;

use App\ProdukFoto;
use App\Produk;
use File;
use Illuminate\Http\Request;

class ProdukFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $a = ProdukFoto::whereHas('Produk',function($query) use ($request)
            {
                $search = $request->get('search');
                $query->where('nama','like','%'.$search.'%');
            })->orderBy('produk_id','desc')->paginate();
        return view('produkfoto.index',compact('a','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Produk::all();
        return view ('produkfoto.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            foreach ($request->foto as $foto) {
                $filename = $foto->getClientOriginalName();
                $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/admin/images/fotobarang/';
                $foto->move($destinationPath, $filename);
                $galeri = ProdukFoto::create($request->except('foto'));
                $galeri->foto = $filename;
                $galeri->save();
            }
        }
        return redirect()->route('fotoproduk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProdukFoto  $produkFoto
     * @return \Illuminate\Http\Response
     */
    public function show(ProdukFoto $produkFoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProdukFoto  $produkFoto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = ProdukFoto::findOrFail($id);
        $barang = Produk::all();
        return view('produkfoto.edit',compact('b','barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProdukFoto  $produkFoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'foto' => 'image|max:20048',
            'produk_id'=>'required'
        ]);
        $galeri = ProdukFoto::find($id);
        $galeri->produk_id = $request->produk_id;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/admin/images/fotobarang/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($galeri->foto) {
        $old_foto = $galeri->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR .'/admin/images/fotobarang/'
        . DIRECTORY_SEPARATOR . $galeri->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $galeri->foto = $filename;
    }
        $galeri->save();
        return redirect()->route('fotoproduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProdukFoto  $produkFoto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = ProdukFoto::findOrFail($id);
        if ($galeri->foto) {
            $old_foto = $galeri->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'admin/images/fotobarang/'
            . DIRECTORY_SEPARATOR . $galeri->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $galeri->delete();
        return redirect()->back();
    }
}
