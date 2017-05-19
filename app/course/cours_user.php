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
        <link href="<?php echo $applicationConfig['assets_path']; ?>/css/multi-select.css" rel="stylesheet" type="text/css" />
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
                                        
                                        <div class="form-group" >
                                            
                                            <select id="my-select" multiple="multiple" multiple >
                                                <option>1<option>
                                                <option>2<option>
                                                <option>3<option>
                                                <option>4<option>
                                                <option>5<option>
                                                <option>6<option>                   
                                                <option>1<option>
                                                <option>2<option>
                                                <option>3<option>
                                                <option>4<option>
                                                <option>5<option>
                                                <option>6<option>                   
                                                <option>1<option>
                                                <option>2<option>
                                                <option>3<option>
                                                <option>4<option>
                                                <option>5<option>
                                                <option>6<option>                   
                                            </select>
                                            
                                        </div>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
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
        <script src="<?php echo $applicationConfig['assets_path']; ?>/js/jquery.multi-select.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {        
                $('#my-select').multiSelect(
                        {
                            selectableHeader: "<div class='custom-header'>Nemaju Pristup</div>",
                            selectionHeader: "<div class='custom-header'>Imaju Pristup</div>",
                        }        
                );
            });
        </script>
        
    </body>
</html>