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
          <h2 class="card-heading">
            <center>TABEL DATA FOTO PRODUK</center>
          </h2>
          <!--  -->
        </div>
        <!-- <div id="search-10" class="widget_search">
          <form role="search" method="get" action="{{url('admin/fotoproduk')}}">
            <div style="text-align: right;">
              <input  placeholder="Cari Nama Barang" class="" type="text" value="" name="search" id="s">
              <button type="submit"><i class="glyphicon glyphicon-search">Search</i></button>
            </div>
          </form>
        </div> -->
      </h5>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                
                <th>NAMA PRODUK</th>
                <th>FOTO</th>
                <th colspan="2">
                  <center>AKSI</center>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr role="row" class="odd">
                <?php $nomor = 1; ?>
                <?php $bebe = null ?>
                @foreach($a as $data)
                <td>
                @if($bebe!=$data->Produk->nama)
                  {{ $data->Produk->nama }}
                    <?php $bebe=$data->Produk->nama?>
                @endif
                </td>
                <td><img src="{{ asset('admin/images/fotobarang/'.$data->foto,$data->nama)  }}" width="100px" height="100px"></td>
                <td>
                  <center>
                    <a href="{{ route('fotoproduk.edit',$data->id) }}">
                    <button onclick="" type="button" class="btn btn-warning btn-rounded btn-floating btn-outline" data-toggle="modal" data-target=".bd-example-modal-lg">
                    EDIT
                    </button>
                    </a>
                  </center>
                </td>
                <td>
                  <center>
                    <form method="post" action="{{ route('fotoproduk.destroy',$data->id) }}">
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