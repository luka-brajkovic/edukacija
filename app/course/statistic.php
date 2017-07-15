
<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $active     = 'course';
    $request  = Request::instance();
    $id       = $request->getParam('id');
    $object  = Course::getStatsForCourse($id);

    
    
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['side-bar']['course'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                    <h1><?php echo $lang['side-bar']['course'];?>
                        <small>Home</small>
                    </h1>
                    
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $lang['side-bar']['course'];?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    
                
                    
                    <div class="row">
                        <div class="col-xs-12">
                            
                              <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">
                                      Stats
                                    </h3>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive">
                                    
                                    <label>Course attendies:</label> <?php echo $object['attendings']; ?> <br /> 
                                    <label>Unique attendies:</label> <?php echo $object['NumberOfUsersThatTrierd']; ?><br />
                                    <label>Users that passed test:</label><?php echo $object['countPass']; ?><br />
                                    <label>Users that failed test:</label> <?php echo $object['NumberOfUsersThatTrierd'] - $object['countPass']; ?> <br />
                                  
                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            
                        
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>

    </body>
</html>