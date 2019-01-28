@extends('welcome')
@section('content')
@php
$contact = App\Contact::all();
@endphp
@php
$mycart = App\Cart::all();
@endphp
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
          </div>
        </div>
        <!-- ======= Quick view JS ========= -->
        <div id="account-login" class="container">
          <ul class="breadcrumb">
            <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>
            <li><a href="indexe223.html?route=account/account">Account</a></li>
            <li><a href="indexe223.html?route=account/login">Login</a></li>
          </ul>
          <div class="row">
            @include('partial.sideacount')
            <div id="content" class="col-sm-9">
              <div class="row">
                <div class="col-sm-6">
                  <div class="well">
                    <h2>New Customer</h2>
                    <p><strong>Register</strong></p>
                    <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                    <a href="{{route('register')}}" class="btn btn-primary">Continue</a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="well">
                    <h2>Returning Customer</h2>
                    <p><strong>I am a returning customer</strong></p>
                    <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label class="control-label" for="input-email">Enter your e-mail</label>
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="Enter your e-mail" id="input-email" class="form-control" />
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="input-password">Password</label>
                        <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                        <a href="{{ route('password.request') }}">Forgotten Password</a>
                      </div>
                      <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                      <!-- <input type="hidden" name="redirect" value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=account/account" /> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection


