<?php
$navActive = "seminar";
$languepath = 3;
require 'library/config.php';
$request = Request::instance();



$page    = $request->getParam('page');
if($page==0){
    $page =1;
}

$bcgrupa = "Seminari";
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Seminari</title>
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
	  <div class="page-section">
	    <div class="container">
	      <div class="row">
	        
	        <div class="page-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
	          <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	              <h2>Seminari</h2><br/> 
	            </div>
	            <ul class="cs-courses courses-listing">
                        <?php 
                        $courses = Seminar::getAllForFront($page);
                        foreach ($courses['data'] as $course)
                        {
                        ?>
                        
                        <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            		<div class="cs-media">
                            <figure><a href="<?php echo Seminar::getSeminarUrl().$course['url'];?>"><img style="width: 250px;" src="<?php echo Seminar::getImageUrl($course['image']);?>" alt=""/></a></figure>
                             <figcaption><p class="pull-left"><i class="icon-uniF103"></i> <?php echo date( 'd.m.Y ', strtotime( $seminar['start_available'] ));?></p> <p class="pull-right"></p></figcaption>
            		</div>
            		<div class="cs-text">
                            <div class="cs-post-title" style="display: block">
                                <h2><a href="<?php echo Seminar::getSeminarUrl().$course['url'];?>"><?php echo $course['title'];?></a></h2>
						</div>
					
						
                            <p><?php echo $course['leed'];?></p>
                            
                                            <div class="pull-left" style="margin-top: 25px">
                                                <?php if (Website::isLoggedUser()){ ?>
                                                <a href="<?php echo Seminar::getSeminarUrl().$course['url'];?>" class="cs-bgcolor cs-buynow add-opacity" style="padding: 5px 9px;color: white"> Više </a>
                                                <?php } ?>
                                            </div>
            		</div>
                        
	              </li>
                        <?php } ?>
	            </ul>
	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="cs-pagination">
						<ul class="pagination">
                                                    <?php
                                                    $numOfPages =ceil($courses['count']/5);
                                                    $baseUrlCat = WEB_URL . "seminars.php?&page=";
                                                    if($page > 1) {
                                                    $prevPage = $page - 1;
                                                    ?>
                                                        <li><a href="<?php echo $baseUrlCat.$prevPage;?>">«</a></li>

                                                    <?php }
                                                     for($i = 1; $i <= $numOfPages; $i++) {
                                                    ?>
                                                    <li class="<?php if($i == $page) echo 'active'; ?>"><a href="<?php echo $baseUrlCat.$i;?>"><?php echo $i;?></a></li>
                                                     <?php }
                                                    if($numOfPages > $page) {
                                                    $nextPage = $page + 1;
                                                    ?>
                                                        <li> <a aria-label="Next" href="<?php echo $baseUrlCat.$nextPage;?>"> <span aria-hidden="true">»</span> </a> </li>
                                                    <?php } ?>    
                                                                                
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

<script src="assets/scripts/responsive.menu.js"></script> 
<script src="assets/scripts/chosen.select.js"></script> 
<script src="assets/scripts/slick.js"></script> 
<script src="assets/scripts/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="assets/scripts/jquery.mobile-menu.min.js"></script>
<!-- Put all Functions in functions.js --> 
<script src="assets/scripts/functions.js"></script>
</body>
</html>