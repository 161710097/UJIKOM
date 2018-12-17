@extends('layouts.admin')
@section('content')
<header class="page-header">
  <div class="d-flex align-items-center">
    <div class="mr-auto">
      <h1 class="separator">TESTIMONI</h1>
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
            <center>TAMBAH DATA TESTIMONI</center>
          </h2>
          <div class="modal-footer">
          </div>
          <form action="{{ route('testimoni.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
              <label>FOTO</label>
              <input  value="" name="foto" type="file" accept="image/*"  onchange="showMyImage(this)" />
              <br/>
              <img id="thumbnil" style="width:20%; margin-top:10px;"  src="" alt="image"/>
              @if ($errors->has('foto'))
              <span class="help-block">
              <strong>{{ $errors->first('foto') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
              <label class="control-label">NAMA</label> 
              <input type="text" name="nama" class="form-control" placeholder="Masukan Nama"  required>
              @if ($errors->has('nama'))
              <span class="help-block">
              <strong>{{ $errors->first('nama') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group {{ $errors->has('profesi') ? ' has-error' : '' }}">
              <label class="control-label">PROFESI</label> 
              <input type="text" name="profesi" placeholder="Masukan Nama Profesi" class="form-control"  required>
              @if ($errors->has('profesi'))
              <span class="help-block">
              <strong>{{ $errors->first('profesi') }}</strong>
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