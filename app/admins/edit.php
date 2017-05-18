<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request    = Request::instance();
    $id = $request->getParam('id');
    
    $adminObject  = new View('administrator', $id);
    $active       = 'administrator';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Edit Administrator | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['editaministrator'];?> - <?php echo $adminObject->first_name . " " . $adminObject->last_name; ?>
                        <small><?php echo $lang['table']['administrators'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $lang['table']['administrators'];?></a></li>
                        <li class="active"><?php echo $lang['table']['editaministrator'];?></li>
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
                                    <form role="form" action="work.php?action=edit" method="post">
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['firstname'];?></label>
                                            <input type="text" class="form-control" name="first_name" value="<?php echo $adminObject->first_name; ?>" placeholder="First Name ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['lastname'];?></label>
                                            <input type="text" class="form-control" name="last_name" value="<?php echo $adminObject->last_name; ?>" placeholder="Last Name ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['email'];?></label>
                                            <input type="text" class="form-control" value="<?php echo $adminObject->email; ?>" name="email" placeholder="Email ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['password'];?></label>
                                            <input type="password" class="form-control" name="password"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['confirmpassword'];?></label>
                                            <input type="password" class="form-control" name="confirm_password"/>
                                        </div>
                                        
                                        <input type="hidden" name="admin_id" value="<?php echo $id; ?>" /> 
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['editaministrator'];?></button>
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