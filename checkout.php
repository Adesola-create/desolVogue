<!doctype html>
<html lang="en">

<!-- Mirrored from www.fullstacksolution.net/demo/ayira/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Jun 2021 08:26:28 GMT -->
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
<title>ayira</title>
</head>
<body>
<!-- Header Start -->
<?php include 'header.php'; ?>
<!-- Header end -->

<!-- page-banner Start  -->
<div class="page-banner blog-page-banner section">
  <div class="container">
    <div class="page-banner-wrapper text-center">
      <h2 class="page-title">Checkout</h2>
      <!-- <ul class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active">Checkout</li>
      </ul> -->
    </div>
  </div>
</div>
<!-- page-banner End --> 

<!-- Checkout Start -->
<div class="section section-padding-03 checkout-section">
  <div class="container"> 
    
    <!-- Checkout Info Start -->
    <!-- <div class="checkout-info">
      <p class="info-header">Do you already have an account? <a  href="#">Click here to login</a></p>
    </div> -->
    <!-- Checkout Info End --> 
    
    <!-- Checkout Info Start -->
    <!-- <div class="checkout-info">
      <p class="info-header">Have a coupon? <a  href="#">Click here to enter your code</a></p>
    </div> -->
    <!-- Checkout Info End --> 
    
    <!-- Checkout Start -->
    <div class="checkout-wrapper">
      <form action="#">
        <div class="row">
          <div class="col-lg-6"> 
            <!-- Checkout Form Start -->
            <div class="checkout-form">
              <div class="checkout-title">
                <h4 class="title no_after">Billing details</h4>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-form">
                    <label class="form-label">Email Address<span class="required">*</span></label>
                    <input type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-form">
                    <label class="form-label">First name<span class="required">*</span></label>
                    <input type="text">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="single-form">
                    <label class="form-label">other names (optional)</label>
                    <input type="text">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="single-select2">
                    <label class="form-label">Country / Region<span class="required">*</span></label>
                    <div class="form-select2">
                      <select class="select2">
                        <option value="0">Select a country…</option>
                        <option value="1">Bangladesh</option>
                        <option value="2">Canada</option>
                        <option value="3">Colombia</option>
                        <option value="4">Indonesia</option>
                        <option value="5">Italy</option>
                        <option value="6">India</option>
                        <option value="7">Turkey</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="single-form">
                    <label class="form-label">Street address<span class="required">*</span></label>
                    <input type="text" placeholder="House no and street name">
                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="single-form">
                    <label class="form-label">Town / City<span class="required">*</span></label>
                    <input type="text">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="single-form">
                    <label class="form-label">Postcode / ZIP<span class="required">*</span></label>
                    <input type="text">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="single-form">
                    <label class="form-label">Phone<span class="required">*</span></label>
                    <input type="text">
                  </div>
                </div>
              </div>
              <div class="single-form mt-3">
                <!-- <div class="form-check d-flex">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Creat an acount</label>
                </div>
                <div class="form-check d-flex">
                  <input type="checkbox" class="form-check-input" id="exampleCheck2">
                  <label class="form-check-label" for="exampleCheck2">Ship to a different address?</label>
                </div> -->
              </div>
              <div class="single-form checkout-note">
                <label class="form-label">Notes about your order, e.g. special notes for delivery.</label>
                <textarea placeholder=""></textarea>
              </div>
            </div>
            <!-- Checkout Form End --> 
          </div>
          <div class="col-lg-6"> 
            <!-- Checkout Form Start -->
            <div class="checkout-order">
              <div class="checkout-title">
                <h4 class="title no_after">Review order</h4>
              </div>
              <div class="checkout-order-table table-responsive">
                <table class="table">
                  <thead>
                    <tr class="product-subtotal">
                      <th class="product-name">Product</th>
                      <th class="product-price">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="product-name"><p>Bodysuit With Long Sleeves × 1</p></td>
                      <td class="product-price"><p>$150.00</p></td>
                    </tr>
                    <tr>
                      <td class="product-name"><p>Classic Polo Shirt × 1</p></td>
                      <td class="product-price"><p>$150.00</p></td>
                    </tr>
                    <tr>
                      <td class="product-name"><p>Subtotal</p></td>
                      <td class="product-price"><p>$150.00</p></td>
                    </tr>
                  </tbody>
                  <tr>
                    <td class="product-name"><p>Shipping</p></td>
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
                        during checkout.</p></td>
                  </tr>
                  <tr class="product-subtotal">
                    <td class="product-name"><p>Total</p></td>
                    <td class="total-price"><p>$600.00</p></td>
                  </tr>
                </table>
              </div>
              <div class="checkout-payment">
                <ul class="p-0 m-0">
                  <li>
                    <div class="single-payment">
                      <div class="payment-radio radio">
                        <input type="radio" name="radio" id="bank" checked="checked">
                        <label for="bank"><span></span> Direct bank transfer </label>
                        <div class="payment-details">
                          <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-payment">
                      <div class="payment-radio radio">
                        <input type="radio" name="radio" id="cash">
                        <label for="cash"><span></span> Cash on Delivery</label>
                        <div class="payment-details">
                          <p>Pay with cash upon delivery.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-payment">
                      <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#" class="text_dark">privacy policy.</a></p>
                    </div>
                  </li>
                </ul>
                <div class="single-form mt-3">
                  <div class="form-check d-flex">
                    <input type="checkbox" class="form-check-input" id="exampleCheck3">
                    <label class="form-check-label" for="exampleCheck3"> I have read and agree to the website terms and conditions </label>
                  </div>
                </div>
                <div class="checkout-btn "> <a class="btn btn-hover-dark d-block" href="#">Place order</a> </div>
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
<script src="assets/js/bootstrap.bundle.min.js"></script> 

<script src="assets/vendors/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/js/custom.js"></script>

<script>  
  setTimeout(function() {
    $("#refresh").fadeOut(1000)
  }, 3000);
</script>

</body>

<!-- Mirrored from www.fullstacksolution.net/demo/ayira/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Jun 2021 08:26:28 GMT -->
</html>