<!DOCTYPE html>
<html>
<head>
<title>Movies Pro </title>
<link rel="shortcut icon" href="images/logo.jfif" />

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Movies Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css\bootstrap\bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pop-up -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>


<?php require 'conection.php';
	session_start();

	//login////////
	if (isset($_POST['login'])) {

		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM `user` WHERE email='$email'  and Password='$password'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		$count = mysqli_num_rows($result);
		if ($count == 1) {
			$_SESSION["login"] = 0;
			// $_SESSION[''];
			echo
			"
		  <script>
			alert('Successfully Added');
		  </script>
		  ";
			$sql = "SELECT * FROM user WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			while ($row = $result->fetch_assoc()) {

				if ($row["rank"] == '1') {
					$_SESSION["rank"] = 1;
					$_SESSION["name"] = $row["name"];
				} else {
					$_SESSION["name"] = $row["name"];
				}
			}
		} else
			echo
			"
	  <script>
		alert('this account dose not ecx');
	  </script>
	  ";
	}
	////////////////////////////
	///regester/////
	if (isset($_POST['Register'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$conform_password = $_POST['conform_password'];
		if ($password == $conform_password) {
			$query = "INSERT INTO user VALUES('', '$name','$email','$password','0')";
			mysqli_query($conn, $query);
			$_SESSION["name"] = $name;

			echo
			"
		  <script>
			alert('Successfully Added');
		  </script>
		  ";
		} else {
			echo
			"
		  <script>
			alert('password and conform password dont same');
		  </script>
		  ";
		}
	}
	//////////////logout///
	if (isset($_POST['logout'])) {
		session_destroy();
		session_start();
	}
	/////////////logout///

	?>
<!--/main-header-->
  <!--/banner-section-->
	<div id="demo-1" class="banner-inner">
	 <div class="banner-inner-dott">
		<!--/header-w3l-->
		<div class="header-w3-agileits" id="home">
				<div class="inner-header-agile">
					<nav class="navbar navbar-default row">
						<div class="navbar-header col-4">	
							<h1><a href="index.html"><span>M</span>ovies <span>P</span>ro</a></h1>
						</div>
						<!-- navbar-header -->
						<div style="color: black;" class="navbar-collapse col-6" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav1">
								<li ><a href="index.php">Home</a></li>


								<?php
								if (isset($_SESSION['login'])) {

									if (isset($_SESSION['rank'])) {
										echo '<li><a href="admin.php">admin</a></li>';
									} else {
										echo '	<li><a href="contact.php">Contact</a></li>';
									}
								} else {
									echo '
								<li><a href="#"  data-toggle="modal" data-target="#myModal4">Login</a></li>
								<li><a href="#"  data-toggle="modal" data-target="#myModal5">Register</a></li>
								<li class="active" ><a href="contact.php">Contact Us</a></li>
								';
								}

								?>
							</ul>
                            </div>

							<div class="col-2" style="color: red;" >
								<form action="" method="post">
									<button class="close" name="logout"> <?php
																			if (isset($_SESSION["name"])) {
																				echo '<a>log out</a>';
																			}
																			?></button>
								</form>


						</div>
						<div class="clearfix"> </div>	

					</nav>
				</div>

			</div>
		<!--//header-w3l-->
		</div>
    </div>
  <!--/banner-section-->
 <!--//main-header-->
	     
 <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>login </h4>
				<div class="login-form">
					<form action="#" method="post">
						<input type="email" name="email" placeholder="E-mail" required="">
						<input type="password" name="password" placeholder="Password" required="">
						<div class="tp">
							<input type="submit" name="login" value="LOGIN NOW">
						</div>
						<div class="forgot-grid">
							<div class="log-check">
								<label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
							</div>

							<div class="clearfix"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->
<!-- Modal1 -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog">

	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Register</h4>
				<div class="login-form">
					<form action="#" method="post">
						<input type="text" name="name" placeholder="Name" required="">
						<input type="email" name="email" placeholder="E-mail" required="">
						<input type="password" name="password" placeholder="Password" required="">
						<input type="password" name="conform_password" placeholder="Confirm Password" required="">
						<div class="signin-rit">
							<span class="agree-checkbox">
								<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="#" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="#" target="_blank">Privacy Policy</a></label>
							</span>
						</div>
						<div class="tp">
							<input type="submit" name="Register" value="REGISTER NOW">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
						<!-- breadcrumb -->
	<div class="w3_breadcrumb">
		<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.php">Home</a><i>//</i></li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="agile_featured_movies">
							<div class="inner-agile-w3l-part-head">
					            <h3 class="w3l-inner-h-title">Contact</h3>
								<p class="w3ls_head_para">Add short Description</p>
							</div>
						<div class="w3_mail_grids">
						<div class="all-comments-info">
												 <h5 >LEAVE A COMMENT</h5>
												<div class="agile-info-wthree-box ">
													<form method="post">
														<div class="row">
													   <div class="col-md-6 form-info">
														<input type="text" name="name" placeholder="Your Name" required="">			           					   
														<input type="email" name="email" placeholder="Your Email" required="">
													  </div>
													   <div class="col-md-6 form-info">
														<textarea placeholder="Message" name="message" required=""></textarea>
													 </div>
													 </div>

													 <input class="col-md-12" type="submit" name="comment" value="SEND">

													 <div class="clearfix"> </div>
												<?php
												if (isset($_POST['comment'])) {
													$name=$_POST['name'];
													$email=$_POST['email'];
													$message=$_POST['message'];
												
												 $query = "INSERT INTO contact VALUES('', '$name','$email','$message')";
												 mysqli_query($conn, $query);
												 echo
												 "
											   <script>
												 alert('Successfully Added');
											   </script>
											   ";
												}?>			  
													</form>
												</div>
											</div>
								<div class="agileits-get-us">
									<ul>
										<li><i class="fa fa-map-marker" aria-hidden="true"></i>lraq</li>
										<li><i class="fa fa-phone" aria-hidden="true"></i>  +964 77 654 324</li>
										<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> movespro@gmail.com</a></li>
									</ul>
								
							</div>
					
					</div>
					</div>
							<div class=" map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6841246.662196716!2d48.196977208528544!3d33.14974619564807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400722fe13443461%3A0x3e01d63391de79d1!2z2KfYsdio2YrZhNiMINin2YTYudix2KfZgg!5e0!3m2!1sar!2sus!4v1677227189133!5m2!1sar!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>							</div>
				</div>
			<!--//content-inner-section-->


	<!--/footer-bottom-->
		<div class="contact-w3ls" id="contact">
			<div class="footer-w3lagile-inner">
				
				<div class="footer-contact">
					
				</div>

						
						<div class="clearfix"> </div>
						<ul class="bottom-links-agile">
						<li><a href="contact.php" title="contact">Contact</a></li> 
								
						</ul>
					</div>
					<h3 class="text-center follow">Connect <span>Us</span></h3>
						<ul class="social-icons1 agileinfo">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>	
			 		
			 </div>
						
			</div>
			<div class="w3agile_footer_copy">
				<p>© 2023 Movies Pro. All rights reserved | Design by <a href="#"></a></p>
			</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-1.11.1.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->
		<!-- search-jQuery -->
				<script src="js/main.js"></script>
			<!-- //search-jQuery -->
			

<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>


<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
	<script src="js/bootstrap.js"></script>

 

</body>
</html>