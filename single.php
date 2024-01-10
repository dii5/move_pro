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
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
	<!-- pop-up -->
	<link href="css\bootstrap\bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/taps.css" />

	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-up -->
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
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
								<li class="active"><a href="index.php">Home</a></li>


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
								<li><a href="contact.php">Contact Us</a></li>
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

				<li>Single</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumb -->
	<!--/content-inner-section-->
	<div class="w3_content_agilleinfo_inner">
		<div class="agile_featured_movies">
			<div class="inner-agile-w3l-part-head">
			<?php
							$id = $_GET['id'];
							$sql = "SELECT * FROM film WHERE id='$id' ORDER BY id DESC";
							$result = mysqli_query($conn, $sql);


							while ($row = $result->fetch_assoc()) {
								echo '
				<h3 class="w3l-inner-h-title">' . $row['name'] . '</h3>
				';
				$Genres=  explode("/", $row['Genres']);
				foreach($Genres as $Genres){
	  echo'
				<p class="w3ls_head_para">'.$Genres.'</p>';}echo'
			</div>
			<div class="latest-news-agile-info row">
				<div class="col-md-6 latest-news-agile-left-content">
					<div class="single video_agile_player">

						<div class="video-grid-single-page-agileits">
							
														<div data-video="f2Z65fobH2I" id="video"> <img src="img/' . $row['image'] . '" alt="" class="img-responsive" /> </div>
													</div>
														';
							} ?>
						</div>
						<div class="single-agile-shar-buttons">

							<!-- Place this tag where you want the +1 button to render. -->
							<div class="g-plusone" data-size="medium"></div>

							<!-- Place this tag after the last +1 button tag. -->
							<script type="text/javascript">
								(function() {
									var po = document.createElement('script');
									po.type = 'text/javascript';
									po.async = true;
									po.src = 'https://apis.google.com/js/platform.js';
									var s = document.getElementsByTagName('script')[0];
									s.parentNode.insertBefore(po, s);
								})();
							</script>
							</li>
							</ul>
						</div>
						<div class="admin-text">

						</div>
						<div class="response">

						</div>
						
					</div>

				<div class="col-md-6 latest-news-agile-right-content">
					   <div class="main">  
						<div class="btn-box">  
							<?php	
							date_default_timezone_set('Asia/Baghdad');

							$datenow=date("Y-m-d");
							$timeinsert2=date('Y-m-d', strtotime($datenow . ' +1 day'));
							$timestamp = strtotime($timeinsert2);
							$day2 = date('l', $timestamp);
							
							$timeinsert3=date('Y-m-d', strtotime($datenow . ' +2 day'));
							$timestamp = strtotime($timeinsert3);
							$day3 = date('l', $timestamp);
							
							$timeinsert4=date('Y-m-d', strtotime($datenow . ' +3 day'));
							$timestamp = strtotime($timeinsert4);
							$day4 = date('l', $timestamp);
							
							$timeinsert5=date('Y-m-d', strtotime($datenow . ' +4 day'));
							$timestamp = strtotime($timeinsert5);
							$day5 = date('l', $timestamp);
							
							$timeinsert6=date('Y-m-d', strtotime($datenow . ' +5 day'));
							$timestamp = strtotime($timeinsert6);
							$day6 = date('l', $timestamp);
							
							$timeinsert7=date('Y-m-d', strtotime($datenow . ' +6 day'));
							$timestamp = strtotime($timeinsert7);
							$day7 = date('l', $timestamp);
							
                        
							echo'
								<button class="btn active" id="btn1" onclick="tab1()">Today</button>  
								<button class="btn" id="btn2" onclick="tab2()"> Tomorrow</button>  
								<button class="btn" id="btn3" onclick="tab3()">'.$day3.'</button>  
								<button class="btn" id="btn4" onclick="tab4()">'.$day4.'</button>  
								<button class="btn" id="btn5" onclick="tab5()">'.$day5.'</button>  
								<button class="btn" id="btn6" onclick="tab6()">'.$day6.'</button>  
								<button class="btn" id="btn7" onclick="tab7()">'.$day7.'</button>
								';?>  
						</div>  
						<div id="content1" class="content  w-100" >  
								<h2>Show Time </h2>  
								<div class="row w-100">
									<?php 
									  $id = $_GET['id'];
									  $sql = "SELECT * FROM timeshow WHERE film_id='$id' AND day='$datenow' ORDER BY id DESC";
									  $result = mysqli_query($conn, $sql);
									  if(empty($result)){
										echo '<p>No more time slot available this day</p>';
									  }else{
											foreach ($result as $row) {
												$time_24_hour_format = $row['time'];
												$time_12_hour_format = date('h:i A', strtotime($time_24_hour_format));
												echo	'<div class="m-2"><a href="chosesit.php?timeshow='.$time_12_hour_format.'&name_id='.$id.'&day='.$datenow.'" class="hero-btn">'.$time_12_hour_format.'</a></div>';
											}
									}
									?>

								</div>
						</div> 
						<div id="content2" class="content  w-100" >  
								<h2>Show Time </h2>  
								<div class="row w-100">
									<?php 
									  $id = $_GET['id'];
									  $sql = "SELECT * FROM timeshow WHERE film_id='$id' AND day='$timeinsert2' ORDER BY id DESC";
									  $result = mysqli_query($conn, $sql);
									  if(empty($result)){
										echo '<p>No more time slot available this day</p>';

										
									  }else{
											foreach ($result as $row) {
												$time_24_hour_format = $row['time'];
												$time_12_hour_format = date('h:i A', strtotime($time_24_hour_format));
												echo	'<div class="m-2"><a href="chosesit.php?timeshow='.$time_12_hour_format.'&name_id='.$id.'&day='.$timeinsert2.'" class="hero-btn">'.$time_12_hour_format.'</a></div>';
											}
									}
									?>

								</div>
						</div>  
						<div id="content3" class="content  w-100" >  
								<h2>Show Time </h2>  
								<div class="row w-100">
									<?php 
									  $id = $_GET['id'];
									  $sql = "SELECT * FROM timeshow WHERE film_id='$id' AND day='$timeinsert3' ORDER BY id DESC";
									  $result = mysqli_query($conn, $sql);
									  if(!empty($result)){
										foreach ($result as $row) {
												$time_24_hour_format = $row['time'];
												$time_12_hour_format = date('h:i A', strtotime($time_24_hour_format));
												echo	'<div class="m-2"><a href="chosesit.php?timeshow='.$time_12_hour_format.'&name_id='.$id.'&day='.$timeinsert3.'" class="hero-btn">'.$time_12_hour_format.'</a></div>';
											}
									  }else{
										echo '<p>No more time slot available this day</p>';
									  }
									?>

								</div>
						</div> 
						<div id="content4" class="content  w-100" >  
								<h2> Show Time</h2>  
								<div class="row w-100">
									<?php 
									  $id = $_GET['id'];
									  $sql = "SELECT * FROM timeshow WHERE film_id='$id' AND day='$timeinsert4' ORDER BY id DESC";
									  $result = mysqli_query($conn, $sql);
									  if(!empty($result)){
										foreach ($result as $row) {
												$time_24_hour_format = $row['time'];
												$time_12_hour_format = date('h:i A', strtotime($time_24_hour_format));
												echo	'<div class="m-2"><a href="chosesit.php?timeshow='.$time_12_hour_format.'&name_id='.$id.'&day='.$timeinsert4.'" class="hero-btn">'.$time_12_hour_format.'</a></div>';
											}
									  }else{
										echo '<p>No more time slot available this day</p>';
									  }
									?>

								</div>
						</div> 
						<div id="content5" class="content  w-100" >  
								<h2> Show Time</h2>  
								<div class="row w-100">
									<?php 
									  $id = $_GET['id'];
									  $sql = "SELECT * FROM timeshow WHERE film_id='$id' AND day='$timeinsert5' ORDER BY id DESC";
									  $result = mysqli_query($conn, $sql);
										if(!empty($result)){
											foreach ($result as $row) {
													$time_24_hour_format = $row['time'];
													$time_12_hour_format = date('h:i A', strtotime($time_24_hour_format));
													echo	'<div class="m-2"><a href="chosesit.php?timeshow='.$time_12_hour_format.'&name_id='.$id.'&day='.$timeinsert5.'" class="hero-btn">'.$time_12_hour_format.'</a></div>';
												}
										  }else{
											echo '<p>No more time slot available this day</p>';
										  }
									?>

								</div>
						</div> 
						<div id="content6" class="content  w-100" >  
								<h2> Show Time</h2>  
								<div class="row w-100">
									<?php 
									  $id = $_GET['id'];
									  $sql = "SELECT * FROM timeshow WHERE film_id='$id' AND day='$timeinsert6' ORDER BY id DESC";
									  $result = mysqli_query($conn, $sql);
										if(!empty($result)){
											foreach ($result as $row) {
													$time_24_hour_format = $row['time'];
													$time_12_hour_format = date('h:i A', strtotime($time_24_hour_format));
													echo	'<div class="m-2"><a href="chosesit.php?timeshow='.$time_12_hour_format.'&name_id='.$id.'&day='.$timeinsert6.'" class="hero-btn">'.$time_12_hour_format.'</a></div>';
												}
										  }else{
											echo '<p>No more time slot available this day</p>';
										  }
									?>

								</div>
						</div>  
						<div id="content7" class="content  w-100" >  
								<h2> Show Time</h2>  
								<div class="row w-100">
									<?php 
									  $id = $_GET['id'];
									  $sql = "SELECT * FROM timeshow WHERE film_id='$id' AND day='$timeinsert7' ORDER BY id DESC";
									  $result = mysqli_query($conn, $sql);
									  if(!empty($result)){
										foreach ($result as $row) {
																				$time_24_hour_format = $row['time'];
																				$time_12_hour_format = date('h:i A', strtotime($time_24_hour_format));
																				echo	'<div class="m-2"><a href="chosesit.php?timeshow='.$time_12_hour_format.'&name_id='.$id.'&day='.$timeinsert7.'" class="hero-btn">'.$time_12_hour_format.'</a></div>';
																			}
									  }else{
										echo '<p>No more time slot available today</p>';
									  }
									  
									?>

								</div>
						</div>  
					</div>  
								
								<div class="clearfix"> </div>
								<div class="agile-info-recent">

								</div>

				</div>	
								</div>

					<div class="clearfix"></div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
			</div>
		</div>
		<!--//content-inner-section-->


		<!--/footer-bottom-->
		<div class="contact-w3ls" id="contact">
			<div class="footer-w3lagile-inner">
			

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
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>

		</div>

	</div>

	</div>
	<div class="w3agile_footer_copy">
		<p>© 2023 Movies Pro. All rights reserved | Design by <a href="#"></a></p>
	</div>
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
	<script>
		$(document).ready(function() {
			$(".dropdown").hover(
				function() {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function() {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>

	<!-- //Dropdown-Menu-JavaScript -->
	<!-- search-jQuery -->
	<script src="js/main.js"></script>

	<script src="js/simplePlayer.js"></script>
	<script>
		$("document").ready(function() {
			$("#video").simplePlayer();
		});
	</script>
	<script>
		$("document").ready(function() {
			$("#video1").simplePlayer();
		});
	</script>
	<script>
		$("document").ready(function() {
			$("#video2").simplePlayer();
		});
	</script>
	<script>
		$("document").ready(function() {
			$("#video3").simplePlayer();
		});
	</script>
	<script>
		$("document").ready(function() {
			$("#video4").simplePlayer();
		});
	</script>
	<script>
		$("document").ready(function() {
			$("#video5").simplePlayer();
		});
	</script>
	<script>
		$("document").ready(function() {
			$("#video6").simplePlayer();
		});
	</script>
	<script>
		$("document").ready(function() {
			$("#video6").simplePlayer();
		});
	</script>

	<!-- pop-up-box -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->

	<div id="small-dialog1" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<script>
		$(document).ready(function() {
			$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds
				autoPlay: true,
				navigation: true,

				items: 5,
				itemsDesktop: [640, 4],
				itemsDesktopSmall: [414, 3]

			});

		});
	</script>

	<!--/script-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
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

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!--end-smooth-scrolling-->
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/taps.js"></script>  



</body>

</html>