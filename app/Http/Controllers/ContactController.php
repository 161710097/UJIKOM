<?php

namespace App\Http\Controllers;

use App\Contact;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $testimoni = Contact::all();
            // return Datatables::of($testimoni)->make(true);
            return Datatables::of($testimoni)
                ->addColumn('action', function($testimoni){
            return view('datatable._action', [
                'model' => $testimoni,
                'form_url' => route('testimoni.destroy', $testimoni->id),
                'edit_url' => route('testimoni.edit', $testimoni->id),
                'confirm_message' => 'Yakin mau menghapus Merk ' . $testimoni->name . '?'
            ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'alamat', 'name'=>'alamat', 'title'=>'ALAMAT'])
        ->addColumn(['data' => 'phone', 'name'=>'phone', 'title'=>'PHONE'])
        ->addColumn(['data' => 'email', 'name'=>'email', 'title'=>'EMAIL'])
        ->addColumn(['data' => 'hari_kerja', 'name'=>'hari_kerja', 'title'=>'HARI KERJA'])
        ->addColumn(['data' => 'tutup_kerja', 'name'=>'tutup_kerja', 'title'=>'TUTUP KERJA'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'AKSI', 'orderable'=>false, 'searchable'=>false]);
            return view('contact.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = Contact::findOrFail($id);
        return view('contact.edit',compact('b'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $a = Contact::findOrFail($id);
        $a->alamat = $request->alamat;
        $a->phone = $request->phone;
        $a->email = $request->email;
        $a->hari_kerja = $request->hari_kerja;
        $a->tutup_kerja = $request->tutup_kerja;
        $a->jam_kerja = $request->jam_kerja;
        $a->save();
        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
