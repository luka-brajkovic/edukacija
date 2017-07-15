<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$url    = $request->getParam('url');
if(!Website::isLoggedUser()){
    $request->redirect(WEB_URL."strana.php?url=morate-biti-ulogovani");
}
$user_id  = Website::getLoggedUserInfo()['id'];

$course = Course::getCourseByUrl($url);

if(!Course::IsUserOnCourse($user_id, $course['id']))
    $request->redirect(WEB_URL."strana.php?url=nemate-pristup-ovom-kursu");



if(!Course::CanUserBeOnCourse($user_id, $course['id'],$course['display_order']))
    $request->redirect(WEB_URL."strana.php?url=ne-mozete-polagati-ovaj-kurs");

$bcgrupa = "kursevi";
$bcclan = "kurs - ".$course['title'];

if($course['start_available'] > date("Y-m-d")){
    $request->redirect(WEB_URL."strana.php?url=kurs-jos-uvek-nije-otvoren");
}
if($course['end_available'] < date("Y-m-d")){
    $request->redirect(WEB_URL."strana.php?url=kurs-je-zatvoren");
}
$is_fancy  = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php echo "kurs - ".$course['title'];?></title>
<?php include 'web-includes/head.php'; ?>

     <link href="http://vjs.zencdn.net/6.2.0/video-js.css" rel="stylesheet">
     <script type="text/javascript" src="assets/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
     <script type="text/javascript" src="assets/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
     <link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox.css" media="screen" />
     <link rel="stylesheet" type="text/css" href="assets/fancybox/helpers/jquery.fancybox-thumbs.css" media="screen" />
     
     <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox({
                            padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,
                                width  : 960,
				closeEffect : 'elastic',
				closeSpeed  : 150,
                            
                        });

			/*
			 *  Different effects
			 */

			
			

			


		});
</script>
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
	  <div class="page-section">
	    <div class="container">
	      <div class="row">
	        <aside class="page-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
                 <div class="">
                     <?php 
                     $trays =  Course::LeftTrys($user_id,$course['id']);
                     $trialsleft = Course::NumberTrysCourseUser($user_id, $course['id']) - (int)count($trays); 
                     ?>
                    <div class="cs-courses-overview">
                             <h4>Fajlovi Kursa</h4>
                              <?php
                                 if (!empty($course['files'])){
                                 $files = explode(',', $course['files']);?>
                                 <ul>
                                 <?php
                                 foreach ($files as $file){
                                 ?>
                                    <li>
                                        <a class="collapsed" href="<?php echo Settings::getUploadsUrl($file)?>">
                                           <i class="icon-uniF110 cs-color"></i><?php echo $file;?>
                                       </a>
                                    </li>

                                 <?php
                                 }
                                 ?>
                                 </ul>
                                 <?php
                                 }
                                 else{
                                   echo '<p>Trenuto nema Fajlova za ovaj kurs</p>';
                                 }
                                 ?>
                        
                        
                        <h4>Test</h4>
                            <a href="<?php echo WEB_URL."test.php?course_id=".$course['id']?>"  style="padding: 5px 9px;color: white;<?php if(!$trialsleft) echo 'pointer-events: none;cursor: default;';?>" class="cs-bgcolor cs-buynow add-opacity" ><i class="icon-plus3"></i>Take Test | Number of trials left ( <?php echo $trialsleft;?> )</a>
                    </div>
                </div>
                
            </aside>
	        <div class="page-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
	          <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 35px; ">
					<div id="cs-about" class="cs-about-courses">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="cs-section-title"><h3><?php echo $course['title'];?></h3></div>
                                                            <div class="image-frame"><img src="<?php echo Course::getImageUrl($course['image']);?>" alt="" /></div>
                                                            
                                                            <?php echo $course['text'];?>
							</div>
						   
						   
						</div>
					</div>
                                        <?php if(!empty($course['video_url'])){?>
                                        
                          <video id="my-video" class="video-js" style="margin-bottom: 15px" controls preload="auto" width="800px" height=""
                                            poster="<?php echo Course::getImageUrl($course['image']);?>" data-setup="{}">
                                              <source src="<?php echo $course['video_url'];?>" type='video/mp4'>
                                              <source src="<?php echo $course['video_url'];?>" type='video/webm'>
                                              <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider upgrading to a web browser that
                                                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                              </p>
                                         </video>
                                        <?php } ?>
                        
                                         <?php if(!empty($course['html_url'])){?>
                          <a style="margin-top: 15px"  class="fancybox fancybox.iframe" href="<?php echo $course['html_url'];?>">Vebinar :<?php echo $course['html_url'];?></a>
                                         <?php } ?>
					
               
              
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
  <script src="http://vjs.zencdn.net/6.2.0/video.js"></script>
<script src="assets/scripts/responsive.menu.js"></script> 
<script src="assets/scripts/chosen.select.js"></script> 
<script src="assets/scripts/slick.js"></script> 
<script src="assets/scripts/jquery.mobile-menu.min.js"></script>
<!-- Put all Functions in functions.js --> 
<script src="assets/scripts/functions.js"></script>

</body>
</html>