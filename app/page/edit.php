<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request  = Request::instance();
    $id       = $request->getParam('id');
    $page     = Model::find('page', $id);
    
    $active     = 'page';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['editpage'];?> - Bglobal | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['editpage'];?> - <?php echo $page->title; ?>
                        <small><?php echo $lang['table']['page'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $lang['table']['page'];?></a></li>
                        <li class="active"><?php echo $lang['table']['editpage'];?></li>
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
                                    <form role="form" action="work.php?action=edit" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['title'];?></label>
                                            <input type="text" class="form-control" value="<?php echo $page->title; ?>" name="title" placeholder="Title ..."/>
                                        </div>
                                      
                                         <div class="form-group">
                                            <label><?php echo $lang['table']['seot'];?></label>
                                            <input type="text" class="form-control" value="<?php echo $page->seo_title; ?>" name="seo_title" placeholder="SEO Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['seok'];?></label>
                                            <input type="text" class="form-control" value="<?php echo $page->seo_keywords; ?>" name="seo_keywords" placeholder="SEO Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['seod'];?></label>
                                            <textarea class="form-control"  name="seo_description" rows="3" placeholder="SEO Description ..."><?php echo $page->seo_description; ?></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['text'];?></label>
                                            <textarea id="editor1" class="form-control" name="text" rows="3" placeholder="Text ..."><?php echo $page->text; ?></textarea>
                                        </div>
                                       
                                        
                                        
                                        
                                        <input type="hidden" name="id" value="<?php echo $page->id; ?>" />
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['editpage'];?></button>
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
                CKEDITOR.replace('editor2');
            });
        </script>

    </body>
</html>