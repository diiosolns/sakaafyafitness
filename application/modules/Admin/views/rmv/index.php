<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="author" content="sumit kumar"> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Saka Afya Fitness Club</title> 
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
        <!-- home page slider and footer -->
        <link href="<?php echo base_url('assets/css/diiocss/home.css');?>" rel="stylesheet" type="text/css" />
        <!-- Font Family (Google font) -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- site theme -->
        <link href="<?php echo base_url('assets/css/diiocss/theme.css');?>" rel="stylesheet" type="text/css" />


        <!-- <script src="https://use.fontawesome.com/07b0ce5d10.js"></script> -->
        <style type="text/css">
          body {
              font-family: 'Roboto', sans-serif !important;
          }
           .card.hovercard .cardheader {
                 background: url("<?php echo base_url('assets/img/profilebg.jpg');?>");
                /*background: url("../../img/profilebg.jpg");*/
                background-size: cover;
                height: 135px;
            }

             .to-top {
                background-color: #f55353;
                 bottom: 20px;
               -o-transition: all 0.25s;
            }
           .to-top i {
                font-size: 18px;
                color: #fff;
            }
           .to-top.show-top {
               opacity: 0.6;
               visibility: visible;
            }
           .to-top:hover {
               opacity:1;
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
            font-size: 18px;
            color: #ff3546;
            padding: 5px 60px 5px 5px;
            line-height: 30px;
          }

          .diioHover: hover {
            color: red;
             background: yellow;
          }

          /*.carousel-control {
            width: 30px;
            height: 30px;
            top: -35px;

          }
          .left.carousel-control {
            right: 30px;
            left: inherit;
          }*/
          /*.carousel-control .glyphicon-chevron-left, 
          .carousel-control .glyphicon-chevron-right {
            font-size: 12px;
            background-color: #fff;
            line-height: 30px;
            text-shadow: none;
            color: #333;
            border: 1px solid #ddd;
          }*/
          </style>
          <!-- =================== END MORE==================== -->


    </head>

<body style="background-color: #F5F5F5;">
    
    <nav class="top-bar">
      <div class="container">
        <div class="row">
        <div class="col-sm-4 hidden-xs">
            <span class="nav-text">
               <!--  <i class="fa fa-phone" aria-hidden="true"></i>  +123 4567 8910 
                <i class="fa fa-envelope" aria-hidden="true"></i> sumi9xm@gmail.com</span> -->
                <i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;<b style="font-size: 16px;">SakaAfya</b>
            </div>
        <div class="col-sm-4 text-center">
            <a href="https://www.facebook.com/" target="_blank" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/signup?lang=en" target="_blank" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/accounts/login/" target="_blank" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/" target="_blank" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href="https://plus.google.com/discover" target="_blank" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <!-- <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a> -->
        </div>
        <div class="col-sm-4 text-right hidden-xs">
                <ul class="tools">  
                
                <li class="">
                 <a href="<?php echo base_url('Home/logout');?>" class="btn btn-md btn-pill btn-warning" >Sign Out</a>
                </li> 

                <li class="dropdown">
                      <label style="color: #fff;" for=""><b><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_language'); ?>:&nbsp;&nbsp;&nbsp;</i></b></label>
                      <select class="pull-right" onchange="javascript:window.location.href='<?php echo base_url(); ?>Home/switchLang/'+this.value;">
                          <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
                          <option value="kiswahili" <?php if($this->session->userdata('site_lang') == 'kiswahili') echo 'selected="selected"'; ?>>Kiswahili</option> 
                      </select>
                </li>
                                      
                </ul>
              </div>
        </div>
      </div>
    </nav>   <!--TOP-NAVBAR-END-->
    
    
<!--====================== NAVBAR MENU START===================-->
    
<nav class="navbar navbar-inverse hidden-sm hidden-xs">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <!--  <a class="navbar-brand" href="#"><img src="https://lh3.googleusercontent.com/-N4NB2F966TU/WM7V1KYusRI/AAAAAAAADtA/fPvGVNzOkCo7ZMqLI6pPITE9ZF7NONmawCJoC/w185-h40-p-rw/logo.png"></a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <div class="row">
      <div class="col-md-9">
        <ul class="nav navbar-nav navbar-left">
          <li class=""><a href="<?php echo base_url('Home');?>"><b><?php echo $this->lang->line('msg_home'); ?></b></a></li>
          <!-- <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="<?php //echo base_url('Artical/articalPage');?>"><b>ARTICALS </b><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php //echo base_url('Artical/articalPage');?>">Huduma Articals</a></li>
              <li><a href="#">Artical - 2</a></li>
              <li><a href="#">Artical - 3</a></li>
            </ul>
          </li> -->
           <li><a href="<?php echo base_url('Home/aboutUs');?>"><b style="color: blue;"><?php echo $this->lang->line('msg_about_us'); ?></b></a></li>
           
            <!-- =============== LARGE DROPDOWN (MORE)========= -->
            <li class="dropdown mega-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><?php echo $this->lang->line('msg_profiles_title'); ?> </b><span class="caret"></span></a>        
            <ul class="dropdown-menu mega-dropdown-menu" >
              <li class="col-sm-3">
                  <ul>
                  <li class="dropdown-header"><?php echo $this->lang->line('msg_professionals'); ?></li>
                  <li class="diioHover"><a href="<?php echo base_url('Profile/profileList/');?>cat/Teacher"><?php echo $this->lang->line('msg_teacher'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Doctor"><?php echo $this->lang->line('msg_doctor'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Techinician"><?php echo $this->lang->line('msg_technician'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Animal Keeping"><?php echo $this->lang->line('msg_animal_keeper'); ?></a></li>
                  
                  <li class="divider"></li> <!-- ===== interpreneours===== -->
                  <li class="dropdown-header"><?php echo $this->lang->line('msg_entrepreneurs'); ?></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Archtect"><?php echo $this->lang->line('msg_archtect'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Shop"><?php echo $this->lang->line('msg_shop'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Packing"><?php echo $this->lang->line('msg_parking'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Car Wash"><?php echo $this->lang->line('msg_car_wash'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Garage"><?php echo $this->lang->line('msg_garage'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Blocker"><?php echo $this->lang->line('msg_brocker'); ?></a></li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul>
                  <li class="dropdown-header" style1="color: #fff;"><?php echo $this->lang->line('msg_professionals'); ?></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Interpreter"><?php echo $this->lang->line('msg_interpreter'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/translator"><?php echo $this->lang->line('msg_translator'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/programmer"><?php echo $this->lang->line('msg_programmer'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Master Ceremony" style="color: #fff;" ><?php echo $this->lang->line('msg_master_of_ceremony'); ?></a></li>
                 
                  <li class="divider"></li> <!-- ===== interpreneours===== -->
                  <li class="dropdown-header" style1="color: #fff;"><?php echo $this->lang->line('msg_entrepreneurs'); ?></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Day care"><?php echo $this->lang->line('msg_day_care'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Online Marketer"><?php echo $this->lang->line('msg_online_marketers'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Insurance"><?php echo $this->lang->line('msg_insurance'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Butcher"><?php echo $this->lang->line('msg_butcher'); ?></a></li> 
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Cafe"><?php echo $this->lang->line('msg_restaurant'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Master Ceremony"><?php echo $this->lang->line('msg_master_of_ceremony'); ?></a></li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul>
                  <li class="dropdown-header" style1="color: #fff;"><?php echo $this->lang->line('msg_professionals'); ?><!-- </li><?php //echo $this->lang->line('msg_'); ?> -->
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Lawyor"><?php echo $this->lang->line('msg_lawyer'); ?> </a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Nurse"><?php echo $this->lang->line('msg_nurse'); ?> </a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Burser"><?php echo $this->lang->line('msg_bursar'); ?> </a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Sychologist"><?php echo $this->lang->line('msg_psychologist'); ?> </a></li>

                  <li class="divider"></li> <!-- ===== interpreneours===== -->
                  <li class="dropdown-header" style1="color: #fff;"><?php echo $this->lang->line('msg_entrepreneurs'); ?></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Bar"><?php echo $this->lang->line('msg_bar'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Saloon"><?php echo $this->lang->line('msg_salon'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Bakery"><?php echo $this->lang->line('msg_bakery'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Tution Center"><?php echo $this->lang->line('msg_tuition_centre'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Blogger"><?php echo $this->lang->line('msg_blogger'); ?></a></li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul>
                  <li class="dropdown-header" style1="color: #fff;"><?php echo $this->lang->line('msg_professionals'); ?></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Agriculturist"><?php echo $this->lang->line('msg_farming_expert'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Driver"><?php echo $this->lang->line('msg_driver'); ?></a></li>
                  <!-- <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Security Guard"><?php echo $this->lang->line('msg_security_guard'); ?></a></li> -->
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Others"><?php echo $this->lang->line('msg_other_works'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Others" style="color: #fff;"><?php echo $this->lang->line('msg_other_works1'); ?>.</a></li>
                  
                  <li class="divider"></li> <!-- ===== interpreneours===== -->
                  <li class="dropdown-header" style1="color: #fff;"><?php echo $this->lang->line('msg_entrepreneurs'); ?></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/School"><?php echo $this->lang->line('msg_school'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Guest House"><?php echo $this->lang->line('msg_guest_house'); ?></a></li>
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Hotel"><?php echo $this->lang->line('msg_hotel'); ?></a></li>
                  
                  <li><a href="<?php echo base_url('Profile/profileList/');?>cat/Others"><?php echo $this->lang->line('msg_other_business_works'); ?></a></li>
                  
            
                </ul>
              </li>

               <!-- <li class="col-sm-3">
                  <ul>
                  <li class="dropdown-header">SakaAfya Services</li>                            
                                <div id="womenCollection" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="item active">
                                        <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                        <h4><small>Summer dress floral prints</small></h4>                                        
                                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                        <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                        <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                    </div>
                                    <div class="item">
                                        <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                        <h4><small>Denin jacket stamped</small></h4>                                        
                                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                    </div>                            
                                  </div>
                                 
                                  <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                                <li class="divider"></li>
                                <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                </ul>
              </li> -->


            </ul>       
          </li>
          <!-- =================== END MORE==================== -->

          <!-- <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>NEWS</b> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php //echo base_url('Profile');?>">All Profiles</a></li>
              <li><a href="#">News - 2</a></li>
              <li><a href="#">News - 3</a></li>
            </ul>
          </li> -->
          <li><a href="<?php echo base_url('Artical/hudumaNews');?>"><b><?php echo $this->lang->line('msg_quick_deals'); ?></b></a></li>
          <li><a href="<?php echo base_url('Artical/articalPage');?>"><b><?php echo $this->lang->line('msg_blog'); ?></b></a></li>
          <li><a href="<?php echo base_url('Home/FAQ');?>"><b><?php echo $this->lang->line('msg_faq'); ?></b></a></li>
          
          <li><a href="<?php echo base_url('Home/contactUs');?>"><b style="color: red;"><?php echo $this->lang->line('msg_contact_us'); ?></b></a></li>
          <?php if ($this->session->userdata('logged_in')) { ?>
            <li class="hidden-md hidden-lg" ><a href="<?php echo base_url('Admin');?>"><b style="color: ;"><?php echo $this->lang->line('msg_myaccount'); ?></b></a></li>
          <?php } else { ?>
            <li class="hidden-md hidden-lg"><a href="" data-toggle="modal" data-target="#modal-login"><b style="color: ;"><?php echo $this->lang->line('msg_login'); ?></b></a></li>
            <li class="hidden-md hidden-lg"><a href="" data-toggle="modal" data-target="#modal-register" ><b style="color: ;"><?php echo $this->lang->line('msg_register'); ?></b></a></li>
          <?php } ?>
        </ul>
      </div>
       <div class="col-md-3">
          <form class="navbar-form navbar-right" action="<?php echo base_url('Home/searchResults');?>" method="post" enctype="multipart/form-data">
            <div class="input-group">  
              <div class="input-group-btn">
                <button class="btn btn-default-1" name="searchBtn" value="ok" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
              <input type="text" name="search" class="form-control diiosearch" style="" placeholder="<?php echo $this->lang->line('msg_search'); ?>" required="">      
            </div>
                
             <!--  <span class="cart-heart  hidden-sm hidden-xs"> 
                  <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
              </span> 
              <span class="cart-heart  hidden-md hidden-lg">          
                  <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-usd" aria-hidden="true"></i></a>
              </span>    -->
          </form>
      </div>
      
    </div>
      
     
        
    </div>
  </div>
</nav>


<!-- ============= PAGE MIDDLE CONTENT ========== -->
  <?php 
     $this->load->view($middle_m.'/'.$middle_f);
   ?>        

<!-- ============= END MIDDLE CONTENTS =========== -->
 
 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
    
<!--   FOOTER START================== -->
    
    <footer class="footer" style="padding-top: 10px;">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4">Developer: diioLab &copy;Huduma : All rights Reserved</div>
      </div>
    </footer>
    <!-- <footer class="footer" style="z-index: 9999;">
    <div class="container">
        <div class="row">
        <div class="col-sm-3">
            <h4 class="title">Huduma</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
            <ul class="social-icon">
            <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            </ul>
            </div>
        <div class="col-sm-3">
            <h4 class="title">Profile Types</h4>
            <span class="acount-icon">          
            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Professionals</a>
            <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Interprenours</a>
            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Business Man</a>
            <a href="#"><i class="fa fa-globe" aria-hidden="true"></i> Politicians</a>           
          </span>
            </div>
        <div class="col-sm-3">
            <h4 class="title">Category</h4>
            <div class="category">
            <a href="#">men</a>
            <a href="#">women</a>
            <a href="#">boy</a>
            <a href="#">girl</a>
            <a href="#">bag</a>
            <a href="#">teshart</a>
            <a href="#">top</a>
            <a href="#">shos</a>
            <a href="#">glass</a>
            <a href="#">kit</a>
            <a href="#">baby dress</a>
            <a href="#">kurti</a>           
            </div>
            </div>
        <div class="col-sm-3">
            <h4 class="title">Social Media</h4>
            <p>Vist Our Social Media Pages Here...</p>
            <ul class="social-icon">
            <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            </ul>
            </div>
        </div>
        <hr>
        <a href="javascript:;" class="to-top pull-right"><i class="fa fa-chevron-up"></i></a>
        <div class="row text-center"> © 2017. Made with  by sumi9xm.</div>
        </div>
        
        
    </footer>
     -->
   


<!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url('assets/ajax/jquery.min.js');?>" type="text/javascript"></script>
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
        <!-- Bootstrap -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/js/AdminLTE/app.js');?>" type="text/javascript"></script>
        <!--  scroll to top -->
        <script src="<?php echo base_url('assets/js/scrolltotop.js');?>" type="text/javascript"></script>
        
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




</html>


