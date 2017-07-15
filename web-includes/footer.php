<footer id="footer" style="background-color: #b5b5b5 !important"> 
    <div class="cs-footer-widgets" style="padding: 35px 0 19px;">
            <div class="container">
                <div class="row">
                  
                <?php 
                $footerGroups = FooterGroup::getAllFooterGroups();
                foreach($footerGroups as $footerGroup) {
                ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-useful-links">
                            <div class="widget-section-title"><h6 class="black-text-footer"><?php if($footerGroup['show_title']) echo $footerGroup['title']; ?></h6></div>
                            <ul>
                               <?php
                                $footerLinks = FooterLink::getAllFooterLink($footerGroup['id']);
                                foreach($footerLinks as $footerLink) {     
                              ?>
                              <li><a class="black-text-footer" href="<?php echo $footerLink['url']; ?>" <?php echo $footerLink['new_tab'] ? 'target="_blank"' : ''; ?>><?php echo $footerLink['title']; ?></a></li>
                              <?php }?>

                            </ul>	
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
		</div>
      
        <div class="cs-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="copyright-text">
                            <p>© 2017 SmartStudy . All Rights Reserved.</p>
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