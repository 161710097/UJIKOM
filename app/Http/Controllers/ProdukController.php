<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Merk;
use App\KategoriProduk;
use Session;
use File;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $produk = Produk::with('kategoriproduk','merk');
            return Datatables::of($produk)
                ->addColumn('action', function($produk){
            return view('datatable._action', [
                'model' => $produk,
                'form_url' => route('produk.destroy', $produk->id),
                'edit_url' => route('produk.edit', $produk->id),
                'confirm_message' => 'Yakin mau menghapus Merk ' . $produk->judul . '?'
            ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'NAMA BARANG'])
        ->addColumn(['data' => 'merk.nama', 'name'=>'merk.nama', 'title'=>'MERK'])
        ->addColumn(['data' => 'kategoriproduk.nama', 'name'=>'kategoriproduk.nama', 'title'=>'KATEGORI'])
        ->addColumn(['data' => 'harga', 'name'=>'harga', 'title'=>'HARGA'])
        ->addColumn(['data' => 'stock', 'name'=>'stock', 'title'=>'STOCK'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'AKSI', 'orderable'=>false, 'searchable'=>false]);
            return view('produk.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Produk::all();
        $merk = Merk::all();
        $kategori = KategoriProduk::all();
        return view('produk.create', compact('merk','barang','kategori'));
    }
    public function publish($id)
    {
        $barang = Produk::find($id);
        if ($barang->status === 1) {
            $barang->status = 0;
            Alert::success('Data successfully unpublished', 'Good Job')->autoclose(2000);
        } else {
            $barang->status= 1;
            Alert::success('Data successfully unpublished', 'Good Job')->autoclose(2000);
        }
        $barang->save();
        return redirect()->route('produk.index');
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
            'nama' => 'required|',
            'merk_id' => 'required|',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|',
            'kategori_id' => 'required|',
            'stock' => 'required|'
        ]);
            
        $barang = new Produk;
        $barang->nama = $request->nama;
        $barang->merk_id = $request->merk_id;
        $barang->harga = str_replace(".","" ,$request->harga);
        $barang->deskripsi = $request->deskripsi;
        $barang->kategori_id = $request->kategori_id;
        $barang->stock = $request->stock;
        $barang->slug = str_slug($request->nama,'-');
        $barang->save();
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Produk::findOrFail($id);
        $merk = Merk::all();
        $merkselect = Produk::findOrFail($id)->merk_id;
        $kategori = KategoriProduk::all();
        $kategoriselect = Produk::findOrFail($id)->kategori_id;
        return view('produk.edit',compact('barang','merk','merkselect','kategori','kategoriselect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $b = Produk::findOrFail($id);
        $b->nama = $request->nama;
        $b->merk_id = $request->merk_id;
        $b->harga = $request->harga;
        $b->deskripsi = $request->deskripsi;
        $b->stock = $request->stock;
        $b->slug = str_slug($request->nama,'-');
        $b->kategori_id = $request->kategori_id;
        $b->save();
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Produk::findOrFail($id);
        $a->delete();
        return redirect()->route('produk.index');
    }
}
