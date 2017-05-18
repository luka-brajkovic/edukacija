<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    $request    = Request::instance();
    $data       = $request->getAllParams();
    $active     = 'about';
    
    $settings   = Settings::getAboutSettings();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Settings | <?php echo $applicationConfig['name']; ?></title>
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
                        About Page Settings
                        <small>Home</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">About Page Settings</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                      if(isset($data['success'])) {
                        switch($data['success']) {
                          case "update":
                            $message = "Settings updated successfully.";
                            break;
                          case "clear-cache":
                            $message = "Cache cleared successfully.";
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
                                
                                <div class="box-body table-responsive no-padding">
                                    
                                    <form role="form" action="work.php?action=update" method="post" style="padding: 10px;" enctype='multipart/form-data'>
                                        
                                        <h3>Slide 1</h3>
                                        
                                        <div class="form-group">
                                            <label for="slide_1">Image (1920x470)</label>
                                            <input type="file" id="slide_1" name="slide_1">
                                            <p class="help-block">
                                                <?php if($settings['slide_1']): ?>
                                                <a href="<?php echo Settings::getAboutUrl($settings['slide_1']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=slide_1" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        
                                        <h3>Slide 2</h3>
                                        
                                        <div class="form-group">
                                            <label for="slide_2">Image (1920x470)</label>
                                            <input type="file" id="slide_2" name="slide_2">
                                            <p class="help-block">
                                                <?php if($settings['slide_2']): ?>
                                                <a href="<?php echo Settings::getAboutUrl($settings['slide_2']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=slide_2" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Slide 3</h3>
                                        
                                        <div class="form-group">
                                            <label for="slide_3">Image (1920x470)</label>
                                            <input type="file" id="slide_3" name="slide_3">
                                            <p class="help-block">
                                                <?php if($settings['slide_3']): ?>
                                                <a href="<?php echo Settings::getAboutUrl($settings['slide_3']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=slide_3" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Overview text</label>
                                            <textarea id="overview" class="form-control" name="overview" rows="3" placeholder="Overview text..."><?php echo $settings['overview']; ?></textarea>
                                        </div>
                                        
                                        
                                        <h3>Box 1</h3>
                                        
<!--                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['box_1_title']; ?>" class="form-control" name="box_1_title" placeholder="Title ..."/>
                                        </div>-->
                                        
                                        <div class="form-group">
                                            <label>Text</label>
                                            <textarea id="box_1_text" class="form-control" name="box_1_text" rows="3" placeholder="Text..."><?php echo $settings['box_1_text']; ?></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="box_1_image">Image (668x522)</label>
                                            <input type="file" id="box_1_image" name="box_1_image">
                                            <p class="help-block">
                                                <?php if($settings['box_1_image']): ?>
                                                <a href="<?php echo Settings::getAboutUrl($settings['box_1_image']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=box_1_image" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>

                                        <hr>
                                        
                                        <h3>Box 2</h3>
                                        
<!--                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['box_2_title']; ?>" class="form-control" name="box_2_title" placeholder="Title ..."/>
                                        </div>-->
                                        
                                        <div class="form-group">
                                            <label>Text</label>
                                            <textarea id="box_2_text" class="form-control" name="box_2_text" rows="3" placeholder="Text..."><?php echo $settings['box_2_text']; ?></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="box_2_image">Image (668x522)</label>
                                            <input type="file" id="box_2_image" name="box_2_image">
                                            <p class="help-block">
                                                <?php if($settings['box_2_image']): ?>
                                                <a href="<?php echo Settings::getAboutUrl($settings['box_2_image']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=box_2_image" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>

                                        <hr>
                                        
                                        <div class="form-group">
                                            <label for="partnership_image">Partnership Image (2289x966)</label>
                                            <input type="file" id="partnership_image" name="partnership_image">
                                            <p class="help-block">
                                                <?php if($settings['partnership_image']): ?>
                                                <a href="<?php echo Settings::getAboutUrl($settings['partnership_image']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=partnership_image" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Partnership Text</label>
                                            <textarea id="partnership_text" class="form-control" name="partnership_text" rows="3" placeholder="Text..."><?php echo $settings['partnership_text']; ?></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Ponosni smo tekst</label>
                                            <textarea id="proud_text" class="form-control" name="proud_text" rows="3" placeholder="Text..."><?php echo $settings['proud_text']; ?></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="big_image">Big Image (2297x2389)</label>
                                            <input type="file" id="big_image" name="big_image">
                                            <p class="help-block">
                                                <?php if($settings['big_image']): ?>
                                                <a href="<?php echo Settings::getAboutUrl($settings['big_image']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=big_image" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Mini Box 1</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['mini_box_1_title']; ?>" class="form-control" name="mini_box_1_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="mini_box_1_image">Image (372x372)</label>
                                            <input type="file" id="mini_box_1_image" name="mini_box_1_image">
                                            <p class="help-block">
                                                <?php if($settings['mini_box_1_image']): ?>
                                                <a href="<?php echo Settings::getAboutUrl($settings['mini_box_1_image']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=mini_box_1_image" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Mini Box 2</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['mini_box_2_title']; ?>" class="form-control" name="mini_box_2_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="mini_box_2_image">Image (372x372)</label>
                                            <input type="file" id="mini_box_2_image" name="mini_box_2_image">
                                            <p class="help-block">
                                                <?php if($settings['mini_box_2_image']): ?>
                                                <a href="<?php echo Settings::getAboutUrl($settings['mini_box_2_image']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=mini_box_2_image" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        
                                        <h3>Mini Box 3</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['mini_box_3_title']; ?>" class="form-control" name="mini_box_3_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="mini_box_3_image">Image (372x372)</label>
                                            <input type="file" id="mini_box_3_image" name="mini_box_3_image">
                                            <p class="help-block">
                                                <?php if($settings['mini_box_3_image']): ?>
                                                <a href="<?php echo Settings::getAboutUrl($settings['mini_box_3_image']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=mini_box_3_image" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Mini Box 4</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['mini_box_4_title']; ?>" class="form-control" name="mini_box_4_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="mini_box_4_image">Image (372x372)</label>
                                            <input type="file" id="mini_box_4_image" name="mini_box_4_image">
                                            <p class="help-block">
                                                <?php if($settings['mini_box_4_image']): ?>
                                                <a href="<?php echo Settings::getAboutUrl($settings['mini_box_4_image']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=mini_box_4_image" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                        
                                    </form>
                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
          
        <?php include '../includes/scripts.php'; ?>
        <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(function() {
              
            });
        </script>
        
    </body>
</html>