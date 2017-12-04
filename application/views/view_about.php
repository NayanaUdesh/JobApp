<!DOCTYPE HTML>
<html>

<head>
    <title>About | LK Job Bank</title>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="sl job bank, sl jobs, sri lankan jobs, find a job in sri lanka" />
    <meta name="description" content="Sri Lanka Job Portal, Job Bank">
    <meta name="author" content="Rachinda">
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


<body>

    <div class="global-wrap">
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="index.html">
                                <img src="<?php echo base_url("assets/img/logo-invert.png");?>" alt="Image Alternative text" title="Sri Lanka Jobs" />
                            </a>
                        </div>
                      
                        <div class="col-md-9" >
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <?php 

                                    if($this->session->userdata('is_logged_in') == 1){?><li class="top-user-area-avatar">
                                        <a href="user-profile.html">

                                        	<?php
											foreach ($this->session->userdata('welcome_name') as $i) {
                                
                               				 

                               				 $thumb=$i['icon'];
                               				 
                           					 }	

                                        	?>
                                            <img class="origin round" src="<?php echo base_url($thumb);?>" alt="" title="" />

                                            <?php
                                            foreach ($this->session->userdata('welcome_name') as $n) {
                                echo  "Welcome" . " " .$n['first_name'];
                            }	

                                            ?>
                                        </a>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>site/logout">Sign Out</li>
                                    <?php
                                }?>
                                    

                                    <?php
                                    if($this->session->userdata('is_logged_in') != 1){
                                    ?><li><a href="<?php echo base_url(); ?>site/Login">Sign In</a>
                                    	<?php } ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                        <li><a href="<?php echo base_url(); ?>search">All Jobs</a> </li>
                        <li><a href="<?php echo base_url(); ?>menu/PostJob">Post Jobs</a> </li>
                        <li><a href="<?php echo base_url(); ?>menu/Advertise">Advertise</a> </li>
                        <li class="active"><a href="<?php echo base_url(); ?>menu/AboutPage">About Us</a> </li>
                        <li><a href="<?php echo base_url(); ?>menu/ContactPage">Contact Us</a> </li>
                        
                    </ul>
                </div>
            </div>
        </header>
        
         <div class="container">
            <h1 class="page-title">About Us</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="text-bigger">Post your job vacancies at SL Job Portal by signing up for free and jobseekers can view and apply for jobs easier than ever.</p>
                    <p class="text-bigger">Jobseekers can search for jobs and filter the vacancies according to their location and job category</p>
                </div>
            </div>
            <div class="gap"></div>
        </div>
        <div class="bg-holder">
            <div class="bg-parallax" style="background-image:url(img/1280x852.png);"></div>
            <div class="bg-mask"></div>
            <div class="bg-holder-content">
                <div class="container">
                    <div class="gap gap-big text-white">
                        <div class="row">
                            <div class="col-md-10">
                                <h2>Work hard. Play hard.</h2>
                                <p class="text-bigger">We are dedicated to making sucessful projects while having so much fun. We believe in stress free work environment and provide flexibility of working from home.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <h2>Our Approach</h2>
            <div class="row">
                <div class="col-md-8">
                    <p class="text-bigger">We at Sri Lanka Job Portal, offer the companies to post their job advertisements for free.</p>
                </div>
            </div>
            <div class="gap"></div>
            <h2>Rockstar Team</h2>
            <div class="row">
                <div class="col-md-10">
                    <p class="text-bigger mb30">We are a multifunctional team with expertise in developing products in PHP, HTML, Java or AngularJS. Our teams' strength is our passion and we are driven by excellence.</p>
                </div>
            </div>
            <div class="row row-wrap" data-gutter="60">
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="<?php echo base_url("assets/img/300x300.png");?>" alt="Image Alternative text" title="AMaze" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">L</h5>
                            <p class="thumb-meta text-small">Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="<?php echo base_url("assets/img/300x300.png");?>" alt="Image Alternative text" title="Chiara" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">N</h5>
                            <p class="thumb-meta text-small">Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="<?php echo base_url("assets/img/300x300.png");?>" alt="Image Alternative text" title="Bubbles" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">R</h5>
                            <p class="thumb-meta text-small">Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="<?php echo base_url("assets/img/300x300.png");?>" alt="Image Alternative text" title="Gamer Chick" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">S</h5>
                            <p class="thumb-meta text-small">Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      
        
	<div class="gap gap-small"></div>

	    
        
        <footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a class="logo" href="index.html">
                            <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                        <p class="mb20">Looking to post your vacancy for free or ooking for a job? Try Lk Jobs</p>
                        <ul class="list list-horizontal list-space">
                            <li>
                                <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Enter your E-mail Address</label>
                            <input type="text" class="form-control">
                            <p class="mt5"><small>*We Never Send Spam</small>
                            </p>
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <ul class="list list-footer">
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
                    <div class="col-md-4">
                        <h4>Have Questions?</h4>
                        <h4 class="text-color">+94 2 567 567</h4>
                        <h4><a href="#" class="text-color">support@sljob.lk</a></h4>
                        <p>24/7 Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
        </footer>
      

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

		
		
		
		