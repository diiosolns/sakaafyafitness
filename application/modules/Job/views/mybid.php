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
  }
  .myli: hover {
    background-color: #F8F8F8;
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
      <a href="<?php echo base_url('Job/myjobs/0');?>" class="btn btn-default btn-sm">Posted by me&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
      <a href="<?php echo base_url('Job/myjobs/1');?>" class="btn btn-default btn-sm">Assigned to me&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
      <a href="<?php echo base_url('Job/myjobs/2');?>" class="btn btn-default btn-sm">Accepted by me&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
      <a href="<?php echo base_url('Job/myjobs/3');?>" class="btn btn-default btn-sm">Done by me&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
      <a href="<?php echo base_url('Job/myjobs/4');?>" class="btn btn-default btn-sm">Closed by me&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
      <a href="<?php echo base_url('Job/mybids');?>" class="btn btn-default btn-sm">My bids&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-md-8 profileout pull-left ">
    <?php  echo $msg; ?>
     <!-- ==========incase no job ============ -->
    <?php if ($bidRes->num_rows()==0) { ?>
      <div class="row profile">
        <div class="col-md-12" style="height: 10px;"></div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 " style="text-align: center;"><img src="<?php echo base_url('assets/img/profile/0/def.png');?>" class="avater" alt="service" style="width: 90%;" ></div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ">
          <a href="" class="pull-right"><i style="font-size: 17px;" class="fa fa-ellipsis-v pull-right"></i></a>
          <h2 style="color: lightgray;"><b>No bids to display! </b></h2>
          <h4 style="color: lightgray;">Currently you don't have any bid under any project. Bid now!</h4>
          <hr>
        </div>
      </div>
    <?php } ?>
    <!-- =========end no job ================ -->
    <?php foreach ($bidRes->result() as $row1): ?>
      <?php $imgUrl = 'assets/img/profile/0/def.png'; ?>
    <div class="row profile">
      <div class="col-md-12" style="height: 10px;"></div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 " style="text-align: center;"><img src="<?php echo base_url($imgUrl);?>" class="avater" alt="service" style="width: 90%;" ></div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 " style1="border-bottom: 1px solid lightgray;">
        <a data-toggle="collapse" data-target="#more<?php echo $row1->id ;?>" class="pull-right"><i style="font-size: 17px;" class="fa fa-ellipsis-v pull-right"></i></a>
        <b><?php echo $this->session->userdata('user_name') ;?></b>
        <span class="pull-right"><b>TZS <?php echo number_format($row1->amount);?></b> in <?php echo $row1->duration ;?>&nbsp;&nbsp;&nbsp;</span>
        <br>
        <span><a href="<?php echo base_url('Job/jobview/');?><?php echo $row1->jobid ;?>">Job ID : <?php echo $row1->jobid ;?></a></span>
        <hr>
      </div>
      <div class="col-md-12" >
        <p style="font-size: 16px;">
          <?php echo substr($row1->remarks,1,150) ;?> 
        </p>
      </div>
      <div class="col-md-12"  >
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