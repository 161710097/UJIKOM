@extends('welcome')
@section('content')
<div class="nav-inner-cms">
          <div class="header-bottom">
          </div>
        </div>
        <div id="breadcrumb">
          <div class="container">
          </div>
        </div>
        <div id="common-home">
          <div class="content-top">
            <div id="content1">
              <div class="main-slider">
                <div id="spinner"></div>
                <div class="swiper-viewport">
                  <div id="slideshow0" class="swiper-container" style="opacity: 1;">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide text-center"><a href="#"><img src="{{asset('assets/2015-04_Banner-Web_Roman-FebvreStrike-Eagle_943x471px_4.jpg')}}" alt="mainbanner1" class="img-responsive" /></a></div>
                      <div class="swiper-slide text-center"><a href="#"><img src="{{asset('assets/banner_besar_velg_vnd_all_colour_scaled.jpg')}}" alt="mainbanner2" class="img-responsive" /></a></div>
                      <div class="swiper-slide text-center"><a href="#"><img src="{{asset('assets/rcmm_banner-a218.jpg')}}" alt="mainbanner3" class="img-responsive" /></a></div>
                    </div>
                  </div>
                  <div class="swiper-pagination slideshow0"></div>
                  <div class="swiper-pager">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="content-bottom">
            <div id="content">
              <div id="categorycmsblock" class="categorycms">
                <ul class="categorycmsblock-inner row">
                  <li class="category-item col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="category-item-inner">
                      <a href="#" class="category-img"><img src="{{asset('assets/image/catalog/demo/banners/cat_img1.jpg')}}" alt=""></a>
                      <div class="category-item-content">
                        <span class="category-title" href="#">men collection</span>
                        <a class="category-btn" href="#">02 item</a>
                      </div>
                    </div>
                  </li>
                  <li class="category-item col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="category-item-inner">
                      <a href="#" class="category-img"><img src="{{asset('assets/image/catalog/demo/banners/cat_img1.jpg')}}" alt=""></a>
                      <div class="category-item-content">
                        <span class="category-title" href="#">men collection</span>
                        <a class="category-btn" href="#">02 item</a>
                      </div>
                    </div>
                  </li>
                  <li class="category-item col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="category-item-inner">
                      <a href="#" class="category-img"><img src="{{asset('assets/image/catalog/demo/banners/cat_img2.jpg')}}" alt=""></a>
                      <div class="category-item-content">
                        <span class="category-title" href="#">bag collection</span> 
                        <a class="category-btn" href="#">05 item</a>
                      </div>
                    </div>
                  </li>
                  <li class="category-item col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="category-item-inner">
                      <a href="#" class="category-img"><img src="{{asset('assets/image/catalog/demo/banners/cat_img3.jpg')}}" alt=""></a>
                      <div class="category-item-content">
                        <span class="category-title" href="#">women collection</span>
                        <a class="category-btn" href="#">08 item</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="Tab_Category_Slider" class="category_tab box">
                <div class="container">
                  <div class="title-wrapper">
                    <div class="box-heading">our Products</div>
                  </div>
                  <div class="tabs">
                    <div class="etabs">
                      <!-- <ul class="nav nav-tabs">
                        @foreach($kategori as $data)
                        <li class="active"><a onclick="yiztwqvfxrloadAjaxData('18')" href="#{{$data->id}}" data-toggle="tab">{{$data->nama}}</a>
                        </li>
                        @endforeach
                      </ul>
                    </div> -->
                    <!-- <div class="customNavigation">
                      <a class="fa prev">&nbsp;</a>
                      <a class="fa next">&nbsp;</a>
                      </div> -->    
                    <div class="tab-content home-products">
                      <div class="tab-pane active" id="bottomwear">
                        <div class="owl-carousel owl-demo-tabcate">
                          @foreach($produk as $data)
                          <div class="product-block-wrapper">
                            <div class="item text-center product-innerblock">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-block product-thumb transition">
                                  <div class="product-block-inner">
                                    <div class="image">
                                    @foreach($data->Produkfoto()->get() as $barangfoto)
                                      @if ($loop->first)  
                                      <a href="/produk/{{$data->slug}}">
                                      <img src="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" title="aenean dignissim" alt="aenean dignissim" class="img-responsive reg-image"/>
                                      @endif

                                      @if($loop->last)
                                      <img class="img-responsive hover-image" src="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" title="aenean dignissim" alt="aenean dignissim"/>
                                      </a>
                                      @endif
                                      @endforeach
                                      <div class="saleback">
                                        <span class="saleicon sale">Sale</span>         
                                      </div>
                                      <span class="percentsaving">52%</span>
                                      <div class="button-group">
                                        <button type="button" data-placement="right" title="Add to Cart" class="addtocart" onclick="cart.add('51 ');">Add to Cart</button>
                                        <button class="wishlist" type="button" data-placement="right" title="Add to Wish List " onclick="wishlist.add('51 ');"></button>
                                        <div class="quickview" data-placement="right" title="Quick view" ><a href="index3cc7.html?route=product/quick_view&amp;product_id=51">Quick View</a></div>
                                        <button class="compare" type="button" data-placement="right" title="Compare this Product " onclick="compare.add('51 ');"></button>
                                      </div>
                                    </div>
                                    <!-- <div class="product-details"> -->
                                    <div class="caption">
                                      <h4><a href="/produk/{{$data->slug}}">{{$data->nama}}</a></h4>
                                      <p class="price">
                                        <span class="price-new">Rp.{{$data->harga}}</span> <span class="price-old">$122.00</span>
                                        <span class="price-tax">Ex Tax: $48.00</span>
                                      </p>
                                      <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                      </div>
                                    </div>
                                    <!-- </div> -->
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach
                        </div>
                      </div>
                      <div class="tab-pane" id="etruscan ">
                        <div class="owl-carousel owl-demo-tabcate">
                          <div class="product-block-wrapper">
                            <div class="item text-center product-innerblock">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-block product-thumb transition">
                                  <div class="product-block-inner">
                                    <div class="image">
                                      <a href="index52a0.html?route=product/product&amp;product_id=51">
                                      <img src="image/cache/catalog/demo/product/1-285x357.jpg" title="aenean dignissim" alt="aenean dignissim" class="img-responsive reg-image"/>
                                      <img class="img-responsive hover-image" src="image/cache/catalog/demo/product/15-285x357.jpg" title="aenean dignissim" alt="aenean dignissim"/>
                                      </a>
                                      <div class="saleback">
                                        <span class="saleicon sale">Sale</span>         
                                      </div>
                                      <span class="percentsaving">52%</span>
                                      <div class="button-group">
                                        <button type="button" data-placement="right" title="Add to Cart" class="addtocart" onclick="cart.add('51 ');">Add to Cart</button>
                                        <button class="wishlist" type="button" data-placement="right" title="Add to Wish List " onclick="wishlist.add('51 ');"></button>
                                        <div class="quickview" data-placement="right" title="Quick view" ><a href="index3cc7.html?route=product/quick_view&amp;product_id=51">Quick View</a></div>
                                        <button class="compare" type="button" data-placement="right" title="Compare this Product " onclick="compare.add('51 ');"></button>
                                      </div>
                                    </div>
                                    <!-- <div class="product-details"> -->
                                    <div class="caption">
                                      <h4><a href="index52a0.html?route=product/product&amp;product_id=51">aenean dignissim </a></h4>
                                      <p class="price">
                                        <span class="price-new">$59.60</span> <span class="price-old">$122.00</span>
                                        <span class="price-tax">Ex Tax: $48.00</span>
                                      </p>
                                      <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                      </div>
                                    </div>
                                    <!-- </div> -->
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="item text-center product-innerblock">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-block product-thumb transition">
                                  <div class="product-block-inner">
                                    <div class="image">
                                      <a href="indexbb02.html?route=product/product&amp;product_id=42">
                                      <img src="image/cache/catalog/demo/product/15-285x357.jpg" title="consectetur adipiscing" alt="consectetur adipiscing" class="img-responsive reg-image"/>
                                      <img class="img-responsive hover-image" src="image/cache/catalog/demo/product/3-285x357.jpg" title="consectetur adipiscing" alt="consectetur adipiscing"/>
                                      </a>
                                      <div class="saleback">
                                        <span class="saleicon sale">Sale</span>         
                                      </div>
                                      <span class="percentsaving">70%</span>
                                      <div class="button-group">
                                        <button type="button" data-placement="right" title="Add to Cart" class="addtocart" onclick="cart.add('42 ');">Add to Cart</button>
                                        <button class="wishlist" type="button" data-placement="right" title="Add to Wish List " onclick="wishlist.add('42 ');"></button>
                                        <div class="quickview" data-placement="right" title="Quick view" ><a href="index6d6f.html?route=product/quick_view&amp;product_id=42">Quick View</a></div>
                                        <button class="compare" type="button" data-placement="right" title="Compare this Product " onclick="compare.add('42 ');"></button>
                                      </div>
                                    </div>
                                    <!-- <div class="product-details"> -->
                                    <div class="caption">
                                      <h4><a href="indexbb02.html?route=product/product&amp;product_id=42">consectetur adipiscing </a></h4>
                                      <p class="price">
                                        <span class="price-new">$38.00</span> <span class="price-old">$122.00</span>
                                        <span class="price-tax">Ex Tax: $30.00</span>
                                      </p>
                                      <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                      </div>
                                    </div>
                                    <!-- </div> -->
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div id="carousel-0" class="banners-slider-carousel">
                <div class="container">
                  <div class="customNavigation">
                    <a class="prev fa fa-angle-left"></a>
                    <a class="next fa fa-angle-right"></a>
                  </div>
                  <div class="product-carousel" id="module-0-carousel">
                      @foreach($merk as $data)
                    <div class="slider-item">
                      <div class="product-block">
                        <div class="product-block-inner">
                          <a href="#"><img src="{{ asset('admin/images/logomerk/'.$data->foto)  }}" alt="laboriosam" /></a>
                        </div>
                      </div>
                    </div>
                      @endforeach
                  </div>
                </div>
              </div>
              <span class="module_default_width" style="display:none; visibility:hidden"></span>
              <div id="homeblog" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="blog-module latest blog">
                  <div class="box">
                    <!--<div class="title-wrapper">
                      <div class="box-heading">from the Blogs</div>
                      </div>-->
                    <div class="box-content">
                      <div class="box-product owl-carousel blog-carousel blog_grid_holder" id="blog-carousel">
                        @if (count($artikel) > 0)
                        @foreach($artikel as $data)
                       
                        <div class="blog_item">
                          <div class="product-block">
                            <div class="summary">
                              <div class="blog-left">
                                <div class="image">
                                  <img src="{{ asset('admin/images/cover/'.$data->cover)  }}" alt="from the Blogs" title="from the Blogs" class="img-thumbnail" />
                                  <p class="post_hover"><a class="icon zoom" title="Click to view Full Image " href="{{ asset('admin/images/cover/'.$data->cover)  }}" data-lightbox="example-set"><i class="fa fa-plus"></i> </a></p>
                                </div>
                              </div>
                              <div class="blog-desc">
                                <div class="blog_stats">
                                  <div class="date-time"> <b class="hl"> {{$data->created_at->diffForHumans()}} </b></div>
                                </div>
                                <h2 class="blog_title"><a href="/artikel/{{$data->slug}}">{{$data->judul}}</a> </h2>
                                <div class="desc">
                                  <p> {!! substr($data['deskripsi'],0,55) !!}....</p>
                                </div>
                                <div class="readmore">
                                  <p class="btn_readmore"> <a href="/artikel/{{$data->slug}}"> read more</a> </p>
                                </div>
                                <!--<div class="view-blog">
                                  <div class="write-comment"> <a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=information/blogger&amp;blogger_id=8"> 0 - Comments</a> </div>        
                                  </div>-->
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        @endforeach  
                        @endif                   
                      </div>
                      <!--<div class="buttons text-center">
                        <button type="button" onclick="location='http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=information/blogger/blogs ';" class="btn btn-primary">See all Blogs</button>
                        </div>-->
                    </div>
                  </div>
                </div>
              </div>
              <div id="psttestimonialcmsblock" class=" testimonial-block box col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="custom-testimonial-wrapper">
<div class="testimonial-inner">
<div class="testimonial-carousel box-content">
<ul id="testimonial-carousel">
  @foreach($testimoni as $data)
<li class="item">
<div class="item cms_face">
<div class="testmonial-image"><img alt="testmonial" title="testmonial" src="{{asset('assets/image/catalog/demo/banners/person1.png')}}" width="110" height="110"></div>
<div class="desc">
<p>{!!$data->deskrpsi!!}.</p>
</div>
<div class="product_inner_cms">
<div class="name"><a href="#">{{$data->nama}}</a></div>
<div class="designation"><a title="Iphone Developer" href="#">{{$data->profesi}}</a></div>
</div>
</div>
</li>
@endforeach
</ul>
</div>
</div>
</div>
</div>
              <div id="serviceblock">
                <div class="container">
                  <div class="service-wrapper">
                    <ul>
                      <li class="service-item second col-xs-6 col-md-3 col-lg-3">
                        <div class="service-item-inner">
                          <div class="image-block"><span class="image-icon">service-icon</span></div>
                          <div class="service-right"><span class="service-title">free world delivery</span> <span class="service-desc">on order over $100</span></div>
                        </div>
                      </li>
                      <li class="service-item four col-xs-6 col-md-3 col-lg-3">
                        <div class="service-item-inner">
                          <div class="image-block"><span class="image-icon">service-icon</span></div>
                          <div class="service-right"><span class="service-title">moneyback guarantee</span> <span class="service-desc">best deal with 30days</span></div>
                        </div>
                      </li>
                      <li class="service-item four col-xs-6 col-md-3 col-lg-3">
                        <div class="service-item-inner">
                          <div class="image-block"><span class="image-icon">service-icon</span></div>
                          <div class="service-right"><span class="service-title">best online support</span> <span class="service-desc">hours : 8am-11pm</span></div>
                        </div>
                      </li>
                      <li class="service-item first col-xs-6 col-md-3 col-lg-3">
                        <div class="service-item-inner">
                          <div class="image-block"><span class="image-icon">service-icon</span></div>
                          <div class="service-right"><span class="service-title">win $100 to shop</span> <span class="service-desc">get membership</span></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection