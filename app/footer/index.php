<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    $request    = Request::instance();
    $data       = $request->getAllParams();
    $active     = 'footer';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['footergroup'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['footergroup'];?>
                        <small><?php echo $lang['table']['footer'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $lang['side-bar']['footer'];?></a></li>
                        <li class="active"><?php echo $lang['table']['footergroup'];?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                      if(isset($data['success'])) {
                        switch($data['success']) {
                          case "remove":
                            $message = "Footer group removed successfully.";
                            break;
                          case "add":
                            $message = "Footer group successfully.";
                            break;
                          case "edit":
                            $message = "Footer group updated successfully.";
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
                                      <?php echo $lang['table']['footergroup'];?>
                                    </h3>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover" id="footer-group">
                                        <tr class="header">
                                            <th data-field="id"><?php echo $lang['table']['id'];?></th>
                                            <th data-field="name"><?php echo $lang['table']['name'];?></th>
                                            <th data-field="show_title"><?php echo $lang['table']['showtitle'];?></th>
                                            <th data-field="actions"><?php echo $lang['table']['actions'];?></th>
                                        </tr>
                                        <?php
                                          $groups   = FooterGroup::getAllFooterGroups();
                                          foreach($groups as $group) {
                                            $numberOfLinks  = FooterGroup::getNumberOfLinks($group['id']);
                                            $canRemoveGroup = FooterGroup::canRemoveFooterGroup($group['id']);
                                            ?>
                                            <tr class="table-row" id="item_<?php echo $group['id']; ?>">
                                              <td><?php echo $group['id']; ?></td>
                                              <td><?php echo $group['title']; ?></td>
                                              <td><?php echo $group['show_title'] ? 'Yes' : 'No'; ?></td>
                                              <td>
                                                <a href="<?php echo APP_URL . 'footer/edit.php?groupID=' . $group['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="#" class="btn btn-sm btn-info handle"><?php echo $lang['table']['reorder'];?></a>
                                                <a href="<?php echo APP_URL . 'footer/work.php?action=remove&groupID=' . $group['id']; ?>" 
                                                   class="btn btn-sm btn-danger remove-action <?php echo !$canRemoveGroup ? 'disabled' : ''; ?>" 
                                                   data-remove-msg="Are you sure want to remove this footer group?"><?php echo $lang['table']['remove'];?></a>
                                                <a href="<?php echo APP_URL . 'footer/link/index.php?groupID=' . $group['id']; ?>" class="btn btn-sm btn-info"><?php echo $lang['table']['links'];?> (<?php echo $numberOfLinks; ?>)</a>
                                              </td>
                                            </tr>
                                            <?php
                                          }
                                        ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <a href="<?php echo APP_URL; ?>footer/add.php" class="btn btn-lg btn-success"><?php echo $lang['table']['addfootergroup'];?></a>
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>

    </body>
</html>