<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabs.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabstyles.css');?>" />
<script src="<?php echo base_url('assets/js/modernizr.custom.js');?>"></script>
<!--  search inputs top -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php echo base_url('assets/js/myJs/profilesch.js');?>" type="text/javascript"></script> 
<style type="text/css">
  #pay {
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
  .price_grp {
    padding-top: 20px;
    padding-bottom: 20px;
    background-color: #F9F9F9;
    border-right: 1px solid lightgray;
    border-bottom: 1px solid lightgray;
  }
</style>

<?php
  $userid = $this->session->userdata('user_id');
  $services = modules::load('Profile')->get_where_custom_tb('services', 'status', "Active");
  $sports = modules::load('Profile')->get_where_custom_tb('sports', 'status', "Active");
  $payments = modules::load('Profile')->get_where_custom_tb('payment', 'userid', $userid);
?>

<!--  ==========================Pay for this service?============== -->
<section class=" wow animated fadeInUp " 1style="padding: 40px 20px 40px 20px; background-color: #fff !important;">
<div class="row padding" style="margin-left: 5% !important; margin-right: 5% !important;">
  
  <div class="col-md-12 profileout pull-left ">
    <div class="row profile">
        <div class="col-md-12" style="height: 10px;"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
          <h2 style="color: gray;"><b>Pay for better services! </b></h2> 
          <p class="sitecolor11" style="font-size: 16px;">
            Pay for your account to be able to search profiles, send messages, send E-mails and view profile contacts. 
            Pay using the phone number used to open the account. If you want to pay using a different number or an agent let us know before you make payments.
          </p>

          <div class="row" style="margin-top: 20px; margin-bottom: 20px; margin-right: 10px; margin-left: 10px;">
            <div class="col-md-3 price_grp" style="text-align: center;">
              <h2>1 Day</h2>
              <span>Day</span>
              <h2><b>TZS 1,500</b></h2>
              <a href="<?php echo base_url('Profile/paynow/1')?>" class="btn btn-lg sitecolor2bg" style="color: #fff;">&nbsp;&nbsp;&nbsp;&nbsp;Pay now<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
            <div class="col-md-3 price_grp" style="text-align: center;">
              <h2> 7 Days</h2>
              <span>Week</span>
              <h2><b>TZS 8,000</b></h2>
              <a href="<?php echo base_url('Profile/paynow/7')?>" class="btn btn-lg sitecolor2bg" style="color: #fff;">&nbsp;&nbsp;&nbsp;&nbsp;Pay now<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
            <div class="col-md-3 price_grp" style="text-align: center;">
              <h2> 14 Days</h2>
              <span>Two weeks</span>
              <h2><b>TZS 15,000</b></h2>
              <a href="<?php echo base_url('Profile/paynow/14')?>" class="btn btn-lg sitecolor2bg" style="color: #fff;">&nbsp;&nbsp;&nbsp;&nbsp;Pay now<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
            <div class="col-md-3 price_grp" style="text-align: center;">
              <h2> 30 Days</h2>
              <span>Month</span>
              <h2><b>TZS 25,000</b></h2>
              <a href="<?php echo base_url('Profile/paynow/30')?>" class="btn btn-lg sitecolor2bg" style="color: #fff;">&nbsp;&nbsp;&nbsp;&nbsp;Pay now<?php //echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
          </div>

        </div>
        <div class="col-md-12" style="height: 20px;"></div>
    </div>
  </div>


  <div class="col-md-12 profileout pull-left ">
    <div class="row profile">
        <div class="col-md-12" style="height: 10px;"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
          <h2 style="color: gray;"><b>Transaction history </b></h2> 
          
            <table class="table table-striped">
                <tbody><tr>
                    <th style="width: 10px">S/N</th>
                    <th>Invoice No.<?php //echo $this->lang->line('msg_tools'); ?></th>
                    <th>Control No.<?php //echo $this->lang->line('msg_profile_name'); ?></th>
                    <th>Pay No.<?php //echo $this->lang->line('msg_profile_name'); ?></th>
                    <th>Receipt<?php //echo $this->lang->line('msg_type'); ?></th>
                    <th>Amount<?php //echo $this->lang->line('msg_category'); ?></th>
                    <th>Trans Time<?php //echo $this->lang->line('msg_sub_category'); ?></th> 
                    <th>Expire Date<?php //echo $this->lang->line('msg_profile_owner'); ?></th>
                    <th>Status<?php //echo $this->lang->line('msg_last_modified'); ?></th>
                </tr>
                <?php $index = 1;?>
                  <?php foreach ($payments->result() as $row): ?>                                   
                        <tr>
                            <td><?php echo $index;?></td>
                            <td><?php echo $row->invoiceno;?> </td>
                            <td><?php echo $row->controlno;?> </td>
                            <td><?php echo $row->payno;?> </td>
                            <td><?php echo $row->receipt;?> </td>
                            <td><?php echo $row->amount;?> </td>
                            <td><?php echo $row->udate;?> </td>
                            <td><?php echo $row->expdate;?> </td>
                            <td>
                              <?php if($row->status=="Active") { ;?>
                                <span class="label label-success"><?php echo $row->status;?></span>
                              <?php } else { ;?>
                                <span class="label label-warning"><?php echo $row->status;?></span>
                              <?php } ;?>
                            </td>
                        </tr>                                    
                <?php $index ++;?>
                <?php endforeach; ?>  
            </tbody></table>



        </div>
        <div class="col-md-12" style="height: 20px;"></div>
    </div>
  </div>
  



</div>
</section>
<!--  =======================end panel done?============= -->