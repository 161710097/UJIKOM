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
      <br>
      <h2 class="card-heading">
        <center><b>TABEL DATA ARTIKEL</b></center>
      </h2>
      <h5 class="card-header">
        <div class="col-20">
          <a href="{{route('artikel.create')}}">
          <button type="button" class="btn btn-primary btn-rounded btn-floating btn-outline" data-toggle="modal" >
          TAMBAH
          </button>
          </a>
        </div>
        <div id="search-10" class="widget_search">
          <form role="search" method="get" action="{{url('admin/artikel')}}">
            <div style="text-align: right;">
              <input  placeholder="Cari Data Artikel" class="" type="text" value="" name="search" id="s">
              <button type="submit"><i class="glyphicon glyphicon-search">Search</i></button>
            </div>
          </form>
        </div>
      </h5>
      <div class="card-body">
        <div class="table-responsive">
          {!! $html->table(['class'=>'table table-bordered->responsive']) !!}
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>
</div>
@endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection