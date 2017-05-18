<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$request    = Request::instance();
$url    = $request->getParam('url');
$course = Course::getCourseByUrl($url);
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
                 <div class="">
                    <div class="cs-courses-overview">
                            <ul>
                                <li><i class=" icon-uniF106"></i>Class Duration:<span> 1h 41m</span></li>
                                <li><i class=" icon-play22"></i>Viewers:<span>  620</span></li>
                                <li><i class="icon-uniF108"></i>Lessons: <span> 23</span></li>
                                <li><i class="icon-uniF109"></i>Language:<span>English</span></li>
                                <li><i class="icon-uniF101"></i>Skill level:<span>Beginner</span></li>
                                <li><i class="icon-uniF117"></i>Students: <span> 50</span></li>
                                <li><i class=" icon-uniF10A "></i>Certificate: :<span>no</span></li>
                                <li><i class="icon-uniF104"></i>Assessments: <span>yes</span></li>
                            </ul>
                            <a href="#" class="shortlist-btn cs-bgcolor"><i class="icon-plus3"></i>Shortlist</a>
                    </div>
                </div>
                
            </aside>
	        <div class="page-content col-lg-9 col-md-9 col-sm-12 col-xs-12">
	          <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="cs-about" class="cs-about-courses">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                            <div class="cs-section-title"><h3><?php echo $course['title'];?></h3></div>
                                                            <?php echo $course['text'];?>
							</div>
						   
						   
						</div>
					</div>
                                        <?php if(!empty($course['video_url'])){?>
                                        <video width="400" controls>
                                            <source src="<?php echo $course['video_url'];?>" type="video/ogg">
                                        Your browser does not support HTML5 video.
                                        </video>
                                        <?php } ?>
					<div class="cs-curriculum" id="cs-curriculum">
						<div class="cs-section-title"><h3>Fajlovi kursa</h3></div>
						<h5 class="cs-color"></h5>
						<div id="accordion" class="cs-accordion-list">
						 
                                                  <?php
                                                  if (!empty($course['files'])){
                                                  $files = explode(',', $course['files']);
                                                
                                                  foreach ($files as $file){
                                                  ?>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tablist" id="headingTwo">
						      <h6 class="panel-title">
                                                          <a class="collapsed" href="<?php echo Settings::getUploadsUrl($file)?>">
                                                            <i class="icon-uniF110 cs-color"></i><?php echo $file;?>
						        </a>
						      </h6>
						    </div>
                                                  
						  </div>
                                                  <?php }}
                                                  else{
                                                    echo '<p>Trenuto nema Fajlova za ovaj kurs</p>';
                                                  }
                                                  ?>
						</div>
						
					</div>
                </div>
                <div id="instrucors">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="cs-section-title"><h3>Course Instructor</h3></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-team listing">
                            <div class="cs-media">
                                <figure>
                                    <a href="#"><img alt="#" src="assets/extra-images/team1.jpg"></a>
                                </figure>
                            </div>
                            <div class="cs-text">
                                <h5><a class="cs-color" href="#">Keeth Warson</a></h5>
                                <span>Associate Professor of Anthropology</span>
                                <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis, the Icelandic archaeology, African archaeology. human evolution, disease ecology, human adaptation</p>
                                <div class="cs-social-media">
                                    <ul>
                                        <li><a data-original-title="facebook" href="#"><i class="icon-facebook2"></i></a></li>
                                        <li><a data-original-title="pinterest" href="#"><i class="icon-pinterest3"></i></a></li>
                                        <li><a data-original-title="twitter" href="#"><i class="icon-twitter2"></i></a></li>
                                        <li><a data-original-title="google" href="#"><i class="icon-google4"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-team listing">
                            <div class="cs-media">
                                <figure>
                                    <a href="#"><img alt="#" src="assets/extra-images/team2.jpg"></a>
                                </figure>
                            </div>
                            <div class="cs-text">
                                <h5><a class="cs-color" href="#">Peter Parker</a></h5>
                                <span>Associate Professor of Anthropology</span>
                                <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis, the Icelandic archaeology, African archaeology. human evolution, disease ecology, human adaptation</p>
                                <div class="cs-social-media">
                                    <ul>
                                        <li><a data-original-title="facebook" href="#"><i class="icon-facebook2"></i></a></li>
                                        <li><a data-original-title="pinterest" href="#"><i class="icon-pinterest3"></i></a></li>
                                        <li><a data-original-title="twitter" href="#"><i class="icon-twitter2"></i></a></li>
                                        <li><a data-original-title="google" href="#"><i class="icon-google4"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="cs-faqs" class="cs-faqs">
						<div class="cs-section-title"><h3>Frequently Asked Questions</h3></div>
						<div id="accordion3" class="cs-faqs-list">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tablist" id="heading15">
						      <h6 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
						          What is the Capstone Project?
						        </a>
						      </h6>
						    </div>
						    <div id="collapse15" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading15">
						      <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis, the Icelandic archaeology, African archaeology. human evolution, disease ecology, human adaptation epidemiology, human evolution, disease ecology, human adaptation,</p>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tablist" id="heading16">
						      <h6 class="panel-title">
						        <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
						          What is the refund policy?
						        </a>
						      </h6>
						    </div>
						    <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
						       <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis, the Icelandic archaeology, African archaeology. human evolution, disease ecology, human adaptation epidemiology, human evolution, disease ecology, human adaptation,</p>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tablist" id="heading17">
						      <h6 class="panel-title">
						        <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
						          Can I just enroll in a single course? I'm not interested in the entire Specialization.
						        </a>
						      </h6>
						    </div>
						    <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
						       <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis, the Icelandic archaeology, African archaeology. human evolution, disease ecology, human adaptation epidemiology, human evolution, disease ecology, human adaptation,</p>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tablist" id="heading18">
						      <h6 class="panel-title">
						        <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse18" aria-expanded="false" aria-controls="collapse18">
						          Do I need to take the courses in a specific order?
						        </a>
						      </h6>
						    </div>
						    <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
						       <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis, the Icelandic archaeology, African archaeology. human evolution, disease ecology, human adaptation epidemiology, human evolution, disease ecology, human adaptation,</p>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tablist" id="heading19">
						      <h6 class="panel-title">
						        <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse19" aria-expanded="false" aria-controls="collapse19">
						          Will I earn university credit for completing the Big Data Specialization?
						        </a>
						      </h6>
						    </div>
						    <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
						       <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis, the Icelandic archaeology, African archaeology. human evolution, disease ecology, human adaptation epidemiology, human evolution, disease ecology, human adaptation,</p>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tablist" id="heading20">
						      <h6 class="panel-title">
						        <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse20" aria-expanded="false" aria-controls="collapse20">
						          What will I be able to do upon completing the Big Data Specialization?
						        </a>
						      </h6>
						    </div>
						    <div id="collapse20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading20">
						       <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis, the Icelandic archaeology, African archaeology. human evolution, disease ecology, human adaptation epidemiology, human evolution, disease ecology, human adaptation,</p>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tablist" id="heading21">
						      <h6 class="panel-title">
						        <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse21" aria-expanded="false" aria-controls="collapse21">
						          What software will I need to complete the assignments?
						        </a>
						      </h6>
						    </div>
						    <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
						       <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis, the Icelandic archaeology, African archaeology. human evolution, disease ecology, human adaptation epidemiology, human evolution, disease ecology, human adaptation,</p>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tablist" id="heading22">
						      <h6 class="panel-title">
						        <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse22" aria-expanded="false" aria-controls="collapse22">
						          What hardware will I need to complete the assignments?
						        </a>
						      </h6>
						    </div>
						    <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22">
						       <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis, the Icelandic archaeology, African archaeology. human evolution, disease ecology, human adaptation epidemiology, human evolution, disease ecology, human adaptation,</p>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tablist" id="heading23">
						      <h6 class="panel-title">
						        <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse23" aria-expanded="false" aria-controls="collapse23">
						          What connectivity requirements will I need to complete the assignments?
						        </a>
						      </h6>
						    </div>
						    <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
						       <p>Diet and health, human osteology, paleopathology/ epidemiology, human evolution, disease ecology, human adaptation, Stable Isotope Analysis, the Icelandic archaeology, African archaeology. human evolution, disease ecology, human adaptation epidemiology, human evolution, disease ecology, human adaptation,</p>
						    </div>
						  </div>
						</div>
					</div>
	            </div>
	            <div id="cs-related-post" class="cs-related-post">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  	<div class="cs-section-title"><h3>Related Course</h3></div>
				  </div>
				  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	            	<div class="cs-courses courses-grid">
	            		<div class="cs-media">
	            			<figure><a href="#"><img src="assets/extra-images/course-grid-img1.jpg" alt=""/></a></figure>
	            		</div>
	            		<div class="cs-text">
	            		    <div class="cs-rating">
	            		      <div class="cs-rating-star">
	            		        <span class="rating-box" style="width:100%;"></span>
	            		      </div>
	            		    </div>
							<div class="cs-post-title">
							  <h5><a href="#">Latest Computer Science and Programming</a></h5>
							</div>
							<span class="cs-courses-price"><em>$</em>289.99</span>
							<div class="cs-post-meta">
							  <span>By
							    <a href="#" class="cs-color">James,</a>
							    <a href="#" class="cs-color">Howdson</a>
							  </span>
							</div>
	            		</div>
	            	</div>
	              </div>
	              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	            	<div class="cs-courses courses-grid">
	            		<div class="cs-media">
	            			<figure><a href="#"><img src="assets/extra-images/course-grid-img2.jpg" alt=""/></a></figure>
	            		</div>
	            		<div class="cs-text">
	            		    <div class="cs-rating">
	            		      <div class="cs-rating-star">
	            		        <span class="rating-box" style="width:100%;"></span>
	            		      </div>
	            		    </div>
							<div class="cs-post-title">
							  <h5><a href="#">Basic Time Management Course</a></h5>
							</div>
							<span class="cs-free">Free</span>
							<div class="cs-post-meta">
							  <span>By
							    <a href="#" class="cs-color">James,</a>
							    <a href="#" class="cs-color">Howdson</a>
							  </span>
							</div>
	            		</div>
	            	</div>
	              </div>
	              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	            	<div class="cs-courses courses-grid">
	            		<div class="cs-media">
	            			<figure><a href="#"><img src="assets/extra-images/course-grid-img3.jpg" alt=""/></a></figure>
	            		</div>
	            		<div class="cs-text">
	            			<span class="cs-caption">CC</span>
	            		    <div class="cs-rating">
	            		      <div class="cs-rating-star">
	            		        <span class="rating-box" style="width:100%;"></span>
	            		      </div>
	            		    </div>
							<div class="cs-post-title">
							  <h5><a href="#">How to Become a Startup Founder</a></h5>
							</div>
							<span class="cs-courses-price"><em>$</em>175.99</span>
							<div class="cs-post-meta">
							  <span>By
							    <a href="#" class="cs-color">James,</a>
							    <a href="#" class="cs-color">Howdson</a>
							  </span>
							</div>
	            		</div>
	            	</div>
	            </div>
				</div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="page-section" style="background-color:#f9f9f9; padding:80px 0;">
	    <div class="container">
	      <div class="row">
	        <div class="page-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
	        <div class="page-content col-lg-9 col-md-9 col-sm-12 col-xs-12">
	          <div class="row">
	          	<div id="cs-reviews" class="cs-reviews">
	           	  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	           	    <div class="cs-section-title"><h3>cOURSE Reviews</h3></div>
	           	  </div>
           		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       		  		<div class="cs-rating-reviews">
						<div class="cs-review-box">
						    <div class="cs-review-item">
                            	<span class="label">5 Stars</span>
                            	<span class="cs-item-list">
                                    <span data-width="30%" style="width: 30%;"><small>30%</small></span>
                                </span>
                            </div>
                            <div class="cs-review-item">
                            	<span class="label">4 Stars</span>
                            	<span class="cs-item-list">
                                    <span data-width="55%" style="width: 55%;"><small>55%</small></span>
                                </span>
                            </div>
                            <div class="cs-review-item">
                            	<span class="label">3 Stars</span>
                            	<span class="cs-item-list">
                                    <span data-width="75%" style="width: 75%;"><small>75%</small></span>
                                </span>
                            </div>
                            <div class="cs-review-item">
                            	<span class="label">2 Stars</span>
                            	<span class="cs-item-list">
                                    <span data-width="80%" style="width: 80%;"><small>80%</small></span>
                                </span>
                            </div>
                            <div class="cs-review-item">
                            	<span class="label">1 Stars</span>
                            	<span class="cs-item-list">
                                    <span data-width="95%" style="width: 95%;"><small>95%</small></span>
                                </span>
                            </div>
						</div>
						<div class="cs-review-summary">
                        	<div class="review-average-score">
                        		<em class="cs-color">4.8</em>
                                <span class="cs-overall-rating">Overall Ratings</span>
                                <div class="cs-rating">
		            		      <div class="cs-rating-star">
		            		        <span style="width:100%;" class="rating-box"></span>
		            		      </div>
		            		    </div>
                            </div>
                        </div>
           			</div>
           		  </div>
           		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           		  	<ul class="cs-review-list">
           		  		<li>
           		  			<div class="cs-media">
           		  				<figure><img src="assets/extra-images/review-list-img1.jpg" alt=""/></figure>
           		  			</div>
           		  			<div class="cs-text">
           		  				<div class="cs-rating">
		            		      <div class="cs-rating-star">
		            		        <span class="rating-box" style="width:100%;"></span>
		            		      </div>
		            		      <em>4.5</em>
		            		    </div>
		            		    <P>You are not eligible for a refund after earning a Course Certificate, even if you complete a course within the two-week period. If you pre-pay for the entire Specialization, you have one year from your payment date, or the launch of the Specialization on the platform, to complete the</P>
		            		    <h6>Gemma Walters</h6><span class="cs-post-date">3 Days Ago</span>
           		  			</div>
           		  		</li>
           		  		<li>
           		  			<div class="cs-media">
           		  				<figure><img src="assets/extra-images/review-list-img2.jpg" alt=""/></figure>
           		  			</div>
           		  			<div class="cs-text">
           		  				<div class="cs-rating">
		            		      <div class="cs-rating-star">
		            		        <span class="rating-box" style="width:100%;"></span>
		            		      </div>
		            		      <em>4.5</em>
		            		    </div>
		            		    <P>You are not eligible for a refund after earning a Course Certificate, even if you complete a course within the two-week period. If you pre-pay for the entire Specialization, you have one year from your payment date, or the launch of the Specialization on the </P>
		            		    <h6>Gemma Walters</h6><span class="cs-post-date">3 Days Ago</span>
           		  			</div>
           		  		</li>
           		  		<li>
           		  			<div class="cs-media">
           		  				<figure><img src="assets/extra-images/review-list-img3.jpg" alt=""/></figure>
           		  			</div>
           		  			<div class="cs-text">
           		  				<div class="cs-rating">
		            		      <div class="cs-rating-star">
		            		        <span class="rating-box" style="width:100%;"></span>
		            		      </div>
		            		      <em>4.5</em>
		            		    </div>
		            		    <P>You are not eligible for a refund after earning a Course Certificate.</P>
		            		    <h6>Gemma Walters</h6><span class="cs-post-date">3 Days Ago</span>
           		  			</div>
           		  		</li>
           		  	</ul>
           		  </div>
           		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           		  	<div class="cs-section-title"><h3>Add a review </h3></div>
           		  	<div class="cs-add-review">
           		  		<div class="cs-your-rating">
	           		  		<h6>Your Rating</h6>
	           		  		<div class="cs-rating">
	            		      <div class="cs-rating-star">
	            		        <span class="rating-box" style="width:100%;"></span>
	            		      </div>
	            		    </div>
           		  	    </div>
           		  	    <div class="cs-review-form">
           		  	    	<div class="row">
           		  	    		<form>
           		  	    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           		  	    				<div class="input-holder">
           		  	    					<label>Your Review</label>
           		  	    					<textarea></textarea>
           		  	    				</div>
           		  	    			</div>
           		  	    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
           		  	    				<div class="input-holder">
           		  	    					<label>Your Name *</label>
           		  	    					<input type="text" placeholder=""/>
           		  	    				</div>
           		  	    			</div>
           		  	    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
           		  	    				<div class="input-holder">
           		  	    					<label>Email Address *</label>
           		  	    					<input type="text" placeholder=""/>
           		  	    				</div>
           		  	    			</div>
           		  	    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           		  	    				<div class="input-button">
           		  	    					<a class="cs-button cs-bgcolor" href="#">Submit</a>
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