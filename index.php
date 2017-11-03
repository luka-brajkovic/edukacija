<?php
$navActive = "index";
$languepath = 3;
require 'library/config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Naslovna</title>
    <?php include 'web-includes/head.php'; ?>
</head>
<body class="wp-smartstudy">
<div class="wrapper"> 
	<!-- Side Menu Start -->
	<div id="overlay"></div>
    
    <?php include 'web-includes/mobile-nav.php'; ?>
	<!-- Side Menu End -->
	<!-- Header Start -->
	<?php include 'web-includes/header.php'; ?>
	<!-- Header End --> 
	<!-- Banner Start --> 
	<?php include 'web-includes/slider.php'; ?>
	<!-- Banner End --> 
	<!-- Main Start -->
	<div class="main-section">
		
       
            
            
        <?php include 'web-includes/novosti-naslovna.php'; ?>
            
         
            
	<!-- Main End --> 
	
        <!-- Footer Start -->
	<?php include 'web-includes/footer.php';?>
	<!-- Footer End --> 
</div>
</div>
<script src="assets/scripts/responsive.menu.js"></script> <!-- Slick Nav js --> 
<script src="assets/scripts/chosen.select.js"></script> <!-- Chosen js --> 
<script src="assets/scripts/slick.js"></script> <!-- Slick Slider js --> 
<script src="assets/scripts/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="assets/scripts/jquery.mobile-menu.min.js"></script><!-- Side Menu js --> 
<script src="assets/scripts/counter.js"></script><!-- Counter js --> 
<script src="assets/scripts/custom.js"></script><!-- Counter js --> 

<!-- Put all Functions in functions.js --> 
<script src="assets/scripts/functions.js"></script>
</body>
</html>
