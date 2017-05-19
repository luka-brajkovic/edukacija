<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$url    = $request->getParam('url');

$page    = $request->getParam('page');
if($page==0){
    $page = 1;
}
$category  = Blog::getBlogCategoryByUrl($url);
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
	        <div class="page-content col-lg-9 col-md-9 col-sm-12 col-xs-12">
	          <div class="row">
	            <?php
                    $articles = Blog::getArticlesForCategory($category['id'],$page,3);
                    foreach ($articles['data'] as $article){
                     
                    ?>
                      
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	              <div class="cs-blog blog-large">
                        <div class="cs-media">
                            <figure><a href="#"><img src="<?php echo Blog::getImageUrl($article['image']);?>" alt=""></a></figure>
                        </div>
                        <div class="cs-blog-text">
                          
                          
                            <div class="post-title"><h2><a href="#"><?php echo $article['title'];?></a></h2></div>
                            <P><?php echo $article['leed'];?> <a href="<?php echo Blog::getArticleUrl().$article['url'];?>" class="cs-readmore-btn cs-color">Read more...</a></P>
                        </div>
                    </div>
	            </div>
                    
                    <?php } ?>  
                    
	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="cs-pagination">
						<ul class="pagination">
							  <?php
                                                                            $numOfPages =ceil($articles['count']/3);
                                                                            $baseUrlCat = WEB_URL . "blog.php?url=".$url."&page=";
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
            <aside class="page-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
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
                        <li>
                          <div class="cs-media">
                             <figure><a href="#"><img src="assets/extra-images/latestnews-img1.jpg" alt=""></a></figure>
                          </div>
                          <div class="cs-text">
                            <div class="post-title">
                                <h6><a href="#">Why I work remotely (hint: it has noth...</a></h6>
                                <span class="post-date">January 26, 2016</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="cs-media">
                             <figure><a href="#"><img src="assets/extra-images/latestnews-img2.jpg" alt=""></a></figure>
                          </div>
                          <div class="cs-text">
                            <div class="post-title">
                                <h6><a href="#">The Snap Generation: A Guide to Snap...</a></h6>
                                <span class="post-date">January 26, 2016</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="cs-media">
                             <figure><a href="#"><img src="assets/extra-images/latestnews-img3.jpg" alt=""></a></figure>
                          </div>
                          <div class="cs-text">
                            <div class="post-title">
                                <h6><a href="#">New  Tools for Publihsers and Writers...</a></h6>
                                <span class="post-date">January 26, 2016</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="cs-media">
                             <figure><a href="#"><img src="assets/extra-images/latestnews-img4.jpg" alt=""></a></figure>
                          </div>
                          <div class="cs-text">
                            <div class="post-title">
                                <h6><a href="#">O Whatsapp, a “classe media” eo...</a></h6>
                                <span class="post-date">January 26, 2016</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="cs-media">
                             <figure><a href="#"><img src="assets/extra-images/latestnews-img5.jpg" alt=""></a></figure>
                          </div>
                          <div class="cs-text">
                            <div class="post-title">
                                <h6><a href="#">Against “Don’t Read the Commments”</a></h6>
                                <span class="post-date">January 26, 2016</span>
                            </div>
                          </div>
                        </li>
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