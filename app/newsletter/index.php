<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $active     = 'newsletter';
   
    $emails     = Newsleatter::getAllEmails();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['side-bar']['newsletter'];?>  | <?php echo $applicationConfig['name']; ?></title>
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
                    <h1><?php echo $lang['side-bar']['newsletter'];?> 
                        <small>Home</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $lang['side-bar']['newsletter'];?> </li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">
                                      Orders
                                    </h3>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover" id="category-table">
                                        <tr class="header">
                                            <th data-field="id"><?php echo $lang['table']['firstname'];?> </th>
                                            <th data-field="name"><?php echo $lang['table']['lastname'];?></th>
                                            <th data-field="id"><?php echo $lang['table']['email'];?></th>
                                            <th data-field="name"><?php echo $lang['table']['date'];?></th>
                                            
                                        </tr>
                                        <?php 
                                          foreach($emails as $email) {
                                            ?>
                                        <tr>
                                             <td><?php echo $email['first_name']; ?></td>
                                             <td><?php echo $email['last_name']; ?></td>
                                             <td><?php echo $email['email']; ?></td>
                                             <td><?php echo date("d.m.Y. H:i:s", $email['ctime']); ?></td>
                                              
                                            </tr>
                                            <?php
                                          }
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <a href="<?php echo APP_URL; ?>newsletter/work.php" class="btn btn-lg btn-success"><?php echo $lang['table']['download'];?></a>
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>

    </body>
</html>

