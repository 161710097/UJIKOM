<header>
  <div class="header">
    <div class="header-nav-wrapper">
      <div class="container">
        <div class="header-nav-left">
          <div class="nav pull-left ">
          </div>
        </div>
        <div class="header-nav-right">
          <!--<div id="wish-list" class="wish-list hidden-md-down">
            <div class="wish-details">
            <span class="wish-image"></span>
            </div>
            
            <div class="wish-list-details dropdown-menu">
            <div class="header-wishlist"><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=account/wishlist" id="wishlist-total" title="Wish List (0)"><span class="wishlist">Wish List (0)</span></a></div>
            </div>  
            </div>-->
        </div>
      </div>
    </div>
    <div class="content_headercms_top">
      <div id="main-menu" class="main-menu">
        <nav class="nav-container" role="navigation">
          <div class="nav-inner">
            <!-- ======= Menu Code START ========= -->
            <!-- Opencart 3 level Category Menu-->
            <div id="menu" class="main-menu">
              <div class="nav-responsive">
                <span>Menu</span>
                <div class="menu-expand-wrapper">
                  <div class="expandable"></div>
                </div>
              </div>
              <div class="nav-mainmenu btn-modal hidden-sm hidden-xs">
                <span class="mainmenu-btn-wrapper">
                <span class="mainmenu-btn"></span>
                </span>
                <span class="mainmenu-text">menu</span>
              </div>
              <ul class="nav navbar-nav">
                <li class="top_level home"><a href="{{url('/')}}">Beranda</a></li>
                <li class="top_level" > <a href="{{url('/artikel')}}">Artikel</a></li>
                <li class="top_level dropdown">
                  <a href="{{url('/produk')}}">our store</a>
                  <div class="dropdown-menu megamenu column3">
                    <div class="dropdown-inner">
                      <ul class="list-unstyled childs_1">
                        <!-- 2 Level Sub Categories START -->
                        <li class="dropdown">
                          <a href="index7e21.html?route=product/category&amp;path=34_48">casual shoes</a>
                          <div class="dropdown-menu">
                            <div class="dropdown-inner">
                              <ul class="list-unstyled childs_2">
                                <li><a href="index893e.html?route=product/category&amp;path=34_48_52">rem aperiam</a></li>
                                <li><a href="indexc5f8.html?route=product/category&amp;path=34_48_51">ridiculus mus</a></li>
                                <li><a href="indexeae5.html?route=product/category&amp;path=34_48_24">dictum gravida</a></li>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <!-- 2 Level Sub Categories END -->
                      </ul>
                      <ul class="list-unstyled childs_1">
                        <!-- 2 Level Sub Categories START -->
                        <li class="dropdown">
                          <a href="index0e62.html?route=product/category&amp;path=34_49">formal shoes</a>
                          <div class="dropdown-menu">
                            <div class="dropdown-inner">
                              <ul class="list-unstyled childs_2">
                                <li><a href="index3286.html?route=product/category&amp;path=34_49_53">temporibus autem</a></li>
                                <li><a href="index5168.html?route=product/category&amp;path=34_49_55">ullamco laboris </a></li>
                                <li><a href="indexc614.html?route=product/category&amp;path=34_49_44">voluptatem sequi</a></li>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <!-- 2 Level Sub Categories END -->
                      </ul>
                      <ul class="list-unstyled childs_1">
                        <!-- 2 Level Sub Categories START -->
                        <li class="dropdown">
                          <a href="index22d5.html?route=product/category&amp;path=34_43">sports shoes</a>
                          <div class="dropdown-menu">
                            <div class="dropdown-inner">
                              <ul class="list-unstyled childs_2">
                                <li><a href="indexa84d.html?route=product/category&amp;path=34_43_50">accusamus iusto   </a></li>
                                <li><a href="indexa249.html?route=product/category&amp;path=34_43_47">nulla venenatis</a></li>
                                <li><a href="indexd24f.html?route=product/category&amp;path=34_43_28">Phasellus tempu</a></li>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <!-- 2 Level Sub Categories END -->
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="top_level" > <a href="{{url('/aboutus')}}">Tentang Kami</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      </nav>   
      <div class="dropdown myaccount">
        <a href="indexe223.html?route=account/account" title="Akun Saya" class="dropdown-toggle" data-toggle="dropdown">
          <!--<span class="account-title">My Account</span>--> <span class="caret"></span>
          @if (Route::has('login'))
          @auth
          <span class="user-info-image">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right myaccount-menu">
        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Keluar</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
        @else
        <span class="user-info-image">Akun Saya<i class="fa fa-angle-down"></i></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right myaccount-menu">
          <li><a href="{{route('register')}}">Daftar</a></li>
          <li><a href="{{route('login')}}">Masuk</a></li>
          @endauth
          @endif                  
          <nav id="top">
            <!-- <div class="container"> -->
          </nav>
          <div class="nav pull-left">
          </div>
        </ul>
      </div>
      <div class="header-logo">
        <div id="logo"><a href="{{url('/')}}"><img src="{{asset('assets/image/logos.png')}}" title="Your Store" alt="Your Store" class="img-responsive" /></a></div>
      </div>
      <div class="header-cart">
        <div id="cart" class="btn-group btn-block">
          <!--<span class="cart-icon"></span>-->
          <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle">
            <!-- <span class="heading-title">from the Blogs</span>-->
            @php
              if(\Auth::check()){
                $cart = \App\Cart::where('user_id', \Auth::user()->id)->get();
              }
            @endphp

            @if(Auth::check() && $cart->count() > 0)
            
            <span id="cart-total">@role('member'){{$cart->count()}}@endrole</span>
            @else
            <span id="cart-total"></span>

            @endif
            <span id="cart-title">Keranjang<i class="fa fa-angle-down"></i></span>  
          </button>
          <ul class="dropdown-menu pull-right cart-menu" style="display: none;">
            @if(Auth::check())
             @php
              $total_all = 0;
             @endphp
            <li>
              <table class="table table-striped">
                <tbody>
                  @foreach($mycart as $data)
                  @php 
                    $hargadiskon = $data->produk->harga * $data->produk->diskon / 100;
                    $hargadis = $data->produk->harga - $hargadiskon;
                    $t_s = $data->quantity * $hargadis;
                    $total_all = $total_all + $t_s;
                  @endphp
                  <tr>
                    <td class="text-center"> 
                    </td>
                    <td class="text-left"><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/product&amp;product_id=51">{{$data->Produk->nama}}</a>              <br>
                    </td>
                    <td class="text-right">x {{$data->quantity}}</td>
                    <td class="text-right">Rp.{{number_format($data->quantity * $hargadis,2,',','.')}}</td>
                    <td class="text-center"><a href="{{url('cart/delete', $data->id)}}"><button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </li>
            <li>
              <div>
                <table class="table table-bordered">
                  <tbody>
                    <!-- <tr>
                      <td class="text-right"><strong>Sub-Total</strong></td>
                      <td class="text-right">$48.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                      <td class="text-right">$2.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>VAT (20%)</strong></td>
                      <td class="text-right">$9.60</td>
                    </tr> -->
                    <tr>
                      <td class="text-right"><strong>Total</strong></td>
                      <td class="text-right">Rp.{{number_format($total_all,2,',','.')}}</td>
                    </tr>
                  </tbody>
                </table>
                <div class="text-right button-container"><a class="addtocart" href="{{url('cart', Auth::user()->id)}}"><strong>View Cart</strong></a>&nbsp;&nbsp;&nbsp;<a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=checkout/checkout" class="checkout"><strong>Checkout</strong></a></div>
              </div>
            </li>
            @endif
          </ul>
        </div>
      </div>
      <div class="dropdown search" title="Search item here">
        <div class="header-search dropdown-toggle hidden-lg hidden-md" data-toggle="dropdown"></div>
        <div id="search" class="input-group dropdown-menu">
          <form method="get" action="{{url('search')}}">
          <input type="text" name="search" value="" placeholder="Cari Barang di Sini" class="form-control input-lg" />
          <span class="input-group-btn">
          <button type="submit" class="btn btn-default btn-lg">Cari Barang di Sini
          <span class="search_button"></span>
          </button>
          </span>
          </form>
        </div>
      </div>
    </div>
    <div class="content_headercms_bottom">
      <div class="container">
      </div>
    </div>
  </div>
</header>