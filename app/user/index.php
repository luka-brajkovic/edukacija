<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    $request    = Request::instance();
    $data       = $request->getAllParams();
    $active     = 'user';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> <?php echo $lang['side-bar']['users'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['side-bar']['users'];?> 
                        <small>List of registered users</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $lang['side-bar']['users'];?> </li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                      if(isset($data['success'])) {
                        switch($data['success']) {
                          case "remove":
                            $message = "User removed successfully.";
                            break;
                          case "add":
                            $message = "User added successfully.";
                            break;
                          case "edit":
                            $message = "User updated successfully.";
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
                      if(isset($data['error'])) {
                        switch($data['error']) {
                          case "remove":
                            $message = "Error removing user.";
                            break;
                          case "add":
                            $message = "Error adding user.";
                            break;
                          case "edit":
                            $message = "Error editing user.";
                            break;
                        }
                        ?>  
                        <div class="alert alert-danger alert-dismissable">
                          <i class="fa fa-check"></i>
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <b>Error!</b> <?php echo $message; ?>
                        </div>
                        <?php
                      }
                    ?>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">List of <?php echo $lang['side-bar']['users'];?> </h3>
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
                                            <th data-field="first_name"><?php echo $lang['table']['firstname'];?> </th>
                                            <th data-field="last_name"><?php echo $lang['table']['lastname'];?></th>
                                            <th data-field="email"><?php echo $lang['table']['email'];?></th>
                                            <th data-field="active"><?php echo $lang['table']['isactive'];?></th>
                                            <th data-field="actions"><?php echo $lang['table']['actions'];?></th>
                                        </tr>
                                        <?php 
                                          $users = User::getAllUsers();
                                          foreach($users as $user) {
                                            ?>
                                            <tr class="table-row">
                                              <td><?php echo $user['id']; ?></td>
                                              <td><?php echo $user['first_name']; ?></td>
                                              <td><?php echo $user['last_name']; ?></td>
                                              <td><?php echo $user['email']; ?></td>
                                              <td><?php echo $user['active'] ? 'Active' : 'Inactive'; ?></td>
                                              <td>
                                                <a href="<?php echo APP_URL . 'user/edit.php?id=' . $user['id']; ?>" class="btn btn-primary"></i><?php echo $lang['table']['edit'];?></a>
                                                <a href="<?php echo APP_URL . 'user/work.php?action=remove&id=' . $user['id']; ?>" 
                                                   class="btn btn-danger remove-action" 
                                                   data-remove-msg="Are you sure want to remove this user?"></i><?php echo $lang['table']['remove'];?></a>
                                              </td>
                                            </tr>
                                            <?php
                                          }
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            <a href="<?php echo APP_URL; ?>user/add.php" class="btn btn-lg btn-success"><?php echo $lang['table']['adduser'];?></a>
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>

    </body>
</html>