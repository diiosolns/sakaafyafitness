<style type="text/css">

.fullwidth {
    margin-left: 0;
    margin-right: 0; 
    width: 100%;
}

/*====================== MIDDLE PROFILE CARD ============*/
	.twPc-div {
	    background: #fff none repeat scroll 0 0;
	    border: 1px solid #e1e8ed;
	    border-radius: 6px;
	    height: auto;
	    max-width: 100%; // orginal twitter width: 290px;
	}
	.twPc-bg {
	     background: url("<?php echo base_url('assets/img/profilebg.jpg');?>");
	    background-position: 0 50%;
	    background-size: 100% auto;
	    border-bottom: 1px solid #e1e8ed;
	    border-radius: 4px 4px 0 0;
	    height: 95px;
	    width: 100%;
	}
	.twPc-block {
	    display: block !important;
	}
	.twPc-button {
	    margin: -35px -10px 0;
	    text-align: right;
	    width: 100%;
	}
	.twPc-avatarLink {
	    background-color: #fff;
	    border-radius: 6px;
	    display: inline-block !important;
	    float: left;
	    margin: -30px 5px 0 8px;
	    max-width: 100%;
	    padding: 1px;
	    vertical-align: bottom;
	}
	.twPc-avatarImg {
	    border: 2px solid #fff;
	    border-radius: 7px;
	    box-sizing: border-box;
	    color: #fff;
	    height: 72px;
	    width: 72px;
	}
	.twPc-divUser {
	    margin: 5px 0 0;
	}
	.twPc-divName {
	    font-size: 18px;
	    font-weight: 700;
	    line-height: 21px;
	}
	.twPc-divName a {
	    color: inherit !important;
	}
	.twPc-divStats {
	    margin-left: 11px;
	    padding: 10px 0;
	}
	.twPc-Arrange {
	    box-sizing: border-box;
	    display: table;
	    margin: 0;
	    min-width: 100%;
	    padding: 0;
	    table-layout: auto;
	}
	ul.twPc-Arrange {
	    list-style: outside none none;
	    margin: 0;
	    padding: 0;
	}
	.twPc-ArrangeSizeFit {
	    display: table-cell;
	    padding: 0;
	    vertical-align: top;
	}
	.twPc-ArrangeSizeFit a:hover {
	    text-decoration: none;
	}
	.twPc-StatValue {
	    display: block;
	    font-size: 18px;
	    font-weight: 500;
	    transition: color 0.15s ease-in-out 0s;
	}
	.twPc-StatLabel {
	    color: #8899a6;
	    font-size: 10px;
	    letter-spacing: 0.02em;
	    overflow: hidden;
	    text-transform: uppercase;
	    transition: color 0.15s ease-in-out 0s;
	}
/*====================== END CARD =======================*/


</style>

<!-- <?php echo $this->lang->line('msg_prf_'); ?> -->
<div class="container fullwidth partialwidth1">
	
<div class="row" style="padding-top: 1%;">
<!-- <div class="col-md-12"><br></div> -->
	<div class="  col-md-3 hidden-sm hidden-xs" style="padding-right: 0;">
		<div class="list-group">
		<?php $profileUrl = 'Profile/viewProfiles/'.$sideprofileres->row()->id.'/'.$sideprofileres->row()->type.'/'.$sideprofileres->row()->category.'/'.$sideprofileres->row()->subcategory; ?>
		<a href="<?php echo base_url($profileUrl);?>" class="list-group-item list-group-item-action flex-column align-items-start <?php if($this->session->userdata('selectedid') == $sideprofileres->row()->id) {echo 'active';}?>">
		    <div class="row">
		    	<?php $imgUrl = 'assets/img/profile/0/'.$sideprofileres->row()->img; ?>
			    <div class="col-md-3">
			    	 <img alt="" src="<?php echo base_url($imgUrl)?>" class="img-circle img-thumbnail">
			    </div>
			    <div class="col-md-9">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1"><?php echo $sideprofileres->row()->profilename; ;?></h5>
				    </div>
			    	<!-- <br> -->
				      <?php 
				      	if (modules::load('Users')->get_where_custom('id',$sideprofileres->row()->userid)->row()->online == 1) {
				      		echo ' <span class="label label-success label-pill pull-right">'.$this->lang->line('msg_prf_online').'</span>';
				      	} else {
				      		echo ' <span class="label label-danger label-pill pull-right">'.$this->lang->line('msg_prf_offline').'</span>';
				      	}
				      	
				      ?>
				      <small><?php echo $sideprofileres->row()->category;?></small>
			    </div>
			</div>
		  </a>

		<?php foreach ($sideprofileres->result() as $row): ?>
		<?php if(!($row->id == $sideprofileres->row()->id)) {?>
			<?php $profileUrl = 'Profile/viewProfiles/'.$row->id.'/'.$sideprofileres->row()->type.'/'.$sideprofileres->row()->category.'/'.$sideprofileres->row()->subcategory; ?>
		  <a href="<?php echo base_url($profileUrl);?>" class="list-group-item list-group-item-action flex-column align-items-start <?php if($this->session->userdata('selectedid') == $row->id) {echo 'active';}?>">
			<div class="row">
			    <?php $imgUrl = 'assets/img/profile/0/'.$row->img; ?>
			    <div class="col-md-3">
			    	 <img alt="" src="<?php echo base_url($imgUrl)?>" class="img-circle img-thumbnail">
			    </div>
			    <div class="col-md-9">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1"><?php echo $row->profilename;?> </h5>
				   
			    	</div>
				      <?php 
				      	if (modules::load('Users')->get_where_custom('id',$row->userid)->row()->online == 1) {
				      		echo ' <span class="label label-success label-pill pull-right">Online</span>';
				      	} else {
				      		echo ' <span class="label label-danger label-pill pull-right">Offline</span>';
				      	}
				      	
				      ?>
				      <small><?php echo $row->category;?></small>
				    
			    	<!-- <p class="mb-1">Click to view my profile details now. Thank you and welcome.</p> -->
			    	<!-- <small>+255-xxxxxxxxx</small> -->
			    </div>
			</div>
		  </a>
		  <?php }?> <!-- ===end if === -->
		  <?php endforeach; ?>


		  

		  <!-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		    <div class="row">
			    <div class="col-md-3">
			    	 <img alt="" src="<?php echo base_url('assets/img/profile/0/def.PNG')?>" class="img-circle img-thumbnail">
			    </div>
			    <div class="col-md-9">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1">List group item heading &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="label label-success label-pill pull-right">Online</span></h5>
				      <small>3 days ago</small>
				    </div>
			    	<p class="mb-1">Click to view my profile details now. Thank you and welcome.</p>
			    	<small>+255-xxxxxxxxx</small>
			    </div>
			</div>
		  </a> -->

		 <!--  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		   <div class="row">
			    <div class="col-md-3">
			    	 <img alt="" src="<?php echo base_url('assets/img/profile/0/def.PNG')?>" class="img-circle img-thumbnail">
			    </div>
			    <div class="col-md-9">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1">List group item heading &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="label label-success label-pill pull-right">Online</span></h5>
				      <small>3 days ago</small>
				    </div>
			    	<p class="mb-1">Click to view my profile details now. Thank you and welcome.</p>
			    	<small>+255-xxxxxxxxx</small>
			    </div>
			</div>
		  </a> -->

		</div>
	</div>


	<!-- ============= show customer profile here ============ -->
	<div class="col-md-9 " style1="padding-left: 5px;">
	<div class="row">
		<div class="col-md-12">
			
				<div class="twPc-div" >

				    <a class="twPc-bg twPc-block " style="padding-left: 20px; padding-top: 20px; font-size: 22px; background-color: #EFEEEF; color1: #fff; text-align: center;"><b><?php echo $profilename;?></b></a>

					<div>
						<div class="twPc-button">
				            <!-- Chat Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
				            <!--  <button type="button" name="chatBtn" value="<?php echo $id;?>" class="btn btn-sm  btn-success btn-outline pull-left1" data-placement="left"  data-toggle="popover" title="Chat Me" data-content="<form><input type='text'/></form>">Chat Me<i class="fa fa-comment"></i></button> -->
			                	<!-- <button type="button" name="commentBtn" value="<?php echo $id;?>" class="btn btn-sm  btn-info btn-outline pull-right1" data-placement="left" data-toggle="popover" title="Leave a Comment" data-content="And here's some amazing content. It's very engaging. Right?">Comment</button> -->
		                    <!-- <button type="button" name="chBtn" value="<?php echo $id;?>" class="btn btn-sm  btn-success btn-outline pull-left1 chat" data-trigger1="focus"><?php echo $this->lang->line('msg_prf_chat'); ?><i class="fa fa-comment"></i></button> -->
		                    <button type="button" name="ctBtn" value="<?php echo $id;?>" class="btn btn-lg  btn-info btn-outline pull-right1 comment" data-trigger1="focus" style="border-radius: 50px;" ><?php //echo $this->lang->line('msg_prf_comment'); ?><i class="fa fa-comment"></i></button>
		                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				            <!-- Chat Button -->   
						</div>
						<?php $imgUrl = 'assets/img/profile/0/'.$img; ?>
						<a title="<?php echo $profilename;?>" href="#" data-toggle="modal" data-target="#modal-profile" class="twPc-avatarLink">
							<img alt="Profile" src="<?php echo base_url($imgUrl)?>" class="twPc-avatarImg" >
						</a>

						<div class="twPc-divUser">
							<div class="twPc-divName">
								<a href="#"><?php echo modules::load('Users')->get_where_custom('id',$userid)->row()->name;?></a>
							</div>
							<span>
								<!-- <a href="#"><small><i><?php echo $type.'->'.$category.'->'.$subcategory;?></i></small></a> -->

								<a href="#"><small><i><?php if(!($type == "NA")) { echo $type; }?> <?php if(!($category ==  "NA")) { echo " ->> "; echo $category;}?>   <?php if(!($subcategory == "N/A")) {  echo " ->> "; echo $subcategory; }?> </i></small></a>
							</span>
						</div>

            		<div style="padding: 2px 10% 2px 10%;"> <?php echo $msg;?> </div>

						<div style="padding: 10px 20px 10px 20px; text-align: justify;">
							<h4><b><?php echo $this->lang->line('msg_prf_desc'); ?> : </b></h4>
							<p style="font-size: 16px;">
								<?php echo $description;?>
							</p>
						</div>
						<div style="padding: 10px 20px 10px 20px;">
							<h4><b><?php echo $this->lang->line('msg_prf_location'); ?> : </b></h4>
							<ul  style="font-size: 16px;">
								<li><?php echo $phyaddress;?></li>
							</ul>
						</div>
						<div style="padding: 10px 20px 10px 20px;">
							<h4><b><?php echo $this->lang->line('msg_prf_contacts'); ?> : </b></h4>
							<ul  style="font-size: 16px;">
								<li><i><?php echo $this->lang->line('msg_prf_phone'); ?>:</i> <?php echo $phone;?> | <?php echo $altphone;?></li>
								<LI><i><?php echo $this->lang->line('msg_prf_email'); ?>:</i> <?php echo $email;?></LI>
							</ul> 
						</div>

						<?php
							$timetb = modules::load('Profile')->get_where_custom_tb('timetable', 'profileid', $id);
						?>

						
						<!-- ==================== AVAILABILITY  ==================== -->
						<div style="padding: 5px 20px 5px 20px;">
							<h3 class="sitecolor1"><b><?php echo $this->lang->line('msg_prf_avail'); ?></b></h3>
							<div class="row">
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6 sitecolor1bg1" style="background-color: #F5F5F5; text-align: center; color: gray; border-radius1: 20px; border-right: 2px solid #10C4EF; border-bottom: 2px solid #10C4EF; ">
									<b style="font-size: 18px;"><?php echo $this->lang->line('msg_mon'); ?> </b>
									<h5><b><?php echo $timetb->row()->monday;?> (Hrs)</b></h5>
								</div>

								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6 sitecolor1bg1" style="background-color: #F5F5F5; text-align: center; color: gray; border-radius1: 20px; border-right: 2px solid #10C4EF; border-bottom: 2px solid #10C4EF; ">
									<b style="font-size: 18px;"><?php echo $this->lang->line('msg_tues'); ?> </b>
									<h5><b><?php echo $timetb->row()->tuesday;?> (Hrs)</b></h5>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6 sitecolor1bg1" style="background-color: #F5F5F5; text-align: center; color: gray; border-radius1: 20px; border-right: 2px solid #10C4EF; border-bottom: 2px solid #10C4EF; ">
									<b style="font-size: 18px;"><?php echo $this->lang->line('msg_wedness'); ?> </b>
									<h5><b><?php echo $timetb->row()->wednessday;?> (Hrs)</b></h5>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6 sitecolor1bg1" style="background-color: #F5F5F5; text-align: center; color: gray; border-radius1: 20px; border-right: 2px solid #10C4EF; border-bottom: 2px solid #10C4EF; ">
									<b style="font-size: 18px;"><?php echo $this->lang->line('msg_thurs'); ?> </b>
									<h5><b><?php echo $timetb->row()->thursday;?> (Hrs)</b></h5>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6 sitecolor1bg1" style="background-color: #F5F5F5; text-align: center; color: gray; border-radius1: 20px; border-right: 2px solid #10C4EF; border-bottom: 2px solid #10C4EF; ">
									<b style="font-size: 18px;"><?php echo $this->lang->line('msg_fri'); ?> </b>
									<h5><b><?php echo $timetb->row()->friday;?> (Hrs)</b></h5>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6 sitecolor1bg1" style="background-color: #F5F5F5; text-align: center; color: gray; border-radius1: 20px; border-right: 2px solid #10C4EF; border-bottom: 2px solid #10C4EF; ">
									<b style="font-size: 18px;"><?php echo $this->lang->line('msg_satur'); ?> </b>
									<h5><b><?php echo $timetb->row()->saturday;?> (Hrs)</b></h5>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6 sitecolor1bg1" style="background-color: #F5F5F5; text-align: center; color: gray; border-radius1: 20px; border-right: 2px solid #10C4EF; border-bottom: 2px solid #10C4EF; ">
									<b style="font-size: 18px;"><?php echo $this->lang->line('msg_sun'); ?> </b>
									<h5><b><?php echo $timetb->row()->sunday;?> (Hrs)</b></h5>
								</div>
							</div>
							<hr>
						</div>
						<!-- ==================== END  AVAILABILITY  ==================== -->

						<!-- ==================== APPOINTMENTS  ==================== -->
						<div  style="padding: 1px 20px 5px 20px;">
							<h3 class="sitecolor2"><b><?php echo $this->lang->line('msg_prf_appointment'); ?></b></h3>
							<div class="well-block">
					                        <div class="well-title">
					                            <h4><b><?php echo $this->lang->line('msg_prf_book_appointment'); ?></b></h4>
					                        </div>
					                        <!-- <form> -->
					                            <!-- Form start -->
					                            <form action="<?php echo base_url('Appointment/makeAppointment')?>" method="post">
					                            <div class="row">
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="name"><?php echo $this->lang->line('msg_prf_name'); ?></label>
					                                        <input id="name" name="requestername" type="text" placeholder="<?php echo $this->lang->line('msg_prf_full_name'); ?>" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                                <!-- Text input-->
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="email"><?php echo $this->lang->line('msg_prf_email'); ?></label>
					                                        <input type="email"  id="email" name="requesteremail" placeholder="<?php echo $this->lang->line('msg_prf_eg'); ?>. example@gmail.com" class="form-control input-md">
					                                    </div>
					                                </div>

					                                 <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="email"><?php echo $this->lang->line('msg_prf_phone_no'); ?></label>
					                                        <input type="number" id="number" name="requesterphone"  placeholder="<?php echo $this->lang->line('msg_prf_eg'); ?>. 07XXXXXXXX" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                                <!-- Text input-->
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="date"><?php echo $this->lang->line('msg_prf_pref_date'); ?></label>
					                                        <input type="date" id="date" name="date"  placeholder="<?php echo $this->lang->line('msg_prf_pref_date'); ?>" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                                <!-- Select Basic -->
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="time"><?php echo $this->lang->line('msg_prf_sttime'); ?></label>
					                                         <input type="time" id="date" name="sttime"  placeholder="<?php echo $this->lang->line('msg_prf_enter_sttime'); ?>" required="" class="form-control input-md">
					                                    </div>
					                                </div>

					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="time"><?php echo $this->lang->line('msg_prf_entime'); ?></label>
					                                       <input type="time" id="date" name="entime"  placeholder="<?php echo $this->lang->line('msg_prf_enter_entime'); ?>" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                                <!-- Select Basic -->
					                                <div class="col-md-12">
					                                    <div class="form-group">
					                                        <label class="control-label" for="appointmentfor"><?php echo $this->lang->line('msg_prf_for'); ?></label>
					                                        <select id="appointmentfor" name="purpose" class="form-control">
					                                            <option value="Techinical Talk"><?php echo $this->lang->line('msg_prf_tech'); ?></option>
					                                            <option value="Business Talk"><?php echo $this->lang->line('msg_prf_bness'); ?></option>
					                                            <option value="Advisory"><?php echo $this->lang->line('msg_prf_advisory'); ?></option>
					                                            <option value="Proffisonal Issues"><?php echo $this->lang->line('msg_prf_prof'); ?></option>
					                                        </select>
					                                    </div>
					                                </div>
					                                <div class="col-md-12">
					                                	<div class="form-group">
						                                	<label class="control-label" for="appointmentfor"><?php echo $this->lang->line('msg_prf_app_desc'); ?></label>
						                                	<textarea class="form-control" rows="3" id="appointsms" name="description"></textarea>
						                                </div>
					                                </div>
					                                <!-- Button -->
					                                <div class="col-md-12">
					                                    <div class="form-group">
					                                        <button type="submit" id="singlebutton1" name="appointmentBtn" value="<?php $this->session->userdata('selectedid');?>" class="btn btn-info pull-right"><?php echo $this->lang->line('msg_prf_app_make'); ?></button>
					                                    </div>
					                                </div>
					                            </div>
					                        </form>
					                        <!-- form end -->
					                    </div>
					        <hr>
						</div>
						<!-- ==================== END APPOINTMENTS  ==================== -->








						<!-- ================= OLD SCHEDULE & APPOINTMENT ========== -->
						<!-- <div style="padding: 10px 20px 10px 20px;">
							<?php echo $this->session->userdata('msg'); ?>
							<div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab"><?php echo $this->lang->line('msg_prf_avail'); ?></a></li>
                                    <li class=""><a href="#tab_2" data-toggle="tab"><?php echo $this->lang->line('msg_prf_appointment'); ?></a></li>
                                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
			                            <div class="box box-default">
			                                <div class="box-header" style="cursor: move;">
			                                    <i class="fa fa-clock-o"></i>
			                                    <h4 class="box-title"><?php echo $this->lang->line('msg_prf_wk_avail'); ?></h4>
			                                </div>
			                                <div class="box-body">
			                                    <ul class="todo-list ui-sortable">
			                                        <li>
			                                            <span class="handle">
			                                                <i class="fa fa-ellipsis-v"></i>
			                                                <i class="fa fa-ellipsis-v"></i>
			                                            </span>  
			                                            <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" name="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                            
			                                            <span class="text"><?php echo $this->lang->line('msg_mon'); ?> </span>
			                                            <strong class="label label-info pull-right"><i class="fa fa-clock-o"></i>HRS</strong>
			                                            	<span class="text pull-right">(<?php echo $timetb->row()->monday;?>)</span>
			                                            <div class="tools">
			                                                <i class="fa fa-clock-o"></i>
			                                                <i class="fa fa-eye"></i>
			                                            </div>
			                                        </li>
			                                        <li>
			                                            <span class="handle">
			                                                <i class="fa fa-ellipsis-v"></i>
			                                                <i class="fa fa-ellipsis-v"></i>
			                                            </span>  
			                                            <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" name="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                            
			                                            <span class="text"><?php echo $this->lang->line('msg_tues'); ?> </span>
			                                            <strong class="label label-info pull-right"><i class="fa fa-clock-o"></i>HRS</strong>
			                                            	<span class="text pull-right">(<?php echo $timetb->row()->tuesday;?>)</span>
			                                            <div class="tools">
			                                                <i class="fa fa-clock-o"></i>
			                                                <i class="fa fa-eye"></i>
			                                            </div>
			                                        </li>
			                                        <li>
			                                            <span class="handle">
			                                                <i class="fa fa-ellipsis-v"></i>
			                                                <i class="fa fa-ellipsis-v"></i>
			                                            </span>  
			                                            <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" name="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                            
			                                            <span class="text"><?php echo $this->lang->line('msg_wedness'); ?> </span>
			                                            <strong class="label label-info pull-right"><i class="fa fa-clock-o"></i>HRS</strong>
			                                            	<span class="text pull-right">(<?php echo $timetb->row()->wednessday;?>)</span>
			                                            <div class="tools">
			                                                <i class="fa fa-clock-o"></i>
			                                                <i class="fa fa-eye"></i>
			                                            </div>
			                                        </li>
			                                        <li>
			                                            <span class="handle">
			                                                <i class="fa fa-ellipsis-v"></i>
			                                                <i class="fa fa-ellipsis-v"></i>
			                                            </span>  
			                                            <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" name="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                            
			                                            <span class="text"><?php echo $this->lang->line('msg_thurs'); ?> </span>
			                                            <strong class="label label-info pull-right"><i class="fa fa-clock-o"></i>HRS</strong>
			                                            	<span class="text pull-right">(<?php echo $timetb->row()->thursday;?>)</span>
			                                            <div class="tools">
			                                                <i class="fa fa-clock-o"></i>
			                                                <i class="fa fa-eye"></i>
			                                            </div>
			                                        </li>
			                                        <li>
			                                            <span class="handle">
			                                                <i class="fa fa-ellipsis-v"></i>
			                                                <i class="fa fa-ellipsis-v"></i>
			                                            </span>  
			                                            <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" name="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                            
			                                            <span class="text"><?php echo $this->lang->line('msg_fri'); ?> </span>
			                                            <strong class="label label-info pull-right"><i class="fa fa-clock-o"></i>HRS</strong>
			                                            	<span class="text pull-right">(<?php echo $timetb->row()->friday;?>)</span>
			                                            <div class="tools">
			                                                <i class="fa fa-clock-o"></i>
			                                                <i class="fa fa-eye"></i>
			                                            </div>
			                                        </li>
			                                        <li>
			                                            <span class="handle">
			                                                <i class="fa fa-ellipsis-v"></i>
			                                                <i class="fa fa-ellipsis-v"></i>
			                                            </span>  
			                                            <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" name="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                            
			                                            <span class="text"><?php echo $this->lang->line('msg_satur'); ?> </span>
			                                            <strong class="label label-info pull-right"><i class="fa fa-clock-o"></i>HRS</strong>
			                                            	<span class="text pull-right">(<?php echo $timetb->row()->saturday;?>)</span>
			                                            <div class="tools">
			                                                <i class="fa fa-clock-o"></i>
			                                                <i class="fa fa-eye"></i>
			                                            </div>
			                                        </li>
			                                        <li>
			                                            <span class="handle">
			                                                <i class="fa fa-ellipsis-v"></i>
			                                                <i class="fa fa-ellipsis-v"></i>
			                                            </span>  
			                                            <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" name="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                            
			                                            <span class="text"><?php echo $this->lang->line('msg_sun'); ?> </span>
			                                            <strong class="label label-info pull-right"><i class="fa fa-clock-o"></i>HRS</strong>
			                                            	<span class="text pull-right">(<?php echo $timetb->row()->sunday;?>)</span>
			                                            <div class="tools">
			                                                <i class="fa fa-clock-o"></i>
			                                                <i class="fa fa-eye"></i>
			                                            </div>
			                                        </li>
			                                        		
			                                    </ul>
			                                </div>
			                            </div>
                                    </div>

                                    <div class="tab-pane " id="tab_2">
                                       
					                    <div class="well-block">
					                        <div class="well-title">
					                            <h4><?php echo $this->lang->line('msg_prf_book_appointment'); ?></h4>
					                        </div>
					                            <form action="<?php echo base_url('Appointment/makeAppointment')?>" method="post">
					                            <div class="row">
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="name"><?php echo $this->lang->line('msg_prf_name'); ?></label>
					                                        <input id="name" name="requestername" type="text" placeholder="<?php echo $this->lang->line('msg_prf_full_name'); ?>" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                               
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="email"><?php echo $this->lang->line('msg_prf_email'); ?></label>
					                                        <input type="email"  id="email" name="requesteremail" placeholder="<?php echo $this->lang->line('msg_prf_eg'); ?>. example@gmail.com" class="form-control input-md">
					                                    </div>
					                                </div>

					                                 <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="email"><?php echo $this->lang->line('msg_prf_phone_no'); ?></label>
					                                        <input type="number" id="number" name="requesterphone"  placeholder="<?php echo $this->lang->line('msg_prf_eg'); ?>. 07XXXXXXXX" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                                
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="date"><?php echo $this->lang->line('msg_prf_pref_date'); ?></label>
					                                        <input type="date" id="date" name="date"  placeholder="<?php echo $this->lang->line('msg_prf_pref_date'); ?>" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                                
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="time"><?php echo $this->lang->line('msg_prf_sttime'); ?></label>
					                                         <input type="time" id="date" name="sttime"  placeholder="<?php echo $this->lang->line('msg_prf_enter_sttime'); ?>" required="" class="form-control input-md">
					                                    </div>
					                                </div>

					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="time"><?php echo $this->lang->line('msg_prf_entime'); ?></label>
					                                       <input type="time" id="date" name="entime"  placeholder="<?php echo $this->lang->line('msg_prf_enter_entime'); ?>" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                               
					                                <div class="col-md-12">
					                                    <div class="form-group">
					                                        <label class="control-label" for="appointmentfor"><?php echo $this->lang->line('msg_prf_for'); ?></label>
					                                        <select id="appointmentfor" name="purpose" class="form-control">
					                                            <option value="Techinical Talk"><?php echo $this->lang->line('msg_prf_tech'); ?></option>
					                                            <option value="Business Talk"><?php echo $this->lang->line('msg_prf_bness'); ?></option>
					                                            <option value="Advisory"><?php echo $this->lang->line('msg_prf_advisory'); ?></option>
					                                            <option value="Proffisonal Issues"><?php echo $this->lang->line('msg_prf_prof'); ?></option>
					                                        </select>
					                                    </div>
					                                </div>
					                                <div class="col-md-12">
					                                	<div class="form-group">
						                                	<label class="control-label" for="appointmentfor"><?php echo $this->lang->line('msg_prf_app_desc'); ?></label>
						                                	<textarea class="form-control" rows="3" id="appointsms" name="description"></textarea>
						                                </div>
					                                </div>
					                               
					                                <div class="col-md-12">
					                                    <div class="form-group">
					                                        <button type="submit" id="singlebutton1" name="appointmentBtn" value="<?php $this->session->userdata('selectedid');?>" class="btn btn-info pull-right"><?php echo $this->lang->line('msg_prf_app_make'); ?></button>
					                                    </div>
					                                </div>
					                            </div>
					                        </form>
					                        
					                    </div>
					               
                                    </div>
                                </div>
                            </div>
						</div> -->
						<!-- ==================== END APPOINTMENT ================= -->


						<div class="twPc-divStats">
							<!-- <ul class="twPc-Arrange">
								<li class="twPc-ArrangeSizeFit">
									<a href="#" title="9.840 Tweet">
										<span class="twPc-StatLabel twPc-block">Messages</span>
										<span class="twPc-StatValue">9.840</span>
									</a>
								</li>
								<li class="twPc-ArrangeSizeFit">
									<a href="#" title="885 Following">
										<span class="twPc-StatLabel twPc-block">Comments</span>
										<span class="twPc-StatValue">885</span>
									</a>
								</li>
								<li class="twPc-ArrangeSizeFit">
									<a href="#" title="1.810 Followers">
										<span class="twPc-StatLabel twPc-block">Viewers</span>
										<span class="twPc-StatValue">1.810</span>
									</a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
				<!-- code end -->
		</div>











		<div class="col-md-3 hidden">
               <div class="card hovercard " style="background-color: lightgray;" >
                <div class="cardheader">
                	<!-- <h4>MY PROFILE TITLE</h4> -->
                 </div>
               <div class="avatar">
                  <a href="" data-toggle="modal" data-target="#modal-profile">
                  	 <img alt="" src="<?php echo base_url('assets/img/profile/0/def.PNG')?>">
                  </a>
                 </div>
               <div class="info">
                   <div class="title">
                        <a target="_blank" href="#">My Name</a>
                    </div>
                    <div style="padding: 20px 20px 20px 20px;">
	                	<button type="button" class="btn btn-sm  btn-success btn-outline pull-left1">Chat <i class="fa fa-comment"></i></button>
	                	<button type="button" class="btn btn-sm  btn-danger btn-outline pull-right1">Comment</button>
	                </div>
	                <div class="desc">Passionate designer</div>
	                <div class="desc">Curious developer</div>
	                <div class="desc">Tech geek</div>
                </div>

                <div class="bottom">
                       <a class="btn btnrnd btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                           <i class="fa fa-twitter"></i>
                          </a>
                          <a class="btn btnrnd btn-danger btn-sm" rel="publisher" href="https://plus.google.com/+ahmshahnuralam">
                              <i class="fa fa-google-plus"></i>
                          </a>
                          <a class="btn btnrnd btn-primary btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                            <i class="fa fa-facebook"></i>
                          </a>
                         <a class="btn btnrnd btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                            <i class="fa fa-behance"></i>
                         </a>
                </div>

                <div>
                	<hr>
                </div>
         </div>
	</div>
		
	</div>
	<!-- ============== end customer profile ================== -->
	
</div>



</div>  <!-- xxxxxxxxxxxxx end container xxxxxxxxxxx -->
</div>






<!-- ================== custom popup  ============ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- <form class="form-style-1" action="<?php echo base_url()?>Chat/chatMe" method="post" enctype="multipart/form-data"> <div class="box-body"><div class="row"><div class="col-md-12">      <h1>SMS Area</h1>    </div> </div></div><div class="box-footer" style="text-align: center;"> <div class="form-group">  <input type="text" name="sms" class="form-control" id="sms" placeholder="Enter Text here.!" required=""><button type="submit" name="commentBtn" value="ok" class="btn btn-info btn-md"><b><i class="fa fa-send"></i></b></button></div></div></form>  -->

<script>
$(document).ready(function(){
    $('.comment').popover({title: '<h4><i class="fa fa-comments info"></i>&nbsp;&nbsp;&nbsp;&nbsp;<em><?php echo $this->lang->line('msg_prf_leave_comment'); ?></em></h4>', content: '<form class="form-style-1 wow animated pulse" action="<?php echo base_url()?>Chat/leaveComment" method="post" enctype="multipart/form-data">  <div class="box-body" style1="width: 200px;"><div class="row"> <div class="col-md-12"><div class="form-group"> <label for="body"><?php echo $this->lang->line('msg_prf_name'); ?></label><div class="input-group"><input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $this->lang->line('msg_prf_full_name'); ?>" required=""><span class="input-group-addon"><i class="fa fa-user"></i></span></div></div></div> <div class="col-md-12"><div class="form-group"> <label for="body"><?php echo $this->lang->line('msg_prf_comment'); ?></label> <textarea name="comment" rows="5" cols="20" class="form-control" required=""></textarea> </div></div> </div></div><div class="box-footer" style="text-align: center;"> <button type="submit" name="commentBtn" value="<?php echo $id;?>" class="btn btn-info btn-md"><b><?php echo $this->lang->line('msg_prf_submit'); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-send"></i></b></button> </div> </form>', html: true, placement: "bottom"}); 
});


$(document).ready(function(){
    $('.chat').popover({title: '<h4><i class="fa fa-comment info"></i>&nbsp;&nbsp;&nbsp;&nbsp;<em><?php echo $this->lang->line('msg_prf_chat'); ?></em></h4>', content: '<form class="form-style-1" action="<?php echo base_url()?>Chat/chatMe" method="post" enctype="multipart/form-data"> <div class="box-body"><div class="row"><div class="col-md-12">      <h4><?php echo $this->lang->line('msg_prf_chat_welcome'); ?></h4>    </div> </div></div><div class="box-footer" style="text-align: center;"> <div class="input-group">  <input type="text" name="sms" class="form-control" id="sms" placeholder="<?php echo $this->lang->line('msg_prf_chat_sms'); ?>" required=""><div class="input-group-btn"><button type="submit" name="chatBtn" value="<?php echo $id;?>" class="btn btn-info btn-md"><b><i class="glyphicon glyphicon-send"></i></b></button></div></div></div></form> ', html: true, placement: "bottom"}); 
});
</script>

<!-- =================== end popup ================ -->










<!-- ========================= MODAL ======================= -->
<!-- XXXXXXXXXXXXXXXXXXXXXXX PROFILE IMAGE XXXXXXXXXXXXXXXXXX -->
<!--Info Modal Templates-->
    <div id="modal-profile" class="modal modal-message1 modal-info fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog  modal-md">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center;">
                    <i class="fa fa-user1"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size: 24px; color: #00C0EF; "><?php echo $profilename;?></b>
                    <button type="button" class="btn btn-default  pull-right" data-dismiss="modal"><i class="fa fa-times"></i></button>
                </div>
                <div class="modal-title"></div>
                <?php $imgUrl = 'assets/img/profile/0/'.$img; ?>
                <div class="modal-body">
                      <img alt="" src="<?php echo base_url($imgUrl)?>" width="100%;" height="auto">
                </div>

               <!--  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
                
            </div> <!-- / .modal-content -->
        </div> <!-- / .modal-dialog -->
    </div>
    <!--End Info Modal Templates-->
<!-- XXXXXXXXXXXXXXXXXXXXXX END PROFILE IMG XXXXXXXXXXXXXXXXX -->












<!-- ===================== my scripts =================== -->
<!-- Popover -->
     <script>
		$(document).ready(function(){
		    $('[data-toggle="popover"]').popover(); 
		});
	</script>
<!-- ======================= end ======================== -->