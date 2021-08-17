<?php
    //$userid = $this->session->userdata('profile_user_id');
    $userid = $profile_user_id;
    $profileres = modules::load('Profile')->Mdl_profile->get_where_custom('userid', $userid);
    $userres = modules::load('Users')->get_where_custom('id', $userid);

    if($profileres->num_rows()>0) {
        $imgurl = base_url('assets/img/profile/0/').$profileres->row()->img;
    } else {
        $imgurl = base_url('assets/img/users/').$userres->row()->userimg;
    } 
?>

<style type="text/css">
  .myprofile_box {
    margin-left: 5%;
    margin-right: 5% !important;
  }
  .myprofile_box_in {
    margin-top: 15px; 
    padding-bottom: 30px;
  }
  .profileout{
    margin-top: 2%;
    margin-left: 2%;
    margin-right: 2%;
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
      list-style-type: circle;
      padding-bottom: 20px;
      padding-left: 15px;
      text-align: left;
  }
  .myli {
    font-size: 16px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-bottom: 1px solid lightgray;
  }

  .cardheader_sm {
       background: url("<?php echo base_url('assets/img/profilebg2.jpg');?>");
      /*background: url("../../img/profilebg3.jpg");*/
       background-size: cover;
       height: 60px;
    }

  .middle_box {
    border-right: 1px solid lightgray;
  }

  .right_box {
    border-left: 1px solid lightgray;
  }

  .right_sub_box {
    background-color: #F9F9F9; 
    margin-top: 50px; 
    padding: 10px 10px 10px 10px;
  }
  .feedback {
    background-color: #F9F9F9; 
    margin-top: 20px; 
    border-radius: 10px;
    padding: 10px 10px 10px 10px;
    font-size: 16px;
  }
  .contact_li {
    padding-top: 10px;
  }
  .ctrl_btn {
    margin-top: 20px;
  }
</style>

<section class="myprofile_box">
<div class="box box-info  myprofile_box_in">
    <!-- <div class="box-header">
        <h3 class="box-title"><b><?php echo $this->lang->line('msg_manage_my_profile'); ?></b></h3>
    </div> -->
    <div class="box-body padding"  style1="overflow-x:scroll; white-space: nowrap;">
        <div class="row">
            <div class="col-md-2">
                <img src="<?php echo $imgurl;?>" class="img-thumbnail" alt="User image" width="100%;" >

                <div style="padding-top: 10px; text-align: center;">
                    <!-- <span>Stars</span> -->
                </div>
                <div style="padding-top: 5px; text-align: center;">
                    <span style="font-size: 22px;"><b>2,658 </b></span><span>Views</span>
                <?php echo $userid; ?>
                </div>
                <div class="text-center">
                  <form action="<?php echo base_url('Profile/managemyProfiles')?>" method="post">
                    <?php if(($profileres->num_rows()>0)&& ($this->session->userdata('user_role')=="Admin")) { ?>
                      <button type="submit" class="btn btn-info btn-md ctrl_btn" name="editBtn" value="<?php echo $profileres->row()->id;?>" data-toggle="tooltip"  title="" data-original-title="Update this user profile">Update &nbsp;&nbsp;<i class="fa fa-edit"></i></button>
                      <button type="submit" class="btn btn-default btn-md ctrl_btn" name="deleteBtn" value="<?php echo $profileres->row()->id;?>" data-toggle="tooltip"  title="" data-original-title="Ban this user profile">Ban &nbsp;&nbsp;<i class="fa fa-times"></i></button>
                    <?php } if(($profileres->num_rows()>0) && ($userres->row()->id==$this->session->userdata('user_id'))) { ?>
                      <button type="submit" class="btn btn-info btn-md ctrl_btn" name="editBtn" value="<?php echo $profileres->row()->id;?>" data-toggle="tooltip"  title="" data-original-title="Update this user profile">Update &nbsp;&nbsp;<i class="fa fa-edit"></i></button>
                    <?php } ?>
                  </form>
                </div>
            </div>
            <div class="col-md-7 middle_box">
                <div style="padding-bottom: 10px;">
                    <span style="font-size: 26px;"><b><?php echo $userres->row()->name;?></b></span><br>
                    <span class="sitecolor1" style="font-size: 18px;"><b><?php if($userres->row()->role=="User") {echo "Employer";} else { echo $userres->row()->role; } ?> <?php if($profileres->num_rows()>0) { echo ' <i class="fa fa-arrow-right"></i> '; echo $profileres->row()->category; } ?></b></span>
                </div>

                <div style="font-size: 16 !important;">
                <?php if($profileres->num_rows()>0) { ?>
                    <?php echo $profileres->row()->description;?>
                <?php } else { ?>
                    I am here looking for a freelancer who can perform my job on time. I will be posting jobs to this platform seeking for
                    a good expert in the perticular field. 
                    <br><br>
                    In-some cases I would like to higher someone to work for me either full-time or part-time. I desire best and quality service/ product for my project.
                <?php }  ?>
                </div>

                <div style="margin-top: 50px;">
                  
                  <div class="" style="padding-top: 10px;">
                    <span style="font-size: 20px;" class="sitecolor1 "><b>My top jobs</b></span>
                    <a href="<?php echo base_url('Profile/userProfile/');?><?php echo $userres->row()->id;?>/all" class="btn btn-default btn-sm pull-right">All&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    <a href="<?php echo base_url('Profile/userProfile/');?><?php echo $userres->row()->id;?>/posted" class="btn btn-default btn-sm pull-right">Posted&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    <a href="<?php echo base_url('Profile/userProfile/');?><?php echo $userres->row()->id;?>/done" class="btn btn-default btn-sm pull-right">Done&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                  <hr>
                  
                  <?php foreach ($myjobres->result() as $myjob): ?>
                    <?php
                      $today = mdate('%Y-%m-%d');
                      $joindate = $myjobres->row()->udate;
                      $diff=date_diff( date_create($joindate) ,  date_create($today));
                      $job_age = $diff->format("%y")." Years, ".$diff->format("%m")." months ";
                    ?>
                    <div class="row" style="border-bottom: 1px solid lightgray; padding-bottom: 5px; padding-top: 10px;  margin-right: 10px;">
                      <div class="col-md-1" ><i class="fa fa-folder-open fa-2x sitecolor1"></i></div>
                      <div class="col-md-8"><a  href="<?php echo base_url('Job/jobview/');?><?php echo $myjob->jobid;?>"><?php echo $myjob->jobtitle;?></a></div>
                      <div class="col-md-3 pull-right"><small class="pull-right"><?php echo $job_age;?></small></div>
                    </div>
                  <?php endforeach; ?>
                  <?php if($myjobres->num_rows()==0) { echo '<span style="color: gray; font-size: 20px; padding-left: 0px;">No jobs to display!</span>';}?>
                  <div style="padding-top: 15px;">
                    <small class="pull-right"><a href="<?php echo base_url('/Job/findjob/0');?>">View all platform jobs&nbsp;&nbsp; <i class="fa fa-arrow-right"></i></a></small>
                  </div>
                </div>

                <div style="margin-top: 50px;">
                  <span style="font-size: 20px;" class="sitecolor1 "><b>Feedbacks</b></span>
                  <div class="feedback">
                    <span style="color: gray; font-size: 20px; padding-left: 0px;">No feedback to display!</span>
                  </div>
                </div>

            </div>
            <div class="col-md-3 right_box">
                <div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <span style="font-size: 22px;"><b><?php echo number_format($postedJobs,0);?></b></span><br>
                            <span style="font-size: 14px;">Posted</span>
                        </div>
                        <div class="col-md-4 text-center">
                            <span style="font-size: 22px;"><b><?php echo number_format($inprogressJobs,0);?></b></span><br>
                            <span style="font-size: 14px;">InProgress</span>
                        </div>
                        <div class="col-md-4 text-center">
                            <span style="font-size: 22px;"><b><?php echo number_format($doneJobs,0);?></b></span><br>
                            <span style="font-size: 14px;">Done</span>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- contact & location -->
                <div>
                  <?php
                    $today = mdate('%Y-%m-%d');
                    $joindate = $userres->row()->udate;
                    $diff=date_diff( date_create($joindate) ,  date_create($today));
                    $age = $diff->format("%y")." Years, ".$diff->format("%m")." months ";
                  ?>
                    <ul style="font-size1: 16px; list-style-type: none; padding-left: 10px;">
                      <?php if($profileres->num_rows()>0) { ?>
                        <li class="contact_li"><i class="fa fa-map-marker sitecolor1">&nbsp;&nbsp;</i> <?php echo $profileres->row()->phyaddress;?>, <?php echo $profileres->row()->region;?>, <?php echo $profileres->row()->country;?></li>
                      <?php } ?>
                        <li class="contact_li"><i class="fa fa-phone sitecolor1">&nbsp;&nbsp;</i> +<?php if(($this->session->userdata('user_role')=="Admin")) { echo $userres->row()->phone;} else {echo "255622973959";}?></li>
                        <li class="contact_li"><i class="fa fa-envelope sitecolor1">&nbsp;&nbsp;</i> <?php if(($this->session->userdata('user_role')=="Admin")) {  echo $userres->row()->email;} else {echo "support@ehuduma.com";}?></li>
                        <li class="contact_li"><i class="fa fa-clock-o sitecolor1">&nbsp;&nbsp;</i>Member for <i><?php echo $age;?></i></li>
                        <li class="contact_li"><i class="fa fa-calendar sitecolor1">&nbsp;&nbsp;</i>Seen on <?php echo $userres->row()->udate;?></li>
                    </ul>
                </div>
                <!-- end contact & location -->
                <!-- my jobs -->
                <!-- end my jobs -->

                <!-- my jobs -->
                 <?php 
                      $jobres = modules::load('Job')->get_where_custom('status', "Open");
                  ?>

                <div class="right_sub_box">
                    <span class1="sitecolor2" style="font-size: 18px;">Top platform jobs</span>
                    <ul class="myul">
                        <?php foreach ($jobres->result() as $row3): ?>
                        <li class="myli"><a  href="<?php echo base_url('Job/jobview/');?><?php echo $row3->jobid;?>"><?php echo $row3->jobtitle;?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- end my jobs -->

            </div>
        </div>


    </div>
</div>

</section>