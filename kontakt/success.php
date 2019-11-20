<?php 
    define('BASE_PATH', '../');
    include (BASE_PATH.'assets/reset_var.php');
    $form_success = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Contact - Graphic Guy</title>
        <meta name="robots" content="noindex">
        <?php include (BASE_PATH.'assets/head.php'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH ?>css/contact.css">
    </head>
    <body class="bg-dark">
    	<?php include (BASE_PATH.'assets/top.php'); ?>
        <div id="contact" class="section container success-site">            
            <div class="text-center">
                <h1 class="title">
                    Message sent. Thank you!
                </h1>
                <p class="subtitle">
                    I will contact you shortly.
                </p>
            </div>
            
            <div class="text-center">
                <a href="../" type="submit" id="submit" class="btn btn-success">Back to the main page.<span></span></a>
            </div>
        </div>
    </body>
</html>