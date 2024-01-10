<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
       <link href="css\bootstrap\bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

    <!-- //for-mobile-apps -->


    <!-- pop-up -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

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
    <style>
     	.move{
		border: 1px solid #A60E15ff !important;
        margin: 0px;
        box-shadow: 0px 0px 3px #A60E15ff ;
        color: white;
        text-align: start;
        border-radius: 0 0 33px 0;
	}
    .move .text{
        margin: 20px;
    }
    .genres div {

        /* box-shadow: 0px 0px 3px #A60E15ff ; */
        border: 1px solid black ;
        color:red ;
        background: black;
    }
    .stars{
        text-align: start;
    }
    .time div{
        /* background:  #A60E15ff; */
        /* box-shadow: 0px 0px 3px #A60E15ff ; */
        border: 1px solid #A60E15ff ;
        color: white; 
        border-radius: 4px; 
        text-align:center;
    }
    .button a{
                color: white;

    }
    h1 a{
        color: white;
    }
    .nav a{
        color: white;

    }
    .button  :hover{
        background: #A60E15ff;

    }
    
   
     
    </style>
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
    <!--/banner////////////////////////////////////////////////////////////-section-->
    <div id="demo-1" data-zs-src='["images/2.jpg", "images/1.jpg", "images/3.jpg","images/4.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
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
		<!--/banner-info-->
		<div class="baner-info">
			<h3>Latest <span>On</span>Line <span>Mo</span>vies</h3>
			<h4>In space no one can hear you scream.</h4>
			
		</div>
		<!--/banner-ingo-->
	</div>
<!-- ////////////////////////////////////////////////////////////////////////////////// -->
        </div>
        <!--//header-w3l-->
        <!--/banner-info-->
        <div class="baner-info">
            <h3>Latest <span>C</span>INEMA <span>Mo</span>vies</h3>
            <h4>In space no one can hear you scream.</h4>
           
        </div>
        <!--/banner-ingo-->
    </div>
    </div>
    <!--/banner-section-->
    <!--//main-header-->
    <!--/banner-bottom-->


    <!--//banner-bottom-->
    <!-- Modal1 -->
    <!-- Button trigger modal -->


<!-- Modal -->

        <!-- Modal login-->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog">
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
<!-- Modal1 Register -->
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

<div class=" m-3"></div> 
<div class="row  m-4">

<?php
    $a=0;
    $timenow=date('y-m-d');
	$sql = "SELECT * FROM film ORDER BY id DESC";
	$result = mysqli_query($conn, $sql);
	foreach ( $result as $row) {
        if ($a==6) {
            break;
        } 
         $a++;

		echo'                                                                            

   <div class="col-sm-6 col-12 mb-5">
        <div class="row move">
            <div class="col-sm-6 col-12 m-0 p-0" style="width: 100%;">
            <img style="width: 100%;" src="img/' . $row['image'] . '" class="img-responsive d-block mx-auto m-0" alt="Your image description">
           </div>
            <div class="col-sm-6 col-12">
                <div class="text">
                    <div class="mt-5"><h4>' . $row['name'] . '</h4></div>
                     <div class="row gx-2 genres mt-4 ">

                    ';
                  $Genres=  explode("/", $row['Genres']);
                  foreach($Genres as $Genres){
        echo' <div class="col-3 mx-1 px-2 "><a>'.$Genres.'</a></div>';

                  }
                    echo'
                    </div>
                    <div class="row">

                    <div class="col-4 mt-4">
					    <h6>' . $row['long'] . ' Min</h6>
                    </div>
                    <div class="row stars col-8 mt-4" >
                         <div class="block-stars col-10">
                    
                          
                            <ul class="w3l-ratings" >
                            ';
                            
                            for ($i = 0; $i < $row['evaluataon']; $i++) {
                                echo '<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>';
                            }
                            for ($i = 0; $i < 5 - $row['evaluataon']; $i++) {
                                echo '<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>';
                            }
                            echo ' </ul>
					    </div>
                    </div>
                    </div>

                   
                    <div class="row gx-2 time mt-3 ">';
                    $id= $row['id'];
                    $sql = "SELECT * FROM timeshow WHERE film_id =$id AND day = '$timenow' ";
                    $gettime = mysqli_query($conn, $sql);
                    foreach ($gettime as $time) {
                        $time_24_hour_format = $time['time'];
						$time_12_hour_format = date('h:i A', strtotime($time_24_hour_format));
                        echo '<div class="col-4 m-1 px-1 "><a>'.$time_12_hour_format.'</a></div>';
                    }
                       echo'
                    </div>
                    <div class="row gx-2 time button mt-5 ">
                        <div></div>
                        <div class="col-5 mx-2 p-2 "><a href="single.php?id='. $row['id'].'">see more</a></div>
                        <div></div>

                    </div>
                </div>
            </div>
        </div>
   </div>
    <!-- <div class="col-4"></div> -->
';
}?>
    </div>
<div class="m-5">

    <nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
        <a class="page-link"style="background:  #A60E15ff; color:black" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
        </li>
        <li class="page-item "><a class="page-link"  style="background:  #A60E15ff; color:black" href="index.php">1</a></li>
        <li class="page-item"><a class="page-link" style="background:  #A60E15ff; color:black" href="index2.php">2</a></li>
        <li class="page-item">
        <a class="page-link" style="background:  #A60E15ff; color:black" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
        </li>
    </ul>
    </nav>
</div>


<div class="contact-w3ls" id="contact">



    <ul class="bottom-links-agile">
        <li><a href="contact.html" title="contact">Contact Us</a></li>
    </ul>
    <h3 class="text-center follow">Connect <span>Us</span></h3>
    <ul class="social-icons1 agileinfo">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    </ul>

</div>


</div>

</div>
<div class="w3agile_footer_copy">
    <p>© 2023 Movies Pro. All rights reserved | Design by Narjes<a href="#"></a></p>
</div>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-1.11.1.min.js"></script>
<!-- Dropdown-Menu-JavaScript -->
<!-- <script>
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
</script> -->
<!-- //Dropdown-Menu-JavaScript -->

<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>

<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
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
<!-- bootstrap -->
<script src="js\bootstrap\bootstrap.min.js.map"></script>


</body>

</html>