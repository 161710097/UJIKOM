<?php

namespace App\Http\Controllers;

use App\Testimoni;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\DataTables;
use File;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $testimoni = Testimoni::all();
            // return Datatables::of($testimoni)->make(true);
            return Datatables::of($testimoni)
                ->addColumn('action', function($testimoni){
            return view('datatable._action', [
                'model' => $testimoni,
                'form_url' => route('testimoni.destroy', $testimoni->id),
                'edit_url' => route('testimoni.edit', $testimoni->id),
                'confirm_message' => 'Yakin mau menghapus Testimoni? ' . $testimoni->name . '?'
            ]);
            })
                ->make(true);
        }
        
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'NAMA'])
        ->addColumn(['data' => 'profesi', 'name'=>'profesi', 'title'=>'PROFESI'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'AKSI', 'orderable'=>false, 'searchable'=>false]);
            return view('testimoni.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('testimoni.create');
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
            'nama' => 'required|unique:testimonis',
            'profesi' => 'required',
            'deskripsi' => 'required|'
        ]);
        $testimoni = new Testimoni;
        // upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/admin/images/fototestimoni/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $testimoni->foto = $filename;
            }
        $testimoni->nama = $request->nama;
        $testimoni->profesi = $request->profesi;
        $testimoni->deskripsi = $request->deskripsi;
        $testimoni->save();
        return redirect()->route('testimoni.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = Testimoni::findOrFail($id);
        return view('testimoni.edit',compact('b'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $b = Testimoni::findOrFail($id);
        $b->nama = $request->nama;
        $b->profesi = $request->profesi;
        $b->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/admin/images/fototestimoni/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus logo lama, jika ada
        if ($b->foto) {
        $old_foto = $b->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR .'/admin/images/fototestimoni/'
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
        return redirect()->route('testimoni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Testimoni::findOrFail($id);
         if ($a->foto) {
            $old_foto = $a->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/images/fototestimoni/'
            . DIRECTORY_SEPARATOR . $a->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $a->delete();
        return redirect()->route('testimoni.index');
    }
}
