<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabs.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabstyles.css');?>" />
<script src="<?php echo base_url('assets/js/modernizr.custom.js');?>"></script>
<!--  search inputs top -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php echo base_url('assets/js/myJs/profilesch.js');?>" type="text/javascript"></script> 
<style type="text/css">
  .myslider {
    padding-top: 10px;
    padding-left: 2%;
    padding-right: 2%;
  }

  .cardheader_sm {
       background: url("<?php echo base_url('assets/img/profilebg3.png');?>");
      /*background: url("../../img/profilebg3.jpg");*/
       background-size: cover;
       height: 80px;
    }

    .how-it-works-icon {
        background-color: #F5F5F5; 
        border-radius: 50%; 
        width: 30%;
    }

    .subscribe_in {
      border: 1px solid lightgray;
      border-radius: 15px !important;
      height: 45px;
      padding-left: 20px;
      padding-right: 20px;
      width: 100%;
      font-size: 18px;
    }

    .subscribe_btn {
      border-radius: 15px !important;
      height: 45px;
      padding-left: 20px;
      padding-right: 20px;
      font-size: 18px;
      color: #fff;
    }

    .subscribe_btn:hover {
      background-color: #1328a8;
      color: #fff;
    }

    .subscribe_email {
      width: 40%;
    }

    @media only screen and (max-width: 600px) {
      .subscribe_email {
        width: 100% !important;
      }
    }

</style>

<?php 
  //$popularres = modules::load('Job')->get_where_custom('status', "Open");
  //$newres = modules::load('Job')->get_where_custom('status', "Open");
  $popularres = modules::load('Job')->get('id');
  $newres = modules::load('Job')->get('id');
  $pricingres = modules::load('Profile')->Mdl_profile->get_tb('pricing', 'id');
?>

<!-- =================  SLIDING PROFILES ==================== -->

<!--  ==========================MARKET PLACE============== -->
<section class=" wow1 animated fadeInUp " style="padding: 40px 20px 20px 20px; background-color: #fff !important;">
<div style="text-align: center; font-size: 36px; padding-bottom: 25px;">
  <b>Explore the Marketplace<?php //echo $this->lang->line('msg_popular_profiles'); ?></b>
</div>
<div class="row">
  <?php
      $services = modules::load('Profile')->get_where_custom_tb('services', 'status', "Active");
  ?>

  <?php foreach ($services->result() as $serv): ?> 
  <?php  
    if ($serv->id==1) { $fa = "fas fa-basketball-ball"; } else if ($serv->id==2){ $fa = "fa fa-mobile"; }  else if ($serv->id==3){ $fa = "fa fa-copy"; }  else if ($serv->id==4){ $fa = "fa fa-folder-open"; }  else if ($serv->id==5){ $fa = "fa fa-microphone"; }  else if ($serv->id==6){ $fa = "fa fa-edit"; }  else if ($serv->id==7){ $fa = "fa fa-plus-circle"; }  else if ($serv->id==8){ $fa = "fa fa-laptop"; } else {$fa = "fa fa-folder-open";}
    if ($serv->id==1) { $mdi = "fas fa-basketball-ball"; } else if ($serv->id==2){ $mdi = "fa fa-mobile"; }  else if ($serv->id==3){ $mdi = "fa fa-copy"; }  else if ($serv->id==4){ $mdi = "fa fa-folder-open"; }  else if ($serv->id==5){ $mdi = "mdi mdi-google-translate"; }  else if ($serv->id==6){ $mdi = "mdi mdi-content-save-edit-outline"; }  else if ($serv->id==7){ $mdi = "mdi mdi-google-ads"; }  else if ($serv->id==8){ $mdi = "mdi mdi-folder-star-multiple-outline"; } else {$mdi = "fa fa-folder-open";}
  ?>    
  <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3" style="text-align: center; padding-bottom: 50px;">
    <a class="sitecolor2" href="<?php echo base_url('Profile/listprofiles/');?><?php echo $serv->service;?>"><i class="<?php echo $serv->icon;?> fa-5x"></i></a>
    <h4><a class1="sitecolor2" style1="color: gray;" href="<?php echo base_url('Profile/listprofiles/');?><?php echo $serv->service;?>"><?php echo $serv->service;?></a></h4>
  </div>
  <?php endforeach; ?>

</div>
<hr>
</section>
<!--  =======================end MARKETPLACE============= -->

 

<!--  ==========================Need work done?============== -->
<section class=" wow1 animated fadeInUp " style="padding: 20px 20px 40px 20px; background-color: #fff !important;">
<div style="text-align: center; font-size: 36px; padding-bottom: 15px;">
  <b>How we work?<?php //echo $this->lang->line('How_ehuduma_works'); ?></b>
</div>
<div class="row">
  <div class="col-md-4" style="text-align: center;">
    <a href="<?php echo base_url('Profile/listprofiles/all');?>" class="sitecolor1 btn how-it-works-icon" ><i class="mdi mdi-post fa-5x"></i></a>
    <!-- <img src="<?php //echo base_url('assets/img/service1.PNG');?>" class="avater" alt="service" style="width: 50%;" > -->
    <h2>Create a profile<?php //echo $this->lang->line('msg_post_a_job'); ?></h2>
    <p style="font-size: 18px;">
      Join Saka Afya Fitness Club by first ceating your account and completing your profile details. Choose account type (individual/ group), category and type of sport.
      <?php //echo $this->lang->line('msg_it_s_easy'); ?>
    </p>
  </div>
  <div class="col-md-4" style="text-align: center;">
    <a href="<?php echo base_url('Profile/listprofiles/all');?>" class="sitecolor1 btn how-it-works-icon" ><i class="mdi mdi-target-account fa-5x"></i></a>
    <!-- <img src="<?php //echo base_url('assets/img/service2.PNG');?>" class="avater" alt="service" style="width: 50%;" > -->
    <h2>Find sports people<?php //echo $this->lang->line('msg_choosing_freelancers'); ?></h2>
    <p style="font-size: 18px;">
      User our search tools to find sports people, groups or companies. Here you will get trainees, trainers, sponsors, gyms, physiotherapist & many more.
      <?php //echo $this->lang->line('msg_our_freelancers'); ?>
    </p>
  </div>
  <div class="col-md-4" style="text-align: center;">
    <a href="<?php echo base_url('Profile/payments');?>" class="sitecolor1 btn how-it-works-icon" ><i class="mdi mdi-contactless-payment-circle fa-5x"></i></a>
    <!-- <img src="<?php //echo base_url('assets/img/service3.PNG');?>" class="avater" alt="service" style="width: 50%;" > -->
    <h2><?php echo $this->lang->line('msg_pay_safely_title'); ?></h2>
    <p style="font-size: 18px;">
      <?php echo $this->lang->line('msg_pay_safely'); ?>
    </p>
  </div>
</div>
</section>
<!--  =======================end Need work done?============= -->




<!-- =======================OPEN SLIDER (Popular) ================ -->
<section class="myslider wow animated fadeInUp hidden-sm hidden-xs" style="padding-top: 20px; padding-bottom: 20px:">
<div style="text-align: center; font-size: 36px; margin-top: 20px; margin-bottom: 20px;">
  <b>Our Pricing List<?php //echo $this->lang->line('msg_popular_profiles'); ?></b>
</div>
<div class="row">
         <div class="col-md-12">
            <div class="carousel carousel-showmanymoveone slide" id="carousel-tilenav" data-interval="false">
               <div class="carousel-inner">

                  <div class="item active">

                  <?php $index = 0;?>
                    <?php foreach ($pricingres->result() as $row): ?>
                      <?php if (!($index > 7)) { ?>

                    <?php $pricing_url = 'Profile/payments'; ?>
                     <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="card hovercard " style="background-color: #fff; height: 290px;" >
                      <div class="cardheader">
                        <!-- <h4>MY PROFILE TITLE</h4> -->
                       </div>
                         <div class="avatar">
                           <a target="_blank" href="<?php echo base_url($pricing_url);?>">
                              <?php $imgUrl = 'assets/img/def2.png'; ?>
                               <img alt="" src="<?php echo base_url($imgUrl)?>">
                            </a>
                           </div>
                         <div class="info">
                             <div class="title">
                                  <a target1="_blank" class="sitecolor1" href="<?php echo base_url($pricing_url);?>">TZS <?php echo number_format($row->amount,0);?></a>
                              </div>
                              <!-- <div style="padding: 20px 20px 20px 20px;">
                                <button type="button" class="btn btn-sm  btn-success btn-outline pull-left1">Chat <i class="fa fa-comment"></i></button>
                                <button type="button" class="btn btn-sm  btn-danger btn-outline pull-right1">Comment</button>
                              </div> -->
                              <div class="desc"><?php echo $row->name?></div>
                              <div class="desc"><?php echo $row->period?> Days</div>

                             <!--  <div class="desc">(<?php echo $row->phone?> | <?php echo $row->altphone?>)</div> -->
                            </div>
                              <div class="bottom">
                                <a href="<?php echo base_url($pricing_url);?>" class="btn btn-lg  btn-info1 btn-outline pull-left1 sitecolor2bg" style="color: #fff;" >Pay now &nbsp;&nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                              <div>
                                <hr>
                              </div>
                       </div>
                     </div>
                    <?php 
                        if (($index == 3) ) {
                          # code...
                          echo '</div><div class="item">';
                        }
                     ?>
                     <?php } ?>
                     <?php  $index ++ ; ?>
                     <?php endforeach; ?>
                  </div>
                <!-- ============= all items ends here =========   -->
             </div> <!-- ============= end colourcel inner ============ -->
            </div >
             <div style="margin: 0 0 0 0 ;"> 
                  <a rel="nofollow" rel="noreferrer" class="left carousel-control" href="#carousel-tilenav" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                   <a rel="nofollow" rel="noreferrer" class="right carousel-control" href="#carousel-tilenav" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
              </div>
             </div>
          </div>
          <br><br>
</section>
<!-- =======================END OPEN SLIDER (Popular) ================ -->

</section>




<!-- xxxxxxxxxxxxxxxxxxxxxxxxxx SMALL DEVICE xxxxxxxxxxxxxxxxxxxxx -->
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<!-- =======================OPEN SLIDER (Popular) ================ -->
<section class="myslider wow animated fadeInUp hidden-xl hidden-lg hidden-md" style="padding-top: 20px;">
<div style="text-align: center; font-size: 36px; margin-top: 20px; margin-bottom: 20px;">
  <b>Our Pricing List<?php //echo $this->lang->line('msg_popular_profiles'); ?></b>
</div>
<div class="row">
         <div class="col-md-12">
            <div class="carousel carousel-showmanymoveone slide" id="carousel-tilenav3" data-interval="false">
               <div class="carousel-inner">

                  <div class="item active">

                  <?php $index = 0;?>
                    <?php foreach ($pricingres->result() as $row1): ?>
                      <?php if (!($index > 7)) { ?>

                     <?php $pricing_url = 'Profile/payments'; ?>
                     <div class="col-xs-12 col-sm-12 col-md-2">
                     <div class="card hovercard " style="background-color: #fff;  height1: 230px;" >
                      <div class="cardheader_sm">
                        <!-- <h4>MY PROFILE TITLE</h4> -->
                       </div>
                         <div class="avatar">
                           <a target="_blank" href="<?php echo base_url($pricing_url);?>">
                              <?php $imgUrl = 'assets/img/def2.png'; ?>
                               <img alt="" src="<?php echo base_url($imgUrl)?>">
                            </a>
                           </div>
                         <div class="info">
                             <div class="title">
                                  <a target1="_blank" class="sitecolor1" href="<?php echo base_url($pricing_url);?>">TZS <?php echo number_format($row1->amount,0);?></a>
                              </div>
                              <!-- <div style="padding: 20px 20px 20px 20px;">
                                <button type="button" class="btn btn-sm  btn-success btn-outline pull-left1">Chat <i class="fa fa-comment"></i></button>
                                <button type="button" class="btn btn-sm  btn-danger btn-outline pull-right1">Comment</button>
                              </div> -->
                              <div class="desc"><?php echo $row1->name?></div>
                              <div class="desc"><?php echo $row1->period?> Days</div>
                            </div>
                            <div class="bottom">
                                <a href="<?php echo base_url($pricing_url);?>" class="btn btn-lg  btn-info1 btn-outline pull-left1 sitecolor2bg" style="color: #fff;" >Pay now &nbsp;&nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                              <div>
                                <hr>
                              </div>
                       </div>
                     </div>
                    <?php 
                        if (($index == 0) | ($index == 1 )| ($index == 2 )| ($index == 3 )| ($index == 4 )| ($index == 5 )| ($index == 6 )) {
                          # code...
                          echo '</div><div class="item">';
                        }
                     ?>
                     <?php } ?>
                     <?php  $index ++ ; ?>
                     <?php endforeach; ?>
                  </div>
                <!-- ============= all items ends here =========   -->
      
             </div> <!-- ============= end colourcel inner ============ -->
            </div >
             <div style="margin: 0 0 0 0 ;"> 
                  <a rel="nofollow" rel="noreferrer" class="left carousel-control" href="#carousel-tilenav3" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                   <a rel="nofollow" rel="noreferrer" class="right carousel-control" href="#carousel-tilenav3" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
              </div>
             </div>
          </div>
</section>
<!-- =======================END OPEN SLIDER (Popular) ================ -->
    
</section>
<!-- xxxxxxxxxxxxxxxxxxxxxxxx END SMALL DEVICE xxxxxxxxxxxxxxxxxxx -->
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->




<!--  ==========================SUBSCRIBER============== -->
<section class=" wow1 animated fadeInUp sitecolor1bg" style="padding: 40px 20px 80px 20px; background-color: #fff !important;">
<div style="text-align: center; font-size: 36px; padding-bottom: 25px;">
  <b>Join Our Newsletter<?php //echo $this->lang->line('msg_popular_profiles'); ?></b>
</div>
<div style="text-align: center; padding-bottom: 20px; font-size: 16px;">
  <p>You will be receiving a notification any time we add a new blog post.</p>
</div>
<div style="text-align: center;" >
  <form class="form-inline" action="<?php echo base_url('Home/subscribe'); ?>"  method="post">
    <div class="form-group subscribe_email">
      <input type="email" name="email" class="form-control subscribe_in" id="email" placeholder="Enter your email address" required="">
    </div>
    <button type="submit" class="btn sitecolor2bg subscribe_btn" >Subscribe</button>
  </form>
  <b style="font-size: 16px; margin-top: 20px; color: <?php echo $color; ?>"><?php echo $subscribe_msg; ?></b>
</div>
<!-- <hr> -->
</section>
<!--  =======================end SUBSCRIBER============= -->










<!-- =============== scripts =============== -->
<script src="<?php echo base_url('assets/js/cbpFWTabs.js');?>"></script>
    <script>
      (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
          new CBPFWTabs( el );
        });

      })();
</script>