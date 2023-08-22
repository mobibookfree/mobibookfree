<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
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
	<a class="left-icon bg-blue-dark font-14" href="features-pages.php"><i class="fa fa-angle-left"></i></a>

	<div class="heading-block bg-1">
		<h4>Contact</h4>
		<p>Fully working AMP Valid Form</p>
		<div class="overlay"></div>
	</div>

	<div class="decoration decoration-margins"></div>

	<div class="content">
		<form action-xhr="//www.domain.com/item/php/contact.php" method="POST" class="contactForm" target="_top" custom-validation-reporting="show-all-on-submit">
			<fieldset>
				<div class="formFieldWrap">
					<label class="field-title contactNameField" for="contactNameField">Full Name:<span>(required)</span>
					</label>
					<input type="text" name="contactNameField" value="" class="contactField" id="contactNameField" required  /><span visible-when-invalid="valueMissing" validation-for="name5"></span>
					<span visible-when-invalid="patternMismatch" validation-for="name5">
						Please enter your first and last name separated by a space (e.g. Jane Miller)
					</span>
				</div>
				<div class="formFieldWrap">
					<label class="field-title contactEmailField" for="contactEmailField">Email: <span>(required)</span>
					</label>
					<input type="text" name="contactEmailField" value="" class="contactField" id="contactEmailField" required /><span visible-when-invalid="valueMissing" validation-for="email5"></span>
					<span visible-when-invalid="typeMismatch" validation-for="email5"></span>
				</div>
				<div class="formTextareaWrap">
					<label class="field-title contactMessageTextarea" for="contactMessageTextarea">Message: <span>(required)</span>
					</label>
					<textarea name="contactMessageTextarea" class="contactTextarea" id="contactMessageTextarea"></textarea>
				</div>
				<div class="formSubmitButtonErrorsWrap contactFormButton">
					<input type="submit" class="buttonWrap button bg-green-dark contactSubmitButton" value="Send Message" />
				</div>
			</fieldset>
			<div submit-success>
				<template type="amp-mustache">
					Success! Thanks {{name}} , we'll get back to you shortly.
				</template>
			</div>
			<div submit-error>
				<template type="amp-mustache">
					Error! {{message}}
				</template>
			</div>
		</form>
		<div class="decoration"></div>
	</div>

	<div class="heading-block bg-2">
		<h4>Get in Touch!</h4>
		<p>Call, text and socialize!</p>
		<div class="overlay"></div>
	</div>

	<div class="decoration decoration-margins"></div>

	<div class="content">
		<h5>Contact Information</h5>
		<a href="#" class="contact-icon"><i class="fa fa-phone"></i>+123 456 7890</a>
		<a href="#" class="contact-icon"><i class="fa fa-comments"></i>+123 456 7890</a>
		<a href="#" class="contact-icon"><i class="fa fa-fax"></i>+123 456 7890</a>
		<a href="#" class="contact-icon"><i class="fa fa-envelope"></i>mail@domain.com</a>
		<a href="#" class="contact-icon"><i class="fa fa-facebook"></i>enabled.labs</a>
		<a href="#" class="contact-icon full-bottom"><i class="fa fa-twitter"></i>@iEnabled</a>
	</div>

	<div class="decoration decoration-margins"></div>

	<div class="heading-block bg-3">
		<h4>We're here!</h4>
		<p>Let's grab a coffee!</p>
		<div class="overlay"></div>
	</div>

	<div class="decoration decoration-margins"></div>

	<div class="content">
		<h5>Postal Information</h5>
		<p>
			PO Box 22161 Street Collins East<br>
			PO Box 16122 Collins Street West<br>
			Victoria 8007 Australia<br>
		</p>
	</div>
	<div class="decoration decoration-margins"></div>

	<div class="content">
		<h5>Envato Headquarters</h5>
		<p>
			121 King Street, Melbourne<br>
			Victoria 3000 Australia
		</p>
	</div>

	<div class="decoration decoration-margins"></div>
	<amp-iframe class="full-bottom" width="600" height="400" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" src="https://maps.google.com/?ie=UTF8&ll=47.595131,-122.330414&spn=0.006186,0.016512&t=h&z=17&output=embed"></amp-iframe>

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
