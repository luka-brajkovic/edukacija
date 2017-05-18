<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $active     = 'slider';
    $request    = Request::instance();
    $parentID   = $request->getParam('parentID');
    $data       = $request->getAllParams();
    
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['side-bar']['slider'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['side-bar']['slider'];?>
                        <small>Home</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $lang['side-bar']['slider'];?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                      if(isset($data['success'])) {
                        switch($data['success']) {
                          case "remove":
                            $message = "Slider removed successfully.";
                            break;
                          case "add":
                            $message = "Slider added successfully.";
                            break;
                          case "edit":
                            $message = "Slider updated successfully.";
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
                                      <?php echo $lang['side-bar']['slider'];?>
                                    </h3>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover resizeble" id="category-table" parent="<?php echo $parentID; ?>">
                                        <tr class="header">
                                            <th data-field="id">ID</th>
                                            <th data-field="name"><?php echo $lang['table']['name'];?></th>
                                           
                                            <th data-field="actions"><?php echo $lang['table']['actions'];?></th>
                                        </tr>
                                        <?php 
                                          
                                          $objects = slider::getAllGallerys();
                                          foreach($objects as $object) {
                                            ?>
                                            <tr class="table-row" id="item_<?php echo $object['id']; ?>">
                                              <td><?php echo $object['id']; ?></td>
                                              <td><?php echo $object['title']; ?></td>
                                              
                                              <td>
                                                <a href="<?php echo APP_URL . 'slider/edit_slider.php?id=' . $object['id']; ?>" class="btn btn-sm btn-primary"><?php echo $lang['table']['edit'];?></a>
                                       
                                                <?php 
                                                  if($object['a_num'] == 0) {
                                                    ?>
                                                    <a href="<?php echo APP_URL . 'slider/work.php?action=remove_1&id=' . $object['id']; ?>" 
                                                      class="btn btn-sm btn-danger remove-action" 
                                                      data-remove-msg="Are you sure want to remove this page?"><?php echo $lang['table']['remove'];?></a>
                                                    <?php
                                                  }
                                                ?>
                                                <a href="<?php echo APP_URL . 'slider/slide.php?parentID=' . $object['id']; ?>" 
                                                   class="btn btn-sm btn-info">
                                                    <?php echo $lang['table']['listslides'];?>(<?php echo $object['a_num']; ?>)
                                                </a> 
                                              </td>
                                            </tr>
                                            <?php
                                          }
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            <a href="<?php echo APP_URL; ?>slider/add_slider.php" class="btn btn-lg btn-success">Add Slider</a>
                            
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>

    </body>
</html>