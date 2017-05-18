<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request = Request::instance();
    $id = $request->getParam('id');
    $active     = 'blog';
    
    $category = Model::find('blog_category', $id);
    
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['addblogcategory'];?> - <?php echo $category->name; ?> - Bglobal | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['editblogcategory'];?> - <?php echo $category->title; ?>
                        <small><?php echo $lang['table']['blog'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $lang['table']['blog'];?></a></li>
                        <li class="active"><?php echo $lang['table']['editblogcategory'];?> - <?php echo $category->title; ?></li>
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
                                    <form role="form" action="work.php?action=edit_cat" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['title'];?></label>
                                            <input type="text" class="form-control" value="<?php echo $category->title; ?>" name="title" placeholder="Title ..."/>
                                        </div>
                                      
                                           
                                        <div class="form-group">
                                            <label for="image"><?php echo $lang['table']['image'];?> (144x66px)</label>
                                            <input type="file" id="image" name="image">
                                            <p class="help-block">
                                                <?php if($category->image): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Blog::getImageUrl($category->image); ?>" width="150" /> | 
                                                <a href="<?php echo Blog::getImageUrl($category->image); ?>" target="_blank">View Image</a> | 
                                                <a href="work.php?action=remove-image-category&id=<?php echo $id; ?>" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['seot'];?></label>
                                            <input type="text"  class="form-control"  value="<?php echo $category->seo_title; ?>" name="seo_title" placeholder="SEO Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['seok'];?></label>
                                            <input type="text"  class="form-control"  value="<?php echo $category->seo_keywords; ?>" name="seo_keywords" placeholder="SEO Keywords ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['seod'];?></label>
                                            <textarea class="form-control" name="seo_description"   rows="3" placeholder="SEO Description ..."><?php echo $category->seo_description; ?></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['description'];?></label>
                                            <textarea id="editor1" class="form-control" name="description"   rows="3" placeholder="Description ..."><?php echo $category->description; ?></textarea>
                                        </div>
                                        
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['editblogcategory'];?></button>
                                        </div>
                                        
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                        
                    </div><!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <?php include '../includes/scripts.php'; ?>
         <script src="//cdn.ckeditor.com/4.4.3/full/ckeditor.js"></script>
        <script type="text/javascript">
            $(function() {        
                CKEDITOR.replace('editor1');
            });
        </script>

    </body>
</html>