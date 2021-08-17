<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabs.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabstyles.css');?>" />
<script src="<?php echo base_url('assets/js/modernizr.custom.js');?>"></script>
<!--  search inputs top -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php echo base_url('assets/js/myJs/profilesch.js');?>" type="text/javascript"></script> 
<style type="text/css">
   .sitecolor1 {
            color: #10C4EF;
          }

          .sitecolor1bg {
            background-color: #10C4EF;
          } 

           .sitecolor2 {
            color: #FD037E;
          }

          .sitecolor2bg {
            background-color: #FD037E;
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
      padding-bottom: 20px;
  }
  .myli {
    font-size: 16px;
    padding-bottom: 10px;
  }

  .grp{
     padding-bottom: 5px;
   }

   .bidlist{
    background-color: #F9F9F9; 
    margin: 5px 10px 5px 10px; 
    padding-top: 5px; 
    padding-bottom: 5px; 
    border-radius: 10px;
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
      <div class="col-xs-2 col-sm-2 col-lg-2 col-md-2 " style="text-align: center;"><img src="<?php echo base_url($imgUrl);?>" class="avater" alt="service" style="width: 90%;" ></div>
      <div class="col-xs-10 col-sm-10 col-lg-10 col-md-10 ">
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
            <b><i>Skills: </i></b>
            <?php echo $row1->skills ;?>

            <?php if($this->session->userdata('user_role') == "Admin") { ?>
              <br>
              <b><i>Total cost: </i></b>
              TZS <?php echo number_format($row1->totalcost,2) ;?>
              <br>
              <b><i>Remarks: </i></b>
              <?php echo $row1->remarks ;?>
            <?php } ?>

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
            
            <?php if($this->session->userdata('user_role') == "Admin") { ?>
              <br><br>
              <b><i>Accepted by: </i></b>
              <?php $user3 = modules::load('Users')->get_where($row1->acceptedby); if ($user3->num_rows()>0) {echo $user3->row()->name;} ?>
              <br><br>
              <b><i>Done by: </i></b>
              <?php $user4 = modules::load('Users')->get_where($row1->doneby); if ($user4->num_rows()>0) {echo $user4->row()->name;} ?>
              <br><br>
              <b><i>Closed by: </i></b>
              <?php $user5 = modules::load('Users')->get_where($row1->closedby); if ($user5->num_rows()>0) {echo $user5->row()->name;} ?>
            <?php } ?>
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

            <?php if($this->session->userdata('user_role') == "Admin") { ?>
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
            <?php } ?>
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

            <?php if($this->session->userdata('user_role') == "Admin") { ?>
              <br><br>
              <b><i>Pay status: </i></b>
              <?php echo $row1->paystatus ;?>
            <?php } ?>
            
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
          <!-- bid starts here -->
          <?php 
            $bidsres = modules::load('Job')->Mdl_job->get_where_custom_tb('bid', 'jobid', $row1->jobid);
          ?>
             <?php foreach ($bidsres->result() as $row2): ?>
                <?php 
                  $userres = modules::load('Job')->Mdl_job->get_where_custom_tb('users', 'id', $row2->bidder);
                  $imgUrl = 'assets/img/profile/0/def.png'; 
                  ?>
              <div class="row bidlist" >
                <div class="col-xs-2 col-sm-2 col-lg-2 col-md-2 " style="text-align: center;"><img src="<?php echo base_url($imgUrl);?>" class="avater" alt="service" style="width: 90%;" ></div>
                <div class="col-xs-10 col-sm-10 col-lg-10 col-md-10 " style="border-bottom: 1px solid lightgray">
                  <b><?php echo $userres->row()->name ;?></b>
                  <span class="pull-right"><b>TZS <?php echo number_format($row2->amount) ;?></b> in <?php echo $row2->duration ;?> </span>
                  <br>
                  <span><i>Since : <?php echo $row2->udate ;?></i></span>
                </div>
                <div class="col-md-12" >
                  <p style="font-size: 14px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($row2->remarks,1,150) ;?>
                  </p>
                </div>
              </div>
              <?php endforeach; ?>
              <!-- End bids -->
        </div>
      </div>
      </div>
      <!-- =============end More detail tabs============ -->
      <div class="col-md-12" style=" padding-top: 5px; font-size: 18px; border-top1: 1px solid lightgray; padding-top: 15px; padding-bottom: 5px;" >
        <?php if($row1->bidstatus == "Open") { ;?>
          <a data-toggle="collapse" data-target="#bid<?php echo $row1->id ;?>" class="btn btn-info pull-left"style="margin-left: 20px; margin-right: 20px; margin-bottom: 15px;" ><b>Bid now</b>&nbsp;&nbsp;</a>
        <?php } ?>
        <a style="margin-bottom: 15px;" data-toggle="collapse" data-target="#more<?php echo $row1->id ;?>" href1="<?php echo base_url('Job/jobview/');?><?php echo $row1->id;?>" class="pull-right">View more&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    <?php if ($this->session->userdata('user_role') == "Admin")  { ?>
      <div class="col-md-12" style="padding-bottom: 10px; padding-top: 5px; font-size: 18px; border-top: 1px solid lightgray; padding-top: 15px; padding-bottom: 15px;" >
        <?php if(($row1->progress == "Pending")) { ?><a href1="<?php echo base_url('Job/accept_job/').$row1->jobid;?>" data-toggle="modal" data-target="#accept_job" class="btn btn-info pull-right"style="margin-left: 10px; margin-right: 10px;" ><b>Accept</b>&nbsp;&nbsp;</a><?php } ?>
        <?php if(($row1->progress == "In-Progress") && !($row1->paystatus == "Done")) { ?><a href1="<?php echo base_url('Job/paid_job/').$row1->jobid;?>" data-toggle="modal" data-target="#paid_job" class="btn btn-info pull-right"style="margin-left: 10px; margin-right: 10px;" ><b>Paid</b>&nbsp;&nbsp;</a><?php } ?>
        <?php if(($row1->paystatus == "Done") && !($row1->status == "Closed")) { ?><a href="<?php echo base_url('Job/close_job/').$row1->jobid;?>" class="btn btn-info pull-right"style="margin-left: 10px; margin-right: 10px;" ><b>Close</b>&nbsp;&nbsp;</a><?php } ?>
        <?php if($row1->bidstatus == "Open") { ?><a href="<?php echo base_url('Job/close_bid/').$row1->jobid;?>" class="btn btn-info pull-right"style="margin-left: 10px; margin-right: 10px;" ><b>Close bid</b>&nbsp;&nbsp;</a><?php } ?>
        <?php if($row1->progress == "Pending") { ?><a href="<?php echo base_url('Job/jobedit/').$row1->id;?>" class="btn btn-default pull-right"style="margin-left: 10px; margin-right: 10px;" ><b>Edit</b>&nbsp;&nbsp;<i class="fa fa-edit"></i></a><?php } ?>
        <?php if(!($row1->paystatus == "Done")) { ?><a href1="<?php echo base_url('Job/cancel_job/').$row1->jobid;?>" data-toggle="modal" data-target="#cancel_job" class="btn btn-warning pull-left"style="margin-left: 10px; margin-right: 10px;" ><b>Cancel</b>&nbsp;&nbsp;</a><?php } ?>
      </div>
    <?php } ?>
      <div class="col-md-12">
        <?php echo $msg;?>
      </div>
      <!-- Bidding form -->
      <div class="collapse col-md-12" id="bid<?php echo $row1->id ;?>">
        <hr>
        <h4><b class="sitecolor2">Want to work on this project? Bid now</b></h4>
        <form action="<?php echo base_url('Job/jobbid')?>" method="post" enctype="multipart/form-data">
        <div class="row" style="padding-bottom: 20px;">
          <div class="col-md-6">
            <div class="grp">
                <h4><b>Bid amount (TZS)</b></h4>
                <div class="form-group">
                    <input type="number" min="0" name="amount" class="form-control in" id="heading" placeholder="Eg. 100,000" required="">
                </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="grp">
                <h4><b>Project timeline</b></h4>
                <div class="form-group">
                    <input type="text" name="duration" class="form-control in" id="heading" placeholder="Eg. 30 Days" required="">
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="grp">
                <h4><b>Why are you bidding to this project?</b></h4>
                <div class="form-group">
                    <textarea  name="remarks" rows="3" class="form-control in_a" required="" placeholder="Describe your competence here" style="width: 100%; font-size: 18px; line-height: 22px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    <!-- <textarea class="textarea" name="remarks" rows="10" class="form-control in_a" required="" placeholder="Describe your competence here" style="width: 100%; font-size: 18px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea> -->
                </div>
             </div>
          </div>
          <div class="col-md-12">
            <button type="submit" name="bidBtn" value="<?php echo $row1->jobid;?>" class="sitecolor2bg btn btn-info pull-right"style="margin-left: 20px; margin-right: 20px;" ><b>Bid to this project</b>&nbsp;&nbsp;</button>
          </div>
        </div>
      </form>
      </div>

    </div>
    <?php endforeach; ?>
  </div>
  

  <!-- <div class="col-md-1 padding lightpan"></div> -->
<!-- Large devices -->
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding lightpan pull-right hidden-xs hidden-sm" style="width: 30%;">
    <h3>Available categories</h3>
    <hr>
    <ul class="myul">
      <li class="myli"><a href="<?php echo base_url('Job/findjob/');?>0"><?php echo "All jobs/ projects";?></a></li>
      <?php foreach ($services->result() as $row): ?>
        <li class="myli"><a href="<?php echo base_url('Job/findjob/');?><?php echo $row->id;?>"><?php echo $row->service;?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
<!-- Small devices -->
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding lightpan pull-right hidden-lg hidden-md" style1="width: 100%;">
    <h3>Available categories</h3>
    <hr>
    <ul class="myul">
      <li class="myli"><a href="<?php echo base_url('Job/findjob/');?>0"><?php echo "All jobs/ projects";?></a></li>
      <?php foreach ($services->result() as $row): ?>
        <li class="myli"><a href="<?php echo base_url('Job/findjob/');?><?php echo $row->id;?>"><?php echo $row->service;?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
</section>
<!--  =======================end panel done?============= -->




<!-- ========================MODALS======================== -->
  <!-- accept Modal -->
  <div class="modal fade" id="accept_job" role="dialog">
    <div class="modal-dialog modal-sm" style="width: 400px !important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agreed amount | <?php echo $jobid; ?></h4>
        </div>
      <form action="<?php echo base_url('Job/accept_job/').$jobid; ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter agreed amount (TZS)" required="" style="font-size: 18px; padding-bottom: 20px; padding-top: 20px; margin-top: 20px;">
            <input type="text" name="timeline" class="form-control" id="timeline" placeholder="Enter timeline (Eg. 3 days)" required="" style="font-size: 18px; padding-bottom: 20px; padding-top: 20px; margin-top: 20px;">
        </div>
        <div class="modal-footer">
          <button type="submit" value="<?php echo $jobid; ?>" class="btn btn-info">Paid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check"></i></button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- Paid Modal -->
  <div class="modal fade" id="paid_job" role="dialog">
    <div class="modal-dialog modal-sm"  style="width: 400px !important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paid amount | <?php echo $jobid; ?></h4>
        </div>
      <form action="<?php echo base_url('Job/paid_job/').$jobid; ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter paid amount (TZS)" required="" style="font-size: 18px; padding-bottom: 20px; padding-top: 20px; margin-top: 20px;">
            <input type="number" name="commission" class="form-control" id="commission" placeholder="Enter eHuduma commission (TZS)" required="" style="font-size: 18px; padding-bottom: 20px; padding-top: 20px; margin-top: 20px;">
        </div>
        <div class="modal-footer">
          <button type="submit" value="<?php echo $jobid; ?>" class="btn btn-info">Paid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check"></i></button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- Cancel Modal -->
  <div class="modal fade" id="cancel_job" role="dialog">
    <div class="modal-dialog modal-sm"  style="width: 400px !important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cancel job | <?php echo $jobid; ?></h4>
        </div>
      <form action="<?php echo base_url('Job/cancel_job/').$jobid; ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <textarea name="remarks" class="form-control" id="remarks" rows="3" placeholder="Why canceling this job?" required="" style="margin-top: 20px;"></textarea>
        </div>
        <div class="modal-footer">
          <button type="submit" value="<?php echo $jobid; ?>" class="btn btn-warning">Cancel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times"></i></button>
        </div>
      </form>
      </div>
    </div>
  </div>


<!-- =======================END MODALS===================== -->