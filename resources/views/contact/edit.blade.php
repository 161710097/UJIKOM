@extends('layouts.admin')
@section('content')
<header class="page-header">
  <div class="d-flex align-items-center">
    <div class="mr-auto">
      <h1 class="separator">CONTACT</h1>
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
            <center>EDIT DATA CONTACT</center>
          </h2>
          <div class="modal-footer">
          </div>
          <form action="{{ route('contact.update',$b->id) }}" class="form" method="post" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
            {{ csrf_field() }}
            <div class="form-group">
              <label>ALAMAT</label>
              <textarea class="form-control" name="alamat">{{ $b->alamat }}</textarea>
            </div>
            <div class="form-group">
              <label>PHONE</label>
              <input type="number" class="form-control" autocomplete="name" name="phone" value="{{ $b->phone }}" >
            </div>
            <div class="form-group">
              <label>EMAIL</label>
              <input type="text" class="form-control" autocomplete="name" name="email" value="{{ $b->email }}" >
            </div>
            <div class="form-group">
              <label>HARI KERJA</label>
              <input type="text" class="form-control" autocomplete="name" name="hari_kerja" value="{{ $b->hari_kerja }}" >
            </div>
            <div class="form-group">
              <label>TUTUP</label>
              <input type="text" class="form-control" autocomplete="name" name="tutup_kerja" value="{{ $b->tutup_kerja }}" >
            </div>
            <div class="form-group">
              <label>JAM KERJA</label>
              <input type="text" class="form-control" autocomplete="name" name="jam_kerja" value="{{ $b->jam_kerja }}" >
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