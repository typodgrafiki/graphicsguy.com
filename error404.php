<?php 
    define('BASE_PATH', '');
    include (BASE_PATH.'assets/reset_var.php'); 
    $homepage = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Graphics Bro - Ops!</title>
        <?php include (BASE_PATH.'assets/head.php'); ?>
    </head>
    <body>
        <?php include (BASE_PATH.'assets/top.php'); ?>
        <div id="error404" class="clearfix bg-white text-center">
                          
                <h1>Ops!</h1>
                <p>
                    <a href="/" class="btn btn-primary">
                        Home<span></span>
                    </a>
                </p>
            
        </div>

        <?php include (BASE_PATH.'assets/copyright.php'); ?>

    </body>
</html>