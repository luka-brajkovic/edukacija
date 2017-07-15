

<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $active     = 'course';
    $request    = Request::instance();
    $id         = $request->getParam('id');
    $data       = $request->getAllParams();
                          
    $objects  = Seminar::getSeminarAttendings($id);
    

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
                                <input type="hidden" id="table-for-order" value="3" >
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover resizeble_course" id="category-table" parent="<?php echo $parentID; ?>">
                                        <tr class="header">
                                            <th data-field="id">ID</th>
                                            <th data-field="name">Seminar</th>
                                            <th data-field="name">Correct Answers</th>
                                            <th data-field="name">IS Pass</th>

                                            <th data-field="actions"><?php echo $lang['table']['actions'];?></th>
                                        </tr>
                                        <?php 
                                          foreach($objects as $object) {
                                           
                                            ?>
                                           <tr class="table-row" id="item_<?php echo $object['id']; ?>">
                                                <td><?php echo $object['id']; ?></td>
                                              <td><?php echo $object['title']; ?></td>
                                              <td><?php echo $object['number_of_correct_anwers']."/".$object['number_of_questions']  ?></td>
                                              <td><?php echo ($object['is_pass'])? "Yes":"No"; ?></td>
                                              
                                              <td>
                                                  
                                                <a href="<?php echo APP_URL . 'user/attending.php?attending_id=' . $object['id']; ?>" class="btn btn-sm btn-primary">View Answers</a>
                                         
                                               
                                                    
                                              </td>
                                            </tr>
                                            <?php
                                          }
                                        ?>
                                    </table>
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