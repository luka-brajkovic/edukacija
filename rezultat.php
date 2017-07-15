<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
if (!Website::isLoggedUser()){
     $request->redirect(WEB_URL."strana.php?url=morate-biti-ulogovani");
}
$user = Website::getLoggedUserInfo();
$attending_id   = $request->getParam('attending_id');
$attending = Course::getAttendingInfo($attending_id);


if($user['id']!=$attending['user_id']){
        $request->redirect(WEB_URL."courses.php");
}
$course = Course::getInfo( $attending['course_id']);

$bcgrupa = "Rezultat";
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Rezultat</title>
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
	<?php include 'web-includes/breadcrumb.php';?>
	<!-- Breadcrumb End -->   
	<!-- Main Start -->
	<div class="main-section">
		
        <div class="page-section" style="margin-bottom:85px;">
        	<div class="container">
            	<div class="row">
                    <div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                           
                            <div class="">
                                <div class="cs-column-text center">
                                    <h2>Vaš test je gotov </h2>
                               
                                   
                                    <h3>TEST - <?php echo $course['title'];?></h3>
                                   
                               
                                    <br/>
                                    <?php echo $attending['is_pass'] ? "<h3 style = 'color: greenyellow !important'> POLOŽILI STE TEST </h3>": " <h3 style = 'color: red !important'> NISTE POLIŽILI TEST </h3>";?>
                                
                                    <br/>
                                    
                                    <div class="" style="margin: 0px auto;padding-left: 60px;width: 300px ;">
	            	<ul class="left">
	            	
	            	
	            	    <li ><span>Broj Pitanja : <?php echo $attending['number_of_questions'];?></span></li>
	            	    <li ><span>Tacnih Odgovora : <?php echo $attending['number_of_correct_anwers'];?></span></li>
	            	    <li ><span>Potrebno : <?php echo $course['success_percentage']." %";?></span></li>
	            	    <li ><span>Odrađeno : <?php echo round(($attending['number_of_correct_anwers']*100)/$attending['number_of_questions'])." %";?></span></li>
	            	    <li ><span>Polozeno : <?php echo $attending['is_pass'] ? "Da": "Ne";?></span></li>
	            	    
	      
	            	 
                          
                          

                        </ul>
      
	            </div>
                                    
                               
                                    
                                   
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>   
        

        
                   
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