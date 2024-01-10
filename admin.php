<!DOCTYPE html>
<html>

<head>
  <title>Movies Pro</title>
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
  <!-- <link rel="icon" href="images/logo.jpg" type="image/x-icon"> -->
  <link href="css\bootstrap\bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <!-- pop-up -->
  <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- //pop-up -->
  <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
  <link rel="stylesheet" type="text/css" href="css\style.css" />
  <link href="css/font-awesome.css" rel="stylesheet">
  <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
  <!--/web-fonts-->
  <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
  <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <!--//web-fonts-->

</head>

<body>
  <!--/main-header-->
  <!--/banner-section-->
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
										echo '<li class="active"><a href="admin.php">admin</a></li>';
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
  <!--/banner-section-->
  <!--//main-header-->

  <!-- Modal1 -->
  <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">

    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Login</h4>
          <div class="login-form">
            <form action="#" method="post">
              <input type="email" name="email" placeholder="E-mail" required="">
              <input type="password" name="password" placeholder="Password" required="">
              <div class="tp">
                <input type="submit" value="LOGIN NOW">
              </div>
              <div class="forgot-grid">
                <div class="log-check">
                  <label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
                </div>
                <div class="forgot">
                  <a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
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
              <input type="password" name="conform password" placeholder="Confirm Password" required="">
              <div class="signin-rit">
                <span class="agree-checkbox">
                  <label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="#" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="#" target="_blank">Privacy Policy</a></label>
                </span>
              </div>
              <div class="tp">
                <input type="submit" value="REGISTER NOW">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //Modal1 -->
  <!-- breadcrumb -->
  <div class="w3_breadcrumb">
    <div class="breadcrumb-inner">
      <ul>
        <li><a href="index.php">Home</a><i>//</i></li>
        <li>admin</li>
      </ul>
    </div>
  </div>

  <?php
  require 'conection.php';
  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $long = $_POST['long'];
    $evaluataon = $_POST['evaluataon'];
    $Genres = $_POST['Genres'];
    $datenow=date("Y-m-d");
    $timeinsert=date('Y-m-d', strtotime($datenow . ' +8 day'));

    if ($_FILES["image"]["error"] == 4) {
      echo
      "<script> alert('Image Does Not Exist'); </script>";
    } else {
      $fileName = $_FILES["image"]["name"];
      $fileSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];

      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $fileName);
      $imageExtension = strtolower(end($imageExtension));
      if (!in_array($imageExtension, $validImageExtension)) {
        echo
        "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
      } else if ($fileSize > 1000000) {
        echo
        "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
      } else {
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;

        move_uploaded_file($tmpName, 'img/' . $newImageName);
        $query = "INSERT INTO film VALUES('', '$name','$long','$evaluataon', '$newImageName','$Genres','$timeinsert')";
        mysqli_query($conn, $query);
        echo
        "
      <script>
        alert('Successfully Added');
      </script>
      ";
      }
    }
  }

  if (isset($_POST["add"])) {
    $film_id = $_POST["film_id"];
    $time = $_POST['time'];
    $day = $_POST['day'];

    $query = "INSERT INTO timeshow VALUES('', '$film_id','$time','$day')";
    mysqli_query($conn, $query);
  }
  ?>
  <div class="clearfix" ></div>
  <div class="w3_mail_grids">
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
     <div class="row">
      <div class="col-md-6 w3_agile_mail_grid">
        <span class="input input--ichiro">
          <input class="input__field input__field--ichiro" name="name" type="text" id="input-25" placeholder=" " required="">
          <label class="input__label input__label--ichiro" for="input-25">
            <span class="input__label-content input__label-content--ichiro">filme name</span>
          </label>
        </span>
        <span class="input input--ichiro">
          <input class="input__field input__field--ichiro" name="long" type="number" id="input-26" placeholder=" " required="">
          <label class="input__label input__label--ichiro" for="input-26">
            <span class="input__label-content input__label-content--ichiro">filme long</span>
          </label>
        </span>
       
      </div>
      <div class="col-md-6 w3_agile_mail_grid">
        <span class="input input--ichiro">
          <input class="input__field input__field--ichiro" name="evaluataon" type="number" id="input-27" placeholder=" " required=""min="0" max="5">
          <label class="input__label input__label--ichiro" for="input-27">
            <span class="input__label-content input__label-content--ichiro">evaluataon</span>
          </label>
        </span>
        <span class="input input--ichiro">
          <input class="input__field input__field--ichiro" name="Genres" type="text" id="input-31" placeholder=" Drama/Adventure/Family " required="">
          <label class="input__label input__label--ichiro" for="input-31">
            <span class="input__label-content input__label-content--ichiro">Genres</span>
          </label>
        </span>
        <span class="input input--ichiro">
          <input class="input__field input__field--ichiro" name="image" accept=".jpg, .jpeg, .png" type="file" id="input-29" placeholder=" " required="">
          <label class="input__label input__label--ichiro" for="input-29">
            <span class="input__label-content input__label-content--ichiro">image</span>
          </label>
        </span>
        
      </div>
      <input type="submit" name="submit" value="Submit">
    </div>
    </form>
  </div>
      <div class="clearfix m-5"> </div>
      <h1 style="color:white; " class="m-5" >Add Time for Film </h1>
      <div class="w3_mail_grids">
      <form action="" method="post" autocomplete="off">
      <div class="row">
        <div class="col-md-6 w3_agile_mail_grid">
        <span class="input input--ichiro">
            <input class="input__field input__field--ichiro" name="time" type="time" id="input-30" placeholder=" " required="">
            <label class="input__label input__label--ichiro" for="input-30">
              <span class="input__label-content input__label-content--ichiro">time show</span>
            </label>
          </span>
          <span class="input input--ichiro">
            <input class="input__field input__field--ichiro" name="day" type="date" id="input-35" placeholder=" " required="">
            <label class="input__label input__label--ichiro" for="input-35">
              <span class="input__label-content input__label-content--ichiro">date</span>
            </label>
          </span>
        
        </div>
        <div class="col-md-6 w3_agile_mail_grid">
        <span class="input input--ichiro">
          <select name="film_id" style="	background-color: black !important; border: 1px solid #A60E15ff; box-shadow: 0px 0px 13px #A60E15ff  ;" class="custom-select custom-select-lg mb-3">
            <option selected value="1">الفلم</option>
            <?php 
            $sql = "SELECT * FROM film ORDER BY id DESC";
            $result = mysqli_query($conn, $sql);
            foreach ( $result as $row) {
              echo '<option value="'.$row['id'].'">'.$row['name'].'</option> ';
            }
            ?>
          </select>
          </span> 
        </div>
        <input type="submit" name="add" value="Submit">
      </div>
    </form>
  </div>
  <br>
  <br>
  <div class="container ">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">date insert</th>
          <th scope="col">delete</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $i=0;
      $sql = "SELECT * FROM film ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);
      foreach ( $result as $row) {
        $i++;
        echo '
        <tr>
          <th scope="row">'.$i.'</th>
          <td>'.$row['name'].'</td>
          <td>'.$row['timeinsert'].'</td>
          <td class="delete" ><a href="delete.php?id='. $row['id'].'">delete</a></td>
        </tr>
        ';
      }
      ?>
          </tbody>
        </table>
  </div>
  <br>
  <br>
  <br>
  <br>
  <div class="container ">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name filme</th>
          <th scope="col">timeshow</th>
          <th scope="col">dateshow </th>
          <th scope="col">delete </th>
        </tr>
      </thead>
      <tbody>
      <?php
        $i=0;

       $sql = "SELECT * FROM film ORDER BY id DESC";
       $result = mysqli_query($conn, $sql);
       foreach ( $result as $row) {
      $id=$row['id'];
      $i++;
      $sql = "SELECT * FROM timeshow WHERE film_id=$id ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);
      foreach ( $result as $time) {
        echo'
        <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$row['name'].'</td>
        <td> '. $time['time'].'</td>
        <td> '. $time['day'].'</td>
        <td class="delete" ><a href="delete.php?time_id='. $time['id'].'">delete</a></td>
        </tr>';

      }

    }
      ?>
          </tbody>
        </table>
  </div>
  <br>
  <br>

  <div class="w3agile_footer_copy m-4">
    <p>© 2023 Movies Pro. All rights reserved | Design by Narjes<a href="#"></a></p>
  </div>
  <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

  <script src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>

  <!-- Dropdown-Menu-JavaScript -->
  <script>
    $(document).ready(function() {
      $(".dropdown").hover(
        function() {
          $('.dropdown-menu', this).stop(true,true).slideDown("fast");
          $(this).toggleClass('open');
        },
        function() {
          $('.dropdown-menu', this).stop(true,true).slideUp("fast");
          $(this).toggleClass('open');
        }
      );
    });
  </script>
  <!-- //Dropdown-Menu-JavaScript -->


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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--end-smooth-scrolling-->
  <script src="js/bootstrap.js"></script>




</body>

</html>