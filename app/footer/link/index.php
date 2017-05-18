<?php
    $languepath = 1;
    require '../../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    $request    = Request::instance();
    $data       = $request->getAllParams();
    
    $groupID    = $request->getParam('groupID');
    $group      = Model::find('footer_group', $groupID);
    
    $active     = 'footer';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Footer Links | <?php echo $applicationConfig['name']; ?></title>
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
                        Footer Links for "<?php echo $group->name; ?>"
                        <small>Group Proterm</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li>Group Proterm</li>
                        <li class="active">Footer Link</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                      if(isset($data['success'])) {
                        switch($data['success']) {
                          case "remove":
                            $message = "Footer link removed successfully.";
                            break;
                          case "add":
                            $message = "Footer link successfully.";
                            break;
                          case "edit":
                            $message = "Footer link updated successfully.";
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
                                      Footer Links for "<?php echo $group->name; ?>"
                                    </h3>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover" id="footer-links">
                                        <tr class="header">
                                            <th data-field="id">ID</th>
                                            <th data-field="title">Title</th>
                                            <th data-field="url">Url</th>
                                            <th data-field="new-tab">Open In New Tab?</th>
                                            <th data-field="actions">Actions</th>
                                        </tr>
                                        <?php 
                                          $links = FooterLink::getAllFooterLink($groupID);
                                          foreach($links as $link) {
                                            ?>
                                            <tr class="table-row" id="item_<?php echo $link['id']; ?>">
                                              <td><?php echo $link['id']; ?></td>
                                              <td><?php echo $link['title']; ?></td>
                                              <td><?php echo $link['url']; ?></td>
                                              <td><?php echo $link['new_tab'] ? 'Yes' : 'No'; ?></td>
                                              <td>
                                                <a href="<?php echo APP_URL . 'footer/link/edit.php?id=' . $link['id']; ?>&groupID=<?php echo $groupID; ?>" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="#" class="btn btn-sm btn-info handle">Reorder</a>
                                                <a href="<?php echo APP_URL . 'footer/link/work.php?action=remove&id=' . $link['id']; ?>&groupID=<?php echo $groupID; ?>" 
                                                   class="btn btn-sm btn-danger remove-action" 
                                                   data-remove-msg="Are you sure want to remove this footer link?">Remove</a>
                                              </td>
                                            </tr>
                                            <?php
                                          }
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            <a href="<?php echo APP_URL; ?>footer/link/add.php?groupID=<?php echo $groupID; ?>" class="btn btn-lg btn-success">Add Footer Link</a>
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../../includes/scripts.php'; ?>

    </body>
</html>