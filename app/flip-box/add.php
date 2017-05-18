<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request  = Request::instance();
   
    
    $active = 'flip-box';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['addflipbox'];?></title>
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
                        <?php echo $lang['table']['addflipbox'];?>
                        <small><?php echo $lang['table']['flipbox'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $lang['table']['flipbox'];?></a></li>
                        <li class="active"><?php echo $lang['table']['addflipbox'];?></li>
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
                                    <form role="form" action="work.php?action=add" method="post" enctype='multipart/form-data'>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['title'];?></label>
                                            <input type="text"  class="form-control" name="title" placeholder="Title ..."/>
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['text'];?></label>
                                            <textarea id="editor1" class="form-control" name="text" rows="3" placeholder="Description ..."></textarea>
                                        </div>
                                        
                                        
                                        <div class="box-header">
                                            <h3 class="box-title">
                                              <?php echo $lang['table']['icon'];?>
                                            </h3>
                                        </div>

                                        <div class="box-body">
                                              <div class="form-group">
                                                    <label for="image"> <?php echo $lang['table']['icon'];?></label>
                                                    <input type="file" id="image" name="icon">
                                                    
                                                </div>

                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <label><?php echo $lang['table']['buttontext'];?></label>
                                            <input type="text"  class="form-control" name="button_text" placeholder="Button text ..."/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label><?php echo $lang['table']['buttonurl'];?></label>
                                            <input type="text"  class="form-control" name="button_url" placeholder="Button url ..."/>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['addflipbox'];?></button>
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
        <script type="text/javascript">
            $(function() {
              
                CKEDITOR.replace('editor1');
            });
        </script>
        
    </body>
</html>