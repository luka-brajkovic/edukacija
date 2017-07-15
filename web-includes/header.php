<header id="header" class=""> 
    <div class="top-bar" style="background-color: #b5b5b5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                      
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    	<div class="cs-user">
                            <ul>
                                
                                    <?php 
                                    if(!Website::isLoggedUser()){
                                    ?>
                                    <li style="border: none">
                                    <a data-target="#cs-login" href="remote.html" data-toggle="modal"><i class="icon-login"></i>Login</a>
                                    </li>
                                    <?php
                                    }
                                    else{
                                    $user = Website::getLoggedUserInfo();
                                    ?>
                                    <li class="active" style="border: none"><a href="<?php echo WEB_URL;?>profile.php"><i class="icon-gear"></i><?php echo $user['first_name']." ".$user['last_name'];?> </a></li>
                                    <li style="border: none">
                                    <a href="<?php echo WEB_URL;?>work.php?action=logout"><i class="icon-log-out"></i>Logout</a>
                                    </li>
                                    <?php
                                    } 
                                    ?>
                                    
                                    
                                
                                
                              
<!--                                
                                <li>
                                    <div class="cs-user-login">
                                        <div class="cs-media">
                                            <figure><img alt="" src="assets/extra-images/user-login-img-1.jpg"></figure>
                                        </div>
                                        <a href="#">Alard William</a>
                                        <ul>
                                            <li class="active"><a href="user-account-setting.html"><i class="icon-gear"></i> Profile Setting</a></li>
                                            <li><a href="#"><i class="icon-log-out"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </li>-->
                            </ul>
                        </div>
                        <div class="cs-modal">
                            <div class="modal fade" id="cs-login" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>User Sign in</h4>
                                            <div class="cs-login-form">
                                                <form name="login-form" method="POST" action="<?php echo WEB_URL;?>work.php" id="login-form" class="clearfix">
                                                <input type="hidden" name="action" value="login">
                                                    <div class="input-holder">
                                                        <label for="cs-username-1">
                                                            <strong>Email</strong>
                                                            <i class="icon-add-user"></i>
                                                            <input type="text" class="" id="cs-username-1" name="email"  placeholder="Type desired username">
                                                        </label>
                                                    </div>
                                                    <div class="input-holder">
                                                        <label for="cs-login-password-1">
                                                            <strong>Password</strong>
                                                            <i class="icon-lock"></i>
                                                            <input type="password" id="cs-login-password-1" name="password"  placeholder="******">
                                                        </label>
                                                    </div>
                                                    <div class="input-holder">
                                                        <a class="btn-forgot-pass" data-dismiss="modal" data-target="#user-forgot-pass" data-toggle="modal" href="javascript:;" aria-hidden="true"><i class=" icon-question-circle"></i> Forgot password?</a>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input class="cs-color csborder-color" type="submit" value="SIGN IN">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="user-forgot-pass" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Password Recovery</h4>
                                            <div class="cs-login-form">
                                                <form>
                                                    <div class="input-holder">
                                                        <label for="cs-email-1">
                                                            <strong>Email</strong>
                                                            <i class="icon-envelope"></i>
                                                            <input type="email" class="" id="cs-email-1" placeholder="Type desired username">
                                                        </label>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input class="cs-color csborder-color" type="submit" value="Send">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="cs-user-signup">
                                                <i class="icon-add-user"></i>
                                                <strong>Not a Member yet? </strong>
                                                <a href="javascript:;" data-toggle="modal" data-target="#cs-signup" data-dismiss="modal" class="cs-color" aria-hidden="true">Signup Now</a>
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
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        <div class="cs-logo cs-logo-dark">
                            <div class="cs-media">
                                <figure><a href="index.php"><img src="assets/images/cs-logo.png" alt="" /></a></figure>
                            </div>
                        </div>
                        <div class="cs-logo cs-logo-light">
                            <div class="cs-media">
                                <figure><a href="index.php"><img src="assets/images/cs-logo-light.png" alt="" /></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6">
                        <div class="cs-main-nav pull-right">
                            <nav class="main-navigation">
                                <ul style="margin-top: 10px">
                                    <li><a href="index.php">Naslovna</a></li>
                                    <li class=""><a href="<?php echo Page::setPageUrl()."o-nama";?>">O nama</a>
                                    
                                        
                                    </li>
                                    <?php if(Website::isLoggedUser()){?>
                                    <li class=""><a href="<?php echo WEB_URL."courses.php";?>">Kursevi </a>
                                      
                                    </li>
                                    <?php } ?>
                                    <li class=""><a href="<?php echo WEB_URL."seminars.php";?>">Seminari</a>
                                       
                                    </li>
                                    <li><a href="<?php echo WEB_URL."strana.php?url=medjunarodna-saradnja";?>">Međunarodna saradnja</a></li>
                                    <li><a href="<?php echo WEB_URL."contact.php";?>" >Kontakt</a></li>
                                    <li class="cs-search-area" style="margin-top: -10px">
                                        <div class="cs-menu-slide">
                                            <div class="mm-toggle">
                                                <i class="icon-align-justify"></i>
                                            </div>            
                                        </div>
                                      
                                    </li>
                                </ul>
                            </nav>
                           
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</header>
