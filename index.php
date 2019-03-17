<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['id'])) {
	$userID = $_SESSION['id'];
	$userName =  $_SESSION['user'];
}else{
	$userID = '';
	$userName = '';
	
}

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php include("config.php")?>

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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<style>
		.checked {
			color: rgb(243, 91, 37);


		}
	</style>
	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php">
						<img src="img/wongnai2.png" alt="" height="50px">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					    aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item ">
								<a href="category.php" class="nav-link ">Restaurant</a>

							</li>


							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
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

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">

					<!-- single-slide -->

					<!-- single-slide -->

				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->


	




	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
				<div class="section-title">
					<h1>Recommend Restaurant</h1>

				</div>
			</div>
		</div>
		<div class="row">

			<?php 
				$strSQL = "SELECT name,open_time,close_time, FORMAT( sum(rating)/count(rating),0) as num , count(rating) as count FROM `review` join restaurant on restaurant.rid = review.rid group by name , open_time,close_time order by  num  DESC limit 4";
$objQuery = mysql_query($strSQL) or die(mysql_error());
$dateData=time();
while($objResult = mysql_fetch_array($objQuery)){
	
?>
			<!-- SELECT FORMAT( sum(rating)/count(rating),0)  FROM `review` where  rid = 1 -->


			<!-- single product -->
			<div class="col-lg-3 col-md-6">
				<div class="single-product">
					<a href="category.php">
						<img class="img-fluid" src="img/c2.jpg" alt="">
					</a>
				
		
						<strong>
							<?php echo($objResult['name'])?>
						</strong>
						<p>
							<?php 
							
							for($i=0;$i<$objResult["num"];$i++){
								echo("<span class='fa fa-star checked'></span>")	;
							}
							for($i=0;$i<5-$objResult["num"];$i++){
								echo("<span class='fa fa-star'></span>")	;
							}
							?>


							<span>
								<?php echo($objResult["count"]);?> รีวิว </span>
							<?php if(date("H:h:i") >$objResult['open_time'] && date("H:h:i") < $objResult['close_time']){?>

							<font color="green">เปิดอยู่</font>
						</p>


						<?php
}
else{

echo("<font  color='red'>ปิดอยู่</font></p>");


}


?>

							</h6>

				</div>
			</div>

			<!-- single product -->

			<?php }  ?>
		</div>
	</div>
	</div>

	<!-- start product Area -->

	<!-- single product slide -->

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
				<div class="section-title">
					<h1>Recommend Food</h1>

				</div>
			</div>
		</div>
		<div class="row">

			<?php 
				$strSQL = "SELECT * FROM menu ORDER BY RAND() LIMIT 8";
$objQuery = mysql_query($strSQL) or die(mysql_error());

while($objResult = mysql_fetch_array($objQuery)){
	
?>



			<!-- single product -->
			<div class="col-lg-3 col-md-6">
				<div class="single-product">
					<a href="category.php">
						<img class="img-fluid" src="img/c2.jpg" alt="">
					</a>
					<div class="product-details">
						<h6 align="center">

							<?php echo($objResult['name'])?>

						</h6>

					</div>
				</div>
			</div>

			<!-- single product -->

			<?php }  ?>
		</div>
	</div>
	</div>
	<!-- single product slide -->

	<!-- end product Area -->

	<!-- Start exclusive deal Area -->

	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<!-- End brand Area -->

	<!-- Start related-product Area -->

	<!-- End related-product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
						</p>
					</div>
				</div>


				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-dribbble"></i>
							</a>
							<a href="#">
								<i class="fa fa-behance"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>
						document.write(new Date().getFullYear());
					</script>
					<i class="fa fa-heart-o" aria-hidden="true"></i> by
					<a href="https://www.facebook.com/paloom.Luvup" target="_blank">Pomio</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	    crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>