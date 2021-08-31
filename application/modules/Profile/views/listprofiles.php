<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabs.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabstyles.css');?>" />
<script src="<?php echo base_url('assets/js/modernizr.custom.js');?>"></script>
<!--  search inputs top -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php echo base_url('assets/js/myJs/profilesch.js');?>" type="text/javascript"></script> 
<style type="text/css">
  #browse {
    background-color: #4e4b4a !important;
  }
  .profileout{
    margin-top: 2%;
    margin-bottom: 20px;
  }
  .profile{
    background-color: #fff;
    margin-bottom: 20px;
    border: 1px solid lightgray;
    /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
  }
  .lightpan{
    background-color: #fff;
    margin-top: 2%;
    margin-bottom: 20px;
    border: 1px solid lightgray;
    /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
  }
  .myul {
      padding-bottom: 50px;
  }
  .myli {
    font-size: 18px;
    padding-bottom: 10px;
    padding-top: 10px;
  }
  .myli:hover {
    background-color: #F9F9F9;
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
  
  <div class="col-md-8 profileout pull-left ">
    <!-- title -->
    <div class="row " style="margin-bottom: 20px;">
      <div class="col-md-9" style="font-size: 20px; color: gray;"> 
        <?php echo $title; ?> , <?php echo number_format($profileRes->num_rows(),0) ?>
      </div>
      <div class="col-md-3">
        <a href="<?php echo base_url('Profile/findprofile');?>" class="btn btn-info btn-md pull-right">&nbsp;&nbsp;&nbsp;&nbsp;Find Profiles<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
      </div>
    </div>
    <!-- end title -->
    <!-- ==========incase no profile ============ -->
    <?php if ($profileRes->num_rows()==0) { ?>
      <div class="row profile">
        <div class="col-md-12" style="height: 10px;"></div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 " style="text-align: center;"><img src="<?php echo base_url('assets/img/profile/0/def.png');?>" class="avater" alt="service" style="width: 90%;" ></div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ">
          <a href="" class="pull-right"><i style="font-size: 17px;" class="fa fa-ellipsis-v pull-right"></i></a>
          <h2 style="color: lightgray;"><b>No data to display! </b></h2> 
          <h4 style="color: lightgray;">Currently we don't have any profile under this category. Comming soon!</h4>
        </div>
      </div>
    <?php } else { ?>
       
    <?php } ?>
    <!-- =========end no profile ================ -->
    <?php foreach ($profileRes->result() as $row1): ?>
      <?php $imgUrl = 'assets/img/profile/0/'.$row1->img; ?>
    <div class="row profile">
      <div class="col-md-12" style="height: 10px;"></div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;"><a href="<?php echo base_url('Profile/userProfile');?>/<?php echo $row1->userid;?>"><img src="<?php echo base_url($imgUrl);?>" class="avater" alt="service" style="width: 90%;" ></a></div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="border-bottom: 1px solid #F9F9F9; padding-bottom: 5px; margin-bottom: 10px;">
        <a data-toggle="collapse" data-target="#more<?php echo $row1->id ;?>" class="pull-right"><i class="fa fa-clock pull-right"></i> <small><?php echo mdate('%Y')-$row1->yob; ?> years</small></a>
        <h4><a style="color: #222;" href="<?php echo base_url('Profile/userProfile');?>/<?php echo $row1->userid;?>"><b><?php echo $row1->profilename ;?></b></a></h4>
        <span><i><?php echo $row1->type ;?> > <?php echo $row1->category ;?> > <?php echo $row1->subcategory ;?></i></span>
        <br><small><?php echo $row1->country ;?>, <?php echo $row1->region ;?></small>
      </div>
      <!-- <div class="col-md-12" style="padding-bottom: 10px; padding-top: 5px; font-size: 18px; border-top1: 1px solid lightgray;" >
        <a href="<?php echo base_url('Job/post/');?><?php echo $row1->userid ;?>" class="pull-left">Assign task&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
        <a href="<?php echo base_url('Profile/userProfile');?>/<?php echo $row1->userid;?>" class="pull-right">View Profile&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
        <br>
      </div> -->
    </div>
    <?php endforeach; ?>
  </div>
  

  <!-- <div class="col-md-1 padding lightpan"></div> -->
<!-- Large devices -->
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding lightpan pull-right hidden-xs hidden-sm" style="width: 30%;">
    <h3>Available categories</h3>
    <hr>
    <ul class="myul">
      <?php foreach ($services->result() as $row): ?>
        <?php $count = modules::load('Profile')->count_where('category', $row->service); ?>
        <li class="myli"><a href="<?php echo base_url('Profile/listprofiles/');?><?php echo $row->service;?>"><?php echo $row->service;?><small class="badge pull-right bg-green"><?php echo number_format($count,0); ?></small></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <!-- small device -->
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding lightpan pull-right hidden-lg hidden-md" style1="width: 100%;">
    <h3>Available categories</h3>
    <hr>
    <ul class="myul">
      <?php foreach ($services->result() as $row): ?>
        <?php $count = modules::load('Profile')->count_where('category', $row->service); ?>
        <li class="myli"><a href="<?php echo base_url('Profile/listprofiles/');?><?php echo $row->service;?>"><?php echo $row->service;?><small class="badge pull-right bg-green"><?php echo number_format($count,0); ?></small></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
</section>
<!--  =======================end panel done?============= -->