<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="cs-element-title" style="margin-bottom:30px;">
                <h2>Poslednje aktivnosti</h2>
            </div>
        </div>
       <ul class="cs-bloggrid-slider-sm">
           <?php $articlesData = Blog::getArticlesForCategory(11);
            foreach($articlesData['data'] as $article){
            ?>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="cs-blog blog-grid">
                <div class="cs-media">
                    <figure><a href="#"><img src="<?php echo Blog::getImageUrl($article['thumb_image']);?>" alt=""></a></figure>
                </div>
                <div class="cs-blog-text">
                    <div class="post-options">
                        <span class="post-date"><?php echo date("d D", $article['ctime']); ?></span>
                    </div>
                    
                    <div class="post-title"><h6><a href="#"><?php echo $article['leed'];?></a></h6></div>
                    <a href="<?php echo Blog::getArticleUrl().$article['url'];?>" class="cs-readmore-btn">Read more</a>
                </div>
              </div>
            </li>
            <?php } ?>
        </ul>
    </div>

