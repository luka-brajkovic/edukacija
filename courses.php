<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$page    = $request->getParam('page');
if($page==0){
    $page =1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Blog Detail Page</title>
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
	<div class="page-section" style="border-bottom:1px solid #f4f4f4;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ul class="cs-breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Academic</a></li>
						<li><a href="#">Departments & Programs</a></li>
						<li>Available Majors</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb End -->   
	<!-- Main Start -->
	<div class="main-section">
	  <div class="page-section">
	    <div class="container">
	      <div class="row">
	        <aside class="page-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="cs-find-search">
                    <h6>Find your course</h6>
                    <span>Ranked as one of the world's most</span>
                    <form>
                        <div class="cs-label-area">
									<input id="course-id" type="radio" name="course" />
									<label for="course-id">Course ID</label>
									<input id="course-name" type="radio" name="course" />
									<label for="course-name">Course Name</label>
								</div>
                        <div class="cs-input-area">
                            <div class="cs-input-holder"><i class="icon-search"></i><input type="text" placeholder="Enter Course name" /></div>
                            <select data-placeholder="Select Category" class="chosen-select" tabindex="5">
                                  <option>Select Category</option>
                                  <option>Select Category</option>
                                  <option>Select Category</option>
                                  <option>Select Category</option>
                              </select>
                        </div>
                        <ul class="cs-suggestions-list">
                            <li><i class="icon-keyboard_arrow_right"></i>Order your prospectus</li>
                            <li><i class="icon-keyboard_arrow_right"></i>A-Z courses</li>
                        </ul>
                        <button><i class="icon-search3"></i></button>
                    </form>
                </div>
                <div class="cs-listing-filters">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h6 class="panel-title">
                            <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             Courses Types
                            </a>
                          </h6>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <div class="cs-select-checklist">
                                <ul class="cs-checkbox-list mCustomScrollbar" data-mcs-theme="dark">
                                   <li>
                                       <div class="checkbox">
                                         <input id="checkbox" type="checkbox" value="Speed">
                                         <label for="checkbox">All Courses</label>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="checkbox">
                                         <input id="checkbox1" type="checkbox" value="bases">
                                         <label for="checkbox1">Skill Bases</label>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="checkbox">
                                         <input id="checkbox2" type="checkbox" value="Speed">
                                         <label for="checkbox2">Open Courses</label>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="checkbox">
                                         <input id="checkbox3" type="checkbox" value="Speed">
                                         <label for="checkbox3">Lectures</label>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="checkbox">
                                         <input id="checkbox4" type="checkbox" value="Speed">
                                         <label for="checkbox4">E-Courses</label>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="checkbox">
                                         <input id="checkbox5" type="checkbox" value="Speed">
                                         <label for="checkbox5">University Course</label>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="checkbox">
                                         <input id="checkbox6" type="checkbox" value="Speed">
                                         <label for="checkbox6">Programs</label>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="checkbox">
                                         <input id="checkbox7" type="checkbox" value="Speed">
                                         <label for="checkbox7">Programs</label>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="checkbox">
                                         <input id="checkbox8" type="checkbox" value="Speed">
                                         <label for="checkbox8">All Courses</label>
                                       </div>
                                   </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h6 class="panel-title">
                            <a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Pricing
                            </a>
                          </h6>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <ul>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox9" type="checkbox" value="Speed">
                                     <label for="checkbox9">All Courses</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox10" type="checkbox" value="bases">
                                     <label for="checkbox10">Free Courses</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox11" type="checkbox" value="Speed">
                                     <label for="checkbox11">Courses under $50</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox12" type="checkbox" value="Speed">
                                     <label for="checkbox12">Courses under $100</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox13" type="checkbox" value="Speed">
                                     <label for="checkbox13">Courses under $150</label>
                                   </div>
                               </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h6 class="panel-title">
                            <a role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Availability
                            </a>
                          </h6>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <ul>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox14" type="checkbox" value="Speed">
                                     <label for="checkbox14">Current</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox15" type="checkbox" value="bases">
                                     <label for="checkbox15">Starting Soon</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox16" type="checkbox" value="Speed">
                                     <label for="checkbox16">Upcoming</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox17" type="checkbox" value="Speed">
                                     <label for="checkbox17">Self-Paced</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox18" type="checkbox" value="Speed">
                                     <label for="checkbox18">Archived</label>
                                   </div>
                               </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfoure">
                          <h6 class="panel-title">
                            <a role="button" data-toggle="collapse" href="#collapsefoure" aria-expanded="false" aria-controls="collapsefoure">
                              Instructional Level
                            </a>
                          </h6>
                        </div>
                        <div id="collapsefoure" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingfoure">
                          <div class="panel-body">
                            <ul>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox19" type="checkbox" value="Speed">
                                     <label for="checkbox19">Introductory</label>
                                     <span class="cs-values"><em></em><em></em><em></em></span>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox20" type="checkbox" value="bases">
                                     <label for="checkbox20">Intermediate</label>
                                     <span class="cs-values"><em></em><em></em></span>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox21" type="checkbox" value="Speed">
                                     <label for="checkbox21">Advanced</label>
                                     <span class="cs-values"><em></em></span>
                                   </div>
                               </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                          <h6 class="panel-title">
                            <a role="button" data-toggle="collapse" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                              Degree level
                            </a>
                          </h6>
                        </div>
                        <div id="collapsefive" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingfive">
                          <div class="panel-body">
                            <ul>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox22" type="checkbox" value="Speed">
                                     <label for="checkbox22">Introductory</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox23" type="checkbox" value="bases">
                                     <label for="checkbox23">Intermediate</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox24" type="checkbox" value="Speed">
                                     <label for="checkbox24">Advanced</label>
                                   </div>
                               </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingsix">
                          <h6 class="panel-title">
                            <a role="button" data-toggle="collapse" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                              Language 
                            </a>
                          </h6>
                        </div>
                        <div id="collapsesix" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingsix">
                          <div class="panel-body">
                            <ul>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox25" type="checkbox" value="Speed">
                                     <label for="checkbox25">Introductory</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox26" type="checkbox" value="bases">
                                     <label for="checkbox26">Intermediate</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox27" type="checkbox" value="Speed">
                                     <label for="checkbox27">Advanced</label>
                                   </div>
                               </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingseven">
                          <h6 class="panel-title">
                            <a role="button" data-toggle="collapse" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                              Duration
                            </a>
                          </h6>
                        </div>
                        <div id="collapseseven" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingseven">
                          <div class="panel-body">
                            <ul>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox28" type="checkbox" value="Speed">
                                     <label for="checkbox28">Introductory</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox29" type="checkbox" value="bases">
                                     <label for="checkbox29">Intermediate</label>
                                   </div>
                               </li>
                               <li>
                                   <div class="checkbox">
                                     <input id="checkbox30" type="checkbox" value="Speed">
                                     <label for="checkbox30">Advanced</label>
                                   </div>
                               </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </aside>
	        <div class="page-content col-lg-9 col-md-9 col-sm-12 col-xs-12">
	          <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	              <div class="cs-sorting-list">
	               	<div class="cs-left-side">
	               	  <div class="cs-select-holder">
	               	    <select class="chosen-select" tabindex="5">
						  <option>Select Topic</option>
						  <option>Select Topic</option>
						  <option>Select Topic</option>
						  <option>Select Topic</option>
						</select>
	               	  </div>
	               	  <ul class="cs-package-list">
	               	  	<li><a href="#">All</a></li>
	               	  	<li><a href="#">Free</a></li>
	               	  	<li><a href="#">Paid</a></li>
	               	  </ul>
	               	  <div class="cs-caption-select">
	               	      <span class="cs-caption">CC</span>
	               	      <input name="name" id="checkboxone" type="checkbox" value="Speed">
						  <label for="checkboxone">Captions</label>
	               	  </div>
	               	</div>
	               	<ul class="cs-list-view">
	               		<li><a href="#"><i class="icon-sweden"></i></a></li>
	               		<li><a href="#"><i class="icon-view_module"></i></a></li>
	               		<li><a href="#"><i class="icon-view_headline"></i></a></li>
	               	</ul>
	              </div>
	            </div>
	            <ul class="cs-courses courses-listing">
                        <?php 
                        $courses = Course::getAllForFront($page);
                        foreach ($courses['data'] as $course)
                        {
                        ?>
                        
                        <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            		<div class="cs-media">
                            <figure><a href="#"><img style="width: 250px;" src="<?php echo Course::getImageUrl($course['image']);?>" alt=""/></a></figure>
            		</div>
            		<div class="cs-text">
						<div class="cs-post-title">
                                                    <h2><a href="<?php echo Course::getCourseUrl().$course['url'];?>"><?php echo $course['title'];?></a></h2>
						</div>
					
						
						<?php echo $course['leed'];?>
            		</div>
	              </li>
                        <?php } ?>
	            </ul>
	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="cs-pagination">
						<ul class="pagination">
                                                    <?php
                                                    $numOfPages =ceil($courses['count']/5);
                                                    $baseUrlCat = WEB_URL . "courses.php?&page=";
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
	<footer id="footer"> 
		<div class="cs-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-text">
                            <div class="widget-section-title"><h6 style="color:#fff !important">Contact us</h6></div>
                            <ul>
                                <li>
                                	<i class="icon-light-bulb "></i>
                                    <p>6330 South 3000 East, Suite 700 Salt Lake City, UT 84121</p>
                                </li>
                                <li>
                                	<i class="icon-phone3"></i>
                                    <p>800 123 456 789</p>
                                </li>
                                <li>
                                	<i class="icon-mail"></i>
                                    <p><a href="mailto:info@canvaslms.com">info@canvaslms.com</a></p>
                                </li>
                                <li>
                                	<i class="icon-pin"></i>
                                    <p>08:00 to 07:40</p>
                                </li>
                            </ul>	
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-categores">
                            <div class="widget-section-title"><h6 style="color:#fff !important">Student & Staff</h6></div>
                            <ul>
                                <li><a href="#">Student portal</a></li>
                                <li><a href="#">Staff portal</a></li>
                                <li><a href="#">Find a member of staff</a></li>
                                <li><a href="#">Greenwich VIP</a></li>
                                <li><a href="#">IT & library services</a></li>
                                <li><a href="#">Greenwich Connect</a></li>
                            </ul>	
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-useful-links">
                            <div class="widget-section-title"><h6 style="color:#fff !important">Useful links</h6></div>
                            <ul>
                                <li><a href="#">Accessibility</a></li>
                                <li><a href="#">Privacy and cookies</a></li>
                                <li><a href="#">Freedom of Information</a></li>
                                <li><a href="#">Legal information</a></li>
                                <li><a href="#">Terms & conditions</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>	
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-news-letter">
                            <div class="widget-section-title"><h6 style="color:#fff !important">NewsLetter</h6></div>
                            <p>Subcribe to out newsletter. We do not spam. We promise</p>
							<div class="cs-form">
                            	<form>
                                	<div class="input-holder">
                                    	<i class="icon-envelope3"></i>
                                    	<input type="email" placeholder="example@email.com">
                                        <label>
                                    		<input type="submit" value="Subscribe" class="cs-bgcolor">
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <div class="container">
        	<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<div class="cs-footer-logo-holder center">
                        <div class="cs-footer-nav">
                            <div class="cs-logo">
                                <div class="cs-media">
                                    <figure>
                                        <a href="index.html"><img src="assets/images/footer-logo.png" alt="" /></a>
                                    </figure>
                                </div>
                            </div> 
                            <div class="footer-nav">
                            	<ul>
                                	<li><a href="#">About</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Press Kit</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="copyright-text">
                            <p>© 2016 SmartStudy :  Best WordPress Theme Ever. All Rights Reserved.<a class="cs-color" href="#"> Chimp Group</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="cs-social-media">
                         	<ul>
                             	<li><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                                <li><a href="#"><i class="icon-youtube3"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
	</footer>
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