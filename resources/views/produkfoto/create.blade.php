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
              <center>TAMBAH DATA FOTO PRODUK</center>
            </h2>
            <div class="modal-footer">
            </div>
            <form action="{{ route('fotoproduk.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group {{ $errors->has('produk_id') ? 'has error' : '' }}">
                <label class="control-label">NAMA PRODUK</label>
                <select name="produk_id" class="js-selectize">
                  <option>-</option>
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
              <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
                <label>FOTO</label>
                <input name="foto[]" type="file" id="foto" accept="image/*"  onchange="showMyImage(this)" multiple />
                <br/>
                <img id="thumbnil" style="width:20%; margin-top:10px;"  src="" alt="image"/>
                @if ($errors->has('foto'))
                <span class="help-block">
                <strong>{{ $errors->first('foto') }}</strong>
                </span>
                @endif
              </div>
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