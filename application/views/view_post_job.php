<!DOCTYPE HTML>
<html>

<head>
    <title>LK Job Bank</title>

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
                        <li class="active"><a href="<?php echo base_url(); ?>">Home</a> </li>
                        <li><a href="success-payment.html">All Jobs</a> </li>
                        <li><a href="<?php echo base_url(); ?>site/PostJob">Post Jobs</a> </li>
                        <li><a href="hotels.html">Advertise</a> </li>
                        <li><a href="flights.html">About Us</a> </li>
                        <li><a href="rentals.html">Contact Us</a> </li>
                        
                    </ul>
                </div>
            </div>
        </header>
        
        
        
        <!-- TOP AREA -->
        <div class="top-area show-onload">
            <div class="bg-holder full">
                <div class="bg-front full-height bg-front-mob-rel">
                    <div class="container full-height">
                        <div class="rel full-height">
                            
                            <div class="search-job">
                                <div class="search-main">
                                    <div class="content">
                                        <br/>
                                        <h1>Search Jobs</h1>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>Job Title / Designation</label>
                                                        <input class="typeahead form-control" placeholder="Input keyword" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-daterange">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="form-group form-group-icon-left"><i class="fa fa-briefcase input-icon input-icon-highlight"></i>
                                                                    <label>Job Category</label>
                                                                    <input class="form-control" name="job_type" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-icon-left"><i class="fa fa-map-marker input-icon input-icon-highlight"></i>
                                                                    <label>Job Location</label>
                                                                    <select class="form-control" name="location">                                                                   
                                                                        <option>All</option>
                                                                        <option>Colombo</option>
                                                                        <option>Kandy</option>
                                                                        <option>Galle</option>
                                                                        <option>Matara</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                             <div class="col-md-3">
                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                    <br/>
                                                                    
                                                                </div>
                                                             </div>
                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Search Job</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
								<div class="col-md-3">
									<ul class="job-category">
										<li><a href="" >Software Engineer Dev - IT <span>(503)</span></a></li>
										<li><a href="" >Quality Assuarance - IT <span>(503)</span></a></li>
										<li><a href="" >Networking - IT<span>(503)</span></a></li>
										<li><a href="" >Hardware - IT <span>(503)</span></a></li>
										<li><a href="" >Banking & Insurance<span>(503)</span></a></li>
										<li><a href="" >HR & Recruitment <span>(503)</span></a></li>
										<li><a href="" >Accounting & Finance <span>(503)</span></a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<ul class="job-category">
										<li><a href="" >Civil Engineer <span>(503)</span></a></li>
										<li><a href="" >Architect <span>(503)</span></a></li>
										<li><a href="" >Tourism & Hospitality <span>(503)</span></a></li>
										<li><a href="" >Apperal/ Clothing <span>(503)</span></a></li>
										<li><a href="" >Mechanical Engineer <span>(503)</span></a></li>
										<li><a href="" >Security <span>(503)</span></a></li>
										<li><a href="" >Fashion Design & Beauty <span>(503)</span></a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<ul class="job-category">
										<li><a href="" >Public & Customer Relations <span>(503)</span></a></li>
										<li><a href="" >Electrician <span>(503)</span></a></li>
										<li><a href="" >Manufacturing <span>(503)</span></a></li>
										<li><a href="" >Quality Control <span>(503)</span></a></li>
										<li><a href="" >Imports & Exports <span>(503)</span></a></li>
										<li><a href="" >Agriculture & Environment <span>(503)</span></a></li>
										<li><a href="" >Office Admin <span>(503)</span></a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<ul class="job-category">
										<li><a href="" >Sales & Marketing <span>(503)</span></a></li>
										<li><a href="" >Media & Communication <span>(503)</span></a></li>
										<li><a href="" >Hospital & Nursing <span>(503)</span></a></li>
										<li><a href="" >Teaching <span>(503)</span></a></li>
										<li><a href="" >Transport & Ticketing <span>(503)</span></a></li>
										<li><a href="" >Sports & Fitness <span>(503)</span></a></li>
										<li><a href="" >Other <span>(503)</span></a></li>
									</ul>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOP AREA  -->
        
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

		
		
		
		