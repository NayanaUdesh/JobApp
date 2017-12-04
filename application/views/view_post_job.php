<!DOCTYPE HTML>
<html>

<head>
    <title>Post Job | LK Job Bank</title>

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
                            <a class="logo" href="i<?php echo base_url(); ?>">
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
                        <li class="active"><a href="<?php echo base_url(); ?>menu/PostJob">Post Jobs</a> </li>
                        <li><a href="<?php echo base_url(); ?>menu/Advertise">Advertise</a> </li>
                        <li><a href="<?php echo base_url(); ?>menu/AboutPage">About Us</a> </li>
                        <li><a href="<?php echo base_url(); ?>menu/ContactPage">Contact Us</a> </li>
                        
                    </ul>
                </div>
            </div>
        </header>
        
        
        
        <!-- TOP AREA -->
        <div class="wrapper show-onload">
			<div class="rel">
				<div class="main-page-title"><!-- start main page title -->
					<div class="container">
						<div class="post-job-title"><h1>Post a Job<h1></div>
						<div class="post-job-phone">Call: 94 2 543 141</div>
					</div>
				</div><!-- end main page title -->
				
				<div class="container">
					<?php
                        $this->load->helper("form");
						if($this->session->flashdata('PostSucess')){
							?><div class="alert alert-success">  <?php echo $this->session->flashdata('PostSucess');?></div>
							<?php 
						}else if($this->session->flashdata('LogIntoPostAD')){
							?><div class="alert alert-danger"> <?php echo $this->session->flashdata('LogIntoPostAD');?></div>
							<?php 
						}
						else if($this->session->flashdata('ErrorJobPost')){
							?><div class="alert alert-danger"> <?php echo $this->session->flashdata('ErrorJobPost');?></div>
							<?php 
						}
                    ?>
					
					<div class="spacer-1">&nbsp;</div>
					<div class="row">
						<div class="col-md-8">
						<?php echo form_open_multipart('jobs'); ?>
							<div class="post-job-form">
								
								<div class="form-group">
									<label for="jobtitle">Job Title</label><?php echo form_error('jobtitle'); ?>
									<?php echo form_input(array('id' => 'jobtitle', 'name' => 'jobtitle', 'class' => 'form-control input')); ?>
									<!--
									<input type="text" class="form-control input" id="jobtitle" value="<?php echo set_value('jobtitle'); ?>">
									-->
								</div>
								
								<div class="form-group">
									<label for="jobcategory">Job Category <span></span></label> <?php echo form_error('jobcategory'); ?>
									<?php echo form_input(array('id' => 'postjobcategory', 'name' => 'postjobcategory', 'class' => 'form-control input')); ?>
									<p>Load Sub Catogory depending on this Input. This Should be an autocomplete</p>
								</div>
								
								<div class="row">
									<div class="form-group col-md-8">
										<label for="subcategory">Sub Category <span>(Optional)</span></label><?php echo form_error('subcategory'); ?>
										<?php echo form_input(array('id' => 'postsubcategory', 'name' => 'postsubcategory', 'class' => 'form-control input')); ?>
										<p>Load Sub Catogory depending on the Job Category ID. This should be a dropdown</p>
									</div>
								</div>

								<div class="form-group">
									<label for="joblocation">Job Location</label> <?php echo form_error('joblocation'); ?>
									<?php
											$joblocations = array(
												'colombo' => 'Colombo',
												'galle' => 'Galle',
												'matara' => 'Matara',
												'kandy' => 'Kandy',
												'trincomalee' => 'Trincomalee',
												'negambo' => 'Negambo',
												'kadawatha' => 'Kadawatha',
												'wattala' => 'Wattala',
												'malabe' => 'Malabe',
												'homagama' => 'Homagama',
												'piliyandala' => 'Piliyadala'
											);										
											
											$JobLocSettings = array('id' => 'joblocation', 'class' => 'form-control', 'placeholder' => 'Select Job Location');
										
										echo form_dropdown('joblocation', $joblocations, '', $JobLocSettings ) ?>
								</div>

								<div class="row">
									<div class="form-group col-md-6">
										<label for="jobtype">Job Type</label> <?php echo form_error('jobtype'); ?>
										<?php
											$jobTypeInputs = array(
												'fulltime' => 'Full Time',
												'contract' => 'Contract',
												'parttime' => 'Part Time',
												'freelance' => 'Freelance'
											);										
											
											$JobTypeSettings = array('id' => 'jobtype', 'class' => 'form-control');
										
										echo form_dropdown('jobtype', $jobTypeInputs, '', $JobTypeSettings ) ?>
									</div>
								</div>
								
								<div class="form-group">
									<label for="jobdescription">Job Description</label><?php echo form_error('description'); ?>
									<?php echo form_textarea(array('id' => 'description', 'name' => 'description', 'class' => 'form-control textarea', 'rows' => '2')); ?>
									<!--
										<textarea class="form-control textarea" id="description" value="<?php echo set_value('description'); ?>"></textarea>
									-->
								</div>

								<div class="row">
									<div class="form-group col-md-6">
										<label for="appemail">Application Email</label><?php echo form_error('appemail'); ?>
										<?php echo form_input(array('id' => 'appemail', 'name' => 'appemail', 'class' => 'form-control input')); ?>
									</div>
									
									<div class="form-group col-md-6">
										<label for="appemail">Application URL</label><?php echo form_error('appurl'); ?>
										<?php echo form_input(array('id' => 'appurl', 'name' => 'appurl', 'class' => 'form-control input')); ?>
									</div>
								</div>
									
								<div class="row">
									<div class="form-group col-md-6">
										<label for="">Salary <span>(Optional)</span></label><?php echo form_error('salary'); ?>
										<?php echo form_input(array('id' => 'salary', 'name' => 'salary', 'class' => 'form-control input')); ?>
									</div>
									
									<div class="form-group col-md-6">
										<label for="negotiable">Salary Negotiable</label><?php echo form_error('negotiable'); ?>
										<?php echo form_checkbox(array('id' => 'negotiable', 'name' => 'negotiable', 'class' => 'form-control input', 'value' => '')); ?>
									</div>
								</div>

								<div class="row">
									<div class="form-group col-md-6">
										<div class="form-group form-group form-group-icon-left"><i class="fa fa-calendar input-icon-sm input-icon-highlight"></i>
											<label for="closedate">Closing Date</label><?php echo form_error('closedate'); ?>
											<?php echo form_input(array('id' => 'closedate', 'name' => 'closedate', 'class' => 'date-pick form-control', 'type' => 'text', 'data-date-format' => 'M d, D')); ?>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<label for="logo">Job Image <span>(Required)</span> <small>Max. file size: 8 MB.</small></label> <?php echo form_error('jobimage'); ?>
									<div class="jobimage">
										<?php echo form_input(array('id' => 'jobimage', 'name' => 'jobimage', 'type' => 'file')); ?>
									</div>
								</div>
								
								<div class="form-group">
									<label for="jobtag">Job Tags <span>(Optional)</span></label><?php echo form_error('jobtag'); ?>
									<?php echo form_input(array('id' => 'jobtag', 'name' => 'jobtag', 'class' => 'form-control input', 'data-role' => 'tagsinput')); ?>
									<p>Comma separate tags, such as required skills or technologies, for this job.</p>
								</div>

								<h3>Company Details</h3>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="companyname">Company Name</label><?php echo form_error('companyname'); ?>
										<?php echo form_input(array('id' => 'companyname', 'name' => 'companyname', 'class' => 'form-control input')); ?>
									</div>

									<div class="form-group col-md-6">
										<label for="website">Website <span>(Optional)</span></label><?php echo form_error('website'); ?>
										<?php echo form_input(array('id' => 'website', 'name' => 'website', 'class' => 'form-control input')); ?>
									</div>
								</div>

								<div class="form-group">
									<label for="companydesc">Description</label><?php echo form_error('companydesc'); ?>
									<?php echo form_textarea(array('id' => 'companydesc', 'name' => 'companydesc', 'class' => 'form-control textarea', 'rows' => '2')); ?>
								</div>
								
								<div class="form-group">
									<label for="linkedin">Linkedin username <span>(Optional)</span></label><?php echo form_error('linkedin'); ?>
									<?php echo form_input(array('id' => 'linkedin', 'name' => 'linkedin', 'class' => 'form-control input')); ?>
								</div>
								<div class="form-group">
									<label for="logo">Logo <span>(Optional)</span> <small>Max. file size: 2 MB.</small></label> <?php echo form_error('logo'); ?>
									<div class="upload">
										<?php echo form_input(array('id' => 'logo', 'name' => 'logo', 'type' => 'file')); ?>
									</div>
								</div>
								<div class="spacer-1">&nbsp;</div>
								<div class="form-group">
									<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-default btn-green')); ?>
								</div>
							</div>
						<?php echo form_close(); ?>
							<div class="spacer-2">&nbsp;</div>
						</div>
						
						<div class="col-md-4">
							<div class="job-side-wrap">
								<h4>ALREADY HAVE AN ACCOUNT?</h4>
								<p>
									Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search.
								</p>
								<p class="centering"><button class="btn btn-default btn-green"><a href="<?php echo base_url(); ?>site/Login">LOG IN</a></button></p>
							</div>

							<div class="job-side-wrap">
								<h4>Post Your Resume</h4>
								<p>
									At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti molestias
								</p>
								<p class="centering"><button class="btn btn-default btn-black">UPLOAD YOUR RESUME <i class="icon-upload white"></i></button></p>
							</div>

							<div class="job-side-wrap">
								<h4>New On Jobboard</h4>
								<p>
									At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti molestias
								</p>
								<p class="centering"><button class="btn btn-default btn-blue"><a href="<?php echo base_url(); ?>site/Login">REGISTER NOW</a></button></p>
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
                            <img src="<?php echo base_url("assets/img/logo-invert.png");?>" alt="Image Alternative text" title="Image Title" />
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

		
		
		
		