<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$page    = $request->getParam('page');
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
						<div class="cs-event-filters">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h6 class="panel-title"><a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false">Event type </a></h6>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in fade" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body">
											<ul>
												<li>
													<div class="checkbox">
														<input id="checkbox1" type="checkbox" value="Speed">
														<label for="checkbox1">Convocation</label>
													</div>
												</li>
												<li>
													<div class="checkbox">
														<input id="checkbox2" type="checkbox" value="bases">
														<label for="checkbox2">Exhibition</label>
													</div>
												</li>
												<li>
													<div class="checkbox">
														<input id="checkbox3" type="checkbox" value="Speed">
														<label for="checkbox3">Faculty Recital</label>
													</div>
												</li>
												<li>
													<div class="checkbox">
														<input id="checkbox4" type="checkbox" value="Speed">
														<label for="checkbox4">Gallery Talk</label>
													</div>
												</li>
												<li>
													<div class="checkbox">
														<input id="checkbox5" type="checkbox" value="Speed">
														<label for="checkbox5">Guest Recital</label>
													</div>
												</li>
												<li>
													<div class="checkbox">
														<input id="checkbox6" type="checkbox" value="Speed">
														<label for="checkbox6">Lecture</label>
													</div>
												</li>
												<li>
													<div class="checkbox">
														<input id="checkbox7" type="checkbox" value="Speed">
														<label for="checkbox7">Reception</label>
													</div>
												</li>
												<li>
													<div class="checkbox">
														<input id="checkbox8" type="checkbox" value="Speed">
														<label for="checkbox8">Student Recital</label>
													</div>
												</li>
												<li>
													<div class="checkbox">
														<input id="checkbox9" type="checkbox" value="Speed">
														<label for="checkbox9">Benefit</label>
													</div>
												</li>
												<li>
													<div class="checkbox">
														<input id="checkbox10" type="checkbox" value="Speed">
														<label for="checkbox10">Recital</label>
													</div>
												</li>
												<li>
													<div class="checkbox">
														<input id="checkbox11" type="checkbox" value="Speed">
														<label for="checkbox11">Guest Artist</label>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="widget cs-recent-event-widget">
							<div class="widget-title">
								<h5>Recent Event</h5>
							</div>
							<ul>
								<li>
									<div class="cs-recrnt-post">
										<div class="cs-media">
											<figure><a href="#"><img src="assets/extra-images/recent-event-img-1.jpg" alt="" /></a></figure>
										</div>
										<div class="cs-text"> <span class="cs-location"><i class="cs-color icon-location-pin"></i>Manchester Academy</span>
											<h6><a href="#">Limited edition laptop in a stand </a></h6>
											<span>17 Dec 2015 @ 14:00pm</span> </div>
									</div>
								</li>
								<li>
									<div class="cs-recrnt-post">
										<div class="cs-media">
											<figure><a href="#"><img src="assets/extra-images/recent-event-img-2.jpg" alt="" /></a></figure>
										</div>
										<div class="cs-text"> <span class="cs-location"><i class="cs-color icon-location-pin"></i>Manchester Academy</span>
											<h6><a href="#">Our Video Training for Microsoft</a></h6>
											<span>17 Dec 2015 @ 14:00pm</span> </div>
									</div>
								</li>
								<li>
									<div class="cs-recrnt-post">
										<div class="cs-media">
											<figure><a href="#"><img src="assets/extra-images/recent-event-img-3.jpg" alt="" /></a></figure>
										</div>
										<div class="cs-text"> <span class="cs-location"><i class="cs-color icon-location-pin"></i>Manchester Academy</span>
											<h6><a href="#">Web Science: How The Web Is Changing</a></h6>
											<span>17 Dec 2015 @ 14:00pm</span> </div>
									</div>
								</li>
							</ul>
						</div>
						<div class="cs-event-calendar">
							<div class="responsive-calendar">
								<div class="controls"> <a class="pull-left" data-go="prev">
									<div class="btn btn-primary"><i class="icon-caret-left"></i></div>
									</a>
									<h4> <span data-head-month></span> &nbsp; <span data-head-year></span></h4>
									<a class="pull-right" data-go="next">
									<div class="btn btn-primary"><i class="icon-caret-right"></i></div>
									</a> </div>
								<hr/>
								<div class="day-headers">
									<div class="day header">M</div>
									<div class="day header">T</div>
									<div class="day header">W</div>
									<div class="day header">T</div>
									<div class="day header">F</div>
									<div class="day header">S</div>
									<div class="day header">S</div>
								</div>
								<div class="days" data-group="days"> </div>
							</div>
						</div>
					</aside>
					<div class="page-content col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="row">
                                                       
                                                    
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="row">
									<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
										<div class="cs-section-title" style="margin-bottom:45px;">
											<h2>Seminari</h2>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<div class="widget cs-event-search-widget">
											<div class="spacer" style="height:40px;"></div>
											<div class="cs-field">
												<input name="name" type="text" placeholder="SEARCH EVENT" />
												<label>
													<input name="name" type="submit" value="" />
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
                                                    
                                                         <?php
                                                        $seminrs = Seminar::getAllForFront($page);
                                                        foreach ($seminrs['data'] as $seminr)
                                                        {
                                                        ?>
                                                    
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cs-event list">
									<div class="cs-media">
                                                                            <figure><a href="#"><img src="<?php echo Seminar::getImageUrl($seminr['image']);?>" alt="" /></a><figcaption><?php echo date( 'Y-m-d H:i', strtotime( $seminr['date'] ));?></figcaption></figure>
									</div>
									<div class="cs-text">
										<div class="cs-post-title">
											
                                                                                    <h3><a href="#"><?php echo $seminr['title'];?></a></h3>
										</div>
										<?php echo $seminr['leed'];?>
										<div class="cs-event-price">
											
                                                                                    <a href="<?php echo Seminar::getSeminarUrl().$seminr['url'];?>">Detaljnije</a>
										</div>
									</div>
								</div>
							</div>
                                                    
                                                        <?php } ?>
							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cs-pagination">
									<ul class="pagination">
                                                                            <?php
                                                                            $numOfPages =ceil($seminrs['count']/5);
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
<script src="assets/scripts/responsive-calendar.min.js"></script> <!-- Calendar --> 
<!-- Put all Functions in functions.js --> 
<script src="assets/scripts/functions.js"></script>
</body>
</html>

