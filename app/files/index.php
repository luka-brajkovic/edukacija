<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    $request    = Request::instance();
    $data       = $request->getAllParams();
    $active     = 'files';
    
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Uploads | <?php echo $applicationConfig['name']; ?></title>
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
                        Uploads
                        <small>Home</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Uploads</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                      if(isset($data['success'])) {
                        switch($data['success']) {
                          case "update":
                            $message = "File uploaded successfully.";
                            break;
                          case "remove":
                            $message = "File removed successfully.";
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
                                      Uploads
                                    </h3>
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive">
                                    
                                    <form role="form" action="work.php?action=upload" method="post" style="padding: 10px;" enctype='multipart/form-data'>
                                        
                                        <div class="form-group">
                                            <label for="file">File</label>
                                            <input type="file" id="file" name="file">
                                        </div>
                                        
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Upload File</button>
                                        </div>
                                        
                                    </form>
                                    
                                    <table class="table table-hover" id="category-table">
                                        <tr class="header">
                                            <th data-field="name">File Name</th>
                                            <th data-field="image">URL</th>
                                            <th data-field="actions">Actions</th>
                                        </tr>
                                        <?php 
                                          $files = Settings::getUploadedFiles();
                                          foreach($files as $file) {
                                            ?>
                                            <tr class="table-row" id="item_<?php echo $product['product_id']; ?>">
                                                <td><?php echo $file['file_name']; ?></td>
                                                <td><a href="<?php echo $file['url']; ?>" target="_blank"><?php echo $file['url']; ?></a></td>
                                                <td>
                                                  <a href="<?php echo APP_URL . 'files/work.php?action=remove&file=' . $file['file_name']; ?>" 
                                                   class="btn btn-sm btn-danger remove-action" 
                                                   data-remove-msg="Are you sure want to remove this file?">Remove</a>
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