<!DOCTYPE html>
<html>
<head>
	<title>ehuduma</title>
	    <!-- ============= Google Analytics============= -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132771817-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-132771817-1');
        </script>
    <!-- ============== end Google analytics ======= -->
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
        <!-- Font Family (Google font) -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">


        <!-- <script src="https://use.fontawesome.com/07b0ce5d10.js"></script> -->
        <style type="text/css">
          body {
              font-family: 'Roboto', sans-serif !important;
          }
            .sitecolor1 {
              color: #10C4EF;
            }
            .sitecolor1bg {
              background-color: #10C4EF;
            } 
            .sitecolor2 {
              color: #FFCF2A;
              /*color: #35404F; */
              /*color: #FD037E;*/
            }
            .sitecolor2bg {
              background-color: #FFCF2A;
              /*background-color: #FD037E;*/
            }
            .jobpan{
                position: absolute;
                top: 58%;
                /*bottom: 20%;*/
                width: 70%;
                padding: 1.2% 1.2% 1.2% 1.2%;
                margin-left: 15%;
                margin-right: 15%;
                margin-bottom: 100px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                /*border: 2px solid green;*/
            }

            .jobpan_sm{
                position: absolute;
                top: 30%;
                /*bottom: 20%;*/
                width: 96%;
                padding: 1.2% 1.2% 1.2% 1.2%;
                margin-left: 2%;
                margin-right: 2%;
                margin-bottom: 50px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                /*border: 2px solid green;*/
            }
            .toppan{
              color: #fff;
              width: 70%;
              margin-left: 15%;
              margin-right: 15%;
            }
            .in{
              border: 1px solid lightgray;
              font-size: 18px;
              height: 45px;
              /*padding-top: 15px;
              padding-bottom: 15px;*/
            }
            .in_s{
              border: 1px solid lightgray;
              font-size: 18px;
              height: 45px;
             /* padding-top: 15px;
              padding-bottom: 15px;*/
            }
            .find{
              border: 1px solid lightgray;
              font-size: 18px;
              height: 50px;
              border-radius: 15px !important;
              background-color: #fff;
              padding-left: 15px;
             /* padding-top: 15px;
              padding-bottom: 15px;*/
            }
            .in_f{
              border: 1px dotted lightgray;
              font-size: 18px;
              padding-top: 25px;
              padding-bottom: 15px;
              height: 80px;
            }
            .in_a{
              border: 1px solid lightgray;
              font-size: 18px;
            }
            .grp{
              padding-bottom: 5px;
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

        .find-freelancer-btn-lg:hover {
            color: #35404F; 
            border-radius: 25px;
            font-size: 18px; border: 2px solid #fff; 
        }

        .find-freelancer-btn-sm:hover {
            color: #35404F; 
            border-radius: 25px;
            font-size: 18px; border: 2px solid #fff; 
        }

        textarea {
          line-height: 26px !important;
        }


        </style>
          <!-- ================== ADSENSE============ -->
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-1391825667642067",
                enable_page_level_ads: true
              });
           </script>
         <!--  ================== END ADSENSE ======= -->

</head>
<body style="">
  <?php
     $services = modules::load('Profile')->get_where_custom_tb('services', 'status', "Active");
  ?>

<!-- -------------------- large device--------------------- -->
	<div   class="sitecolor1bg" style="height: 490px; padding-top: 2%;">
		<div class="toppan hidden-sm1 hidden-xs1"  >
        <div style="font-size: 34px; padding-bottom: 5%;">
          <!-- <a href="<?php echo base_url();?>" style="color: #fff;"><b >eHuduma</b></a> -->
          <a class1="navbar-brand" href="<?php echo base_url('Admin');?>">
              <img alt="Brand" src="<?php echo base_url('assets/img/brand_white.png');?>" width=150px  >
          </a>
        </div>
        <div>
          <!-- large device -->
          <div class="row hidden-sm hidden-xs" style="padding-bottom: 20px;">
            <form action="<?php echo base_url('Profile/freelancer2')?>" method="post" enctype="multipart/form-data">
            <div class="form-group col-md-8">
              <select id="subject" name="service" class="form-control col-md-8 find" required="required">
                  <option value="0" selected="selected" >Select your job/ project category </option>
                  <?php foreach ($services->result() as $row): ?>
                  <option value="<?php echo $row->id;?>"><?php echo $row->service;?></option>
                  <?php endforeach; ?>
              </select>
              </div>
              <div class="form-group col-md-4">
                <button type="submit" name="findBtn" value="ok" class="btn btn-lg sitecolor2bg find-freelancer-btn-lg" style="font-size: 18px; color: #35404F; border-radius: 15px;">&nbsp;&nbsp;<b>Find a Freelancer</b> &nbsp;&nbsp;</button>
              </div>
            </form>
          </div>
          <!-- end large device -->

          <!-- small device -->
          <div class="row hidden-md hidden-lg hidden-xl" style="padding-bottom: 20px;">
            <br>
            <form action="<?php echo base_url('Profile/freelancer2')?>" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="input-group">
                <select id="subject" name="service" class="form-control find" required="required">
                  <option value="0" selected="selected" >Find a freelancer </option>
                  <?php foreach ($services->result() as $row): ?>
                  <option value="<?php echo $row->id;?>"><?php echo $row->service;?></option>
                  <?php endforeach; ?>
                </select>
                <span class="input-group-btn">
                    <button type="submit" name="findBtn" value="ok" class="btn btn-lg sitecolor2bg find-freelancer-btn-sm" style="font-size: 18px; color: #35404F; border-radius: 15px;"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>
            </form>
          </div>
          <!-- end small device -->

        </div>
        <div style="font-size: 34px;" class="hidden-sm hidden-xs"><b>Tell us what you need done</b></div>
        <h4 class="hidden-sm hidden-xs">Contact skilled freelancers within minutes. View profiles, ratings, portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with their work.</h4>
    </div>
	</div>

  <div class="jobpan hidden-xs hidden-sm" style="background-color: #fff;">
    <?php echo $msg; ?>
    <form action="<?php echo base_url('Job/submitjob')?>" method="post" enctype="multipart/form-data">
     <div class="grp">
        <h4><b>Choose a name for your project</b></h4>
        <div class="form-group">
              <!-- <label for="body">Artical Heading</label> -->
            <input type="text" name="jobtitle" class="form-control in" id="heading" placeholder="Eg. Build me a website" required="">
        </div>
     </div>

     <div class="grp">
        <h4><b>Tell us more about your project</b></h4>
        <p style="font-size: 14px;">Start with a bit about yourself or your business, and include an overview of what you need done.</p>
        <div class="form-group">
            <!-- <label for="body">Artical Body</label> -->
            <textarea class="textarea1" name="description" rows="10" class="form-control in_a" required="" placeholder="Describe your job here" style="width: 100%; font-size: 18px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
     </div>
     
     <div class="grp">
        <h4><b>Attach a file (Optional)</b></h4>
        <div class="form-group">
              <!-- <label for="body">Artical Heading</label> -->
              <input type="file" name="filename" accept1=".gif, .jpg, .png .pdf .csv .xlsx .doc " class="form-control in_f" id="heading" placeholder="" required1="">
        </div>
     </div>

     <div class="grp">
        <h4><b>Categorise your job/ project</b></h4>
        <div class="form-group">
          <!-- <label for="subject"><?php echo $this->lang->line('msg_subject'); ?></label> -->
          <select id="subject" name="serviceid" class="form-control in_s" required="required">
              <option value="None" selected="selected" >Select your job/ project category </option>
              <?php foreach ($services->result() as $row): ?>
              <option value="<?php echo $row->id;?>"><?php echo $row->service;?></option>
              <?php endforeach; ?>
          </select>
        </div>
     </div>
     
     <div class="grp">
        <h4><b>What is your estimated budget?</b></h4>
        <div class="form-group">
          <!-- <label for="subject"><?php echo $this->lang->line('msg_subject'); ?></label> -->
          <select id="subject" name="budget" class="form-control in_s" required="required">
              <option value="Simple project (20,000 - 100,000 TZS)">Simple project (20,000 - 100,000 TZS)</option>
              <option value="Small project (100,000 - 700,000 TZS)">Small project (100,000 - 700,000 TZS)</option>
              <option value="Medium project (700,000 - 1,500,000 TZS)">Medium project (700,000 - 1,500,000 TZS)</option>
              <option value="Large project (1,500,000 - 3,500,000 TZS)">Large project (1,500,000 - 3,500,000 TZS)</option>
              <option value="Huge project (3,500,000 - 7,000,000 TZS)">Huge project (3,500,000 - 7,000,000 TZS)</option>
              <option value="Major project (7,000,000 +  TZS)">Major project (7,000,000 +  TZS)</option>
              <!-- <option value="Customize budget">Customize budget</option> -->
          </select>
        </div>
     </div>
    <div class="grp">
        <h4><b>What are the required skills?</b></h4>
        <p style="font-size: 14px;">Mention required skills for this project separated by comma (,).</p>
        <div class="form-group">
              <!-- <label for="body">Artical Heading</label> -->
            <input type="text" name="skills" class="form-control in" id="heading" placeholder="Eg. php, Java script, html, graphics, photoshop etc. " required1="">
        </div>
     </div>

     <div class="grp">
        <hr>
        <div class="form-group ">
          <button type="submit" name="jobBtn" value="ok" class="btn btn-info btn-lg pull-right" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;<b>Post my job/ project</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        </div>
     </div>

      <br><br><br>


      <div style="text-align: center; font-size: 12px; ">
        <hr>
        <p>
          <a href="<?php echo base_url('Home/ourPrivacy');?>">Privacy</a> | <a href="<?php echo base_url('Home/ourTerms');?>">Terms</a><br>
          <span>© Uwezomedia Limited 2018 - All Rights Reserved      Developer: Diio (+255-684-670-270 | +255-684-544-167)</span>
        </p>
      </div>
    </form>
    </div>
<!-- --------------------end large device----------------- -->




<!-- -------------------- small device-------------------- -->
  <div class="jobpan_sm hidden-md hidden-lg hidden-xl" style="background-color: #fff;">
    <div class="sitecolor1" style="font-size: 24px; text-align: center; padding-top: 10px;"><b>Tell us what you need done</b><hr></div>
    <?php echo $msg; ?>
    <form action="<?php echo base_url('Job/submitjob')?>" method="post" enctype="multipart/form-data">
     <div class="grp">
        <h4><b>Choose a name for your project</b></h4>
        <div class="form-group">
              <!-- <label for="body">Artical Heading</label> -->
            <input type="text" name="jobtitle" class="form-control in" id="heading" placeholder="Eg. Build me a website" required="">
        </div>
     </div>

     <div class="grp">
        <h4><b>Tell us more about your project</b></h4>
        <p style="font-size: 14px;">Start with a bit about yourself or your business, and include an overview of what you need done.</p>
        <div class="form-group">
            <!-- <label for="body">Artical Body</label> -->
            <textarea class="textarea1" name="description" rows="10" class="form-control in_a" required="" placeholder="Describe your job here" style="width: 100%; font-size: 18px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
     </div>
     
     <div class="grp">
        <h4><b>Attach a file (Optional)</b></h4>
        <div class="form-group">
              <!-- <label for="body">Artical Heading</label> -->
              <input type="file" name="filename" accept1=".gif, .jpg, .png .pdf .csv .xlsx .doc " class="form-control in_f" id="heading" placeholder="" required1="">
        </div>
     </div>

     <div class="grp">
        <h4><b>Categorise your job/ project</b></h4>
        <div class="form-group">
          <!-- <label for="subject"><?php echo $this->lang->line('msg_subject'); ?></label> -->
          <select id="subject" name="serviceid" class="form-control in_s" required="required">
              <option value="None" selected="selected" >Select your job/ project category </option>
              <?php foreach ($services->result() as $row): ?>
              <option value="<?php echo $row->id;?>"><?php echo $row->service;?></option>
              <?php endforeach; ?>
          </select>
        </div>
     </div>
     
     <div class="grp">
        <h4><b>What is your estimated budget?</b></h4>
        <div class="form-group">
          <!-- <label for="subject"><?php echo $this->lang->line('msg_subject'); ?></label> -->
          <select id="subject" name="budget" class="form-control in_s" required="required">
              <option value="Simple project (20,000 - 100,000 TZS)">Simple project (20,000 - 100,000 TZS)</option>
              <option value="Small project (100,000 - 700,000 TZS)">Small project (100,000 - 700,000 TZS)</option>
              <option value="Medium project (700,000 - 1,500,000 TZS)">Medium project (700,000 - 1,500,000 TZS)</option>
              <option value="Large project (1,500,000 - 3,500,000 TZS)">Large project (1,500,000 - 3,500,000 TZS)</option>
              <option value="Huge project (3,500,000 - 7,000,000 TZS)">Huge project (3,500,000 - 7,000,000 TZS)</option>
              <option value="Major project (7,000,000 +  TZS)">Major project (7,000,000 +  TZS)</option>
              <!-- <option value="Customize budget">Customize budget</option> -->
          </select>
        </div>
     </div>
    <div class="grp">
        <h4><b>What are the required skills?</b></h4>
        <p style="font-size: 14px;">Mention required skills for this project separated by comma (,).</p>
        <div class="form-group">
              <!-- <label for="body">Artical Heading</label> -->
            <input type="text" name="skills" class="form-control in" id="heading" placeholder="Eg. php, Java script, html, graphics, photoshop etc. " required1="">
        </div>
     </div>

     <div class="grp" >
        <hr>
        <div class="form-group" style="text-align: center;">
          <button type="submit" name="jobBtn" value="ok" class="btn btn-info btn-lg pull-right1" style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;<b>Post my job/ project</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        </div>
     </div>

      <br><br><br>


      <div style="text-align: center; font-size: 12px; ">
        <hr>
        <p>
          <a href="<?php echo base_url('Home/ourPrivacy');?>">Privacy</a> | <a href="<?php echo base_url('Home/ourTerms');?>">Terms</a><br>
          <span>© Uwezomedia Limited 2018 - All Rights Reserved      Developer: Diio (+255-684-670-270 | +255-684-544-167)</span>
        </p>
      </div>
    </form>
    </div>
<!-- --------------------end small device----------------- -->












	<!-- <div class="row" style="position: absolute; padding-bottom: 60px; text-align: center; font-size: 18px;">
		<div class="col-md-12">
			<hr>
			<p>
				<a href="<?php echo base_url('Home/ourPrivacy');?>">Privacy</a> | <a href="<?php echo base_url('Home/ourTerms');?>">Terms</a><br>
				<span>© Uwezomedia Limited 2018 - All Rights Reserved      Developer: Diio (+255-684-670-270 | +255-684-544-167)</span>
			</p>
		</div>
	</div> -->

</body>
</html>