<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request  = Request::instance();
    $id       = $request->getParam('id');
    $calltoaction  = Course::getInfo($id);
    
    
    $active = 'html-box';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['editcourse'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['course'];?>- <?php echo $calltoaction['title']; ?>
                        <small><?php echo $lang['table']['editcourse'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $lang['table']['course'];?></a></li>
                        <li class="active"><?php echo $lang['table']['editcourse'];?></li>
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
                                            <label><?php echo $lang['table']['leed'];?></label>
                                            <textarea id="editor" class="form-control" name="leed" rows="3" placeholder="Leed ..."><?php echo $calltoaction['leed']; ?></textarea>
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
                                                        <img style="border: 1px solid #000;" src="<?php echo Course::getImageUrl($calltoaction['image']); ?>" width="150" /> | 
                                                        <a href="<?php echo Course::getImageUrl($calltoaction['image']); ?>" target="_blank">View Original icon</a> | 
                                                        <a href="work.php?action=remove-image&id=<?php echo $id; ?>" 
                                                           class="remove-action"
                                                           data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                        <?php endif; ?>
                                                    </p>
                                           </div>

                                       
                                       <div class="form-group">
                                            <label><?php echo $lang['table']['videourl'];?></label>
                                            <input type="text" value="<?php echo $calltoaction['video_url']; ?>" class="form-control" name="video_url" placeholder="video url ..."/>
                                        </div>
                                        
                                       <div class="form-group">
                                            <label><?php echo $lang['table']['livevideourl'];?></label>
                                            <input type="text" value="<?php echo $calltoaction['live_video_url']; ?>" class="form-control" name="live_video_url" placeholder="live video url ..."/>
                                        </div>
                                            
                                            
                                        <div class="box-header">
                                            <h3 class="box-title">
                                              <?php echo $lang['table']['livevideostartend'];?>
                                            </h3>
                                        </div>
                                         
                                        <div class="box-body">
                                        <div class=''>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker6'>
                                                    <input name="live_start_date" type='text' value="<?php echo $calltoaction['live_start_date']; ?>" class="form-control" />
                                                   
                                                       
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=''>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker7'>
                                                    <input name="live_end_date" type='text' value="<?php echo $calltoaction['live_end_date']; ?>" class="form-control" />
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        </div>
                                        
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        
                                        
                                             
                                        <div class="form-group">
                                            
                                            <label>Chose Product:</label>
                                            <select id="products" class="chosen-select">
                                              <?php
                                                $files = Settings::getUploadedFiles();
                                                $productsForPrint = array();
                                                foreach($files as $file) {
                                                  $productsForPrint[$file['file_name']] =$file['file_name'];
                                                  ?>
                                                <option value="<?php echo $file['file_name']; ?>"><?php echo $file['file_name']; ?></option>
                                                  <?php
                                                }
                                              ?>
                                            </select>
                                            
                                            <a href="javascript:void(0);" class="btn btn-sm btn-primary add-to-page">Add</a>
                                            
                                            <div class="added-products">
                                              <?php
                                                
                                                if($calltoaction['files']) {
                                                  $productsSaved = explode(",", $calltoaction['files']);
                                                  foreach($productsSaved as $prodID) {    
                                                    ?>
                                                    <div class='single-product'><span><?php echo $productsForPrint[$prodID]; ?></span><a href='javascript:void(0);' class='remove-single-prod'> - Remove</a><input type='hidden' name='files[]' value='<?php echo $prodID; ?>' /></div>
                                                    <?php
                                                  }
                                                }
                                              ?>
                                                    
                                            </div>
                                            
                                        </div>
                                        
                                        <br /><br /><br /><br /><br /><br /><br />
                                       
                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['editcourse'];?></button>
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
        <script src="<?php echo $applicationConfig['assets_path']; ?>/js/jquery.simple-dtpicker.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {        
                CKEDITOR.replace('editor1');
                $('*[name=live_start_date]').appendDtpicker();
                $('*[name=live_end_date]').appendDtpicker();
            });
        </script>
        
    </body>
</html>