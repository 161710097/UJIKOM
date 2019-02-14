	@extends('layouts.admin')
@section('content')
<header class="page-header">
  <div class="d-flex align-items-center">
    <div class="mr-auto">
      <h1 class="separator">PRODUK</h1>
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
            <center>TAMBAH DATA PRODUK</center>
          </h2>
          <div class="modal-footer">
          </div>
          <form action="{{ route('produk.store') }}" class="form" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('a') ? ' has-error' : '' }}">
              <div class="form-group">
                <label>NAMA</label>
                <input placeholder="Masukan Nama Barang Beserta Type" type="text" class="form-control" autocomplete="name" name="nama" required>
              </div>
              <div class="form-group {{ $errors->has('merk_id') ? 'has error' : '' }}">
                <label class="control-label">Merk</label>
                <select name="merk_id" class="js-selectize">
                  <option>-</option>
                  @foreach($merk as $data)
                  <option value="{{ $data->id }}">{{ $data->nama }}</option>
                  @endforeach
                </select>
                @if ($errors->has('merk'))
                <span class="help-block">
                <strong>{{ $errors->first('merk') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group">
                <label>HARGA</label>
                <input placeholder="Masukan Harga" onkeypress="return number(event)" id="harga" type="text" class="form-control" autocomplete="name" name="harga" required>
                <input type="hidden" id="raw_harga_beli" value="" name="harga">
              </div>
              <div class="form-group">
                <label>DISKON</label>
                <input placeholder="Masukan Diskon" type="text" class="form-control" autocomplete="name" name="diskon" required>
              </div>
              <div class="form-group">
                <label>STOCK</label>
                <input placeholder="Masukan Stock" type="number" class="form-control" autocomplete="name" name="stock" required>
              </div>
              <div class="form-group {{ $errors->has('kategori_id') ? 'has error' : '' }}">
                <label class="control-label">KATEGORI BARANG</label>
                <select name="kategori_id" class="js-selectize">
                  <option>-</option>
                  @foreach($kategori as $data)
                  <option value="{{ $data->id }}">{{ $data->nama }}</option>
                  @endforeach
                </select>
                @if ($errors->has('kategori'))
                <span class="help-block">
                <strong>{{ $errors->first('kategori') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                <label class="control-label">DESKRIPSI</label> 
                <textarea placeholder="Masukan Deskripsi" class="form-control" name="deskripsi"></textarea>
                @if ($errors->has('deskripsi'))
                <span class="help-block">
                <strong>{{ $errors->first('deskripsi') }}</strong>
                </span>
                @endif
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
<!-- <script type="text/javascript">
  /* Tanpa Rupiah */
  var tanpa_rupiah = document.getElementById('tanpa-rupiah');
  tanpa_rupiah.addEventListener('keyup', function(e)
  {
    tanpa_rupiah.value = formatRupiah(this.value);
  });
  
  /* Fungsi */
  function formatRupiah(angka, prefix)
  {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa  = split[0].length % 3,
      rupiah  = split[0].substr(0, sisa),
      ribuan  = split[0].substr(sisa).match(/\d{3}/gi);
      
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }
  </script> -->