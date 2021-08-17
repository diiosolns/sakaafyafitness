<style type="text/css">
	:focus {
  outline: none;
}
.row {
  margin-right: 0;
  margin-left: 0;
}
/* 
    Sometimes the sub menus get too large for the page and prevent the menu from scrolling, limiting functionality
    A quick fix is to change .side-menu to 

    -> position:absolute
    
    and uncomment the code below.
    You also need to uncomment 
    
    -> <div class="absolute-wrapper"> </div> in the html file

    you also need to tweek the animation. Just uncomment the code in that section
    --------------------------------------------------------------------------------------------------------------------
    If you want to make it really neat i suggest you look into an alternative like http://areaaperta.com/nicescroll/
    This will allow the menu to say fixed on body scoll and scoll on the side bar if it get to large
*/
.absolute-wrapper{
    position: fixed;
    width: 300px;
    height: 100%;
    background-color: #f8f8f8;
    border-right: 1px solid #e7e7e7;
}

.side-menu {
  position: absolute;
  width: 300px;
  height: 100%;
  background-color: #f8f8f8;
  border-right: 1px solid #e7e7e7;
}
.side-menu .navbar {
  border: none;
}
.side-menu .navbar-header {
  width: 100%;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav .active a {
  background-color: transparent;
  margin-right: -1px;
  border-right: 5px solid #e7e7e7;
}
.side-menu .navbar-nav li {
  display: block;
  width: 100%;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav li a {
  padding: 15px;
}
.side-menu .navbar-nav li a .glyphicon {
  padding-right: 10px;
}
.side-menu #dropdown {
  border: 0;
  margin-bottom: 0;
  border-radius: 0;
  background-color: transparent;
  box-shadow: none;
}
.side-menu #dropdown .caret {
  float: right;
  margin: 9px 5px 0;
}
.side-menu #dropdown .indicator {
  float: right;
}
.side-menu #dropdown > a {
  border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body {
  padding: 0;
  background-color: #f3f3f3;
}
.side-menu #dropdown .panel-body .navbar-nav {
  width: 100%;
}
.side-menu #dropdown .panel-body .navbar-nav li {
  padding-left: 15px;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body .navbar-nav li:last-child {
  border-bottom: none;
}
.side-menu #dropdown .panel-body .panel > a {
  margin-left: -20px;
  padding-left: 35px;
}
.side-menu #dropdown .panel-body .panel-body {
  margin-left: -15px;
}
.side-menu #dropdown .panel-body .panel-body li {
  padding-left: 30px;
}
.side-menu #dropdown .panel-body .panel-body li:last-child {
  border-bottom: 1px solid #e7e7e7;
}
.side-menu #search-trigger {
  background-color: #f3f3f3;
  border: 0;
  border-radius: 0;
  position: absolute;
  top: 0;
  right: 0;
  padding: 15px 18px;
}
.side-menu .brand-name-wrapper {
  min-height: 50px;
}
.side-menu .brand-name-wrapper .navbar-brand {
  display: block;
}
.side-menu #search {
  position: relative;
  z-index: 1000;
}
.side-menu #search .panel-body {
  padding: 0;
}
.side-menu #search .panel-body .navbar-form {
  padding: 0;
  padding-right: 50px;
  width: 100%;
  margin: 0;
  position: relative;
  border-top: 1px solid #e7e7e7;
}
.side-menu #search .panel-body .navbar-form .form-group {
  width: 100%;
  position: relative;
}
.side-menu #search .panel-body .navbar-form input {
  border: 0;
  border-radius: 0;
  box-shadow: none;
  width: 100%;
  height: 50px;
}
.side-menu #search .panel-body .navbar-form .btn {
  position: absolute;
  right: 0;
  top: 0;
  border: 0;
  border-radius: 0;
  background-color: #f3f3f3;
  padding: 15px 18px;
}
/* Main body section */
.side-body {
  margin-left: 310px;
}
/* small screen */
@media (max-width: 768px) {
  .side-menu {
    position: relative;
    width: 100%;
    height: 0;
    border-right: 0;
    border-bottom: 1px solid #e7e7e7;
  }
  .side-menu .brand-name-wrapper .navbar-brand {
    display: inline-block;
  }
  /* Slide in animation */
  @-moz-keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @-webkit-keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @-moz-keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  @-webkit-keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  @keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  /* Slide side menu*/
  /* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
  .side-menu-container > .navbar-nav.slide-in {
    -moz-animation: slidein 300ms forwards;
    -o-animation: slidein 300ms forwards;
    -webkit-animation: slidein 300ms forwards;
    animation: slidein 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  .side-menu-container > .navbar-nav {
    /* Add position:absolute for scrollable menu -> see top comment */
    position: fixed;
    left: -300px;
    width: 300px;
    top: 43px;
    height: 100%;
    border-right: 1px solid #e7e7e7;
    background-color: #f8f8f8;
    -moz-animation: slideout 300ms forwards;
    -o-animation: slideout 300ms forwards;
    -webkit-animation: slideout 300ms forwards;
    animation: slideout 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  /* Uncomment for scrollable menu -> see top comment */
  /*.absolute-wrapper{
        width:285px;
        -moz-animation: slideout 300ms forwards;
        -o-animation: slideout 300ms forwards;
        -webkit-animation: slideout 300ms forwards;
        animation: slideout 300ms forwards;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }*/
  @-moz-keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @-webkit-keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @-moz-keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  @-webkit-keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  @keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  /* Slide side body*/
  .side-body {
    margin-left: 5px;
    margin-top: 70px;
    position: relative;
    -moz-animation: bodyslideout 300ms forwards;
    -o-animation: bodyslideout 300ms forwards;
    -webkit-animation: bodyslideout 300ms forwards;
    animation: bodyslideout 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  .body-slide-in {
    -moz-animation: bodyslidein 300ms forwards;
    -o-animation: bodyslidein 300ms forwards;
    -webkit-animation: bodyslidein 300ms forwards;
    animation: bodyslidein 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  /* Hamburger */
  .navbar-toggle {
    border: 0;
    float: left;
    padding: 18px;
    margin: 0;
    border-radius: 0;
    background-color: #f3f3f3;
  }
  /* Search */
  #search .panel-body .navbar-form {
    border-bottom: 0;
  }
  #search .panel-body .navbar-form .form-group {
    margin: 0;
  }
  .navbar-header {
    /* this is probably redundant */
    position: fixed;
    z-index: 3;
    background-color: #f8f8f8;
  }
  /* Dropdown tweek */
  #dropdown .panel-body .navbar-nav {
    margin: 0;
  }
}
</style>




<div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
    <div class="side-menu">
    
    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">eHuduma</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="<?php echo base_url('#');?>">
                    <b style="color: blue;"><?php echo $this->lang->line('msg_hi'); ?>, <?php echo $this->session->userdata('user_name');?></b>
                    <br>
                    <!-- <b>Position: <?php echo $this->session->userdata('user_role');?></b> -->
                    <!-- <small>Welcome.!</small> -->
                </a>
            </div>

            <!-- Search -->
            <!-- <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                <span class="glyphicon glyphicon-search"></span>
            </a> -->

            <!-- Search body -->
           <!--  <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                    </form>
                </div>
            </div> -->
        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">

            <!-- <li class="active"><a href="<?php //echo base_url('Home/logout');?>"><span class="fa fa-logout"></span> Sign Out</a></li> -->
            <li class="active"><a href="<?php echo base_url('Admin');?>"><span class="fa fa-dashboard"></span> <?php echo $this->lang->line('msg_dashboard'); ?></a></li>
            <li><a href="<?php echo base_url('Profile/createProfile');?>"><span class="fa fa-folder-open"></span> <?php echo $this->lang->line('msg_new_profile'); ?></a></li>

            <!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1">
                    <span class="glyphicon glyphicon-user"></span>  <?php echo $this->lang->line('msg_my_profile'); ?> <span class="caret"></span>
                </a>
                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url('Profile/managemyProfiles');?>"> <?php echo $this->lang->line('msg_manage_my_profile'); ?></a></li>
                            <!-- <li><a href="<?php //echo base_url('#');?>">Modify Profile</a></li> -->
                        </ul>
                    </div>
                </div>
            </li>

            <!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1b">
                    <span class="fa fa-tasks"></span> <?php echo $this->lang->line('msg_my_appointments'); ?>  <span class="caret"></span>
                </a>
                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl1b" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url('Appointment/availableAppointments');?>"><?php echo $this->lang->line('msg_available_appointments'); ?></a></li>
                            <li><a href="<?php echo base_url('Appointment/profileTimetable');?>"><?php echo $this->lang->line('msg_my_timetable'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </li>

             <!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-2">
                    <span class="glyphicon glyphicon-user"></span> <?php echo $this->lang->line('msg_my_account'); ?> <span class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url('Users/changePassword');?>"><?php echo $this->lang->line('msg_account_details'); ?></a></li>
                            <li><a href="<?php echo base_url('Users/changePassword');?>"><?php echo $this->lang->line('msg_change_password'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </li>

            <li><a href="<?php echo base_url('Chat/myChats');?>"><span class="fa fa-comment success"></span> <?php echo $this->lang->line('msg_chats'); ?></a></li>

            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-c">
                    <span class="fa fa-comments"></span> <?php echo $this->lang->line('msg_comments'); ?> <span class="caret"></span>
                </a>
                <!-- Dropdown level 1 -->
                <div id="dropdown-c" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url('Chat/manageComments');?>"><?php echo $this->lang->line('msg_manage_comments'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </li>



             <!-- Dropdown-->
            <!-- <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-3">
                    <span class="fa fa-users"></span> <?php //echo $this->lang->line('msg_user_profiles'); ?> <span class="caret"></span>
                </a>
                <div id="dropdown-3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php //echo base_url('Profile/createProfile');?>"><?php //echo $this->lang->line('msg_create_new_profile'); ?></a></li>
                            <li><a href="<?php //echo base_url('Profile/manageProfiles');?>"><?php //echo $this->lang->line('msg_manage_profiles'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </li> -->

             <!-- Dropdown-->
            <!-- <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-5">
                    <span class="fa fa-users"></span> <?php //echo $this->lang->line('msg_user_accounts'); ?> <span class="caret"></span>
                </a>
                <div id="dropdown-5" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php //echo base_url('Users/manageUsers');?>"><?php //echo $this->lang->line('msg_manage_accounts'); ?></a></li>
                            <li><a href="<?php //echo base_url('Users/addUser');?>"><?php //echo $this->lang->line('msg_add_user'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </li> -->

             <!-- Dropdown-->
            <!-- <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-4">
                    <span class="fa fa-clipboard"></span> <?php //echo $this->lang->line('msg_blog_and_posts'); ?> <span class="caret"></span>
                </a>
                <div id="dropdown-4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php //echo base_url('Artical/newArtical');?>"><?php //echo $this->lang->line('msg_create_new_blog'); ?></a></li>
                            <li><a href="<?php //echo base_url('Artical/newNews');?>"><?php //echo $this->lang->line('msg_record_post'); ?></a></li>
                            <li><a href="<?php //echo base_url('Artical/manageArticals');?>"><?php //echo $this->lang->line('msg_manage_blogs'); ?></a></li>
                            <li><a href="<?php //echo base_url('Artical/manageNews');?>"><?php //echo $this->lang->line('msg_manage_posts'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </li> -->











            <!-- Dropdown-->
           <!--  <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1">
                    <span class="glyphicon glyphicon-user"></span> Sub Level <span class="caret"></span>
                </a>

               				Dropdown level 1 
                <div id="dropdown-lvl1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url('#');?>">Link</a></li>
                            <li><a href="<?php echo base_url('#');?>">Link</a></li>
                            <li><a href="<?php echo base_url('#');?>">Link</a></li>

                           				Dropdown level 2 
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-lvl2">
                                    <span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
                                </a>
                                <div id="dropdown-lvl2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url('#');?>">Link</a></li>
                                            <li><a href="<?php echo base_url('#');?>">Link</a></li>
                                            <li><a href="<?php echo base_url('#');?>">Link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li> -->

             <li><a href="<?php //echo base_url('#');?>"><span class="fa fa-gear1"></span> </a></li>

            <!-- <li><a href="<?php //echo base_url('#');?>"><span class="fa fa-gear"></span> Settings</a></li> -->

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
    
    </div>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="side-body">
      
           <!-- ============== MIDDLE PANNEL ============ -->
			 <?php 
			     $this->load->view($mpanel_m.'/'.$mpanel_f);
			  ?> 
			<!-- =============== END MIDDLE PANNEL ============ -->


        </div>



    </div>
</div>




<script type="text/javascript">
	$(function () {
    $('.navbar-toggle').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').toggleClass('slide-in');
        
    });
   
   // Remove menu for searching
   $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').removeClass('slide-in');

    });
});
</script>