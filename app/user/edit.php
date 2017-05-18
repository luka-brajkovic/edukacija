<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request    = Request::instance();
    $id         = $request->getParam('id');
    
    $userObject  = new View('user', $id);
    
    $active = 'user';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Edit User | <?php echo $applicationConfig['name']; ?></title>
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
                        Edit User - <?php echo $userObject->first_name . " " . $userObject->last_name; ?>
                        <small>User</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> Users</a></li>
                        <li class="active">Edit User</li>
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
                                            <label>First Name</label>
                                            <input type="text" class="form-control" value="<?php echo $userObject->first_name; ?>" name="first_name" placeholder="First Name ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" value="<?php echo $userObject->last_name; ?>" name="last_name" placeholder="Last Name ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="<?php echo $userObject->email; ?>" name="email" placeholder="Email ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" value="<?php echo $userObject->address; ?>" name="address" placeholder="Address..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Zip</label>
                                            <input type="text" class="form-control" value="<?php echo $userObject->zip; ?>" name="zip" placeholder="Zip..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" value="<?php echo $userObject->city; ?>" name="city" placeholder="city..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control" value="<?php echo $userObject->country; ?>" name="country" placeholder="Country..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" value="<?php echo $userObject->phone; ?>" name="phone" placeholder="Phone..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>IP Address</label>
                                            <input type="text" class="form-control" value="<?php echo $userObject->ip; ?>" name="ip" placeholder="IP Address..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="active">
                                                <option value="1" <?php echo $userObject->active == 1 ? 'selected="selected"' : ''; ?>>Active</option>
                                                <option value="0" <?php echo $userObject->active == 0 ? 'selected="selected"' : ''; ?>>Inactive</option>
                                            </select>
                                        </div>
                                        
                                        <input type="hidden" value="<?php echo $id; ?>" name="id" />
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary">Submit</button>
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