<!doctype html>
<html lang="en">

<!-- Mirrored from www.fullstacksolution.net/demo/ayira/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Jun 2021 08:26:27 GMT -->
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
<title>desol vogue</title>
</head>
<body>
<!-- Header Start -->

<?php include "header.php"; ?>
<!-- Header End --> 

<!-- page-banner Start  -->
<div class="page-banner blog-page-banner section">
  <div class="container">
    <div class="page-banner-wrapper text-center">
      <h2 class="page-title">My Cart</h2>
      <!-- <ul class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active">My Cart</li>
      </ul> -->
    </div>
  </div>
</div>
<!-- page-banner End --> 

<!-- Checkout Start -->
<div class="section section-padding-04 section-padding-03">
  <div class="container"> 
    
    <!-- Checkout Start -->
    <div class="checkout-wrapper mt-0">
      <form action="#">
        <div class="row">
          <div class="col-lg-7"> 
            <!-- Cart Start -->
            <div class="cart-wrapper">
              <div class="cart-table table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="product-name" colspan="3">Product</th>
                      <th class="product-price">Total Price</th>
                      <th class="">Quantity</th>
                      <th class="product-subtotal">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="product-action"><div class="cart-product-remove"> <a href="#"><i class="flaticon-error"></i></a> </div></td>
                      <td class="product-image"><img src="assets/images/p-01.jpg" alt="ayira"></td>
                      <td class="product-name"><a class="name" href="#">Women floral dress<br>
                        -Green</a>
                        <div class="widget-item d-flex">
                          <h4 class="widget-title">Size : </h4>
                          <div class="wc-size ms-1">S</div>
                        </div></td>
                      <td class="product-price subtotal"><div class="product-price"> <span class="sale-price text_dark">$100</span> </div></td>
                      <td><div class="product-quantity d-inline-flex">
                          <button type="button" class="sub">-</button>
                          <input type="text" value="1" />
                          <button type="button" class="add">+</button>
                        </div></td>
                      <td class="product-price"><div class="product-price"> <span class="sale-price">$100</span> </div></td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="product-action"><div class="cart-product-remove"> <a href="#"><i class="flaticon-error"></i></a> </div></td>
                      <td class="product-image"><img src="assets/images/p-15.jpg" alt="ayira"></td>
                      <td class="product-name"><a class="name" href="#">Women floral dress<br>
                        -Green</a>
                        <div class="widget-item d-flex">
                          <h4 class="widget-title">Size : </h4>
                          <div class="wc-size ms-1">S</div>
                        </div></td>
                      <td class="product-price subtotal"><div class="product-price"> <span class="sale-price text_dark">$100</span> </div></td>
                      <td><div class="product-quantity d-inline-flex">
                          <button type="button" class="sub">-</button>
                          <input type="text" value="1" />
                          <button type="button" class="add">+</button>
                        </div></td>
                      <td class="product-price"><div class="product-price"> <span class="sale-price">$100</span> </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="cart-btn">
                <div class="cart-btn-left">
                  <div class="coupon_code">
                    <input type="text" placeholder="Apply coupon code">
                    <button class="apply">Apply</button>
                  </div>
                </div>
                <div class="cart-btn-right"> <a href="#" class="btn btn-outline-dark btn-hover-dark">Update Cart</a> </div>
              </div>
            </div>
            <!-- Cart End --> 
          </div>
          <div class="col-lg-5"> 
            <!-- Checkout Form Start -->
            <div class="checkout-order">
              <div class="checkout-title">
                <h4 class="title no_after">Cart Total</h4>
              </div>
              <div class="checkout-order-table table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td class="product-name"><p class="text-uppercase">Subtotal</p></td>
                      <td class="product-price"><p>$150.00</p></td>
                    </tr>
                  </tbody>
                  <tr>
                    <td class="product-name"><p class="text-uppercase">Shipping</p></td>
                    <td class="product-price"><ul class="shipping-list">
                        <li class="radio">
                          <input type="radio" name="shipping" id="radio1" checked>
                          <label for="radio1"><span></span> Flat Rate: $4.00</label>
                        </li>
                        <li class="radio">
                          <input type="radio" name="shipping" id="radio2">
                          <label for="radio2"><span></span> Free Shipping</label>
                        </li>
                        <li class="radio">
                          <input type="radio" name="shipping" id="radio3">
                          <label for="radio3"><span></span> Local Delivery</label>
                        </li>
                      </ul>
                      <p>Shipping options will be updated 
                        during checkout.</p>
                      <a href="#">Calculate shipping</a></td>
                  </tr>
                  <tr class="product-subtotal">
                    <td class="product-name"><p>Total</p></td>
                    <td class="total-price"><p>$600.00</p></td>
                  </tr>
                </table>
                <div class="shipping-delivery"> 
                  
                  <!-- Free Shipping Start  -->
                  <div class="shipping">
                    <div class="icone"> <img src="assets/images/secure.png" alt="ayira"> </div>
                    <div class="free_shipping_info">
                      <h5>100% Secure</h5>
                    </div>
                  </div>
                  <!-- Free Shipping End --> 
                  
                  <!-- Easy Returns Start  -->
                  <div class="shipping">
                    <div class="icone"> <img src="assets/images/free-shipping.png" alt="ayira"> </div>
                    <div class="free_shipping_info">
                      <h5>Yahh...Free shipping</h5>
                    </div>
                  </div>
                  <!-- Easy Returns End --> 
                  
                </div>
                <div class="d-flex">
                  <div class="shipp"> </div>
                </div>
              </div>
              <div class="checkout-payment">
                <div class="checkout-btn "> <a class="btn btn-hover-dark d-block" href="checkout.html">Proceed to Checkout</a> </div>
              </div>
            </div>
            <!-- Checkout Form End --> 
          </div>
        </div>
      </form>
    </div>
    <!-- Checkout End --> 
  </div>
</div>
<!-- Checkout End -->

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

<!-- Mirrored from www.fullstacksolution.net/demo/ayira/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Jun 2021 08:26:28 GMT -->
</html>