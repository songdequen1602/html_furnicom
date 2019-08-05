
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

$string_css     = $scss->compile('@import "theme.scss"');
$header1_css    = $scss->compile('@import "header/header1.scss"');
$footer1_css    = $scss->compile('@import "footer/footer1.scss"');
$responsive_css     = $scss->compile('@import "responsive.scss"');

file_put_contents('css/theme.css', $string_css);
file_put_contents('css/header/header1.css', $header1_css);
file_put_contents('css/footer/footer1.css', $footer1_css);
file_put_contents('css/responsive.css', $responsive_css);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs
  ============================================ -->
  <title>Furicom Living Room</title>
  <meta charset="utf-8">
  <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
  <meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
  <meta name="author" content="Magentech">
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
  <link href="css/footer/footer1.css" rel="stylesheet">
  <link href="css/header/header1.css" rel="stylesheet">
  <link id="color_scheme" href="css/theme.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/quickview/quickview.css" rel="stylesheet">
<!-- Google web fonts
  ============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <style type="text/css">
  body{
    font-family: 'Poppins', sans-serif;
  }
</style>
</head>
<body class="common-here res layout-1">

  <div id="wrapper" class="wrapper-fluid banner-effect-3">
    <!-- HEADER CONTAINER -->
    <header class="typeheader-1">
      <!-- HEADER TOP -->
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-9">
              <div class="header-user">
                <ul>
                  <li>
                    <a href="#" class="smooth dropdown-toggle" data-toggle="dropdown" title="">USD
                      <i class="fa fa-caret-down dropdown-icon" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#" class="smooth" title="">VNĐ</a>
                      </li>
                      <li>
                        <a href="#" class="smooth" title="">Yuan</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <img src="image/catalog/england.png" class="lang-img">
                    <a href="#" class="smooth dropdown-toggle" data-toggle="dropdown" title=""><span class="hidden-md hidden-sm hidden-xs">English</span>
                      <i class="fa fa-caret-down dropdown-icon" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#" class="smooth" title="">
                          <span><img src="image/catalog/england.png" class="lang-img"></span>
                        Vietnamese</a>
                      </li>
                      <li>
                        <a href="#" class="smooth" title="">
                          <span><img src="image/catalog/england.png" class="lang-img"></span>
                        Chinese</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#" class="smooth" title="">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    My Account</a>
                  </li>
                  <li>
                    <a href="#" class="smooth" title="">
                      <i class="fa fa-heart"></i>
                    My Wishlist</a>
                  </li>
                  <li>
                    <a href="#" class="smooth" title="">
                      <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    Checkout</a>
                  </li>

                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-3">
              <div class="header-hotline">
                <div class="item">
                  <p>
                    <a href="#" class="smooth" title="">
                      Start 
                      <span>LIVE CHAT</span>
                    </a>
                  </p>
                </div>
                <div class="item">
                  <p>
                    <span class="hidden-md">Call our customer service at:</span> <a href="tel:096-999-8386" class="smooth" title=""><span>096-999-8386</span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //HEADER TOP -->

      <!-- HEADER CENTER -->
      <div class="header-center">
        <div class="container">
          <div class="logo">
            <a href="#" class="" title="">
              <img src="image/catalog/demo/logo/logo.png" alt="">
            </a>
          </div>
          <div class="search-form">
            <button type="button" class="smooth search-form-btn"><i class="fa fa-search"></i></button>
            <form action="" method="">
              <div class="icon">
                <i class="fa fa-search" aria-hidden="true"></i>
              </div>
              <input type="text" name="" placeholder="Enter your keyword...">
              <button type="submit">Search</button>
            </form>
          </div>
          <div class="shipping">
            <img src="image/catalog/demo/header/shipping-bg.png">
            <div class="shipping-info">
              <h6 class="shipping-title">Everyday Free Shipping</h6>
              <p class="shipping-desc">& No Sales Tax</p>
            </div>
          </div>
          <div class="cart">
            <a href="#" class="smooth cart-box dropdown-toggle" title="" data-toggle="dropdown">
              <img src="image/catalog/demo/header/cart.png" class="cart-image">
              <p class="quantity">0 item(s) - $0.00</p>
              <p class="cart-title">MY CART</p>
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
      <!-- //HEADER CENTER -->

      <!-- HEADER BOTTOM -->
      <div class="header-bottom">
        <div class="container">
          <div class="header-bottom-left">
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
                              <li class="full-width menu-home with-sub-menu hover">
                                <p class="close-menu smooth"></p>
                                <a href="#" class="smooth cleafix" title="">
                                  <i class="fa fa-home"></i>
                                </a>
                                <div class="sub-menu">
                                  <div class="content">
                                    <div class="row">

                                      <div class="html">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                          <a href="#" class="smooth" title>
                                            <img src="image/catalog/layout/home-2.jpg">
                                          </a>
                                          <p>Home page 1</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                          <a href="#" class="smooth" title>
                                            <img src="image/catalog/layout/home-lyout2.jpg">
                                          </a>
                                          <p>Home page 2</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                          <a href="#" class="smooth" title>
                                            <img src="image/catalog/layout/layout-3.jpg">
                                          </a>
                                          <p>Home page 3</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                          <a href="#" class="smooth" title>
                                            <img src="image/catalog/layout/layout-4.jpg">
                                          </a>
                                          <p>Home page 4</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                          <a href="#" class="smooth" title>
                                            <img src="image/catalog/layout/layout-5.jpg">
                                          </a>
                                          <p>Home page 5</p>
                                        </div>


                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="full-width">
                                <a href="#" class="smooth cleafix" title="">
                                  LIVING ROOM
                                  <span class="menu-label">HOT</span>
                                </a>

                              </li>
                              <li class="full-width menu-bedroom with-sub-menu hover">
                                <p class="close-menu"></p>
                                <a href="#" class="smooth cleafix" title="">
                                  BEDROOM
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
                                                <a href="#" class="smooth title-submenu" title="">New Product</a>
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
                                                <a href="#" class="smooth title-submenu" title="">Hot Sale</a>
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
                                                <a href="#" class="smooth title-submenu" title="">Daily Deals</a>
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
                                                <a href="#" class="smooth title-submenu" title="">All Category</a>
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
                              <li class="full-width menu-dinning with-sub-menu hover">
                                <p class="close-menu"></p>
                                <a href="#" class="smooth cleafix" title="">
                                  DINING
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
                                                  <img src="image/catalog/demo/slider/home1/static-menu-image.jpg">
                                                </div>
                                                <a href="#" class="smooth title-submenu" title="">New Product</a>
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
                                                  <img src="image/catalog/demo/slider/home1/static-menu-image2.jpg">
                                                </div>
                                                <a href="#" class="smooth title-submenu" title="">Hot Sale</a>
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
                                                  <img src="image/catalog/demo/slider/home1/static-menu-image3.jpg">
                                                </div>
                                                <a href="#" class="smooth title-submenu" title="">Daily Deals</a>
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
                                                  <img src="image/catalog/demo/slider/home1/static-menu-image4.jpg">
                                                </div>
                                                <a href="#" class="smooth title-submenu" title="">All Category</a>
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
                              <li>
                                <a href="#" class="smooth" title="">
                                  ACCESSORIES
                                  <span class="menu-label menu-label-new">NEW</span>
                                </a>
                              </li>

                              <li class="full-width menu-blog with-sub-menu hover">
                                <a href="#" class="smooth cleafix" title="">
                                  BLOG
                                  <b class="caret"></b>
                                </a>
                                <p class="close-menu"></p>
                                <div class="sub-menu">
                                  <div class="content">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <div class="html">
                                          <div class="col-md-2 col-sm-12">
                                            <a href="#" class="smooth" title>
                                              <img src="image/catalog/demo/slider/home1/blog-type1.png">
                                              <p>Blog 1 collumn</p>
                                            </a>
                                          </div>
                                          <div class="col-md-2 col-sm-12">
                                            <a href="#" class="smooth" title>
                                              <img src="image/catalog/demo/slider/home1/blog-type2.png">
                                              <p>blog 2 column</p>
                                            </a>
                                          </div>
                                          <div class="col-md-2 col-sm-12">
                                            <a href="#" class="smooth" title>
                                              <img src="image/catalog/demo/slider/home1/blog-type4.png">
                                              <p>blog 3 collumn</p>
                                            </a>
                                          </div>
                                          <div class="col-md-2 col-sm-12">
                                            <a href="#" class="smooth" title>
                                              <img src="image/catalog/demo/slider/home1/blog-type.png">
                                              <p>blog 4 collumn</p>
                                            </a>
                                          </div>
                                          <div class="col-md-2 col-sm-12">
                                            <a href="#" class="smooth" title>
                                              <img src="image/catalog/demo/slider/home1/blog-type5.png">
                                              <p>blog list</p>
                                            </a>
                                          </div>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="full-width menu-contact with-sub-menu hover">
                                <p class="close-menu"></p>
                                <a href="#" class="smooth cleafix" title="">
                                  CONTACT US
                                  <b class="caret"> </b>
                                </a>
                                <div class="sub-menu">
                                  <div class="content">
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <ul>
                                          <li>
                                            <a href="#" class="smooth" title="">About Us</a>
                                          </li>
                                          <li>
                                            <a href="#" class="smooth" title="">Services</a>
                                          </li>
                                          <li>
                                            <a href="#" class="smooth" title="">FAQs</a>
                                          </li>
                                          <li>
                                            <a href="#" class="smooth" title="">Support 24/7</a>
                                          </li>
                                          <li>
                                            <a href="#" class="smooth" title="">Blogs</a>
                                          </li>

                                        </ul>
                                      </div>
                                      <div class="col-sm-6">
                                        <ul>
                                          <li>
                                            <a href="#" class="smooth" title="">Pages</a>
                                          </li>
                                          <li>
                                            <a href="#" class="smooth" title="">Sitemap</a>
                                          </li>
                                          <li>
                                            <a href="#" class="smooth" title="">Comming Soon</a>
                                          </li>
                                          <li>
                                            <a href="#" class="smooth" title="">Photo Gallery</a>
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
          <div class="header-bottom-right">
            <ul>
              <li>
                <a href="#" class="smooth" title>
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" class="smooth" title>
                  <i class="fa fa-wifi" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" class="smooth" title>
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" class="smooth" title>
                  <i class="fa fa-google-plus" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#" class="smooth" title>
                  <i class="fa fa-podcast" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- //HEADER BOTTOM -->
    </header>
    <!-- //HEADER CONTAINER -->

    <div class="breadcrumbs">
     <div class="container">
       <h1 class="category-name">LIVING ROOM</h1>
       <ul class="breadcrumb">
         <li>
           <a href="#" class="smooth" title="">Home</a>
         </li>
         <li>
           <a href="#" class="smooth" title="">Listing Grid</a>
         </li> 
         <li>
           <a href="#" class="smooth" title="">Living Room</a>
         </li>
       </ul>
     </div>
   </div> 

   <div class="product-list">
     <div class="container">
       <div class="row">
         <aside class="col-lg-3 col-md-3 aside-left">
          <span class="close-aside-left"><i class="fa fa-times" aria-hidden="true"></i></span>
          <div class="aside-filter">
           <h3 class="aside-title">SHOP BY</h3>
           <form class="filter-category">
             <div class="filter-box">
               <h4 class="filter-box-title">CATEGORY</h4>
               <div class="fillter-category">
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked"></span>
                   <p>Hair Accessories</p>
                 </label>
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked"></span>
                   <p>Makeup</p>
                 </label>
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked"></span>
                   <p>Nail Care</p>
                 </label>
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked"></span>
                   <p>Therapeutic Supports</p>
                 </label>
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked"></span>
                   <p>Skin Care</p>
                 </label>

               </div>
             </div>
             <div class="filter-box">
               <h4 class="filter-box-title">price</h4>
               <fieldset class="filter-price">
                 <div class="price-wrap">
                  <div class="price-container clearfix">
                    <div class="price-wrap-1">
                      <label for="one">$</label>
                      <input id="one">
                    </div>
                    <div class="price-wrap-2">
                      <label for="two">$</label>
                      <input id="two">
                    </div>
                    <button type="submit" class="hv-border-inline">SEARCH</button>
                  </div>
                </div>
                <div class="price-field">
                  <input type="range" min="0" max="999" value="0" id="lower">
                  <input type="range" min="0" max="999" value="999" id="upper">
                </div>

              </fieldset>
            </div>
            <div class="filter-box">
             <h4 class="filter-box-title">MANUFACTURER</h4>
             <div class="fillter-category">
               <label class="choose clearfix">
                 <input type="radio" name="">
                 <span class="radio-checked"></span>
                 <p>g plan (4)</p>
               </label>
               <label class="choose clearfix">
                 <input type="radio" name="">
                 <span class="radio-checked"></span>
                 <p>Duresta (2)</p>
               </label>
               <label class="choose clearfix">
                 <input type="radio" name="">
                 <span class="radio-checked"></span>
                 <p>Parker Knoll (10)</p>
               </label>
               <label class="choose clearfix">
                 <input type="radio" name="">
                 <span class="radio-checked"></span>
                 <p>Collins & Hayes (7)</p>
               </label>
               <label class="choose clearfix">
                 <input type="radio" name="">
                 <span class="radio-checked"></span>
                 <p>ercol (0)</p>
               </label>
             </div>
           </div>

           <div class="filter-box">
             <h4 class="filter-box-title">COLOR</h4>
             <div class="fillter-category fillter-color">
               <div class="table">
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked" data-color="red"></span>
                   <p>Red</p>
                 </label>
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked" data-color="blue"></span>
                   <p>blue</p>
                 </label>
               </div>
               <div class="table">
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked" data-color="green"></span>
                   <p>green</p>
                 </label>
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked" data-color="yellow"></span>
                   <p>yellow</p>
                 </label>
               </div>
               <div class="table">
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked" data-color="orange"></span>
                   <p>orange</p>
                 </label>
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked" data-color="pink"></span>
                   <p>pink</p>
                 </label>
               </div>
               <div class="table">
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked" data-color="purple"></span>
                   <p>purple</p>
                 </label>
                 <label class="choose clearfix">
                   <input type="radio" name="">
                   <span class="radio-checked" data-color="grey"></span>
                   <p>grey</p>
                 </label>
               </div>

             </div>
           </div>
         </form>
       </div>

       <div class="aside-best-seller">
         <h3 class="aside-title">BEST SELLER</h3>
         <div class="deals-box product-info clearfix">
          <div class="product-image-right">
            <a href="detail.php" class="hv-radial">
              <img src="image/catalog/demo/products/product32.png" alt="">
            </a>
          </div>
          <div class="box">
            <h5 class="product-name"><a href="detail.php" class="smooth" title="">Aliquam eget leo faucibus</a></h5>
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
            <div class="price">$215.00 <span class="price-old">$315.00</span></div>
          </div>
        </div>
        <div class="deals-box product-info clearfix">
          <div class="product-image-right">
            <a href="detail.php" class="hv-radial">
              <img src="image/catalog/demo/products/product31.png" alt="">
            </a>
          </div>
          <div class="box">
            <h5 class="product-name"><a href="detail.php" class="smooth" title="">Duis vitae moliS lorem</a></h5>
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
            <div class="price">$115.00 <span class="price-old">$142.00</span></div>
          </div>
        </div>
        <div class="deals-box product-info clearfix">
          <div class="product-image-right">
            <a href="detail.php" class="hv-radial">
              <img src="image/catalog/demo/products/product33.png" alt="">
            </a>
          </div>
          <div class="box">
            <h5 class="product-name"><a href="detail.php" class="smooth" title="">Curabitur biben urnaet</a></h5>
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
            <div class="price">$115.00 <span class="price-old">$142.00</span></div>
          </div>
        </div>
      </div>
    </aside>
    <div class="col-lg-9 col-md-9">
     <div class="product-filter-top">
       <div class="row">
         <div class="col-lg-8 col-sm-8 col-xs-12 form-inline">
           <div class="form-group sort-by">
             <label class="control-label">Sort-by</label>
             <select class="form-control">
              <option>Position Asc</option>
              <option>Position Desc</option>
              <option>Name (A - Z)</option>
              <option>Name (Z - A)</option>
              <option>Price (Low > High)</option>
              <option>Price (High > Low)</option>
              <option>Rating (Highest)</option>
              <option>Rating (Lowest)</option>
            </select>
          </div>
          <div class="form-group sort-by">
           <label class="control-label">Show</label>
           <select class="form-control">
             <option>16</option>
             <option>10</option>
             <option>25</option>
           </select>
         </div>
       </div>
       <div class="col-lg-4 col-sm-4 col-xs-12">
         <div class="sidebar-overlay"></div>
         <div class="list-view">
          <button type="button" class="sidebar-toggle-btn"><i class="fa fa-align-left" aria-hidden="true"></i>SIDEBAR</button>
          <button type="button" id="table-view" class="active">
           <i class="fa fa-table" aria-hidden="true"></i>
         </button>
         <button type="button" id="list-view">
           <i class="fa fa-list" aria-hidden="true"></i>
         </button>
       </div>
     </div>
   </div>
 </div>
 <div class="product-list-view">
   <div class="row">

    <div class="product-layout product-layout-table col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12">
      <div class="product-box clearfix">
        <div class="product-image">
          <a href="detail.php" class="c-img link-product">
            <img src="image/catalog/demo/products/product1.jpg" class="img-responsive">
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
          <div class="product-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit 
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

    <div class="product-layout product-layout-table col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12">
      <div class="product-box clearfix">
        <div class="product-image">
          <a href="detail.php" class="c-img link-product">
            <img src="image/catalog/demo/products/product2.jpg" class="img-responsive">
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
          <div class="product-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit 
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

    <div class="product-layout product-layout-table col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12">
      <div class="product-box clearfix">
        <div class="product-image">
          <a href="detail.php" class="c-img link-product">
            <img src="image/catalog/demo/products/product3.jpg" class="img-responsive">
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
          <div class="product-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit 
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

    <div class="product-layout product-layout-table col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12">
      <div class="product-box clearfix">
        <div class="product-image">
          <a href="detail.php" class="c-img link-product">
            <img src="image/catalog/demo/products/product4.jpg" class="img-responsive">
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
          <div class="product-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit 
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

    <div class="product-layout product-layout-table col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12">
      <div class="product-box clearfix">
        <div class="product-image">
          <a href="detail.php" class="c-img link-product">
            <img src="image/catalog/demo/products/product5.jpg" class="img-responsive">
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
          <div class="product-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit 
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

    <div class="product-layout product-layout-table col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12">
      <div class="product-box clearfix">
        <div class="product-image">
          <a href="detail.php" class="c-img link-product">
            <img src="image/catalog/demo/products/product6.jpg" class="img-responsive">
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
          <div class="product-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit 
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

    <div class="product-layout product-layout-table col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12">
      <div class="product-box clearfix">
        <div class="product-image">
          <a href="detail.php" class="c-img link-product">
            <img src="image/catalog/demo/products/product7.jpg" class="img-responsive">
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
          <div class="product-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit 
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

    <div class="product-layout product-layout-table col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12">
      <div class="product-box clearfix">
        <div class="product-image">
          <a href="detail.php" class="c-img link-product">
            <img src="image/catalog/demo/products/product9.jpg" class="img-responsive">
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
          <div class="product-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit 
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

    <div class="product-layout product-layout-table col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12">
      <div class="product-box clearfix">
        <div class="product-image">
          <a href="detail.php" class="c-img link-product">
            <img src="image/catalog/demo/products/product51.png" class="img-responsive">
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
          <div class="product-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit 
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
</div>
<div class="product-filter-top">
 <div class="row">
  <div class="col-lg-6 col-sm-8 col-xs-12 form-inline">
   <div class="form-group sort-by">
    <label class="control-label">Sort assby</label>
     <select class="form-control">
       <option>Position</option>
       <option>Name (A - Z)</option>
       <option>Name (Z - A)</option>
       <option>Price (Low > High)</option>
       <option>Price (High > Low)</option>
       <option>Rating (Highest)</option>
       <option>Rating (Lowest)</option>
     </select>
   </div>
   <div class="form-group sort-by">
     <label class="control-label">Show</label>
     <select class="form-control">
       <option>16</option>
       <option>10</option>
       <option>25</option>
     </select>
   </div>
 </div>
 <div class="col-lg-6 col-sm-4 col-xs-12">
   <ul class="pagination">
     <li class="active">
       <span>1</span>
     </li>
     <li>
       <a href="#" class="smooth" title="">2</a>
     </li>
     <li>
      <a href="#" class="smooth" title="">3</a>
    </li>
    <li>
     <a href="#" class="smooth" title="">>|</a>
   </li>

 </ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- FOOTER -->
<footer class="typefooter-1">
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
                <img src="image/catalog/demo/footer/paymen.png" class="img-responsive">
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
                <img src="image/catalog/demo/footer/down-app.png" class="img-responsive">
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
              SM Furnicom © 2015 Demo Store. All Rights Reserved. Designed by <a href="#" class="smooth" title>MagenTech.Com</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //FOOTER BOTTOM -->
  </div>
</footer>
<!-- //FOOTER -->
<div class="back-to-top">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
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
<!-- Theme files
  ============================================ -->
  <script type="text/javascript" src="js/themejs/application.js"></script>
  <script type="text/javascript" src="js/themejs/homepage.js"></script>
  <script type="text/javascript" src="js/themejs/cd1.js"></script>
  <script type="text/javascript" src="js/themejs/addtocart.js"></script>  
  <script type="text/javascript" src="js/themejs/nouislider.js"></script>
  <script type="text/javascript" src="js/themejs/script.js"></script>
  <!-- <script type="text/javascript" src="js/themejs/script1.js"></script> -->
</body>
</html>