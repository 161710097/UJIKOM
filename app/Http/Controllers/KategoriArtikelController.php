<?php

namespace App\Http\Controllers;

use App\KategoriArtikel;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class KategoriArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $kategori = KategoriArtikel::all();
            // return Datatables::of($kategori)->make(true);
            return Datatables::of($kategori)
                ->addColumn('action', function($kategori){
            return view('datatable._action', [
                'model' => $kategori,
                'form_url' => route('kategoriartikel.destroy', $kategori->id),
                'edit_url' => route('kategoriartikel.edit', $kategori->id),
                'confirm_message' => 'Yakin mau menghapus Merk ' . $kategori->name . '?'
            ]);
            })->make(true);
        }
        
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'NAMA'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'AKSI', 'orderable'=>false, 'searchable'=>false]);
            return view('kategoriartikel.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kategoriartikel.create');
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
        $a = new KategoriArtikel;
        $a->nama = $request->nama;
        $a->slug = str_slug($request->nama,'-');
        $a->save();
        return redirect()->route('kategoriartikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriArtikel $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = KategoriArtikel::findOrFail($id);
        return view('kategoriartikel.edit',compact('b'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $b = KategoriArtikel::findOrFail($id);
        $b->nama = $request->nama;
        $b->slug = str_slug($request->nama,'-');
        $b->save();
        return redirect()->route('kategoriartikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriArtikel  $kategoriArtikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = KategoriArtikel::findOrFail($id);
        $a->delete();
        return redirect()->route('kategoriartikel.index');
    }
}
