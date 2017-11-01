<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$url    = $request->getParam('url');
$page = Page::getPageByUrl($url);
$bcclan = $page['title'];
$navActive = $page['title'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php echo "strana - ".$page['title'];?></title>
<?php include 'web-includes/head.php'; ?>
</head>
<body class="wp-smartstudy cs-blog-detail">
<div class="wrapper"> 
	<!-- Side Menu Start -->
	<div id="overlay"></div>
    <?php include 'web-includes/mobile-nav.php'; ?>
	<!-- Side Menu End -->
	<!-- Header Start -->
	<?php include 'web-includes/header.php'; ?>
	<!-- Header End --> 
	<!-- Banner Start --> 
	<!-- Sub Header End -->
	<!-- Breadcrumb Start -->
	<?php include 'web-includes/breadcrumb.php'; ?>
	<!-- Breadcrumb End -->   
	<!-- Main Start -->
	<div class="main-section">
		
        <div class="page-section" style="margin-bottom:85px;">
        	<div class="container">
            	<div class="row">
                    <div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                           
                            <div class="">
                                <div class="cs-column-text" style="min-height: 600px">
                                    <h2><?php echo $page['title'];?></h2>
                                    <?php echo $page['text'];?>
                                   
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>   
        
        <?php // include 'web-includes/fun-fact.php';?>
        
                   
	</div>
	<!-- Main End --> 
	 <!-- Footer Start -->
	<?php include 'web-includes/footer.php'; ?>
	<!-- Footer End --> 
</div>

<script src="assets/scripts/responsive.menu.js"></script> <!-- Slick Nav js --> 
<script src="assets/scripts/chosen.select.js"></script> <!-- Chosen js --> 
<script src="assets/scripts/slick.js"></script> <!-- Slick Slider js --> 
<script src="assets/scripts/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="assets/scripts/jquery.mobile-menu.min.js"></script><!-- Side Menu js --> 
<script src="assets/scripts/counter.js"></script><!-- Counter js --> 
<!-- Put all Functions in functions.js --> 
<script src="assets/scripts/functions.js"></script>
</body>
</html>