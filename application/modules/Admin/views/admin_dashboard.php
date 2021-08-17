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
.offer-info {	border-color: #5bc0de; }
.offer-info .shape{
	border-color: transparent #5bc0de transparent transparent;
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

<div class="box box-info" style="margin-top: 15px;">
	<div class="box-header">
		<h3 class="box-title"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;<b><?php echo $this->lang->line('msg_dashboard'); ?></b></h3>
	</div>
    
    <div class="box-body padding">
    <div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon glyphicon-eye-open"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						<a href="<?php echo base_url('Job/historical_jobs');?>">Total Amount</a>
					<?php //echo $this->lang->line('msg_users'); ?>  <br> 
					<label class="label label-info">TZS <?php echo number_format(modules::load('Admin')->get_sum_where_custom1('job', 'paidamount', 'paystatus', "Done")->row()->paidamount,0);?></label>
					</h3>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon glyphicon-eye-open"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						<a href="<?php echo base_url('Job/historical_jobs');?>">Commisions</a>
					<?php //echo $this->lang->line('msg_users'); ?>  <br> 
					<label class="label label-info">TZS <?php echo number_format(modules::load('Admin')->get_sum_where_custom1('job', 'commission', 'paystatus', "Done")->row()->commission,0);?></label>
					</h3>
				</div>
			</div>
		</div>


    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon glyphicon-eye-open"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						<a href="<?php echo base_url('Job/manage_jobs');?>">Open Projects</a>
					<?php //echo $this->lang->line('msg_users'); ?>  <br> 
					<label class="label label-info"><?php echo modules::load('Job')->get_where_custom_tb('job', 'status',"Open")->num_rows();?></label>
					</h3>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon glyphicon-eye-open"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						<a href="<?php echo base_url('Job/historical_jobs');?>">Closed Projects</a>
					<?php //echo $this->lang->line('msg_users'); ?>  <br> 
					<label class="label label-info"><?php echo modules::load('Job')->get_where_custom_tb('job', 'status',"Closed")->num_rows();?></label>
					</h3>
				</div>
			</div>
		</div>
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon glyphicon-user"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						<a href="<?php echo base_url('Profile/manageProfiles');?>">Freelancers</a>
					<?php //echo $this->lang->line('msg_users'); ?>  <br> 
					<label class="label label-info"><?php echo modules::load('Users')->get_where_custom('role',"Freelancer")->num_rows();?></label>
					</h3>
				</div>
			</div>
		</div>
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon glyphicon-user"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						<a href="<?php echo base_url('Users/manageUsers/User');?>">Employers</a>
					<?php //echo $this->lang->line('msg_users'); ?>  <br> 
					<label class="label label-info"><?php echo modules::load('Users')->get_where_custom('role',"User")->num_rows();?></label>
					</h3>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<!-- <span class="glyphicon glyphicon glyphicon-th"></span>	 -->						
						<span class="glyphicon glyphicon glyphicon-comment"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 <?php echo $this->lang->line('msg_posts'); ?>  <br> 
						 <label class="label label-info"> <?php echo modules::load('Artical')->get_tb('news', 'id')->num_rows();?></label>
					</h3>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-radius offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon  glyphicon-user"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 <?php echo $this->lang->line('msg_profiles'); ?>  <br> 
						 <label class="label label-info"> <?php echo modules::load('Profile')->get('id')->num_rows();?></label>
					</h3>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon  glyphicon-calendar"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Blog Posts
						<?php //echo $this->lang->line('msg_blog'); ?>  <br> 
						<label class="label label-info"><?php echo modules::load('Artical')->get('id')->num_rows();?></label>
					</h3>
				</div>
			</div>
		</div>
        </div>

    </div><!--  =========== end body ========= -->

    <div class="box-footer">
    	
    </div>
</div>



<!-- <div class="box">
	<div class="box-header">
		<h3 class="box-title"><i class="fa fa-clipboard"></i>&nbsp;&nbsp;<b>Profile Registration Steps:</b></h3>
	</div>

	<div class="box-body padding" style="font-size: 18px; ">
		<ol>
			<li>Click on Create New Profile Tab</li>
			<li>Enter Profile Name (This should be a short and Clear Sentense)</li>
			<li>Select Profile Type, Category and Sub-category</li>
			<li>Specify you Cpntacts (Phone nuber and Email address)</li>
			<li>Enter your Location Details (Phyisical address)</li>
			<li>Enter Profile Description. This should be  a full description showing who you are?, what you do? and how defferent from others you are? Explain yourself properly so that users can be interested on you.</li>
			<li><b>Then  Click "SUBMIT"</b></li>
		</ol>
	</div>

	<div class="box-footer" style="text-align: center;">
		&copy:Huduma : All Rghts Reserved
	</div>
</div> -->