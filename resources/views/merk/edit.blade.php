@extends('layouts.admin')
@section('content')
<header class="page-header">
  <div class="d-flex align-items-center">
    <div class="mr-auto">
      <h1 class="separator">MERK</h1>
      <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
      </nav>
    </div>
  </div>
</header>
<section class="page-content container-fluid">
  <div class="card-deck m-b-30">
  <div class="card">
    <h5 class="card-header">
      <div class="col-20">
        <div class="card-body">
          <a href="javascript:history.go(-1)">
          <button class="btn btn-warning">
          Kembali Kehalaman Sebelumnya
          </button>
          </a>
          <h2 class="card-heading">
            <center>EDIT DATA MERK</center>
          </h2>
          <div class="modal-footer">
          </div>
          <form action="{{ route('merk.update',$b->id) }}" class="form" method="post" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
            {{ csrf_field() }}
            <div class="form-group">
              <label>NAMA</label>
              <input type="text" class="form-control" autocomplete="name" name="nama" value="{{ $b->nama }}" >
            </div>
            <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
              <label>FOTO</label>
              <input  value="{{ asset('assets/images/logomerk/'.$b->foto )}}" name="foto" type="file" accept="image/*"  onchange="showMyImage(this)" />
              <br/>
              <img id="thumbnil" style="width:20%; margin-top:10px;"  src="" alt="image"/>
               @if ($errors->has('foto'))
                <span class="help-block">
                <strong>{{ $errors->first('foto') }}</strong>
                </span>
                @endif
              </div>
            @if ($errors->has('b'))
            <span class="help-block">
            <strong>{{ $errors->first('b') }}</strong>
            </span>
            @endif
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">
              Simpan Perubahan
              </button>
            </div>
          </form>
        </div>
    </h5>
    </div>
  </div>
</section>

@endsection