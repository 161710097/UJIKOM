<aside id="column-left" class="col-sm-3 hidden-xs">
      <div class="box">
        <div class="title-wrapper">
          <div class="box-heading">Kategori</div>
        </div>
        <div class="box-content">
          <ul class="box-category treeview-list treeview">
            @foreach($kategori as $data)
            <li>
              <a href="/artikel/kategori/{{ $data->slug }}">{{$data->nama}} <span>({{$data->Artikel->count()}})</span></a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="box featured product-box">
        <div class="container">
          <div class="title-wrapper">
            <div class="box-heading">Postingan Terbaru</div>
          </div>
          <div class="box-content">
            <div class="featured-products home-products">
              <div class="box-product productbox-grid" id="featured-grid">
                @foreach($recent as $data)
                <div class="product-items">
                  <div class="product-block product-thumb transition">
                    <div class="product-block-inner">
                      <div class="image">
                        <a href="/artikel/{{ $data->slug }}">
                        <img width="79px" height="99px" src="{{ asset('admin/images/cover/'.$data->cover)  }}" title="consectetur adipiscing" alt="consectetur adipiscing" class="img-responsive reg-image"/>
                        <img width="79px" height="99px" class="img-responsive hover-image" src="{{ asset('admin/images/cover/'.$data->cover)  }}" title="consectetur adipiscing" alt="consectetur adipiscing"/>
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
                        <h3><a href="/blog/{{ $data->slug }}">{{substr($data['judul'],0,25)}}... </a></h3>
                        {!!substr($data['deskripsi'],0,200)!!}...
                        <p class="price">
                          
                        </p>
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
                @endforeach          
              </div>
            </div>
          </div>
        </div>
      </div>
      <span class="featured_default_width" style="display:none; visibility:hidden"></span>
      <!-- <div class="swiper-viewport">
        <div id="banner0" class="swiper-container  single-banner ">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="#"><img src="{{asset('assets/image/cache/catalog/demo/banners/left-banner-277x368.jpg')}}" alt="left-banner" class="img-responsive" /></a></div>
          </div>
          <!-- If we need pagination
          <div class="swiper-pagination"></div>
        </div>
      </div> --> -->
      <span class="latest_default_width" style="display:none; visibility:hidden"></span>
    </aside>