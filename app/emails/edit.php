<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request    = Request::instance();
    $id = $request->getParam('id');
    
    $emailObject  = new View('ccs_email', $id);
    $active       = 'email';
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
                        Edit Email - <?php echo $emailObject->title; ?>
                        <small>Administrators</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> Emails</a></li>
                        <li class="active">Edit Email</li>
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
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" value="<?php echo $emailObject->title; ?>" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" name="subject" value="<?php echo $emailObject->subject; ?>" placeholder="Subject ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Content</label>
                                            <?php
                                            $content = trim($emailObject->content);
                                            ?>
                                            <textarea rows="10" type="text" class="form-control" name="content" placeholder="Content ..."/><?php echo $content; ?></textarea>
                                        </div>
                                        
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                                        
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