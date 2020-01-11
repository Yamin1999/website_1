<?php
session_start();
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
}
 ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<title>Online application process </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A Website For MSC-nav student" />
	<meta name="keywords" content="MS, M.S., MSC, M.Sc.,MSC-nav admission" />

	<meta property="og:title" content="Website"/>
	<meta property="og:url" content="https://web.facebook.com/"/>
	<meta property="og:site_name" content="MSC-nav Students' Management"/>
	<meta property="og:description" content="....................."/>

	<link href="Franklin Gothic Medium.css" rel="stylesheet" type="text/css">
	<link href="Comic Sans MS.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/4ad984e438.js"></script>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
	<div id="page">
	<div class="MSC-loader"></div>


	<nav class="MSC-nav" role="navigation">

		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-5" >
						<div id="MSC-logo"><a href="index.html"><img src="C:\Users\dibbo\Desktop\website\education\images\ruet logo.png" height="100" align="left" /></a></div>
						<p><font color="black"><i><b> &ensp; &ensp; &ensp;&ensp;&ensp;&ensp;&ensp; Online application process</i><br>&ensp;Rajshahi University Of Engineering  Technoligy<br>&ensp;&ensp;&ensp;&ensp;রাজশাহী প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়</b></p>
					</div>






					<div class="col-xs-7 text-right menu-1 " style="top:33px">
						<ul>
							<li class="active"><a href="index.html"><b>Home</b></a></li>
							<li><a href=""><b>Engineering</b></a></li>



							<li><a href=""><b>Medical</b></a></li>



							<li><a href=""><b>Varsity</b></a></li>



							<li><a href="#contact"><b>Contact</b></a></li>
							<?php
							if(isset($_SESSION['username']))
							{
								?>
                	<li class="btn-cta"><a href="logout.php"><span>Logout</span></a></li>
										<li class="btn-cta"> <a href="index.php"><span> <?php echo $username; ?> </span> </a></li>
	<?php
							}

							else {
								// code...
							?>
							<li class="btn-cta"><a href="http://localhost//Website_1/login1.php"><span>Login</span></a></li>
							<li class="btn-cta"><a href="http://localhost//Website_1/registration.php"><span>Registration</span></a></li>
<?php
						}
						?>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</nav>

	<aside id="MSC-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/ruet1.jpg);">
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Welcome To Smart Application Process First Time Ever!!!</h1>
									<p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/ruet2.jpg);">
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1></h1>
									<h2></h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">Click Here To Learn More</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/kuet.JPG);">
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1></h1>
									<h2></h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">Learn More About Us</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
            	</li>
		   	<li style="background-image: url(images/cuet.jpg);">
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1></h1>
									<h2></h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">Click Click!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>



		  	</ul>
	  	</div>
	</aside>

	<div id="MSC-Features">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center MSC-heading">
					<h2>Features</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="fas fa-users"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Profile</a></h3>

						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="fas fa-chalkboard-teacher""></i>
						</span>
						<div class="desc">
							<h3><a href="#">Teacher</a></h3>

						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="fas fa-book-open"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Addmission</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="fas fa-blind"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Facilities</a></h3>

						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="fas fa-building"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Faculties</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="fas fa-exclamation-circle"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Notice</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="fas fa-scroll"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Research</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="fas fa-poll"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Result</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<footer id="MSC-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12 text-center animate-box MSC-widget">

					<div class="services">
						<span class="icon">
							<i class="fas fa-home"></i>
						</span>
				</div>
					<h1><a name="contact"></a>Contact Us</h1>

	        <ul class="MSC-footer-links">

			<li><strong>
			Mailing Address :</strong> 146-g, Batarmor, Ranibazar, Ghoramara, Boalia, Rajshahi, Bangladesh  </li>
			<li><strong>Fax:</strong> +88 (0721) 775620  </li>
			<li><strong>Ph) PABX : </strong>+88 (721) 123123-3, 321321-1</li>
			<li><strong>Ph) PABX : </strong>+88 (721) 456456-3, 789789-1</li>
			<li><strong>Website </strong><a href="index.html">WWW.Online Application Pro.com</a></li>


			</ul>

				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2019 BY Md.Tanvir Sarwar. All Rights Reserved.</small>
						<small class="block">Designed by Md.Tanvir Sarwar</small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>
<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="fas fa-arrow-alt-circle-up"></i></a>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/simplyCountdown.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
