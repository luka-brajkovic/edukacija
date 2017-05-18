<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $active     = 'footer';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['addfootergroup'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['addfootergroup'];?>
                        <small><?php echo $lang['table']['footer'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $lang['table']['footer'];?></a></li>
                        <li class="active"><?php echo $lang['table']['addfootergroup'];?></li>
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
                                            <label><?php echo $lang['table']['name'];?></label>
                                            <input type="text" class="form-control" name="name" placeholder="Name ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><label><?php echo $lang['table']['showtitle'];?></label></label>
                                            <select class="form-control" name="show_title">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><label><?php echo $lang['table']['addfootergroup'];?></label></button>
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

    </body>
</html>