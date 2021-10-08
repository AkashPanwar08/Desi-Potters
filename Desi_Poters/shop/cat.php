
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Shop Products</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
<link rel="icon" href="../icon.png">

    <meta name="generator" content="Jekyll v4.1.1">
    
 <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .abc{
        height: 180px;
        overflow: hidden;
    }
    .card-img-top{
        height: 180px;
        transition: 0.3s;
    }
    @media (max-width: 575px){
        
    }
    .card:hover .card-img-top{
        height: 200px;
        width: 110%;
        margin-left: -5%;
        margin-top: -10px;
    }
    .card-body:hover {
    background: rgb(0, 0, 0, 0.03);
    }.list-group-item:hover {
    background-color: rgb(0,0,0,0.03);
    }
    .card:hover{
        box-shadow: 2px 2px 5px black;
    }
    .card{
        transition: 0.3s;
    }
    img {
    height: 208px;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .page-link{
          color: #AF601A;
      }
      .page-item:hover{
          color: #784212;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this -->
    <link href="album.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/../assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">DESI POTTERS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="../index.php#about">About</a></li>
          <li><a href="cat.php">Products</a></li>
          <li><a href="../index.php#contact">Contact</a></li>
         
        </ul>
      </nav><!-- .nav-menu -->
      <div class="nav-menu">
          <ul>
    <li class=" drop-down">
      <span class="get-started-btn scrollto">My Account <i class='bx bxs-chevron-down' ></i></span> 
      <ul >
              <li><a href="../user/index.php"><i class='bx bx-cart' ></i> Dashboard</a></li>
              <li><a href="../user/profile.php"><i class='bx bx-user'></i> Profile</a></li>
              <li><a href="../user/order-history.php"><i class='bx bxs-cart' ></i> Orders</a></li>
              <li><a href="../logout.php"><i class='bx bx-log-out' ></i> Logout</a></li>
            </ul>
      </li>
    </ul>
    </div>
        
        <div class="nav-menu">
          <ul>
    <li class=" drop-down">
      <span class="get-started-btn scrollto">My Account<i class='bx bxs-chevron-down' ></i></span> 
      <ul >
              <li><a href="seller/profile.php"><i class='bx bx-user'></i> Profile</a></li>
              <li><a href="seller/product-listing.php"><i class='bx bx-upload'></i> List a Product</a></li>
              <li><a href="seller/products.php"><i class='bx bx-list-ul'></i> View your Products</a></li>
              <li><a href="#"><i class='bx bx-transfer' ></i> Transactions</a></li>
              <li><a href="logout.php"><i class='bx bx-log-out' ></i> Logout</a></li>
            </ul>
      </li>
    </ul>
    </div>
    <a href="../login/login.php" class="get-started-btn scrollto">Sign in</a> 
      
  </header><!-- End Header -->
<br>

  <main id="main">
    <section class="jumbotron text-center" style="margin-bottom:0px; margin-top: 61px;">
    <div class="container">
      <h1>Shop Products</h1>
      <p class="lead text-muted">Buy products from the following varieties</p>
      
    </div>
  </section>
    <!-- ======= Why Us Section ======= -->
    
    <section id="shop" class="why-us" style="padding-top:0px; padding-bottom: 0px;">
       <div class="album py-5 bg-light">
           <div class="container-fluid">
           <div class="row">
           <div class="col-12 col-md-6 col-lg-3">
               </div>
    <div class="col-12 col-md-6 col-lg-8">       
    <div class="container-fluid">
    <p style="display: inline-block;">products found in<span style="display: inline-block; color:red"> </span></p><br>
      <div class="row"  style="color:black">
    <div class="col-12 col-md-6 col-lg-3" style="margin-bottom: 3%">
	<div class="card">
	    <div class="abc">
		    <img class="card-img-top" src="1.jpg" alt="Unsplash" >
		</div>
			<div class="card-header px-4 pt-4">
			    <div class="row">
			        <div class="col-12 col-md-6 col-lg-8">
				<h6 class="card-title mb-0"></h6>	
				</div>
				<div class="col-12 col-md-6 col-lg-4">
                        <div class="badge badge-success my-2" style="float: right">IN STOCK</div>
                        </div>
                        </div>
				    
				<i class="bx bxs-star" style="color:#e38f10"></i>
                <i class="bx bxs-star-half" style="color:#e38f10"></i><i class='bx bx-chevron-down'></i><a href="#">3,487</a>
						</div>
					    <div class="card-body px-4 pt-3 pb-0">
                        <p style=" margin-bottom: 1px;"><span style="color:red">₹</span>50 <sub><strike>₹60.00/-</strike></sub> Save ₹10 (40%)</p> 
                        <small>Get it by<b> Tuesday, Dec 15</b></small>
                        <i class="bx bxs-truck"></i>
                        <p><small><small>Sold by, <a href="#">Varun Verma</a></small></small>
                        </p></div>
				    </ul>
			</div>
	</div>              
        
      </div><p style=" text-align: center; width: 50%; margin-left: auto; margin-right: auto; ">
        <a href="../checkout" class="btn btn-primary my-2" style="background: #AF601A; border-color: #AF601A" onmouseover="this.style.background='#784212'" onmouseout="this.style.background='#AF601A'">Go to cart</a>
      </p>
    </div>
    </div>
    </div>
    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" style="color: #784212;" href="#">1</a></li>
    <li class="page-item"><a class="page-link" style="color: #784212;" href="#">2</a></li>
    <li class="page-item"><a class="page-link" style="color: #784212;" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" style="color: #784212;" onmouseover="this.style.background='#784212';this.style.color='#fff'" onmouseout="this.style.background='#FFF';this.style.color='#784212'" href="#">Next</a>
    </li>
  </ul>
</nav>
    </div>
  </div>
      
    </section><!-- End Why Us Section -->

   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Desi Potters</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            
          Designed by Desi Potters Pvt. Ltd.
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
