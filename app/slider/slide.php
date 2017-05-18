<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $active     = 'slider';
    $request    = Request::instance();
    $objectID   = $request->getParam('parentID');
    
    $object = Model::find('slider_slide', $objectID);
   
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['side-bar']['slide'];?> from  <?php echo $object->name; ?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['side-bar']['slide'];?> from <?php echo $object->name; ?>
                        <small>Home</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $lang['side-bar']['slide'];?> from <?php echo $object->name; ?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                      if(isset($data['success'])) {
                        switch($data['success']) {
                          case "remove":
                            $message = "Slide removed successfully.";
                            break;
                          case "add":
                            $message = "Slide added successfully.";
                            break;
                          case "edit":
                            $message = "Slide updated successfully.";
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
                                      <?php echo $lang['side-bar']['slide'];?> from <?php echo $object->name; ?>
                                    </h3>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover resizeblearticle" id="category-table" parent="<?php echo $parentID; ?>">
                                        <tr class="header">
                                            <th data-field="id">ID</th>
                                            <th data-field="name"><?php echo $lang['table']['name'];?></th>

                                            <th data-field="leed"><?php echo $lang['table']['image'];?></th>
                                            
                                            <th data-field="actions"><?php echo $lang['table']['actions'];?></th>
                                        </tr>
                                        <?php 
                                          
                                          $objectsData = Slider::getSlideForSlider($objectID, 1, 10000000);
                                
                                          foreach($objectsData['data'] as $object) {
                                            ?>
                                            <tr class="table-row" id="item_<?php echo $object['id']; ?>">
                                              <td><?php echo $object['id']; ?></td>
                                              <td><?php echo $object['title']; ?></td>
     
                                              <td>
                                                  <?php
                                                  if($object['image']) {
                                                    $image = Slider::getImageUrl($object['image']);
                                                    ?>
                                                    <img width="144" src="<?php echo $image; ?>" />
                                                    <?php
                                                  }
                                                  else {
                                                    echo "No image";
                                                  }
                                                ?>
                                              </td>
                                             
                                              <td>
                                                <a href="<?php echo APP_URL . 'slider/edit_slide.php?id=' . $object['id']; ?>" class="btn btn-sm btn-primary"><?php echo $lang['table']['edit'];?></a>
                                                <a href="#" class="btn btn-sm btn-info handle"><?php echo $lang['table']['reorder'];?></a>
                                                <a href="<?php echo APP_URL . 'slider/work.php?action=remove_2&id=' . $object['id']; ?>" 
                                                      class="btn btn-sm btn-danger remove-action" 
                                                      data-remove-msg="Are you sure want to remove this page?"><?php echo $lang['table']['remove'];?></a>
                                                </a> 
                                              </td>
                                            </tr>
                                            <?php
                                          }
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            <a href="<?php echo APP_URL; ?>slider/add_slide.php?parentID=<?php echo $objectID; ?>" class="btn btn-lg btn-success">Add New Image</a>
                            
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>

    </body>
</html>