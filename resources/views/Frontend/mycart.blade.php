@extends('welcome')
@section('content')
<script src="{{asset('js/cart.js')}}"></script>
  <body class="checkout-cart   layout-1">
    <div id="breadcrumb">
      <div class="container">
        <ul class="breadcrumb">
          <li><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
          <li><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=checkout/cart">My_Cart</a></li>
        </ul>
      </div>
    </div>
    <!-- ======= Quick view JS ========= -->
    <div id="checkout-cart" class="container">
      <div class="row">
        <div id="content" class="col-sm-12">
          <h2 class="page-title">your bag
          </h2>
          <form action="{{url('cart/edit/'.Auth::user()->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="table-responsive">
              <table class="table table-bordered shopping-cart">
                <thead>
                  <tr>
                    <!-- <td class="text-center">Image</td> -->
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Quantity</td>
                    <td></td>
                    <td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
                  </tr>

                  @php
                    $total_all = 0;
                    $mycart = \App\Cart::where('user_id', \Auth::user()->id)->get();
                  @endphp

                  @foreach($mycart as $data)
                  @php 
                    $t_s = $data->quantity * $data->produk->harga;
                    $total_all = $total_all + $t_s;
                  @endphp
                </thead>
                <tbody>
                  <tr>
                    <td class="text-left"><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/product&amp;product_id=51"></a>                                  
                      <small>{{$data->produk->nama}}</small>                  
                    </td>
                    <td class="text-right">
                      <div class="input-group btn-block" style="max-width:50px;">
                        <input type="hidden" name="id[]" value="{{$data->id}}">
                        <input type="number" name="quantity[]" value="{{$data->quantity}}"  class="form-control">
                        <!-- <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="" class="btn btn-danger deleteCart "  data-original-title="Remove"><i class="fa fa-times-circle">
                          <a href="#" class="deleteCart"></a>
                        </i></button>
                        </span> -->
                      </div>
                    </td>
                    <td>
                      <a href="{{url('cart/delete', $data->id)}}" class="deleteCart">
                      <button type="button" data-toggle="tooltip" title="" class="btn btn-danger deleteCart "  data-original-title="Remove"><i class="fa fa-times-circle">
                          
                        </i></button>
                        </a>
                    </td>
                    <td class="text-right">Rp.{{ number_format($data->produk->harga,2,',','.')}}</td>
                    <td class="text-right">Rp.{{number_format($data->quantity * $data->produk->harga,2,',','.')}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          <br>
          <div class="pull-right"><button type="submit" class="btn btn-primary"> UPDATE </button></div>
          </form>
          <div class="row">
            <div class="col-sm-4 col-sm-offset-8">
              <table class="table table-bordered">
                <tbody>
                  <!-- <tr>
                    <td class="text-right"><strong>Sub-Total:</strong></td>
                    <td class="text-right">$48.00</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                    <td class="text-right">$2.00</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>VAT (20%):</strong></td>
                    <td class="text-right">$9.60</td>
                  </tr> -->
                  <tr>
                    <td class="text-right"><strong>Total:</strong></td>
                    <td class="text-right">Rp.{{number_format($total_all,2,',','.')}}</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
          <div class="buttons clearfix">
            <div class="pull-left"><a href="{{route('produk')}}" class="btn btn-default">Continue Shopping</a></div>
            <div class="pull-right"><a href="{{url('check',Auth::user()->id)}}" class="btn btn-primary">Checkout</a></div>
          </div>
        </div>
      </div>
    </div>
    <!--
      OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
      Please donate via PayPal to donate@opencart.com
      //--> 
    <!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
    @endsection