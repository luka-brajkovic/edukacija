<div id="mobile-menu">
        <ul>
            
             <li><a href="<?php echo WEB_URL."index.php";?>">Naslovna</a></li>
			<li><a href="#">O nama</a>
				
			</li>
                         <?php if(Website::isLoggedUser()){?>
                                    <li class=""><a href="<?php echo WEB_URL."courses.php";?>">Kursevi</a></li>
                         <?php } ?>
			<li><a href="<?php echo WEB_URL."seminars.php";?>">Seminari</a></li>
			<li><a href="<?php echo WEB_URL."strana.php?url=medjunarodna-saradnja";?>">Međunarodna saradnja</a></li>
                        <li><a href="<?php echo WEB_URL."contact.php";?>">Kontakt</a></li>
                        
        </ul>
    </div>
