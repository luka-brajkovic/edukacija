

<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $active     = 'course';
    $request    = Request::instance();
    
    $data       = $request->getAllParams();
   
    $calltoactions  = Course::getAll();
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['side-bar']['course'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                    <h1><?php echo $lang['side-bar']['course'];?>
                        <small>Home</small>
                    </h1>
                    
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $lang['side-bar']['course'];?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                      if(isset($data['success'])) {
                        switch($data['success']) {
                          case "remove":
                            $message = "Product removed successfully.";
                            break;
                          case "add":
                            $message = "Product added successfully.";
                            break;
                          case "edit":
                            $message = "Product updated successfully.";
                            break;
                          case "active":
                            $message = "Product activated successfully.";
                            break;
                          case "inactive":
                            $message = "Product deactivated successfully.";
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
                                      <?php echo $lang['side-bar']['course'];?>
                                    </h3>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover resizeble_course" id="category-table" parent="<?php echo $parentID; ?>">
                                        <input type="hidden" id="table-for-order" value="1" >
                                        <tr class="header">
                                            <th data-field="id">ID</th>
                                            <th data-field="name"><?php echo $lang['table']['name'];?></th>
                                            <th data-field="image"><?php echo $lang['table']['icon'];?></th>
                                            <th data-field="actions"><?php echo $lang['table']['actions'];?></th>
                                        </tr>
                                        <?php 
                                          foreach($calltoactions as $calltoaction) {
                                           
                                            ?>
                                           <tr class="table-row" id="item_<?php echo $calltoaction['id']; ?>">
                                                <td><?php echo $calltoaction['id']; ?></td>
                                              <td><?php echo Utils::decodeString($calltoaction['title']); ?></td>
                                              <td>
                                                  
                                                  <?php
                                                    $image = Course::getImageUrl($calltoaction['image']);
                                                    if($image) {
                                                      ?>
                                                      <img width="80" src="<?php echo $image; ?>" />
                                                      <?php
                                                    }
                                                    else {
                                                      echo "No image";
                                                    }
                                                  ?>
                                              </td>
                                              <td>
                                                <a href="#" class="btn btn-sm btn-info handle"><?php echo $lang['table']['reorder'];?></a>
                                                <a href="<?php echo APP_URL . 'course/edit.php?id=' . $calltoaction['id']; ?>" class="btn btn-sm btn-primary"><?php echo $lang['table']['edit'];?></a>
                                                <a href="<?php echo APP_URL . 'course/course_attendings.php?id=' . $calltoaction['id']; ?>" class="btn btn-sm btn-primary">Course Attendings</a>
                                                <a href="<?php echo APP_URL . 'course/statistic.php?id=' . $calltoaction['id']; ?>" class="btn btn-sm btn-primary">Statistic</a>
                     
                                                <a href="<?php echo  APP_URL ."course/cours_user.php?id=" . $calltoaction['id'];?>" class="btn btn-sm btn-info handle"><?php echo "add user to course";?></a>
                                                <a href="<?php echo  APP_URL ."course/course_questions.php?course_id=" . $calltoaction['id'];?>" class="btn btn-sm btn-info "><?php echo "Questions for course ( " .$calltoaction['a_num']. " )";?></a>
                                                <?php if (!$calltoaction['a_num']){  echo "<a href=". APP_URL ."course/work.php?action=remove&id=" . $calltoaction['id']." class='btn btn-sm btn-danger'>". $lang['table']['remove']."</a>"; }?>
                                                    
                                              </td>
                                            </tr>
                                            <?php
                                          }
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                                 
                            </div><!-- /.box -->
                            <a href="<?php echo APP_URL; ?>course/add.php" class="btn btn-lg btn-success"><?php echo $lang['table']['addcourse'];?></a>
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>

    </body>
</html>