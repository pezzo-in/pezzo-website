<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PEZZO</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="PEZZO by Designova - Responsive HTML5 template">
<meta name="author" content="Designova">

<!-- Standard Favicon--> 
<link rel="shortcut icon" href="images/favicon/favicon.png">

<!-- Standard iPhone Touch Icon--> 
<link rel="apple-touch-icon" sizes="57x57" href="images/touchicons/apple-touch-icon-57-precomposed" />
<!-- Retina iPhone Touch Icon--> 
<link rel="apple-touch-icon" sizes="114x114" href="assets/touchicons/apple-touch-icon-114-precomposed" />
<!-- Standard iPad Touch Icon--> 
<link rel="apple-touch-icon" sizes="72x72" href="assets/touchicons/apple-touch-icon-72-precomposed" />
<!-- Retina iPad Touch Icon--> 
<link rel="apple-touch-icon" sizes="144x144" href="assets/touchicons/apple-touch-icon-144-precomposed" />

<!-- Bootstrap CSS Files -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- Custom Fonts Setup via Font-face CSS3 -->
<link href="fonts/fonts.css" rel="stylesheet">
<!-- CSS files for plugins -->
<link href="stylesheets/pace.preloader.css" rel="stylesheet">
<link href="stylesheets/owl.carousel.css" rel="stylesheet">
<link href="stylesheets/owl.theme.css" rel="stylesheet">
<link href="stylesheets/venobox.css" rel="stylesheet" />
<link href="stylesheets/jquery.tweet.css" rel="stylesheet"/>
<link href="stylesheets/slidingmenu.css" rel="stylesheet">
<!-- Main Template Styles -->
<link href="stylesheets/main.css" rel="stylesheet">
<!-- Main Template Responsive Styles -->
<link href="stylesheets/main-responsive.css" rel="stylesheet">
<!-- Main Template Retina Optimizaton Rules -->
<link href="stylesheets/main-retina.css" rel="stylesheet">
<!-- LESS stylesheet for managing color presets -->
<link rel="stylesheet/less" type="text/css" href="less/color.less">
<!-- LESS JS engine-->
<script src="less/less-1.5.0.min.js"></script>

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
      <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->

<!-- Modernizr Library-->
<script src="javascripts/modernizr.custom.js"></script>

</head>


<body>


<!-- Sliding Navigation : starts -->
<?php include 'header.php'; ?>
<!-- Sliding Navigation : ends -->


		
<!-- Master Wrap : starts -->
<section id="mastwrap" class="sliding">




<!-- page-section : starts -->
<section id="contact" class="contact-bg">
	

	<!-- inner-section : starts -->
	<section id="contact-wrap" class="inner-section">

		<!-- container : starts -->
		<section class="container">
			<div class="row">
				<article class="col-md-4 text-left">
					<div class="welcome pad-common border-top-main">
						<h1 class="main-heading">Get In Touch With Us</h1>
						<span class="liner-medium"></span>
						<h3 class="sub-heading dark-text"><span>an awesome portfolio template for every creative people</span></h3>
					</div>


<!-- testimonial-wrap : starts -->
<section class="testimonial-wrap pad-common high-bg">
	<div class="add-bottom-half"><img alt="" title="" class="contact-icon" src="images/rounded-icons/white/06.png"/></div>
	<a class="email-text white-text">info@domain.tld</a>
	<p class="address-text white-text">PEZZO LLC, North Avenue, London, UK</p>				
	<ul class="credentials text-left">
		<li><a href="#"><img src="images/icons/mail.png" alt="presence" title="presence"><span class="credential-text">hello@domain.inc</span></a></li>
		<li><a href="#"><img src="images/icons/phone.png" alt="presence" title="presence"><span class="credential-text">+123.456.789.0</span></a></li>
	</ul>
</section>
<!-- testimonial-wrap : ends -->

			
				</article>


				<article class="col-md-4 text-left">
					<div class="contact-item pad-common grey-bg border-top-dark">
						<img alt="" title="" class="contact-icon" src="images/rounded-icons/dark/08.png"/>
						<h2 class="inner-heading dark-text">Send a Message</h2>
						<span class="liner-small"></span>
						<div class="alert alert-error error add-top-half" id="fname">
							<p>Name must not be empty</p>
						</div>
						<div class="alert alert-error  error add-top-half" id="fmail">
							<p>Please provide a valid email</p>
						</div>
						 <div class="alert alert-error  error add-top-half" id="fmsg">
							 <p>Message should not be empty</p>
						 </div>
						  <form name="myform" id="contactForm" class="add-top-half" action="sendcontact.php" enctype="multipart/form-data" method="post"> 
								<article>
									<input type="text" placeholder="Your Name" id="name" name="name" size="100">
								</article>
								<article>
									 <input type="text" placeholder="Valid email ID" name="email" id="email" size="30">
								 </article>
								 <article>
									<textarea placeholder="Your Message" name="message" cols="40" rows="3" id="msg"></textarea>
									<div class="btn-wrap">
										<button class="btn btn-PEZZO-color" id="submit" name="submit" type="submit">Send Message</button>
									</div>
								</article>
						 </form>
					</div>


					<div class="contact-item pad-common dark-bg">
						<img alt="" title="" class="contact-icon" src="images/rounded-icons/white/07.png"/>
						<h2 class="inner-heading white-text">@twitter</h2>
						<span class="liner-small"></span>
						<div class="tweet-panel add-top-half">
							<article id="ticker" class="query"></article>
						</div>
					</div>
		


					
				</article>
				<article class="col-md-4 text-left">
					<!-- empty column -->
				</article>
			</div>
		</section>
		<!-- container : ends -->

        	</section>
	<!-- inner-section : ends -->
</section>
<!-- page-section : ends -->

<?php include 'footer.php'; ?>

</section>
<!-- Master Wrap : ends -->

<!-- Core JS Libraries -->
<script src="bootstrap/js/jquery.js" type="text/javascript"></script>
<script src="javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" ></script> 
<!-- JS Plugins -->
<script src="javascripts/pace.min.js"></script>
<script src="javascripts/retina.js" ></script> 
<script src="javascripts/classie.js" ></script> 
<script src="javascripts/jquery.touchSwipe.js"></script>
<script src="javascripts/owl.carousel.js"></script>
<script src="javascripts/jquery.mixitup.js"></script>
<script src="javascripts/venobox.min.js"></script>
<script src="javascripts/jquery.tweet.js"></script>
<script src="javascripts/jquery.stellar.js"></script>
<script src="javascripts/smooth-scroll.js"></script>
<script src="javascripts/jquery.appear.js"></script>
<script src="javascripts/slidingmenu.js"></script>

<!-- JS Custom Codes --> 
<script src="javascripts/form-validation.js" ></script> 
<script src="javascripts/main.js" ></script> 


</body>
</html>