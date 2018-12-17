@extends('layouts.admin')
@section('content')
<header class="page-header">
  <div class="d-flex align-items-center">
    <div class="mr-auto">
      <h1 class="separator">FOTO PRODUK</h1>
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
            <center>EDIT DATA FOTO PRODUK</center>
          </h2>
          <div class="modal-footer">
          </div>
          <form action="{{ route('fotoproduk.update',$b->id) }}" class="form" method="post" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('produk_id') ? 'has error' : '' }}">
              <label class="control-label">NAMA PRODUK</label>
              <select name="produk_id" class="js-selectize">
                @foreach($barang as $data)
                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                @endforeach
              </select>
              @if ($errors->has('barang'))
              <span class="help-block">
              <strong>{{ $errors->first('barang') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Foto</label><br>
              <input name="foto" type="file" value="{{ $b->foto }}">
              @if (isset($b) && $b->foto)
              <p>
                <br>
                <img src="{{ asset('assets/images/fotobarang/'.$b->foto) }}" style="max-height:125px;max-width:125px;margin-top:7px; ">
              </p>
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