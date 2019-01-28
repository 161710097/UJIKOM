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
<div id="account-register" class="container">
  <ul class="breadcrumb">
    <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>
    <li><a href="indexe223.html?route=account/account">Account</a></li>
    <li><a href="index5502.html?route=account/register">Register</a></li>
  </ul>
  <div class="row">
    @include('partial.sideacount')
    <div id="content" class="col-sm-9">
      <h1>Account</h1>
      <p>If you already have an account with us, please login at the <a href="indexe223.html?route=account/login">login page</a>.</p>
      <form action="{{ route('register') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <fieldset id="account">
          <legend>Your Personal Details</legend>
          <div class="form-group required" style="display:  none ;">
            <label class="col-sm-2 control-label">Customer Group</label>
            <div class="col-sm-10">
              <div class="radio">
                <label>
                <input type="radio" name="customer_group_id" value="1" checked="checked" />
                Default</label>
              </div>
            </div>
          </div>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} required">
            <label class="col-sm-2 control-label" for="input-lastname">Name</label>
            <div class="col-sm-10">
              <input type="text" value="{{ old('name') }}" name="name" value="" placeholder="Name" id="input-lastname" class="form-control" />
              @if ($errors->has('name'))
              <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
            </div>
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} required">
            <label class="col-sm-2 control-label" for="input-email">Enter your e-mail</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your e-mail" id="input-email" class="form-control" />
              @if ($errors->has('email'))
              <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Your Password</legend>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} required">
            <label class="col-sm-2 control-label" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
              @if ($errors->has('password'))
              <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
            <div class="col-sm-10">
              <input type="password" name="password_confirmation" value="" placeholder="Password Confirm" id="input-confirm" class="form-control" />
            </div>
          </div>
        </fieldset>
        <div class="buttons">
          <div class="pull-right">I have read and agree to the <a href="index11ee.html?route=information/information/agree&amp;information_id=3" class="agree"><b>Privacy Policy</b></a>
            <input type="checkbox" name="agree" value="1" />
            &nbsp;
            <input type="submit" value="Continue" class="btn btn-primary" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
