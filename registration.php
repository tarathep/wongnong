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
<?php
if(isset($_POST['submit'])){
	include("config.php");
	$username = $_POST["username"];
	$password = $_POST["password"];
	$again = $_POST["password_again"];
	
	if($username == ''){
		echo "<script>
		alert('please enter your username');
		</script>";
		
	}else if($password == ''){
		echo "<script>alert('please enter your password');</script>";

	}else if ($again != $password){
		echo "<script>alert('password confirm is not match!');</script>";
	}else{
		$strSQL = "select * from user where user = '$username';";

		$objQuery = mysql_query($strSQL) or die(mysql_error());
		$check = mysql_num_rows($objQuery);

		if ($check >0){
			echo "<script>alert('Username Is duplicate!');</script>";
		}else{
			$password = md5($password);
			$strSQL = "insert into user (user,password) values ('$username','$password')";
			$objQuery = mysql_query($strSQL) or die(mysql_error());

			if($objQuery){
				echo "<script>alert('Registered!');</script>";
				echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
			}else{
				echo "<script>alert('Error please contact administrator');</script>";
				echo "<meta http-equiv='refresh' content='0;URL=registration.php'>";
			}
		}

	}
		
}

?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">

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
					
						
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
					<h1>Register</h1>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Create Accoucnt</h3>
						<form class="row login_form" action="registration.php" method="post" id="registerForm" novalidate="novalidate">
                        
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password_again" name="password_again" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
							</div>
                           
							
							<div class="col-md-12 form-group" style = "padding-top:50px;padding-bottom:100px">
							<Button type="submit" name="submit" id="submit" value="submit" class="primary-btn" >Register</Button>
									
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->



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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>