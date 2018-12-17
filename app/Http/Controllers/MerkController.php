<?php

namespace App\Http\Controllers;

use App\Merk;
use Session;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use File;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $merk = Merk::all();
            // return Datatables::of($merk)->make(true);
            return Datatables::of($merk)
                ->addColumn('action', function($merk){
            return view('datatable._action', [
                'model' => $merk,
                'form_url' => route('merk.destroy', $merk->id),
                'edit_url' => route('merk.edit', $merk->id),
                'confirm_message' => 'Yakin mau menghapus Merk ' . $merk->name . '?'
            ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'NAMA'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'AKSI', 'orderable'=>false, 'searchable'=>false]);
            return view('merk.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('merk.create');
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
            'nama' => 'required|unique:merks'
        ]);
        $a = new Merk;
        $a->nama = $request->nama;
        //upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/admin/images/logomerk/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $a->foto = $filename;
            }
        $a->save();
        return redirect()->route('merk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show(Merk $merk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = merk::findOrFail($id);
        return view('merk.edit',compact('b'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $b = merk::findOrFail($id);
        $b->nama = $request->nama;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/admin/images/logomerk/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($b->foto) {
        $old_foto = $b->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR .'/admin/images/logomerk/'
        . DIRECTORY_SEPARATOR . $b->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $b->foto = $filename;
    }
        $b->save();
        return redirect()->route('merk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Merk::findOrFail($id);
         if ($a->foto) {
            $old_foto = $a->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'admin/images/logomerk/'
            . DIRECTORY_SEPARATOR . $a->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $a->delete();
        return redirect()->route('merk.index');
    }
}
