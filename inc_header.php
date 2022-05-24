<!DOCTYPE html>
<html lang="en-us">
<head>

	<meta charset="utf-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?=isset($title)?$title:'ATS 24'?></title>
	<? if (isset($meta_descr)) { ?><meta name="description" content="<?=$meta_descr?>"><? } ?>
	<? if (isset($schema)) { ?><?=$schema?><? } ?>

	<!-- CSS files -->
	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic|Montserrat:400,700|Russo+One' rel='stylesheet'>
	<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.css">
	<link rel="stylesheet" href="/plugins/elegant_font/html_css/style.css">


	<link rel="stylesheet" href="/plugins/rs-plugin/css/settings.css" media="screen">
	<link rel="stylesheet" href="/plugins/magnific-popup/magnific-popup.css">

	<!-- Main CSS file -->
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/custom.css">
	<link rel="shortcut icon" href="/images/favicon.png">
</head>
<body>

<div id="preloader">
	<div id="status">&nbsp;</div>
</div>





<!-- Global Wrapper -->
<div id="wrapper">

	<div class="h-wrapper">

		<!-- Top Bar -->
		<div class="topbar gray">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 hidden-xs phone">

					</div>
					<div class="col-sm-6">
						<div class="pull-right">
							<? /*
							<ul class="top-menu">
								<li><a href="#"><i class="fa fa-lock"></i>  Sign In</a></li>
								<li><span class="py10"> | </span></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i> Cart <span class="cart-items">2</span></a></li>
							</ul>
							*/ ?>
							<a class="top-phone" href="tel:800-793-6307"><i class="fa fa-phone"></i>800.793.6307</a>
							<a class="top-email" href="mailto:sales@ats24.com"><i class="fa fa-envelope"></i>sales@ats24.com</a>
							<a class="shop top-quote" href="/request-quote.php">Quote</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header -->
		<header class="header-wrapper header-dark">
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-sm-2 col-xs-2">
							<a href="/" title="ATS – Converters and Fabricators of Mil-Spec Tapes, Composite Fabrics and Silicone Materials" class="logo"></a>
						</div>
						<div class="col-lg-3 col-sm-8 col-xs-4">
							<img src="/images/lockheed-martin-badge.svg" class="lockheed-martin-badge" height="70" />
						</div>
						<div class="col-lg-7 col-sm-12 col-xs-12 navbar-holder">
							<nav class="navbar-right">
								<ul class="menu">
									<!-- Toggle Menu - For Mobile Devices -->
									<li class="toggle-menu"> <i class="fa icon_menu"></i></li>
									<!-- END Toggle Menu -->
									<li><a href="/">Home</a></li>
									<li><a href="#">About Us</a>
										<ul  class="submenu">
											<li><a href="/about.php">About Us</a></li>
											<li><a href="/quality-and-certifications.php">Certifications</a></li>
										</ul>
									</li>
									<li><a href="#">Products</a>
									<ul  class="submenu">
								    <li><a href="/high-performance-tapes.php">High Performance Tapes</a></li>
								    <li><a href="/mil-spec-approved-tape.php">MIL-SPEC Approved Tape & Rubber Materials</a></li>
								    <li><a href="/coated-fabrics-films.php">Coated Fabrics & Films</a></li>
								    <li><a href="/silicone-elastomers.php">Silicone Rubber, Sponge, and Elastomers</a></li>
								</ul>
									</li>
									<li><a href="#">Capabilities</a>
										<div class="megamenu">
									  <div class="row">
										 <div class="col-6">
											<ul class="megamenu-list">
												<li><a href="/rewind-slitting.php"><i class="fal fa-repeat-alt fa-style2"></i> Rewind Slitting</a></li>
												<li><a href="/rotary-die-cutting.php"><i class="fal fa-compact-disc fa-style2"></i> Rotary Die Cutting</a></li>
												<? /*<li><a href="/liquid-injection-molding.php"><i class="fal fa-water fa-style2"></i> Liquid Injection Molding</a></li>
												*/ ?><li><a href="/steel-rule-die-cutting.php"><i class="fal fa-ruler-triangle fa-style2"></i> Steel Rule Die Cutting</a></li>
											</ul>
										</div>
										 <div class="col-6">
											<ul class="megamenu-list">
												<li><a href="/single-knife-slitting.php"><i class="fal fa-scalpel fa-style2"></i> Single Knife Slitting</a></li>
												<li><a href="/water-jet-cutting.php"><i class="far fa-tint fa-style2"></i> Waterjet Cutting</a></li>
											</ul>
										</div>
											</div>
										</div>
									</li>
									<li><a href="/portfolios.php">Portfolios</a></li>
									<li><a href="#">Applications</a>
										<ul  class="submenu">
										    <li><a href="/aircraft-aerospace-applications.php">Aircraft / Aerospace</a></li>
										    <li><a href="/construction-windows-doors-applications.php">Construction / Windows / Doors</a></li>
										    <li><a href="/electronics-electrical-assembly-applications.php">Electronics / Electrical Assembly</a></li>
										    <li><a href="/industrial-applications.php">Industrial</a></li>
										    <li><a href="/packaging-applications.php">Packaging</a></li>
										</ul>
									</li>
									<li><a href="/contact.php">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div> <!-- END Container -->
			</div> <!-- END Main-Header -->
		</header> <!-- END Header -->

	</div>


	<!-- Do not remove this class -->
	<div class="push-top"></div>
