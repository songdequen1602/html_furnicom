 
<?php 
require_once ('scssphp/scss.inc.php');
use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Server;
$themeCssName='';  
$ColorScheme = '#ff5e00';
$themeColor = strtolower($ColorScheme);

$scss = new Compiler();
$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
$scss->addImportPath('sass');
$scss->setVariables(array(
	'$linkColor' => $themeColor,
	'$dir' => 'ltr',
));

$string_css     = $scss->compile('@import "home2.scss"');
$header1_css    = $scss->compile('@import "header/header2.scss"');
$footer1_css    = $scss->compile('@import "footer/footer2.scss"');
$responsive_css     = $scss->compile('@import "responsive.scss"');

file_put_contents('css/home2.css', $string_css);
file_put_contents('css/header/header2.css', $header1_css);
file_put_contents('css/footer/footer2.css', $footer1_css);
file_put_contents('css/responsive.css', $responsive_css);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs
	============================================ -->
	<title>Furnicom - Responsive Furniture & Interior HTML Template</title>
	<meta charset="utf-8">
	<meta name="keywords" content="html template, furniture html template, interior html template, furniture & interior html template, best html template, best furniture template, best furniture theme, furniture theme, theme for furniture" />
	<meta name="description" content="Furnicom is an awesome premium HTML template for any kind of online store, especially for furniture, interior, decoration, design studio and more. Quickly & easily build your website just by some clicks." />
	<meta name="author" content="Smartaddons">
	<meta name="robots" content="index, follow" />
<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png"/>
<!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="js/owl-carousel/owl.theme.default.min.css"> -->
	<link href="css/themecss/lib.css" rel="stylesheet">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="js/minicolors/miniColors.css" rel="stylesheet">
<!-- Theme CSS
	============================================ -->
	<link href="css/themecss/so_sociallogin.css" rel="stylesheet">
	<link href="css/themecss/so_searchpro.css" rel="stylesheet">
	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/themecss/so-category-slider.css" rel="stylesheet">
	<link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
	<link href="css/footer/footer2.css" rel="stylesheet">
	<!-- <link href="css/header/header2.css" rel="stylesheet"> -->
	<link id="color_scheme" href="css/home2.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<!-- <link href="css/quickview/quickview.css" rel="stylesheet"> -->
<!-- Google web fonts
	============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:700,400,600,300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<style type="text/css">
	body{
		font-family: 'Poppins', sans-serif;
	}
</style>
</head>
<body class="commpn-here res layout-2">
	<div id="wrapper" class="wrapper-fluid banner-effect-3">
		<header class="typeheader-2">
			
			<div class="header-box">
				<div class="container">
					<div class="block-header">
						<div class="logo wow fadeInLeft">
							<a href="#" class="smooth" title="">
								<img src="image/catalog/demo/logo/logo2.png" class="img-responsive" alt="">
							</a>
						</div>
						<div class="header-center wow fadeInDown">
							<div class="header-top">
								<div class="header-user">
									<ul>
										<li>
											<a href="my-account.php" class="smooth" title="">
												<i class="fa fa-user" aria-hidden="true"></i>
											My Account</a>
										</li>
										<li>
											<a href="wishlist.php" class="smooth" title="">
												<i class="fa fa-heart"></i>
											My Wishlist</a>
										</li>
										<li>
											<a href="checkout.php" class="smooth" title="">
												<i class="fa fa-check-square-o" aria-hidden="true"></i>
											Checkout</a>
										</li>
									</ul>
								</div>
								<div class="header-language">
									<ul>
										<li>
											<a href="#" class="smooth dropdown-toggle" data-toggle="dropdown" title="">USD
												<i class="fa fa-caret-down dropdown-icon" aria-hidden="true"></i>
											</a>
											<ul class="dropdown-menu">
												<li>
													<a href="#" class="smooth" title="">USD</a>
												</li>
												<li>
													<a href="#" class="smooth" title="">UER</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#" class="smooth dropdown-toggle" data-toggle="dropdown" title="">
												<img src="image/catalog/england.png" class="lang-img">
												<span class="hidden-sm hidden-xs">English</span>
												<i class="fa fa-caret-down dropdown-icon" aria-hidden="true"></i>
											</a>
											<ul class="dropdown-menu">
												<li>
													<a href="#" class="smooth" title="">
														<span><img src="image/catalog/england.png" class="lang-img"></span>
													English</a>
												</li>
												<li>
													<a href="#" class="smooth" title="">
														<span><img src="image/catalog/ar-ar.png" class="lang-img"></span>
													Arabic</a>
												</li>
											</ul>
										</li>
										<li class="search-form-box">
											<form class="search-form-header">
												<input type="text" name="" placeholder="Keywords here" class="form-control">
												<button type="submit">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
											</form>
										</li>
									</ul>
								</div>
							</div>
							<div class="header-bottom">
								<div class="header-menu">
							<div class="megamenu-style-dev megamenu-dev">
								<div class="responsive">
									<nav class="navbar-default">
										<div class="container-megamenu-horizontal">
											<div class="nav-bar-header">
												<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle smooth">
													<i class="fa fa-bars" aria-hidden="true"></i>
												</button>
											</div>
											<div class="megamenu-wrapper">
												<span id="remove-megamenu"><i class="fa fa-times" aria-hidden="true"></i></span>
												<div class="megamenu-pattern">
													<div class="container1">
														<ul class="megamenu clearfix" data-transition="fade" data-animationtime="500">
															<li class="full-width menu-home">
																<a href="index.php" class="smooth cleafix" title="">
																	<i class="fa fa-home"></i>
																</a>
															</li>
															<li class="full-width menu-layout with-sub-menu hover">
																<p class="close-menu smooth"></p>
																<a href="index.php" class="smooth cleafix" title="">
																	LAYOUTS
																	<b class="caret"></b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">

																			<div class="html">
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/home-2.jpg" alt="">
																					</a>
																					<a href="index.php" class="smooth" title="">Home Page 1</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index2.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/home-lyout2.jpg" alt="">
																					</a>
																					<a href="index2.php" class="smooth" title="">Home Page 2</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index3.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/layout-3.jpg" alt="">
																					</a>
																					<a href="index3.php" class="smooth" title="">Home Page 3</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index4.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/layout-4.jpg" alt="">
																					</a>
																					<a href="index4.php" class="smooth" title="">Home Page 4</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="index5.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/layout-5.jpg" alt="">
																					</a>
																					<a href="index5.php" class="smooth" title="">Home Page 5</a>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-12">
																					<a href="html_width_RTL/index.php" class="smooth c-img" title>
																						<img src="image/catalog/layout/rtl.png" alt="">
																					</a>
																					<a href="html_width_RTL/index.php" class="smooth" title="">Home Page RTL</a>
																				</div>



																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="full-width menu-bedroom with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="category2.php" class="smooth cleafix" title="">
																	FEATURES
																	<b class="caret"></b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="html">
																					<div class="row">
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">listing Pages</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="category.php" class="smooth" title="">Category Page 1</a>
																										</li>
																										<li>
																											<a href="category2.php" class="smooth" title="">Category Page 2</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">Product Pages</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="detail.php" class="smooth" title="">Product Detail
																											</a>
																										</li>
																										<li>
																											<a href="detail-sidebar.php" class="smooth" title="">Product Detail Sidebar
																											</a>
																										</li>
																										<li>
																											<a href="detail-sidebar-right.php" class="smooth" title="">Product Detail Sidebar Right
																											</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">Shopping Pages</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="cart.php" class="smooth" title="">Shopping Cart Page</a>
																										</li>
																										<li>
																											<a href="checkout.php" class="smooth" title="">Checkout Page</a>
																										</li>
																										<li>
																											<a href="compare.php" class="smooth" title="">Compare Page</a>
																										</li>
																										<li>
																											<a href="wishlist.php" class="smooth" title="">Wishlist Page</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">MY ACCOUNT PAGES</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="my-account.php" class="smooth" title="">My Account Page</a>
																										</li>
																										<li>
																											<a href="login.php" class="smooth" title="">Login Page</a>
																										</li>
																										<li>
																											<a href="register.php" class="smooth" title="">Register Page</a>
																										</li>
																										<li>
																											<a href="order-history.php" class="smooth" title="">Order History</a>
																										</li>
																										<li>
																											<a href="order-infomation.php" class="smooth" title="">Order Infomation</a>
																										</li>
																										<li>
																											<a href="product-return.php" class="smooth" title="">Product Returns</a>
																										</li>
																										<li>
																											<a href="gift-voucher.php" class="smooth" title="">Gift Voucher</a>
																										</li>

																									</ul>
																								</div>
																							</div>
																						</div>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="full-width menu-dinning with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="smooth cleafix" title="">
																	CATEGORY
																	<b class="caret"></b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="html">
																					<div class="row">
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Living Room</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Large Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Small Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Coffee Table sets</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">End Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Console Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Set Of Tables</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image2.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Bed Room</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Large Coffee Tables
																												<span class="menu-label menu-label-new">New</span>
																											</a>
																											<ul>
																												<li>
																													<a href="#" class="smooth" title="">Large Coffee Tables
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">Small Coffee Tables
																													</a>
																												</li>
																											</ul>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Small Coffee Tables
																												<span class="menu-label menu-label-hot">Hot</span>
																											</a>
																											<ul>
																												<li>
																													<a href="#" class="smooth" title="">Large Coffee Tables
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">Small Coffee Tables
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">Large Coffee Tables
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">Small Coffee Tables
																													</a>
																												</li>

																											</ul>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Coffee Table sets</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">End Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Console Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Set Of Tables</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image3.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Work Place</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Large Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Small Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Coffee Table sets</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">End Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Console Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Set Of Tables</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image4.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Kitchen</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Large Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Small Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Coffee Table sets</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">End Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Console Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Set Of Tables</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="full-width menu-contact with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="listing-blog.php" class="smooth cleafix" title="">
																	BLOG
																	<b class="caret"> </b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				
																				<ul>
																					<li>
																						<a href="listing-blog-2-column.php" class="smooth" title="Listing Blog 2 Column">Masorny Blog 2 Column</a>
																					</li>
																					<li>
																						<a href="listing-blog-3-column.php" class="smooth" title="Listing Blog 3 Column">Masorny Blog 2 Column</a>
																					</li>
																					<li>
																						<a href="portfolio-2-column.php" class="smooth" title="Portfolio 2 Column">Portfolio 2 Column</a>
																					</li>
																					<li>
																						<a href="portfolio-3-column.php" class="smooth" title="Portfolio 3 Column">Portfolio 3 Column</a>
																					</li>
																					<li>
																						<a href="portfolio-detail.php" class="smooth" title="Portfolio Detail">Portfolio Detail</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>

															<li class="full-width menu-contact with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="smooth cleafix" title="">
																	PAGES
																	<b class="caret"> </b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-6">
																				<ul>
																					<li>
																						<a href="about-us.php" class="smooth" title="">About Us</a>
																					</li>
																					<li>
																						<a href="contact-us.php" class="smooth" title="">Contact Us</a>
																					</li>
																					<li>
																						<a href="faq.php" class="smooth" title="">FAQs</a>
																					</li>
																					<li>
																						<a href="coming-soon.php" class="smooth" title="">Comming Soon</a>
																					</li>
																					<li>
																						<a href="page404.php" class="smooth" title="">Page 404</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="menu-hot-deals"> 
																<a href="#" class="smooth" title>HOT DEALS</a>
															</li>

														</ul>
													</div>
												</div>
											</div>
										</div>
									</nav>
								</div>
							</div>
						</div>
							</div>
						</div>
						<button type="button" class="search-form-btn">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
						<div class="cart wow fadeInRight">
							<a href="#" class="smooth cart-box dropdown-toggle" data-toggle="dropdown-menu" title="">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								<p class="cart-title">MY CART</p>
								<p class="quantity">0 <span class="hidden-xs"> item(s)</span></p>
							</a>
							<ul class="dropdown-menu shopping-cart">
								<li class="shopping-cart-title clearfix">
									<label>Your Product</label>
									<label>Price</label>
								</li>
								<li class="product-item">
									<table class="table cart-table">
										<tbody>
											<tr>
												<td class="product-item-image">
													<a href="#" class="" title="">
														<img src="image/catalog/demo/products/cart-product1.png" alt="" class="img-responsive">
													</a>
													<button class="remove-product-cart smooth">
														<i class="fa fa-times"></i>
													</button>
												</td>
												<td class="product-item-name">
													<h4 class="product-name">
														<a href="#" class="smooth" title="">Diam nonummy nibh</a>
													</h4>
													<span class="product-item-quantity">Quantity: 01</span>
												</td>
												<td class="product-item-price">
													<span class="shopping-price">$320.00</span>
												</td>
											</tr>
											<tr>
												<td class="product-item-image">
													<a href="#" class="" title="">
														<img src="image/catalog/demo/products/cart-product2.png" alt="" class="img-responsive">
													</a>
													<button class="remove-product-cart smooth">
														<i class="fa fa-times"></i>
													</button>
												</td>
												<td class="product-item-name">
													<h4 class="product-name">
														<a href="#" class="smooth" title="">Diam nonummy nibh</a>
													</h4>
													<span class="product-item-quantity">Quantity: 01</span>
												</td>
												<td class="product-item-price">
													<span class="shopping-price">$450.00</span>
												</td>
											</tr>
											<tr>
												<td class="product-item-image">
													<a href="#" class="" title="">
														<img src="image/catalog/demo/products/cart-product3.png" alt="" class="img-responsive">
													</a>
													<button class="remove-product-cart smooth">
														<i class="fa fa-times"></i>
													</button>
												</td>
												<td class="product-item-name">
													<h4 class="product-name">
														<a href="#" class="smooth" title="">Diam nonummy nibh</a>
													</h4>
													<span class="product-item-quantity">Quantity: 01</span>
												</td>
												<td class="product-item-price">
													<span class="shopping-price">$250.00</span>
												</td>
											</tr>
										</tbody>
									</table>
								</li>
								<li class="total-price clearfix">
									<label class="total-title">TOTAL:</label>
									<label class="float-right">$1030.00</label>
								</li>
								<li class="shopping-cart-checkout">
									<a href="#" class="smooth" title="">GO TO CART</a>
									<a href="#" class="smooth" title="">CHECKOUT</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="home-slider yt-content-slider" data-autoplay="yes" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
				<div class="item-slider">
					<a href="#" class="" title="">
						<img src="image/catalog/demo/slider/home2/home-slider.png">
					</a>
					<div class="slider-info wow fadeInUpBig">
						<div class="container">
							<div class="slider-info-box">
								<h3 class="small-title">Furniture Collection</h3>
								<h2 class="big-title">TRENDING IN 2016</h2>
								<h4 class="small-desc">GIFT YOURSELF A BEAUTY LIVING</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="item-slider">
					<a href="#" class="" title="">
						<img src="image/catalog/demo/slider/home2/home-slider.png">
					</a>
					<div class="slider-info wow fadeInUpBig">
						<div class="container">
							<div class="slider-info-box">
								<h3 class="small-title">Furniture Collection</h3>
								<h2 class="big-title">TRENDING IN 2016</h2>
								<h4 class="small-desc">GIFT YOURSELF A BEAUTY LIVING</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="item-slider">
					<a href="#" class="" title="">
						<img src="image/catalog/demo/slider/home2/home-slider.png">
					</a>
					<div class="slider-info wow fadeInUpBig">
						<div class="container">
							<div class="slider-info-box">
								<h3 class="small-title">Furniture Collection</h3>
								<h2 class="big-title">TRENDING IN 2016</h2>
								<h4 class="small-desc">GIFT YOURSELF A BEAUTY LIVING</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</header>
		<!-- BANNER -->
		<div class="banner">
			<div class="row row0">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col0 wow fadeInLeft">
					<div class="collection">
						<a href="#" class="c-img hv-bounce-to-right">
							<img src="image/catalog/demo/banners/home1/banner1.jpg" class="img-responsive" alt="">
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col0 wow fadeInUp">
					<div class="collection">
						<a href="#" class="c-img hv-bounce-to-right">
							<img src="image/catalog/demo/banners/home2/banners3.jpg" class="img-responsive" alt="">
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col0 wow fadeInRight">
					<div class="collection">
						<a href="#" class="c-img hv-bounce-to-right">
							<img src="image/catalog/demo/banners/home2/banners4.jpg" class="img-responsive" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- //BANNER -->
		
		<!-- NEW ARRIVALS -->
		<div class="new-arrivals">
			<div class="container">
				<h2 class="title-underline wow fadeInLeftBig">NEW ARRIVALS</h2>
				<div class="new-arrivals-slider yt-content-slider" data-autoplay="yes" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="4" data-items_column1="4" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
					<div class="item-box">
						<div class="item wow fadeInUp">
							<div class="product-box">
								<div class="product-image">
									<a href="detail.php" class="c-img link-product">
										<img src="image/catalog/demo/products/product1.jpg" class="img-responsive" alt="">
									</a>
									<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
								</div>
								<div class="product-info">
									<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
									<div class="price">
										$115.00 <span class="price-old">$142.00</span>
									</div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="button-group">
									<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
										<i class="fa fa-retweet" aria-hidden="true"></i>
									</button>
									<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
										ADD TO CART
									</button>
									<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="item wow fadeInUp">
							<div class="product-box">
								<div class="product-image">
									<a href="detail.php" class="c-img link-product">
										<img src="image/catalog/demo/products/product3.jpg" class="img-responsive" alt="">
									</a>
									<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
								</div>
								<div class="product-info">
									<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
									<div class="price">
										$115.00 <span class="price-old">$142.00</span>
									</div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="button-group">
									<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
										<i class="fa fa-retweet" aria-hidden="true"></i>
									</button>
									<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
										ADD TO CART
									</button>
									<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="item-box">
						<div class="item wow fadeInUp">
							<div class="product-box">
								<div class="product-image">
									<a href="detail.php" class="c-img link-product">
										<img src="image/catalog/demo/products/product2.jpg" class="img-responsive" alt="">
									</a>
									<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
								</div>
								<div class="product-info">
									<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
									<div class="price">
										$115.00 <span class="price-old">$142.00</span>
									</div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="button-group">
									<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
										<i class="fa fa-retweet" aria-hidden="true"></i>
									</button>
									<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
										ADD TO CART
									</button>
									<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="item wow fadeInUp">
							<div class="product-box">
								<div class="product-image">
									<a href="detail.php" class="c-img link-product">
										<img src="image/catalog/demo/products/product5.jpg" class="img-responsive" alt="">
									</a>
									<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
								</div>
								<div class="product-info">
									<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
									<div class="price">
										$115.00 <span class="price-old">$142.00</span>
									</div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="button-group">
									<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
										<i class="fa fa-retweet" aria-hidden="true"></i>
									</button>
									<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
										ADD TO CART
									</button>
									<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</button>
								</div>
								<span class="label-sale blue-left">SALE</span>
							</div>
						</div>
					</div>
					<div class="item-box">
						<div class="item wow fadeInUp">
							<div class="product-box">
								<div class="product-image">
									<a href="detail.php" class="c-img link-product">
										<img src="image/catalog/demo/products/product4.png" class="img-responsive" alt="">
									</a>
									<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
								</div>
								<div class="product-info">
									<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
									<div class="price">
										$115.00 <span class="price-old">$142.00</span>
									</div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="button-group">
									<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
										<i class="fa fa-retweet" aria-hidden="true"></i>
									</button>
									<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
										ADD TO CART
									</button>
									<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="item wow fadeInUp">
							<div class="product-box">
								<div class="product-image">
									<a href="detail.php" class="c-img link-product">
										<img src="image/catalog/demo/products/product38.png" class="img-responsive" alt="">
									</a>
									<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
								</div>
								<div class="product-info">
									<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
									<div class="price">
										$115.00 <span class="price-old">$142.00</span>
									</div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="button-group">
									<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
										<i class="fa fa-retweet" aria-hidden="true"></i>
									</button>
									<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
										ADD TO CART
									</button>
									<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</button>
								</div>
								<span class="label-sale blue-left">SALE</span>
							</div>
						</div>
					</div>
					<div class="item-box">
						<div class="item wow fadeInUp">
							<div class="product-box">
								<div class="product-image">
									<a href="detail.php" class="c-img link-product">
										<img src="image/catalog/demo/products/product8.jpg" class="img-responsive" alt="">
									</a>
									<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
								</div>
								<div class="product-info">
									<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
									<div class="price">
										$115.00 <span class="price-old">$142.00</span>
									</div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="button-group">
									<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
										<i class="fa fa-retweet" aria-hidden="true"></i>
									</button>
									<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
										ADD TO CART
									</button>
									<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="item wow fadeInUp">
							<div class="product-box">
								<div class="product-image">
									<a href="detail.php" class="c-img link-product">
										<img src="image/catalog/demo/products/product9.jpg" class="img-responsive" alt="">
									</a>
									<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
								</div>
								<div class="product-info">
									<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
									<div class="price">
										$115.00 <span class="price-old">$142.00</span>
									</div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="button-group">
									<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
										<i class="fa fa-retweet" aria-hidden="true"></i>
									</button>
									<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
										ADD TO CART
									</button>
									<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
										<i class="fa fa-heart" aria-hidden="true"></i>
									</button>
								</div>
								<span class="label-sale blue-left">SALE</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //NEW ARRIVALS -->

		<!-- BEST SELLER -->
		<div class="best-seller">
			<div class="container">
				<div class="best-seller-box">
					<h2 class="title-underline wow fadeInLeftBig">best seller</h2>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp">
							<div class="deals-box product-info clearfix">
								<div class="product-image-right">
									<a href="detail.php" class="hv-radial">
										<img src="image/catalog/demo/products/product12.jpg" alt="">
									</a>
								</div>
								<div class="box">
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="deals-box product-info clearfix">
								<div class="product-image-right">
									<a href="detail.php" class="hv-radial">
										<img src="image/catalog/demo/products/product59.jpg" alt="">
									</a>
								</div>
								<div class="box">
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="deals-box product-info clearfix">
								<div class="product-image-right">
									<a href="detail.php" class="hv-radial">
										<img src="image/catalog/demo/products/product18.jpg" alt="">
									</a>
								</div>
								<div class="box">
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp">
							<div class="deals-box product-info clearfix">
								<div class="product-image-right">
									<a href="detail.php" class="hv-radial">
										<img src="image/catalog/demo/products/product15.jpg" alt="">
									</a>
								</div>
								<div class="box">
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="deals-box product-info clearfix">
								<div class="product-image-right">
									<a href="detail.php" class="hv-radial">
										<img src="image/catalog/demo/products/product16.jpg" alt="">
									</a>
								</div>
								<div class="box">
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="deals-box product-info clearfix">
								<div class="product-image-right">
									<a href="detail.php" class="hv-radial">
										<img src="image/catalog/demo/products/product17.jpg" alt="">
									</a>
								</div>
								<div class="box">
									<h5 class="product-name"><a href="detail.php" class="smooth" title="">Donec vel venenatis</a></h5>
									<div class="price">$115.00 <span class="price-old">$142.00</span></div>
									<div class="rating">
										<div class="rating-box">
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star fa-stack-1x"></i>
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
											<span class="fa fa-stack">
												<i class="fa fa-star-o fa-stack-1x"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //BEST SELLER -->

		<!-- //FEATURED PRODUCT -->
		<div class="new-arrivals featured-product">
			<div class="container">

				<!-- TAB NAV-TAB -->
				<div class="featured-tab wow fadeInDown">
					<ul class="nav nav-tabs">
						<li class="active">
							<h3 class="title-underline">
								<a class="smooth" data-toggle="tab" href="#home">FEATURED</a>
							</h3>
						</li>
						<li>
							<h3 class="title-underline">
								<a class="smooth" data-toggle="tab" href="#profile">POPULAR</a>
							</h3>
						</li>
						<li>
							<h3 class="title-underline">
								<a class="smooth" data-toggle="tab" href="#messages">TOP SALES</a>
							</h3>
						</li>
					</ul>
				</div>
				<!-- //TAB NAV-TAB -->

				<!-- TAB CONTENT -->
				<div class="featured-content">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="home">
							<div class="new-arrivals-slider-tab" id="owl1">
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product38.png" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product3.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product8.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product34.png" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product6.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product39.png" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product5.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product1.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="profile">
							<div class="new-arrivals-slider-tab" id="owl2">
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product53.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product54.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product55.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product56.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product57.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product58.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product1.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product38.png" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="messages">
							<div class="new-arrivals-slider-tab" id="owl3">
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product52.png" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product53.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product54.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product55.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product9.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product39.png" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
								<div class="item-box">
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product19.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="item wow fadeInUp">
										<div class="product-box">
											<div class="product-image">
												<a href="detail.php" class="c-img link-product">
													<img src="image/catalog/demo/products/product2.jpg" class="img-responsive" alt="">
												</a>
												<a class="smooth quickview iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" target="_self" data-fancybox-type="iframe">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
											</div>
											<div class="product-info">
												<h4 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur turpis orci</a></h4>
												<div class="price">
													$115.00 <span class="price-old">$142.00</span>
												</div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="button-group">
												<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
													<i class="fa fa-retweet" aria-hidden="true"></i>
												</button>
												<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
													ADD TO CART
												</button>
												<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
													<i class="fa fa-heart" aria-hidden="true"></i>
												</button>
											</div>
											<span class="label-sale blue-left">SALE</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //TAB CONTENT -->

				<!-- BANNER -->
				<div class="banner wow fadeInUp">
					<a href="#" class="hv-full-light">
						<img src="image/catalog/demo/banners/home2/banner2.png" class="img-responsive" alt="">
					</a>
				</div>
				<!-- BANNER -->
			</div>
		</div>
		<!-- //FEATURED PRODUCT -->

		<!-- DEALS -->
		<div class="deals">
			<div class="container">
				<div class="deals-left wow fadeInLeft">
					<div class="tab-content">
						<div id="cate1" class="tab-pane fade in active">
							<div class="deals-slider" id="cate-slider1">
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product2.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/12/15">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product51.png" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/11/11">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cate2" class="tab-pane fade">
							<div class="deals-slider" id="cate-slider2">
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product3.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/12/15">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product1.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/11/11">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cate3" class="tab-pane fade">
							<div class="deals-slider" id="cate-slider3">
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product4.png" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/12/15">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product5.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/11/11">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cate4" class="tab-pane fade">
							<div class="deals-slider" id="cate-slider4">
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product6.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/12/15">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product7.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/11/11">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cate5" class="tab-pane fade">
							<div class="deals-slider" id="cate-slider5">
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product9.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/12/15">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product22.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/11/11">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cate6" class="tab-pane fade">
							<div class="deals-slider" id="cate-slider6">
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product53.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/12/15">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">jpg
												<img src="image/catalog/demo/products/product52.png" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/11/11">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cate7" class="tab-pane fade">
							<div class="deals-slider" id="cate-slider7">
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product54.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/12/15">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product39.png" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/11/11">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cate8" class="tab-pane fade">
							<div class="deals-slider" id="cate-slider8">
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product38.png" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/12/15">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product2.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/11/11">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cate9" class="tab-pane fade">
							<div class="deals-slider" id="cate-slider9">
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product39.png" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/12/15">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row5">
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-image">
											<a href="detail.php" class="hv-light c-img">
												<img src="image/catalog/demo/products/product2.jpg" alt="" class="img-responsive">
											</a>
											<span class="label-sale red-right">SALE</span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col5">
										<div class="product-info">
											<div class="product-info-top">
												<h3 class="product-name">
													<a href="detail.php" class="smooth" title="">Donec vel venenatis</a>
												</h3>
												<div class="price">$115.00 <span class="price-old">$142.00</span></div>
												<div class="rating">
													<div class="rating-box">
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star fa-stack-1x"></i>
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
														<span class="fa fa-stack">
															<i class="fa fa-star-o fa-stack-1x"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="product-info-bottom">
												<div class="product-desc">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="left-group">
													<div class="table-countdown" data-countdown="2019/11/11">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="deals-right wow fadeInRight">
					<div class="categories-tab">
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#cate1">
									<img src="image/catalog/demo/category/cate1.png" class="img-responsive" alt="">
									<h4 class="cate-name">LIVING ROOM</h4>
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#cate2">
									<img src="image/catalog/demo/category/cate2.png" class="img-responsive" alt="">
									<h4 class="cate-name">OFFICE</h4>
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#cate3">
									<img src="image/catalog/demo/category/cate3.png" class="img-responsive" alt="">
									<h4 class="cate-name">ARMCHAIR</h4>
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#cate4">
									<img src="image/catalog/demo/category/cate4.png" class="img-responsive" alt="">
									<h4 class="cate-name">DINNING ROOM</h4>
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#cate5">
									<img src="image/catalog/demo/category/cate5.png" class="img-responsive" alt="">
									<h4 class="cate-name">SHELF</h4>
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#cate6">
									<img src="image/catalog/demo/category/cate6.png" class="img-responsive" alt="">
									<h4 class="cate-name">BED ROOM</h4>
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#cate7">
									<img src="image/catalog/demo/category/cate7.png" class="img-responsive" alt="">
									<h4 class="cate-name">SOFA</h4>
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#cate8">
									<img src="image/catalog/demo/category/cate9.png" class="img-responsive" alt="">
									<h4 class="cate-name">NIGHTSTAND</h4>
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#cate9">
									<img src="image/catalog/demo/category/cate8.png" class="img-responsive" alt="">
									<h4 class="cate-name">WATCHES</h4>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- //DEALS -->

		<!-- LATEST NEWS -->
		<div class="latest-news">
			<div class="container">
				<h2 class="title-underline wow fadeInLeftBig">LATEST NEWS</h2>
				<div class="row row0 wow fadeInUp">
					<div class="col-lg-6 col-md-6 col-sm-12 col0">
						<div class="biggest-news">
							<a href="#" class="c-img">
								<img src="image/catalog/demo/banners/home2/cate-bg.png" class="img-responsive" alt="">
							</a>
							<div class="biggest-news-info">
								<h5 class="biggest-news-title"><a href="detail-blog.php" class="smooth">Lorem ipsum dolor sit amet</a></h5>
								<div class="biggest-news-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col0">
						<div class="row row0 latest-news-right">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col0 news-right-item">
								<a href="detail-blog.php" class="c-img hv-light-v2">
									<img src="image/catalog/demo/banners/home2/news1.png">
								</a>
								<div class="news-right-info">
									<h5 class="news-right-title"><a href="detail-blog" class="smooth">Lorem ipsum dolor</a></h5>
									<div class="news-right-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col0 news-right-item">
								<div class="news-right-info">
									<h5 class="news-right-title"><a href="detail-blog" class="smooth">Lorem ipsum dolor</a></h5>
									<div class="news-right-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
								</div>
								<a href="detail-blog.php" class="c-img hv-light-v2">
									<img src="image/catalog/demo/banners/home2/banner5.jpg">
								</a>
							</div>
						</div>
					</div> 
					<div class="col-lg-12 col0">
						<div class="row row0">
							<div class="col-lg-6 col-md-6 col-sm-6 col0">
								<div class="news-bottom-info">
									<h5 class="news-bottom-title">
										<a href="detail-blog.php" class="smooth">Lorem ipsum dolor sit </a>
									</h5>
									<div class="news-bottom-desc">Make your mealtime even more memorable with comfortable serving arrangements.
									Nulla eget erat eleifend ullamcorper diam non convallis enim.</div>
								</div>
							</div>					
							<div class="col-lg-6 col-md-6 col-sm-6 col0">
								<div class="news-bottom-image">
									<a href="detail-blog.php" class="c-img hv-radial">
										<img src="image/catalog/demo/banners/home2/news2.png" class="img-responsive" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //LATEST NEWS -->

		<!-- FOOTER -->
		<footer class="typefooter-2">
			<!-- NEWLETTER -->
			<div class="newletter">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 newletter-left">
							<h4 class="new-letter-title">NEED HELP? CALL OUR AWARD-WINNING </h4>
							<p>SUPPORT TEAM 24/7 AT <a href="tel:(844) 555-8386">(844) 555-8386</a></p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 newletter-right">
							<form action="" method="" class="send-letter form-inline">
								<div class="form-group form-box">
									<input type="text" name="" placeholder="Enter your email address" class="form-control">
									<button type="submit" class="form-control">SUBSCRIBE</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- //NEWLETTER -->
			<div class="footer-box">
				<!-- FOOTER MIDDLE -->
				<div class="footer-middle">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="footer-middle-box">
									<h3 class="footer-title">our service</h3>
									<ul class="footer-list">
										<li>
											<a href="#" class="smooth" title>Delivery Information</a>
										</li>
										<li>
											<a href="#" class="smooth" title>Returns</a>
										</li>
										<li>
											<a href="#" class="smooth" title>Terms & Conditions</a>
										</li>
										<li>
											<a href="#" class="smooth" title>Shipping & Refund</a>
										</li>
										<li>
											<a href="#" class="smooth" title>Specials</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="footer-middle-box">
									<h3 class="footer-title">Extras</h3>
									<ul class="footer-list">
										<li>
											<a href="#" class="smooth" title>Contact Us</a>
										</li>
										<li>
											<a href="#" class="smooth" title>return</a>
										</li>
										<li>
											<a href="#" class="smooth" title>special</a>
										</li>
										<li>
											<a href="#" class="smooth" title>brands</a>
										</li>
										<li>
											<a href="#" class="smooth" title>gift voucher</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="footer-middle-box">
									<h3 class="footer-title">my account</h3>
									<ul class="footer-list">
										<li>
											<a href="#" class="smooth" title>my order</a>
										</li>
										<li>
											<a href="#" class="smooth" title>My credit slips</a>
										</li>
										<li>
											<a href="#" class="smooth" title>My addresses</a>
										</li>
										<li>
											<a href="#" class="smooth" title>My personal info</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="footer-middle-box footer-middle-right">
									<h3 class="footer-title">contact us</h3>
									<ul class="contact-list">
										<li>
											<i class="fa fa-map-marker" aria-hidden="true"></i>Megnor Comp Pvt Limited, Trade Centre, Udhana Darwaja
										</li>
										<li>
											<i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:(91)-261 3023333">(91)-261 3023333</a>
										</li>
										<li>
											<i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:demo@harvest.com">demo@harvest.com</a>
										</li>
									</ul>
									<div class="payment">
										<img src="image/catalog/demo/footer/paymen.png" class="img-responsive" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //FOOTER MIDDLE -->
				<!-- FOOTER BOTTOM -->
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="footer-bottom-left">
									<h6 class="footer-bottom-title">
										Download Our App
									</h6>
									<a href="#" class="d-inline-block">
										<img src="image/catalog/demo/footer/down-app.png" class="img-responsive" alt="">
									</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="footer-bottom-right">
									<h6 class="footer-bottom-title">
										Follow Us
									</h6>
									<ul class="footer-social">
										<li>
											<a href="#" class="smooth" title="">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" class="smooth" title="">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" class="smooth" title="">
												<i class="fa fa-wifi" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" class="smooth" title="">
												<i class="fa fa-google-plus" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" class="smooth" title="">
												<i class="fa fa-pinterest" aria-hidden="true"></i>
											</a>
										</li>

									</ul>
								</div>
							</div>
							<div class="col-lg-12 col-sm-12 col-xs-12">
								<div class="copyright text-center">
									Furnicom HTML © 2019 Demo Store. All Rights Reserved. Designed by <a href="https://www.smartaddons.com/" target="_blank" class="smooth" title>SmartAddons.com</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //FOOTER BOTTOM -->
			</div>
		</footer>
		<!-- //FOOTER -->
		<div class="back-to-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></div>
	</div>




<!-- End Color Scheme
	============================================ -->
<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/slick-slider/slick.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="js/minicolors/jquery.miniColors.min.js"></script>
	<script type="text/javascript" src="js/jquery.nav.js"></script>
	<script type="text/javascript" src="js/quickview/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/wowjs/wow.js"></script>
<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/homepage.js"></script>
	<script type="text/javascript" src="js/themejs/cd1.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>  
	<script type="text/javascript" src="js/themejs/nouislider.js"></script>
	<script type="text/javascript" src="js/themejs/script.js"></script>
	<script>
		if ($(window).width() > 768) {
			new WOW().init();
		}
	</script>
</body>
</html>