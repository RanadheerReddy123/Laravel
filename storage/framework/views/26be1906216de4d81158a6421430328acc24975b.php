<!DOCTYPE html>
<html>
    <head>
        <!--Important meta tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!--Website Title-->
    <title>Ranadheer Reddy</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon/Logo.jpg">
    <!--Custom Bootstrap CSS-->
    <link rel='stylesheet' href='css/bootstrap_css/bootstrap.css'>
    <!--Google fonts-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap'>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!--jQuery Custom-->
    <script src='js/jquery-3.5.1.min.js'></script>
    <!--Fontawesome Icons-->
    <link rel='stylesheet' href='css/fontawesome_css/all.min.css'>
    <script src='js/fontawesome_js/all.min.js'></script>
    <!--CSS Custom-->
    <link rel="stylesheet" href="css/mystyle.css">
        
    </head>
    <body>
    <h1>Contact Form Message</h1>
    <p>Name:<?php echo e($name); ?></p>
    <p>Email:<?php echo e($email); ?></p>
    <p>Mobile:<?php echo e($mobile); ?></p>
    <p>Subject:<?php echo e($subject); ?></p>
    <p>Message:<?php echo e($msg); ?></p>
    </body>
</html><?php /**PATH C:\laravel-5.6\laravel\resources\views/emails/contactmail.blade.php ENDPATH**/ ?>