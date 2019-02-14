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
<div class="categorypage">
  <div id="product-category" class="container">
    <ul class="breadcrumb">
      <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>
      <li><a href="index8122.html?route=product/category&amp;path=34">Produk</a></li>
    </ul>
    <div class="row">
      @include('partial.sideproduk')
      <div id="content" class="col-sm-9 categorypage">
        <h2 class="page-title">Produk</h2>
        <div class="row category_thumb">
          <div class="col-sm-2 category_img"></div>
          <div class="col-sm-10 category_description">
            
          </div>
        </div>
        <!-- <h3 class="refine-search">Refine Search</h3>
        <div>
          <div class="col-sm-12 category_list">
            <ul>
              <li><a href="index7e21.html?route=product/category&amp;path=34_48">casual shoes</a></li>
              <li><a href="index0e62.html?route=product/category&amp;path=34_49">formal shoes</a></li>
              <li><a href="index22d5.html?route=product/category&amp;path=34_43">sports shoes</a></li>
            </ul>
          </div>
        </div> -->
        <div class="category_filter">
          <div class="col-md-4 btn-list-grid">
            <div class="btn-group">
              <button type="button" id="grid-view" class="btn btn-default grid"  title="Grid"></button>
              <button type="button" id="list-view" class="btn btn-default list"  title="List"></button>
            </div>
          </div>
          <!-- <div class="compare-total"><a href="index6431.html?route=product/compare" id="compare-total"> Product Compare (0)</a></div> -->
          <div class="pagination-right">
            <div class="sort-by-wrapper">
              <div class="col-md-2 text-right sort-by">
                <label class="control-label" for="input-sort">Sort By:</label>
              </div>
              <div class="col-md-3 text-right sort">
                <select id="input-sort" class="form-control" onchange="location = this.value;">
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;sort=p.sort_order&amp;order=ASC " selected="selected">Default</option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;sort=pd.name&amp;order=ASC ">Name (A - Z) </option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;sort=pd.name&amp;order=DESC ">Name (Z - A) </option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;sort=p.price&amp;order=ASC ">Price (Low &gt; High) </option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;sort=p.price&amp;order=DESC ">Price (High &gt; Low) </option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;sort=rating&amp;order=DESC ">Rating (Highest) </option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;sort=rating&amp;order=ASC ">Rating (Lowest) </option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;sort=p.model&amp;order=ASC ">Model (A - Z) </option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;sort=p.model&amp;order=DESC ">Model (Z - A) </option>
                </select>
              </div>
            </div>
            <div class="show-wrapper">
              <div class="col-md-1 text-right show">
                <label class="control-label" for="input-limit">Show:</label>
              </div>
              <div class="col-md-2 text-right limit">
                <select id="input-limit" class="form-control" onchange="location = this.value;">
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;limit=12 " selected="selected">12</option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;limit=25 ">25 </option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;limit=50 ">50 </option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;limit=75 ">75 </option>
                  <option value="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&amp;path=34&amp;limit=100 ">100 </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="product-layout-wrap">
          <div class="row">
            @foreach($produk as $data)
            <div id="updateDiv">
            <div class="product-layout product-list col-xs-12">
              <div class="product-block product-thumb">
                <div class="product-block-inner">
                  <div class="image">
                    <a href="/produk/{{$data->slug}}">
                    @foreach($data->Produkfoto()->get() as $barangfoto)
                          @if ($loop->first)
                            <img src="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" title="consectetur adipiscing" alt="consectetur adipiscing" class="img-responsive reg-image"/>
                            @endif
                            @if($loop->last)
                            <img class="img-responsive hover-image" src="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" title="consectetur adipiscing" alt="consectetur adipiscing"/>
                          @endif
                    @endforeach
                    </a>
                    <div class="saleback">
                      <span class="saleicon sale">Sale</span>         
                    </div>
                    <span class="percentsaving">70%</span>
                    <div class="button-group">
                      <a href="/produk/{{$data->slug}}">
                      <button type="button" data-placement="right" title="Add to cart" class="addtocart">Add to Cart</button></a>
                      
                    </div>
                  </div>
                  <div class="product-details">
                    <div class="btn-list-grid">
                    </div>
                    <div class="caption">
                      <h4><a href="/produk/{{$data->slug}}">{{$data->nama}}</a></h4>
                      <p class="price">
                        <span class="price-new">Rp.{{$data->harga}}</span> <span class="price-old">$122.00</span>
                        <span class="price-tax">Ex Tax: $30.00</span>
                      </p>
                      <p class="desc">{!!$data->deskripsi!!}</p>
                      <div class="btn-wish-compare">
                      </div>
                      <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                      </div>
                    </div>
                    <div class="button-group">
                    </div>
                   </div>
                </div>
              </div>
            </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="pagination-wrapper">
          <div class="col-sm-6 text-left page-link">
            <ul class="pagination">
              <li class="active"><span>1</span></li>
              <li><a href="indexaf7a.html?route=product/category&amp;path=34&amp;page=2">2</a></li>
              <li><a href="indexaf7a.html?route=product/category&amp;path=34&amp;page=2">&gt;</a></li>
              <li><a href="indexaf7a.html?route=product/category&amp;path=34&amp;page=2">&gt;|</a></li>
            </ul>
          </div>
          <div class="col-sm-6 text-right page-result">Showing 1 to 12 of 17 (2 Pages)</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection