<?php
    $myid = $this->session->userdata('user_id');
    $userid = $profile_user_id;
    $attachments_url = base_url('uploads/attachments');
    $profileres = modules::load('Profile')->Mdl_profile->get_where_custom('userid', $userid);
    $relatedProfiles = modules::load('Profile')->Mdl_profile->get_where_custom_limit('category', $profileres->row()->category, 10, 1);
    $comments = modules::load('Profile')->Mdl_profile->get_where_custom3_tb('comment', 'userid', $userid, 'type', 'Comment', 'status', 'Active');
    $userres = modules::load('Users')->get_where_custom('id', $userid);
    $profile_views = modules::load('Profile')->Mdl_profile->count_where_custom2_tb('action', 'userid', $userid, 'action', 1);
    $profile_likes = modules::load('Profile')->Mdl_profile->count_where_custom2_tb('action', 'userid', $userid, 'action', 2);
    $liked = modules::load('Profile')->Mdl_profile->count_where_custom3_tb('action', 'userid', $userid, 'doneby', $myid, 'action', 2);

    if($profileres->num_rows()>0) {
        $imgurl = base_url('assets/img/profile/0/').$profileres->row()->img;
    } else {
        $imgurl = base_url('assets/img/users/').$userres->row()->userimg;
    } 
    $file_img = base_url('assets/img/pdf.png');
    $verified_img = base_url('assets/img/verified.png'); 
?>

<style type="text/css">
  #account {
    background-color: #4e4b4a !important;
  }
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
  .fa-heart:hover {
    color: red;
  }
  .fa-arrow-circle-right {
    margin-right: 5px !important;
    margin-left: 5px !important;
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
            <div class="col-md-2" style="margin-bottom: 20px;">
                <img src="<?php echo $imgurl;?>" class="img-thumbnail" alt="User image" width="100%;" >

                <div style="padding-top: 10px; text-align: center;">
                    <!-- <span>Stars</span> -->
                </div>
                <div style="padding-top: 5px; text-align: left;">
                    <span style="font-size: 16px;"><b><?php echo number_format($profile_views); ?> </b></span><span>Views</span>
                </div>
                <div class="text-center">
                  <form action="<?php echo base_url('Profile/managemyProfiles')?>" method="post">
                    <?php if(($profileres->num_rows()>0)&& ($this->session->userdata('user_role')=="Admin")) { ?>
                      <br>
                      <?php if($profileres->row()->status == "Active") { ?> <span class="label label-success" ><?php echo $profileres->row()->status;?></span> <?php } else { ?>  <span class="label label-danger" ><?php echo $profileres->row()->status;?></span>  <?php } ?>
                      <br>
                      <button type="submit" class="btn btn-default btn-xs ctrl_btn sitecolor2" name="editBtn" value="<?php echo $profileres->row()->id;?>" data-toggle="tooltip"  title="" data-original-title="Update this user profile">&nbsp;<i class="fa fa-edit"></i></button>
                      <!-- <button type="submit" class="btn btn-danger btn-md ctrl_btn" name="deleteBtn" value="<?php echo $profileres->row()->userid;?>" data-toggle="tooltip"  title="" data-original-title="Ban this user profile">Ban &nbsp;&nbsp;<i class="fa fa-times"></i></button> -->
                      <button type="submit" class="btn btn-success btn-xs ctrl_btn" name="verifyBtn" value="<?php echo $profileres->row()->userid;?>" data-toggle="tooltip"  title="" data-original-title="Verify this user profile">&nbsp;<i class="fa fa-check"></i></button>
                      <button type="submit" class="btn btn-warning btn-xs ctrl_btn" name="hideBtn" value="<?php echo $profileres->row()->userid;?>" data-toggle="tooltip"  title="" data-original-title="Hide this user profile">&nbsp;<i class="fa fa-times"></i></button>
                      <button type="submit" class="btn btn-default btn-xs ctrl_btn" name="showBtn" value="<?php echo $profileres->row()->userid;?>" data-toggle="tooltip"  title="" data-original-title="Show this user profile">&nbsp;<i class="fa fa-eye"></i></button>
                    <?php } if(($profileres->num_rows()>0) && ($userres->row()->id==$this->session->userdata('user_id'))) { ?>
                      <br>
                      <?php if($profileres->row()->status == "Active") { ?> <span class="label label-success" ><?php echo $profileres->row()->status;?></span> <?php } else { ?>  <span class="label label-danger" ><?php echo $profileres->row()->status;?></span>  <?php } ?>
                      <br>
                      <button type="submit" class="btn btn-default1 btn-xs ctrl_btn sitecolor2bg" name="editBtn" value="<?php echo $profileres->row()->id;?>" data-toggle="tooltip"  title="" data-original-title="Update this user profile">Update &nbsp;&nbsp;<i class="fa fa-edit"></i></button>
                      <button data-toggle="modal" data-target="#change_password" class="btn btn-default btn-xs ctrl_btn" data-toggle="tooltip"  title="" data-original-title="Change password">Change password</button>
                      <div style="margin-top: 20px; padding-bottom: 20px; border-top: 1px solid lightgray; background-color: #F9F9F9;">
                        <h3>Balance</h3>
                        <span style="font-size: 20px;"><b><?php echo modules::load('Profile')->myBalance();?> Days</b></span>
                      </div>
                    <?php } ?>
                  </form>
                </div>
            </div>
            <div class="col-md-7 middle_box">
                <div style="padding-bottom: 10px;">
                    <span style="font-size: 26px;"><b><?php echo $profileres->row()->profilename;?></b><?php if($profileres->row()->verified == 1) { ?>&nbsp;<img src="<?php echo $verified_img; ?>" width="3%" ><?php } ?></span>
                    <?php if($liked>0) { ?>
                      <a href="<?php echo base_url('Profile/userProfile/');?><?php echo $userres->row()->id;?>/unlike" class="pull-right"><i class="fa fa-2x fa-heart" style="color: red;"></i></a>
                    <?php } else { ?>
                      <a href="<?php echo base_url('Profile/userProfile/');?><?php echo $userres->row()->id;?>/like" class="pull-right"><i class="fa fa-2x fa-heart"></i></a>
                    <?php } ?>
                    <br>
                    <?php if($profileres->num_rows()>0) { ?>
                        <span class="sitecolor21" style1="font-size: 18px;"><?php  echo $profileres->row()->type;  ?> <i class="fa fa-arrow-circle-right"></i> <?php  echo $profileres->row()->category;  ?> <i class="fa fa-arrow-circle-right"></i> <?php  echo $profileres->row()->subcategory;  ?>  </span>
                    <?php } else { ?>
                        <span class="sitecolor21" style1="font-size: 18px;"><b><?php if($userres->row()->role=="User") {echo "Employer";} else { echo $userres->row()->role; } ?> <?php if($profileres->num_rows()>0) { echo ' <i class="fa fa-arrow-right"></i> '; echo $profileres->row()->category; } ?></b></span>
                  <?php } ?>
                </div>

                <div style="padding-bottom: 20px !important;">
                   <?php if(modules::load('Profile')->haveEnoughCredit()) { ?>
                      <a data-toggle="modal" data-target="#send_message" class="btn btn-default btn-sm pull-right">Send message&nbsp;&nbsp;<i class="fa fa-comment"></i></a>
                      <a data-toggle="modal" data-target="#send_email" class="btn btn-default btn-sm pull-right">Send E-mail&nbsp;&nbsp;<i class="fa fa-envelope"></i></a>
                    <?php } else { ?>
                      <a data-toggle="modal" data-target="#paynow" class="btn btn-default btn-sm pull-right">Send message&nbsp;&nbsp;<i class="fa fa-comment"></i></a>
                      <a data-toggle="modal" data-target="#paynow" class="btn btn-default btn-sm pull-right">Send E-mail&nbsp;&nbsp;<i class="fa fa-envelope"></i></a>
                    <?php } ?>
                </div>

                <div style="font-size: 16 !important;">
                <!-- Description -->
                <?php if($profileres->num_rows()>0) { ?>
                    <?php echo $profileres->row()->description;?>
                <?php } else { ?>
                    I am here looking for a coach/ sponsor who can perform my job on time. I will be posting jobs to this platform seeking for
                    a good expert in the perticular field. 
                    <br><br>
                    In-some cases I would like to higher someone to work for me either full-time or part-time. I desire best and quality service/ product for my project.
                <?php }  ?>
                </div>

                <div style="margin-top: 40px;">
                  <div class="" style="padding-top: 10px; padding-bottom: 10px;">
                    <span style="font-size: 20px;" class="sitecolor11"><b style="color: gray;" >My attachments</b></span>
                  </div>
                  <!-- <hr> -->
                  <?php if(modules::load('Profile')->haveEnoughCredit()) { ?>
                  <div class="row" style="border-bottom: 1px solid lightgray; padding-bottom: 20px; padding-top: 10px;  margin-right: 10px;">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="text-align: left;">
                      <a href="<?php if($profileres->num_rows()>0) { ?><?php echo $attachments_url.'/'.$profileres->row()->idfile;?><?php } ?>" download>
                        <img src="<?php echo $file_img; ?>" width="15%" >
                        <span style="margin-left: 10px;">My ID</span>
                      </a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="text-align: left;">
                      <a href="<?php if($profileres->num_rows()>0) { ?><?php echo $attachments_url.'/'.$profileres->row()->certificate;?><?php } ?>" download>
                        <img src="<?php echo $file_img; ?>" width="15%" >
                        <span style="margin-left: 10px;">My Certificate</span>
                      </a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="text-align: left;">
                      <a href="<?php if($profileres->num_rows()>0) { ?><?php echo $attachments_url.'/'.$profileres->row()->resume;?><?php } ?>" download>
                        <img src="<?php echo $file_img; ?>" width="15%" >
                        <span style="margin-left: 10px;">My resume (CV)</span>
                      </a>
                    </div>
                  </div>
                  <?php } else { ?>
                    <div class="row" style="border-bottom: 1px solid lightgray; padding-bottom: 20px; padding-top: 10px;  margin-right: 10px;">
                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="text-align: left;">
                        <a data-toggle="modal" data-target="#paynow">
                          <img src="<?php echo $file_img; ?>" width="15%" >
                          <span style="margin-left: 10px;">My ID</span>
                        </a>
                      </div>
                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="text-align: left;">
                        <a data-toggle="modal" data-target="#paynow">
                          <img src="<?php echo $file_img; ?>" width="15%" >
                          <span style="margin-left: 10px;">My Certificate</span>
                        </a>
                      </div>
                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="text-align: left;">
                        <a data-toggle="modal" data-target="#paynow">
                          <img src="<?php echo $file_img; ?>" width="15%" >
                          <span style="margin-left: 10px;">My resume (CV)</span>
                        </a>
                      </div>
                    </div>
                  <?php } ?>

                  <?php if($profileres->num_rows()==0) { echo '<span style="color: gray; font-size: 20px; padding-left: 0px;">No attachments to display!</span>';}?>
                  <div style="padding-top: 15px;">
                    <small class="pull-right"><a href="<?php echo base_url('Profile/listprofiles/all');?>">Find more profiles &nbsp;&nbsp; <i class="fa fa-arrow-right"></i></a></small>
                  </div>
                </div>


                <div style="margin-top: 50px;">
                  <span style="font-size: 20px;" class="sitecolor11"><b style="color: gray;" >Feedbacks</b> <small class="badge pull-right1 bg-default" ><?php echo number_format($comments->num_rows(),0); ?></small></span>
                  <?php if($comments->num_rows()==0) { ?>
                    <div class="feedback">
                      <span style="color: gray; font-size: 20px; padding-left: 0px;">No feedback to display!</span>
                    </div>
                  <?php }  ?>
                  <?php foreach ($comments->result() as $row2): ?>
                    <?php 
                        $senderres = modules::load('Users')->get_where_custom('id', $row2->senderid); 
                        if ($senderres->num_rows()>0) {
                          $senderid = $senderres->row()->id;
                          $sendername = $senderres->row()->name;
                          $senderimage = base_url('assets/img/profile/0/').$senderres->row()->userimg;
                        } else {
                          $senderid = 0;
                          $sendername = "Guest";
                          $senderimage = base_url('assets/img/profile/0/def.png');
                        }  
                    ?>
                    <div class="feedback ">
                      <div class="row">
                      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1">
                        <?php if($senderid==0) { ?>
                          <a href="#"><img src="<?php echo $senderimage;?>" class="img-circle" alt="User image" width="40px" ></a>
                        <?php } else { ?>
                          <a href="<?php echo base_url('Profile/userProfile') ?>/<?php echo $senderid; ?>"><img src="<?php echo $senderimage;?>" class="img-circle" alt="User image" width="40px" ></a>
                        <?php } ?>
                      </div>
                      <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 col-xl-11" style="padding-left: 20px;"><span style="color: gray;"><?php echo $row2->comment;?></span></div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                  <?php if(!($userid == $this->session->userdata('user_id')) ) { ?>
                  <div class="row" style="margin-top: 20px;">
                    <div class="col-md-12">
                      <form class="form-style-1" action="<?php echo base_url('Profile/feedback')?>" method="post" enctype="multipart/form-data">
                        <div class="form-group" style="width: 100%;">
                            <textarea rows="3" class="form-control" name="comment" value="" placeholder="Type your comment here<?php //echo $this->lang->line('msg_enter_phone_number'); ?>"   required=""></textarea>
                        </div>
                        <input type="hidden" name="profileid" value="<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->id;?><?php } ?>" >
                        <?php if(modules::load('Profile')->haveEnoughCredit()) { ?>
                          <button type="submit" name="commentBtn" value="<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->userid;?><?php } ?>" class="btn btn-info btn-md pull-right">&nbsp;&nbsp;&nbsp;&nbsp;Submit<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        <?php } else { ?>
                          <button data-toggle="modal" data-target="#paynow" class="btn btn-info btn-md pull-right">&nbsp;&nbsp;&nbsp;&nbsp;Submit<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        <?php } ?>
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
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                            <span style="font-size: 22px;"><b><?php echo number_format((mdate('%Y') - $profileres->row()->yob ),0);?></b></span><br>
                            <span style="font-size: 14px;">Age</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                            <span style="font-size: 22px;"><b><?php echo number_format($profile_views,0);?></b></span><br>
                            <span style="font-size: 14px;">Views</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                            <span style="font-size: 22px;"><b><?php echo number_format($profile_likes,0);?></b></span><br>
                            <span style="font-size: 14px;">Likes</span>
                        </div>
                    </div>
                    <hr>
                </div>

                <?php if(modules::load('Profile')->haveEnoughCredit()) { ?>
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
                        <li class="contact_li"><i class="fa fa-user sitecolor1">&nbsp;&nbsp;</i><?php echo $userres->row()->name.' - '.$profileres->row()->gender;?></li>
                        <li class="contact_li"><i class="fa fa-map-marker sitecolor1">&nbsp;&nbsp;</i> <?php echo $profileres->row()->phyaddress;?>, <?php echo $profileres->row()->region;?>, <?php echo $profileres->row()->country;?></li>
                        <li class="contact_li"><i class="fa fa-file sitecolor1">&nbsp;&nbsp;</i>ID No.: <?php echo $profileres->row()->idno;?></li>
                      <?php } ?>
                        <li class="contact_li"><i class="fa fa-phone sitecolor1">&nbsp;&nbsp;</i> +<?php if(($this->session->userdata('user_role')=="Admin")) { echo $userres->row()->phone;} else {echo $userres->row()->phone;}?></li>
                        <li class="contact_li"><i class="fa fa-envelope sitecolor1">&nbsp;&nbsp;</i> <?php if(($this->session->userdata('user_role')=="Admin")) {  echo $userres->row()->email;} else {echo $userres->row()->email;}?></li>
                        <li class="contact_li"><i class="fa fa-clock-o sitecolor1">&nbsp;&nbsp;</i>Member for <i><?php echo $age;?></i></li>
                        <li class="contact_li"><i class="fa fa-calendar sitecolor1">&nbsp;&nbsp;</i>Seen on <?php echo $userres->row()->udate;?></li>
                    </ul>
                </div>
                <!-- end contact & location -->
                <?php } else { ?>
                <!-- my view contact button -->
                <div style="text-align: center; margin-top: 40px;">
                  <a data-toggle="modal" data-target="#paynow" class="btn btn-lg pull-right1 sitecolor2bg " style="color: #fff !important;" >View Contacts&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                </div>
                <!-- end view contact button -->
                <?php } ?>

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



<!-- MESSAGE -->
<div id="send_message" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Leave a message to <b><?php echo $profileres->row()->profilename;?></b></h4>
      </div>
      <form class="form-style-1" action="<?php echo base_url('Profile/feedback')?>" method="post" enctype="multipart/form-data">
        <div class="modal-body" style="padding-top: 40px;">
          <div class="form-group" style="width: 100%;">
          <textarea rows="3" class="form-control" name="message" value="" placeholder="Type your message here<?php //echo $this->lang->line('msg_enter_phone_number'); ?>"   required=""></textarea>
          </div>
          <input type="hidden" name="profileid" value="<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->id;?><?php } ?>" >             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" name="messageBtn" value="<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->userid;?><?php } ?>" class="btn btn-info btn-md pull-right">&nbsp;&nbsp;&nbsp;&nbsp;Send<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;<i class="fa fa-share"></i>&nbsp;&nbsp;&nbsp;&nbsp;</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END MESSAGE -->


<!-- MAIL -->
<div id="send_email" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Send E-mail to <b><?php echo $profileres->row()->profilename;?></b></h4>
      </div>
      <form class="form-style-1" action="<?php echo base_url('Profile/feedback')?>" method="post" enctype="multipart/form-data">
        <div class="modal-body" style="padding-top: 40px;">
          <div class="form-group" style="width: 100%;">
          <input type="text" name="title" value="" class="form-control" placeholder="Subject" required="" >   
          </div>
          <div class="form-group" style="width: 100%;">
          <textarea rows="10" class="form-control" name="mail" value="" placeholder="Type email body here<?php //echo $this->lang->line('msg_enter_phone_number'); ?>"   required=""></textarea>
          </div>
          <input type="hidden" name="profileid" value="<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->id;?><?php } ?>" >             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" name="emailBtn" value="<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->userid;?><?php } ?>" class="btn btn-info btn-md pull-right">&nbsp;&nbsp;&nbsp;&nbsp;Send<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;<i class="fa fa-share"></i>&nbsp;&nbsp;&nbsp;&nbsp;</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END MAIL -->

<!-- CHANGE PASSWORD -->
<div id="change_password" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change Password</b></h4>
      </div>
      <form class="form-style-1" action="<?php echo base_url('Profile/managemyProfiles')?>" method="post" enctype="multipart/form-data">
        <div class="modal-body" style="padding-top: 40px;">
          <div class="form-group" style="width: 100%;">
          <input type="password" name="old_password" value="" class="form-control" placeholder="Current password" required="" >   
          </div>
         <div class="form-group" style="width: 100%;">
          <input type="password" name="new_password" value="" class="form-control" placeholder="New password" required="" >   
          </div>
          <div class="form-group" style="width: 100%;">
          <input type="password" name="conf_password" value="" class="form-control" placeholder="Re-enter password" required="" >   
          </div>
          <input type="hidden" name="profileid" value="<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->id;?><?php } ?>" >             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" name="passwordBtn" value="<?php if($profileres->num_rows()>0) { ?><?php echo $profileres->row()->userid;?><?php } ?>" class="btn btn-info btn-md pull-right">&nbsp;&nbsp;Change Password<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END CHANGE PASSWORD -->


<!-- PAY -->
<div id="paynow" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Insuficient Credit</b></h3>
      </div>
        <div class="modal-body" style="padding-top: 40px; text-align: center;">
          <div class="alert alert-danger">
            <strong>Insufficient credit!</strong> You don't have enough credit to perform this action. Please pay for your account to be able to access all premium features.
          </div>
          <div style="margin-top: 40px; margin-bottom: 20px;">
            <a href="<?php echo base_url('Profile/payments'); ?>"  class="btn btn-lg pull-right1 sitecolor2bg " style="color: #fff !important;">&nbsp;&nbsp;&nbsp;&nbsp;PAY NOW<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right" style="color: #fff !important;"></i>&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- END PAY -->