<style type="text/css">
  .mybox{
    background-color: #fff;
    padding: 20px 20px 20px 20px; 
    margin-bottom: 5%;
    margin-top: 20px;
    /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
  }
  .mybox:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .leftlist {
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    background-color: #F9F9F9 !important;
    border-bottom: 1px solid lightgray;
  }
  .leftlist:hover {
    background-color: lightgray !important;
    color: black !important;
  }
  .message {
    padding: 20px 20px 20px 20px; 
    margin: 20px 20px 20px 20px; 
    border: 1px solid lightgray;
    border-radius: 15px;
    background-color: #F9F9F9 !important;
  }
  .label {
    border-radius: 10px;
  }
</style>

<?php
    $comments = modules::load('Profile')->Mdl_profile->get_where_custom3_tb('comment', 'userid', $userid, 'type', 'Comment', 'status', 'Active');
    $messages = modules::load('Profile')->Mdl_profile->get_where_custom3_tb('comment', 'userid', $userid, 'type', 'Message', 'status', 'Active');
    $mails = modules::load('Profile')->Mdl_profile->get_where_custom3_tb('comment', 'userid', $userid, 'type', 'Mail', 'status', 'Active');
    $feedbacks = modules::load('Profile')->Mdl_profile->get_where_custom2_tb('comment', 'userid', $userid, 'status', 'Active');
?>

<section class="mybox">
  <span style="font-size: 22px;">Manage Messages Sent to  <b><a href="<?php echo base_url('Profile/userProfile') ?>/<?php echo $user_res->row()->id ?>"><?php echo $user_res->row()->name; ?></a></b> </span>
  <hr>
  <div class="row">
    <div class="col-md-4">
      <?php foreach ($feedbacks->result() as $feedback): ?>
        <?php 
          $senderres = modules::load('Users')->get_where_custom('id', $feedback->senderid); 
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
        <a href="<?php echo base_url('Chat/manageChats/'.$user_res->row()->id) ?>/<?php echo $senderid; ?>">
        <div class="row leftlist">
          <div class="col-md-2"><img src="<?php echo $senderimage;?>" class="img-circle" alt="User image" width="100%" ></div>
          <div class="col-md-10"><?php echo $sendername;?> <span class="label <?php if($feedback->type=="Mail") { echo "label-warning"; } else if($feedback->type=="Message") { echo "label-success"; } else { echo "label-default"; } ?>  pull-right"><?php echo $feedback->type;?></span> </div>
        </div></a>
      <?php endforeach; ?>
    </div>

    <div class="col-md-8">
      <div style="font-size: 18px;">Messages from <a href="<?php echo base_url('Profile/userProfile') ?>/<?php if($sender_res->num_rows()>0) { echo $sender_res->row()->id; } else { echo 0; } ?>"><?php if($sender_res->num_rows()>0) { echo $sender_res->row()->name; } else { echo "Guest"; } ?></a></div>
      <?php if(modules::load('Profile')->haveEnoughCredit()) { ?>
      <?php foreach ($chat_res->result() as $chat): ?>
        <div class="message">
          <span class="label <?php if($chat->type=="Mail") { echo "label-warning"; } else if($chat->type=="Message") { echo "label-success"; } else { echo "label-default"; } ?>  pull-right"><?php echo $chat->type;?></span>
          <?php echo $chat->comment ;?>
          <div style="padding-top: 10px; padding-bottom: 10px;">
            <small class="pull-left label label-default " ><i><?php echo $chat->udate ;?></i></small>
            <a href="<?php echo base_url('Chat/manageChats/'.$user_res->row()->id) ?>/<?php echo $chat->senderid; ?>/delete/<?php echo $chat->id; ?>" class="btn btn-xs btn-danger pull-right " ><i class="fa fa-times"></i></a>
          </div>
        </div>
      <?php endforeach; ?> 
       <?php } else { ?>
        <!-- my view contact button -->
        <div style="text-align: center; margin-top: 40px;">
          <a data-toggle="modal" data-target="#paynow" class="btn btn-lg pull-right1 sitecolor2bg " style="color: #fff !important;" >Read Messages&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
        </div>
        <!-- end view contact button -->
      <?php } ?>
    </div>
  </div>
</section>



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