<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request = Request::instance();
    
    $parentID = $request->getParam('parentID');
    $active     = 'slider';
    
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['addslide'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['addslide'];?>
                        <small><?php echo $lang['table']['slider'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $lang['table']['slider'];?></a></li>
                        <li class="active"><?php echo $lang['table']['addslide'];?></li>
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
                                    <form role="form" action="work.php?action=add_2" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['title'];?></label>
                                            <input type="text" class="form-control" name="title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['url'];?></label>
                                            <input type="text" class="form-control" name="url" placeholder="<?php echo $lang['table']['url'];?> ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['text'];?></label>
                                            <textarea id="editor1" class="form-control" name="text" rows="3" placeholder="Text ..."></textarea>
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label for="image"><?php echo $lang['table']['image'];?> (870x200)</label>
                                            <input type="file" id="image" name="image">
                                        </div>
                                      
                                      
                                        <input type="hidden" name="parent_id" value="<?php echo $parentID; ?>" />
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['addslide'];?></button>
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