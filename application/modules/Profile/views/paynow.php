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
  .pay_method {
    border-right: 1px solid lightgray;
    border-bottom: 1px solid lightgray;
  }
</style>

<?php
  $userid = $this->session->userdata('user_id');
  $services = modules::load('Profile')->get_where_custom_tb('services', 'status', "Active");
  $sports = modules::load('Profile')->get_where_custom_tb('sports', 'status', "Active");
  $payments = modules::load('Profile')->Mdl_profile->get_where_custom2_tb('payment', 'userid', $userid, 'status', "Pending");
?>

<!--  ==========================Pay for this service?============== -->
<section class=" wow animated fadeInUp " 1style="padding: 40px 20px 40px 20px; background-color: #fff !important;">
<div class="row padding" style="margin-left: 5% !important; margin-right: 5% !important;">
  
  <div class="col-md-12 profileout pull-left ">
    <div class="row profile">
        <div class="col-md-12" style="height: 10px;"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
          <h3 style="color: gray;"><b>Your reference number for payment is: <span style="color: red;"><?php echo $payments->row()->controlno; ?></span> </b></h3> 
          <span style="color: green; font-size: 18px;">Payment amount required for <?php echo $payments->row()->period; ?> Days plan is TZS <?php echo number_format($payments->row()->amount,0); ?> only. Please pay this amount in full.</span>

          <div class="row ">
              <div class="col-md-12" style="height: 10px;"></div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <h3 style="color: gray;">Payment transaction details</h3> 
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
                                  <td><span class="label label-warning"><?php echo $row->receipt;?></span> </td>
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
          </div>

          <!-- Pay methods -->
          <div  id="accordion" >
          <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-md-12"><h3 style="color: gray;" >Choose a Payment Method</h3></div>
            <div class="col-md-2 pay_method" style="text-align: center;">
              <a data-toggle="collapse" data-target="#tigopesa" data-parent="#accordion" ><img src="<?php echo base_url('assets/img/pay/tigopesa.png'); ?>" width="100%" alt="Tigo Pesa"></a>
            </div>
            <div class="col-md-2 pay_method" style="text-align: center;">
              <a data-toggle="collapse" data-target="#mpesa" data-parent="#accordion" ><img src="<?php echo base_url('assets/img/pay/mpesa.png'); ?>" width="100%" alt="M-Pesa"></a>
            </div>
            <div class="col-md-2 pay_method" style="text-align: center;">
              <a data-toggle="collapse" data-target="#airtelmoney" data-parent="#accordion" ><img src="<?php echo base_url('assets/img/pay/airtelmoney.png'); ?>" width="100%" alt="Airtel Money"></a>
            </div>
            <div class="col-md-2 pay_method" style="text-align: center;">
              <a data-toggle="collapse" data-target="#halopesa" data-parent="#accordion" ><img src="<?php echo base_url('assets/img/pay/halopesa.png'); ?>" width="100%" alt="Halo Pesa"></a>
            </div>
            <div class="col-md-2 pay_method" style="text-align: center;">
              <a data-toggle="collapse" data-target="#ezypesa" data-parent="#accordion" ><img src="<?php echo base_url('assets/img/pay/ezypesa.png'); ?>" width="100%" alt="Ezy Pesa"></a>
            </div>
            <div class="col-md-2 pay_method" style="text-align: center;">
              <a data-toggle="collapse" data-target="#ttclpesa" data-parent="#accordion" ><img src="<?php echo base_url('assets/img/pay/ttclpesa.png'); ?>" width="100%" alt="TTCL Pesa"></a>
            </div>
          </div>

          <div class="row collapse" id="tigopesa"  style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-md-6">
              <h4><b>TigoPesa</b> : Follow below steps to pay</h4>
              <ol>
                <li>Dial <b>*150*00#</b></li>
                <li>Select 4 "<b>Pay Bill</b>"</li>
                <li>Select 4 "<b>Enter Business Number</b>"</li>
                <li>Enter <b>92222396</b></li>
                <li>Enter reference number "<b><?php echo $payments->row()->controlno; ?></b>"</li>
                <li>Enter amount "<b><?php echo $payments->row()->amount; ?></b>"</li>
                <li>Enter password</li>
                <li>Enter 1 "<b>To aggress</b>"</li>
              </ol>
            </div>
            <div class="col-md-3">
              <h4>Scan to pay</h4>
              <img src="<?php echo base_url('assets/img/pay/tigopay.jpeg'); ?>" width="100%" alt="Tigo Pay">
            </div>
            <div class="col-md-3"></div>
          </div>

          <div class="row collapse" id="mpesa"  style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-md-12">
              <h4><b>M-Pesa</b> : Follow below steps to pay</h4>
              <ol>
                <li>Dial <b>*150*00#</b></li>
                <li>Select 4 "<b>Pay Bill</b>"</li>
                <li>Select 4 "<b>Enter Business Number</b>"</li>
                <li>Enter <b>92222396</b></li>
                <li>Enter reference number "<b><?php echo $payments->row()->controlno; ?></b>"</li>
                <li>Enter amount "<b><?php echo $payments->row()->amount; ?></b>"</li>
                <li>Enter password</li>
                <li>Enter 1 "<b>To aggress</b>"</li>
              </ol>
            </div>
          </div>

          <div class="row collapse" id="airtelmoney"  style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-md-12">
              <h4><b>AirtelMoney</b> : Follow below steps to pay</h4>
              <ol>
                <li>Dial <b>*150*60#</b></li>
                <li>Select 4 "<b>Pay Bill</b>"</li>
                <li>Select 4 "<b>Enter Business Number</b>"</li>
                <li>Enter <b>92222396</b></li>
                <li>Enter reference number "<b><?php echo $payments->row()->controlno; ?></b>"</li>
                <li>Enter amount "<b><?php echo $payments->row()->amount; ?></b>"</li>
                <li>Enter password</li>
                <li>Enter 1 "<b>To aggress</b>"</li>
              </ol>
            </div>
          </div>

          <div class="row collapse" id="halopesa"  style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-md-12">
              <h4><b>HaloPesa</b> : Follow below steps to pay</h4>
              <ol>
                <li>Dial <b>*150*00#</b></li>
                <li>Select 4 "<b>Pay Bill</b>"</li>
                <li>Select 4 "<b>Enter Business Number</b>"</li>
                <li>Enter <b>92222396</b></li>
                <li>Enter reference number "<b><?php echo $payments->row()->controlno; ?></b>"</li>
                <li>Enter amount "<b><?php echo $payments->row()->amount; ?></b>"</li>
                <li>Enter password</li>
                <li>Enter 1 "<b>To aggress</b>"</li>
              </ol>
            </div>
          </div>

          <div class="row collapse" id="ezypesa"  style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-md-12">
              <h4><b>EzyPesa</b> : Follow below steps to pay</h4>
              <ol>
                <li>Dial <b>*150*00#</b></li>
                <li>Select 4 "<b>Pay Bill</b>"</li>
                <li>Select 4 "<b>Enter Business Number</b>"</li>
                <li>Enter <b>92222396</b></li>
                <li>Enter reference number "<b><?php echo $payments->row()->controlno; ?></b>"</li>
                <li>Enter amount "<b><?php echo $payments->row()->amount; ?></b>"</li>
                <li>Enter password</li>
                <li>Enter 1 "<b>To aggress</b>"</li>
              </ol>
            </div>
          </div>

          <div class="row collapse" id="ttclpesa"  style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-md-12">
              <h4><b>TTCL Pesa</b> : Follow below steps to pay</h4>
              <ol>
                <li>Dial <b>*150*00#</b></li>
                <li>Select 4 "<b>Pay Bill</b>"</li>
                <li>Select 4 "<b>Enter Business Number</b>"</li>
                <li>Enter <b>92222396</b></li>
                <li>Enter reference number "<b><?php echo $payments->row()->controlno; ?></b>"</li>
                <li>Enter amount "<b><?php echo $payments->row()->amount; ?></b>"</li>
                <li>Enter password</li>
                <li>Enter 1 "<b>To aggress</b>"</li>
              </ol>
            </div>
          </div>

          </div>
          <!-- end pay methods -->

        </div>
        <div class="col-md-12" style="height: 20px;"></div>
    </div>
  </div>

</div>
</section>
<!--  =======================end panel done?============= -->