<?php
$languepath = 3;
require 'library/config.php';
$request = Request::instance();
$request    = Request::instance();
$url    = $request->getParam('url');
$article = Blog::getArticleByUrl($url);
$bcgrupa = "Vesti";
$bcclan =  $article['title'];
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
	<?php include 'web-includes/breadcrumb.php'; ?>
	<!-- Breadcrumb End -->   
	<!-- Main Start -->
	<div class="main-section">
	  <div class="page-section">
	    <div class="container">
	      <div class="row">
	        <div class="page-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
	          <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="cs-blog-post">
                    <div class="post-author">
                        
                        <div class="post-holder">
                            <h1 style="text-align: left"><?php echo $article['title']?></h1>
                            <span class="post-date"><i class="icon-uniF103"></i><?php echo date("d.m.y.", $article['ctime']); ?></span>
                         
                        </div>
                    </div>
                    <div class="post-options">
                    </div>
                 </div>

                      <img src="<?php echo Blog::getImageUrl($article['image']);?>" class="article-main-image" alt="<?=$article['title']?>" />

                  <?php echo $article['text']?>
	            </div>
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cs-tags">
                        <?php  $tags = Blog::getAllTagsForArticle($article['id']) ;
                        if (!$tags[0]['tag']==""){
                        ?>
                        <h6>Tagovi</h6>
                      
                        <ul>
                           <?php
                           foreach ($tags as $tag){?>
                            <li><a href="#"><?php echo $tag['tag'];?></a></li>
                           <?php } ?>
                        </ul>
                          <?php } ?>
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
    <?php include 'web-includes/footer.php';?>
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