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
          <!-- Button trigger modal -->
          <h2 class="card-heading">
            <center>TABEL DATA CONTACT</center>
          </h2>
        </div>
      </h5>
      <div class="card-body">
        <div class="table-responsive">
          {!! $html->table(['class'=>'table table-bordered-responsive']) !!}
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