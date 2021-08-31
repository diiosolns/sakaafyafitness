<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css//normalize.css');?>" /> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/demo.css');?>" /> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabs.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabstyles.css');?>" />
<script src="<?php echo base_url('assets/js/modernizr.custom.js');?>"></script>
<!--  search inputs top -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php echo base_url('assets/js/myJs/profilesch.js');?>" type="text/javascript"></script> 


<style type="text/css">
.form-style-1 {
    margin:10px auto;
    max-width: 100%;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
	background-color: #fff;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: bordfer-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}
</style>



<section>
<br>
				<div  class="tabs tabs-style-iconbox" style="background-color: #F8F8F8;">
					<nav >
						<ul>
							<li class="tab-current" ><a href="#section-iconbox-1" class="fa fa-file"><b style="font-size: 22px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Create New Profile</b></a></li>
							<li class=""><a href="#section-iconbox-2" class="fa fa-user"><b style="font-size: 22px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Profile</b></a></li>
							<!-- <li class=""><a href="#section-iconbox-3" class="fa fa-upload"><span>Upload</span></a></li>
							<li class=""><a href="#section-iconbox-4" class="fa fa-coffee"><span>Work</span></a></li>
							<li class=""><a href="#section-iconbox-5" class="fa fa-config"><span>Settings</span></a></li> -->
						</ul>
					</nav>
					<div class="content-wrap">
						<section id="section-iconbox-1" class="content-current" >
					
						 <form class="form-style-1" action="<?php echo base_url('Profile/managemyProfiles')?>" method="post" enctype="multipart/form-data">
                          <div class="box-body" style="text-align: left;">

                           <?php foreach ($editRes->result() as $row): ?>

                            <div class="row">
                                <h3>Profile Name & Image</h3>
                                <div class="col-md-12">
                                 <b style="color: <?php echo $color;?>;"><?php echo $msg;?></b>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Profile Name<span class="required">*</span></label>
                                            <input type="text" class="form-control  field-long" name="pname" value="<?php echo $row->profilename;?>" placeholder="Enter Profile Name"  required="">
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Profile Image</label>
                                            <input type="file"  class="form-control" name="img" accept=".gif, .jpg, .png" value="" placeholder="Select Image File"   required1="">
                                        </div>
                                      </div>
                                </div>
                            </div>


                            <div class="row">
                                <hr>
                                <h3>Profile Type & Category</h3> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Profile Type<span class="required">*</span></label>
                                        <select class=" field-select" name="type" id="type" required="">
                                            <option value="<?php echo $row->type;?>"><?php echo $row->type;?></option>
                                            <option value="PROFESSIONAL">PROFESSIONAL</option>
                                            <option value="INTERPRENOUR">INTERPRENOUR</option>
                                            <!-- <option value="BUSINESS MAN">BUSINESS MAN</option>
                                            <option value="POLITICIAN">POLITICIAN</option> -->
                                            <option value="OTHERS">OTHERS</option>
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Profile Category<span class="required">*</span></label>
                                        <select class="field-select" name="cat" id="category" required="">
                                            <option value="<?php echo $row->category;?>"><?php echo $row->category;?></option>
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Profile Sub-Category<span class="required">*</span></label>
                                        <select class="form-control" name="subcat" id="subcategory" required="">
                                            <option value="<?php echo $row->subcategory;?>"><?php echo $row->subcategory;?></option>
                                        </select>
                                     </div>
                                </div>

                            </div>




                             <div class="row">
                                <hr>
                                 <h3>Profile Contact Information</h3>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Phone Number<span class="required">*</span></label>
                                            <input type="number"  class="field-long" name="phone" value="<?php echo $row->phone;?>" placeholder="Enter Phone Number"   required="">
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Alt-Phone Number</label>
                                            <input type="number"  class="field-long" name="altphone" value="<?php echo $row->altphone;?>" placeholder="Enter Altenutive Phone Number"   >
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group field-select">
                                            <label>E-mail Address</label>
                                            <input type="email"  class="field-long" name="email" value="<?php echo $row->email;?>" placeholder="Enter E-mail Address"   required="">
                                        </div>
                                      </div>
                                </div>
                            </div>



                             <div class="row">
                                <hr>
                                <h3>Profile Location Information</h3>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><?php //echo $this->lang->line('msg_profile_type'); ?> Country<span class="required">*</span></label>
                                        <select class=" field-select input-sm1" name="country" id="country" required="">
                                           <option value="N/A"><?php //echo $this->lang->line('msg_select_profile_type'); ?></option>
                                           <!-- <option value="empty" selected="" >Select Country</option> -->
                                            <option value="<?php echo $row->country;?>"  selected=""><?php echo $row->country;?></option>
                                            <option value="Tanzania"  >Tanzania</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Rwanda">Rwanda</option>
                                        </select>
                                     </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label><?php //echo $this->lang->line('msg_profile_category'); ?>Region/ City/ State<span class="required">*</span></label>
                                        <div id="region">
                                            <input type="text"  class="field-long" name="region" value="<?php echo $row->region;?>" placeholder="Enter Region"   required="">
                                        </div>
                                        <!-- <select class="field-select" name="region" id="region" required="">
                                            <option value="N/A"><?php echo $this->lang->line('msg_select_profile_category'); ?></option>
                                        </select> -->
                                     </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Physical Address</label>
                                            <input type="text"  class="field-long" name="phyaddress" value="<?php echo $row->phyaddress;?>" placeholder="Enter Physical Address"   required="">
                                        </div>
                                      </div>
                                </div>
                            </div>
                                





                             <div class="row">
                                <hr>
                                <h3>Profile Description (More Details) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-info btn-sm " name="editBtn" value="" data-toggle="tooltip"  title="" data-original-title="Maelezo kuhusu profaili: Tafadhari eleza kwa ufupi kuhusu ujuzi na uzoefu wako pamoja na mfano/ mifano ya kazi ulizokwishafanya au unazozifanya. "><i class="fa fa-info" style="border-radius: 50%;"></i></button></h3> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Profile Description</label>
                                            <textarea name="desc" rows="5" class="textarea field-long field-textarea" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> <?php echo $row->description;?></textarea>
                                        </div>
                                      </div>
                                </div>
                                 <div class="col-md-12">
                                 <br>
                                 <b style="color: <?php echo $color;?>;"><?php echo $msg;?></b>
                                </div>
                            </div>  

                                  <button type="submit" name="modifyBtn" value="<?php echo $row->id;?>" class="btn btn-info btn-lg pull-right">&nbsp;&nbsp;&nbsp;&nbsp;MODIFY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                  <hr>
                                <?php endforeach; ?>
                                </div><!-- /.box-body -->
                               </form>  

						</section>





						<!-- <section id="section-iconbox-2" class="">
						<p>No Data !</p>
						<p>...</p>
						</section> -->


                        <section id="section-iconbox-2" class="">
                        
                            <!-- <div class="box box-info  " style="margin-top: 15px;"> -->
                                              <!--   <div class="box-header">
                                                    <h3 class="box-title"><b>Manage My Profiles</b></h3>
                                                </div> --><!-- /.box-header -->
                                                <div class="box-body padding" style="overflow-x:scroll; white-space: nowrap;">
                                                <form action="<?php echo base_url('Profile/managemyProfiles')?>" method="post">
                                                    <table class="table table-striped" >
                                                        <tbody><tr>
                                                            <th style="width: 10px">#</th>
                                                            <th><?php echo $this->lang->line('msg_tools'); ?></th>
                                                            <th><?php echo $this->lang->line('msg_profile_name'); ?></th>
                                                            <th><?php echo $this->lang->line('msg_type'); ?></th>
                                                            <th><?php echo $this->lang->line('msg_category'); ?></th>
                                                            <th><?php echo $this->lang->line('msg_sub_category'); ?></th> 
                                                            <th><?php echo $this->lang->line('msg_profile_owner'); ?></th>
                                                            <th><?php echo $this->lang->line('msg_last_modified'); ?></th>
                                                        </tr>
                                                        <?php $index = 1;?>
                                                         <?php foreach ($profileRes->result() as $row): ?>
                                                            
                                                                <tr>
                                                                    <td><?php echo $index;?></td>
                                                                    <td>
                                                                        <?php $profileUrl = 'Profile/viewProfiles/'.$row->id.'/'.$row->type.'/'.$row->category.'/'.$row->subcategory; ?>
                                                                        <a target="_blank" class="btn btn-info btn-xs"  href="<?php echo base_url($profileUrl);?>"  data-toggle="tooltip" title="" data-original-title="View Profile" ><i class="fa fa-eye"></i></a>
                                                                        <button type="submit" class="btn btn-default btn-xs " name="editBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Edit This Profile"><i class="fa fa-edit"></i></button>
                                                                        <button type="submit" class="btn btn-danger btn-xs " name="deleteBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Delete This Profile"><i class="fa fa-times"></i></button>
                                                                        <!-- <button type="submit" class="btn btn-success btn-xs"  name="newBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as NEW"><i class="fa fa-file"></i></button> 
                                                                        <button type="submit" class="btn btn-warning btn-xs"  name="oldBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as OLD"><i class="fa fa-file"></i></button> -->
                                                                    </td>
                                                                    <td><?php echo $row->profilename;?> </td>
                                                                    <td><?php echo $row->type;?> </td>
                                                                    <td><?php echo $row->category;?> </td>
                                                                    <td><?php echo $row->subcategory;?> </td>
                                                                    <td><?php echo modules::load('Users')->get_where_custom('id', $row->userid)->row()->name;?> </td>
                                                                    <td><?php echo $row->udate;?> </td>
                                                                    <!-- <td><span class="label label-success">Online</span></td> -->
                                                                </tr>
                                                           
                                                        <?php $index ++;?>
                                                        <?php endforeach; ?>
                                                         
                                                    </tbody></table>
                                                    </form>
                                                    <br><br><br>
                                                </div><!-- /.box-body -->
                                            <!-- </div> -->


                        
                        </section>










						<!-- <section id="section-iconbox-3" class=""><p>3</p></section>
						<section id="section-iconbox-4" class=""><p>4</p></section>
						<section id="section-iconbox-5" class=""><p>5</p></section> -->
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>




<!-- =============== scripts =============== -->
<script src="<?php echo base_url('assets/js/cbpFWTabs.js');?>"></script>
		<script>
			(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();
</script>




<!-- =============== select input script () ============ -->
<script type="text/javascript">
    $(document).ready(function() {

    $("#type").change(function() {
        var val = $(this).val();
        if (val == "PROFESSIONAL") {
            $("#category").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Teacher'><?php echo $this->lang->line('msg_teacher'); ?></option><option value='Doctor'><?php echo $this->lang->line('msg_doctor'); ?></option><option value='Techinician'><?php echo $this->lang->line('msg_technician'); ?></option><option value='Animal Keeping'><?php echo $this->lang->line('msg_animal_keeper'); ?></option><option value='Agriculturist'><?php echo $this->lang->line('msg_farming_expert'); ?></option><option value='Lawyor'><?php echo $this->lang->line('msg_lawyer'); ?></option><option value='Nurse'><?php echo $this->lang->line('msg_nurse'); ?></option><option value='Burser'><?php echo $this->lang->line('msg_bursar'); ?></option><option value='Sychologist'><?php echo $this->lang->line('msg_psychologist'); ?></option><option value='Translator'><?php echo $this->lang->line('msg_translator'); ?></option><option value='Interpreter'><?php echo $this->lang->line('msg_interpretor'); ?></option><option value='Programmer'><?php echo $this->lang->line('msg_programmer'); ?></option><option value='Blogger'><?php echo $this->lang->line('msg_blogger'); ?></option><option value='Master Ceremony'><?php echo $this->lang->line('msg_master_of_ceremony'); ?></option><option value='Driver'><?php echo $this->lang->line('msg_driver'); ?></option><option value='Broker'><?php echo $this->lang->line('msg_brocker'); ?></option><option value='Security Guard'><?php echo $this->lang->line('msg_security_guard'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_works'); ?></option>");
        } else if (val == "INTERPRENOUR") {
            $("#category").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Archtect'><?php echo $this->lang->line('msg_archtect'); ?></option><option value='Shop'><?php echo $this->lang->line('msg_shop'); ?></option><option value='Packing'><?php echo $this->lang->line('msg_parking'); ?></option><option value='Car Wash'><?php echo $this->lang->line('msg_car_wash'); ?></option><option value='Garage'><?php echo $this->lang->line('msg_garage'); ?></option><option value='Bar'><?php echo $this->lang->line('msg_bar'); ?></option><option value='Saloon'><?php echo $this->lang->line('msg_salon'); ?></option><option value='Bakery'><?php echo $this->lang->line('msg_bakery'); ?></option><option value='Tution Center'><?php echo $this->lang->line('msg_tuition_centre'); ?></option><option value='Day care'><?php echo $this->lang->line('msg_day_care'); ?></option><option value='School'><?php echo $this->lang->line('msg_school'); ?></option><option value='Guest House'><?php echo $this->lang->line('msg_guest_house'); ?></option><option value='Hotel'><?php echo $this->lang->line('msg_hotel'); ?></option><option value='Cafe'><?php echo $this->lang->line('msg_restaurant'); ?></option><option value='Company'><?php echo $this->lang->line('msg_company'); ?></option><option value='Butcher'><?php echo $this->lang->line('msg_butcher'); ?></option><option value='Driver'><?php echo $this->lang->line('msg_driver'); ?></option><option value='Broker'><?php echo $this->lang->line('msg_brocker'); ?></option><option value='Online Marketer'><?php echo $this->lang->line('msg_online_marketers'); ?></option><option value='Insurance'><?php echo $this->lang->line('msg_insurance'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_business_works'); ?></option>");

        } else if (val == "POLITICIAN") {
            $("#category").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='President'>President</option><option value='Member of Pariament (MP)'>Member of Pariament (MP)</option><option value='Diwani'>Diwani</option><option value='Chairman'>Chairman</option><option value='Periament Speaker'>Periament Speaker</option><option value='Other Position'>Other Position</option>");

        } else if (val == "OTHERS") {
            $("#category").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='N/A'>N/A</option>");   
            /*<?php echo $this->lang->line('msg_'); ?>*/
        } else if (val == "N/A") {
            $("#category").html("<option value='N/A'>Select category1</option>");

        }
    });


   //===========sub element ===========
    $("#category").change(function() {
       var val2 = $(this).val();
        if (val2 == "Teacher") {
            $("#subcategory").html("<option value='Mathematics'><?php echo $this->lang->line('msg_mathematics'); ?></option><option value='Physics'><?php echo $this->lang->line('msg_physics'); ?></option><option value='Chemistry'><?php echo $this->lang->line('msg_chemistry'); ?></option><option value='Biology'><?php echo $this->lang->line('msg_biology'); ?></option><option value='History'><?php echo $this->lang->line('msg_history'); ?></option><option value='Kiswahili'><?php echo $this->lang->line('msg_kiswahili'); ?></option><option value='English'><?php echo $this->lang->line('msg_english'); ?></option><option value='Kiswahili for Foreigners'><?php echo $this->lang->line('msg_kiswahili_to_foreigners'); ?></option><option value='Geography'><?php echo $this->lang->line('msg_geography'); ?></option><option value='French'><?php echo $this->lang->line('msg_french'); ?></option><option value='Chinese'><?php echo $this->lang->line('msg_chinese'); ?></option><option value='Other Subjects'><?php echo $this->lang->line('msg_other_subjects'); ?></option>");
        } else if (val2 == "Doctor") {
            $("#subcategory").html("<option value='Doctor'><?php echo $this->lang->line('msg_general_doctor'); ?></option><option value='Pediatrician'><?php echo $this->lang->line('msg_pediatrician'); ?></option><option value='Surgeon'><?php echo $this->lang->line('msg_surgeon'); ?></option><option value='Dermatologist'><?php echo $this->lang->line('msg_Dermatologist'); ?></option><option value='Gynecologist'><?php echo $this->lang->line('msg_gynecologist'); ?></option><option value='Psychiatric'><?php echo $this->lang->line('msg_psychiatric'); ?></option><option value='Cardiologist'><?php echo $this->lang->line('msg_cardiologist'); ?></option><option value='Neurologist'><?php echo $this->lang->line('msg_neurologist'); ?></option><option value='Other Specialisations'><?php echo $this->lang->line('msg_other_specialisations'); ?></option>");

        } else if (val2 == "Techinician") {
            $("#subcategory").html("<option value='Electrical'><?php echo $this->lang->line('msg_electrical'); ?></option><option value='Electronics'><?php echo $this->lang->line('msg_electronics'); ?></option><option value='Tailoring'><?php echo $this->lang->line('msg_tailoring'); ?></option><option value='Water Pumps'><?php echo $this->lang->line('msg_water_pumps'); ?></option><option value='Mechanics'><?php echo $this->lang->line('msg_mechanics'); ?></option><option value='Other Technicians'><?php echo $this->lang->line('msg_other_technicians'); ?></option>");

        } else if (val2 == "Animal Keeping") {
            $("#subcategory").html("<option value='Beef'><?php echo $this->lang->line('msg_beef'); ?></option><option value='Milk'><?php echo $this->lang->line('msg_milk'); ?></option><option value='Chickens'><?php echo $this->lang->line('msg_chicken'); ?></option>");

        } else if (val2 == "Shop") {
            $("#subcategory").html("<option value='Clothes'><?php echo $this->lang->line('msg_clothes'); ?></option><option value='Shoes'><?php echo $this->lang->line('msg_shoes'); ?></option><option value='Other Shops'><?php echo $this->lang->line('msg_othershops'); ?></option>");

        } else if (val2 == "Saloon") {
            $("#subcategory").html("<option value='Barber Shop'><?php echo $this->lang->line('msg_barbershop'); ?></option><option value='Hair Dressers'><?php echo $this->lang->line('msg_hair_dressers'); ?></option>");

        } else if (val2 == "School") {
            $("#subcategory").html("<option value='Primary'><?php echo $this->lang->line('msg_primary'); ?></option><option value='Secondary'><?php echo $this->lang->line('msg_secondary'); ?></option>");

        } else  {
            $("#subcategory").html("<option value='N/A'>N/A</option>");

        }
    });

     //============== Country =========
     $("#country").change(function() {
        var val = $(this).val();
        if (val == "Tanzania") {
            $("#region").html("<select class=' field-select input-sm1' name='region' id='' required=''> <option value='Arusha' selected>Arusha</option>  <option value='Dar es Salaam'>Dar es Salaam</option>    <option value='Dodoma'>Dodoma</option>  <option value='Geita'>Geita</option>    <option value='Iringa'>Iringa</option>  <option value='Kagera'>Kagera</option>  <option value='Kigoma'>Kigoma</option>  <option value='Kilimanjaro'>Kilimanjaro</option>    <option value='Lindi'>Lindi</option>    <option value='Manyara'>Manyara</option>    <option value='Mara'>Mara</option>  <option value='Mbeya'>Mbeya</option>    <option value='Morogoro'>Morogoro</option>  <option value='Mtwara'>Mtwara</option>  <option value='Mwanza'>Mwanza</option>  <option value='Pemba'>Pemba</option>    <option value='Pwani'>Pwani</option>    <option value='Rukwa'>Rukwa</option>    <option value='Ruvuma'>Ruvuma</option>  <option value='Shinyanga'>Shinyanga</option>    <option value='Simiyu'>Simiyu</option>  <option value='Singida'>Singida</option>    <option value='Songwe'>Songwe</option>  <option value='Tabora'>Tabora</option>  <option value='Tanga'>Tanga</option>   <option value='Pemba North'>Pemba North</option>   <option value='Pemba South'>Pemba South</option>     <option value='Zanzibar North'>Zanzibar North</option>   <option value='Zanzibar Central/South'>Zanzibar Central/South</option>   <option value='Zanzibar Urban/West'>Zanzibar Urban/West</option>   </select>");
        } else  {
            $("#region").html("<input type='text'  class='field-long' name='region' value='' placeholder='<?php //echo $this->lang->line('msg_enter_phone_number'); ?>Enter City/ State Here'   required=''>");
        } 
    });

});

</script>