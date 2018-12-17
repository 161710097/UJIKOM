<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\KategoriArtikel;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use File;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $artikel = Artikel::with('kategoriartikel');
            return Datatables::of($artikel)
                ->addColumn('action', function($artikel){
            return view('datatable._action', [
                'model' => $artikel,
                'form_url' => route('artikel.destroy', $artikel->id),
                'edit_url' => route('artikel.edit', $artikel->id),
                'confirm_message' => 'Yakin mau menghapus Merk ' . $artikel->judul . '?'
            ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'pembuat', 'name'=>'pembuat', 'title'=>'PEMBUAT'])
        ->addColumn(['data' => 'kategoriartikel.nama', 'name'=>'kategoriartikel.nama', 'title'=>'KATEGORI'])
        ->addColumn(['data' => 'judul', 'name'=>'judul', 'title'=>'JUDUL'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'AKSI', 'orderable'=>false, 'searchable'=>false]);
            return view('artikel.index')->with(compact('html'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikel = Artikel::all();
        $kategori = KategoriArtikel::all();
        return view('artikel.create', compact('artikel','kategori','tag'));
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
            'judul' => 'required|unique:artikels',
            'pembuat' => 'required',
            'deskripsi' => 'required|',
            'kategori_id' => 'required|'
        ]);
        $artikel = new Artikel;
        // upload cover
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $destinationPath = public_path().'/admin/images/cover/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $artikel->cover = $filename;
            }
        $artikel->judul = $request->judul;
        $artikel->pembuat = $request->pembuat;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->slug = str_slug($request->judul,'-');
        $artikel->kategori_id = $request->kategori_id;
        $artikel->save();
        return redirect()->route('artikel.index');
    }

    public function publish($id)
    {
        $mobil = Artikel::find($id);
        if ($mobil->status === 1) {
            $mobil->status = 0;
            // Alert::success('Data successfully unpublished', 'Good Job')->autoclose(2000);
        } else {
            $mobil->status= 1;
            // Alert::success('Data successfully published', 'Good Job')->autoclose(2000);
        }
        $mobil->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = Artikel::findOrFail($id);
        $kategori = KategoriArtikel::all();
        $kategoriselect = Artikel::findOrFail($id)->kategori_id;
        return view('artikel.edit',compact('b','kategori','kategoriselect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $b = Artikel::findOrFail($id);
        $b->kategori_id = $request->kategori_id;
        $b->pembuat = $request->pembuat;
        $b->judul = $request->judul;
        $b->deskripsi = $request->deskripsi;
        $b->slug = str_slug($request->judul,'-');
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $destinationPath = public_path().'/admin/images/cover/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus logo lama, jika ada
        if ($b->cover) {
        $old_cover = $b->cover;
        $filepath = public_path() . DIRECTORY_SEPARATOR .'/admin/images/cover/'
        . DIRECTORY_SEPARATOR . $b->cover;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $b->cover = $filename;
    }
        $b->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Artikel::findOrFail($id);
         if ($a->cover) {
            $old_cover = $a->cover;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'admin/images/cover/'
            . DIRECTORY_SEPARATOR . $a->cover;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $a->delete();
        return redirect()->route('artikel.index');
    }
}
