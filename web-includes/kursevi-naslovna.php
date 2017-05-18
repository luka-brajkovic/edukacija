<div class="page-section" style="background:#f9fafa;padding-top:62px;margin-bottom:82px;">
			<div class="container">
			  <div class="row">
			  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="cs-section-title left">
					  <h2>Kursevi</h2>
					  <p style="color:#aaaaaa !important;">Whatever it is you want to do, Concordia’s more than 60 majors, including 15 honors majors.</p>
					</div>
              	</div>
				
				<div class="page-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <div class="row">
                                    <?php
                                    $courses  = Course::getForIndex();
                                    foreach ($courses as $course){
                                    ?>
                                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-courses courses-grid">
							<div class="cs-media">
                                                            <figure><a href="#"><img src="<?php echo Course::getImageUrl($course['image'])?>" alt=""/></a></figure>
							</div>
							<div class="cs-text">
								
								<div class="cs-post-title">
                                                                    <h5><a href="<?php echo Course::getCourseUrl().$course['url'];?>"><?php echo $course['title'];?></a></h5>
                                                                    <?php echo $course['leed'];?>
								</div>
								
								<div class="cs-post-meta">
								  
								</div>
							</div>
						</div>
					</div>
                                    <?php } ?>
				  </div>
				</div>
			  </div>
			</div>
		</div>
