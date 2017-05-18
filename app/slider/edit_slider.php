<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request = Request::instance();
    $id = $request->getParam('id');
    $active     = 'Photo Gallery';
    
    $object = Model::find('slider', $id);
    
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['editslider'];?> - <?php echo $object->name; ?> - Bglobal | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['editslider'];?>  - <?php echo $object->title; ?>
                        <small><?php echo $lang['table']['slider'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $lang['table']['slider'];?></a></li>
                        <li class="active"><?php echo $lang['table']['editslider'];?>  - <?php echo $object->title; ?></li>
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
                                    <form role="form" action="work.php?action=edit_1" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['title'];?></label>
                                            <input type="text" class="form-control" value="<?php echo $object->title; ?>" name="title" placeholder="Title ..."/>
                                        </div>
                                      
                                         <div class="form-group">
                                            <label><?php echo $lang['table']['showonhomepage'];?></label>
                                            <select class="form-control" name="show_on_homepage">
                                                <option <?php echo $object->show_on_homepage == "0" ? 'selected="selected"' : ''; ?> value="0">No</option>
                                                <option <?php echo $object->show_on_homepage =="1" ? 'selected="selected"' : ''; ?> value="1">Yes</option>
                                            </select>
                                        </div>
                                        
                                        
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['editslider'];?></button>
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