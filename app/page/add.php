<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $active     = 'page';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['addpage'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['addpage'];?> 
                        <small><?php echo $lang['table']['pages'];?> </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $lang['table']['pages'];?> </a></li>
                        <li class="active"><?php echo $lang['table']['addpage'];?> </li>
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
                                    <form role="form" action="work.php?action=add" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['title'];?> </label>
                                            <input type="text" class="form-control" name="title" placeholder="Title ..."/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label><?php echo $lang['table']['seot'];?> </label>
                                            <input type="text" class="form-control" name="seo_title" placeholder="SEO Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['seok'];?> </label>
                                            <input type="text" class="form-control" name="seo_keywords" placeholder="SEO Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['seod'];?> </label>
                                            <textarea class="form-control" name="seo_description" rows="3" placeholder="SEO Description ..."></textarea>
                                        </div>
                                        
                                       
                                      
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['text'];?> </label>
                                            <textarea id="editor1" class="form-control" name="text" rows="3" placeholder="Text ..."></textarea>
                                        </div>
                                        
                                       
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['addpage'];?> </button>
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