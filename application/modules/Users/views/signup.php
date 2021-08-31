<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Saka Afya Fitness Club</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
         <!--Web icon-->
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/icon.ico') ?>" />
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url('assets/css/morris/morris.css');?>" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url('assets/css/jvectormap/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo base_url('assets/css/fullcalendar/fullcalendar.css');?>" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url('assets/css/daterangepicker/daterangepicker-bs3.css');?>" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.css');?>" rel="stylesheet" type="text/css" />
        <!-- Font Family (Google font) -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- site theme -->
        <link href="<?php echo base_url('assets/css/diiocss/theme.css');?>" rel="stylesheet" type="text/css" />

        <style type="text/css">
            body {
                font-family: 'Roboto', sans-serif !important;
            }
            .box{
                background-color: #fff;
                padding-left: 10px;
                padding-right: 5px
                padding-top: 15px;
                padding-bottom: 15px;
            }

          .error {
            color: red !important;
          }
        </style>
    </head>
    <body class="skin-black">
    <?php
        $services = modules::load('Profile')->get_where_custom_tb('services', 'status', "Active");
    ?>
       

     <!-- ====================== USER SIGN UP ====================== -->
       <section class="container">
         <div class="row" style="padding-top: 5%;">
           <div class="col-md-4"></div>
           <div class="col-md-4">
                <div class="body box" >
                    <div class="sitecolor1" style="text-align: center; font-size: 24px; padding-bottom: 10px; padding-top: 10px;">
                      <a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/img/def.png');?>" class="avater" alt="service" style="width: 12%;" ></a>
                      <b>Create an account</b>
                    </div>
                     <form action="<?php echo base_url('Users/userReg')?>" method="post">
                              <div class="form-group">
                                  <!-- <label for="username" class="control-label">Full Name</label> -->
                                  <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>" required="" title="Please enter you username" placeholder="<?php echo $this->lang->line('msg_mdl_name'); ?>" style="width: 98%;">
                                  <?php echo form_error('name', '<div class="error">', '</div>'); ?>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>"  title="Enter your email address" placeholder="<?php echo $this->lang->line('msg_mdl_email'); ?>" style="width: 98%;">
                                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <input  type="tel" pattern="[0-9]{10}" class="form-control" id="phone" name="phone" value="<?php echo set_value('phone'); ?>"  title="Enter your phone number (Eg. 07XXXXXXXX)" placeholder="<?php echo $this->lang->line('msg_mdl_phone'); ?> (Eg. 255xxxxxxxxx)" style="width: 98%;"> 
                                  <?php echo form_error('phone', '<div class="error">', '</div>'); ?>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <select class="form-control" id="type" name="type" style="width: 98%;">
                                    <option value="Other"><?php echo $this->lang->line('msg_select_profile_type'); ?></option>
                                    <?php foreach ($services->result() as $row1): ?>
                                      <option value="<?php echo $row1->service;?>"><?php echo $row1->service;?></option>
                                    <?php endforeach; ?>
                                  </select>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>" required="" placeholder="<?php echo $this->lang->line('msg_mdl_password'); ?>" style="width: 98%;">
                                  <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" id="cpassword" name="cpassword" value="<?php echo set_value('cpassword'); ?>" required="" placeholder="<?php echo $this->lang->line('msg_mdl_cpassword'); ?>" style="width: 98%;">
                                  <?php echo form_error('cpassword', '<div class="error">', '</div>'); ?>
                                  <span class="help-block"></span>
                              </div>

                              <div id="regErrorMsg" class="alert alert-error hide">Registration Complete.!</div>
                             
                              <button type="submit" class="btn btn-info btn-block" style="width: 98%;"><?php echo $this->lang->line('msg_mdl_register'); ?></button>
                              <div style="color: <?php echo $color;?>; text-align: center;">
                                  <b><?php echo $msg;?></b>
                              </div>
                              <br>
                              <div style="text-align: center;">
                                <a href="<?php echo base_url('Home'); ?>"   class=""><b>Home<?php //echo $this->lang->line('msg_mdl_privacy'); ?></b></a> | <a href="<?php echo base_url('Home/ourPrivacy'); ?>"   class=""><b><?php echo $this->lang->line('msg_mdl_privacy'); ?></b></a> | <a href="<?php echo base_url('Home/ourTerms'); ?>"  class=""><b><?php echo $this->lang->line('msg_mdl_terms'); ?></b></a>
                                <br>
                                <a href="<?php echo base_url('Users/login');?>" class=""><b>I have an account<?php //echo $this->lang->line('msg_mdl_dont_have_account'); ?></b></a>
                              </div>
                          </form>
                </div>
           </div>
           <div class="col-md-4"></div>
       </div>
       </section>

    <!-- ====================== ./ END USER LOGIN PANEL ====================== -->

        <!-- add new calendar event modal -->
        <!-- jQuery 2.0.2 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url('assets/js/jquery-ui-1.10.3.min.js');?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url('assets/js/plugins/morris/morris.min.js');?>" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url('assets/js/plugins/sparkline/jquery.sparkline.min.js');?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url('assets/js/plugins/fullcalendar/fullcalendar.min.js');?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url('assets/js/plugins/jqueryKnob/jquery.knob.js');?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js');?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js');?>" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/js/AdminLTE/app.js');?>" type="text/javascript"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('assets/js/AdminLTE/dashboard.js');?>" type="text/javascript"></script>        
    </body>
</html>