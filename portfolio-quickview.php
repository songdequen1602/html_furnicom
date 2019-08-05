
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
  <link href="js/lightslider/lightslider.css" rel="stylesheet">
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

    <div class="portfolio-detail portfolio-2-column portfolio-quickview">

      <div class="row">
        <div class="col-lg-6 col-md-8 portfolio-detail-top">
          <h1 class="portfolio-detail-title">Excepteur sint occaecat cupidatat non proident</h1>
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
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 portfolio-detal-image">
          <img src="image/catalog/demo/portfolio/portfolio17.png" class="img-responsive">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="project-desc">
            <h3 class="project-title">Project Description</h3>
            <div class="desc">
              <p>Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p> 
              <p>Pellentesque fringilla diam faucibus tortor bibendum vulputate. Etiam turpis urna, rhoncus et mattis ut, dapibus eu nunc.</p> 
            </div>
            <h3 class="project-title">Project Details</h3>
            <div class="project-detail">
              <div class="item clearfix">
               <h4 class="left-item">Skills Needs</h4>
               <div class="right-item">Photography</div>
             </div> 
             <div class="item clearfix">
               <h4 class="left-item">Categories:</h4>
               <div class="right-item">Logo, Video</div>
             </div>
             <div class="item clearfix">
               <h4 class="left-item">URL:</h4>
               <div class="right-item"><a href="#" class="smooth" title="">http://www.domain.com</a></div>
             </div>
             <div class="item clearfix">
               <h4 class="left-item">Copyright:</h4>
               <div class="right-item">Join Smith</div>
             </div>
           </div>

         </div>
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
  <script type="text/javascript" src="js/lightslider/lightslider.js"></script>
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