<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="author" content="sumit kumar"> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Huduma</title> 
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
        <!-- home page slider and footer -->
        <link href="<?php echo base_url('assets/css/diiocss/home.css');?>" rel="stylesheet" type="text/css" />
         <!-- animate -->
        <link href="<?php echo base_url('assets/css/diiocss/animate.css');?>" rel="stylesheet" type="text/css" />


        <!-- <script src="https://use.fontawesome.com/07b0ce5d10.js"></script> -->
        <style type="text/css">
          .sitecolor1 {
            color: #10C4EF;
          }

          .sitecolor1bg {
            background-color: #10C4EF;
          } 

           .sitecolor2 {
            color: #FD037E;
          }

          .sitecolor2bg {
            background-color: #FD037E;
          } 

           .mypadding {
              padding: 1% 4% 0 4%;
           }

           .card.hovercard .cardheader {
                 background: url("<?php echo base_url('assets/img/profilebg2.jpg');?>");
                /*background: url("../../img/profilebg3.jpg");*/
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

          /*===================== LOADER ===============*/
            /* Center the loader */
            #loader {
              position: absolute;
              left: 65%;
              top: 20%;
              z-index: 1;
              width: 100px;
              height: 100px;
              margin: -75px 0 0 -75px;
              border: 5px solid #f3f3f3;
              border-radius: 50%;
              border-top: 5px solid #10C4EF;
              border-bottom:  5px solid #10C4EF;
              width: 40px;
              height: 40px;
              -webkit-animation: spin 0.8s linear infinite;
              animation: spin 0.8s linear infinite;
            }

            @-webkit-keyframes spin {
              0% { -webkit-transform: rotate(0deg); }
              100% { -webkit-transform: rotate(360deg); }
            }

            @keyframes spin {
              0% { transform: rotate(0deg); }
              100% { transform: rotate(360deg); }
            }

            /* Add animation to "page content" */
            .animate-bottom {
              position: relative;
              -webkit-animation-name: animatebottom;
              -webkit-animation-duration: 1s;
              animation-name: animatebottom;
              animation-duration: 1s
            }

            @-webkit-keyframes animatebottom {
              from { bottom:-100px; opacity:0 } 
              to { bottom:0px; opacity:1 }
            }

            @keyframes animatebottom { 
              from{ bottom:-100px; opacity:0 } 
              to{ bottom:0; opacity:1 }
            }

            #myDiv {
              display: none;
              /*text-align: center;*/
            }
            /*======================END LOADER ===========*/



          </style>
          <!-- =================== END MORE==================== -->

          <!-- ================== ADSENSE============ -->
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-9403084860404709",
              enable_page_level_ads: true
            });
          </script>
          <!--  ================== END ADSENSE ======= -->

    </head>

<body onload="myFunction()" style="background-color: #F5F5F5;" >
    
<!-- <div id="loader" ></div> -->
<!-- ============= PAGE MIDDLE CONTENT ========== -->
<div style1="display:none;" id="myDiv1" class="animate-bottom">
  <?php 
     $this->load->view($middle_m.'/'.$middle_f);
   ?>        
</div>
<!-- ============= END MIDDLE CONTENTS =========== -->



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

        <!-- CK Editor -->
        <script src="<?php echo base_url('assets/js/plugins/ckeditor/ckeditor.js');?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>
        <!--  search inputs top -->
        <!-- <script src="<?php //echo base_url('assets/js/myJs/profilesch.js');?>" type="text/javascript"></script> -->
        <!-- submit a form without refresh  -->
        <script type="text/javascript">
            $("#signup_btn").click(function (e) {
                  e.preventDefault();
                  // code
                }
        </script>

        <!-- Popover -->
        <script>

          $(document).ready(function(){
              $('[data-toggle="popover"]').popover(); 
          });
        </script>

        <script>
            function SignIn(){
              //Login form
            $('form.jsloginform').on('submit', function(form){
                  form.preventDefault();
                  var url = '<?php echo base_url('Home/login')?>';
                  var username = $('#login_username').val();
                  var password = $('#login_password').val();
                  if (username != '' && password != '') {
                    $.ajax({
                      url: url,
                      method: "POST",
                      data: {username:username, password:password},
                      success: function(data){
                        if(data=='go'){
                          $('#loginModal').hide();
                          window.location="<?php echo base_url('Admin/login')?>";
                        }else{
                          $('div.errordiv').html(data);
                          $('div.errordiv').show();
                        }
                      }
                    });
                    }else{
                      alert('Both username and password are required');
                    }
              });
            };

            //End of Login form scripts

             function SignUp(){
              //Login form
            $('form.jssignupform').on('submit', function(form){
                  form.preventDefault();
                  var url = '<?php echo base_url('Home/login')?>';
                  
                    $.ajax({
                      url: url,
                      method: "POST",
                      success: function(data){
                        if(data=='go'){
                          $('#loginModal').hide();
                          window.location="<?php echo base_url('Admin/login')?>";
                        }else{
                          $('div.errordiv').html(data);
                          $('div.errordiv').show();
                        }
                      }
                    });
                    

              });
            };

            //End of signup form scripts
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

        

</body>
</html>






<!-- ===================== MODALS ==================== -->
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx- -->
<style type="text/css">
    
.modal-content {
    -webkit-border-radius: 0;
    -webkit-background-clip: padding-box;
    -moz-border-radius: 0;
    -moz-background-clip: padding;
    border-radius: 6px;
    background-clip: padding-box;
    -webkit-box-shadow: 0 0 40px rgba(0,0,0,.5);
    -moz-box-shadow: 0 0 40px rgba(0,0,0,.5);
    box-shadow: 0 0 40px rgba(0,0,0,.5);
    color: #000;
    background-color: #fff;
    border: rgba(0,0,0,0);
}
.modal-message .modal-dialog {
    width: 300px;
}
.modal-message .modal-body, .modal-message .modal-footer, .modal-message .modal-header, .modal-message .modal-title {
    background: 0 0;
    border: none;
    margin: 0;
    padding: 0 30px;
    text-align: center!important;
}

.modal-message .modal-title {
    font-size: 17px;
    color: #737373;
    margin-bottom: 3px;
}

.modal-message .modal-body {
    color: #737373;
}

.modal-message .modal-header {
    color: #fff;
    margin-bottom: 10px;
    padding: 15px 0 8px;
}
.modal-message .modal-header .fa, 
.modal-message .modal-header 
.glyphicon, .modal-message 
.modal-header .typcn, .modal-message .modal-header .wi {
    font-size: 30px;
}

.modal-message .modal-footer {
    margin: 25px 0 20px;
    padding-bottom: 10px;
}

.modal-backdrop.in {
    zoom: 1;
    filter: alpha(opacity=75);
    -webkit-opacity: .75;
    -moz-opacity: .75;
    opacity: .75;
}
.modal-backdrop {
    background-color: #fff;
}
.modal-message.modal-success .modal-header {
    color: #53a93f;
    border-bottom: 3px solid #a0d468;
}

.modal-message.modal-info .modal-header {
    color: #57b5e3;
    border-bottom: 3px solid #57b5e3;
}

.modal-message.modal-danger .modal-header {
    color: #d73d32;
    border-bottom: 3px solid #e46f61;
}

.modal-message.modal-warning .modal-header {
    color: #f4b400;
    border-bottom: 3px solid #ffce55;
}

</style>


    <!-- ========== animate script========= -->
    <script type="text/javascript">
      new WOW().init();
    </script>

   <!--  =================== LOADER =============== -->
    <script>
      var myVar;

      function myFunction() {
          myVar = setTimeout(showPage, 2000);
      }

      function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
      }
    </script>
    <!-- ================== END LOADER ============ -->