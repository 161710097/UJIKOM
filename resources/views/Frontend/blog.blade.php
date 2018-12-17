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
<div class="container">
  <ul class="breadcrumb">
    <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>
    <li><a href="indexc295.html?route=information/blogger">Blogs</a></li>
  </ul>
  <div class="row">
    @include('partial.sideartikel')
    <div id="content" class="col-sm-9">
      <div class="blog all-blogs">
        <!--<h1>All Blogs</h1>-->
        <div class="blog_grid_holder">
          <h2 class="page-title">Home Blog</h2>
          @foreach($artikel as $data)
          <div class="blog_item_wrapper">
            <div class="blog_item">
              <div class="summary">
                <div class="blog-left-content">
                  <div class="image">
                    <img src="{{ asset('admin/images/cover/'.$data->cover)  }}" alt="Blogs" title="Blogs" class="img-thumbnail" />
                    <div class="post_hover"> </div>
                    <p class="post_hover"><a class="icon zoom" title="Click to view Full Image " href="{{ asset('admin/images/cover/'.$data->cover)  }}" data-lightbox="example-set"><i class="fa fa-plus"></i> </a></p>
                  </div>
                </div>
                <div class="blog-right-content">
                  <h2 class="blog_title"><a href="/artikel/{{$data->slug}}">{{$data->judul}}</a></h2>
                  <div class="blog_stats">
                    <!--<span> <a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=information/blogger&amp;blogger_id=8"><i class="fa fa-comments"></i> 0Comment</a> </span>-->
                    <span> <i class="fa fa-calendar"></i>  {{$data->created_at->format('d M, Y')}}</span>
                    <!--<span> <a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=information/blogger&amp;blogger_id=8"> <i class="fa fa-long-arrow-right"></i> read more</a> </span>-->
                  </div>
                  <!--<p> certain circumstances and owing to the claims of duty or the obligations of business.</p>        <p><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=information/blogger&amp;blogger_id=8">read more<i class="fa fa-long-arrow-right"></i></a> </p>-->
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
@endsection