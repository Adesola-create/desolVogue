<?php include('librry/connect.inc.php'); ?>

<header>
<!-- Header Mobile Start -->
<div class="header-mobile d-lg-none">
  <div class="container">
    <div class="row row-cols-2 align-items-center">
      <div class="col-4"> 
        <!-- Header Logo Start -->
        <div class="header-logo"> <a href="index.html"><img src="assets/images/pics/dv.png" alt="desol vogue"></a> </div>
        <!-- Header Logo End --> 
      </div>
      <div class="col-8"> 
        <!-- Header Action Start -->
        <div class="header-action"> <a href="my-wishlist.html" class="action"><i class="flaticon-like"></i><span class="nt_count_wishlist">0</span></a> <a href="javascript:void(0)" class="action cart header-action-btn header-action-btn-cart"> <i class="flaticon-shopping-bag"></i> <span class="num">0</span> </a> <a href="javascript:;" class="action mobile-menu-open"><i class="flaticon-menu"></i></a> </div>
        
        <!-- Header Action End --> 
      </div>
    </div>
  </div>
</div>
<!-- Header Mobile End --> 

<!-- offcanvas Menu Start -->
<div class="offcanvas-menu d-lg-none color-scheme-light"> 
  <!--<a class="menu-close" href="javascript:;">
            <span></span>
            <span></span>
        </a>-->
  <div class="offcanvas-menu-wrapper"> 
    
    <!-- Header Top search Start -->
    <div class="header-top-search">
      <form action="#">
        <input type="text" placeholder="Search Hear...">
        <button><i class="flaticon-search"></i></button>
      </form>
    </div>
    <!-- Header Top search End --> 
    <!-- ayira Menu Start -->
    <div class="mobile-ayira-menu">
      <nav>
        <ul>
          <li class="active"><a href="#">Home</a>
            <ul class="sub-menu">
              <li><a href="index.html">Home-v1</a></li>
              <li><a href="index-v2.html">Home-v2</a></li>
              <li><a href="index-v3.html">Home-v3</a></li>
            </ul>
          </li>
          <li> <a href="#">Shop</a>
            <ul class="sub-menu">
              <li><a href="shop-grid-left-sidebar.html">Shop Page 1</a></li>
              <li><a href="shop-list-left-sidebar.html">Shop Page 2</a></li>
              <li><a href="shop-fillters.html">Shop Page 3</a></li>
              <li><a href="product-detail-v1.html">Product Detail Page 1</a></li>
              <li><a href="product-detail-v2.html">Product Detail Page 2</a></li>
              <li><a href="product-detail-v3.html">Product Detail Page 3</a></li>
            </ul>
          </li>
          <li> <a href="#">Page</a>
            <ul class="mega-sub-menu">
              <li> <a href="#">Shop</a>
                <ul class="menu-item">
                  <li><a href="shop-grid-left-sidebar.html">Shop Page 1</a></li>
                  <li><a href="shop-list-left-sidebar.html">Shop Page 2</a></li>
                  <li><a href="shop-fillters.html">Shop Page 3</a></li>
                  <li><a href="product-detail-v1.html">Product Detail Page 1</a></li>
                  <li><a href="product-detail-v2.html">Product Detail Page 2</a></li>
                  <li><a href="product-detail-v3.html">Product Detail Page 3</a></li>
                </ul>
              </li>
              <li> <a href="#">Pages</a>
                <ul class="menu-item">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="faq.html">FaQs</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="404.html">404 Page</a></li>
                  <li><a href="maintenance.html">Maintenance Page</a></li>
                </ul>
              </li>
              <li> <a href="#">Blog</a>
                <ul class="menu-item">
                  <li><a href="blog-list-v1.html">Blog List 1</a></li>
                  <li><a href="blog-list-v2.html">Blog List 2</a></li>
                  <li><a href="blog-list-v3.html">Blog List 3</a></li>
                  <li><a href="blog-detail.html">Blog Detail Page</a></li>
                  <li><a href="index.html">Mega Menu</a></li>
                </ul>
              </li>
              <li> <a href="#">Shop Pages</a>
                <ul class="menu-item">
                  <li><a href="my-acount-dashboard.html">My Account</a></li>
                  <li><a href="cart.html">My Cart</a></li>
                  <li><a href="my-wishlist.html">Wishlist</a></li> 
<li><a href="compare.html">Compare</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                  <li><a href="#" data-bs-toggle="modal" data-bs-target="#login">Login</a></li>
                </ul>
              </li>
              <li> <a href="#"><img class="w-100" src="assets/images/menu-image.jpg" alt="ayira"></a> </li>
            </ul>
          </li>
          <li> <a href="blog-list-v1.html">Blog</a> </li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#login">My Account</a></li>
        </ul>
      </nav>
    </div>
    <!-- ayira Menu End --> 
  </div>
</div>
<!-- offcanvas Menu End --> 

<!-- offcanvas Menu Start -->
<div class="menu-overlay"></div>
<!-- offcanvas Menu End --> 

<!-- Cart Offcanvas Start -->
<div class="cart-offcanvas-wrapper">
  <div class="offcanvas-overlay"></div>
  
  <!-- Cart Offcanvas Inner Start -->
  <div class="cart-offcanvas-inner"> 
    
    <!-- Button Close Start -->
    <div class="offcanvas-btn-close"> <a class="cart-close" href="javascript:;"> <span></span> <span></span> </a> </div>
    <!-- Button Close End --> 
    
    <!-- Offcanvas Cart Title Start -->
    <h2 class="offcanvas-cart-title mb-10">Shopping Cart</h2>
    <!-- Offcanvas Cart Title End --> 
    
    <!-- Offcanvas Cart Content Start -->
    <div class="offcanvas-cart-content color-scheme-dark"> 
      
      <!-- Cart Product/Price Start -->
      <div class="cart-product-wrapper mb-4"> 
        
        <!-- Single Cart Product Start -->
        <div class="single-cart-product">
          <div class="cart-product-thumb"> <a href="cart.html"><img src="assets/images/cart-product-01.jpg" alt="Cart Product"></a> </div>
          <div class="cart-product-content">
            <h3 class="title no_after"><a href="cart.html">Women danim jacket</a></h3>
            <div class="product-price"><span class="sale-price">$249.00</span> </div>
          </div>
        </div>
        <!-- Single Cart Product End --> 
        
        <!-- Product Remove Start -->
        <div class="cart-product-remove"> <a href="#"><i class="flaticon-error"></i></a> </div>
        <!-- Product Remove End --> 
        
      </div>
      <!-- Cart Product/Price End --> 
      
      <!-- Cart Product/Price Start -->
      <div class="cart-product-wrapper mb-4"> 
        
        <!-- Single Cart Product Start -->
        <div class="single-cart-product">
          <div class="cart-product-thumb"> <a href="cart.html"><img src="assets/images/cart-product-02.jpg" alt="Cart Product"></a> </div>
          <div class="cart-product-content">
            <h3 class="title no_after"><a href="cart.html">Red formal dress</a></h3>
            <div class="product-price"> <span class="sale-price">$129.00</span> </div>
          </div>
        </div>
        <!-- Single Cart Product End --> 
        
        <!-- Product Remove Start -->
        <div class="cart-product-remove"> <a href="#"><i class="flaticon-error"></i></a> </div>
        <!-- Product Remove End --> 
        
      </div>
      <!-- Cart Product/Price End --> 
      
      <!-- Cart Product/Price Start -->
      <div class="cart-product-wrapper mb-4"> 
        
        <!-- Single Cart Product Start -->
        <div class="single-cart-product">
          <div class="cart-product-thumb"> <a href="cart.html"><img src="assets/images/cart-product-03.jpg" alt="Cart Product"></a> </div>
          <div class="cart-product-content">
            <h3 class="title no_after"><a href="cart.html">Man winter blazer</a></h3>
            <div class="product-price"> <span class="old-price">$149.00</span> <span class="sale-price">$99.00</span> </div>
          </div>
        </div>
        <!-- Single Cart Product End --> 
        
        <!-- Product Remove Start -->
        <div class="cart-product-remove"> <a href="#"><i class="flaticon-error"></i></a> </div>
        <!-- Product Remove End --> 
        
      </div>
      <!-- Cart Product/Price End --> 
      
      <!-- Cart Product Total Start -->
      <div class="cart-product-total"> <span class="value">Subtotal</span> <span class="price">$477</span> </div>
      <!-- Cart Product Total End --> 
      
      <!-- Cart Product Button Start -->
      <div class="cart-product-btn mt-4"> <a href="cart.html" class="view-cart btn-hover-ayira rounded-0 w-100">View cart</a> <a href="checkout.html" class="checkout rounded-0 w-100 mt-3">Checkout</a> </div>
      <!-- Cart Product Button End --> 
      
    </div>
    <!-- Offcanvas Cart Content End --> 
    
  </div>
  <!-- Cart Offcanvas Inner End --> 
</div>
<!-- Cart Offcanvas End --> 

<!-- Offcanvas Search Start -->
<div class="offcanvas-search">
  <div class="offcanvas-search-inner">
    <div class="search-wrapper">
      <form action="#">
        <input type="text" placeholder="Search Hear...">
        <button><i class="fa fa-search"></i></button>
      </form>
    </div>
    <!-- Button Close Start -->
    <div class="offcanvas-btn-close"> <a class="search-close" href="javascript:;"> <span></span> <span></span> </a> </div>
    <!-- Button Close End --> 
    
  </div>
</div>
<!-- Offcanvas Search End --> 




<!-- Modal -->
<div class="modal fade login" id="login" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="column-left">
          <div class="login-wrpper">
            <h4 class="title title-small no_after mb-0">Login</h4>
            <div class="comments-form">
              <form action="#">
                <div class="row">
                  <div class="col-md-12">
                    <div class="single-form">
                      <input type="text" placeholder="Username or email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <input type="email" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form d-flex justify-content-between submit_lost-password">
                      <button class="btn primary_dark_btn mt-0">Submit</button>
                      <a href="#" class="lost-password">Lost your password?</a> </div>
                  </div>
                </div>
              </form>
              <div class="or-divider">
                <h6>Or login with</h6>
              </div>
              <div class="list-unstyled list-inline social-login d-flex"> <a href="#" class="facebook"> <i class="fa fa-facebook-f"></i> <span>Facbook</span></a> <a href="#" class="google"> <i class="fa fa-google-plus"></i><span> Google</span></a> </div>
            </div>
          </div>
        </div>
        <div class="column-right">
          <div class="not-member">
            <h4 class="title title-small no_after text_white mb-0">Not a member?</h4>
            <span class="subtitle text_white mt-3">To keep connected with us please 
            login with your personal info.</span> 
            <a href="#" class="load-more primary_dark_btn mt-4" data-dismiss="modal" data-bs-toggle="modal" data-bs-target="#register">Create an account</a> </div>
        </div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>--> 
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade login" id="register" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="column-right">
          <div class="not-member">
            <h4 class="title title-small no_after text_white mb-0">Welcome Back!</h4>
            <span class="subtitle text_white mt-3">To keep connected with us please 
            login your personal info.</span> <a href="#" class="load-more primary_dark_btn mt-4" data-bs-toggle="modal" data-bs-target="#login">Login</a> </div>
        </div>
        <div class="column-left">
          <div class="login-wrpper">
            <h4 class="title title-small no_after mb-0">Create an account</h4>
            <div class="comments-form">
              <form method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <div class="single-form">
                      <input type="text" name="name" placeholder="Name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <input type="email" name="email" placeholder="Email address">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <input type="password" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy.</a></p>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <button type="submit" name="signUp" class="btn primary_dark_btn mt-0">Register</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>--> 
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade login" id="quick_view" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        
        
        <div class="product-image-summary product-v-one">
   
      <div class="row">
      <div class="col-md-6 product-images"> 
        <!-- Product Details Image Start -->
        <div class="product-details-img">
          <div class="row">
            
            <div class="col-12 position-relative"> 
              <!-- Single Product Image Start -->
              <div class="slider slider-for">
                <div>
                  <h3 class="m-0"><img src="assets/images/p-36.jpg" alt="Product"></h3>
                </div>
                                
              </div>
              <!-- Single Product Image End -->
  

            </div>
          </div>
        </div>
        <!-- Product Details Image End --> 
        
      </div>
      <div class="col-md-6 summary entry-summary">
        <div class="product-list-item">
          <div class="product-content">
            <div class="product-category-action d-block">
              <div class="product-title pt-0"> <a href="product-detail-v1.html">Women floral dress</a> </div>
              <div class="product-rating d-flex">
                <ul class="d-flex ps-0">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>(6 customer reviews)</span> </div>
            </div>
            <div class="product-price"> <span class="old-price">$39.00</span> <span class="sale-price">$39.00</span> </div>
            <div class="short-description">
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
            </div>
            
            <!-- Widget Item Start -->
            <div class="widget-item d-flex">
              <h4 class="widget-title">Color : </h4>
              <div class="widget-color">
                <ul class="color-list ps-0">
                  <li class="active ms-0" data-tooltip="tooltip" data-placement="top" title="Black" data-color="#000000"></li>
                  <li data-tooltip="tooltip" data-placement="top" title="Sea green" data-color="#1c9bb5"></li>
                  <li data-tooltip="tooltip" data-placement="top" title="Green" data-color="#63a809"></li>
                </ul>
              </div>
            </div>
            <!-- Widget Item End --> 
            
            <!-- Widget Item Start -->
            <div class="widget-item d-flex">
              <h4 class="widget-title">Size : </h4>
              <div class="widget-size">
                <ul class="d-flex p-0">
                  <li class="wc-size ms-0"><a href="#" class="ms-0">XS</a></li>
                  <li class="wc-size active"><a href="#">S</a></li>
                  <li class="wc-size"><a href="#">M</a></li>
                  <li class="wc-size"><a href="#">L</a></li>
                </ul>
              </div>
            </div>
            <!-- Widget Item End --> 
            
           
            
            <div class="d-flex quantity-cart_button">
              <div class="product-quantity d-inline-flex">
                <button type="button" class="sub">-</button>
                <input type="text" value="1">
                <button type="button" class="add">+</button>
              </div>
              <div class="ayira-cart-btn"><a href="cart.html" class="button add_to_cart_button">Add to cart</a></div>
            </div>
            <div class="d-flex wishlist-compare">
              <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i class="fa fa-heart-o"></i> Add to wishlist</a> </div>
              <div class="ayira-compare-btn"> <a class="button d-flex" href="compare.html"><i class="flaticon-reload"></i> Compare</a> </div>
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

</header>