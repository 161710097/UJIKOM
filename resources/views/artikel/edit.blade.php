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
            <center>EDIT DATA ARTIKEL</center>
          </h2>
          <div class="modal-footer">
          </div>
          <form action="{{ route('artikel.update',$b->id) }}" class="form" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PATCH">
            <div class="form-group {{ $errors->has('cover') ? ' has-error' : '' }}">
              <label>COVER</label>
              <input  value="{{ asset('admin/images/cover/'.$b->cover )}}" name="cover" type="file" accept="image/*"  onchange="showMyImage(this)" />
              <br/>
              <img id="thumbnil" style="width:20%; margin-top:10px;"  src="" alt="image"/>
              @if ($errors->has('cover'))
              <span class="help-block">
              <strong>{{ $errors->first('cover') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group {{ $errors->has('pembuat') ? 'has error' : '' }}">
              <label>PEMBUAT</label>
              <input value="{{$b->pembuat}}" type="text" class="form-control" autocomplete="name" name="pembuat" required>
              @if ($errors->has('pembuat'))
              <span class="help-block">
              <strong>{{ $errors->first('pembuat') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group {{ $errors->has('kategori_id') ? 'has error' : '' }}">
              <label class="control-label">KATEGORI ARTIKEL</label>
              <select name="kategori_id" class="js-selectize">
                @foreach($kategori as $data)
                <option value="{{ $data->id }}"> {{ $kategoriselect == $data->id ? '' : '' }} {{ $data->nama }}</option>
                @endforeach
              </select>
              @if ($errors->has('kategoriartikel'))
              <span class="help-block">
              <strong>{{ $errors->first('kategoriartikel') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group {{ $errors->has('judul') ? 'has error' : '' }}">
              <label>JUDUL</label>
              <input value="{{$b->judul}}" type="text" class="form-control" autocomplete="name" name="judul" required>
              @if ($errors->has('judul'))
              <span class="help-block">
              <strong>{{ $errors->first('judul') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group {{ $errors->has('deskripsi') ? 'has error' : '' }}">
              <label>ISI</label><br>
              <textarea class="form-control" name="deskripsi" required>{{$b->deskripsi}}</textarea>
              @if ($errors->has('deskripsi'))
              <span class="help-block">
              <strong>{{ $errors->first('deskripsi') }}</strong>
              </span>
              @endif
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">SIMPAN PERUBAHAN</button>
            </div>
          </form>
        </div>
    </h5>
    </div>
  </div>
</section>
@endsection