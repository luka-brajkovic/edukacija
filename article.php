<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$request    = Request::instance();
$url    = $request->getParam('url');
$article = Blog::getArticleByUrl($url);
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
	<?php include 'web-includes/breadcrumb.php'; ?>
	<!-- Breadcrumb End -->   
	<!-- Main Start -->
	<div class="main-section">
	  <div class="page-section">
	    <div class="container">
	      <div class="row">
	        <div class="page-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
	          <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="cs-blog-post">
                    <div class="post-author">
                        
                        <div class="post-holder">
                            <span><?php echo $article['title']?></span>
                            <span class="post-date"><?php echo date("d m y", $article['ctime']); ?></span>
                         
                        </div>
                    </div>
                    <div class="post-options">
                    </div>
                 </div>
	              <div class="cs-main-post">
                          <div class="cs-media"><figure><img src="<?php echo Blog::getImageUrl($article['image']);?>" alt=""/></figure></div>
                  </div>
                  <?php echo $article['text']?>
	            </div>
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cs-tags">
                        <h6>Post Tags</h6>
                        <ul>
                           <?php $tags = Blog::getAllTagsForArticle($article['id']) ; 
                           foreach ($tags as $tag){?>
                            <li><a href="#"><?php echo $tag['tag'];?></a></li>
                           <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cs-about-author">
                        <div class="cs-media">
                            <figure><a href="#"><img src="assets/extra-images/about-author-img1.jpg" alt=""/></a></figure>
                        </div>
                        <div class="cs-text">
                        <div class="post-title">
                            <h6 class="cs-color">CHRISTIE N. SHOCKELY</h6>
                            <span>CEO FOUNDER</span>
                        </div>
                        <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis,</p>
                        <div class="cs-social-media">
                           <ul>
                                <li><a href="#" data-original-title="facebook"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#" data-original-title="pinterest"><i class=" icon-pinterest-p"></i></a></li>
                                <li><a href="#" data-original-title="twitter"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#" data-original-title="google"><i class="icon-google4"></i></a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cs-section-title"><h3>Related Blog</h3></div>
                </div>
                <ul class="cs-blog-grid-slider">
                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="cs-blog masonry">
                          <div class="cs-text">
                           <div class="cs-post-comments"><span>10</span></div>
                           <span><em class="cs-color">Jon Westenberg</em> in University Life</span>
                           <div class="cs-post-title"><h2><a href="#">Tortor eleifend et interdum rhoncus</a></h2></div>
                           <span>January 26, 2016</span>
                          </div>
                          <div class="cs-media">
                           <figure><a href="#"><img alt="" src="assets/extra-images/masonry-img-4.jpg"></a></figure>
                          </div>
                         </div>
                    </li>
                     <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="cs-blog masonry">
                          <div class="cs-text">
                           <div class="cs-post-comments"><span>10</span></div>
                           <span><em class="cs-color">Jon Westenberg</em> in University Life</span>
                           <div class="cs-post-title"><h2><a href="#">Tortor eleifend et interdum rhoncus</a></h2></div>
                           <span>January 26, 2016</span>
                          </div>
                          <div class="cs-media">
                           <figure><a href="#"><img alt="" src="assets/extra-images/masonry-img-4.jpg"></a></figure>
                          </div>
                         </div>
                    </li>
                     <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="cs-blog masonry">
                          <div class="cs-text">
                           <div class="cs-post-comments"><span>10</span></div>
                           <span><em class="cs-color">Jon Westenberg</em> in University Life</span>
                           <div class="cs-post-title"><h2><a href="#">Tortor eleifend et interdum rhoncus</a></h2></div>
                           <span>January 26, 2016</span>
                          </div>
                          <div class="cs-media">
                           <figure><a href="#"><img alt="" src="assets/extra-images/masonry-img-4.jpg"></a></figure>
                          </div>
                         </div>
                    </li>
                     <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="cs-blog masonry">
                          <div class="cs-text">
                           <div class="cs-post-comments"><span>10</span></div>
                           <span><em class="cs-color">Jon Westenberg</em> in University Life</span>
                           <div class="cs-post-title"><h2><a href="#">Tortor eleifend et interdum rhoncus</a></h2></div>
                           <span>January 26, 2016</span>
                          </div>
                          <div class="cs-media">
                           <figure><a href="#"><img alt="" src="assets/extra-images/masonry-img-4.jpg"></a></figure>
                          </div>
                         </div>
                    </li>
                     <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="cs-blog masonry">
                          <div class="cs-text">
                           <div class="cs-post-comments"><span>10</span></div>
                           <span><em class="cs-color">Jon Westenberg</em> in University Life</span>
                           <div class="cs-post-title"><h2><a href="#">Tortor eleifend et interdum rhoncus</a></h2></div>
                           <span>January 26, 2016</span>
                          </div>
                          <div class="cs-media">
                           <figure><a href="#"><img alt="" src="assets/extra-images/masonry-img-4.jpg"></a></figure>
                          </div>
                         </div>
                    </li>
                     <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="cs-blog masonry">
                          <div class="cs-text">
                           <div class="cs-post-comments"><span>10</span></div>
                           <span><em class="cs-color">Jon Westenberg</em> in University Life</span>
                           <div class="cs-post-title"><h2><a href="#">Tortor eleifend et interdum rhoncus</a></h2></div>
                           <span>January 26, 2016</span>
                          </div>
                          <div class="cs-media">
                           <figure><a href="#"><img alt="" src="assets/extra-images/masonry-img-4.jpg"></a></figure>
                          </div>
                         </div>
                    </li>
                </ul>
	          </div>
	        </div>
            <aside class="page-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="widget widget-search">
                    <div class="widget-title"><h6>Search Articals</h6></div>
                    <form>
                      <input type="text" placeholder="Enter Course name...">
                      <label><input type="submit" value="submit"></label>
                    </form>
                </div>
                <div class="widget widget-categories">
                    <div class="widget-title"><h6>Event Types</h6></div>
                    <ul>
                        <li><a href="#">College of the Arts</a></li>
                        <li><a href="#">School of Art + Art History</a></li>
                        <li><a href="#">School of Music</a></li>
                        <li><a href="#">School of Theatre + Dance</a></li>
                        <li><a href="#">Current Season</a></li>
                        <li><a href="#">UF Symphony Orchestra</a></li>
                        <li><a href="#">University Galleries 2015-16</a></li>
                        <li><a href="#">Carillon Concert Series</a></li>
                    </ul>
                </div>
                <div class="widget widget-latest-news">
                    <div class="widget-title"><h6>Latest News</h6></div>
                    <ul>
                        
                        <?php $articlesData = Blog::getNewArticles();
                        foreach($articlesData as $newarticle){
                        ?>
                        
                        <li>
                          <div class="cs-media">
                              <figure><a href="#"><img src="<?php //echo Blog::getImageUrl($newarticle['thumb_image'], true);?>" alt=""></a></figure>
                          </div>
                          <div class="cs-text">
                            <div class="post-title">
                                <h6><a href="<?php echo Blog::getArticleUrl().$newarticle['url'];?>"><?php echo $newarticle['title'];?></a></h6>
                                <span class="post-date"><?php echo date("d m y", $newarticle['ctime']); ?></span>
                            </div>
                          </div>
                        </li>
                        
                        <?php } ?>
                    </ul>
                </div>
                <div class="widget widget-archive">
                    <div class="widget-title"><h6>Archive</h6></div>
                    <div class="cs-select-holder">
                       <select>
                          <option>Select Month</option>
                          <option>Select Month</option>
                          <option>Select Month</option>
                          <option>Select Month</option>
                          <option>Select Month</option>
                       </select>
                    </div>
                </div>
                <div class="widget widget-tags">
                    <div class="widget-title"><h6>Tags</h6></div>
                    <ul>
                        <li><a href="#">Love</a> </li>
                        <li><a href="#">Malheur</a> </li>
                        <li><a href="#">Satire</a> </li>
                        <li><a href="#">Food</a> </li>
                        <li><a href="#">Travel</a> </li>
                        <li><a href="#">Music</a> </li>
                        <li><a href="#">Short Story</a> </li>
                        <li><a href="#">History</a> </li>
                        <li><a href="#">Flint</a> </li>
                        <li><a href="#">Immigration</a> </li>
                        <li><a href="#">Religion</a> </li>
                        <li><a href="#">Spanish</a> </li>
                        <li><a href="#">Innovation</a> </li>
                        <li><a href="#">Fly Fishing</a> </li>
                    </ul>
                </div>
            </aside>
	      </div>
	    </div>
	  </div> 
      <div class="page-section" style="background-color:#f9f9f9; padding:60px 0 40px 0;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <div class="cs-comments">
                     <div class="cs-section-title"><h3>23 commetns</h3></div>
                     <ul>
                       <li>
                         <div class="thumblist">
                          <ul>
                            <li>
                              <div class="cs-media">
                                <figure><img alt="" src="assets/extra-images/comment-img1.jpg"></figure>
                              </div>
                              <div class="cs-text">
                              <h6><a href="#">Anant Gaggar</a></h6>
                                <span class="post-date">2/07/14  Friday 10:20am</span>
                               <p>Fusce volutpat scelerisque lectus sed semper sollicitudin varius inceptos elit libero, molestie tincidunt velit praesent inceptos. ultrices praesent nisl risus.</p>
                                <a class="cs-replay-btn" href="#"><i class="icon-forward4"></i>Reply</a>
                              </div>
                            </li>
                          </ul>
                         </div>
                         <ul class="children">
                           <li>
                             <div class="thumblist">
                              <ul>
                                <li>
                                  <div class="cs-media">
                                    <figure><img alt="" src="assets/extra-images/comment-img2.jpg"></figure>
                                  </div>
                                  <div class="cs-text">
                                  <h6><a href="#">Vincenzo Petito</a></h6>
                                    <span class="post-date">2/07/14  Friday 10:20am</span>
                                   <p>Torquent nullam molestie ultrices primis hac fames risus sed id purus, turpis sit semper imperdiet libero praesent purus vitae torquent, ut sociosqu sodales id sodales faucibus eros litora vivamus posuere mauris. amet cursus risus donec habitant malesuada.</p>
                                    <a class="cs-replay-btn" href="#"><i class="icon-forward4"></i>Reply</a>
                                  </div>
                                </li>
                              </ul>
                             </div>
                             <ul class="children">
                               <li>
                                 <div class="thumblist">
                                  <ul>
                                    <li>
                                      <div class="cs-media">
                                        <figure><img alt="" src="assets/extra-images/comment-img2.jpg"></figure>
                                      </div>
                                      <div class="cs-text">
                                      <h6><a href="#">Vincenzo Petito</a></h6>
                                        <span class="post-date">2/07/14  Friday 10:20am</span>
                                       <p>Sed semper sollicitudin varius inceptos elit libero, molestie tincidunt.</p>
                                      </div>
                                    </li>
                                  </ul>
                                 </div> 
                               </li>
                           </ul>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <div class="thumblist">
                          <ul>
                            <li>
                              <div class="cs-media">
                                <figure><img alt="" src="assets/extra-images/comment-img4.jpg"></figure>
                              </div>
                              <div class="cs-text">
                              <h6><a href="#">Anant Gaggar</a></h6>
                                <span class="post-date">2/07/14  Friday 10:20am</span>
                               <p>Fusce volutpat scelerisque lectus sed semper sollicitudin varius inceptos elit libero, molestie tincidunt velit praesent inceptos. ultrices praesent nisl risus.</p>
                                <a class="cs-replay-btn" href="#"><i class="icon-forward4"></i>Reply</a>
                              </div>
                            </li>
                          </ul>
                         </div>
                       </li>
                     </ul>
                   </div>
                   <div class="cs-comment-form">
                     <div class="cs-section-title"><h3>leave us a comment</h3></div>
                     <div class="form-holder row">
                       <form>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                           <div class="input-holder">
                             <input type="text" placeholder="Name *">
                           </div>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                           <div class="input-holder">
                             <input type="text" placeholder="Email *">
                           </div>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                           <div class="input-holder">
                             <input type="text" placeholder="Website">
                           </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="input-holder">
                             <textarea placeholder="Message"></textarea>
                           </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="input-button">
                                <a class="cs-button cs-bgcolor" href="#">Post Comments</a>
                            </div>
                         </div>
                       </form>
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