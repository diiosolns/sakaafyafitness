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
            font-size: 18px;
            color: gray;
          }
          .verify_header {
            font-size: 22px;
          }
          .verify_box {
            background-color: #fff;
            padding-top: 20px;
            padding-bottom: 20px;
            margin-top: 15%;
          }
        </style>
    </head>
    <body class="skin-black">
       

     <!-- ====================== USER LOGIN PANEL ====================== -->
       <section class="container">
          <div class="row verify_box">
            <div class="col-md-2"></div>
            <div class="col-md-8 ">
              <span><a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/img/def.png');?>" class="avater" alt="service" style="width: 8%;" ></a>
                 <b style="color: red;" class="sitecolor11 verify_header">Failed</b>
               </span>
               <hr>
              <p class="verify_msg">
                E-mail verification failed! Please try creating a new account or contact our support.
              </p>
              <div style="text-align: center; padding-top: 25px;">
                <a href="<?php echo base_url('Home'); ?>"   class=""><b>Home<?php //echo $this->lang->line('msg_mdl_privacy'); ?></b></a> | <a href="<?php echo base_url('Home/ourPrivacy'); ?>"   class=""><b><?php echo $this->lang->line('msg_mdl_privacy'); ?></b></a> | <a href="<?php echo base_url('Home/ourTerms'); ?>"  class=""><b><?php echo $this->lang->line('msg_mdl_terms'); ?></b></a>
              </div>
            </div>
            <div class="col-md-2"></div>
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

        <!-- CK Editor -->
        <script src="<?php echo base_url('assets/js/plugins/ckeditor/ckeditor.js');?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <!-- <script src="<?php //echo base_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>" type="text/javascript"></script> -->
        <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>

    </body>
</html>