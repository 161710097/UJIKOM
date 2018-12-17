@extends('layouts.admin')
@section('content')
<header class="page-header">
  <div class="d-flex align-items-center">
    <div class="mr-auto">
      <h1 class="separator">KATEGORI ARTIKEL</h1>
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
            <center>TAMBAH DATA KATEGORI ARTIKEL</center>
          </h2>
          <div class="modal-footer">
          </div>
          <form action="{{ route('kategoriartikel.store') }}" class="form" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('a') ? ' has-error' : '' }}">
              <div class="form-group">
                <label>NAMA KATEGORI ARTIKEL</label>
                <input placeholder="Masukan Nama Kategori Artikel" type="text" class="form-control" autocomplete="name" name="nama" required>
              </div>
              @if ($errors->has('a'))
              <span class="help-block">
              <strong>{{ $errors->first('a') }}</strong>
              </span>
              @endif
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
              </div>
            </div>
          </form>
        </div>
    </h5>
    </div>
  </div>
</section>
@endsection