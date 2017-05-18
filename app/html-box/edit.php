<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request  = Request::instance();
    $id       = $request->getParam('id');
    $calltoaction  = HtmlBox::getInfo($id);
    
    
    $active = 'html-box';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['edithtmlbox'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['htmlbox'];?>- <?php echo $calltoaction['title']; ?>
                        <small><?php echo $lang['table']['edithtmlbox'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $lang['table']['htmlbox'];?></a></li>
                        <li class="active"><?php echo $lang['table']['edithtmlbox'];?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                       
                        <div class="col-md-12">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-body">
                                    <form role="form" action="work.php?action=edit" method="post" enctype='multipart/form-data'>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['title'];?></label>
                                            <input type="text" value="<?php echo $calltoaction['title']; ?>" class="form-control" name="title" placeholder="Title ..."/>
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['text'];?></label>
                                            <textarea id="editor1" class="form-control" name="text" rows="3" placeholder="Description ..."><?php echo $calltoaction['text']; ?></textarea>
                                        </div>
                    
                                        
                                        <div class="box-header">
                                            <h3 class="box-title">
                                              <?php echo $lang['table']['icon'];?>
                                            </h3>
                                        </div>

                                        <div class="box-body">
                                              <div class="form-group">
                                                    <label for="image"><?php echo $lang['table']['icon'];?></label>
                                                    <input type="file" id="image" name="image">
                                                    <p class="help-block">
                                                        <?php if($calltoaction['image']): ?>
                                                        <img style="border: 1px solid #000;" src="<?php echo HtmlBox::getImageUrl($calltoaction['image']); ?>" width="150" /> | 
                                                        <a href="<?php echo HtmlBox::getImageUrl($calltoaction['image']); ?>" target="_blank">View Original icon</a> | 
                                                        <a href="work.php?action=remove-image&id=<?php echo $id; ?>" 
                                                           class="remove-action"
                                                           data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                        <?php endif; ?>
                                                    </p>
                                           </div>

                                       
                                       
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                       
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['edithtmlbox'];?></button>
                                      </div>
                                        
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                        
                    </div><!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>
        <script src="//cdn.ckeditor.com/4.4.3/full/ckeditor.js"></script>
        <script type="text/javascript">
            $(function() {        
                CKEDITOR.replace('editor1');
            });
        </script>
        
    </body>
</html>