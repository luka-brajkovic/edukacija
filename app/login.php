<?php
    require '../library/config.php';
    $status = Administrator::isAdminLogged(FALSE);
    if($status) {
        Administrator::redirectToDashboard();
    }
    
    $request = Request::instance();
    $error = $request->getParam('error');
    
?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <title>Login | <?php echo $applicationConfig['name']; ?></title>
        <?php include 'includes/head-login.php'; ?>
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header"><?php echo $applicationConfig['name']; ?> - Sign In</div>
            <form action="work.php?action=login" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="register.html" class="text-center">Register a new membership</a>
                </div>
            </form>
        </div>
        <?php include 'includes/scripts-login.php'; ?>
    </body>
</html>