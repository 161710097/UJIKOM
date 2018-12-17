@extends('layouts.admin')
@section('content')
<header class="page-header">
  <div class="d-flex align-items-center">
    <div class="mr-auto">
      <h1 class="separator">ARTIKEL</h1>
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
            <center>TAMBAH DATA ARTIKEL</center>
          </h2>
          <div class="modal-footer">
          </div>
          <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('cover') ? ' has-error' : '' }}">
              <label>COVER</label>
              <input  value="" name="cover" type="file" accept="image/*"  onchange="showMyImage(this)" />
              <br/>
              <img id="thumbnil" style="width:20%; margin-top:10px;"  src="" alt="image"/>
              @if ($errors->has('cover'))
              <span class="help-block">
              <strong>{{ $errors->first('cover') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group {{ $errors->has('pembuat') ? ' has-error' : '' }}">
              <label class="control-label">PEMBUAT ARTIKEL</label> 
              <input type="text" name="pembuat" class="form-control" placeholder="Masukan Nama Penulis"  required>
              @if ($errors->has('pembuat'))
              <span class="help-block">
              <strong>{{ $errors->first('pembuat') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group {{ $errors->has('kategori_id') ? 'has error' : '' }}">
              <label class="control-label">KATEGORI</label>
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
            <div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
              <label class="control-label">JUDUL</label> 
              <input type="text" name="judul" placeholder="Masukan Nama Judul" class="form-control"  required>
              @if ($errors->has('judul'))
              <span class="help-block">
              <strong>{{ $errors->first('judul') }}</strong>
              </span>
              @endif
            </div>
            
            <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
              <label class="control-label">ISI</label> 
              <textarea placeholder="Masukan Deskripsi" class="form-control" name="deskripsi"></textarea>
              @if ($errors->has('deskripsi'))
              <span class="help-block">
              <strong>{{ $errors->first('deskripsi') }}</strong>
              </span>
              @endif
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
          </form>
        </div>
    </h5>
    </div>
  </div>
</section>
@endsection