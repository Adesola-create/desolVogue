<!doctype html>
<html lang="en">

<!-- Mirrored from www.fullstacksolution.net/demo/ayira/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Jun 2021 08:25:29 GMT -->
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendors/owlcarousel/css/owl.carousel.min.css" />
<link rel="stylesheet" href="assets/vendors/owlcarousel/css/owl.theme.default.min.css" />
<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">
<script src="assets/js/jquery-3.2.1.min.js"></script> 
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<title>Desol vogue</title>
</head>
<body>
<!-- Header Start -->
<?php  include('header.php') ;

if(isset($_POST['send_email'])){
  $email =$_POST['email'];


  $sq = $db->query("INSERT INTO ultimate (email) VALUES ('$email')");
  if($sq){
    $x = 'Message sent';
  }else{
    $x= "Message not sent";
  }
}else{
  $x="";
}
echo $x;

?>
<!-- Slider Start  -->
<div class="slider slider-one">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active"> <img src="assets/images/slider-1.jpg" class="d-block w-100" alt="desol vogue">
        <div class="carousel-caption text-start color-scheme-dark">
          <div class="container">
            <h5 class="aos-init aos-animate"> </h5>
            <h3>The fashion<br>
              thats fits your <br>
              <span>imagination</span></h3>
            <a href="shop.php" class="slider-btn primary_dark_btn">Shop Now</a> </div>
        </div>
      </div>
      <div class="carousel-item"> <img src="assets/images/slider-5.jpg" class="d-block w-100" alt="desol vogue">
        <div class="carousel-caption text-start color-scheme-dark">
          <div class="container">
            <!-- <h5>Spring Sale 2021 </h5> -->
            <h3>Shop Now<br>
              At mouth watering <br>
              <span>Prices</span></h3>
            <a href="shop.php" class="slider-btn primary_dark_btn">Shop Now</a> </div>
        </div>
      </div>
      <div class="carousel-item"> <img src="assets/images/slider-6.jpg" class="d-block w-100" alt="desol vogue">
        <div class="carousel-caption text-start color-scheme-dark">
          <div class="container">
            <!-- <h5>Spring Sale 2021 </h5> -->
            <h3>Passion for<br>
              Fashion Style <br>
              <span>For Live</span></h3>
            <a href="shop.php" class="slider-btn primary_dark_btn">Shop Now</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Slider End --> 

<!-- Our Highlights Start -->
<div class="highlights">
  <div class="container">
    <div class="all_highlights">
      <div class="row">
        <div class="col-sm-6 col-md-3 col-xl-3"> 
          <!-- Free Shipping Start  -->
          <div class="free_shipping border-start-0 ps-0">
            <div class="icone"> <i class="flaticon-shipped"></i> </div>
            <div class="free_shipping_info">
              <h5>Free Delivery</h5>
              <p>Free for $50+ orders</p>
            </div>
          </div>
        </div>
        <!-- Free Shipping End -->
        
        <div class="col-sm-6 col-md-3 col-xl-3"> 
          <!-- Easy Returns Start  -->
          <!-- <div class="free_shipping">
            <div class="icone"> <i class="flaticon-return-box"></i> </div>
            <div class="free_shipping_info">
              <h5>Easy Returns</h5>
              <p>14 Days easy return</p>
            </div>
          </div> -->
        </div>
        <!-- Easy Returns End --> 
        
        <!-- Fast Support Start  -->
        <div class="col-sm-6 col-md-3 col-xl-3">
          <div class="free_shipping">
            <div class="icone"> <i class="flaticon-support"></i> </div>
            <div class="free_shipping_info">
              <h5>Fast Support</h5>
              <p>24/7 Customer support</p>
            </div>
          </div>
        </div>
        <!-- Fast Support End --> 
        
        <!-- Member Discoun Start  -->
        <div class="col-sm-6 col-md-3 col-xl-3">
          <div class="free_shipping border-bottom-0">
            <div class="icone"> <i class="flaticon-offer"></i> </div>
            <div class="free_shipping_info">
              <h5>Member Discount</h5>
              <p>Discount for elite members</p>
            </div>
          </div>
        </div>
        <!-- Member Discoun End --> 
        
      </div>
    </div>
  </div>
</div>
<!-- Our Highlights End --> 

<!-- Categories Start -->
<div class="categories categories-one section-padding">
  <div class="container">
    <div class="row">
      <div class="col-sx-12 col-sm-6 col-md-12 col-lg-6">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <div class="banner-item banner-01"> <a href="assets/images/pics/native1.jpg"> <img class="w-100" src="assets/images/pics/native1.jpg" alt="banner"> </a>
                  <div class="banner-text"> <a href="#" class="primary_dark_btn">Native Apparels</a> </div>
                </div>
              </div>
              <!-- <div class="col-md-12">
                <div class="banner-item banner-01"> <a href="assets/images/p-06.jpg"> <img class="w-100" src="assets/images/p-06.jpg" alt="banner"> </a>
                  <div class="banner-text"> <a href="#" class="primary_dark_btn">Winter Collection</a> </div>
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <div class="banner-item banner-03"> <a href="assets/images/banner-03.jpg"> <img class="w-100" src="assets/images/banner-03.jpg" alt="banner"> </a>
                  <div class="banner-text"> <a href="#" class="primary_dark_btn">Woman Store</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sx-12 col-sm-6 col-md-12 col-lg-6">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <div class="banner-item banner-01"> <a href="assets/images/p-06.jpg"> <img class="w-100" src="assets/images/p-06.jpg" alt="banner"> </a>
                  <div class="banner-text"> <a href="#" class="primary_dark_btn">Special Discount</a> </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="banner-item banner-04"> <a href="assets/images/pics/male1.jpg"> <img class="w-100" src="assets/images/pics/male1.jpg" alt="banner"> </a>
                  <div class="banner-text"> <a href="#" class="primary_dark_btn">Man's Native</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="banner-item banner-last mb-m"> <a href="shop-grid-left-sidebar.html"> <img class="w-100" src="assets/images/banner-07.jpg" alt="banner"> </a>
                  <div class="banner-text"> <a href="shop-grid-left-sidebar.html" class="primary_dark_btn">Man's Store</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Categories End --> 

<!-- Nwe Arrivals Start -->
<section class="new_arrivals section-padding-03">
  <div class="container"> 
    <!-- Section Title Start -->
    <div class="section-title text-center">
      <h4 class="title text_darkt">New Arrivals</h4>
      <span class="title-subtitle text_light">Get your latest fashion stylings .</span> </div>
    <!-- Section Title End --> 
    
    <!-- product Start -->
    <div class="row">
      <div class="col-md-12"> 
        
        <!-- product carousel Start -->
        
        <ul class="thumbnails owl-carousel owl-theme owl-loaded owl-drag list-unstyled" id="new_arrivals">
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/native11.jpg"> <img  class="thumbnail" src="assets/images/pics/native11.jpg" alt="desolvogue"> </a> <span class="new product-label">New</span> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">Women floral dress</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(212)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="old-price">$235</div>
                          <div class="sale-price">$150</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                      
                      
                      
                    </div>
                  </div>
                  <div class="swatches-on-grid">
                    <div class="widget-color">
                      <ul class="color-list ps-0">
                        <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                        <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/eng1.jpeg"> <img  class="thumbnail" src="assets/images/pics/eng1.jpeg" alt="ayira"> </a> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">women floral dress</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(25)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="sale-price">$129</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/eng2.jpeg"> <img  class="thumbnail" src="assets/images/pics/eng2.jpeg" alt="ayira"> </a> <span class="new product-label">New</span> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">Women floral dress</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(110)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="old-price">$235</div>
                          <div class="sale-price">$150</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                  <div class="swatches-on-grid">
                    <div class="widget-color">
                      <ul class="color-list ps-0">
                        <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                        <li class="active" data-tooltip="tooltip" data-placement="top" title="Black" data-color="#000000"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/eng3.jpg"> <img  class="thumbnail" src="assets/images/pics/eng3.jpg" alt="ayira"> </a> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">Women gown</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(04)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="sale-price">$249.00</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                  <div class="swatches-on-grid">
                    <div class="widget-color">
                      <ul class="color-list ps-0">
                        <li data-tooltip="tooltip" data-placement="top" title="Light green" data-color="#b6d5c5"></li>
                        <li data-tooltip="tooltip" data-placement="top" title="blue dark" data-color="#333b71"></li>
                        <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/eng5.jpg"> <img  class="thumbnail" src="assets/images/pics/eng5.jpg" alt="desolvogue"> </a> <span class="new product-label">New</span> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">Women floral dress</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(212)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="old-price">$235</div>
                          <div class="sale-price">$150</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                    <div class="swatches-on-grid">
                      <div class="widget-color">
                        <ul class="color-list ps-0">
                          <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                          <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <!-- product carousel End --> 
      </div>
      <div class="col-md-12"> 
        <!-- View All Products Start -->
        <div class="text-center"> <a href="shop-grid-left-sidebar.html" class="load-more primary_dark_btn">View All Products</a> </div>
        <!-- View All Products End --> 
      </div>
    </div>
    <!-- product End --> 
    
  </div>
</section>
<!-- Nwe Arrivals End --> 

<!-- Featured Collections Start -->
<section class="new_arrivals section-padding">
  <div class="container"> 
    <!-- Section Title Start -->
    <div class="section-title text-center">
      <h4 class="title text_dark">Featured Collections</h4>
      <span class="title-subtitle text_light">smart apparels for women.</span> </div>
    <!-- Section Title End --> 
    
    <!-- product Start -->
    <div class="row">
      <div class="col-md-12"> 
        
        <!-- product carousel Start -->
        
        <ul class="thumbnails owl-carousel owl-theme owl-loaded owl-drag list-unstyled" id="collections">
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/eng5.jpg"> <img  class="thumbnail" src="assets/images/pics/eng5.jpg" alt="ayira"> </a> <span class="off product-label">20% off</span> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">Women floral dress</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(212)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="old-price">$235</div>
                          <div class="sale-price">$150</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                    <div class="swatches-on-grid">
                      <div class="widget-color">
                        <ul class="color-list ps-0">
                          <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                          <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/eng6.jpg"> <img  class="thumbnail" src="assets/images/pics/eng6.jpg" alt="ayira"> </a> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">Women floral dress</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(25)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="sale-price">$129</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/native9.jpg"> <img  class="thumbnail" src="assets/images/pics/native9.jpg" alt="ayira"> </a> <span class="off product-label">20% off</span> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">pattern designs</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(110)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="old-price">$149.00</div>
                          <div class="sale-price">$99.00</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                  <div class="swatches-on-grid">
                    <div class="widget-color">
                      <ul class="color-list ps-0">
                        <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                        <li class="active" data-tooltip="tooltip" data-placement="top" title="Black" data-color="#000000"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/native9.jpg"> <img  class="thumbnail" src="assets/images/pics/native9.jpg" alt="ayira"> </a> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">pattern designs</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(04)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="sale-price">$249.00</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                  <div class="swatches-on-grid">
                    <div class="widget-color">
                      <ul class="color-list ps-0">
                        <li data-tooltip="tooltip" data-placement="top" title="Light green" data-color="#b6d5c5"></li>
                        <li data-tooltip="tooltip" data-placement="top" title="blue dark" data-color="#333b71"></li>
                        <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/native7.jpg"> <img  class="thumbnail" src="assets/images/pics/native7.jpg" alt="desol"> </a> <span class="new product-label">New</span> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>  
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">native</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(212)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="old-price">$235</div>
                          <div class="sale-price">$150</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                    <div class="swatches-on-grid">
                      <div class="widget-color">
                        <ul class="color-list ps-0">
                          <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                          <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <!-- product carousel End --> 
      </div>
      <div class="col-md-12"> 
        <!-- View All Products Start -->
        <div class="text-center"> <a href="shop.php" class="load-more primary_dark_btn">View All Products</a> </div>
        <!-- View All Products End --> 
      </div>
    </div>
    <!-- product End --> 
    
  </div>
</section>
<!-- Featured Collections End --> 

<!-- New Banner Start -->
<section class="new_banner section-padding color-scheme-dark">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-6"> 
        <!-- Banner Items Start -->
        <div class="banner-item banner-05"> <a href="shop-grid-left-sidebar.html"> <img src="assets/images/banner-08.jpg" alt="banner"> </a>
          <div class="banner-text">
            <h4 class="title no_after">Resort <b>Mans</b><br>
              Collections</h4>
            <a class="banner-btn primary_dark_btn" href="shop.php">Shop Now</a> </div>
        </div>
        <!-- Banner Items End --> 
      </div>
      <div class="col-sm-6 col-lg-6"> 
        <!-- Banner Items Start -->
        <div class="banner-item banner-06 mb-m"> <a href="shop-grid-left-sidebar.html"> <img src="assets/images/banner-09.jpg" alt="banner"> </a>
          <div class="banner-text">
            <h4 class="title no_after">New <b>Womans</b><br>
              Collections</h4>
            <a class="banner-btn primary_dark_btn" href="shop.php">Shop Now</a> </div>
        </div>
        <!-- Banner Items End --> 
      </div>
    </div>
  </div>
</section>
<!-- New Banner End --> 

<!-- Trending Products Start -->
<section class="trending_products section-padding-03 trending_products-one all_tab">
  <div class="container"> 
    <!-- Section Title Start -->
    <div class="section-title text-center">
      <h4 class="title text_dark">Our Products</h4>
      <!-- Section Title End -->
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs justify-content-center text-uppercase" id="myTab" role="tablist">
            <li class="nav-item" role="presentation"> <a class="nav-link active text_light" id="womans-cloths-tab" data-bs-toggle="tab" href="#womans-cloths" role="tab" aria-selected="true">Woman's Cloths </a> </li>
            <li class="nav-item" role="presentation"> <a class="nav-link text_light" id="mans-tab" data-bs-toggle="tab" href="#mans" role="tab"  aria-selected="false">Man's Cloths</a> </li>
            <!-- <li class="nav-item" role="presentation"> <a class="nav-link text_light" id="assessories-tab" data-bs-toggle="tab" href="#assessories" role="tab" aria-selected="false">Assessories</a> </li> -->
            <!-- <li class="nav-item" role="presentation"> <a class="nav-link text_light" id="bags-tab" data-bs-toggle="tab" href="#bags" role="tab"  aria-selected="true">Bags</a> </li> -->
            <!-- <li class="nav-item" role="presentation"> <a class="nav-link text_light" id="shoes-tab" data-bs-toggle="tab" href="#shoes" role="tab" aria-selected="false">Shoes</a> </li> -->
            <!-- <li class="nav-item" role="presentation"> <a class="nav-link text_light" id="watches-tab" data-bs-toggle="tab" href="#watches" role="tab" aria-selected="false">Watches</a> </li> -->
          </ul>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="womans-cloths" role="tabpanel" aria-labelledby="womans-cloths-tab">
            <div class="row">
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/eng5.jpg"> <img  class="thumbnail" src="assets/images/pics/eng5.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> 
                    <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(212)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$235</div>
                              <div class="sale-price">$150</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/eng6.jpg"> <img  class="thumbnail" src="assets/images/pics/eng6.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(25)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$129</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/eng1.jpeg"> <img  class="thumbnail" src="assets/images/pics/eng1.jpeg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(110)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$149.00</div>
                              <div class="sale-price">$99.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                            <li class="active" data-tooltip="tooltip" data-placement="top" title="Black" data-color="#000000"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/p-12.jpg"> <img  class="thumbnail" src="assets/images/p-12.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#">Women robe designers</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(04)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$249.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Light green" data-color="#b6d5c5"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="blue dark" data-color="#333b71"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="mans" role="tabpanel" aria-labelledby="mans-tab">
            <div class="row">
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/male3.jpg"> <img  class="thumbnail" src="assets/images/pics/male3.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#">plain and pattern designs</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(212)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$235</div>
                              <div class="sale-price">$150</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/male1.jpg"> <img  class="thumbnail" src="assets/images/pics/male1.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#">plain designs</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(25)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$129</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/male2.jpg"> <img  class="thumbnail" src="assets/images/pics/male2.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">native designs</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(110)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$149.00</div>
                              <div class="sale-price">$99.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                            <li class="active" data-tooltip="tooltip" data-placement="top" title="Black" data-color="#000000"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/male4.jpg"> <img  class="thumbnail" src="assets/images/pics/male4.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">pattern designs</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(04)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$249.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Light green" data-color="#b6d5c5"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="blue dark" data-color="#333b71"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="assessories" role="tabpanel" aria-labelledby="assessories-tab">
            <div class="row">
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/male3.jpg"> <img  class="thumbnail" src="assets/images/pics/male3.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#">plain and pattern</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(212)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$235</div>
                              <div class="sale-price">$150</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-10.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(25)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$129</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-11.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(110)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$149.00</div>
                              <div class="sale-price">$99.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                            <li class="active" data-tooltip="tooltip" data-placement="top" title="Black" data-color="#000000"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-12.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women danim jacket</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(04)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$249.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Light green" data-color="#b6d5c5"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="blue dark" data-color="#333b71"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="bags" role="tabpanel" aria-labelledby="bags">
            <div class="row">
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/native5.jpg"> <img  class="thumbnail" src="assets/images/pics/native5.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#">plain designs</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(212)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$235</div>
                              <div class="sale-price">$150</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-10.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(25)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$129</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-11.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(110)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$149.00</div>
                              <div class="sale-price">$99.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                            <li class="active" data-tooltip="tooltip" data-placement="top" title="Black" data-color="#000000"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-12.jpg" alt="desol vogue"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women danim jacket</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(04)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$249.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Light green" data-color="#b6d5c5"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="blue dark" data-color="#333b71"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="shoes" role="tabpanel" aria-labelledby="shoes-tab">
            <div class="row">
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/p-09.jpg"> <img  class="thumbnail" src="assets/images/p-09.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(212)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$235</div>
                              <div class="sale-price">$150</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-10.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(25)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$129</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-11.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(110)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$149.00</div>
                              <div class="sale-price">$99.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                            <li class="active" data-tooltip="tooltip" data-placement="top" title="Black" data-color="#000000"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-12.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women danim jacket</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(04)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$249.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Light green" data-color="#b6d5c5"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="blue dark" data-color="#333b71"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="watches" role="tabpanel" aria-labelledby="watches-tab">
            <div class="row">
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-09.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(212)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$235</div>
                              <div class="sale-price">$150</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-10.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(25)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$129</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-11.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women floral dress</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(110)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="old-price">$149.00</div>
                              <div class="sale-price">$99.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                            <li class="active" data-tooltip="tooltip" data-placement="top" title="Black" data-color="#000000"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="product-detail-v1.html"> <img  class="thumbnail" src="assets/images/p-12.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="product-detail-v1.html">Women danim jacket</a> </div>
                      <div class="product-rating d-flex">
                        <ul class="d-flex">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(04)</span> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$249.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                      <div class="swatches-on-grid">
                        <div class="widget-color">
                          <ul class="color-list ps-0">
                            <li data-tooltip="tooltip" data-placement="top" title="Light green" data-color="#b6d5c5"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="blue dark" data-color="#333b71"></li>
                            <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                          </ul>
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
  </div>
</section>
<!-- Trending Products End --> 

<!-- Lookbook Start 
<section class="lookbook section-padding-03 section-padding-04">
  <div class="container">
    <div class="row">
      <div class="col-lg-6"> 
         Banner Items Start 
         <div class="banner-item hero"><img src="assets/images/banner-10.jpg" class="w-100" alt="banner">
           <div class="hero-points one">
                        <div class="point point-one" data-image="assets/images/p-13.jpg" data-title="Sunglasses" data-price="$40" > + </div>
                        <div class="point point-two" data-image="assets/images/p-14.jpg" data-title="Watch" data-price="$40" > + </div>
                        <div class="point point-three" data-image="assets/images/p-10.jpg" data-title="Dress" data-price="$40" > + </div>
                        <div class="point point-four" data-image="assets/images/p-11.jpg" data-title="Dress" data-price="$40" > + </div>
                        <div class="point point-five" data-image="assets/images/p-49.jpg" data-title="Bag" data-price="$40" > + </div>
                        <div class="point point-six" data-image="assets/images/p-17.jpg" data-title="Dress" data-price="$40" > + </div>
                        <div class="point point-seven" data-image="assets/images/p-50.jpg" data-title="Shoes" data-price="$40" > + </div>

                         

                       
                       <div class="product-hero">
                       <div class="point-btn-close"><a class="cart-close" href="javascript:;"> <span></span> <span></span> </a></div>
                       <div class="product-grid-item">
              <div class="product-element-top"> <a href="product-detail-v1.html"> <img class="thumbnail" src="assets/images/p-06.jpg" alt="ayira"> </a> <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div></div>
              
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="product-detail-v1.html">Women floral dress</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(25)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="sale-price">$129</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                       </div>
                        
        </div> 
        
        
        
        </div>
        Banner Items End 
      </div>
      <div class="col-lg-6 new_arrivals"> 
         Section Title Start 
        <div class="section-title text-start">
            <h4 class="title no_after text_dark">Meet The founder</h4>
             <span class="subtitle text_light"> Adeyemi Adesola is a young business woman 
             dj ghhjreslgtirj.njhiebnj bnjfsuitnhljfidthuhyuftuhlygr.uhyMNhk.thueuioueoiruieftgjykhulji;k;jhhggvcb fuhhhjdnvxcnhyuxdyfdbjcxhjhjhjculbn vlyucxvjhh.uujmNhjjmnkhkhnmkjvmv,j jkkb lkjjk. </span>
        </div>
         Section Title End 
        
         product Start 
        <div class="row mt-3 mt-m">
          <div class="col-md-12 mt-4"> 
            
             product carousel Start 
            
            <ul class="thumbnails owl-carousel owl-theme owl-loaded owl-drag list-unstyled" id="lookbook">
              <li>
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/founder1.jpg"> <img  class="thumbnail" src="assets/images/pics/founder1.jpg" alt="desol"> </a></div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#"><b>Desol Vogue</b></a> </div>
                    </div>
                    <!-- <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$150</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </li>
              <li>
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/native3.jpg"> <img  class="thumbnail" src="assets/images/pics/native3.jpg" alt="ayira"> </a> </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#"><b>Desol Vogue</b></a> </div>
                    </div>
                   <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$129</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </li>
              <li>
                <div class="product-grid-item">
                  <div class="product-element-top"> <a href="assets/images/pics/native1.jpg"> <img  class="thumbnail" src="assets/images/pics/native1.jpg" alt="desol vogue"> </a>  </div>
                  <div class="ayira-buttons">
                    <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                    <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                    <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
                  </div>
                  <div class="product-content">
                    <div class="product-category-action">
                      <div class="product-title"> <a href="#"><b>Desol Vogue</b></a> </div>
                    </div>
                    <div class="wrap-price">
                      <div class="wrapp-swap">
                        <div class="swap-elements">
                          <div class="price">
                            <div class="product-price">
                              <div class="sale-price">$99.00</div>
                            </div>
                          </div>
                          <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </li>
            </ul>
            product carousel End
          </div>
          <div class="col-md-12"> 
             View All Products Start 
            <div class="text-start"> <a href="shop-grid-left-sidebar.html" class="load-more primary_dark_btn">View All Products</a> </div> -->
            <!-- View All Products End 
          </div>
        </div>
         product End 
      </div>
    </div>
  </div>
</section>
 Lookbook End --> 

<!-- Best Selling Items Start -->
<section class="new_arrivals section-padding-05">
  <div class="container"> 
    <!-- Section Title Start -->
    <div class="section-title text-center">
      <h4 class="title text_dark">Best Fabrics Designs</h4>
      <span class="title-subtitle text_light">Get your best quality fabrics for lower prices from our store</span> </div>
    <!-- Section Title End --> 
    
    <!-- product Start -->
    <div class="row">
      <div class="col-md-12"> 
        
        <!-- product carousel Start -->
        
        <ul class="thumbnails owl-carousel owl-theme owl-loaded owl-drag list-unstyled" id="best_selling">
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/fabrics6.jpg"> <img  class="thumbnail" src="assets/images/pics/fabrics6.jpg" alt="desol vogue"> </a></div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">plain and pattern design</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(212)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="sale-price">$399</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                  <div class="swatches-on-grid">
                    <div class="widget-color">
                      <ul class="color-list ps-0">
                        <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                        <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/fabrics3.jpg"> <img  class="thumbnail" src="assets/images/pics/fabrics3.jpg" alt="desol vogue"> </a> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="product-detail-v1.html">plain and pattern design</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(25)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="sale-price">$399</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/fabrics4.jpg"> <img  class="thumbnail" src="assets/images/pics/fabrics4.jpg" alt="desol vogue"> </a></div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">African designs </a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(110)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="sale-price">$399</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                  <div class="swatches-on-grid">
                    <div class="widget-color">
                      <ul class="color-list ps-0">
                        <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                        <li class="active" data-tooltip="tooltip" data-placement="top" title="Black" data-color="#000000"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/fabrics5.jpg"> <img  class="thumbnail" src="assets/images/pics/fabrics5.jpg" alt="desol vogue"> </a> </div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="#l"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#">plain designs</a> </div>
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(04)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="sale-price">$399</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                  <div class="swatches-on-grid">
                    <div class="widget-color">
                      <ul class="color-list ps-0">
                        <li data-tooltip="tooltip" data-placement="top" title="Light green" data-color="#b6d5c5"></li>
                        <li data-tooltip="tooltip" data-placement="top" title="blue dark" data-color="#333b71"></li>
                        <li data-tooltip="tooltip" data-placement="top" title="Sea blue" data-color="#7c90c2"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="product-grid-item">
              <div class="product-element-top"> <a href="assets/images/pics/shop3.jpg"> <img  class="thumbnail" src="assets/images/pics/shop2.jpg" alt="desol vogue"> </a></div>
              <div class="ayira-buttons">
                <div class="ayira-wishlist-btn"> <a class="" href="#"><i class="flaticon-heart"></i></a> </div>
                <div class="ayira-compare-btn"> <a class="button ayira-tooltip" href="compare.html"><i class="flaticon-reload"></i></a> </div>
                <div class="quick-view"> <a href="#" class="open-quick-view" data-bs-toggle="modal" data-bs-target="#quick_view"><i class="flaticon-search-2"></i></a> </div>
              </div>
              <div class="product-content">
                <div class="product-category-action">
                  <div class="product-title"> <a href="#"></a> </div>ready to wear native
                  <div class="product-rating d-flex">
                    <ul class="d-flex">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>(212)</span> </div>
                </div>
                <div class="wrap-price">
                  <div class="wrapp-swap">
                    <div class="swap-elements">
                      <div class="price">
                        <div class="product-price">
                          <div class="sale-price">$399</div>
                        </div>
                      </div>
                      <div class="btn-add header-action-btn-cart"> <a href="javascript:void(0)" class="add_to_cart_button"> <i class="fa fa-shopping-cart"></i> Add to cart</a> </div>
                    </div>
                  </div>
                  <div class="swatches-on-grid">
                    <div class="widget-color">
                      <ul class="color-list ps-0">
                        <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                        <li data-tooltip="tooltip" data-placement="top" title="Pink" data-color="#ee3e6d"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <!-- product carousel End --> 
      </div>
      <div class="col-md-12"> 
        <!-- View All Products Start -->
        <div class="text-center"> <a href="shop-grid-left-sidebar.html" class="load-more primary_dark_btn">View All Products</a> </div>
        <!-- View All Products End --> 
      </div>
    </div>
    <!-- product End --> 
    
  </div>
</section>
<!-- Best Selling Items End --> 

<!-- Newsletter Start -->
<section class="newsletter color-scheme-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <div class="newsletter-title">
          <h4 class="title no_after">Be Our Ultimate Customer</h4>
          <span class="title-subtitle pt-0">Submit your email address to receive the latest promotional information and get a <span class="discount">20%</span> discount on the first online payment</span> </div>
        <div class="newsletter-form">
          <form   method="POST">
            <input type="email" placeholder="Your email address" id="email" name="email">
            <button name="send_email" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Newsletter End --> 

<!-- Testimonials Start -->
<section class="testimonials  section-padding-05">
  <div class="container"> 
    <!-- Section Title Start -->
    <div class="section-title text-center">
      <h4 class="title text_dark">Their Words, Our Pride</h4>
      <span class="title-subtitle text_light">Happy Words of our Happy Customers</span> </div>
    <!-- Section Title End -->
    
    <div class="row">
      <div class="col-md-12"> 
        
        <!-- testimonials carousel Start -->
        <ul class="thumbnails owl-carousel owl-theme owl-loaded owl-drag list-unstyled" id="testimonials">
          <li>
            <div class="testimonial swiper-slide swiper-slide-active">
              <div class="testimonial-author-image"> <img src="assets/images/pics/native8.jpg" alt="Client"> </div>
              <div class="testimonial-author"> <i class="flaticon-quote"></i>
                <div class="testimonial-author-rating d-flex">
                  <h4>They delivered best quality</h4>
                  <div class="product-rating d-flex">
                    <ul class="d-flex ps-1">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                </div>
                <p>I ordered for a cloth last month,being my first order with the company. They delivered best quality and perfect fitting apparels to my doorstep without stress. This is my favourite fashion plug.</p>
                <span><span>Tommoe - </span>Customer</span> </div>
            </div>
          </li>
          <li>
            <div class="testimonial swiper-slide swiper-slide-active">
              <div class="testimonial-author-image"> <img src="assets/images/pics/eng2.jpeg" alt="Client"> </div>
              <div class="testimonial-author"> <i class="flaticon-quote"></i>
                <div class="testimonial-author-rating d-flex">
                  <h4>They delivered best quality</h4>
                  <div class="product-rating d-flex">
                    <ul class="d-flex ps-1">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                </div>
                <p>I ordered for a cloth last month,being my first order with the company. They delivered best quality and perfect fitting apparels to my doorstep without stress. This is my favourite fashion plug. </p>
                <span><span>Joy - </span>Customer</span> </div>
            </div>
          </li>
          <li>
            <div class="testimonial swiper-slide swiper-slide-active">
              <div class="testimonial-author-image"> <img src="assets/images/pics/eng1.jpeg" alt="Client"> </div>
              <div class="testimonial-author"> <i class="flaticon-quote"></i>
                <div class="testimonial-author-rating d-flex">
                  <h4>They delivered best quality</h4>
                  <div class="product-rating d-flex">
                    <ul class="d-flex ps-1">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                </div>
                <p>I ordered for a cloth last month,being my first order with the company. They delivered best quality and perfect fitting apparels to my doorstep without stress. This is my favourite fashion plug. </p>
                <span><span>Bisola - </span>Customer</span> </div>
            </div>
          </li>
          <li>
            <div class="testimonial swiper-slide swiper-slide-active">
              <div class="testimonial-author-image"> <img src="assets/images/pics/native8.jpg" alt="Client"> </div>
              <div class="testimonial-author"> <i class="flaticon-quote"></i>
                <div class="testimonial-author-rating d-flex">
                  <h4>They delivered best quality</h4>
                  <div class="product-rating d-flex">
                    <ul class="d-flex ps-1">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                </div>
                <p>I ordered for a cloth last month,being my first order with the company. They delivered best quality and perfect fitting apparels to my doorstep without stress. This is my favourite fashion plug. </p>
                <span><span>Rachel - </span>Customer</span> </div>
            </div>
          </li>
        </ul>
        <!-- testimonials carousel End --> 
      </div>
    </div>
  </div>
</section>
<!-- Testimonials End --> 

<!-- Our Brands Start -->

<!-- Our Brands End --> 

<!-- latest news Start -->

<!-- latest news End --> 

<!-- Instagram Start -->
<?php include 'instagram.php'; ?>
<!-- Instagram End -->
<?php include 'foot.php'; ?>
<!-- Optional JavaScript; choose one of the two! --> 

<!-- Option 1: Bootstrap Bundle with Popper --> 
<script src="assets/js/bootstrap.bundle.min.js"></script> 

<script src="assets/vendors/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/js/custom.js"></script>

<script>  
  setTimeout(function() {
    $("#refresh").fadeOut(1000)
  }, 3000);
</script>

</body>
</html>