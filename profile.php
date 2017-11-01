<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$user = Website::getLoggedUserInfo();
$bcgrupa = "Profil";
$bcclan = $user['first_name']." ".$user['last_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Profil</title>
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
                                <div class="cs-column-text">
                                    <h2><?php echo $user['first_name']." ".$user['last_name'];?></h2>
                                   <br/>
                                   <h4>Dostupni kursevi</h4>
                                   
                                    
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	            	<ul class="cs-courses courses-simple">
	            	  <li class="cs-header">
	            	    <div class="cs-courses-name"><span>Naziv Kursa</span></div>
	            	    <div class="cs-courses-date"><span>Položen</span></div>
	            	    <div class="cs-courses-level"><span>Broj Pokušaja</span></div>
	            	    <div class="cs-price"><span>Preostalo pokušaja</span></div>
	            	  </li>
                           <?php
                                    $userCourses = Course::GetUsersCourses($user['id']);
                                    foreach ($userCourses as $userCourse){
                                        
                                    $attendings = Course::getUserCourseAttendings($user['id'], $userCourse['id']);  
                                    
                                    $sucess = 0;
                                    $pass = 0;
                                    $numberoftries = 0;
                                    foreach ($attendings as $attending){
                                        if($attending['is_pass']){ 
                                           $pass  = 1;
                                           $sucess = (($attending['number_of_correct_anwers']*100)/$attending['number_of_questions']);
                                        }
                                        $numberoftries++;
                                        
                                    }
                                    ?>
                                    
                          
                          

                                    <li>
                                        <div class="cs-courses-name"><h6><a href="<?php echo Course::getCourseUrl().$userCourse['url'];?>"><?php echo $userCourse['title'];?></a></h6></div>
                                        
                                        
                                      <div class="cs-courses-date"><span class="post-date"><?php echo $pass ? "Da": "Ne";?></span></div>
                                      <div class="cs-courses-level"><?php echo $numberoftries;?></div>
                                      <div class="cs-price"><span><?php echo $pass ? "0": ($userCourse['number_of_tries_per_user']-$numberoftries );?></span></div>
                                    </li>



                          
	            	  <?php }?>
	            </div>
                                    
                                    
                                   
                                    <h3>Moja Polaganja</h3>
                                    <table>
                                        <tr>
                                            
                                            <th>Kurs - test</th>
                                            <th>Položeno</th>
                                            <th>Broj Pitanja</th>
                                            <th>Tačni odgovori</th>
                                            <th>U procentima</th>
                                            <th>Potrebno za prolaz </th>
                                            
                                        </tr>
                                        
                                        <?php 
                                        $attendings = Course::getUsersAttendings($user['id']);
                                        foreach ($attendings as $attending){
                                        ?>
                                        
                                        
                                        <tr>
                                            <td><?php echo $attending['title'];?></td>
                                            <td><?php echo $attending['is_pass']? "Da": "Ne";?></td>
                                            <td><?php echo $attending['number_of_questions'];?></td>
                                            <td><?php echo $attending['number_of_correct_anwers'];?></td>
                                            <td><?php echo round(($attending['number_of_correct_anwers']*100)/$attending['number_of_questions'])."%";?></td>
                                            <td><?php echo $attending['success_percentage']."%";?></td>      
                                        </tr>
                                        
                                        <?php } ?>
                                        
                                    </table>
                                    
                                   
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