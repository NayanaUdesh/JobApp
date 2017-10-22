<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE HTML>
<html class="full">

<head>
    <title>Traveler - Login register</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/font-awesome.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/icomoon.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/mystyles.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/styles.css"); ?>" rel="stylesheet">

    <script src="<?php echo base_url("assets/js/modernizr.js"); ?>"></script>



</head>

<body class="full">

  
    <div class="global-wrap">

        <div class="full-page">
            <div class="bg-holder full">
                <div class="bg-mask"></div>
                <div class="bg-img" style="background-image:url(img/1280x852.png);"></div>
                <div class="bg-holder-content full text-white">
                    <a class="logo-holder" href="index.html">
                        <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                    </a>
                    <div class="full-center">
                        <div class="container">
                            <div class="row row-wrap" data-gutter="60">
                                <div class="col-md-4">
                                    <div class="visible-lg">
                                        <h3 class="mb15">Welcome to SL Jobs job bank</h3>
                                        <p>Ultrices lacus erat mattis nam sem porta nascetur luctus nunc litora diam ornare maecenas et phasellus molestie lorem habitant ultricies condimentum dignissim interdum erat sit praesent penatibus mattis pharetra penatibus</p>
                                        <p>Sodales amet consectetur consectetur curae placerat consectetur penatibus fusce sagittis</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="mb15">Login</h3>
                                 

                                    <table class="col-md-12">
                                <tr>
                                    
                                            
                                           
                                        <?php echo validation_errors(); ?>
                                    <td class="form-group form-group-ghost form-group-icon-left "><i class="fa fa-user input-icon input-icon-show"></i>
                                        
                                        <label>Username or email</label>
                                        <?php
                                        $this->load->helper('security');
                                        $this->load->helper("form");

                                        echo form_open("site/LoginValidation");

                                        
                                        $data = array(
                                            "name" => "email",
                                            "id" => "email",
                                            "value" => "",
                                            "class" => "form-control ",
                                            "placeholder" => "e.g. johndoe@gmail.com"
                                           
                                        );

                                        echo form_input($data);
                                        ?>
                                    </td>
                                
                                </tr>

                                 <tr>
                                    
                                           
                                            
                                       
                                    <td class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                        <label>Password</label>
                                        <?php
                                        
                                        $data = array(
                                            "name" => "password",
                                            "id" => "password",
                                            "type" => "password",
                                            "value" => "",
                                            "class" => "form-control",
                                            "placeholder" => "my secret password",
                                            "aria-describedby" => "sizing-addon1"
                                        );

                                        echo form_input($data);
                                        ?>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>.</td>
                                </tr>
                                  <tr>
                                    
                                    <td >
                                        <?php
                                        $data = array(
                                            "name" => "login",
                                            "id" => "login",
                                            "value" => "Sign In",
                                            "class" => "btn btn-primary",
                                            "placeholder" => "Sign In",
                                            
                                        );
                                        echo form_submit($data);
                                        echo form_close();
                                        ?>
                                    </td>
                                </tr>

                                </table>


                                </div>
                                <div class="col-md-4">
                                    <h3 class="mb15">New To SL Jobs?</h3>
                                    <form>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Full Name</label>
                                            <input class="form-control" placeholder="e.g. John Doe" type="text" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                                            <label>Emai</label>
                                            <input class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                            <label>Password</label>
                                            <input class="form-control" type="password" placeholder="my secret password" />
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Sign up for Traveler" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="footer-links">
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">All Jobs</a>
                        </li>
                        <li><a href="#">Post Jobs</a>
                        </li>
                        <li><a href="#">Advertise</a>
                        </li>
                        <li><a href="#">About Us</a>
                        </li>
                        <li><a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/nicescroll.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js"></script>


        <script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/slimmenu.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/bootstrap-datepicker.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/bootstrap-timepicker.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/nicescroll.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/typeahead.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/magnific.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
    </div>
</body>

</html>


