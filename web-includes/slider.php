<div class="page-section" style="background-size:cover;padding:0;">
		<div class="container">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                       
                        <ol class="carousel-indicators">
                        <?php
                        $slides = Slider::getForIndex();
                        $i=1;
                        $j=0;
                        foreach ($slides as $slide){
                        
                        ?>
                            <li data-target="#myCarousel" data-slide-to="<?php echo $j++;?>" class="<?php if ($i){
                                echo 'active';
                                $i=0;
                            }?>
                                "></li>
                         
                        <?php } ?>
                        </ol>
                       
                        
                        <div class="carousel-inner">
                        <?php
                        $slides = Slider::getForIndex();
                        $i=1;
                        foreach ($slides as $slide){
                        
                        ?>
                            
                            
                            <div class="item <?php if ($i){
                                echo 'active';
                                $i=0;
                            }?>
                                ">
                            <img src="<?php echo Slider::getImageUrl($slide['image']);?>" alt="">
                            <div class="carousel-caption">
                                <h3 style="color: white !important"><?php echo $slide['title'];?></h3>
                              <p><?php echo $slide['text'];?></p>
                            </div>
                          </div>

                        <?php } ?>
                        </div>

                      
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class=""></span>
                          <span class="sr-only"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class=""></span>
                          <span class="sr-only"></span>
                        </a>
                    </div>		


		</div>
	</div>
