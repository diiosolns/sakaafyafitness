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

        <style type="text/css">
            body {
                  font-family: 'Roboto', sans-serif !important;
              }
          
           .mypadding {
              padding: 1% 4% 0 4%;
           }
        </style>
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url('Home');?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                SakaAfya
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <!-- <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data --
                                    <ul class="menu">
                                        <li><!-- start message --
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message --
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li> -->
                        <!-- Notifications: style can be found in dropdown.less -->
                        <!-- <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data --
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li> -->
                        <!-- Tasks: style can be found in dropdown.less -->
                        <!-- <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    === inner menu: contains the actual data ====
                                    <ul class="menu">
                                        <li><!-- Task item --
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item --
                                        <li><!-- Task item --
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item --
                                        <li><!-- Task item --
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item --
                                        <li><!-- Task item --
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item --
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li> -->
                       <!--  <li class="">
                            <a href="<?php echo base_url('Home/Job');?>" class1="btn btn-lg btn-info" style="color1: #fff;font-size: 14px; padding-top: 0px, padding-bottom: 0px; " ><b>Post a job (FREE)</b>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                        </li> -->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $this->session->userdata('user_name');?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url('assets/img/icon.png');?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $this->session->userdata('user_name');?> - <?php echo $this->session->userdata('user_role');?> User
                                        <small>Member of eHuduma</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="<?php echo base_url('Home');?>"><?php echo $this->lang->line('msg_home'); ?></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="<?php echo base_url('Home/contactUs');?>"><?php //echo $this->lang->line('msg_contact_us'); ?>Contact</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="<?php echo base_url('Home/aboutUs');?>"><?php //echo $this->lang->line('msg_about_us'); ?>About</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('Users/changePassword');?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('Home/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


     <!-- ====================== SIDE MENU ====================== -->
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url('assets/img/icon.png');?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $this->lang->line('msg_hi'); ?>, <?php echo $this->session->userdata('user_name');?></p>

                            <a href="<?php echo base_url('Home');?>"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="<?php echo base_url('Home/searchResults');?>" method="post" class="sidebar-form" enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="<?php echo $this->lang->line('msg_search'); ?>" required="" />
                            <span class="input-group-btn">
                                <button type='submit' name="searchBtn" value="ok" id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <?php 
                        $userid = $this->session->userdata('user_id');
                        $myprofiles = modules::load('Job')->Mdl_job->get_where_custom_tb('profile', 'userid', $userid);
                        $myjobs = modules::load('Job')->Mdl_job->get_where_custom_tb('job', 'postedby', $userid);
                    ?>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url('Admin');?>">
                                <i class="fa fa-dashboard"></i> <span><?php echo $this->lang->line('msg_dashboard'); ?></span>
                            </a>
                        </li>
                       
                        <li class="treeview">
                            <a href="#">
                                <span class="fa fa-users"></span>  
                                <span class=""> Manage Projects  <?php //echo $this->lang->line('msg_my_profile'); ?> </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Job/manage_jobs');?>"> <i class="fa fa-angle-double-right"></i> Ongoing<?php //echo $this->lang->line('msg_new_profile'); ?></a></li>
                                <li><a href="<?php echo base_url('Job/historical_jobs');?>">  <i class="fa fa-angle-double-right"></i> Closed <?php //echo $this->lang->line('msg_manage_my_profile'); ?></a></li>
                                <!-- <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> New</a></li> -->
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span class="">Manage Users<?php //echo $this->lang->line('msg_user_profiles'); ?> </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Profile/manageProfiles');?>">  <i class="fa fa-angle-double-right"></i> Freelancers   <?php //echo $this->lang->line('msg_manage_profiles'); ?></a></li>
                                <li><a href="<?php echo base_url('Users/manageUsers/User');?>">  <i class="fa fa-angle-double-right"></i>Employers  <?php //echo $this->lang->line('msg_manage_accounts'); ?></a></li>
                                <li><a href="<?php echo base_url('Users/manageUsers');?>">  <i class="fa fa-angle-double-right"></i> All users  <?php //echo $this->lang->line('msg_manage_accounts'); ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo base_url('Chat/myChats');?>">
                                <i class="fa fa-comment"></i> <span><?php echo $this->lang->line('msg_chats'); ?></span> <small class="badge pull-right bg-green">10</small>
                            </a>
                        </li>

                        <!-- <li class="treeview">
                            <a href="#">
                                <i class="fa fa-comments"></i>
                                <span class=""> <?php //echo $this->lang->line('msg_comments'); ?> </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php //echo base_url('Chat/manageComments');?>"> <i class="fa fa-angle-double-right"></i>  <?php echo $this->lang->line('msg_manage_comments'); ?></a></li>
                            </ul>
                        </li> -->

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-clipboard"></i>
                                <span class="">  <?php echo $this->lang->line('msg_blog_and_posts'); ?>  </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('Artical/newArtical');?>">  <i class="fa fa-angle-double-right"></i>  <?php echo $this->lang->line('msg_create_blog_post'); ?></a></li>
                                <li><a href="<?php echo base_url('Artical/manageArticals');?>">  <i class="fa fa-angle-double-right"></i>  <?php echo $this->lang->line('msg_manage_blogs'); ?></a></li>
                                <li><a href="<?php echo base_url('Artical/blogUploads');?>">  <i class="fa fa-angle-double-right"></i>  Uploads<?php //echo $this->lang->line('msg_manage_blogs'); ?></a></li>
                                <!-- <li><a href="<?php echo base_url('Artical/newNews');?>">  <i class="fa fa-angle-double-right"></i>  <?php echo $this->lang->line('msg_record_post'); ?></a></li>
                                <li><a href="<?php echo base_url('Artical/manageNews');?>">  <i class="fa fa-angle-double-right"></i>  <?php echo $this->lang->line('msg_manage_posts'); ?></a></li> -->
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo base_url('Users/changePassword');?>">
                                <i class="glyphicon glyphicon-user"></i><span class=""></span> <?php //echo $this->lang->line('msg_signout'); ?> My account
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('Home/logout');?>">
                                <i class="fa fa fa-sign-out"></i> <span class=""></span> <?php //echo $this->lang->line('msg_signout'); ?> Logout
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
        <!-- ======================== END SIDE MENU =============== -->




            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">

                <!-- ========== CALL RIGHT PANNEL -->
                    <?php 
                        //$this->load->view($middle_m.'/'.$middle_f);
                    ?>    

                    <!-- ============== MIDDLE PANNEL ============ -->
                      <div class="row">
                         <div class="col-md-12" style="margin-left: 1%; margin-right: 1%;">
                             <?php 
                                 $this->load->view($mpanel_m.'/'.$mpanel_f);
                              ?> 
                         </div>
                     </div>
                    <!-- =============== END MIDDLE PANNEL ============ -->    

                <!-- ============= END RIGHT PANNEL -->


            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->

    <!-- ====================== ./ ENDSIDE MENU ====================== -->

    <!--  ======================== FOOTER ============= -->
    <footer class="footer" style="background-color: #333333;">
        <div class="container">
            <br>
            <div class="row text-center" style="color: #fff;"><a href="<?php echo base_url('Home/ourPrivacy');?>"><?php echo $this->lang->line('msg_mdl_privacy'); ?></a> | <a href="<?php echo base_url('Home/ourTerms');?>"><?php echo $this->lang->line('msg_mdl_terms'); ?></a><br> © Uwezomedia Limited 2018 - <?php echo $this->lang->line('msg_all_rights_reserved'); ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_developer'); ?>: diioLab<!-- 2017. by Dionizi France (+255-752-194-092 | +255-684-544-167) --></div>
            <hr>
        </div>     
    </footer>
    <!-- ======================== END FOOTER ========= -->



        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url('assets/js/jquery-ui-1.10.3.min.js');?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo base_url('assets/js/cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js');?>"></script>
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
        <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                //CKEDITOR.replace('editor1');
                //CKEDITOR.replace('blogpost');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>

    </body>
</html>