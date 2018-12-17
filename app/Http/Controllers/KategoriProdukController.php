<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $kategori = KategoriProduk::all();
            // return Datatables::of($kategori)->make(true);
            return Datatables::of($kategori)
                ->addColumn('action', function($kategori){
            return view('datatable._action', [
                'model' => $kategori,
                'form_url' => route('kategoriproduk.destroy', $kategori->id),
                'edit_url' => route('kategoriproduk.edit', $kategori->id),
                'confirm_message' => 'Yakin mau menghapus Merk ' . $kategori->nama . '?'
            ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'NAMA'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'AKSI', 'orderable'=>false, 'searchable'=>false]);
            return view('kategoriproduk.index')->with(compact('html'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = KategoriProduk::all();
        return view('kategoriproduk.create',compact('a'));
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
        ]);
        $a = new kategoriProduk;
        $a->nama = $request->nama;
        $a->slug = str_slug($request->nama,'-');
        $a->save();
        return redirect()->route('kategoriproduk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriProduk $kategoriProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = KategoriProduk::findOrFail($id);
        return view('kategoriproduk.edit',compact('b'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $b = KategoriProduk::findOrFail($id);
        $b->nama = $request->nama;
        $b->slug = str_slug($request->nama,'-');
        $b->save();
        return redirect()->route('kategoriproduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriProduk  $kategoriProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = KategoriProduk::findOrFail($id);
        $a->delete();
        return redirect()->route('kategoriproduk.index');
    }
}
