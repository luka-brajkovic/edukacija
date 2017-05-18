<?php
    $languepath = 1;
    require '../../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request = Request::instance();
    $groupID = $request->getParam('groupID');
    $group   = Model::find('footer_group', $groupID);
    
    $active     = 'footer';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['addfooterlink'];?> | <?php echo $applicationConfig['name']; ?></title>
        <?php include '../../includes/head.php'; ?>
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        
        <?php include '../../includes/header.php'; ?>
        
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
            <?php include '../../includes/sidebar.php'; ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo $lang['table']['addfooterlink'];?> 
                        <small><?php echo $lang['table']['footer'];?> </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $lang['table']['addfooterlink'];?> </li>
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
                                            <label><?php echo $lang['table']['url'];?> </label>
                                            <input type="text" class="form-control" name="url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['openinnewtab'];?> </label>
                                            <select class="form-control" name="new_tab">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        
                                        <input type="hidden" name="footer_group_id" value="<?php echo $groupID; ?>" />
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['addfooterlink'];?> </button>
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
          
        <?php include '../../includes/scripts.php'; ?>

    </body>
</html>