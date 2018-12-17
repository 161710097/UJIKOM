@extends('layouts.admin')
@section('content')
<header class="page-header">
  <div class="d-flex align-items-center">
    <div class="mr-auto">
      <h1 class="separator">MERK</h1>
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
          <h2 class="card-heading">
            <center>TABEL DATA MERK</center>
          </h2>
          <a href="{{route('merk.create')}}">
          <button type="button" class="btn btn-primary btn-rounded btn-floating btn-outline" data-toggle="modal" >
          TAMBAH
          </button>
          </a>
        </div>
        <div id="search-10" class="widget_search">
          <form role="search" method="get" action="{{url('admin/merk')}}">
            <div style="text-align: right;">
            <input  placeholder="Cari Data Merk" class="" type="text" value="" name="search" id="s">
            <button type="submit"><i class="glyphicon glyphicon-search">Search</i></button>
            </div>
          </form>
        </div>  
      </h5>
      <div class="card-body">
        <div class="table-responsive">
          {!! $html->table(['class'=>'table table-bordered']) !!}
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>
</div>
@push('scripts')
@endpush
<script type="text/javascript">
  $('#sweetalert_demo_9').on('click', function(e) {
      swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false,
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          swal(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        } else if (
          // Read more about handling dismissals
          result.dismiss === swal.DismissReason.cancel
        ) {
          swal(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
          )
        }
      })
    });
</script>
@endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection