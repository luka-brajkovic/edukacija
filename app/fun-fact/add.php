<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request  = Request::instance();
   
    
    $active = 'fun-fact';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Add FunFact</title>
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
                        <?php echo $lang['table']['addfunfact'];?>
                        <small><?php echo $lang['table']['funfact'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $lang['table']['funfact'];?></a></li>
                        <li class="active"><?php echo $lang['table']['addfunfact'];?></li>
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
                                    <form role="form" action="work.php?action=add" method="post" enctype='multipart/form-data'>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['title'];?></label>
                                            <input type="text"  class="form-control" name="title" placeholder="Title ..."/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?php echo $lang['table']['number'];?></label>
                                            <input type="number"  class="form-control" name="number" placeholder=""/>
                                        </div>
                           
                                        
                                        <div class="box-header">
                                            <h3 class="box-title">
                                              <?php echo $lang['table']['icon'];?>
                                            </h3>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo $lang['table']['icon'];?></label>
                                            <select class="form-control" name="icon">
                                                <option value="F128">sestar</option>
                                                <option value="F118">mikroskop</option>      
                                                <option value="F11B">bedz</option>      
                                                <option value="F11D ">Diplomac</option>      
                                            </select>
                                        </div>
                                        

                                        
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-primary"><?php echo $lang['table']['addfunfact'];?></button>
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