<style type="text/css">
	  .shape{    
    border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
	-ms-transform:rotate(360deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(360deg); /* Safari and Chrome */
	transform:rotate(360deg);
}
.offer{
	background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.offer:hover {
    -webkit-transform: scale(1.1); 
    -moz-transform: scale(1.1); 
    -ms-transform: scale(1.1); 
    -o-transform: scale(1.1); 
    transform:rotate scale(1.1); 
    -webkit-transition: all 0.4s ease-in-out; 
-moz-transition: all 0.4s ease-in-out; 
-o-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
    }
.shape {
	border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-radius{
	border-radius:7px;
}
.offer-danger {	border-color: #d9534f; }
.offer-danger .shape{
	border-color: transparent #d9534f transparent transparent;
}
.offer-success {	border-color: #5cb85c; }
.offer-success .shape{
	border-color: transparent #5cb85c transparent transparent;
}
.offer-default {	border-color: #999999; }
.offer-default .shape{
	border-color: transparent #999999 transparent transparent;
}
.offer-primary {	border-color: #428bca; }
.offer-primary .shape{
	border-color: transparent #428bca transparent transparent;
}
.offer-info {	border-color: #1328a8; }
.offer-info .shape{
	border-color: transparent #1328a8 transparent transparent;
}
.offer-warning {	border-color: #f0ad4e; }
.offer-warning .shape{
	border-color: transparent #f0ad4e transparent transparent;
}

.shape-text{
	color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
	-ms-transform:rotate(30deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(30deg); /* Safari and Chrome */
	transform:rotate(30deg);
}	
.offer-content{
	padding:0 20px 10px;
}
@media (min-width: 487px) {
  .container {
    max-width: 750px;
  }
  .col-sm-6 {
    width: 50%;
  }
}
@media (min-width: 900px) {
  .container {
    max-width: 970px;
  }
  .col-md-4 {
    width: 33.33333333333333%;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1170px;
  }
  .col-lg-3 {
    width: 25%;
  }
  }

</style>

<?php 
	$userid = $this->session->userdata('user_id');
    $myprofiles = modules::load('Job')->Mdl_job->get_where_custom_tb('profile', 'userid', $userid);
    $myprojects = modules::load('Job')->Mdl_job->get_where_custom_tb('job', 'postedby', $userid);
	$newprojects = modules::load('Job')->Mdl_job->get_where_custom_tb('job', 'progress', "Pending");
	$inprogress = modules::load('Job')->Mdl_job->get_where_custom_tb('job', 'progress', "In-Progress");
	$freelancers = modules::load('Profile')->Mdl_profile->get('id');
	$myinprogress = modules::load('Job')->Mdl_job->get_where_custom2( 'progress', "In-Progress", 'postedby', $userid);
	$allprojects = modules::load('Job')->Mdl_job->get_where_custom_tb('job', 'status', "Open");
	$mychats = 0;

	//new queries
	$comments = modules::load('Profile')->Mdl_profile->get_where_custom3_tb('comment', 'userid', $userid, 'type', 'Comment', 'status', 'Active');
    $userres = modules::load('Users')->get_where_custom('id', $userid);
    $profile_views = modules::load('Profile')->Mdl_profile->count_where_custom2_tb('action', 'userid', $userid, 'action', 1);
    $profile_likes = modules::load('Profile')->Mdl_profile->count_where_custom2_tb('action', 'userid', $userid, 'action', 2);
	$services = modules::load('Profile')->get_where_custom_tb('services', 'status', "Active");
  	$sports = modules::load('Profile')->get_where_custom_tb('sports', 'status', "Active");
  	$sportsperson = modules::load('Profile')->count_where('category', 'Sportsperson');
  	$trainee = modules::load('Profile')->count_where('category', 'Trainee');
  	$trainer = modules::load('Profile')->count_where('category', 'Trainer');
?>

<div class="box box-info" style="margin-top: 15px;">
	<div class="box-header">
		<h3 class="box-title"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;<b><?php echo $this->lang->line('msg_dashboard'); ?></b></h3>
		<?php if($this->session->userdata('user_role') == "User") { ?>
			<a href="<?php echo base_url('Job/post/');?>" class="btn btn-info btn-lg pull-right" style="color: #fff; margin-top: 5px; margin-right: 20px;" ><b>Post a job (FREE)</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
		<?php } ?>
	</div>
    
<div class="box-body padding">
    <div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a href="<?php echo base_url('Profile/listprofiles/Sportsperson');?>">
				<div class="offer offer-info">
					<div class="shape">
						<div class="shape-text">
							<span class="glyphicon  glyphicon-calendar"></span>							
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							Sportsperson<?php //echo $this->lang->line('msg_'); ?><br> 
							<label class="badge badge-info bg-green pull-right"><?php echo number_format($sportsperson,0);?></label>
						</h3>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a href="<?php echo base_url('Profile/listprofiles/Trainee');?>">
				<div class="offer offer-info">
					<div class="shape">
						<div class="shape-text">
							<span class="glyphicon  glyphicon-calendar"></span>							
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							Trainees<?php //echo $this->lang->line('msg_'); ?><br> 
							<label class="badge badge-info bg-green pull-right"><?php echo number_format($trainee,0);?></label>
						</h3>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a href="<?php echo base_url('Profile/userProfile/');?><?php echo $userid;?>">
				<div class="offer offer-info">
					<div class="shape">
						<div class="shape-text">
							<span class="glyphicon  glyphicon-calendar"></span>							
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							Comments<?php //echo $this->lang->line('msg_'); ?><br> 
							<label class="badge badge-info bg-green pull-right"><?php echo number_format($comments->num_rows(),0);?></label>
						</h3>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a href="<?php echo base_url('Profile/userProfile/');?><?php echo $userid;?>">
				<div class="offer offer-info">
					<div class="shape">
						<div class="shape-text">
							<span class="glyphicon  glyphicon-comment"></span>							
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							Messages<?php //echo $this->lang->line('msg_'); ?><br> 
							<label class="badge badge-info bg-green pull-right"><?php echo number_format($comments->num_rows(),0);?></label>
						</h3>
					</div>
				</div>
			</a>
		</div>	
    </div>
</div><!--  =========== end body ========= -->
    <div class="box-footer">	
    </div>
</div>



<div class="box box-info" style=" margin-bottom: 200px;">
	<div class="box-header">
		<h3 class="box-title sitecolor2-1"><i class="fa fa-search"></i>&nbsp;&nbsp;<b>Find Profiles</b></h3>
	</div>
	<div class="box-body padding" style="font-size: 18px; text-align: right; ">
        <form class="form-style-1" action="<?php echo base_url('Profile/findprofile')?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-3 find_input">
                <div class="form-group">
                    <select class=" form-control input-sm1" name="type" id="type" required="">
                      <option value="Other"><?php echo $this->lang->line('msg_select_profile_type'); ?></option>
                      <option value="Individual">Individual</option>
                      <option value="Group">Group/ Team</option>
                      <option value="Company">Company</option>
                    </select>
                </div>
              </div>
              <div class="col-md-3 find_input">
                <div class="form-group">
                    <select class="form-control" name="category" id="category" required="">
                      <option value="Others">Select category<?php //echo $this->lang->line('msg_select_profile_category'); ?></option>
                      <?php foreach ($services->result() as $row1): ?>
                        <option value="<?php echo $row1->service;?>"><?php echo $row1->service;?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
              </div>
              <div class="col-md-3 find_input">
                <div class="form-group">
                    <select class="form-control" name="subcategory" id="subcategory" required="">
                      <option value="Others">Select type of sport<?php //echo $this->lang->line('msg_select_profile_subcategory'); ?></option>
                      <?php foreach ($sports->result() as $row3): ?>
                        <option value="<?php echo $row3->name;?>"><?php echo $row3->name;?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
              </div>
              <div class="col-md-3 find_input">
                <button type="submit" name="findBtn" value="ok" class="btn btn-info btn-md pull-right1">&nbsp;&nbsp;&nbsp;&nbsp;Search Profiles<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
              </div>
          </div>
        </form>
	</div>
	<div class="box-footer" style="text-align: center;">
		<div class="btn-group">
		  	<?php foreach ($services->result() as $row1): ?>
	      	<a href="<?php echo base_url('Profile/listprofiles/');?><?php echo $row1->service;?>" class="btn btn-default btn-sm"><?php echo $row1->service;?>&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
	      	<?php endforeach; ?> 
	    </div>	
	</div>
</div>