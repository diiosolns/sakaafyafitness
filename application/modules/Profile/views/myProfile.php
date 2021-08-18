<?php
    //$userid = $this->session->userdata('profile_user_id');
    $userid = $profile_user_id;
    $attachments_url = base_url('uploads/attachments');
    $profileres = modules::load('Profile')->Mdl_profile->get_where_custom('userid', $userid);
    $relatedProfiles = modules::load('Profile')->Mdl_profile->get_where_custom_limit('category', $profileres->row()->category, 10, 1);
    $comments = modules::load('Profile')->Mdl_profile->get_where_custom3_tb('comment', 'userid', $userid, 'type', 'Comment', 'status', 'Active');
    $userres = modules::load('Users')->get_where_custom('id', $userid);

    $profile_views = modules::load('Profile')->Mdl_profile->count_where_custom2_tb('action', 'userid', $userid, 'action', 1);
    $profile_likes = modules::load('Profile')->Mdl_profile->count_where_custom2_tb('action', 'userid', $userid, 'action', 2);

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
    /*font-size: 16px;*/
  }
  .contact_li {
    padding-top: 10px;
  }
  .ctrl_btn {
    margin-top: 20px;
  }
  .attach_file {
    color: gray;
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
                    <span style="font-size: 16px;"><b><?php echo number_format($profile_views); ?> </b></span><span>Views</span>
                </div>
                <div class="text-center">
                  <form action="<?php echo base_url('Profile/managemyProfiles')?>" method="post">
                    <?php if(($profileres->num_rows()>0)&& ($this->session->userdata('user_role')=="Admin")) { ?>
                      <button type="submit" class="btn btn-info btn-md ctrl_btn sitecolor2" name="editBtn" value="<?php echo $profileres->row()->id;?>" data-toggle="tooltip"  title="" data-original-title="Update this user profile">Update &nbsp;&nbsp;<i class="fa fa-edit"></i></button>
                      <button type="submit" class="btn btn-default btn-md ctrl_btn" name="deleteBtn" value="<?php echo $profileres->row()->id;?>" data-toggle="tooltip"  title="" data-original-title="Ban this user profile">Ban &nbsp;&nbsp;<i class="fa fa-times"></i></button>
                    <?php } if(($profileres->num_rows()>0) && ($userres->row()->id==$this->session->userdata('user_id'))) { ?>
                      <button type="submit" class="btn btn-info1 btn-md ctrl_btn sitecolor2bg" name="editBtn" value="<?php echo $profileres->row()->id;?>" data-toggle="tooltip"  title="" data-original-title="Update this user profile">Update &nbsp;&nbsp;<i class="fa fa-edit"></i></button>
                    <?php } ?>
                  </form>
                </div>
            </div>
            <div class="col-md-7 middle_box">
                <div style="padding-bottom: 10px;">
                    <span style="font-size: 26px;"><b><?php echo $userres->row()->name;?></b></span><br>
                    <?php if($profileres->num_rows()>0) { ?>
                        <span class="sitecolor21" style1="font-size: 18px;"><?php  echo $profileres->row()->type;  ?> <i class="fa fa-arrow-right"></i> <?php  echo $profileres->row()->category;  ?> <i class="fa fa-arrow-right"></i> <?php  echo $profileres->row()->subcategory;  ?>  </span>
                    <?php } else { ?>
                        <span class="sitecolor21" style1="font-size: 18px;"><b><?php if($userres->row()->role=="User") {echo "Employer";} else { echo $userres->row()->role; } ?> <?php if($profileres->num_rows()>0) { echo ' <i class="fa fa-arrow-right"></i> '; echo $profileres->row()->category; } ?></b></span>
                  <?php } ?>
                </div>

                <div style="font-size: 16 !important;">
                <?php if($profileres->num_rows()>0) { ?>
                    <?php echo $profileres->row()->description;?>
                <?php } else { ?>
                    I am here looking for a coach/ sponsor who can perform my job on time. I will be posting jobs to this platform seeking for
                    a good expert in the perticular field. 
                    <br><br>
                    In-some cases I would like to higher someone to work for me either full-time or part-time. I desire best and quality service/ product for my project.
                <?php }  ?>
                </div>

                <div style="margin-top: 50px;">
                  
                  <div class="" style="padding-top: 10px;">
                    <span style="font-size: 20px;" class="sitecolor1 "><b>My attachments</b></span>
                    <a href="<?php echo base_url('Profile/userProfile/');?><?php echo $userres->row()->id;?>/all" class="btn btn-default btn-sm pull-right">Send message&nbsp;&nbsp;<i class="fa fa-comment"></i></a>
                    <a href="<?php echo base_url('Profile/userProfile/');?><?php echo $userres->row()->id;?>/posted" class="btn btn-default btn-sm pull-right">Send E-mail&nbsp;&nbsp;<i class="fa fa-envelope"></i></a>
                    <a href="<?php echo base_url('Profile/userProfile/');?><?php echo $userres->row()->id;?>/like" class="btn btn-default btn-sm pull-right">Like&nbsp;&nbsp;<i class="fa fa-heart"></i></a>
                  </div>
                  <hr>
                  <div class="row" style="border-bottom: 1px solid lightgray; padding-bottom: 5px; padding-top: 10px;  margin-right: 10px;">
                    <div class="col-md-4" style="text-align: center;">
                      <a href="$attachments_url/<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->idfile;?><?php } ?>" download>
                        <i class="fa fa-file fa-3x attach_file"></i>
                        <br>
                        My ID
                      </a>
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                      <a href="$attachments_url/<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->certificate;?><?php } ?>" download>
                        <i class="fa fa-file fa-3x attach_file"></i>
                        <br>
                        My Certificate
                      </a>
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                      <a href="$attachments_url/<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->resume;?><?php } ?>" download>
                        <i class="fa fa-file fa-3x attach_file"></i>
                        <br>
                        My resume (CV)
                      </a>
                    </div>
                  </div>
                  <?php if($profileres->num_rows()==0) { echo '<span style="color: gray; font-size: 20px; padding-left: 0px;">No attachments to display!</span>';}?>
                  <div style="padding-top: 15px;">
                    <small class="pull-right"><a href="<?php echo base_url('Profile/listprofiles/all');?>">Find more profiles &nbsp;&nbsp; <i class="fa fa-arrow-right"></i></a></small>
                  </div>
                </div>


                <div style="margin-top: 50px;">
                  <span style="font-size: 20px;" class="sitecolor1 "><b>Feedbacks</b> <?php echo number_format($comments->num_rows(),0); ?></span>
                  <?php if($comments->num_rows()==0) { ?>
                    <div class="feedback">
                      <span style="color: gray; font-size: 20px; padding-left: 0px;">No feedback to display!</span>
                    </div>
                  <?php }  ?>
                  <?php foreach ($comments->result() as $row2): ?>
                    <?php $senderres = modules::load('Users')->get_where_custom('id', $row2->senderid); ?>
                    <div class="feedback">
                      <a href="<?php echo base_url('Profile/userProfile') ?>/<?php echo $senderres->row()->id; ?>"><?php echo $senderres->row()->name; ?></a>
                      <span style="color: gray; padding-left: 0px;"><?php echo $row2->comment;?></span>
                    </div>
                  <?php endforeach; ?>
                  <?php if(!($userid == $this->session->userdata('user_id')) ) { ?>
                  <div class="row" style="margin-top: 20px;">
                    <div class="col-md-12">
                      <form class="form-style-1" action="<?php echo base_url('Profile/feedback')?>" method="post" enctype="multipart/form-data">
                        <div class="form-group" style="width: 100%;">
                            <textarea rows="3" style="width: 100%;" name="comment" value="" placeholder="Type your comment here<?php //echo $this->lang->line('msg_enter_phone_number'); ?>"   required=""></textarea>
                        </div>
                        <input type="hidden" name="profileid" value="<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->id;?><?php } ?>" >
                        <button type="submit" name="commentBtn" value="<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->userid;?><?php } ?>" class="btn btn-info btn-md pull-right">&nbsp;&nbsp;&nbsp;&nbsp;Submit<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                      </form>
                    </div>
                  </div>
                <?php } ?>
                </div>

            </div>



            <div class="col-md-3 right_box">
                <div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <span style="font-size: 22px;"><b><?php echo number_format((mdate('%Y') - $profileres->row()->yob ),0);?></b></span><br>
                            <span style="font-size: 14px;">Age</span>
                        </div>
                        <div class="col-md-4 text-center">
                            <span style="font-size: 22px;"><b><?php echo number_format($profile_views,0);?></b></span><br>
                            <span style="font-size: 14px;">Views</span>
                        </div>
                        <div class="col-md-4 text-center">
                            <span style="font-size: 22px;"><b><?php echo number_format($profile_likes,0);?></b></span><br>
                            <span style="font-size: 14px;">Likes</span>
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
                        <li class="contact_li"><i class="fa fa-file sitecolor1">&nbsp;&nbsp;</i>ID No.: <?php echo $profileres->row()->idno;?></li>
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
                    <span class1="sitecolor2" style="font-size: 18px;">Related Profiles, <?php echo number_format($relatedProfiles->num_rows(),0) ?></span>
                    <ul class="myul">
                        <?php foreach ($relatedProfiles->result() as $row3): ?>
                        <li class="myli"><a  href="<?php echo base_url('Profile/userProfile/');?><?php echo $row3->userid;?>"><?php echo $row3->profilename;?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- end my jobs -->

            </div>
        </div>


    </div>
</div>

</section>