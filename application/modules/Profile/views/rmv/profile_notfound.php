<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css//normalize.css');?>" /> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/demo.css');?>" /> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabs.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tabstyles.css');?>" />
<script src="<?php echo base_url('assets/js/modernizr.custom.js');?>"></script>
<!--  search inputs top -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="<?php echo base_url('assets/js/myJs/profilesch1.js');?>" type="text/javascript"></script> 

<!-- <?php echo $this->lang->line('msg_'); ?> -->

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
				<li class="tab-current" ><a href="#section-iconbox-1" class="fa fa-users"><b style="font-size: 22px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_nfd_profile'); ?></b></a></li>
				<li class=""><a href="#section-iconbox-2" class="fa fa-search"><b style="font-size: 22px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_nfd_search'); ?></b></a></li>
				<!-- <li class=""><a href="#section-iconbox-3" class="fa fa-upload"><span>Upload</span></a></li>
				<li class=""><a href="#section-iconbox-4" class="fa fa-coffee"><span>Work</span></a></li>
				<li class=""><a href="#section-iconbox-5" class="fa fa-config"><span>Settings</span></a></li> -->
			</ul>
		</nav>
		<div class="content-wrap">
			<section id="section-iconbox-1" class="content-current" >
				<br>
                <p><?php echo $this->lang->line('msg_nfd_nfd'); ?></p>
                <b>...</b>	
			</section>



			<section id="section-iconbox-2" class="">
             <div class="wow animated bounce">
			  <form class="form-style-1" action="<?php echo base_url('Profile/profileList')?>" method="post">
                <div  style="padding: 80px 20% 30px 20%;" class="row " >
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?php echo $this->lang->line('msg_nfd_ptofile_type'); ?><span class="required">*</span></label>
                            <select class=" field-select" name="type" id="type" required="">
                                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_type'); ?></option>
                                <option value="PROFESSIONAL"><?php echo $this->lang->line('msg_professionals'); ?></option>
                                <option value="ENTREPRENEUR"><?php echo $this->lang->line('msg_entrepreneurs'); ?></option>
                                <!-- <option value="BUSINESS MAN">BUSINESS MAN</option> -->
                                <!-- <option value="POLITICIAN">POLITICIAN</option> -->
                                <option value="OTHERS"><?php echo $this->lang->line('msg_others'); ?></option>
                              </select>
                        </div>
                    </div>
               
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?php echo $this->lang->line('msg_nfd_profile_cat'); ?><span class="required">*</span></label>
                            <select class=" field-select" name="category" id="category" required="">
                                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_category'); ?></option>
                            </select>
                        </div>
                    </div>
                
                    <div class="col-md-4">
                        <div class="form-group">
                            <label><?php echo $this->lang->line('msg_nfd_profile_subcat'); ?><span class="required">*</span></label>
                            <select class=" field-select" name="subcategory" id="subcategory" required="">
                                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_subcategory'); ?></option>
                            </select>
                        </div>
                    </div>


                    

                </div>

                <div class="row">
                    <div class="col-md-12 col-centered">
                      <button style="opacity: 0.9px !important;" type="submit" class="btn btn-danger btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $this->lang->line('msg_nfd_searchBtb'); ?></b>&nbsp;&nbsp; <i class="fa fa-search"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>


              </form>

              <p>..</p>

              </div>

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
            $("#category").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Teacher'><?php echo $this->lang->line('msg_teacher'); ?></option><option value='Doctor'><?php echo $this->lang->line('msg_doctor'); ?></option><option value='Techinician'><?php echo $this->lang->line('msg_technician'); ?></option><option value='Animal Keeping'><?php echo $this->lang->line('msg_animal_keeper'); ?></option><option value='Agriculturist'><?php echo $this->lang->line('msg_farming_expert'); ?></option><option value='Lawyor'><?php echo $this->lang->line('msg_lawyer'); ?></option><option value='Nurse'><?php echo $this->lang->line('msg_nurse'); ?></option><option value='Burser'><?php echo $this->lang->line('msg_bursar'); ?></option><option value='Sychologist'><?php echo $this->lang->line('msg_psychologist'); ?></option><option value='Translator'><?php echo $this->lang->line('msg_translator'); ?></option><option value='Interpreter'><?php echo $this->lang->line('msg_interpretor'); ?></option><option value='Programmer'><?php echo $this->lang->line('msg_programmer'); ?></option><option value='Blogger'><?php echo $this->lang->line('msg_blogger'); ?></option><option value='Master Ceremony'><?php echo $this->lang->line('msg_master_of_ceremony'); ?></option><option value='Driver'><?php echo $this->lang->line('msg_driver'); ?></option><option value='Brocker'><?php echo $this->lang->line('msg_brocker'); ?></option><option value='Security Guard'><?php echo $this->lang->line('msg_security_guard'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_works'); ?></option>");
        } else if (val == "ENTREPRENEUR") {
            $("#category").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Archtect'><?php echo $this->lang->line('msg_archtect'); ?></option><option value='Shop'><?php echo $this->lang->line('msg_shop'); ?></option><option value='Packing'><?php echo $this->lang->line('msg_parking'); ?></option><option value='Car Wash'><?php echo $this->lang->line('msg_car_wash'); ?></option><option value='Garage'><?php echo $this->lang->line('msg_garage'); ?></option><option value='Bar'><?php echo $this->lang->line('msg_bar'); ?></option><option value='Saloon'><?php echo $this->lang->line('msg_salon'); ?></option><option value='Bakery'><?php echo $this->lang->line('msg_bakery'); ?></option><option value='Tution Center'><?php echo $this->lang->line('msg_tuition_centre'); ?></option><option value='Day care'><?php echo $this->lang->line('msg_day_care'); ?></option><option value='School'><?php echo $this->lang->line('msg_school'); ?></option><option value='Guest House'><?php echo $this->lang->line('msg_guest_house'); ?></option><option value='Hotel'><?php echo $this->lang->line('msg_hotel'); ?></option><option value='Cafe'><?php echo $this->lang->line('msg_restaurant'); ?></option><option value='Company'><?php echo $this->lang->line('msg_company'); ?></option><option value='Butcher'><?php echo $this->lang->line('msg_butcher'); ?></option><option value='Online Marketer'><?php echo $this->lang->line('msg_online_marketers'); ?></option><option value='Insurance'><?php echo $this->lang->line('msg_insurance'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_business_works'); ?></option>");

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
            $("#subcategory").html("<option value='Mathematics'>Mathematics</option><option value='Physics'>Physics</option><option value='Chemistry'>Chemistry</option><option value='Biology'>Biology</option><option value='History'>History</option><option value='Kiswahili'>Kiswahili</option><option value='English'>English</option><option value='Kiswahili for Foreigners'>Kiswahili for Foreigners</option><option value='Geography'>Geography</option><option value='Accounts'>Accounts</option><option value='Uchumi'>Uchumi</option><option value='Other Subjects'>Other Subjects</option>");
        } else if (val2 == "Doctor") {
            $("#subcategory").html("<option value='one Specialist'>None Specialist</option><option value='Children'>Children</option><option value='Mothers'>Mothers</option><option value='Skin'>Skin</option><option value='Bones'>Bones</option><option value='Muscles'>Muscles</option><option value='Hearts'>Hearts</option><option value='Operations'>Operations</option>");

        } else if (val2 == "Techinician") {
            $("#subcategory").html("<option value='Water Pumps'>Water Pumps</option><option value='Electronics'>Electronics</option><option value='Mechanics'>Mechanics</option><option value='Electrical'>Electrical</option><option value='Clothes'>Clothes</option>");

        } else if (val2 == "Animal Keeping") {
            $("#subcategory").html("<option value='Beef'>Beef</option><option value='Milk'>Milk</option><option value='Chickens (Kuku)'>Chickens (Kuku)</option>");

        } else if (val2 == "Shop/ Market") {
            $("#subcategory").html("<option value='Clothes'>Clothes</option><option value='Shoes'>Shoes</option><option value='Electronics'>Electronics</option><option value='Others'>Others</option>");

        } else if (val2 == "Saloon") {
            $("#subcategory").html("<option value='Baba Shop'>Baba Shop</option><option value='Ladies Saloon'>Ladies Saloon</option>");

        } else if (val2 == "School") {
            $("#subcategory").html("<option value='Primary'>Primary</option><option value='Secondary'>Secondary</option>");

        } else  {
            $("#subcategory").html("<option value='N/A'>N/A</option>");

        }
    });

});

</script>