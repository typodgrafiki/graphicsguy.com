<?php 
    define('BASE_PATH', '../');
    include (BASE_PATH.'assets/reset_var.php');
    $menu5_active = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Contact - Graphics Bro</title>
        <?php include (BASE_PATH.'assets/head.php'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH ?>css/contact.css">
    </head>
    <body>
        <?php include (BASE_PATH.'assets/top.php'); ?>
        <div id="contact" class="section container">
            <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
                <div class="text-center">
                    <p>
                        <img class="img-profile img-responsive" src="../images/my_face.jpg">
                    </p>
                    <h1 class="title">
                        Let's create something cool together
                    </h1>
                    <p class="subtitle">
                        I'm excited just thinking about a new project.<br class="hidden-xs" /> Tell me about your idea.
                    </p>
                </div>
                <div class="row form-content">
                    <div class="col-xs-12 form-group">
                        <label for="name">Your Name</label>
                        <div class="help-block with-errors"></div>
                        <input type="text" id="name" class="form-control" placeholder="John Jonson" required data-error="Enter your name">
                        
                    </div>
                    <div class="col-xs-12 col-md-6 form-group">
                        <label for="email">Email</label>
                        <div class="help-block with-errors"></div>
                        <input type="email" class="email form-control" id="email" placeholder="email@domain.com" required data-error="Enter your email">
                    </div>



                    <div class="col-xs-12 col-md-6 form-select">
                        <label for="msg_subject">Project Type</label>
                        <select class="form-control" id="msg_subject">
                            <option value="Website">Website</option>
                            <option value="Web Design">Web Design</option>
                            <option value="App Design">App Design</option>
                            <option value="Identyfikacja wizualna">Visual identification</option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-md-12 form-group">
                        <label for="message">Additional details</label>
                        <div class="help-block with-errors"></div>
                        <textarea id="message" rows="7" placeholder="I will tell you about my idea ..." class="form-control" required data-error="Enter the message"></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" id="submit" class="btn btn-success">Send<span></span></button>
                    <div id="msgSubmit"></div>
                </div>
            </form>
        </div>
        <?php include (BASE_PATH.'assets/copyright.php'); ?>
        <script type="text/javascript" src="js/form-validator.min.js"></script>  
        <script type="text/javascript" src="js/contact-form-script.js"></script>
    </body>
</html>