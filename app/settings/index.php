<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    $request    = Request::instance();
    $data       = $request->getAllParams();
    $active     = 'settings';
    
    $settings   = Settings::getAllSettings();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> <?php echo $lang['table']['settings'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['settings'];?>
                        <small>Home</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"> <?php echo $lang['table']['settings'];?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                      if(isset($data['success'])) {
                        switch($data['success']) {
                          case "update":
                            $message = "Settings updated successfully.";
                            break;
                          case "clear-cache":
                            $message = "Cache cleared successfully.";
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
                                    <h3 class="box-title">
                                       <?php echo $lang['table']['settings'];?>
                                    </h3>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive no-padding">
                                    
                                    <form role="form" action="work.php?action=update" method="post" style="padding: 10px;">
                                        
                                        <div class="form-group">
                                            <label> <?php echo $lang['table']['title'];?></label>
                                            <input type="text" value="<?php echo $settings['site_title']; ?>" class="form-control" name="site_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label> <?php echo $lang['table']['description'];?></label>
                                            <textarea id="editor1" class="form-control" name="site_description" rows="3" placeholder="Description ..."><?php echo $settings['site_description']; ?></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input type="text" value="<?php echo $settings['site_keywords']; ?>" class="form-control" name="site_keywords" placeholder="Keywords ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label> <?php echo $lang['table']['email'];?></label>
                                            <input type="text" value="<?php echo $settings['site_email']; ?>" class="form-control" name="site_email" placeholder="Email ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Copyright</label>
                                            <input type="text" value="<?php echo $settings['copyright_text']; ?>" class="form-control" name="copyright_text" placeholder="Copyright ..."/>
                                        </div>
                                        
                                        
                                      
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['address'];?></label>
                                            <input type="text" value="<?php echo $settings['address']; ?>" class="form-control" name="address" placeholder="Footer address ..."/>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['mapcoordinates'];?></label>
                                            <input type="text" value="<?php echo $settings['map_coordinates']; ?>" class="form-control" name="map_coordinates" placeholder="Footer Phone ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['phone'];?></label>
                                            <input type="text" value="<?php echo $settings['phone']; ?>" class="form-control" name="phone" placeholder="Footer Phone ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Skype</label>
                                            <input type="text" value="<?php echo $settings['skype']; ?>" class="form-control" name="skype" placeholder="Footer Phone ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Facebook <?php echo $lang['table']['page'];?></label>
                                            <input type="text" value="<?php echo $settings['facebook']; ?>" class="form-control" name="facebook" placeholder="Facebook Page ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Instagram <?php echo $lang['table']['page'];?></label>
                                            <input type="text" value="<?php echo $settings['instagram']; ?>" class="form-control" name="instagram" placeholder="Instagram Page ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Google Plus <?php echo $lang['table']['page'];?></label>
                                            <input type="text" value="<?php echo $settings['google']; ?>" class="form-control" name="google" placeholder="Google Plus Page ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Pinterest</label>
                                            <input type="text" value="<?php echo $settings['pinterest']; ?>" class="form-control" name="pinterest" placeholder="Google Plus Page ..."/>
                                        </div>
                                      
                                        
                                        
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary"> <?php echo $lang['table']['update'];?></button>
                                        </div>
                                        
                                    </form>
                                    
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