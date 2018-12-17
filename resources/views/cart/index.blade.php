@extends('layouts.admin')
@section('content')
<header class="page-header">
  <div class="d-flex align-items-center">
    <div class="mr-auto">
      <h1 class="separator">CART</h1>
      <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
      </nav>
    </div>
  </div>
</header>
<section class="page-content container-fluid">
  <div class="card-deck m-b-30">
    <div class="card">
      <br>
      <h2 class="card-heading">
        <center>TABEL DATA CART</center>
        <span class="glyphicon glyphicon-trash"></span>
      </h2>
      <h5 class="card-header">
        <div class="col-20">
          <a href="{{route('cart.create')}}">
          <button type="button" class="btn btn-primary btn-rounded btn-floating btn-outline" data-toggle="modal" data-target="#exampleModal">
          TAMBAH
          </button>
          </a>
          <!-- <a class="btn btn-primary btn-rounded btn-floating btn-outline" href="{{ url('/admin/export/barang') }}">Export</a> -->                   
        </div>
        <div id="search-10" class="widget_search">
          <form role="search" method="get" action="{{url('admin/barang')}}">
            <div style="text-align: right;">
              <input  placeholder="Cari Data Barang" class="" type="text" value="" name="search" id="s">
              <button type="submit"><i class="glyphicon glyphicon-search">Search</i></button>
            </div>
          </form>
        </div>
      </h5>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>NAMA MEMBER</th>
                <th>EMAIL MEMBER</th>
                <th>NAMA PRODUK</th>
                <th>JUMLAH</th>
                <th colspan="3">
                  <center>AKSI</center>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr role="row" class="odd">
                <?php $nomor = 1; ?>
                @php $no = 1; @endphp
                @foreach($cart as $data)
                <td>{{ $no++ }}</td>
                <td>{{ $data->user->name }}</td>
                <td>{{ $data->user->email }}</td>
                <td>{{ $data->produk->nama }}</td>
                <td>{{ $data->jumlah }}</td>
                <td>
                  <center>
                    <a href="{{ route('cart.edit',$data->id) }}">
                    <button type="button" class="btn btn-warning btn-rounded btn-floating btn-outline" data-toggle="modal" data-target=".bd-example-modal-lg">
                    EDIT
                    </button>
                    </a>
                  </center>
                </td>
                <td>
                  <center>
                    <form method="post" action="{{ route('cart.destroy',$data->id) }}">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger btn-rounded btn-floating btn-outline js-submit-confirm" data-toggle="modal" data-target=".bd-example-modal-lg">
                      HAPUS
                      </button>
                      <span class="mdl-button__ripple-container">
                      <span class="mdl-ripple"></span>
                      </span>
                    </form>
                  </center>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>
</div>
<!-- <script type="text/javascript">
  (function(document) {
  'use strict';
  
  var LightTableFilter = (function(Arr) {
  
  var _input;
  
  function _onInputEvent(e) {
   _input = e.target;
   var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
   Arr.forEach.call(tables, function(table) {
    Arr.forEach.call(table.tBodies, function(tbody) {
     Arr.forEach.call(tbody.rows, _filter);
    });
   });
  }
  
  function _filter(row) {
   var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
   row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
  }
  
  return {
   init: function() {
    var inputs = document.getElementsByClassName('light-table-filter');
    Arr.forEach.call(inputs, function(input) {
     input.oninput = _onInputEvent;
    });
   }
  };
  })(Array.prototype);
  
  document.addEventListener('readystatechange', function() {
  if (document.readyState === 'complete') {
   LightTableFilter.init();
  }
  });
  
  })(document);
  
  
  Sumber : http://jintoples.blogspot.com/2014/08/cara-membuat-tabel-search-dengan.html#ixzz5SHrnhR7t 
  Follow us: @jin_toples on Twitter | JinToplesBlogger on Facebook
</script> -->
@endsection