

<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $active     = 'fun-fact';
    $request    = Request::instance();
    
    $data       = $request->getAllParams();
   
    $funFacts   = FunFact::getAllFunFact();
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['side-bar']['funfact'];?>  | <?php echo $applicationConfig['name']; ?></title>
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
                    <h1><?php echo $lang['side-bar']['funfact'];?>
                        <small>Home</small>
                    </h1>
                    
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $lang['side-bar']['funfact'];?></li>
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
                                      <?php echo $lang['side-bar']['funfact'];?>
                                    </h3>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover resizeble" id="category-table" parent="<?php echo $parentID; ?>">
                                        <tr class="header">
                                            <th data-field="id">ID</th>
                                            <th data-field="name"><?php echo $lang['table']['name'];?></th>
                                            <th data-field="image"><?php echo $lang['table']['icon'];?></th>
                                            <th data-field="actions"><?php echo $lang['table']['actions'];?></th>
                                        </tr>
                                        <?php 
                                          foreach($funFacts as $funFact) {
                                           
                                            ?>
                                           <tr class="table-row" id="item_<?php echo $funFact['id']; ?>">
                                                <td><?php echo $funFact['id']; ?></td>
                                              <td><?php echo Utils::decodeString($funFact['title']); ?></td>
                                              <td>
                                                  
                                                  <?php
                                                      echo $funFact['icon'];
                                                  ?>
                                              </td>
                                              <td>
                                                <a href="<?php echo APP_URL . 'fun-fact/edit.php?id=' . $funFact['id']; ?>" class="btn btn-sm btn-primary"><?php echo $lang['table']['edit'];?></a>
                                                <a href="#" class="btn btn-sm btn-info handle"><?php echo $lang['table']['reorder'];?></a>
                                                <?php   echo "<a href=". APP_URL ."fun-fact/work.php?action=remove&id=" . $funFact['id']." class='btn btn-sm btn-danger'>".$lang['table']['remove']."</a>"; ?>
                                                    
                                              </td>
                                            </tr>
                                            <?php
                                          }
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                                 
                            </div><!-- /.box -->
                            <a href="<?php echo APP_URL; ?>fun-fact/add.php" class="btn btn-lg btn-success"><?php echo $lang['table']['addfunfact'];?></a>
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>

    </body>
</html>