<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabs.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabstyles.css');?>" />
<script src="<?php echo base_url('assets/js/modernizr.custom.js');?>"></script>
<!--  search inputs top -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php echo base_url('assets/js/myJs/profilesch.js');?>" type="text/javascript"></script> 
<style type="text/css">
  .profileout{
    margin-top: 2%;
    margin-bottom: 3%;
  }
  .profile{
    background-color: #fff;
    margin-bottom: 5%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .lightpan{
    background-color: #fff;
    margin-top: 2%;
    margin-bottom: 3%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .myul {
      list-style: none;
      padding-bottom: 20px;
      padding-left: 0px;
      text-align: left;
  }
  .myli {
    font-size: 16px;
    padding-bottom: 10px;
    border-bottom: 1px solid lightgray;
  }

  .cardheader_sm {
       background: url("<?php echo base_url('assets/img/profilebg2.jpg');?>");
      /*background: url("../../img/profilebg3.jpg");*/
       background-size: cover;
       height: 60px;
    }
</style>

 <?php
     $services = modules::load('Profile')->get_where_custom_tb('services', 'status', "Active");
  ?>

<!-- =================  SLIDING PROFILES ==================== -->

 

<!--  ==========================Need work done?============== -->
<section class=" wow animated fadeInUp " 1style="padding: 40px 20px 40px 20px; background-color: #fff !important;">
<div class="row padding" style="margin-left: 5% !important; margin-right: 5% !important;">
  <div class="col-md-12" style="padding-top: 10px; text-align: right;">
    <div class="btn-group">
      <?php if($this->session->userdata('user_role') == "User") { ?>
          <a href="<?php echo base_url('Job/myjobs/0');?>" class="btn btn-default btn-sm">Posted by me&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          <a href="<?php echo base_url('Job/myjobs/5');?>" class="btn btn-default btn-sm">In-Progress&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          <a href="<?php echo base_url('Job/myjobs/6');?>" class="btn btn-default btn-sm">Completed&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          <a href="<?php echo base_url('Job/myjobs/');?>" class="btn btn-default btn-sm">Revised&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
      <?php } else if($this->session->userdata('user_role') == "Freelancer") { ?>
          <a href="<?php echo base_url('Job/myjobs/1');?>" class="btn btn-default btn-sm">Assigned to me&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          <a href="<?php echo base_url('Job/myjobs/2');?>" class="btn btn-default btn-sm">Accepted by me&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          <a href="<?php echo base_url('Job/myjobs/3');?>" class="btn btn-default btn-sm">Done by me&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          <a href="<?php echo base_url('Job/myjobs/4');?>" class="btn btn-default btn-sm">Closed by me&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          <a href="<?php echo base_url('Job/mybids');?>" class="btn btn-default btn-sm">My bids&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
      <?php } ?>
    </div>
  </div>
  <div class="col-md-8 profileout pull-left ">
    <?php echo $msg; ?>
     <!-- ==========incase no job ============ -->
    <?php if ($jobRes->num_rows()==0) { ?>
      <div class="row profile">
        <div class="col-md-12" style="height: 10px;"></div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 " style="text-align: center;"><img src="<?php echo base_url('assets/img/profile/0/def.png');?>" class="avater" alt="service" style="width: 90%;" ></div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ">
          <a href="" class="pull-right"><i style="font-size: 17px;" class="fa fa-ellipsis-v pull-right"></i></a>
          <h2 style="color: lightgray;"><b>No jobs to display! </b></h2>
          <h4 style="color: lightgray;">Currently we don't have any project under this category. Comming soon!</h4>
          <hr>
        </div>
      </div>
    <?php } ?>
    <!-- =========end no job ================ -->
    <?php foreach ($jobRes->result() as $row1): ?>
      <?php $imgUrl = 'assets/img/profile/0/def.png'; ?>
    <div class="row profile">
      <div class="col-md-12" style="height: 10px;"></div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 " style="text-align: center;"><img src="<?php echo base_url($imgUrl);?>" class="avater" alt="service" style="width: 90%;" ></div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ">
        <a data-toggle="collapse" data-target="#more<?php echo $row1->id ;?>" class="pull-right"><i style="font-size: 17px;" class="fa fa-ellipsis-v pull-right"></i></a>
        <h4><b><?php echo $row1->jobtitle ;?></b></h4>
        <span><i>Category : <?php echo $row1->cat ;?></i></span>
        <hr>
      </div>
      <div class="col-md-12" >
        <p style="font-size: 16px;">
          <?php echo substr($row1->description,0,150) ;?> ...
        </p>
      </div>
      <!-- =================More detail tabs============ -->
      <div class="collapse col-md-12" id="more<?php echo $row1->id ;?>" >
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home<?php echo $row1->id ;?>">Project Info.</a></li>
        <li><a data-toggle="tab" href="#menu<?php echo $row1->id ;?>_1">Action owner</a></li>
        <li><a data-toggle="tab" href="#menu<?php echo $row1->id ;?>_2">Project dates</a></li>
        <li><a data-toggle="tab" href="#menu<?php echo $row1->id ;?>_3">Project status</a></li>
        <li><a data-toggle="tab" href="#menu<?php echo $row1->id ;?>_4">Bids</a></li>
      </ul>
      <div class="tab-content">
        <div id="home<?php echo $row1->id ;?>" class="tab-pane fade in active">
          <h4>Project Description</h4>
          <p style="background-color: #F9F9F9; padding: 5px 10px 5px 10px;" >
            <b><i>Project/ Job ID: </i></b>
            <?php echo $row1->jobid ;?>
            <br><br>
            <b><i>Description: </i></b>
            <?php echo $row1->description ;?>
            <br><br>
            <b><i>Category: </i></b>
            <?php echo $row1->cat ;?>
            <br>
            <b><i>Budget: </i></b>
            <?php echo $row1->budget ;?>
            <br>
            <b><i>Total cost: </i></b>
            TZS <?php echo $row1->totalcost ;?>
            <br>
            <b><i>Skills: </i></b>
            <?php echo $row1->skills ;?>
            <br>
            <b><i>Remarks: </i></b>
            <?php echo $row1->remarks ;?>
          </p>
        </div>
        <div id="menu<?php echo $row1->id ;?>_1" class="tab-pane fade">
          <h4>Project perticipants</h4>
          <p style="background-color: #F9F9F9; padding: 5px 10px 5px 10px;" >
            <b><i>Posted by: </i></b>
            <?php $user = modules::load('Users')->get_where($row1->postedby); if ($user->num_rows()>0) {echo $user->row()->name;} ?>
            <br><br>
            <b><i>Assigned to: </i></b>
            <?php $user2 = modules::load('Users')->get_where($row1->assignedto); if ($user2->num_rows()>0) {echo $user2->row()->name;} ?>
            <br><br>
            <b><i>Accepted by: </i></b>
            <?php $user3 = modules::load('Users')->get_where($row1->acceptedby); if ($user3->num_rows()>0) {echo $user3->row()->name;} ?>
            <br><br>
            <b><i>Done by: </i></b>
            <?php $user4 = modules::load('Users')->get_where($row1->doneby); if ($user4->num_rows()>0) {echo $user4->row()->name;} ?>
            <br><br>
            <b><i>Closed by: </i></b>
            <?php $user5 = modules::load('Users')->get_where($row1->closedby); if ($user5->num_rows()>0) {echo $user5->row()->name;} ?>
          </p>
        </div>
        <div id="menu<?php echo $row1->id ;?>_2" class="tab-pane fade">
          <h4>Project Dates</h4>
          <p style="background-color: #F9F9F9; padding: 5px 10px 5px 10px;" >
            <b><i>Posted on: </i></b>
            <?php echo $row1->postedon ;?>
            <br><br>
            <b><i>Accepted on: </i></b>
            <?php echo $row1->acceptedon ;?>
            <br><br>
            <b><i>Paid on: </i></b>
            <?php echo $row1->paidon ;?>
            <br><br>
            <b><i>Closed on: </i></b>
            <?php echo $row1->closedon ;?>
            <br><br>
            <b><i>Date: </i></b>
            <?php echo $row1->date ;?>
            <br><br>
            <b><i>Last modified: </i></b>
            <?php echo $row1->udate ;?>
          </p>
        </div>
        <div id="menu<?php echo $row1->id ;?>_3" class="tab-pane fade">
          <h4>Project Status</h4>
          <p style="background-color: #F9F9F9; padding: 5px 10px 5px 10px;" >
            <b><i>Post status: </i></b>
            <?php echo "Posted" ;?>
            <br><br>
            <b><i>Accept status: </i></b>
            <?php echo $row1->progress ;?>
            <br><br>
            <b><i>Pay status: </i></b>
            <?php echo $row1->paystatus ;?>
            <br><br>
            <b><i>Progress status: </i></b>
            <?php echo $row1->progress ;?>
            <br><br>
            <b><i>Project status: </i></b>
            <?php echo $row1->status ;?>
          </p>
        </div>
        <div id="menu<?php echo $row1->id ;?>_4" class="tab-pane fade">
          <h4>Available bids</h4>
        </div>
      </div>
      </div>
      <!-- =============end More detail tabs============ -->
      <div class="col-md-12" style="padding-bottom: 10px; font-size: 18px; padding-top: 5px; border-top: 1px solid lightgray;" >
        <!-- <hr> -->
        <?php if($row1->progress=="Pending") {?>
        <a href="<?php echo base_url('Job/jobedit/');?><?php echo $row1->id;?>" class="pull-left">Edit&nbsp;&nbsp;<i class="fa fa-edit"></i></a>
        <?php } ?>
        <a data-toggle="collapse" data-target="#more<?php echo $row1->id ;?>" href1="<?php echo base_url('Job/jobview/');?><?php echo $row1->id;?>" class="pull-right">View more&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
        <br>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  

<!-- <div class="col-md-1 padding lightpan"></div> -->
<!-- Large devices -->
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding lightpan pull-right hidden-xs hidden-sm" style="width: 30%;">
    <h3>Available Jobs</h3>
    <?php 
        $jobres = modules::load('Job')->get_where_custom('status', "Open");
    ?>
    <hr>
    <ul class="myul">
        <?php foreach ($jobres->result() as $row3): ?>
        <li class="myli"><a  href="<?php echo base_url('Job/jobview/');?><?php echo $row3->jobid;?>"><i class="fa fa-folder-open"></i> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row3->jobtitle;?></a></li>
        <?php endforeach; ?>
    </ul>
  </div>
<!-- Small devices -->
    <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding lightpan pull-right hidden-lg hidden-md" style1="width: 100%;">
    <hr>
    <ul class="myul">
        <li class="myli"><a class="btn btn-info" href="<?php echo base_url('Job/myjobs/0');?>">Posted by me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a></li>
        <li class="myli"><a class="btn btn-info" href="<?php echo base_url('Job/myjobs/1');?>">Assigned to me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a></li>
        <li class="myli"><a class="btn btn-info" href="<?php echo base_url('Job/myjobs/2');?>">Accepted by me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a></li>
        <li class="myli"><a class="btn btn-info" href="<?php echo base_url('Job/myjobs/3');?>">Done by me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a></li>
        <li class="myli"><a class="btn btn-info" href="<?php echo base_url('Job/myjobs/4');?>">Closed by me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a></li>
    </ul>
  </div> -->
</div>
</section>
<!--  =======================end panel done?============= -->