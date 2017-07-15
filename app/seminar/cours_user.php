<?php
    require '../../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if(!$status) {
        Administrator::redirectToLogin();
    }
    
    $request  = Request::instance();
    $id       = $request->getParam('id');
    $usersData  = Seminar::GetUsersForSeminar($id);
    
    $selectedUsers = array();
    foreach ($usersData['selected'] as $selected) {
        $selectedUsers[] = $selected['user_id'];
    }
    
    
    $active = 'seminar';
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $lang['table']['editseminar'];?> | <?php echo $applicationConfig['name']; ?></title>
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
                        <?php echo $lang['table']['seminar'];?>- <?php echo $calltoaction['title']; ?>
                        <small><?php echo $lang['table']['editseminar'];?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> <?php echo $lang['table']['seminar'];?></a></li>
                        <li class="active"><?php echo $lang['table']['editseminar'];?></li>
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
                                              <?php 
                                              foreach ($usersData['allusers'] as $user){                                          
                                              ?>
                                                
                                                <option value="<?php echo $user['id'];?>" 
                                                        <?php
                                                      if (in_array($user['id'], $selectedUsers)){
                                                          echo 'selected';
                                                      }
                                                        ?>
                                                        >
                                                    <?php echo $user['first_name']." ".$user['last_name'];?>
                                                </option>
                                                
                                              <?php } ?>
                                            </select>
                                           
                                            
                                            
                                        </div>
                                      
                                    </form>
                                    
                                    
                                      
                                        
                                       <div class="box-footer" >
                                           <form action="work.php">
                                           <input type="hidden" value="select-all-users-for-course" name="action" >
                                           <input type="hidden" value="<?php echo $id;?>" name="course_id" >
                                           <button type="submit" class="btn btn-primary"><?php echo $lang['table']['selectall'];?></button>
                                           </form>
                                       </div>
                                </div><!-- /.box-body -->
                                
                                
                                   <div id="update-user">
                                  <table class="table table-hover "  parent="<?php echo $parentID; ?>">
                                        <input type="hidden" id="table-for-order" value="1" >
                                        <tr class="header">
                                            <th data-field="id">user ID</th>
                                            <th data-field="name"><?php echo $lang['table']['name'];?></th>
                                            <th data-field="name">trays</th>
                                        </tr>
                                        <?php
                                        $usersoncourse = Course::GetUsersForCourseAndNumOfTry($id);
                                        foreach ($usersoncourse as $useroncourse){
                                        ?>
                                     
                                     <tr>
                                         <td><?php echo $useroncourse['user_id'];?></td>
                                         <td><?php echo $useroncourse['first_name']." ".$useroncourse['last_name'];?></td>
                                         <td><input type="number" id="find-<?php echo $useroncourse['id'];?>" value="<?php echo $useroncourse['course_number_of_trys']; ?>"> <button class="btn btn-primary" onclick="updateUserTry(<?php echo $useroncourse['id'];?>);">potvrdi</button></td>
                                     </tr>
                                     
                                        <?php
                                        }
                                        ?>
                                        
                                    </table>
                                </div>
                                
                                
                                
                            </div><!-- /.box -->
                             <a href="<?php echo APP_URL; ?>seminar/index.php" class="btn btn-lg btn-success"><?php echo $lang['table']['back'];?></a>
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
            
           $('#my-select').multiSelect({
              afterSelect: function(values){
                $.ajax({url: "work.php?action=add-user-to-course&courseid=<?php echo $id;?>&userid="+values, success: function(result){ 
                    updateTable();    
              }});
            
              },
              afterDeselect:function(values){
                $.ajax({url: "work.php?action=remove-user-from-course&courseid=<?php echo $id;?>&userid="+values, success: function(result){
                    updateTable();
                }});
              
        }
        });
        
        function updateUserTry(id){
               num = $('#find-'+id).val();
               $.ajax({url: "work.php?action=ubdate-user-try&id="+id+"&num="+num, success: function(result){
                       console.log(result);
              }});
        }
        
        function updateTable(){
              $.ajax({url: "work.php?action=ubdate-user-table&id=<?php echo $id;?>", success: function(result){
                       $("#update-user").html(result);
              }});
        }
        </script>
        
    </body>
</html>