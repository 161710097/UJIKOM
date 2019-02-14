@extends('welcome')
@section('content')
<script src="{{asset('js/cart.js')}}"></script>
<script  src="{{asset('js/komentar.js')}}"></script>
<div class="nav-inner-cms">
  <div class="header-bottom">
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
<div class="productpage">
  <div id="product-product" class="container">
    <ul class="breadcrumb">
      <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>
      <li><a href="index8122.html?route=product/category&amp;path=34">Produk</a></li>
      <li><a href="index0556.html?route=product/product&amp;path=34&amp;product_id=40">{{$produk->nama}}</a></li>
    </ul>
    <div class="row">
      <div id="content" class="col-sm-12 productpage">
        <div class="row">
          <div class="col-sm-8 product-left">
            <div class="product-info">
              <div class="left product-image thumbnails">
                <!-- Cloud-Zoom Image Effect Start -->
                @foreach($produk->Produkfoto()->get() as $barangfoto)
                @if ($loop->first)
                <div class="image"><a class="thumbnail" href="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" title="consequat nibh"><img id="tmzoom" src="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" data-zoom-image="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" title="consequat nibh" alt="consequat nibh" /></a></div>
                @endif
                @endforeach
                <div class="additional-carousel">
                  <div class="customNavigation">
                    <span class="prev">&nbsp;</span>
                    <span class="next">&nbsp;</span>
                  </div>
                  <div id="additional-carousel" class="image-additional product-carousel">
                    @foreach($produk->Produkfoto()->get() as $barangfoto)
                    <div class="slider-item">
                      <div class="product-block">   
                        <a href="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" title="consequat nibh" class="elevatezoom-gallery" data-image="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" data-zoom-image="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}"><img src="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" width="74" height="74" title="consequat nibh" alt="consequat nibh" /></a>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  <span class="additional_default_width" style="display:none; visibility:hidden"></span>
                </div>
                <!-- Cloud-Zoom Image Effect End-->
              </div>
            </div>
          </div>
          <div class="col-sm-4 product-right">
            <div class="product-right-inner">
              <h3 class="product-title">{{$produk->nama}}</h3>
              <div class="rating-wrapper">
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                <a href="#" class="review-count" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">1 reviews</a>  <a href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" class="write-review"><i class="fa fa-pencil"></i>Write a review</a>
              </div>
              <ul class="list-unstyled">
                <li><span class="desc">Merek</span><a href="index98fa.html?route=product/manufacturer/info&amp;manufacturer_id=8">{{$produk->merk->nama}}</a></li>
                <!-- <li><span class="desc">Product Code:</span> product 11</li> -->
                @if($produk->stock <=0)
                <li><span class="desc">Ketersediaan:</span> Stock Habis</li>
                @else
                <li><span class="desc">Ketersediaan:</span> {{$produk->stock}}</li>
                @endif
              </ul>
              @php
                  $hargadiskon = $produk->harga * $produk->diskon / 100;
                  $hargadis = $produk->harga - $hargadiskon;
              @endphp
              <ul class="list-unstyled price">
                @if($produk->diskon <= 0)
                <li>
                  <h2 class="special-price">Rp.{{number_format($hargadis,2,',','.')}}</h2>
                </li>
                @else
                <li><span class="price-old" style="text-decoration: line-through;">Rp.{{number_format($produk->harga,2,',','.')}}</span></li>
                
                <li>
                  <h2 class="special-price">Rp.{{number_format($hargadis,2,',','.')}}</h2>
                </li>
                @endif
                <!-- <li class="price-tax">Ex Tax: $55.00</li> -->
              </ul>
              <div id="product">
                <div class="form-group cart">
                  @role('member','admin')
                  
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="produk_id" value="{{$produk->id}}">
                    <label class="control-label qty" for="input-quantity">Qty</label>
                    <input type="number" min="1" max="{{$produk->stock}}" name="quantity" size="2" id="input-quantity" class="form-control" />
                    <a href="{{url('add-cart',$produk->id)}}">
                    <button type="submit" name="submit" id="aksi" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block">Add to Cart</button>
                    </a>
                    <!-- <span>  - OR -  </span>
                      <div class="btn-group">
                        <button type="button" class="btn btn-default wishlist" title="Add to Wish List" onclick="wishlist.add('40');">Add to Wish List</button>
                        <button type="button" class="btn btn-default compare" title="Compare this Product" onclick="compare.add('40');">Compare this Product</button> -->
                  
                  @endrole
                </div>
              </div>
              <input type="hidden" name="product_id" value="40" />
              <hr>
              <!-- AddThis Button BEGIN -->
              <div class="addthis_toolbox addthis_default_style" data-url="index9144.html?route=product/product&amp;product_id=40"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
              <script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> 
              <!-- AddThis Button END --> 
            </div>
          </div>
        </div>
        <!-- product page tab code start-->
        <div id="tabs_info" class="product-tab col-sm-12">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-description" data-toggle="tab">Deskripsi</a></li>
            <li><a href="#tab-review" data-toggle="tab">Komentar (1)</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-description">
              <p class="intro">
                {!!$produk->deskripsi!!}
              </p>
            </div>
            <div class="tab-pane" id="tab-review">
              
                <div id="review">
                  <div class="text-right"></div>
                </div>
                <h4>Write a review</h4>
                <form method="post" enctype="multipart/form-data" class="form-horizontal"  id="formKomentar">
                  {{ csrf_field() }} {{ method_field('POST')}}
                  <input type="hidden" name="produk_id" value="{{$produk->id}}">
                  @if (Auth::guest())

                  @else
                  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  @endif
                <!-- <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-name">Your Name</label>
                    <input type="text" name="user_id" value="" id="input-name" class="form-control" />
                  </div>
                </div> -->
                <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-review">Your Review</label>
                    <textarea name="komentar" rows="5" id="input-review" class="form-control"></textarea>
                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                  </div>
                </div>
                <div class="form-group required">
                  <div class="col-sm-12">
                    <label class="control-label">Rating</label>
                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                    <input type="radio" name="rating" value="1" />
                    &nbsp;
                    <input type="radio" name="rating" value="2" />
                    &nbsp;
                    <input type="radio" name="rating" value="3" />
                    &nbsp;
                    <input type="radio" name="rating" value="4" />
                    &nbsp;
                    <input type="radio" name="rating" value="5" />
                    &nbsp;Good
                  </div>
                </div>
                <div class="buttons clearfix">
                  <div class="pull-right">
                    @if (Route::has('login'))
                      @auth
                      <button type="submit" id="button-review aksi" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                      @else
                      <a href="{{ route('login') }}"><button type="submit" id="button-review aksi" data-loading-text="Loading..." class="btn btn-primary">Login</button></a>
                      @endauth
                    @endif
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="box related product-box">
        <div class="container">
          <div class="title-wrapper">
            <div class="box-heading">Related Products</div>
          </div>
          <div class="box-content">
            <div id="products-related" class="related-products home-products">
              <div class="customNavigation">
                <a class="fa prev ">prev</a>
                <a class="fa next ">next</a>
              </div>
              <div class="box-product product-carousel" id="related-carousel">
                @foreach($related as $data)   
                <div class="slider-item">
                  <div class="product-block product-thumb transition">
                    <div class="product-block-inner">
                      <!-- <div class="image">
                        <a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/product&amp;product_id=53 "><img src="http://thementic.com/opencart/OPC02/OPC0200032/image/cache/catalog/demo/product/5-285x357.jpg " alt="nulla venenatis " title="nulla venenatis " class="img-responsive" /></a>
                           
                        <span class="saleicon sale">Sale</span>  
                                              </div> -->
                      <div class="image">
                        <a href="i/produk/{{$data->slug}}">
                        @foreach($data->Produkfoto()->get() as $barangfoto)
                        @if($loop->first)
                        <img width="287" height="357" src="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" title="nulla venenatis" alt="nulla venenatis" class="img-responsive reg-image"/>
                        @endif
                        @if($loop->last)
                        <img width="287" height="357" class="img-responsive hover-image" src="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" title="nulla venenatis" alt="nulla venenatis"/>
                        @endif
                        @endforeach
                        </a>
                        <div class="saleback">
                          <span class="saleicon sale">Sale</span>         
                        </div>
                        <span class="percentsaving">35%</span>
                        <div class="button-group">
                          <button type="button"  data-placement="right" title="Add to cart" class="addtocart" onclick="cart.add('53 ');">Add to Cart</button>
                          <button class="wishlist" type="button" data-placement="right" title="Add to Wish List " onclick="wishlist.add('53 ');"></button>
                          <div class="quickview" data-placement="right" title="Quickview" ><a href="index1bc2.html?route=product/quick_view&amp;product_id=53">Quick View </a></div>
                          <button class="compare" type="button"  data-placement="right" title="Compare this Product " onclick="compare.add('53 ');"></button>
                        </div>
                      </div>
                      <div class="caption">
                        <h4><a href="/produk/{{$data->slug}}">{{$data->nama}} </a></h4>
                        <p class="price">
                          <span class="price-new">Rp.{{$data->harga}}</span> <span class="price-old">$122.00</span>
                          <span class="price-tax">Ex Tax: $65.00</span>
                        </p>
                        <div class="rating">
                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                        </div>
                      </div>
                      <div class="button-group">
                        <!-- <button type="button" class="addtocart" onclick="cart.add('53 ');">Add to Cart </button>
                          <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('53 ');"></button>
                          <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product " onclick="compare.add('53 ');"></button> -->
                      </div>
                      <!-- Related Products Start --> 
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <span class="related_default_width" style="display:none; visibility:hidden"></span>
    </div>
  </div>
</div>
</div>
<script type="text/javascript"><!--
  $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
    $.ajax({
      url: 'index.php?route=product/product/getRecurringDescription',
      type: 'post',
      data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
      dataType: 'json',
      beforeSend: function() {
        $('#recurring-description').html('');
      },
      success: function(json) {
        $('.alert-dismissible, .text-danger').remove();
  
        if (json['success']) {
          $('#recurring-description').html(json['success']);
        }
      }
    });
  });
  //-->
</script> 
<script type="text/javascript"><!--
  $('.date').datetimepicker({
    language: 'en-gb',
    pickTime: false
  });
  
  $('.datetime').datetimepicker({
    language: 'en-gb',
    pickDate: true,
    pickTime: true
  });
  
  $('.time').datetimepicker({
    language: 'en-gb',
    pickDate: false
  });
  
  $('button[id^=\'button-upload\']').on('click', function() {
    var node = this;
  
    $('#form-upload').remove();
  
    $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');
  
    $('#form-upload input[name=\'file\']').trigger('click');
  
    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }
  
    timer = setInterval(function() {
      if ($('#form-upload input[name=\'file\']').val() != '') {
        clearInterval(timer);
  
        $.ajax({
          url: 'index.php?route=tool/upload',
          type: 'post',
          dataType: 'json',
          data: new FormData($('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            $(node).button('loading');
          },
          complete: function() {
            $(node).button('reset');
          },
          success: function(json) {
            $('.text-danger').remove();
  
            if (json['error']) {
              $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
            }
  
            if (json['success']) {
              alert(json['success']);
  
              $(node).parent().find('input').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          }
        });
      }
    }, 500);
  });
  //-->
</script> 
<script type="text/javascript"><!--
  $('#review').delegate('.pagination a', 'click', function(e) {
      e.preventDefault();
  
      $('#review').fadeOut('slow');
  
      $('#review').load(this.href);
  
      $('#review').fadeIn('slow');
  });
  
  $('#review').load('index0845.html?route=product/product/review&amp;product_id=40');
  
  $('#button-review').on('click', function() {
    $.ajax({
      url: 'index.php?route=product/product/write&product_id=40',
      type: 'post',
      dataType: 'json',
      data: $("#form-review").serialize(),
      beforeSend: function() {
        $('#button-review').button('loading');
      },
      complete: function() {
        $('#button-review').button('reset');
      },
      success: function(json) {
        $('.alert-dismissible').remove();
  
        if (json['error']) {
          $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
        }
  
        if (json['success']) {
          $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');
  
          $('input[name=\'name\']').val('');
          $('textarea[name=\'text\']').val('');
          $('input[name=\'rating\']:checked').prop('checked', false);
        }
      }
    });
  });
  
  //$(document).ready(function() {
  //  $('.thumbnails').magnificPopup({
  //    type:'image',
  //    delegate: 'a',
  //    gallery: {
  //      enabled: true
  //    }
  //  });
  //});
  
  
  $(document).ready(function() {
  if ($(window).width() > 767) {
      $("#tmzoom").elevateZoom({
          
          gallery:'additional-carousel',
          //inner zoom         
                   
          zoomType : "inner", 
          cursor: "crosshair" 
          
          /*//tint
          
          tint:true, 
          tintColour:'#F90', 
          tintOpacity:0.5
          
          //lens zoom
          
          zoomType : "lens", 
          lensShape : "round", 
          lensSize : 200 
          
          //Mousewheel zoom
          
          scrollZoom : true*/
          
          
        });
      var z_index = 0;
                    
                    $(document).on('click', '.thumbnail', function () {
                      $('.thumbnails').magnificPopup('open', z_index);
                      return false;
                    });
                
                    $('.additional-carousel a').click(function() {
                      var smallImage = $(this).attr('data-image');
                      var largeImage = $(this).attr('data-zoom-image');
                      var ez =   $('#tmzoom').data('elevateZoom');  
                      $('.thumbnail').attr('href', largeImage);  
                      ez.swaptheimage(smallImage, largeImage); 
                      z_index = $(this).index('.additional-carousel a');
                      return false;
                    });
        
    }else{
      $(document).on('click', '.thumbnail', function () {
      $('.thumbnails').magnificPopup('open', 0);
      return false;
      });
    }
  });
  $(document).ready(function() {     
    $('.thumbnails').magnificPopup({
      delegate: 'a.elevatezoom-gallery',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-with-zoom',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title');
        }
      }
    });
  });
  
  
  //-->
</script>
@endsection