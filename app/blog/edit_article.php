<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request = Request::instance();
    
    $id = $request->getParam('id');
    $article = Model::find("blog_article", $id);
    
    $active     = 'blog';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['editblogarticle'];?> <?php echo $article->title; ?> - Bglobal | <?php echo $applicationConfig['name']; ?></title>
        <?php include '../includes/head.php'; ?>
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        
        <?php include '../includes/header.php'; ?>
        
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
            <?php include '../includes/sidebar.php'; ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo $lang['table']['editblogarticle'];?> <?php echo $article->title; ?>
                        <small><?php echo $lang['table']['blog'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $lang['table']['blog'];?></a></li>
                        <li class="active"><?php echo $lang['table']['editblogarticle'];?><?php echo $article->title; ?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                       
                        <div class="col-md-12">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-body">
                                    <form role="form" action="work.php?action=edit_article" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['title'];?></label>
                                            <input type="text" class="form-control" name="title" value="<?php echo $article->title; ?>" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['leed'];?></label>
                                            <textarea class="form-control" name="leed" rows="3" placeholder="Leed ..."><?php echo $article->leed; ?></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['text'];?></label>
                                            <textarea id="editor1" class="form-control" name="text" rows="3" placeholder="Text ..."><?php echo $article->text; ?></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="image"><?php echo $lang['table']['image'];?> (870x200)</label>
                                            <input type="file" id="image" name="image">
                                            <p class="help-block">
                                                <?php if($article->image): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Blog::getImageUrl($article->image); ?>" width="150" /> | 
                                                <a href="<?php echo Blog::getImageUrl($article->image); ?>" target="_blank">View Image</a> | 
                                                <a href="work.php?action=remove-image&id=<?php echo $id; ?>" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="small_image"><?php echo $lang['table']['smallimage'];?> (345x243)</label>
                                            <input type="file" id="small_image" name="small_image">
                                            <p class="help-block">
                                                <?php if($article->thumb_image): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Blog::getImageUrl($article->thumb_image, true); ?>" width="150" /> | 
                                                <a href="<?php echo Blog::getImageUrl($article->thumb_image, true); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-small-image&id=<?php echo $id; ?>" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['showonhomepage'];?></label>
                                            <select class="form-control" name="show_on_homepage">
                                                <option <?php echo $article->show_on_homepage ? "selected='selected'" : ""; ?> value="1">Yes</option>
                                                <option <?php echo !$article->show_on_homepage ? "selected='selected'" : ""; ?> value="0">No</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['status'];?></label>
                                            <select class="form-control" name="status">
                                                <option <?php echo $article->status ? "selected='selected'" : ""; ?> value="1">Published</option>
                                                <option <?php echo !$article->status ? "selected='selected'" : ""; ?> value="0">Draft</option>
                                            </select>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label><?php echo $lang['table']['seot'];?></label>
                                            <input type="text"  class="form-control"  value="<?php echo $article->seo_title; ?>" name="seo_title" placeholder="SEO Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['seok'];?></label>
                                            <input type="text"  class="form-control"  value="<?php echo $article->seo_keywords; ?>" name="seo_keywords" placeholder="SEO Keywords ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['seod'];?></label>
                                            <textarea class="form-control" name="seo_description"   rows="3" placeholder="SEO Description ..."><?php echo $article->seo_description; ?></textarea>
                                        </div>
                                        
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['editblogarticle'];?></button>
                                        </div>
                                        
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                        
                    </div><!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>
        <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(function() {
                CKEDITOR.replace('editor1');
            });
        </script>
    </body>
</html>