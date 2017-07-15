<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $applicationConfig['assets_path']; ?>/img/avatar2.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, <?php echo $remoteUser['first_name'] ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
        <!-- Add search form here if needed -->
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li <?php echo ($active == "dashboard") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>index.php">
                    <i class="fa fa-dashboard"></i> <span><?php echo $lang['side-bar']['dashboard'];?></span>
                </a>
            </li>
            <li <?php echo ($active == "administrator") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>admins/index.php">
                    <i class="fa fa-user"></i> <span><?php echo $lang['side-bar']['administrators'];?></span>
                </a>
            </li>
<!--            <li <?php echo ($active == "category") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>category/index.php">
                    <i class="fa fa-tags"></i> <span><?php echo $lang['side-bar']['categories'];?></span>
                </a>
            </li>-->
           <li <?php echo ($active == "blog") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>blog/index.php">
                    <i class="fa fa-rss"></i> <span><?php echo $lang['side-bar']['blog'];?></span>
                </a>
            </li>
<!--            <li <?php echo ($active == "product") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>product/index.php">
                    <i class="fa fa-shopping-cart"></i> <span><?php echo $lang['side-bar']['products'];?></span>
                </a>
            </li>-->
<!--            <li <?php echo ($active == "manufacturer") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>manufacturer/index.php">
                    <i class="fa fa-user-md"></i> <span><?php echo $lang['side-bar']['manufacturers'];?></span>
                </a>
            </li>
            <li <?php echo ($active == "orders") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>orders/index.php">
                    <i class="fa fa-shopping-cart"></i> <span><?php echo $lang['side-bar']['orders'];?></span>
                </a>
            </li>-->
            <li <?php echo ($active == "user") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>user/index.php">
                    <i class="fa fa-user-md"></i> <span><?php echo $lang['side-bar']['users'];?></span>
                </a>
            </li>
            <li <?php echo ($active == "page") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>page/index.php">
                    <i class="fa fa-sitemap"></i> <span><?php echo $lang['side-bar']['pages'];?></span>
                </a>
            </li>
            <li <?php echo ($active == "footer") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>footer/index.php">
                    <i class="fa fa-gear"></i> <span><?php echo $lang['side-bar']['footer'];?></span>
                </a>
            </li>
<!--            <li <?php echo ($active == "reference") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>reference/index.php">
                    <i class="fa fa-gear"></i> <span><?php echo $lang['side-bar']['reference'];?></span>
                </a>
            </li>-->
<!--            <li <?php echo ($active == "homepage") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>homepage/index.php">
                    <i class="fa fa-gear"></i> <span><?php echo $lang['side-bar']['homepage'];?></span>
                </a>
            </li>
            <li <?php echo ($active == "about") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>about/index.php">
                    <i class="fa fa-gear"></i> <span><?php echo $lang['side-bar']['aboutussettings'];?></span>
                </a>
            </li>-->
            <li <?php echo ($active == "settings") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>settings/index.php">
                    <i class="fa fa-gear"></i> <span><?php echo $lang['side-bar']['settings'];?></span>
                </a>
            </li>
            <li <?php echo ($active == "files") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>files/index.php">
                    <i class="fa fa-file"></i> <span><?php echo $lang['side-bar']['uploads'];?></span>
                </a>
            </li>
<!--            <li <?php echo ($active == "emails") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>emails/index.php">
                    <i class="fa fa-file"></i> <span><?php echo $lang['side-bar']['Emails'];?></span>
                </a>
            </li>-->
<!--            <li <?php echo ($active == "newsletter") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>newsletter/index.php">
                    <i class="fa fa-file"></i> <span><?php echo $lang['side-bar']['newsletter'];?></span>
                </a>
            </li>-->
<!--            <li <?php echo ($active == "services") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>services/index.php">
                    <i class="fa    fa-square-o"></i> <span><?php echo $lang['side-bar']['services'];?></span>
                </a>
            </li>-->
<!--            <li <?php echo ($active == "appointment") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>appointment/index.php">
                    <i class="fa  fa-hospital-o"></i> <span><?php echo $lang['side-bar']['appointment'];?></span>
                </a>
            </li>
            <li <?php echo ($active == "department") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>department/index.php">
                    <i class="fa    fa-child"></i> <span><?php echo $lang['side-bar']['department'];?></span>
                </a>
            </li>
            <li <?php echo ($active == "price_list") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>price_list/index.php">
                    <i class="fa    fa-square-o"></i> <span><?php echo $lang['side-bar']['pricelist'];?></span>
                </a>
            </li>-->
<!--            <li <?php echo ($active == "flip-box") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>flip-box/index.php">
                    <i class="fa    fa-square-o"></i> <span><?php echo $lang['side-bar']['flipbox'];?></span>
                </a>
            </li>
            <li <?php echo ($active == "html-box") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>html-box/index.php">
                    <i class="fa    fa-square-o"></i> <span><?php echo $lang['side-bar']['htmlbox'];?></span>
                </a>
            </li>-->
<!--            <li <?php echo ($active == "testimonial") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>testimonial/index.php">
                    <i class="fa    fa-square-o"></i> <span><?php echo $lang['side-bar']['testimonial'];?></span>
                </a>
            </li>-->
            <li <?php echo ($active == "fun-fact") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>fun-fact/index.php">
                    <i class="fa  fa-smile-o"></i> <span><?php echo $lang['side-bar']['funfact'];?></span>
                </a>
            </li>
<!--            <li <?php echo ($active == "photo_gallery") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>photo_gallery/index.php">
                    <i class="fa   fa-file-picture-o"></i> <span><?php echo $lang['side-bar']['photogallery'];?></span>
                </a>
            </li>-->
<!--            <li <?php echo ($active == "video_gallery") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>video_gallery/index.php">
                    <i class="fa   fa-file-movie-o"></i> <span><?php echo $lang['side-bar']['videogallery'];?></span>
                </a>
            </li>-->
            <li <?php echo ($active == "slider") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>slider/index.php">
                    <i class="fa    fa-caret-square-o-right"></i> <span><?php echo $lang['side-bar']['slider'];?></span>
                </a>
            </li>
            <li <?php echo ($active == "course") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>course/index.php">
                    <i class="fa    fa-caret-square-o-right"></i> <span><?php echo $lang['side-bar']['course'];?></span>
                </a>
            </li>
            <li <?php echo ($active == "seminar") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>seminar/index.php">
                    <i class="fa    fa-caret-square-o-right"></i> <span><?php echo $lang['side-bar']['seminar'];?></span>
                </a>
            </li>
<!--            <li <?php echo ($active == "working-hours") ? "class='active'" : ""; ?>>
                <a href="<?php echo APP_URL ?>working-hours/index.php">
                    <i class="fa    fa-clock-o"></i> <span><?php echo $lang['side-bar']['workinghours'];?></span>
                </a>
            </li>-->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>