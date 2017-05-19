<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$url    = $request->getParam('url');
$seminr  = Seminar::getSeminarByUrl($url);

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
					<div class="page-content col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="row">
									<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
										<div class="cs-section-title" style="margin-bottom:45px;">
                                                                                    <h2><?php echo $seminr['title'];?></h2>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<div class="cs-event-share">
										<a href="#" class="cs-share-btn"><i class="icon-share3"></i>Share</a>
										<ul class="cs-nav">
											<li><a href="#" data-toggle="tooltip" data-placement="top" title="Previous"><i class="icon-long-arrow-left"></i></a></li>
											<li><a href="#" data-toggle="tooltip" data-placement="top" title="Next"><i class="icon-long-arrow-right"></i></a></li>
										</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="image-frame"><img src="assets/extra-images/event-detail-img.jpg" alt="" /></div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cs-event-detail-holder">
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<div class="cs-event-detail-heading">
												<h6 class="cs-color"><i class="icon-uniF119"></i>Description</h6>
											</div>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-event-detail-description">
												<?php echo $seminr['text'];?>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cs-event-detail-holder">
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<div class="cs-event-detail-heading">
												<h6 class="cs-color"><i class="icon-uniF103"></i>Date & Time</h6>
											</div>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="cs-event-detail-date-time">
												<div class="cs-post-title">
													<h3><?php echo date( 'D-F-d H:i', strtotime( $seminr['date'] ));?></h3>
												</div>
												<a href="#" class="cs-add-date">Add to Calendar</a> </div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<aside class="page-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
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
						<div class="widget widget-event-links">
                            <div class="widget-title">
                                <h6>Contact Information</h6>
                            </div>
                            <ul>
                                <li><a href="#">College of the Arts</a><span>(10)</span></li>
                                <li><a href="#">Art History</a><span>(10)</span></li>
                                <li><a href="#">School of Music</a><span>(10)</span></li>
                                <li><a href="#">School of Theatre</a><span>(10)</span></li>
                                <li><a href="#">Current Season</a><span>(10)</span></li>
                                <li><a href="#">UF Symphony Orchestra</a><span>(10)</span></li>
                                <li><a href="#">University Galleries</a><span>(10)</span></li>
                                <li><a href="#">Carillon Concert Series</a><span>(10)</span></li>
                            </ul>
                        </div>
<div class="widget widget-event-contact-info">
                            <div class="widget-title">
                                <h6>Event Types</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="cs-media"><i class="icon-uniF115"></i></div>
                                    <div class="cs-text">Smart Study Edelstein House Gambier, Ohio 43022</div>
                                </li>
                                <li>
                                    <div class="cs-media"><i class="icon-uniF122"></i></div>
                                    <div class="cs-text">(740) 427-5430 Fax - 740-427-5240 <a href="#">best@website.com</a></div>
                                </li>
                                <li>
                                    <div class="cs-media"><i class="icon-uniF107"></i></div>
                                    <div class="cs-text">Hours of Operation: 8:30 a.m and 1:00-4:30 p.m. Monday - Friday</div>
                                </li>
                            </ul>
                        </div>

					</aside>
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