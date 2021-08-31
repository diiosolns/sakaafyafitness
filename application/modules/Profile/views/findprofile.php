<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabs.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabstyles.css');?>" />
<script src="<?php echo base_url('assets/js/modernizr.custom.js');?>"></script>
<!--  search inputs top -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php echo base_url('assets/js/myJs/profilesch.js');?>" type="text/javascript"></script> 
<style type="text/css">
  #find {
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

  .find_input {
    margin-top: 20px;
  }
</style>

<?php
  $services = modules::load('Profile')->get_where_custom_tb('services', 'status', "Active");
  $sports = modules::load('Profile')->get_where_custom_tb('sports', 'status', "Active");
?>

<!--  ==========================Need work done?============== -->
<section class=" wow animated fadeInUp " 1style="padding: 40px 20px 40px 20px; background-color: #fff !important;">
<div class="row padding" style="margin-left: 5% !important; margin-right: 5% !important;">
  
  <div class="col-md-8 profileout pull-left ">
    <div class="row profile">
        <div class="col-md-12" style="height: 10px;"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
          <h2 style="color: gray;"><b>Find profiles! </b></h2> 
          <h4 style="color: gray;">Select all required options and click search.</h4>
          <form class="form-style-1" action="<?php echo base_url('Profile/findprofile')?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6 find_input">
                  <div class="form-group">
                      <select class=" form-control input-sm1" name="type" id="type" required="">
                          <option value="Other"><?php echo $this->lang->line('msg_select_profile_type'); ?></option>
                          <option value="Individual">Individual</option>
                          <option value="Group">Group/ Team</option>
                          <option value="Company">Company</option>
                      </select>
                    </div>
              </div>
              <div class="col-md-6 find_input">
                  <div class="form-group">
                      <select class="form-control" name="category" id="category" required="">
                          <option value="Others">Select category<?php //echo $this->lang->line('msg_select_profile_category'); ?></option>
                          <?php foreach ($services->result() as $row1): ?>
                            <option value="<?php echo $row1->service;?>"><?php echo $row1->service;?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
              </div>
              <div class="col-md-6 find_input">
                  <div class="form-group">
                      <select class="form-control" name="subcategory" id="subcategory" required="">
                          <option value="Others">Select type of sport<?php //echo $this->lang->line('msg_select_profile_subcategory'); ?></option>
                          <?php foreach ($sports->result() as $row3): ?>
                            <option value="<?php echo $row3->name;?>"><?php echo $row3->name;?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
              </div>
              <div class="col-md-6 find_input">
                  <button type="submit" name="findBtn" value="ok" class="btn btn-info btn-lg pull-right">&nbsp;&nbsp;&nbsp;&nbsp;Search Profiles<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
              </div>
          </div>
        </form>
        </div>
        <div class="col-md-12" style="height: 20px;"></div>
    </div>
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