<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$siteKey = '6LcU0iMUAAAAADIBkWBQUU0Kfdn-3q5rDrENKZyG';
$secret = '6LcU0iMUAAAAAPnTHXh1EgkN6oFAIqHl-zFWyARa';

$bcgrupa = "Kontakt";


?>
<!DOCTYPE html>
<html lang="en">
<head>

    
  
<title>Kontakt</title>
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
        <?php include 'web-includes/breadcrumb.php'; ?>
	<!-- Sub Header End -->
  <!-- Main Start -->
  <div class="main-section" style="margin: 0px;"> 
    <!--Section BOX WithOut SideBar-->
    
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
                    <h2>Kontakt Forma</h2>
                    <p>Ukoliko želite da nam postavite pitanje ili ostavite poruku možete to učiniti putem forme ispod. </p>
                    <?php
                    $is_robot   = $request->getParam('robot');
                    if (!empty($is_robot)):?>
                    <p style="color: red !important">Morate potvrditi da niste robot</p>
                    <?php endif; ?>
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
                                  <input type="email" id="email" name="email" placeholder="Vaš email"/>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="cs-form-holder">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="input-holder">
                              <textarea id="message" name="message" placeholder="Poruka..."></textarea>
                            </div>
                          </div>
                        </div>
                      
                      
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="row">
                            <div class="cs-form-holder">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="input-holder">
                                 
                                   <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                                    <script type="text/javascript"
                                            src="https://www.google.com/recaptcha/api.js?hl=sr">
                                    </script>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                        <div class="col-lg-4 col-md-4 col-sm-12 col-md-12">
                          <div class="cs-field">
                            <div class="cs-btn-submit">
                              <input class="cs-bgcolor" type="submit" value="Pošalji" >
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
                <h2>Kontakt podaci</h2>
                <p>Ukoliko želite da nas pozovete ili nađete, možete to učiniti pomoću informacija ispod</p>
              </div>
              <ul>
                <li>
                  <div class="cs-media"> <i class="icon-home cs-color"></i> </div>
                  <div class="cs-text"> <span>Address:</span>
                      <p><?php echo $settings['address'];?></p>
                  </div>
                </li>
                <li>
                  <div class="cs-media"> <i class="icon-phone cs-color"></i> </div>
                  <div class="cs-text"> <span>Phone No.</span>
                    <p><?php echo $settings['phone'];?></p>
                  </div>
                </li>
                <li>
                  <div class="cs-media"> <i class="icon-envelope cs-color"></i> </div>
                  <div class="cs-text"> <span>Email Address</span>
                    <p><a href="mailto:<?php echo $settings['site_email'];?>"><?php echo $settings['site_email'];?></a></p>
                  </div>
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
	<?php include 'web-includes/footer.php'; ?>
	<!-- Footer End --> 
</div>
<script src="assets/scripts/responsive.menu.js"></script> 
<script src="assets/scripts/chosen.select.js"></script> 
<script src="assets/scripts/custom.js"></script> 
<script src="assets/scripts/slick.js"></script> 
<script src="assets/scripts/jquery.mobile-menu.min.js"></script> 

<!-- Put all Functions in functions.js --> 
<script src="assets/scripts/functions.js"></script>
</body>
</html>