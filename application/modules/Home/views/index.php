<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="author" content="sumit kumar"> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Saka Afya Fitness Club</title> 
        <!--Web icon-->
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/icon.ico') ?>" />
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.css');?>" rel="stylesheet" type="text/css" />
        <!-- Sub_menu -->
        <link href="<?php echo base_url('assets/css/diiocss/submenu.css');?>" rel="stylesheet" type="text/css" />
        <!-- <link href="<?php echo base_url('assets/css/diiocss/home.css');?>" rel="stylesheet" type="text/css" /> -->
        <!-- home page slider and footer -->
        <link href="<?php echo base_url('assets/css/diiocss/home.css');?>" rel="stylesheet" type="text/css" />
         <!-- animate -->
        <link href="<?php echo base_url('assets/css/diiocss/animate.css');?>" rel="stylesheet" type="text/css" />
        <!-- Font Family (Google font) -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- mdi fonts -->
        <link href="<?php echo base_url('assets/mdi/css/materialdesignicons.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- site theme -->
        <link href="<?php echo base_url('assets/css/diiocss/theme.css');?>" rel="stylesheet" type="text/css" />
        <!-- FONT AWSOME -->
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <style type="text/css">
          body {
              font-family: 'Roboto', sans-serif !important;
          }

          .fullscreen{
              height: 100vh; /* For 100% screen height */
              width:  100vw; /* For 100% screen width */
          }
          
          .mypadding {
              padding: 1% 4% 0 4%;
           }

           .card.hovercard .cardheader {
                 /*background: url("<?php echo base_url('assets/img/profilebg2.jpg');?>");*/
                background: url("assets/img/profilebg3.PNG");
                background-size: cover;
                height: 90px;
            }

             .to-top {
                background-color: #f55353;
                 bottom: 20px;
               -o-transition: all 0.25s;
            }
           .to-top i {
                font-size: 16px;
                color: #fff;
            }
           .to-top.show-top {
               opacity: 0.6;
               visibility: visible;
            }
           .to-top:hover {
               opacity:1;
           }

           .fixnav {
              z-index: 1;
              width: 100%;
              position: fixed;
              top: 0px;
           }

            @media only screen and (max-width: 600px) {
              .mynav li {
                width: 100%;
                border-bottom: 1px solid lightgray;
              }
            }

            .afternav {
              margin-top: 50px;
            }

       /*========== to top btn =========*/
         .diiototop {
              font-size: 16px;
              text-align: center;
              border: 2px solid #ed9d00;
              border-radius: 50px;
              width: 50px;
              height: 50px;
              padding-top: 8px;
              background-color: #ed9d00;
              position: fixed;
              bottom: 0px;
              right: 0px; 
         }
       /*==========end to top btn ======*/


          .fullwidth {
              margin-left: 0;
              margin-right: 0; 
              width: 100%;
          }

        .partialwidth {
           /* margin-left: 0;
            margin-right: 0; */
            width: 92%;
        }


        .diiosearch {
            /*width: 130px;*/
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            /*background-image: url('searchicon.png');*/
            /*background-position: 10px 10px;*/ 
            background-repeat: no-repeat;
            padding: 5px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        .diiosearch:focus {
            width: 130%;
        }

        .become-freelancer-btn {
          color: #fff; 
          margin-right: 20px; 
          padding-bottom: 12px; 
          padding-top: 12px; 
          font-size: 18px; border: 2px solid #fff;
          text-shadow: 0px 0px !important;
        }

        .become-freelancer-btn:hover {
          color:  #35404F;
          background-color: #fff;
          border-radius: 25px;
          /*font-size: 18px; border: 2px solid #35404F;*/
        }

        .become-freelancer-btn-sm {
          color: #fff; 
          margin-right: 20px; 
          padding-bottom: 12px; 
          padding-top: 12px; 
          font-size: 18px;"
          font-size: 18px; border: 2px solid #fff;
          text-shadow: 0px 0px !important;
        }

        .become-freelancer-btn-sm:hover {
          color:  #35404F;
          background-color: #fff;
          border-radius: 25px;
          /*font-size: 18px; border: 2px solid #35404F;*/
        }

        .post-job-btn1-lg {
            color: #35404F; 
            font-size: 16px; 
            margin-top: 5px;
            background-color: #FFCF2A;
            text-shadow: 0px 0px !important;
        }

        .post-job-btn1-lg:hover {
            color: #35404F; 
            border-radius: 25px;
            font-size: 18px; border: 2px solid #fff; 
        }

        .post-job-btn2-lg {
            color: #35404F; 
            background-color: #FFCF2A;
            margin-right: 20px; 
            padding-bottom: 12px; 
            padding-top: 12px; 
            font-size: 18px;
            font-size: 18px; border: 2px solid #FFCF2A;
            text-shadow: 0px 0px !important;
        }

        .post-job-btn2-lg:hover {
            color: #35404F; 
            border-radius: 25px;
            font-size: 18px; border: 2px solid #fff; 
        }

        .post-job-btn2-sm {
          /*#35404F*/
          color: #35404F; 
          background-color: #FFCF2A; 
          margin-right: 20px; 
          padding-bottom: 12px; 
          padding-top: 12px; 
          font-size: 18px;
          font-size: 18px; border: 2px solid  #FFCF2A;
          text-shadow: 0px 0px !important;
        }

        .post-job-btn2-sm:hover {
            color: #35404F; 
            border-radius: 25px;
            font-size: 18px; border: 2px solid #fff; 
        }


        </style>

        <!-- =============== LARGE DROPDOWN (MORE)========= -->
          <style type="text/css">
           /* @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
          body {
            font-family: 'Open Sans', 'sans-serif';
          }*/
          .mega-dropdown {
            position: static !important;
          }
          .mega-dropdown-menu {
              padding: 20px 0px;
              width: 100%;
              box-shadow: none;
              -webkit-box-shadow: none;
          }
          .mega-dropdown-menu > li > ul {
            padding: 0;
            margin: 0;
          }
          .mega-dropdown-menu > li > ul > li {
            list-style: none;
          }
          .mega-dropdown-menu > li > ul > li > a {
            display: block;
            color: #222;
            padding: 3px 5px;
          }
          .mega-dropdown-menu > li ul > li > a:hover,
          .mega-dropdown-menu > li ul > li > a:focus {
            text-decoration: none;
          }
          .mega-dropdown-menu .dropdown-header {
            font-size: 16px;
            color: #ff3546;
            padding: 5px 60px 5px 5px;
            line-height: 30px;
          }

          .diioHover: hover {
            color: red;
             background: yellow;
          }
          .topli{
             padding-left: 10px; 
             margin-top: 5px; 
             margin-bottom: 10px;
          }
          .topli2{
            font-size: 16px; 
            padding-right: 25px;
          }
          </style>
          <!-- =================== END MORE==================== -->
        <!-- ================== ADSENSE============ -->
        <!--  ================== END ADSENSE ======= -->
    </head>

<body style="background-color: #F5F5F5;" >   
<!--====================== NAVBAR MENU START===================-->
<nav class="navbar navbar-inverse fixnav">
  <div class="container-fluid mynav">
    <div class="navbar-header" style="background-color: #F7F7F7/*191919*/; ">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: #191919;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!-- <a  class="" href="<?php echo base_url();?>" style=" padding-top: 10px !important; margin-top: 10px !important; padding-left: 20px;"  >
        <img alt="Brand" src="<?php echo base_url('assets/img/brand_blue.png');?>" width=160px >
      </a> -->
      <a href="<?php echo base_url();?>" style="color: #fff; font-size: 35px; padding-top1: 15px; left: 1%;" class="navbar-brand hidden-xl hidden-md hidden-lg" ><b><img alt="Brand" src="<?php echo base_url('assets/img/brand_blue.png');?>" height=45px ></b></a>
    </div>
    <div class="collapse navbar-collapse " id="myNavbar" style="background-color: #F7F7F7;">
      <?php
         $services = modules::load('Profile')->get_where_custom_tb('services', 'status', "Active");
      ?>
    <div class="row" style="margin-right: 20px:">
      <div class="col-md-9">
        <ul class="nav navbar-nav navbar-left" style="padding-top: 0px !important; padding-bottom: 0px;">
          <li class="hidden-sm hidden-xs" style="padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 50px !important;">
            <a class="navbar-brand" href="<?php echo base_url();?>" style="margin-top: 3px; padding-top: 3px; padding-left: 40px;" >
              <img alt="Brand" src="<?php echo base_url('assets/img/brand_blue.png');?>" height=45px >
            </a>
          </li>
          <li class="topli2" ><a class="home"  href="<?php echo base_url('Home');?>"><b><?php echo $this->lang->line('msg_home'); ?></b></a></li>
          <li class="topli2" ><a class="about" href="<?php echo base_url('Home/aboutUs');?>"><b><?php echo $this->lang->line('msg_about_us'); ?></b></a></li>
          <li class="topli2" ><a class="contact"  href="<?php echo base_url('Home/contactUs');?>"><b><?php echo $this->lang->line('msg_contact_us'); ?></b></a></li>
          <li class="topli2" ><a class="blog"  href="<?php echo base_url('Artical/blog');?>"><b><?php echo $this->lang->line('msg_blog'); ?></b></a></li>
          

          
          <?php if ($this->session->userdata('logged_in')) { ?>
            <li class="hidden-md hidden-lg" ><a href="<?php echo base_url('Admin');?>"><b style="color: ;">My Account<?php //echo $this->lang->line('msg_myaccount'); ?></b></a></li>
          <?php } else { ?>
            <li class="hidden-md hidden-lg"><a class1="badge badge-info" href="<?php echo base_url('Users/login');?>" ><b style="color: ;"><?php echo $this->lang->line('msg_login'); ?></b></a></li>
            <li class="hidden-md hidden-lg"><a class1="badge badge-info"  href="<?php echo base_url('Users/signup');?>" ><b style="color: ;"><?php echo $this->lang->line('msg_register'); ?></b></a></li>
          <?php } ?>
            <li class="  hidden-md hidden-lg pull-right" style="text-align: right;">
              Language
                  <select style="border-radius: 15px; padding-left: 5px; padding-right: 5px; margin-bottom: 20px; margin-top: 20px;"> class="pull-right" onchange="javascript:window.location.href='<?php echo base_url(); ?>Home/switchLang/'+this.value;">
                  <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
                  <option value="kiswahili" <?php if($this->session->userdata('site_lang') == 'kiswahili') echo 'selected="selected"'; ?>>Swahili</option> 
                  </select>
            </li>
        </ul>
      </div>
      <div class="col-md-3 hidden-xs hidden-sm" style="padding-top: 15px; text-align: right;">
        <?php if ($this->session->userdata('logged_in')) { ?>
          <a style="font-size: 16px; margin-top: 5px;" href="<?php echo base_url('Admin');?>" class1="btn btn-md btn-pill btn-info" ><b>My Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
        <?php } else { ?>
          <a href="<?php echo base_url('Users/login');?>" style="font-size: 16px; margin-right: 20px !important; margin-top: 20px !important;" type="button" class1="btn btn-md btn-pill btn-outline btn-default" ><?php echo $this->lang->line('msg_log_in'); ?></a>
          <a href="<?php echo base_url('Users/signup');?>" style="font-size: 16px; margin-right: 20px !important; margin-top: 20px !important;" type="button" class1="btn btn-md btn-pill btn-default" ><?php echo $this->lang->line('msg_sign_up'); ?></a>
        <?php } ?>
        <select style=" font-size: 16px;  border-radius: 15px; padding-left: 5px; padding-right: 5px;" class="pull-right" onchange="javascript:window.location.href='<?php echo base_url(); ?>Home/switchLang/'+this.value;">
            <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
            <option value="kiswahili" <?php if($this->session->userdata('site_lang') == 'kiswahili') echo 'selected="selected"'; ?>>Swahili</option> 
        </select>
      </div>
    </div>    
    </div>
  </div>
</nav>

<div class="afternav">
  <!-- ============= PAGE MIDDLE CONTENT ========== -->
    <?php 
       $this->load->view($middle_m.'/'.$middle_f);
    ?>        
  <!-- ============= END MIDDLE CONTENTS =========== -->

  <!-- ============== PAGE BEFORE FOOTER ============ -->
   <?php 
       $this->load->view($bfooter_m.'/'.$bfooter_f);
   ?> 
  <!-- =============== END BEFORE FOOTER ============ -->   
</div>  
<!--  ================ FOOTER START================== -->   
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="text-align: center; padding-bottom: 40px; color: #fff; font-size: 16px;">
              <!-- ====================links -->
              <a class="" href="<?php echo base_url('Home');?>"><b style="color: #fff; padding-left: 40px;"><?php echo $this->lang->line('msg_home'); ?></b></a>
              <a class="" href="<?php echo base_url('Home/aboutUs');?>"><b style="color: #fff; padding-left: 40px;"><?php echo $this->lang->line('msg_about_us'); ?></b></a>
              <a class="" href="<?php echo base_url('Home/contactUs');?>"><b style="color: #fff; padding-left: 40px;"><?php echo $this->lang->line('msg_contact_us'); ?></b></a>
              <a class="" href="<?php echo base_url('Artical/blog');?>"><b style="color: #fff; padding-left: 40px;"><?php echo $this->lang->line('msg_blog'); ?></b></a>
              <!-- <a href="<?php echo base_url('Home/FAQ');?>"><b style="color: #fff; padding-left: 40px;"><?php echo $this->lang->line('msg_faq'); ?></b></a> -->
             <!--  =================end links -->
              <hr>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-3" style="text-align: justify;" >
            <h4 class="title">Saka Afya Fitness Club</h4>
            <p>
              <?php //echo $this->lang->line('msg_this_site_text'); ?>
              SAKA AFYA FITNESS CLUB. Come from a Kiswahili word
              “SAKA AFYA” which means to “look for health. We don’t defer
              from our name. our vision is to wipe away the tears of thousands
              of people struggling and cling due to non-communicable
              diseases. Non – communicable diseases cause deaths of millions
              of people every year. Thus, we bring a smile to the faces of the
              people.
              <a href="<?php echo base_url('Home/aboutUs'); ?>">Read more</a>
            </p>
            <ul class="social-icon">
            <a href="https://www.facebook.com/" target="_blank" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/signup?lang=en" target="_blank" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/accounts/login/" target="_blank" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/" target="_blank" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href="https://plus.google.com/discover" target="_blank" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </ul>
            </div>
        <div class="col-sm-3 center">
            <h4 class="title"><?php echo $this->lang->line('msg_profile_types'); ?></h4>
            <span class="acount-icon">          
              <a href="<?php echo base_url('Profile/listprofiles/Sportsperson');?>"><i class="fa fa-user" aria-hidden="true"></i> Sportsperson <?php //echo $this->lang->line('msg_Freelancer'); ?></a>
              <a href="<?php echo base_url('Profile/listprofiles/Trainee');?>"><i class="fa fa-tasks" aria-hidden="true"></i> Trainees <?php //echo $this->lang->line('msg_post_a_job'); ?></a> 
              <a href="<?php echo base_url('Profile/listprofiles/Trainer');?>"><i class="fa fa-tasks" aria-hidden="true"></i> Trainers <?php //echo $this->lang->line('msg_post_a_job'); ?></a>    
              <a href="<?php echo base_url('Profile/listprofiles/Sponsor');?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Coaches/ Sponsors <?php //echo $this->lang->line('msg_find_jobs'); ?></a>
              <a href="<?php echo base_url('Profile/listprofiles/Team');?>"><i class="fa fa-tasks" aria-hidden="true"></i> Teams <?php //echo $this->lang->line('msg_post_a_job'); ?></a>
              <a href="<?php echo base_url('Profile/listprofiles/Gym');?>"><i class="fa fa-user" aria-hidden="true"></i> Gyms <?php //echo $this->lang->line('msg_Freelancer'); ?></a>
              <a href="<?php echo base_url('Profile/listprofiles/Instructor');?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Instructors <?php //echo $this->lang->line('msg_find_jobs'); ?></a>         
            </span>
        </div>
        <div class="col-sm-3">
            <h4 class="title"> Club Members <?php //echo $this->lang->line('msg_Freelancer_Categories'); ?></h4>
            <div class="category">
              <?php foreach ($services->result() as $row1): ?>
              <a href="<?php echo base_url('Profile/listprofiles/');?><?php echo $row1->service;?>"><?php echo $row1->service;?></a>
              <?php endforeach; ?>    
            </div>
        </div>
        <div class="col-sm-3" style="text-align: center;">
            <h4 class="title"><?php echo $this->lang->line('msg_social_media'); ?></h4>
            <p><b><?php echo $this->lang->line('msg_visit_our_pages'); ?></b></p>
            <ul class="social-icon">
            <a href="https://www.facebook.com/ehuduma/" target="_blank" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/signup?lang=en" target="_blank" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/accounts/login/" target="_blank" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/" target="_blank" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href="https://plus.google.com/discover" target="_blank" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <!-- <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a> -->
            </ul>
            <h4 class="title"><?php echo $this->lang->line('msg_our_contacts'); ?></h4>
            <ul style="text-align: left; font-size: 16px;" >
               <!-- <b><?php //echo $this->lang->line('msg_pobox'); ?></b><br> -->
               <b><?php echo $this->lang->line('msg_phone'); ?>+255 785 508 030</b><br>
               <b><?php echo $this->lang->line('msg_email'); ?><a href="mailto: support@sakaafyafiness.club">support@ehuduma.com</a></b><br>
            </ul>
          </div>
        </div>
        <hr>
        <a href="javascript:;" class="to-top diiototop pull-right"><i class="fa fa-chevron-up"></i></a>
        <div class="row text-center"><a href="<?php echo base_url('Home/ourPrivacy');?>"><?php echo $this->lang->line('msg_mdl_privacy'); ?></a> | <a href="<?php echo base_url('Home/ourTerms');?>"><?php echo $this->lang->line('msg_mdl_terms'); ?></a><br> © Saka Afya Fitness Club <?php echo mdate('%Y');?> - <?php echo $this->lang->line('msg_all_rights_reserved'); ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_developer'); ?>: <a target="_blank" href="https://www.diiolab.com">DiioLab</a><!-- 2017. by Dionizi France (+255-752-194-092 | +255-684-544-167) --></div>
        </div>  
    </footer>

        <!-- Scripts -->
        <!-- jQuery 2.0.2 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/ajax/jquery.min.js');?>" type="text/javascript"></script>
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
        <!-- Bootstrap -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/js/AdminLTE/app.js');?>" type="text/javascript"></script>
        <!--  scroll to top -->
        <script src="<?php echo base_url('assets/js/scrolltotop.js');?>" type="text/javascript"></script>
        <!--  wow for animation -->
        <script src="<?php echo base_url('assets/js/myjs/wow.js');?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>
        <!--  search inputs top -->

        <!-- Popover -->
        <script>
          $(document).ready(function(){
              $('[data-toggle="popover"]').popover(); 
          });
        </script>

       <!--  =============== TOP DROPDOWN========= -->
        <script type="text/javascript">
          $(document).ready(function(){
            $(".dropdown").hover(            
                function() {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
                    $(this).toggleClass('open');        
                },
                function() {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
                    $(this).toggleClass('open');       
                }
            );
        });
        </script>
       <!--  ==========END DROPDOWN============ -->

      <!-- ========== animate script========= -->
      <script type="text/javascript">
        new WOW().init();
      </script>

</body>
</html>