<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request  = Request::instance();
    $question_id       = $request->getParam('id');
    $active = 'course';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['addhtmlbox'];?></title>
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
                        <?php echo $lang['table']['addcourse'];?>
                        <small><?php echo $lang['table']['course'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i><?php echo $lang['table']['course'];?></a></li>
                        <li class="active"><?php echo $lang['table']['addcourse'];?></li>
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
                                    <form role="form" action="work.php?action=add_question_answer" method="post" enctype='multipart/form-data'>

                                        <input type="hidden" value="<?php echo $question_id;?>" name="course_question_id">
            
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['text'];?></label>
                                            <textarea id="editor1" class="form-control" name="text" rows="3" placeholder="Description ..."></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>is corect Answer</label>
                                            <select name ="is_correct_answer">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        
                                        
                                        
                                     
                                        
                                        <br /><br /><br /><br /><br /><br /><br />
                                        
                                        
                                        
                                        
                                       <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['addcourse'];?></button>
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
        <script src="//cdn.ckeditor.com/4.4.3/full/ckeditor.js"></script>
        <script src="<?php echo $applicationConfig['assets_path']; ?>/js/jquery.simple-dtpicker.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
            
            });
            

           
                                     
        </script>
       
    </body>
</html>