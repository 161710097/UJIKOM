@php
$contact =App\Contact::all();
@endphp
<footer>
          <div id="footer">
          <div class="content_footer_top">
          </div>
          <div class="content_footer_wrapper">
            <div class="content_footer_inner">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 col-lg-3 column common first">
                    <h5>Informasi</h5>
                    <ul class="list-unstyled">
                      <li><a href="index8816.html?route=information/information&amp;information_id=4">About Us</a></li>
                      <li><a href="index1766.html?route=information/information&amp;information_id=6">Delivery Information</a></li>
                      <li><a href="index1679.html?route=information/information&amp;information_id=3">Privacy Policy</a></li>
                      <li><a href="index99e4.html?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
                    </ul>
                  </div>
                  <div class="footer-left column col-md-3 col-lg-3">
                    <div id="contact">
                      <h5>Hubungi Kami</h5>
                      <ul>
                        @foreach($contact as $data)
                        <li class="address">{{$data->alamat}}</li>
                        <li class="fax">{{$data->phone}}</li>
                        <li class="email"><a href="#">{{$data->email}}</a></li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="footer-social column col-md-3 col-lg-3">
                    <div class="social">
                      <h5>Ikuti Kita</h5>
                      <ul>
                        <li class="social-item">
                          <div class="social-item-inner">
                            <div class="social-image"><span class="social-icon">&nbsp;</span></div>
                            <div class="social-right"><a href="#">Facebook</a></div>
                          </div>
                        </li>
                        <li class="social-item">
                          <div class="social-item-inner">
                            <div class="social-image"><span class="social-icon">&nbsp;</span></div>
                            <div class="social-right"><a href="#">instagram</a></div>
                          </div>
                        </li>
                        <li class="social-item">
                          <div class="social-item-inner">
                            <div class="social-image"><span class="social-icon">&nbsp;</span></div>
                            <div class="social-right"><a href="#">twitter</a></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3 column fourth">
                    <div class="footer-right-wrapper">
                      
                      <div class="newsletter">
                        <div class="newsletter-wrapper">
                          <!-- <div class="container">
                            <div class="row"> -->
                          <div class="newsletter-details col-md-12 col-xs-12 col-lg-12 ">
                            <div class="newsletter-desc box">
                              <div class="title-wrapper">
                                <div class="newsletter-title box-heading">newsletter</div>
                              </div>
                              <!--<div class="desc">subscribe now</div>-->
                            </div>
                          </div>
                          <div class="newsletter-block col-md-12 col-xs-12 col-lg-12">
                            <!--<span class="newsletter-image"></span>
                              <span class="newsletter-info">subscribe! new items.</span>-->
                            <form method="post">
                              <div class="form-group required">
                                <label class="col-sm-2 control-label" for="txtemail">Enter your e-mail</label>
                                <div class="input-news">
                                  <input type="email" name="txtemail" id="txtemail" value="" placeholder="Enter your e-mail" class="form-control input-lg"  /> 
                                </div>
                                <div class="subscribe-btn">
                                  <button type="submit" class="btn btn-default btn-lg" onclick="return subscribe();">subscribe</button>  
                                </div>
                              </div>
                            </form>
                          </div>
                          <!-- </div>
                            </div> -->
                        </div>
                      </div>
                      <div class="footer-payment">
                        <div class="payment-block">
                          <h5>payment method</h5>
                          <ul>
                            <li class="visa"><a href="#"><img src="image/catalog/demo/banners/visa.svg" alt=""></a></li>
                            <li class="paypal"><a href="#"><img src="image/catalog/demo/banners/paypal.svg" alt=""></a></li>
                            <li class="discover"><a href="#"><img src="image/catalog/demo/banners/discover.svg" alt=""></a></li>
                            <li class="mastercard"><a href="#"><img src="image/catalog/demo/banners/mastercard.svg" alt=""></a></li>
                            <li class="american-express"><a href="#"><img src="image/catalog/demo/banners/american-express.svg" alt=""></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="copyright-container ">
              <div class="content_footer_bottom container">
                <div class="powered">Powered By <a href="#">OpenCart</a> Your Store &copy; 2018</div>
              </div>
              <div class="footer-container">
                <!-- <div id="bottomfooter">
                  <ul>
                    <li class="first"><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/special">Specials</a></li>
                    <li><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=affiliate/login">Affiliates</a></li>
                    <li><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=account/voucher">Gift Certificates</a></li>
                    <li><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=product/manufacturer">Brands</a></li>
                    <li><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=account/return/add">Returns</a></li>
                    <li><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=information/sitemap">Site Map</a></li>
                    <li class="last"><a href="http://thementic.com/opencart/OPC02/OPC0200032/index.php?route=information/contact">Contact Us</a></li>
                  </ul>
                  </div> -->
              </div>
            </div>
          </div>
        </footer>