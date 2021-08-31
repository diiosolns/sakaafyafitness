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


<div class="container fullwidth1 partialwidth">
	
<div class="row">
<div class="col-md-12"><br></div>
	<div class="col-md-3 " style="padding-right: 0;">
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
				      		echo ' <span class="label label-success label-pill pull-right">Online</span>';
				      	} else {
				      		echo ' <span class="label label-danger label-pill pull-right">Offline</span>';
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
	<div class="col-md-9 " style="padding-left: 5px;">
	<div class="row">
		<div class="col-md-12">
			
				<div class="twPc-div">

				    <a class="twPc-bg twPc-block" style="padding-left: 20px; padding-top: 20px; font-size: 22px; color: #fff; text-align: center;"><b><?php echo $profilename;?></b></a>

					<div>
						<div class="twPc-button">
				            <!-- Chat Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
				            <button type="button" name="chatBtn" value="<?php echo $id;?>" class="btn btn-sm  btn-success btn-outline pull-left1" data-placement="left"  data-toggle="popover" title="Chat Me" data-content="<form><input type='text'/></form>">Chat Me<i class="fa fa-comment"></i></button>
	                		<button type="button" name="commentBtn" value="<?php echo $id;?>" class="btn btn-sm  btn-info btn-outline pull-right1" data-placement="left" data-toggle="popover" title="Leave a Comment" data-content="And here's some amazing content. It's very engaging. Right?">Comment</button>

				            <!-- Chat Button -->   
						</div>
						<?php $imgUrl = 'assets/img/profile/0/'.$img; ?>
						<a title="Mert Salih Kaplan" href="#" data-toggle="modal" data-target="#modal-profile" class="twPc-avatarLink">
							<img alt="My Name" src="<?php echo base_url($imgUrl)?>" class="twPc-avatarImg">
						</a>

						<div class="twPc-divUser">
							<div class="twPc-divName">
								<a href="#"><?php echo modules::load('Users')->get_where_custom('id',$userid)->row()->name;?></a>
							</div>
							<span>
								<a href="#"><small><i><?php echo $type.'->'.$category.'->'.$subcategory;?></i></small></a>
							</span>
						</div>

						<div style="padding: 10px 20px 10px 20px;">
							<b>Description : </b><?php echo $description;?>
						</div>
						<div style="padding: 10px 20px 10px 20px;">
							<b>Location : </b><?php echo $phyaddress;?>
						</div>
						<div style="padding: 10px 20px 10px 20px;">
							<b>Contacts : </b><?php echo $phone;?> | <?php echo $altphone;?> | <?php echo $email;?>
						</div>

						<!-- ============== TIME TABLE ============ -->
						<div style="padding: 10px 20px 10px 20px;">
							<b>Availability : </b>
							<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">My Weekly Availability Schedule</h3>
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-default btn-sm refresh-btn" data-toggle="tooltip" title="" data-original-title="Reload"><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body" style="overflow-y:scroll;">
                                    <table class="table  table-bordered">
                                        <tbody><tr>
                                            <th style="width: 30px"><b>Day/ Time</b></th>
                                            <th><small>0730</small></th>
                                            <th><small>0830</small></th>
                                            <th style="">0930</th>
                                            <th>1030</th>
                                            <th>1130</th>
                                            <th>1230</th>
                                            <th>1330</th>
                                            <th>1430</th>
                                            <th>1530</th>
                                            <th>1630</th>
                                            <th>1730</th>
                                            <th>1830</th>
                                            <th>1930</th>

                                            <th>2030</th>
                                            <th>2130</th>
                                            <th>2230</th>
                                            <th>2330</th>
                                            <th>2430</th>
                                            <th>0130</th>
                                            <th>0230</th>
                                            <th>0330</th>
                                            <th>0430</th>
                                            <th>0530</th>
                                            <th>0630</th>
                                        </tr>
                                        <tr>
                                            <td>Monday</td>
                                            <td> </td>
                                            <td><span class="badge bg-green">*</span></td>
                                            <td><span class="badge bg-green">*</span></td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td style="background-color: green;"> </td>
                                            <td style="background-color: green;"> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>

                                        </tr>
                                        <tr>
                                            <td>Tuesday</td>
                                            <td> </td>
                                            <td><span class="badge bg-green">*</span></td>
                                            <td><span class="badge bg-green">*</span></td>
                                             <td> </td>
                                            <td> </td>
                                            <td> </td>
                                             <td style="background-color: green;"> </td>
                                             <td style="background-color: green;"> </td>
                                             <td style="background-color: green;"> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td>Wednessday</td>
                                            <td> </td>
                                            <td><span class="badge bg-green">*</span></td>
                                            <td><span class="badge bg-green">*</span></td>
                                             <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                             <td style="background-color: green;"> </td>
                                             <td style="background-color: green;"> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                             <td style="background-color: green;"> </td>
                                             <td style="background-color: green;"> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td>Thursday</td>
                                            <td> </td>
                                            <td><span class="badge bg-green">*</span></td>
                                            <td><span class="badge bg-green">*</span></td>
                                             <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td>Friday</td>
                                            <td> </td>
                                            <td><span class="badge bg-green">*</span></td>
                                            <td><span class="badge bg-green">*</span></td>
                                             <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td>Saturday</td>
                                            <td> </td>
                                            <td><span class="badge bg-green">*</span></td>
                                            <td><span class="badge bg-green">*</span></td>
                                             <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td>Sunday</td>
                                            <td> </td>
                                            <td><span class="badge bg-green">*</span></td>
                                            <td><span class="badge bg-green">*</span></td>
                                             <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div>
						</div>
						<!-- ================== END TIMETABLE =========== -->

						<!-- ==================== APPOINTMENT ==================== -->
						<div style="padding: 10px 20px 10px 20px;">
							<div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class=""><a href="#tab_1" data-toggle="tab">Availale Apointments</a></li>
                                    <li class="active"><a href="#tab_2" data-toggle="tab">Apointment Request</a></li>
                                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab_1">
                                        

			                            <div class="box box-default">
			                                <div class="box-header" style="cursor: move;">
			                                    <i class="ion ion-clipboard"></i>
			                                    <h4 class="box-title">Available Appointmets</h4>
			                                </div><!-- /.box-header -->
			                                <div class="box-body">
			                                    <ul class="todo-list ui-sortable">
			                                    <?php foreach ($appointmentres->result() as $row): ?>
			                                        <li>
			                                            <!-- drag handle -->
			                                            <span class="handle">
			                                                <i class="fa fa-ellipsis-v"></i>
			                                                <i class="fa fa-ellipsis-v"></i>
			                                            </span>  
			                                            <!-- checkbox -->
			                                            <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" name="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                            
			                                            <!-- todo text -->
			                                            <span class="text"><?php echo $row->date?>  <?php echo $row->sttime?> to <?php echo $row->entime?> | <?php echo $row->requestername?> | <?php echo $row->purpose?></span>
			                                            <!-- Emphasis label -->
			                                            <small class="label label-info"><i class="fa fa-clock-o"></i><?php echo $row->status?></small>
			                                            <!-- General tools such as edit or delete-->
			                                            <div class="tools">
			                                                <i class="fa fa-file"></i>
			                                                <i class="fa fa-eye"></i>
			                                            </div>
			                                        </li>
			                                        <?php endforeach?>		
			                                    </ul>
			                                </div><!-- /.box-body -->
			                            </div>



                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane active" id="tab_2">
                                       

					                    <div class="well-block">
					                        <div class="well-title">
					                            <h4>Book an Appointment</h4>
					                        </div>
					                        <!-- <form> -->
					                            <!-- Form start -->
					                            <form action="<?php echo base_url('Appointment/makeAppointment')?>" method="post">
					                            <div class="row">
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="name">Name</label>
					                                        <input id="name" name="requestername" type="text" placeholder="Full Name" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                                <!-- Text input-->
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="email">Email</label>
					                                        <input type="email"  id="email" name="requesteremail" placeholder="Eg. example@gmail.com" class="form-control input-md">
					                                    </div>
					                                </div>

					                                 <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="email">Phone Number</label>
					                                        <input type="number" id="number" name="requesterphone"  placeholder="Eg. 07XXXXXXXX" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                                <!-- Text input-->
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="date">Preferred Date</label>
					                                        <input type="date" id="date" name="date"  placeholder="Preferred Date" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                                <!-- Select Basic -->
					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="time">Preferred Start Time</label>
					                                         <input type="time" id="date" name="sttime"  placeholder="Enter Start Time" required="" class="form-control input-md">
					                                    </div>
					                                </div>

					                                <div class="col-md-4">
					                                    <div class="form-group">
					                                        <label class="control-label" for="time">Preferred End Time</label>
					                                       <input type="time" id="date" name="entime"  placeholder="Enter End Time" required="" class="form-control input-md">
					                                    </div>
					                                </div>
					                                <!-- Select Basic -->
					                                <div class="col-md-12">
					                                    <div class="form-group">
					                                        <label class="control-label" for="appointmentfor">Appointment For</label>
					                                        <select id="appointmentfor" name="purpose" class="form-control">
					                                            <option value="Techinical Talk">Techinical Talk</option>
					                                            <option value="Business Talk">Business Talk</option>
					                                            <option value="Advisory">Advisory</option>
					                                            <option value="Proffisonal Issues">Proffisonal Issues</option>
					                                        </select>
					                                    </div>
					                                </div>
					                                <div class="col-md-12">
					                                	<div class="form-group">
						                                	<label class="control-label" for="appointmentfor">Appointment Description</label>
						                                	<textarea class="form-control" rows="3" id="appointsms" name="description"></textarea>
						                                </div>
					                                </div>
					                                <!-- Button -->
					                                <div class="col-md-12">
					                                    <div class="form-group">
					                                        <button type="submit" id="singlebutton1" name="appointmentBtn" value="<?php $this->session->userdata('selectedid');?>" class="btn btn-info pull-right">Make An Appointment</button>
					                                    </div>
					                                </div>
					                            </div>
					                        </form>
					                        <!-- form end -->
					                    </div>
					               
                                    </div><!-- /.tab-pane -->
                                </div><!-- /.tab-content -->
                            </div>
						</div>
						<!-- ==================== END APPOINTMENT ================= -->


						<div class="twPc-divStats">
							<ul class="twPc-Arrange">
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
							</ul>
						</div>
					</div>
				</div>
				<!-- code end -->
		</div>

		<div class="col-md-0">
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
                <?php $imgUrl = 'assets/img/profile/1/'.$img; ?>
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

