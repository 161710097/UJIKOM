@extends('welcome')
@section('content')
<div class="nav-inner-cms">
  <div class="header-bottom">
    <!-- <div class="main-menu container" id="cms-menu">
      <ul class="main-navigation">
      <li class="first level0"><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=affiliate/account">Affiliate</a></li>
          <li class="level0"><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=account/voucher">Gift Certificates</a></li>
          <li class="level0"><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/manufacturer">Brands</a></li> 
          <li class="level0"><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=account/return/add">Returns</a></li> 
          <li class="level0"><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=information/sitemap">Sitemap</a></li>
          <li class="last level0"><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=information/contact">contact us</a></li>
            
       </ul>
      </div> -->
  </div>
</div>
<div id="breadcrumb">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
      <li><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=checkout/cart">Shopping Cart</a></li>
      <li><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=checkout/checkout">Checkout</a></li>
    </ul>
  </div>
</div>
<!-- ======= Quick view JS ========= -->
<script> 
  function quickbox(){
   if ($(window).width() > 767) {
      $('.quickview').magnificPopup({
        type:'iframe',
        delegate: 'a',
        preloader: true,
        tLoading: 'Loading image #%curr%...',
      });
   }  
  }
  jQuery(document).ready(function() {quickbox();});
  jQuery(window).resize(function() {quickbox();});
  
</script>
<form action="{{ url('checkout/'.Auth()->user()->id) }}" method="post" enctype="multipart/form-data" >
	{{ csrf_field() }}
	<input type="hidden" name="chart" value="{{$cart}}">
<div id="checkout-checkout" class="container">
  <div class="row">
    <div id="content" class="col-sm-12">
      <h2 class="page-title">Checkout</h2>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a href="#collapse-checkout-option" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false">Langkah 1: Detail Penagihan  <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse in" id="collapse-checkout-option" aria-expanded="false" style="">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">
                  <fieldset id="account">
                    <legend>Detail Pribadi Anda</legend>
                   
                    <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }} required">
                      <label class="control-label" for="input-payment-firstname">Nama Panggilan</label>
                      <input type="text" name="nama"  placeholder="Nama Panggilan" id="input-payment-firstname" class="form-control">
                      @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                      @endif
                    </div>
                    <div class="form-group {{ $errors->has('nama_lengkap') ? ' has-error' : '' }} required">
                      <label class="control-label" for="input-payment-lastname">Nama Lengkap</label>
                      <input type="text" name="nama_lengkap"  placeholder="Nama Lengkap" id="input-payment-lastname" class="form-control">
                      @if ($errors->has('nama_lengkap'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_lengkap') }}</strong>
                            </span>
                      @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} required">
                      <label class="control-label" for="input-payment-email">E-Mail</label>
                      <input type="text" name="email"  placeholder="E-Mail" id="input-payment-email" class="form-control">
                      @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                      @endif
                    </div>
                    <div class="form-group {{ $errors->has('no_tlp') ? ' has-error' : '' }} required">
                      <label class="control-label" for="input-payment-telephone">Telephone</label>
                      <input type="text" name="no_tlp"  placeholder="Telephone" id="input-payment-telephone" class="form-control">
                      @if ($errors->has('no_tlp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_tlp') }}</strong>
                            </span>
                      @endif
                    </div>
                  </fieldset>
                </div>
                <div class="col-sm-6">
                  <fieldset id="address" class="">
                    <legend>Alamat</legend>
                    <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }} required">
                      <label class="control-label" for="input-payment-address-1">Alamat</label>
                      <input type="text" name="alamat"  placeholder="Alamat" id="input-payment-address-1" class="form-control">
                      @if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                      @endif
                    </div>
                    <div class="form-group {{ $errors->has('kota_kab') ? ' has-error' : '' }} required">
                      <label class="control-label" for="input-payment-city">Kota/Kabupaten</label>
                      <input type="text" name="kota_kab"  placeholder="Kota/Kab" id="input-payment-city" class="form-control">
                      @if ($errors->has('kota_kab'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kota_kab') }}</strong>
                            </span>
                      @endif
                    </div>
                    <div class="form-group {{ $errors->has('prov') ? ' has-error' : '' }} required">
                      <label class="control-label" for="input-payment-city">Provinsi</label>
                      <input type="text" name="prov"  placeholder="Provinsi" id="input-payment-city" class="form-control">
                      @if ($errors->has('prov'))
                            <span class="help-block">
                                <strong>{{ $errors->first('prov') }}</strong>
                            </span>
                      @endif
                    </div>
                    <div class="form-group {{ $errors->has('kode_pos') ? ' has-error' : '' }} required">
                      <label class="control-label" for="input-payment-postcode">Kode Pos</label>
                      <input type="text" name="kode_pos"  placeholder="Kode Pos" id="input-payment-postcode" class="form-control">
                      @if ($errors->has('kode_pos'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_pos') }}</strong>
                            </span>
                      @endif
                    </div>
                  </fieldset>
                </div>
              </div>
              <div class="buttons">
                <div class="pull-right">
                  <a class="btn btn-primary" href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Continue</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false">Langkah 2: Catatan <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse" id="collapse-shipping-method" aria-expanded="false" style="height: 0px;">
            <div class="panel-body {{ $errors->has('catatan') ? ' has-error' : '' }}">
              <p>Catatan Untuk Penjual.</p>
              <p>
                <textarea name="catatan" rows="8" class="form-control"></textarea>
              </p>
              @if ($errors->has('catatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('catatan') }}</strong>
                            </span>
                      @endif
              <div class="buttons">
                <div class="pull-right">
                  <a class="btn btn-primary" href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false">Continue</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false">Langkah 4: Transfer <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse" id="collapse-payment-method" aria-expanded="false" style="height: 0px;">
            <div class="panel-body {{ $errors->has('bukti_transfer') ? ' has-error' : '' }} ">
              <p>Silahkan Transfer Ke NO REK : 0293037928846.<br>
              Atas Nama : Gilang</p>
              <p><strong>Bukti Transfer</strong></p>
              <p>
                <input type="file" name="bukti_transfer">
              </p>
              @if ($errors->has('bukti_transfer'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bukti_transfer') }}</strong>
                            </span>
                      @endif
              <div class="buttons">
                <div class="pull-right">
                  <a class="btn btn-primary" href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle" aria-expanded="true">Continue</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @php
           $total_all = 0;
           $mycart = \App\Cart::where('user_id', \Auth::user()->id)->get();
        @endphp
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false">Langkah 5: Konfirmasi Order <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse " id="collapse-checkout-confirm" aria-expanded="false" style="">
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-left">Product Name</td>
                      <td class="text-left"></td>
                      <td class="text-right">Quantity</td>
                      <td class="text-right">Unit Price</td>
                      <td class="text-right">Total</td>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($mycart as $data)
                  	@php 
                    $t_s = $data->quantity * $data->produk->harga;
                    $total_all = $total_all + $t_s;
                  	@endphp
                    <tr>
                      <td class="text-left">
                        &nbsp;<small> {{$data->produk->nama}}</small>         
                      </td>
                      <td class="text-left"></td>
                      <td class="text-right">{{$data->quantity}}</td>
                      <td class="text-right">Rp.{{ number_format($data->produk->harga,2,',','.')}}</td>
                      <td class="text-right">Rp.{{number_format($data->quantity * $data->produk->harga,2,',','.')}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="4" class="text-right"><strong>Total:</strong></td>
                      <td class="text-right">Rp.{{number_format($total_all,2,',','.')}}</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="buttons">
                <div class="pull-right">
                	<button type="submit" class="btn btn-primary">Konfirmasi Order</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
@endsection