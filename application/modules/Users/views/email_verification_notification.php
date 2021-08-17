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
                margin-left: 5px;
                margin-right: 5px;
                padding-top: 15px;
                padding-bottom: 15px;
            }

          .verify_msg {
            font-size: 16px;
            color: #222;
          }
          .verify_header {
            font-size: 22px;
          }
          .verify_box {
            background-color: #fff;
            padding-top: 20px;
            padding-bottom: 20px;
            margin-top: 5%;
          }
        </style>
    </head>
    <body class="skin-black">
       

     <!-- ====================== USER LOGIN PANEL ====================== -->
       <section class="container">
          <div class="row ">
            <div class="col-md-2"></div>
            <div class="col-md-8 verify_box">
              <div>
                <span><a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/img/def.png');?>" class="avater" alt="service" style="width: 8%;" ></a>
                   <b class="sitecolor1 verify_header">Welcome to Saka Afya Fitness Clube</b>
                </span>
                <hr>
              </div>
              <div>
                <p class="verify_msg">
                  Dear <?php echo $name; ?>,  
                  <br><br>
                  You recently created an account. Your username/ E-mail address is <a href="emailto: <?php echo $email; ?>,"><?php echo $email; ?></a>.  
                  <br><br>
                  To confirm your email address, please click this link: <a href="<?php echo $email_verification_link; ?>"><?php echo $email_verification_link; ?></a>  or Click verify button below.
                  <br><br>
                  <b>Please note:</b> If you cannot access this link, copy and paste the entire URL into your browser.  
                  <br><br><br>
                  The Saka Afya Fitness Club
                </p>
              </div>
              <div style="text-align: center;">
                <a href="<?php echo $email_verification_link; ?>" class="btn btn-lg btn-info">Verify Your E-mail</a>
              </div>
              <div style="text-align: center; padding-top: 25px;">
                <a href="<?php echo base_url('Home'); ?>"   class=""><b>Home<?php //echo $this->lang->line('msg_mdl_privacy'); ?></b></a> | <a href="<?php echo base_url('Home/ourPrivacy'); ?>"   class=""><b><?php echo $this->lang->line('msg_mdl_privacy'); ?></b></a> | <a href="<?php echo base_url('Home/ourTerms'); ?>"  class=""><b><?php echo $this->lang->line('msg_mdl_terms'); ?></b></a>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
       </section>

    <!-- ====================== ./ END EMAIL NOTIFICATION ====================== -->


    </body>
</html>