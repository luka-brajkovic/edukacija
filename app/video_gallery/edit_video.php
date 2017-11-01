<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request = Request::instance();
    
    $id = $request->getParam('id');
    $object = Model::find("course_video", $id);
    
    $active     = 'video_gallery';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['editvideo'];?>  <?php echo $object->title; ?>  | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['editvideo'];?> <?php echo $object->title; ?>
                        <small><?php echo $lang['table']['videogallery'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $lang['table']['videogallery'];?></a></li>
                        <li class="active"><?php echo $lang['table']['editvideo'];?> <?php echo $object->title; ?></li>
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
                                    <form role="form" action="work.php?action=edit_2" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['title'];?></label>
                                            <input type="text" class="form-control" name="title" value="<?php echo $object->title; ?>" placeholder="Title ..."/>
                                        </div>
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['video'];?> <?php echo $lang['table']['url'];?></label>
                                            <input type="text" class="form-control" name="video_url" value="<?php echo $object->url; ?>" placeholder="Video URL ..."/>
                                        </div>

                                   
                                   

                                     
                                        
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['editvideo'];?></button>
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