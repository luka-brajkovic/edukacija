<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$course_id    = $request->getParam('course_id');

if(!Website::isLoggedUser())
    $request->redirect(WEB_URL."strana.php?url=morate-biti-ulogovani");


$user = Website::getLoggedUserInfo();
$is_pass =  Course::DidUserpassTest($user['id'], $course_id);

$course = Course::getInfo($course_id);


$trays =  Course::LeftTrys($user['id'],$course['id']);

if(count($trays) >= Course::NumberTrysCourseUser($user['id'], $course['id']) ){
    $request->redirect(WEB_URL."strana.php?url=potroseni-svi-pokusaji");
}

if($course['type']=="course"){

    if(!Course::CanUserBeOnCourse($user['id'], $course['id'],$course['display_order']))
        $request->redirect(WEB_URL."strana.php?url=ne-mozete-polagati-ovaj-kurs");

    if($course['start_available'] > date("Y-m-d")){
        $request->redirect(WEB_URL."strana.php?url=kurs-jos-uvek-nije-otvoren");
    }

    if($course['end_available'] < date("Y-m-d")){
        $request->redirect(WEB_URL."strana.php?url=kurs-je-zatvoren");
    $bcgrupa = "kursevi";
    }

}else{

  
    $bcgrupa = "seminari";
}


$testData = Course::getAllDataForTest($course_id);



$bcclan = $course['title']." - test";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php echo "test - ".$course['title'];?></title>
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
					<div id="cs-about" class="cs-about-courses">
						<div class="row">
						      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                          <div class="cs-section-title"><h3><?php echo $course['title'];?></h3></div>
							<?php echo $course['test_instruction'];?>
							</div>
						   
                                                   
                                                    
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 30px;">
                                                        <form action="work.php?action=save-answers" method="POST" id="test" id="test">
                                                            <input type="hidden" value="<?php echo $course_id;?>" name="course_id">
                                                            <input type="hidden" value="<?php echo $course['url'];?>" name="course_url">
                                                     <?php
                                                        $i=0;
                                                        foreach ($testData['questions'] as $question){
                                                        if($question['a_num']){    
                                                        ?>
                                                        <h5><?php echo ($i+1)." ) ".$question['title'];?></h5>
						    	<P><?php echo $question['text'];?></P>
                                                        
                                                        
                                                        <ul class="cs-list-style group<?php echo $i;?>">
                                                        <?php foreach ($testData['answers'] as $answer ) {
                                                        if ($question['id'] == $answer['course_question_id']){    
                                                        ?>
                                                            
						    		
                                                        <li style="list-style-type: lower-alpha"> <input class="testr<?php echo $i;?>" type="radio" name="answer[<?php echo $i;?>]" value="<?php echo $answer['answer_id'];?>"> <?php echo $answer['answer_text'];?></li>
								
                                                        <?php }} ?>
                                                        <li style="list-style-type: lower-alpha"> <input class="testr<?php echo $i;?> ne-znam<?php echo $i;?>" type="radio" name="answer[<?php echo $i;?>]" value="0">ne znam</li>
                                                        <?php
                                                        $i++;
                                                        ?>
                                                            
						    	</ul>
                                                        <?php }} ?>
                                                        <input class="cs-bgcolor" type="submit" value="ZAVRSI" style="border: 0 none;color: #fff !important;width: 168px;height: 45px;font-size: 12px; font-weight: 600;"/>
                                                        <a href="<?php echo Course::getCourseUrl().$course['url']?>"  style="padding: 8px 37px;color: white;   display: inline-block;" class="cs-bgcolor cs-buynow add-opacity pull-right"  >OTKAŽI</a>
                                                        </form>
						    </div>
                                                    
                                                    <input type="hidden" id="noq" value="<?php echo $i;?>">
						</div>
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

<script>
setInterval(submit_me, 1800000); // (1000 * 60 * 10 = 600000)
function submit_me() {

    
    
    var i = $("#noq").val();
    
    
        for (var j = 0 ; j < i; j++) {
            
            if($(".testr"+j).is(":checked")){
            
            }
            else{
               
                $('.ne-znam'+j).attr('checked', 'checked');
            }
            
            
        }
    
    $('#test').submit();

}
</script>
<script src="assets/scripts/responsive.menu.js"></script> 
<script src="assets/scripts/custom.js"></script> 
<script src="assets/scripts/chosen.select.js"></script> 
<script src="assets/scripts/slick.js"></script> 
<script src="assets/scripts/jquery.mobile-menu.min.js"></script>
<!-- Put all Functions in functions.js --> 
<script src="assets/scripts/functions.js"></script>
</body>
</html>