<div class="page-section" style="margin-bottom:100px;">
            <div class="container">
                <div class="row">
                    <div class="section-fullwidtht col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="row cs-counter-holder">
                           
                            <?php 
                            $funFacts = FunFact::getAllFunFact();
                            foreach ($funFacts as $funFact)
                            {
                            ?>
                            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="cs-counter left">
                                    <div class="cs-media">
                                        <figure><i class="cs-color icon-uni<?php echo $funFact['icon'];?>"></i></figure>
                                    </div>
                                    <div class="cs-text">
                                        <strong class="counter"><?php echo $funFact['number'];?></strong>
                                        <span><?php echo $funFact['title'];?></span>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                       </ul>
                    </div>
                </div>
            </div>
        </div>  