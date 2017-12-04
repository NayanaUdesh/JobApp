<?php if(!empty($posts)): foreach($posts as $post): ?>
    <div class="recent-job-list-home"><!-- Tabs content -->
		<div class="job-list-logo col-md-1">
			<?php echo '<img src="data:image/jpeg;base64,' . $post['clogo'] . '" />'; ?>
		</div>
		<div class="col-md-5 job-list-desc">
			<h6><?php echo $post['title']; ?></h6>
			<p><?php echo $post['description']; ?></p>
		</div>
		
		
		<div class="col-md-5 full-tab">
			<div class="row">
				<div class="job-list-location col-md-5 ">
					<h6><i class="fa fa-map-marker"></i><?php echo $post['location']; ?></h6>
				</div>
				<div class="job-list-type col-md-3 ">
					<h6><i class="fa fa-user"></i><?php echo $post['type']; ?></h6>
				</div>
				<div class="job-list-type col-md-2">
					<h6><?php echo $post['cname']; ?></h6>
				</div>
				<div class="job-list-type col-md-2">
					<h6><?php echo $post['edate']; ?></h6>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div><!-- Tabs content -->
<?php endforeach; else: ?>
<p>Job(s) not available.</p>
<?php endif; ?>
<?php echo $this->ajax_pagination->create_links(); ?>