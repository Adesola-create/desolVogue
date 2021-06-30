
<!doctype html>
<html lang="en">

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
<title>Desol vogue</title>
</head>
<body>
<!-- Header Start -->
<?php include 'header.php'; 


if(isset($_POST['send_message'])){
  $name = $_POST['name'];
  $phone =$_POST['phone'];
  $email =$_POST['email'];
  $message =$_POST['message'];

  $sql = $db->query("INSERT INTO costumer (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')");
  if($sql){
    
    echo "message sent";
    
  }else{
    echo "message not sent";
  }
}



?>




<!-- page-banner Start  -->
<div class="page-banner blog-page-banner section">
  <div class="container">
    <div class="page-banner-wrapper text-center">
      <h2 class="page-title">Contact Us</h2>
      <!-- <ul class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active">Contact Us</li>
      </ul> -->
    </div>
  </div>
</div>
<!-- page-banner End --> 

<!-- My Account Start -->
<div class="faq section section-padding-03">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-7">
        <div class="section-title text-start">
          <h4 class="title-small no_after text_dark">Let's get in touch</h4>
          <span class="subtitle text_light  mt-3">please contact us today for your best fabric designs, 
          and lovely apparels. Expertise in Maximum transformation that you need.</span> </div>
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="single-contact-info d-flex"> 
              
              <!-- Single Contact Icon Start -->
              <div class="single-contact-icon"> <i class="fa fa-map-marker"></i> </div>
              <!-- Single Contact Icon End --> 
              
              <!-- Single Contact Title Content Start -->
              <p class="desc-content">km4, Airport Way,<br>
                Lagos,<br>
                Nigeria</p>
              <!-- Single Contact Title Content End --> 
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="single-contact-info d-flex"> 
              
              <!-- Single Contact Icon Start -->
              <div class="single-contact-icon"> <i class="fa fa-phone"></i> </div>
              <!-- Single Contact Icon End --> 
              
              <!-- Single Contact Title Content Start --> 
              <a href="tel:+2347085807350" class="desc-content">+2347085807350</a> 
              <!-- Single Contact Title Content End --> 
             
            </div>
            <div class="single-contact-info d-flex"> 
              
              <!-- Single Contact Icon Start -->
              <div class="single-contact-icon"> <i class="fa fa-envelope-o"></i> </div>
              <!-- Single Contact Icon End --> 
              
              <!-- Single Contact Title Content Start --> 
              <!-- <a href="mailto:info@example.com" class="desc-content">desol_vogue@gmail.com</a>  -->
              <a href="mailto:desol_vogue@gmail.com" class="desc-content">desol_vogue@gmail.com</a> 
              <!-- Single Contact Title Content End --> 
              
            </div>
          </div>
          <div class="col-12 col-sm-12 col-lg-6">
            <div class="contact-social widget-social justify-content-start">
              <ul class="d-flex m-0 p-0">
                <li><a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a> </li>
                <li><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a> </li>
                <li><a title="Instagram" href="#"><i class="fa fa-instagram"></i></a> </li>
                <!-- <li><a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a> </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-5">
        <div class="comments-all ask-question contact-us mt-0">
          <div class="comments-wrpper">
            <h4 class="comment-title">Contact Us</h4>
            <h5 class="comment-sub-title">please feel free to to contact us, our customer support will be happy 
              to help you.</h5>
            <div class="comments-form">
              <form method= "POST">
                <div class="row">
                  <div class="col-md-12">
                    <div class="single-form">
                      <input type="text" placeholder="Name" required id="name" name="name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <input type="email" placeholder="Email" required id="email" name="email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <input type="number" placeholder="Phone" required id="phone" name="phone">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <textarea placeholder="Message" name="message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-form">
                      <button type="submit" class="btn primary_dark_btn" name="send_message">Submit</button>
                    </div>
                  </div>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
<!-- My Account End --> 

<!-- Contact Map Start -->
<section class="contact-mape"> 
  
  <!-- Section Title Start -->
  <div class="container">
    <div class="section-title">
      <h2 class="title no_after">contact us</h2>
    </div>
  </div>
  <!-- Section Title End --> 
  
  <!--Google Map Area Start-->
 
  <!--Google Map Area Start--> 
</section>
<!-- Contact Map End -->




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