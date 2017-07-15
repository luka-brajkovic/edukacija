<div class="page-section" style="background:#f9fafa;padding-top:62px;margin-bottom:82px;">
			<div class="container">
			  <div class="row">
			  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="cs-section-title left">
					  <h2>Seminari</h2>
					
					</div>
              	</div>
				
				<div class="page-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <div class="row">
                                    <?php
                                    $seminars  = Blog::getAllArticlesForIndex();
                                    foreach ($seminars as $seminar){
                                    ?>
                                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-courses courses-grid">
							<div class="cs-media">
                                                            <figure><a href="<?php echo Blog::getArticleUrl().$seminar['url'];?>"><img src="<?php echo Blog::getImageUrl($seminar['image'])?>" alt=""/></a></figure>
							</div>
							<div class="cs-text">
								
								<div class="cs-post-title">
                                                                    <h5><a href="<?php echo Blog::getArticleUrl().$seminar['url'];?>"><?php echo $seminar['title'];?></a></h5>
                                                                    <?php echo $seminar['leed'];?>
								</div>
								
                                                            <div class="cs-post-meta" style="padding: 22px 22px 40px;">
                                                                    <div class="pull-left" style="color: #b5b5b5 ">  
                                                                    <i class="icon-uniF103"></i>
								    <?php echo date( 'd.m.Y ', $seminar['date']);?>                                                               
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <a href="<?php echo Blog::getArticleUrl().$seminar['url'];?>" class="cs-buynow add-opacity" style="padding: 5px 9px;color: white;background-color: #b5b5b5 ;"> VIŠE </a>
                                                                    </div>
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
