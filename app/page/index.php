<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    $request    = Request::instance();
    $data       = $request->getAllParams();
    $active     = 'page';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['side-bar']['pages'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['side-bar']['pages'];?>
                        <small><?php echo $applicationConfig['name']; ?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><?php echo $applicationConfig['name']; ?></li>
                        <li class="active"><?php echo $lang['side-bar']['pages'];?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                      if(isset($data['success'])) {
                        switch($data['success']) {
                          case "remove":
                            $message = "Page removed successfully.";
                            break;
                          case "add":
                            $message = "Page added successfully.";
                            break;
                          case "edit":
                            $message = "Page updated successfully.";
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
                                      <?php echo $lang['side-bar']['pages'];?>
                                    </h3>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover" id="pages-table">
                                        <tr class="header">
                                            <th data-field="id">ID</th>
                                            <th data-field="title"><?php echo $lang['table']['title'];?></th>
                                            <th data-field="url">URL</th>
                                            <th data-field="actions"><?php echo $lang['table']['actions'];?></th>
                                        </tr>
                                        <?php 
                                          $pages = Page::getAllPages();
                                          foreach($pages as $page) {
                                            ?>
                                            <tr class="table-row">
                                              <td><?php echo $page['id']; ?></td>
                                              <td><?php echo $page['title']; ?></td>
                                              <td>
                                                  <?php
                                                    $pageUrl = WEB_URL .  "strana/" . $page['url'];
                                                  ?>
                                                  <a href="<?php echo $pageUrl; ?>" target="_blank"><?php echo $pageUrl; ?></a></td>
                                              <td>
                                                <a href="<?php echo APP_URL . 'page/edit.php?id=' . $page['id']; ?>" class="btn btn-sm btn-primary"><?php echo $lang['table']['edit'];?></a>
                                                <a href="<?php echo APP_URL . 'page/work.php?action=remove&id=' . $page['id']; ?>" 
                                                   class="btn btn-sm btn-danger remove-action" 
                                                   data-remove-msg="Are you sure want to remove this page?"><?php echo $lang['table']['remove'];?></a>
                                              </td>
                                            </tr>
                                            <?php
                                          }
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            <a href="<?php echo APP_URL; ?>page/add.php" class="btn btn-lg btn-success"><?php echo $lang['table']['addpage'];?></a>
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>

    </body>
</html>