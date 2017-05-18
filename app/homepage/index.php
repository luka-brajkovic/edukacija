<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    $request    = Request::instance();
    $data       = $request->getAllParams();
    $active     = 'homepage';
    
    $settings   = Settings::getHomepageSettings();
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
                        Homepage Settings
                        <small>Home</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Homepage Settings</li>
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
                                        
                                        <h3>Main Slide 1</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['slide_1_title']; ?>" class="form-control" name="slide_1_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="<?php echo $settings['slide_1_url']; ?>" class="form-control" name="slide_1_url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="main_slide_1">Image (890x470px)</label>
                                            <input type="file" id="main_slide_1" name="main_slide_1">
                                            <p class="help-block">
                                                <?php if($settings['main_slide_1']): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Settings::getImageUrl($settings['main_slide_1']); ?>" width="150" /> | 
                                                <a href="<?php echo Settings::getImageUrl($settings['main_slide_1']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=main_slide_1" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Main Slide 2</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['slide_2_title']; ?>" class="form-control" name="slide_2_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="<?php echo $settings['slide_2_url']; ?>" class="form-control" name="slide_2_url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="main_slide_2">Image (890x470px)</label>
                                            <input type="file" id="main_slide_2" name="main_slide_2">
                                            <p class="help-block">
                                                <?php if($settings['main_slide_2']): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Settings::getImageUrl($settings['main_slide_2']); ?>" width="150" /> | 
                                                <a href="<?php echo Settings::getImageUrl($settings['main_slide_2']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=main_slide_2" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Main Slide 3</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['slide_3_title']; ?>" class="form-control" name="slide_3_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="<?php echo $settings['slide_3_url']; ?>" class="form-control" name="slide_3_url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="main_slide_3">Image (890x470px)</label>
                                            <input type="file" id="main_slide_3" name="main_slide_3">
                                            <p class="help-block">
                                                <?php if($settings['main_slide_3']): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Settings::getImageUrl($settings['main_slide_3']); ?>" width="150" /> | 
                                                <a href="<?php echo Settings::getImageUrl($settings['main_slide_3']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=main_slide_3" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Main Slide 4</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['slide_4_title']; ?>" class="form-control" name="slide_4_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="<?php echo $settings['slide_4_url']; ?>" class="form-control" name="slide_4_url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="main_slide_4">Image (890x470px)</label>
                                            <input type="file" id="main_slide_4" name="main_slide_4">
                                            <p class="help-block">
                                                <?php if($settings['main_slide_4']): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Settings::getImageUrl($settings['main_slide_4']); ?>" width="150" /> | 
                                                <a href="<?php echo Settings::getImageUrl($settings['main_slide_4']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=main_slide_4" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Main Slide 5</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['slide_5_title']; ?>" class="form-control" name="slide_5_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="<?php echo $settings['slide_5_url']; ?>" class="form-control" name="slide_5_url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="main_slide_5">Image (890x470px)</label>
                                            <input type="file" id="main_slide_5" name="main_slide_5">
                                            <p class="help-block">
                                                <?php if($settings['main_slide_5']): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Settings::getImageUrl($settings['main_slide_5']); ?>" width="150" /> | 
                                                <a href="<?php echo Settings::getImageUrl($settings['main_slide_5']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=main_slide_5" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Main Slide 6</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['slide_6_title']; ?>" class="form-control" name="slide_6_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="<?php echo $settings['slide_6_url']; ?>" class="form-control" name="slide_6_url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="main_slide_6">Image (890x470px)</label>
                                            <input type="file" id="main_slide_6" name="main_slide_6">
                                            <p class="help-block">
                                                <?php if($settings['main_slide_6']): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Settings::getImageUrl($settings['main_slide_6']); ?>" width="150" /> | 
                                                <a href="<?php echo Settings::getImageUrl($settings['main_slide_6']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=main_slide_6" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Main Slide 7</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['slide_7_title']; ?>" class="form-control" name="slide_7_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="<?php echo $settings['slide_7_url']; ?>" class="form-control" name="slide_7_url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="main_slide_7">Image (890x470px)</label>
                                            <input type="file" id="main_slide_7" name="main_slide_7">
                                            <p class="help-block">
                                                <?php if($settings['main_slide_7']): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Settings::getImageUrl($settings['main_slide_7']); ?>" width="150" /> | 
                                                <a href="<?php echo Settings::getImageUrl($settings['main_slide_7']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=main_slide_7" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Main Slide 8</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['slide_8_title']; ?>" class="form-control" name="slide_8_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="<?php echo $settings['slide_8_url']; ?>" class="form-control" name="slide_8_url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="main_slide_8">Image (890x470px)</label>
                                            <input type="file" id="main_slide_8" name="main_slide_8">
                                            <p class="help-block">
                                                <?php if($settings['main_slide_8']): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Settings::getImageUrl($settings['main_slide_8']); ?>" width="150" /> | 
                                                <a href="<?php echo Settings::getImageUrl($settings['main_slide_8']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=main_slide_8" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Main Slide 9</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['slide_9_title']; ?>" class="form-control" name="slide_9_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="<?php echo $settings['slide_9_url']; ?>" class="form-control" name="slide_9_url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="main_slide_9">Image (890x470px)</label>
                                            <input type="file" id="main_slide_9" name="main_slide_9">
                                            <p class="help-block">
                                                <?php if($settings['main_slide_9']): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Settings::getImageUrl($settings['main_slide_9']); ?>" width="150" /> | 
                                                <a href="<?php echo Settings::getImageUrl($settings['main_slide_9']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=main_slide_9" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Main Slide 10</h3>
                                        
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" value="<?php echo $settings['slide_10_title']; ?>" class="form-control" name="slide_10_title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="<?php echo $settings['slide_10_url']; ?>" class="form-control" name="slide_10_url" placeholder="Url ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="main_slide_10">Image (890x470px)</label>
                                            <input type="file" id="main_slide_10" name="main_slide_10">
                                            <p class="help-block">
                                                <?php if($settings['main_slide_10']): ?>
                                                <img style="border: 1px solid #000;" src="<?php echo Settings::getImageUrl($settings['main_slide_10']); ?>" width="150" /> | 
                                                <a href="<?php echo Settings::getImageUrl($settings['main_slide_10']); ?>" target="_blank">View Original Image</a> | 
                                                <a href="work.php?action=remove-image&name=main_slide_10" 
                                                   class="remove-action"
                                                   data-remove-msg="Are you sure want to remove this image?">Remove Image</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                        <h3>Slider Order</h3>
                                        <div class="form-group">
                                            <label>Slider Order</label>
                                            <input type="text" value="<?php echo $settings['slider_order']; ?>" class="form-control" name="slider_order" placeholder="Order ..."/>
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

    </body>
</html>