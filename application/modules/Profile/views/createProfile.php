<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css//normalize.css');?>" /> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/demo.css');?>" /> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabs.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabstyles.css');?>" />
<script src="<?php echo base_url('assets/js/modernizr.custom.js');?>"></script>
<!--  search inputs top -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php echo base_url('assets/js/myJs/profilesch1.js');?>" type="text/javascript"></script> 


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

  <?php
     $services = modules::load('Profile')->get_where_custom_tb('services', 'status', "Active");
  ?>


    <div class="row" style="margin: 5px 5px 5px 5px">
        <div class="col-md-8" style="background-color: #fff; border-right: 1px solid lightgray; border-bottom: 1px solid lightgray; border-left: 1px solid lightgray; border-top: 1px solid lightgray;">
                           
                         <form class="form-style-1" action="<?php echo base_url('Profile/createProfile')?>" method="post" enctype="multipart/form-data">
                           <div class="box-body" style="text-align: left;">

                            <div class="row">
                                <div class="col-md-12 sitecolor1" style="font-size: 28px; text-align: center; padding-top: 10px; padding-bottom: 10px; background-color: #F4F4F4;">
                                    <b class="sitecolor1"><?php echo $this->lang->line('msg_create_new_profile'); ?></b>
                                     <!-- <hr>  -->    
                                </div>  
                                   <div class="col-md-12"  style="text-align: center; font-size: 14px;">
                                     <b style="color: <?php echo $color;?>;"><?php echo $msg;?></b>

                                    </div>
                                     <h4><b>Profile Name & Image</b></h4>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('msg_profile_name'); ?><span class="required">*</span></label>
                                                <input type="text" class="form-control  field-long input-sm1" name="pname" value="" placeholder="<?php echo $this->lang->line('msg_enter_profile_name'); ?>"  required="">
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('msg_profile_image'); ?> </label>
                                                <input type="file"  class="form-control" name="img" accept=".gif, .jpg, .png" value="" placeholder="<?php echo $this->lang->line('msg_choose_file'); ?>"   required1="">
                                            </div>
                                          </div>
                                    </div>
                            </div>
                               
                            <div class="row">
                                <hr>
                                <h4><b>Profile Type & Category</b></h4> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('msg_profile_type'); ?><span class="required">*</span></label>
                                        <select class=" field-select input-sm1" name="type" id="type" required="">
                                           <option value="Other"><?php echo $this->lang->line('msg_select_profile_type'); ?></option>
                                            <?php foreach ($services->result() as $row1): ?>
                                              <option value="<?php echo $row1->id;?>"><?php echo $row1->service;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('msg_profile_category'); ?><span class="required">*</span></label>
                                        <select class="field-select" name="cat" id="category" required="">
                                            <option value="Other"><?php echo $this->lang->line('msg_select_profile_category'); ?></option>
                                            <?php foreach ($services->result() as $row2): ?>
                                              <option value="<?php echo $row2->service;?>"><?php echo $row2->service;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('msg_profile_sub_category'); ?><span class="required">*</span></label>
                                        <select class="form-control" name="subcat" id="subcategory" required="">
                                            <option value="Other"><?php echo $this->lang->line('msg_select_profile_subcategory'); ?></option>
                                            <?php foreach ($services->result() as $row3): ?>
                                              <option value="<?php echo $row3->service;?>"><?php echo $row3->service;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                     </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <hr>
                                 <h4><b>Profile Contact Information</b></h4>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label><?php echo $this->lang->line('msg_phone_number'); ?><span class="required">*</span></label>
                                            <input type="number"  class="field-long" name="phone" value="" placeholder="<?php //echo $this->lang->line('msg_enter_phone_number'); ?>"   required="">
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label><?php echo $this->lang->line('msg_alt_phone_number'); ?></label>
                                            <input type="number"  class="field-long" name="altphone" value="" placeholder="<?php //echo $this->lang->line('msg_enter_alt_phone_number'); ?>"   >
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group field-select">
                                            <label><?php echo $this->lang->line('msg_email_address'); ?><span class="required">*</span></label>
                                            <input type="email"  class="field-long" name="email" value="" placeholder="<?php //echo $this->lang->line('msg_enter_email_address'); ?>"   required="">
                                        </div>
                                      </div>
                                </div>
                            </div>

                            <div class="row">
                                <hr>
                                <h4><b>Profile Location Information</b></h4>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><?php //echo $this->lang->line('msg_profile_type'); ?> Country<span class="required">*</span></label>
                                        <select class=" field-select input-sm1" name="country" id="country" required="">
                                           <option value="Other"><?php //echo $this->lang->line('msg_select_profile_type'); ?></option>
                                           <!-- <option value="empty" selected="" >Select Country</option> -->
                                            <option value="Tanzania"  selected="">Tanzania</option>
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
                                            <select class=' field-select input-sm1' name='region' id='' required=''> <option value='Arusha' selected>Arusha</option>  <option value='Dar es Salaam'>Dar es Salaam</option>    <option value='Dodoma'>Dodoma</option>  <option value='Geita'>Geita</option>    <option value='Iringa'>Iringa</option>  <option value='Kagera'>Kagera</option>  <option value='Kigoma'>Kigoma</option>  <option value='Kilimanjaro'>Kilimanjaro</option>    <option value='Lindi'>Lindi</option>    <option value='Manyara'>Manyara</option>    <option value='Mara'>Mara</option>  <option value='Mbeya'>Mbeya</option>    <option value='Morogoro'>Morogoro</option>  <option value='Mtwara'>Mtwara</option>  <option value='Mwanza'>Mwanza</option>  <option value='Pemba'>Pemba</option>    <option value='Pwani'>Pwani</option>    <option value='Rukwa'>Rukwa</option>    <option value='Ruvuma'>Ruvuma</option>  <option value='Shinyanga'>Shinyanga</option>    <option value='Simiyu'>Simiyu</option>  <option value='Singida'>Singida</option>    <option value='Songwe'>Songwe</option>  <option value='Tabora'>Tabora</option>  <option value='Tanga'>Tanga</option>    <option value='Pemba North'>Pemba North</option>   <option value='Pemba South'>Pemba South</option>     <option value='Zanzibar North'>Zanzibar North</option>   <option value='Zanzibar Central/South'>Zanzibar Central/South</option>     <option value='Zanzibar Urban/West'>Zanzibar Urban/West</option>  </select>
                                        </div>
                                        <!-- <select class="field-select" name="region" id="region" required="">
                                            <option value="Other"><?php echo $this->lang->line('msg_select_profile_category'); ?></option>
                                        </select> -->
                                     </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label><?php echo $this->lang->line('msg_physical_address'); ?><span class="required">*</span></label>
                                            <input type="text"  class="field-long" name="phyaddress" value="" placeholder="<?php //echo $this->lang->line('msg_enter_physical_address'); ?>"   required="">
                                        </div>
                                      </div>
                                </div>  
                            </div>

                            <div class="row">
                                <hr>
                                <h4><b>Profile Description (More Details) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-info btn-sm " name="editBtn" value="" data-toggle="tooltip"  title="" data-original-title="Maelezo kuhusu profaili: Tafadhari eleza kwa ufupi kuhusu ujuzi na uzoefu wako pamoja na mfano/ mifano ya kazi ulizokwishafanya au unazozifanya. "><i class="fa fa-info" style="border-radius: 50%;"></i></button></b></h4> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <!-- <label><?php echo $this->lang->line('msg_prifile_description'); ?> &nbsp;&nbsp;&nbsp; <b style="color: red;">*</b>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-info btn-sm " name="editBtn" value="" data-toggle="tooltip"  title="" data-original-title="Maelezo kuhusu profaili: Tafadhari eleza kwa ufupi kuhusu ujuzi na uzoefu wako pamoja na mfano/ mifano ya kazi ulizokwishafanya au unazozifanya. "><i class="fa fa-info" style="border-radius: 50%;"></i></button></label> -->
                                            <!-- <label><?php echo $this->lang->line('msg_prifile_description'); ?> &nbsp;&nbsp;&nbsp; <b style="color: red;">*</b>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label> -->
                                            <textarea name="desc" rows="4" class="textarea field-long field-textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required=""> </textarea>
                                        </div>
                                      </div>
                                </div>
                            </div>

                              <div class="row">
                                 <div class="col-md-12" style="text-align: center; font-size: 14px;">
                                 <br>
                                 <b style="color: <?php echo $color;?>;"><?php echo $msg;?></b>
                                </div>
                                 </div>  

                                  <button type="submit" name="regBtn" value="ok" class="btn btn-info btn-lg pull-right">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                  <hr>
                                </div><!-- /.box-body -->
                               </form>  


                               <!-- <?php //echo $this->lang->line('msg_'); ?> -->



                               <!-- <form>
                                <ul class="form-style-1">
                                    <li><label>Full Name <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="First" />&nbsp;<input type="text" name="field2" class="field-divided" placeholder="Last" /></li>
                                    <li>
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" name="field3" class="field-long" />
                                    </li>
                                    <li>
                                        <label>Subject</label>
                                        <select name="field4" class="field-select">
                                        <option value="Advertise">Advertise</option>
                                        <option value="Partnership">Partnership</option>
                                        <option value="General Question">General</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label>Your Message <span class="required">*</span></label>
                                        <textarea name="field5" id="field5" class="field-long field-textarea"></textarea>
                                    </li>
                                    <li>
                                        <input type="submit" value="Submit" />
                                    </li>
                                </ul>
                                </form>
 -->


                       
        </div>


         <div class="col-md-4">
            <h4 class="sitecolor2"><B>Quick Actions</B></b></h4> 
            <hr>
            <a href="<?php echo base_url('Profile/managemyProfiles');?>" class="btn bg-aqua btn-lg btn-social"><i class="fa fa-user"></i> <span><?php echo $this->lang->line('msg_my_profile'); ?></span></a> <br> <br>
            <a href="<?php echo base_url('Profile/createProfile');?>" class="btn bg-aqua btn-lg btn-social"><i class="fa fa-user"></i> <span><?php echo $this->lang->line('msg_new_profile'); ?></span></a> <br> <br>
            <a href="<?php echo base_url('Appointment/profileTimetable');?>" class="btn bg-aqua btn-lg btn-social"><i class="fa fa-calendar"></i> <span>update availability</span></a> <br> <br>
            <a href="<?php echo base_url('Chat/manageComments');?>" class="btn bg-aqua btn-lg btn-social"><i class="fa fa-comment"></i> <span>My Comments</span></a> <br> <br>
         </div>
    </div>
<br>











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
            $("#category").html("<option value='Other'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Teacher'><?php echo $this->lang->line('msg_teacher'); ?></option><option value='Doctor'><?php echo $this->lang->line('msg_doctor'); ?></option><option value='Techinician'><?php echo $this->lang->line('msg_technician'); ?></option><option value='Animal Keeping'><?php echo $this->lang->line('msg_animal_keeper'); ?></option><option value='Agriculturist'><?php echo $this->lang->line('msg_farming_expert'); ?></option><option value='Lawyor'><?php echo $this->lang->line('msg_lawyer'); ?></option><option value='Nurse'><?php echo $this->lang->line('msg_nurse'); ?></option><option value='Burser'><?php echo $this->lang->line('msg_bursar'); ?></option><option value='Sychologist'><?php echo $this->lang->line('msg_psychologist'); ?></option><option value='Translator'><?php echo $this->lang->line('msg_translator'); ?></option><option value='Interpreter'><?php echo $this->lang->line('msg_interpretor'); ?></option><option value='Programmer'><?php echo $this->lang->line('msg_programmer'); ?></option><option value='Blogger'><?php echo $this->lang->line('msg_blogger'); ?></option><option value='Master Ceremony'><?php echo $this->lang->line('msg_master_of_ceremony'); ?></option><option value='Driver'><?php echo $this->lang->line('msg_driver'); ?></option><option value='Broker'><?php echo $this->lang->line('msg_brocker'); ?></option><option value='Security Guard'><?php echo $this->lang->line('msg_security_guard'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_works'); ?></option>");
        } else if (val == "ENTREPRENEUR") {
            $("#category").html("<option value='Other'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Archtect'><?php echo $this->lang->line('msg_archtect'); ?></option><option value='Shop'><?php echo $this->lang->line('msg_shop'); ?></option><option value='Packing'><?php echo $this->lang->line('msg_parking'); ?></option><option value='Car Wash'><?php echo $this->lang->line('msg_car_wash'); ?></option><option value='Garage'><?php echo $this->lang->line('msg_garage'); ?></option><option value='Bar'><?php echo $this->lang->line('msg_bar'); ?></option><option value='Saloon'><?php echo $this->lang->line('msg_salon'); ?></option><option value='Bakery'><?php echo $this->lang->line('msg_bakery'); ?></option><option value='Broker'><?php echo $this->lang->line('msg_brocker'); ?></option><option value='Driver'><?php echo $this->lang->line('msg_driver'); ?></option><option value='Tution Center'><?php echo $this->lang->line('msg_tuition_centre'); ?></option><option value='Day care'><?php echo $this->lang->line('msg_day_care'); ?></option><option value='School'><?php echo $this->lang->line('msg_school'); ?></option><option value='Guest House'><?php echo $this->lang->line('msg_guest_house'); ?></option><option value='Hotel'><?php echo $this->lang->line('msg_hotel'); ?></option><option value='Cafe'><?php echo $this->lang->line('msg_restaurant'); ?></option><option value='Company'><?php echo $this->lang->line('msg_company'); ?></option><option value='Butcher'><?php echo $this->lang->line('msg_butcher'); ?></option><option value='Online Marketer'><?php echo $this->lang->line('msg_online_marketers'); ?></option><option value='Insurance'><?php echo $this->lang->line('msg_insurance'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_business_works'); ?></option>");

        } else if (val == "POLITICIAN") {
            $("#category").html("<option value='Other'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='President'>President</option><option value='Member of Pariament (MP)'>Member of Pariament (MP)</option><option value='Diwani'>Diwani</option><option value='Chairman'>Chairman</option><option value='Periament Speaker'>Periament Speaker</option><option value='Other Position'>Other Position</option>");

        } else if (val == "OTHERS") {
            $("#category").html("<option value='Other'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Other'>Other</option>");   
            /*<?php echo $this->lang->line('msg_'); ?>*/
        } else if (val == "Other") {
            $("#category").html("<option value='Other'>Select category1</option>");

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
            $("#subcategory").html("<option value='Other'>Other</option>");

        }
    });

    //============== Country =========
     $("#country").change(function() {
        var val = $(this).val();
        if (val == "Tanzania") {
            $("#region").html("<select class=' field-select input-sm1' name='region' id='' required=''> <option value='Arusha' selected>Arusha</option>  <option value='Dar es Salaam'>Dar es Salaam</option>    <option value='Dodoma'>Dodoma</option>  <option value='Geita'>Geita</option>    <option value='Iringa'>Iringa</option>  <option value='Kagera'>Kagera</option>  <option value='Kigoma'>Kigoma</option>  <option value='Kilimanjaro'>Kilimanjaro</option>    <option value='Lindi'>Lindi</option>    <option value='Manyara'>Manyara</option>    <option value='Mara'>Mara</option>  <option value='Mbeya'>Mbeya</option>    <option value='Morogoro'>Morogoro</option>  <option value='Mtwara'>Mtwara</option>  <option value='Mwanza'>Mwanza</option>  <option value='Pemba'>Pemba</option>    <option value='Pwani'>Pwani</option>    <option value='Rukwa'>Rukwa</option>    <option value='Ruvuma'>Ruvuma</option>  <option value='Shinyanga'>Shinyanga</option>    <option value='Simiyu'>Simiyu</option>  <option value='Singida'>Singida</option>    <option value='Songwe'>Songwe</option>  <option value='Tabora'>Tabora</option>  <option value='Tanga'>Tanga</option>   <option value='Pemba North'>Pemba North</option>   <option value='Pemba South'>Pemba South</option>     <option value='Zanzibar North'>Zanzibar North</option>   <option value='Zanzibar Central/South'>Zanzibar Central/South</option>   <option value='Zanzibar Urban/West'>Zanzibar Urban/West</option>     </select>");
        } else  {
            $("#region").html("<input type='text'  class='field-long' name='region' value='' placeholder='<?php //echo $this->lang->line('msg_enter_phone_number'); ?>Enter City/ State Here'   required=''>");
        } 
    });

});

</script>