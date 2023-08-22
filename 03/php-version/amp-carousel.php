<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
<!--AMP HTML files require a canonical link pointing to the regular HTML. If no HTML version exists, it should point to itself.-->
<link rel="canonical" href="index.html">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1,user-scalable=no"><meta name="apple-mobile-web-app-capable" content="yes"/><meta name="apple-mobile-web-app-status-bar-style" content="black">
<style amp-custom><?php readfile( getcwd()."/styles/style.css"); ?></style>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
</head>

<body>		
	<a class="right-icon bg-blue-dark font-15" href="landing-1.php"><i class="fa fa-home"></i></a>
	<a class="left-icon bg-blue-dark font-15" href="features-amp.php"><i class="fa fa-angle-left"></i></a>

	<div class="heading-block bg-1">
		<h4>Image Slider</h4>
		<p>Provided by AMP</p>
		<div class="overlay"></div>
	</div>

	<amp-carousel height="300" width="400" layout="responsive" type="slides" autoplay loop delay="5000">
		<amp-img src="images/pictures/5.jpg" layout="responsive" width="320" height="280"></amp-img>
		<amp-img src="images/pictures/1.jpg" layout="responsive" width="320" height="280"></amp-img>
		<amp-img src="images/pictures/2.jpg" layout="responsive" width="320" height="280"></amp-img>
		<amp-img src="images/pictures/3.jpg" layout="responsive" width="320" height="280"></amp-img>
		<amp-img src="images/pictures/4.jpg" layout="responsive" width="320" height="280"></amp-img>
	</amp-carousel>

	<amp-carousel class="slider full-bottom" width="600" height="375" layout="responsive" type="slides" controls autoplay loop delay="3000">
		<div>
			<amp-img class="responsive-img" src="images/pictures/1.jpg" layout="fill"></amp-img>
			<div class="caption">
				<h3>Our first AMP Item</h3>
				<p>Built with awesome features!</p>
			</div>
		</div>
		<div>
			<amp-img class="responsive-img" src="images/pictures/2.jpg" layout="fill"></amp-img>
			<div class="caption">
				<h3 class="center-text">Our first AMP Item</h3>
				<p class="center-text">Built with awesome features!</p>
			</div>
		</div>
		<div>
			<amp-img class="responsive-img" src="images/pictures/3.jpg" layout="fill"></amp-img>
			<div class="caption">
				<h3>Our first AMP Item</h3>
				<p>Built with awesome features!</p>
			</div>
		</div>
	</amp-carousel>

	<amp-carousel class="full-bottom" height="150" layout="fixed-height" type="carousel">
		<amp-img src="images/pictures/6t.jpg" width="150" height="150"></amp-img>
		<amp-img src="images/pictures/1t.jpg" width="150" height="150"></amp-img>
		<amp-img src="images/pictures/2t.jpg" width="150" height="150"></amp-img>
		<amp-img src="images/pictures/3t.jpg" width="150" height="150"></amp-img>
		<amp-img src="images/pictures/4t.jpg" width="150" height="150"></amp-img>
	</amp-carousel>

	<div class="footer">
		<div class="decoration decoration-margins"></div>
		<a href="#" class="footer-logo"></a>
		<p class="boxed-text center-text">
			We aim to simplify your life by creating a beautiful and simple product that's feature rich and easy to use!
		</p>
		<div class="decoration decoration-margins"></div>
		<div class="footer-socials">
			<a href="https://www.facebook.com/enabled.labs/" class="facebook-bg"><i class="fa fa-facebook"></i></a>
			<a href="https://plus.google.com/u/2/105775801838187143320" class="google-bg"><i class="fa fa-google-plus"></i></a>
			<a href="https://twitter.com/iEnabled" class="twitter-bg"><i class="fa fa-twitter"></i></a>
			<a href="tel:+1-234-567-8901" class="phone-bg"><i class="fa fa-phone"></i></a>
			<a href="mailto:name@domain.com" class="mail-bg"><i class="fa fa-envelope"></i></a>
			<a href="#" class="bg-magenta-dark"><i class="fa fa-angle-up"></i></a>
			<div class="clear"></div>
		</div>
		<div class="decoration decoration-margins"></div>
		<p class="center-text">Copyright Enabled. All rights reserved.</p>
	</div>
	
</body>
</html>