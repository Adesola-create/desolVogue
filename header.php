<?php include('library/connect.inc.php');

if(isset($report)){ echo Alert(); }
?>




<header class="header section"> 
  <!-- Header Top Start -->
  
  <!-- Header Top End --> 
  
  <!-- Header Bottom Start -->
  <div class="header-bottom color-scheme-dark d-none d-lg-block">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3"> 
          <!-- Header Logo Start -->
          <div class="header-logo"> <a href="index.php"><img src="assets/images/pics/Desola.png" alt="Desol Vogue"></a> </div>
          <!-- Header Logo End --> 
        </div>
        <div class="col-lg-6"> 
          <!-- ayira Menu Start -->
          <div class="ayira-menu">
            <nav>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li > <a href="shop.php">Shop</a> </li>
                <li > <a href="about.php">About Us</a> </li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
          <!-- ayira Menu End --> 
        </div>
        <div class="col-lg-3"> 
          <!-- Header Action Start -->
          <div class="header-action"> <a href="javascript:void(0" class="action header-action-btn header-action-btn-search"><i class="flaticon-search"></i> </a> <a href="#" class="action" data-bs-toggle="modal" data-bs-target="#login"><i class="flaticon-user"></i></a> <a href="wishlist.php" class="action"><i class="flaticon-like"></i><span class="nt_count_wishlist">0</span></a>
            <div class="dropdown"> <a class="action cart d-flex header-action-btn header-action-btn-cart" href="javascript:void(0)"><i class="flaticon-shopping-bag"></i> <span class="num">0</span> <span class="ayira-cart-subtotal"> <span class="Price-amount"> <span class="Price-currencySymbol">$</span>0.00</span></span> </a> </div>
          </div>
          <!-- Header Action End --> 
          
        </div>
      </div>
    </div>
  </div>
  <!-- Header Bottom End --> <!-- Header Mobile Start -->
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
        <div class="header-action"> <a href="wishlist.php" class="action"><i class="flaticon-like"></i><span class="nt_count_wishlist">0</span></a> <a href="javascript:void(0)" class="action cart header-action-btn header-action-btn-cart"> <i class="flaticon-shopping-bag"></i> <span class="num">0</span> </a> <a href="javascript:;" class="action mobile-menu-open"><i class="flaticon-menu"></i></a> </div>
        
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
        <input type="text" placeholder="Search Here...">
        <button><i class="flaticon-search"></i></button>
      </form>
    </div>
    <!-- Header Top search End --> 
    <!-- ayira Menu Start -->
    <div class="mobile-ayira-menu">
      <nav>
        <ul>
          <li class="active"><a href="index.php">Home</a>
            <!-- <ul class="sub-menu">
              <li><a href="index.html">Home-v1</a></li>
              <li><a href="index-v2.html">Home-v2</a></li>
              <li><a href="index-v3.html">Home-v3</a></li>
            </ul> -->
          </li>
          <li> <a href="shop.php">Shop</a>
            <!-- <ul class="sub-menu">
              <li><a href="shop-grid-left-sidebar.html">Shop Page 1</a></li>
              <li><a href="shop-list-left-sidebar.html">Shop Page 2</a></li>
              <li><a href="shop-fillters.html">Shop Page 3</a></li>
              <li><a href="product-detail-v1.html">Product Detail Page 1</a></li>
              <li><a href="product-detail-v2.html">Product Detail Page 2</a></li>
              <li><a href="product-detail-v3.html">Product Detail Page 3</a></li>
            </ul> -->
          </li> 
          <li> <a href="about.php">About Us</a>
            <ul class="mega-sub-menu">
              <!-- <li> <a href="">Shop</a>
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
              <li> <a href="">About Us</a>
                 <ul class="menu-item">
                  <li><a href="blog-list-v1.html">Blog List 1</a></li>
                  <li><a href="blog-list-v2.html">Blog List 2</a></li>
                  <li><a href="blog-list-v3.html">Blog List 3</a></li>
                  <li><a href="blog-detail.html">Blog Detail Page</a></li>
                  <li><a href="index.html">Mega Menu</a></li>
                </ul> 
              </li> -->
               <li> <a href="#">Shop Pages</a>
                <ul class="menu-item">
                  <li><a href="my-acount-dashboard.html">My Account</a></li>
                  <li><a href="cart.php">My Cart</a></li>
                  <li><a href="wishlist.php">Wishlist</a></li> 
                  <li><a href="compare.html">Compare</a></li>
                  <li><a href="checkout.php">Checkout</a></li>
                  <li><a href="#" data-bs-toggle="modal" data-bs-target="#login">Login</a></li>
                </ul>
              </li> 
              <!-- <li> <a href="#"><img class="w-100" src="assets/images/menu-image.jpg" alt="desol vogue"></a> </li> -->
            </ul>
          </li>
          <!-- <li> <a href="blog-list-v1.html">Blog</a> </li> -->
          <li><a href="contact.php">Contact Us</a></li>
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
          <div class="cart-product-thumb"> <a href="cart.php"><img src="assets/images/cart-product-01.jpg" alt="Cart Product"></a> </div>
          <div class="cart-product-content">
            <h3 class="title no_after"><a href="cart.php">Women danim jacket</a></h3>
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
          <div class="cart-product-thumb"> <a href="cart.php"><img src="assets/images/cart-product-02.jpg" alt="Cart Product"></a> </div>
          <div class="cart-product-content">
            <h3 class="title no_after"><a href="cart.php">Red formal dress</a></h3>
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
          <div class="cart-product-thumb"> <a href="cart.php"><img src="assets/images/cart-product-03.jpg" alt="Cart Product"></a> </div>
          <div class="cart-product-content">
            <h3 class="title no_after"><a href="cart.php">Man winter blazer</a></h3>
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
      <div class="cart-product-btn mt-4"> <a href="cart.php" class="view-cart btn-hover-ayira rounded-0 w-100">View cart</a> <a href="checkout.php" class="checkout rounded-0 w-100 mt-3">Checkout</a> </div>
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
        <input type="text" placeholder="Search Here...">
        <button><i class="fa fa-search"></i></button>
      </form>
    </div>
    <!-- Button Close Start -->
    <div class="offcanvas-btn-close"> <a class="search-close" href="javascript:;"> <span></span> <span></span> </a> </div>
    <!-- Button Close End --> 
    
  </div>
</div>
<!-- Offcanvas Search End --> 


<!-- Modal login -->
<div class="modal fade login" id="login" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="column-left">
          <div class="login-wrpper">
            <h4 class="title title-small no_after mb-0">Login</h4>
            <div class="comments-form">
              <form method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <div class="single-form">
                      <input type="email" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <input name="password" type="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form d-flex justify-content-between submit_lost-password">
                      <button type="submit" name="loginUser" class="btn primary_dark_btn mt-0">Submit</button>
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

<!-- Modal signup-->
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
                      <input type="text" name="name" required placeholder="name" >
                      
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <input type="email" name="email"  required placeholder="Email address" >
                      
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <input type="password" name="password"  required placeholder="Password">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy.</a></p>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <button type="submit" name="signUp" class="btn primary_dark_btn mt-0" >Register</button>
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






</header>


