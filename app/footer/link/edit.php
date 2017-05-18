<?php
    $languepath = 1;
    require '../../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request  = Request::instance();
    $groupID  = $request->getParam('groupID');
    $group    = Model::find('footer_group', $groupID);
    $linkID   = $request->getParam('id');
    $link     = Model::find('footer_link', $linkID);
    
    $active     = 'footer';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['editfooterlink'];?>| <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['editfooterlink'];?>
                        <small>Footer</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $lang['table']['footergroup'];?></a></li>
                        <li class="active"><?php echo $lang['table']['editfooterlink'];?></li>
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
                                    <form role="form" action="work.php?action=edit" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['title'];?></label>
                                            <input type="text" class="form-control" value="<?php echo $link->title; ?>" name="title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['url'];?></label>
                                            <input type="text" class="form-control" value="<?php echo $link->url; ?>" name="url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['openinnewtab'];?></label>
                                            <select class="form-control" name="new_tab">
                                                <option <?php echo $link->new_tab ? 'selected="selected"' : ''; ?> value="1">Yes</option>
                                                <option <?php echo !$link->new_tab ? 'selected="selected"' : ''; ?> value="0">No</option>
                                            </select>
                                        </div>
                                        
                                        <input type="hidden" name="footer_group_id" value="<?php echo $groupID; ?>" />
                                        <input type="hidden" name="id" value="<?php echo $linkID; ?>" />
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['editfooterlink'];?></button>
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