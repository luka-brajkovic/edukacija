<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    $request    = Request::instance();
    $data       = $request->getAllParams();
    $active     = 'administrator';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Administrators | <?php echo $applicationConfig['name']; ?></title>
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
                        Emails
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Emails</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                      if(isset($data['success'])) {
                        switch($data['success']) {
                          case "remove":
                            $message = "Email removed successfully.";
                            break;
                          case "add":
                            $message = "Email added successfully.";
                            break;
                          case "edit":
                            $message = "Email updated successfully.";
                            break;
                        }
                        ?>  
                        <div class="alert alert-success alert-dismissable">
                          <i class="fa fa-check"></i>
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <b>Success!</b> <?php echo $message; ?>
                        </div>
                        <?php
                      }
                    ?>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">List of Emails</h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="admin_search" id="admin-search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button id="admin-search-button" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover" id="admin-table">
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="first_name">Title</th>
                                            <th data-field="last_name">Subject</th>
                                        </tr>
                                        <?php 
                                          $emails = CcsEmail::getEmails();
                                          foreach($emails as $email) {
                                            ?>
                                            <tr class="table-row">
                                              <td><?php echo $email['id']; ?></td>
                                              <td><?php echo $email['title']; ?></td>
                                              <td><?php echo $email['subject']; ?></td>
                                              <td>
                                                <a href="<?php echo APP_URL . 'emails/edit.php?id=' . $email['id']; ?>" class="btn btn-primary"></i>Edit</a>
                                              </td>
                                            </tr>
                                            <?php
                                          }
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            <!--<a href="<?php //echo APP_URL; ?>emails/add.php" class="btn btn-lg btn-success">Add Email</a>-->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>

    </body>
</html>