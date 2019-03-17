<?php
$rid = $_GET['rid'];
include("config.php"); 
$strSQL ="Select * from restaurant  where  rid ='".$rid."'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
while($objResult = mysql_fetch_array($objQuery)){

	$name =  $objResult['name'];
	$des = $objResult['desp'];
	$cate = $objResult['cate'];
	$o_time = $objResult['open_time'];
	$o_close = $objResult['close_time'];
	$pic = $objResult['res_img'];
}	
$pic2 = [];
$strSQL2 ="SELECT img FROM `restaurant` as res join menu as m on res.rid = m.rid where res.rid =  '".$rid."' limit 3  ";
$objQuery2 = mysql_query($strSQL2) or die(mysql_error());
while($objResult2 = mysql_fetch_array($objQuery2)){
	array_push($pic2,$objResult2['img']);

}	


session_start();
$_SESSION['rid'] = $rid;
?>

<?php

if (isset($_SESSION['id']) && isset($_SESSION['user'])) {
	$userID = $_SESSION['id'];
	$userName =  $_SESSION['user'];
}else{
	$userID = '';
	$userName = '';
	
}

?>
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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<style>
	
		</style>
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
							<li class="nav-item active">
								<a href="category.php" class="nav-link ">Restaurant</a>
							</li>
							<li class="nav-item "><a class="nav-link" href="contact.php">Contact</a></li>
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
		<div class="container" >
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end" >
				<div class="col-first" style="color: black;">
					<h1>Product Details Page</h1>
				
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->

	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">

						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo($pic) ?>" alt="">
						</div>
						<?php for($i = 0 ;$i < count($pic2);$i++)
						
						{
							?>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo($pic2[$i]) ?>" alt="">
						</div>
						<?php } ?>
					
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?= $name ?></h3>
						
						<ul class="list">
							<li><a class="active"><span>Category</span><?=$cate?></a></li>
							<li><a ><span>Open Time : </span><?=$o_time?></a></li>
							<li><a ><span>Closed Time : </span><?=$o_close?></a></li>
						</ul>
						<p><?=$des?></p>
						<div class="product_count">
							
						</div>
						<div class="card_area d-flex align-items-center">
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Menu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Reviews</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
							<tr>
									<td style = "padding-left:100px">
										<h4 >รูป</h4>
										
									</td>
									<td>
										<h4>ชื่ออาหาร</h4>
									</td>
									<td>
										<h4>ราคา</h4>
									</td>
								</tr>
							<?php 
							$menuSQL ="Select * from menu  where  rid ='".$rid."'";
							$menuQuery = mysql_query($menuSQL) or die(mysql_error());
							while($menuResult = mysql_fetch_array($menuQuery)){
							?>

								<tr>
									<td>
										<img src="<?=$menuResult['img']?>" class="rounded-circle"  height = "100px" width=" 100px">
										
									</td>
									<td>
										<h5><?=$menuResult['name']?></h5>
									</td>
									<td>
										<h5><?=$menuResult['price']?></h5>
									</td>
								</tr>
							<?php
							}
							?>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
									
										<h5>Overall</h5>
										<?php $rateSQL ="select rating from review as r
									inner JOIN user as u ON r.uid = u.uid where  rid ='".$rid."' ";
									$rateQuery = mysql_query($rateSQL) or die(mysql_error());
									$num = 0.0;
									$count = 0;
									while($rateResult = mysql_fetch_array($rateQuery)){
										$num += $rateResult['rating'];
										$count++;
									}
									$num = $num / $count;
								?>
										<h4><?= $num?></h4>
										
									</div>
									<?php ?>
								</div>
								<div class="col-6">
									<div class="rating_list">
										
										<ul class="list">
											<li><a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> </a></li>
											<li><a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i></i> </a></li>
											<li><a href="#"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i> </a></li>
											<li><a href="#"> <i class="fa fa-star"></i><i class="fa fa-star"></i></i> </a></li>
											<li><a href="#"> <i class="fa fa-star"></i> </a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="review_list">
							
							<?php
							$reviewSQL ="select * from review as r
							inner JOIN user as u ON r.uid = u.uid where  rid ='".$rid."' ";
							$reviewQuery = mysql_query($reviewSQL) or die(mysql_error());
							while($reviewResult = mysql_fetch_array($reviewQuery)){
								
								?> <div class='review_item'>
								<div class='media'>
									<div class='d-flex'>
										<img src='img/product/review-1.png' height = "100px" width=" 100px">
									</div>
									<div class='media-body'>
										<h4><?=$reviewResult['user']?></h4>
										<?php
										for($i = 0;$i < $reviewResult['rating'];$i++){
										?>
										<i class='fa fa-star'></i>
										
										<?php 
										}
										?>
									</div>
								</div>
								<p><?=$reviewResult['desp'];?></p>
							</div>
							<?php
							}
								
							?>

							</div>
						</div>
						<?php 
							if (isset($_SESSION['id']) && isset($_SESSION['user'])) { ?>
						<div class="col-lg-6">
							<div class="review_box">
							<h4>Add a Review</h4>
								<form class="row contact_form" action="insert-review.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" value='<?php echo($userName); ?>' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
										</div>
									</div>
									<div class="col-md-12">
									
									<p>Your Rating:</p>
										<div class="form-group" align = "center">
										<select  name = 'rating'>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									</select>
									<br>
									</div>
									</div>
									<div class="col-md-12" style = "margin-top:10px">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					
							<?php }
							else{
								?>

								<div class="col-lg-6">
							<div class="review_box">
									<div class="col-md-12 " style="text-align:center;">
										<button type="submit" value="submit" class="primary-btn" onclick="window.location.href='login.php'">Login</button>
									</div>
							</div>
							</div>

						<?php
							}
							
							?>





					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	<!-- Start related-product Area -->
	
	<!-- End related-product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
						เว็ปรีวิวอาหารที่โหดที่สุดในประเทศไทย wongnai คือไรไม่รู้ต้อง วง WongNong

						</p>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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