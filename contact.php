<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();

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
  <!-- Main Start -->
  <div class="main-section"> 
    <!--Section BOX WithOut SideBar-->
    <div class="page-section" style="padding-top:10px; padding-bottom:10px;">
      <div class="container">
        <div class="row">
          <div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row"> 
              <!--Element Section Start-->
             
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				 <div class="cs-services top-left">	
					  <div class="cs-media">
						<figure><a href=""><img src="assets/extra-images/services-01.jpg" alt=""/></a></figure>
					  </div>
					  <div class="cs-text">
						  <h5><a href="">Prospective Students</a></h5>
						  <p>Diam interdum nec vel pellentesque curae iaculis mi quisque, eu.</p>
						</div>
				 </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="cs-services top-left">	
					  <div class="cs-media">
						<figure><a href=""><img src="assets/extra-images/services-02.jpg" alt=""/></a></figure>
					  </div>
					  <div class="cs-text">
						  <h5><a href="">Current Students</a></h5>
						  <p>Porttitor fusce ullamcorper blandit quisque fames eros lorem.</p>
						</div>
					</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="cs-services top-left">	
					  <div class="cs-media">
						<figure><a href=""><img src="assets/extra-images/services-03.jpg" alt=""/></a></figure>
					  </div>
					  <div class="cs-text">
						  <h5><a href="">International Students</a></h5>
						  <p>Aptent tortor nec ut iaculis taciti vestibulum vivamus dictumst, rhoncus </p>
						</div>
					</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="cs-services top-left">	
					  <div class="cs-media">
						<figure><a href=""><img src="assets/extra-images/services-04.jpg" alt=""/></a></figure>
					  </div>
					  <div class="cs-text">
						  <h5><a href="">Administration</a></h5>
						  <p>Platea maecenas vitae erat augue pretium ut donec vitae consectetur </p>
						</div>
					</div>	
                </div>
              <!--Element Section End--> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Page Section Wide With Right SideBar-->
    <div class="page-section" style=" padding-top:10px; padding-bottom:80px;">
      <div class="container">
        <div class="row">
          <div class="section-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="row"> 
              <!--Element Section Start-->
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                <!--Contact Form Element Start-->
                <div class="cs-contact-form view-two">
                  <div class="cs-section-title">
                    <h2>Contact Form</h2>
                    <p>Your email address will not be published. Required fields are marked.</p>
                  </div>
                  <div class="form-holder">
                    <div class="row">
                      <form method="POST" id="contact-forma" action="<?php echo WEB_URL ?>work.php">
                      <input type="hidden" name="action" value="submit-contact-form" />
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="row">
                            <div class="cs-form-holder">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="input-holder">
                                  <input type="text" id="name" name="name" placeholder="Vaše ime..."/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="row">
                            <div class="cs-form-holder">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="input-holder">
                                   <input type="text" id="contact_phone" name="contact_phone" placeholder="Vaš telefon..."/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="row">
                            <div class="cs-form-holder">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="input-holder">
                                  <input type="email" id="email" name="email" placeholder="Vaš email"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="cs-form-holder">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="input-holder">
                              <textarea id="message" name="message" placeholder="Komentar..."></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-md-12">
                          <div class="cs-field">
                            <div class="cs-btn-submit">
                              <input class="cs-bgcolor" type="submit" value="Posalji" >
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!--Contact Form Element End--> 
              </div>
              <!--Element Section End--> 
            </div>
          </div>
          <aside class="section-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="cs-contact-info view-two">
              <div class="cs-section-title">
                <h2>Contact Info</h2>
                <p>Welcome to our Website. We are glad to have you</p>
              </div>
              <ul>
                <li>
                  <div class="cs-media"> <i class="icon-home cs-color"></i> </div>
                  <div class="cs-text"> <span>Address:</span>
                    <p>14 Cowden Way Comrie Crieff Perth Kinr</p>
                  </div>
                </li>
                <li>
                  <div class="cs-media"> <i class="icon-phone cs-color"></i> </div>
                  <div class="cs-text"> <span>Phone No.</span>
                    <p>020 7946 0338</p>
                  </div>
                </li>
                <li>
                  <div class="cs-media"> <i class="icon-fax cs-color"></i> </div>
                  <div class="cs-text"> <span>Fax No.</span>
                    <p>44 20 7946 0827</p>
                  </div>
                </li>
                <li>
                  <div class="cs-media"> <i class="icon-envelope cs-color"></i> </div>
                  <div class="cs-text"> <span>Email Address</span>
                    <p><a href="mailto:hostmaster@centralnic.net">hostmaster@centralnic.nets</a></p>
                  </div>
                </li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
    <div class="page-section" style="height:392px;">
      <div class="cs-maps loader">
        <iframe height="392" frameborder="0" allowfullscreen="" style="border: 0px none; width: 100%; pointer-events: none;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85325.03550975422!2d-1.957436106486313!3d53.45954307751346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited+Kingdom!5e0!3m2!1sen!2s!4v1455785475576"></iframe>
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
<script src="assets/scripts/jquery.mobile-menu.min.js"></script> 

<!-- Put all Functions in functions.js --> 
<script src="assets/scripts/functions.js"></script>
</body>
</html>