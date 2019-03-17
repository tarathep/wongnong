<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user'])) {
	$userID = $_SESSION['id'];
	$userName =  $_SESSION['user'];
}else{
	$userID = '';
	$userName = '';
	
}

?>
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>WongNong</title>

	<!--
            CSS
            ============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light main_box">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="index.php"><img src="img/wongnai2.png" alt="" height="50px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item ">
							<a href="category.php" class="nav-link ">Restaurant</a>
							
						</li>
					
						
						<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
						<?php 
							if ($userID !='' && $userName !=''){
								echo "<li class='nav-item'><a class='nav-link' href='logout.php'>$userName (Logout)";
							
							}else{
								echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login";
							}
							?>
					</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						
					</ul>
				</div>
			</div>
		</nav>
	</div>

	</header>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Contact Us</h1>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
		<div class="container">
		<div id="mapBox" class="mapBox" data-lat="13.7379482" data-lon="100.62833180000007" data-zoom="15" data-info="Thai-Nichi Institute of Technology"
		data-mlat="13.7379482" data-mlon="100.62833180000007">
			</div>

			<div><h2 >Ours Team</h2></div>
			<div class="row">

			

				<div class= "col-xl-3 col-lg-4 col-md-6 col-sm-6 cards">
				
				<div class="image-cropper">
					<img src="images/tarathep.jpg" class="rounded" />
					
				</div>
				<p class="cen">
				Tarathep Cheongchaiyaphum
				</p>
				<p class="cenid">Nickname : Bokie<br> id : 5812111-7<br><a href="https://www.facebook.com/bokie.tarathep">Facebook</a></p>
			   </div>


			   
				<div class= "col-xl-3 col-lg-4 col-md-6 col-sm-6 cards">
				
				<div class="image-cropper">
    				<img src="images/Veerapat.jpg" class="rounded" />
				</div>
				<p class="cen">Veerapat boonyasing</p>
				<p class="cenid">Nickname : Poom<br> id : 58121098-6<br><a href="https://www.facebook.com/paloom.Luvup">Facebook</a></p>
			   </div>


			   
				<div class= "col-xl-3 col-lg-4 col-md-6 col-sm-6 cards ">
				
				<div class="image-cropper">
   					 <img src="images/teeraphan.jpg" class="rounded" />
				</div>
				<p class="cen">Teeraphan Bunsoemsiri</p>
				<p class="cenid">Nickname : Aon<br> id : 58121049-9<br><a href="https://www.facebook.com/profile.php?id=100002376685976">Facebook</a></p>
			   </div>

			   
				<div class= "col-xl-3 col-lg-4 col-md-6 col-sm-6 cards ">
				
				<div class="image-cropper">
   					 <img src="images/weerachai.jpg" class="rounded" />
				</div>
				<p class="cen">Weerachai Vichienrat</p>
				<p class="cenid">Nickname : Wee<br> id : 5812114-1<br><a href="https://www.facebook.com/wee.vichienrat">Facebook</a></p>
			   </div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
						เว็ปรีวิวอาหารที่โหดที่สุดในประเทศไทย wongnai คือไรไม่รู้ต้อง วง WongNong

						</p>
					</div>
				</div>
			
				
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Pomio</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<!--================Contact Success and Error message Area =================-->
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Thank you</h2>
					<p>Your message is successfully sent...</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals error -->

	<div id="error" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Sorry !</h2>
					<p> Something went wrong </p>
				</div>
			</div>
		</div>
	</div>
	<!--================End Contact Success and Error message Area =================-->


	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs2SHS8IS4NPpUX1DImwrOPQPXbKdC8jw"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>