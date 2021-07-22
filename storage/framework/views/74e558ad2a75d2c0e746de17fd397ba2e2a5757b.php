<!DOCTYPE html>
<html>
    <head>
        <!--Important meta tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!--Website Title-->
    <title>Send an Email</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon/Logo.jpg')); ?>">
    <!--Custom Bootstrap CSS-->
    <link rel='stylesheet' href="<?php echo e(asset('assets/css/bootstrap_css/bootstrap.css')); ?>">
    <!--Google fonts-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap'>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!--jQuery Custom-->
    <script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <!--Fontawesome Icons-->
    <link rel='stylesheet' href="<?php echo e(asset('assets/css/fontawesome_css/all.min.css')); ?>">
    <script src="<?php echo e(asset('assets/js/fontawesome_js/all.min.js')); ?>"></script>
    <!--CSS Custom-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/mystyle.css')); ?>">    
    </head>
    <body>
       <!-- Contact -->
    <section id="contact">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Contact Left-->
                        <div id="contact-left">
                            <div class="vertical-heading">
                                <h5>Who we are</h5>
                                <h2>Get<br>In<strong> Touch</strong></h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis maxime voluptates neque non nulla soluta amet a explicabo est consequuntur repellendus voluptatem, repellat impedit rerum odit, sit ullam minima. Voluptas?</p>
                            <div id="office">
                                <h5>Address Title</h5>
                                <ul class='office-details'>
                                    <li><span><i class="fas fa-mobile-alt"></i></span> 8549024456</li>
                                    <li><span><i class="fas fa-envelope"></i></span> support@tricube.com</li>
                                    <li><span><i class="fas fa-map-marker-alt"></i></span> Hyderabad,Telangana,India,Pin Code:500008</li>
                                </ul>
                                <ul class="social-list">
                                    <li><a href='#'><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href='#'><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href='#'><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Contact Right-->
                        <div id="contact-right">
                            <h4>Send Message</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ab tempore consequuntur porro iste soluta odio.</p>
                            <form action="<?php echo e(route('contact.submit')); ?>" method="post" enctype="multipart/form-data">
                               <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                      
                                        <div class="form-group">
                                           <label for="name">Name</label>
                                            <input type='text' name="name" class='form-control' placeholder="Your Name" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label for="email">Email</label>
                                            <input type='email' name="email" class='form-control' placeholder="Email Address" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label for="mobile">Mobile</label>
                                            <input type='number' name="mobile" class='form-control' placeholder="Mobile Number" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label for="subject">Subject</label>
                                            <input type='text' name="subject" class='form-control' placeholder="Subject" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label for="message">Message</label>
                                    <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                </div>
                                <div id="contact-btn">
                                    <button class='btn btn-general btn-yellow' name="submit" role="button" title="Submit">Submit</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Ends-->
    </body>
</html><?php /**PATH C:\inetpub\wwwroot\laravel\resources\views/contactus.blade.php ENDPATH**/ ?>