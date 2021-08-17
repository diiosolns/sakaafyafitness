<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<!--  search inputs top -->
<script src="<?php echo base_url('assets/js/myJs/profilesch1.js');?>" type="text/javascript"></script> 
<style type="text/css">
  .searchin {
    font-size: 22px;
    padding-left: 10px;
    padding-top: 2px;
    padding-bottom: 2px;
   /* border-radius: 10px;*/
  }

  .searchbtn {
    font-size: 22px;
    padding-top: 2px;
    padding-bottom: 2px;
  }

  .searchin2 {
    font-size: 18px;
    padding-left: 10px;
    padding-top: 2px;
    padding-bottom: 2px;
   /* border-radius: 10px;*/
  }

  .searchbtn2 {
    font-size: 18px;
    padding-top: 2px;
    padding-bottom: 2px;
  }

</style>

<!-- <?php echo $this->lang->line('msg_'); ?> -->

<!-- =================CAROUSELE START (LARGE DEVICES)==================== --> 
 <div id="myCarousel" class="carousel slide hidden-xs hidden-sm" data-ride="carousel" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
       <img src="<?php echo base_url('assets/img/slider/photo/slider_01.jpg');?>" width="1366px" height="700px">
      <!-- <div class="carousel-caption hidden-xs" style="text-align: center;"> -->
        <div class="carousel-caption  animated fadeInUp" style="text-align: center;">
        <h3><?php echo $this->lang->line('msg_large_caption'); ?></h3>
        <p><?php echo $this->lang->line('msg_small_caption'); ?></p>
        <div class="homesch">
         <form class="form-style-1" action="<?php echo base_url('Api/getProfileList')?>" method="post">
          <div class="row">
           <div class="col-md-4" style="opacity: 1;">
              <select  class="form-control input-md" name="type" id="type" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_type'); ?></option>
                <option value="PROFESSIONAL"><?php echo $this->lang->line('msg_professionals'); ?></option>
                <option value="ENTREPRENEUR"><?php echo $this->lang->line('msg_entrepreneurs'); ?></option>
                <!-- <option value="BUSINESS MAN"><?php //echo $this->lang->line('msg_businessman'); ?></option> -->
                <!-- <option value="POLITICIAN">POLITICIAN</option> -->
                <option value="OTHERS"><?php echo $this->lang->line('msg_others'); ?></option>
              </select>
            </div>  
            <div class="col-md-4">
              <select class="form-control input-md" name="category" id="category" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_category'); ?></option>
              </select>
            </div> 
            <div class="col-md-4 ">
              <select class="form-control input-md" name="subcategory" id="subcategory" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_subcategory'); ?></option>
              </select>
            </div> 
            <div class="col-md-12" style="margin-top: 20px;">
              <button style="opacity: 1 !important;" type="submit" class="btn btn-danger btn-md">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $this->lang->line('msg_search_profile'); ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i></button>
            </div>
        </div>
        </form>
       </div>
      </div>
    </div>


    <div class="item">
       <img src="<?php echo base_url('assets/img/slider/photo/slider_02.jpg');?>" width="1366px" height="700px">
      <!-- <div class="carousel-caption hidden-xs" style="text-align: center;"> -->
        <div class="carousel-caption  animated fadeInUp" style="text-align: center;">
        <h3><?php echo $this->lang->line('msg_large_caption'); ?></h3>
        <p><?php echo $this->lang->line('msg_small_caption'); ?></p>
        <div class="homesch">
         <form class="form-style-1" action="<?php echo base_url('Api/getProfileList')?>" method="post">
          <div class="row">
           <div class="col-md-4" style="opacity: 1;">
              <select  class="form-control input-md" name="type" id="type1" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_type'); ?></option>
                <option value="PROFESSIONAL"><?php echo $this->lang->line('msg_professionals'); ?></option>
                <option value="ENTREPRENEUR"><?php echo $this->lang->line('msg_entrepreneurs'); ?></option>
                <!-- <option value="BUSINESS MAN"><?php //echo $this->lang->line('msg_businessman'); ?></option> -->
                <!-- <option value="POLITICIAN">POLITICIAN</option> -->
                <option value="OTHERS"><?php echo $this->lang->line('msg_others'); ?></option>
              </select>
            </div>  
            <div class="col-md-4">
              <select class="form-control input-md" name="category" id="category1" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_category'); ?></option>
              </select>
            </div> 
            <div class="col-md-4 ">
              <select class="form-control input-md" name="subcategory" id="subcategory1" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_subcategory'); ?></option>
              </select>
            </div> 
            <div class="col-md-12" style="margin-top: 20px;">
              <button style="opacity: 1 !important;" type="submit" class="btn btn-danger btn-md">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $this->lang->line('msg_search_profile'); ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i></button>
            </div>
        </div>
        </form>
       </div>
      </div>
    </div>



    <div class="item ">
       <img src="<?php echo base_url('assets/img/slider/photo/slider_03.jpg');?>" width="1366px" height="700px">
      <!-- <div class="carousel-caption hidden-xs" style="text-align: center;"> -->
        <div class="carousel-caption  animated fadeInUp" style="text-align: center;">
        <h3><?php echo $this->lang->line('msg_large_caption'); ?></h3>
        <p><?php echo $this->lang->line('msg_small_caption'); ?></p>
        <div class="homesch">
         <form class="form-style-1" action="<?php echo base_url('Api/getProfileList')?>" method="post">
          <div class="row">
           <div class="col-md-4" style="opacity: 1;">
              <select  class="form-control input-md" name="type" id="type2" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_type'); ?></option>
                <option value="PROFESSIONAL"><?php echo $this->lang->line('msg_professionals'); ?></option>
                <option value="ENTREPRENEUR"><?php echo $this->lang->line('msg_entrepreneurs'); ?></option>
                <!-- <option value="BUSINESS MAN"><?php //echo $this->lang->line('msg_businessman'); ?></option> -->
                <!-- <option value="POLITICIAN">POLITICIAN</option> -->
                <option value="OTHERS"><?php echo $this->lang->line('msg_others'); ?></option>
              </select>
            </div>  
            <div class="col-md-4">
              <select class="form-control input-md" name="category" id="category2" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_category'); ?></option>
              </select>
            </div> 
            <div class="col-md-4 ">
              <select class="form-control input-md" name="subcategory" id="subcategory2" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_subcategory'); ?></option>
              </select>
            </div> 
            <div class="col-md-12" style="margin-top: 20px;">
              <button style="opacity: 1 !important;" type="submit" class="btn btn-danger btn-md">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $this->lang->line('msg_search_profile'); ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i></button>
            </div>
        </div>
        </form>
       </div>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- ==============  LARGE DEVICES END================= -->



<!-- =================CAROUSELE START (SMALL DEVICES)==================== --> 
 <div id="mysCarousel" class="carousel slide hidden-md hidden-lg" data-ride="carousel" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
   <!--  <li data-target="#mysCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mysCarousel" data-slide-to="1"></li>
    <li data-target="#mysCarousel" data-slide-to="2"></li> -->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
       <img src="<?php echo base_url('assets/img/slider/photo/slider_04s.jpeg');?>" width="100%" height="auto">
      <!-- <div class="carousel-caption hidden-xs" style="text-align: center;"> -->
        <div class="carousel-caption2  animated fadeInUp" style="text-align: center; width: 100% !important; margin-left: 0 !important; padding-left: 0 !important; ">
        <h3><?php echo $this->lang->line('msg_large_caption'); ?></h3>
       <!--  <p><?php echo $this->lang->line('msg_small_caption'); ?></p> -->
        <div class="homesch">
         <form class="form-style-1" action="<?php echo base_url('Api/getProfileSearchList')?>" method="post">
          <div class="row">
             <div class="col-md-8 col-sm-12 col-xs-12" style1="opacity: 1;">
              <div class="form-group" >
                  <input type="text"  class="field-long searchin2" name="searchkeyword" value="" placeholder="Who are you looking for?<?php //echo $this->lang->line('msg_search_keyword'); ?>" style="width: 100%; border-radius: 25px;"   required=""  >
              </div>                       
            </div>  
            <div class="col-md-4  col-sm-12 col-xs-12" style1="margin-top: 20px;">
              <button style="opacity: 1 !important;" type="submit" name="searchBtn" value="OK" class="btn btn-danger btn-md searchbtn2 ">&nbsp;&nbsp;<b><?php echo $this->lang->line('msg_search_profile'); ?></b>&nbsp;&nbsp;<i class="fa fa-search"></i></button>
            </div>
        </div>
        </form>
       </div>
           <br> <br> <br> <br> <hr>
      </div>

    </div>



    <!-- <div class="item">
       <img src="<?php echo base_url('assets/img/slider/photo/slider_02s.jpg');?>" width="100%" height="auto">
        <div class="carousel-caption  animated fadeInUp" style="text-align: center;">
        <h3><?php echo $this->lang->line('msg_large_caption'); ?></h3>
        <div class="homesch">
         <form class="form-style-1" action="<?php echo base_url('Api/getProfileSearchList')?>" method="post">
          <div class="row">
           <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="opacity: 1; padding-bottom: 10px;">
              <select  class="form-control input-md" name="type" id="stype1" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_type'); ?></option>
                <option value="PROFESSIONAL"><?php echo $this->lang->line('msg_professionals'); ?></option>
                <option value="ENTREPRENEUR"><?php echo $this->lang->line('msg_entrepreneurs'); ?></option>
                <option value="OTHERS"><?php echo $this->lang->line('msg_others'); ?></option>
              </select>
            </div>  
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="opacity: 1; padding-bottom: 10px;">
              <select class="form-control input-md" name="category" id="scategory1" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_category'); ?></option>
              </select>
            </div> 
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="opacity: 1; padding-bottom: 10px;">
              <select class="form-control input-md" name="subcategory" id="ssubcategory1" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_subcategory'); ?></option>
              </select>
            </div> 
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="margin-top: 20px;">
              <button style="opacity: 1 !important;" type="submit" class="btn btn-danger btn-md">&nbsp;<b><?php echo $this->lang->line('msg_search_profile'); ?></b>&nbsp;<i class="fa fa-search"></i></button>
            </div>
        </div>
        </form>
       </div>
      </div>
    </div> -->



    <!-- <div class="item ">
       <img src="<?php echo base_url('assets/img/slider/photo/slider_03s.jpg');?>" width="100%" height="auto">        <div class="carousel-caption  animated fadeInUp" style="text-align: center;">
        <h3><?php echo $this->lang->line('msg_large_caption'); ?></h3>
        <div class="homesch">
         <form class="form-style-1" action="<?php echo base_url('Api/getProfileSearchList')?>" method="post">
          <div class="row">
           <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="opacity: 1; padding-bottom: 10px;">
              <select  class="form-control input-md" name="type" id="stype2" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_type'); ?></option>
                <option value="PROFESSIONAL"><?php echo $this->lang->line('msg_professionals'); ?></option>
                <option value="ENTREPRENEUR"><?php echo $this->lang->line('msg_entrepreneurs'); ?></option>
                <option value="OTHERS"><?php echo $this->lang->line('msg_others'); ?></option>
              </select>
            </div>  
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="opacity: 1; padding-bottom: 10px;">
              <select class="form-control input-md" name="category" id="scategory2" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_category'); ?></option>
              </select>
            </div> 
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="opacity: 1; padding-bottom: 10px;">
              <select class="form-control input-md" name="subcategory" id="ssubcategory2" required="">
                <option value="N/A"><?php echo $this->lang->line('msg_select_profile_subcategory'); ?></option>
              </select>
            </div> 
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="margin-top: 20px;">
              <button style="opacity: 1 !important;" type="submit" class="btn btn-danger btn-md">&nbsp;<b><?php echo $this->lang->line('msg_search_profile'); ?></b>&nbsp;<i class="fa fa-search"></i></button>
            </div>
        </div>
        </form>
       </div>
      </div>
    </div> -->
  </div>

  <!-- Left and right controls -->
  <!-- <a class="left carousel-control" href="#mysCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mysCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>

<!-- ==============  SMALL DEVICES END================= -->









<!-- =============== select input script (LARGE DEVICES) ============ -->
<!-- =============== select input script (LARGE DEVICES) ============ -->
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

});

</script>



<script type="text/javascript">
    $(document).ready(function() {

    $("#type1").change(function() {
        var val = $(this).val();
        if (val == "PROFESSIONAL") {
            $("#category1").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Teacher'><?php echo $this->lang->line('msg_teacher'); ?></option><option value='Doctor'><?php echo $this->lang->line('msg_doctor'); ?></option><option value='Techinician'><?php echo $this->lang->line('msg_technician'); ?></option><option value='Animal Keeping'><?php echo $this->lang->line('msg_animal_keeper'); ?></option><option value='Agriculturist'><?php echo $this->lang->line('msg_farming_expert'); ?></option><option value='Lawyor'><?php echo $this->lang->line('msg_lawyer'); ?></option><option value='Nurse'><?php echo $this->lang->line('msg_nurse'); ?></option><option value='Burser'><?php echo $this->lang->line('msg_bursar'); ?></option><option value='Sychologist'><?php echo $this->lang->line('msg_psychologist'); ?></option><option value='Translator'><?php echo $this->lang->line('msg_translator'); ?></option><option value='Interpreter'><?php echo $this->lang->line('msg_interpretor'); ?></option><option value='Programmer'><?php echo $this->lang->line('msg_programmer'); ?></option><option value='Blogger'><?php echo $this->lang->line('msg_blogger'); ?></option><option value='Master Ceremony'><?php echo $this->lang->line('msg_master_of_ceremony'); ?></option><option value='Driver'><?php echo $this->lang->line('msg_driver'); ?></option><option value='Brocker'><?php echo $this->lang->line('msg_brocker'); ?></option><option value='Security Guard'><?php echo $this->lang->line('msg_security_guard'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_works'); ?></option>");
        } else if (val == "ENTREPRENEUR") {
            $("#category1").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Archtect'><?php echo $this->lang->line('msg_archtect'); ?></option><option value='Shop'><?php echo $this->lang->line('msg_shop'); ?></option><option value='Packing'><?php echo $this->lang->line('msg_parking'); ?></option><option value='Car Wash'><?php echo $this->lang->line('msg_car_wash'); ?></option><option value='Garage'><?php echo $this->lang->line('msg_garage'); ?></option><option value='Bar'><?php echo $this->lang->line('msg_bar'); ?></option><option value='Saloon'><?php echo $this->lang->line('msg_salon'); ?></option><option value='Bakery'><?php echo $this->lang->line('msg_bakery'); ?></option><option value='Tution Center'><?php echo $this->lang->line('msg_tuition_centre'); ?></option><option value='Day care'><?php echo $this->lang->line('msg_day_care'); ?></option><option value='School'><?php echo $this->lang->line('msg_school'); ?></option><option value='Guest House'><?php echo $this->lang->line('msg_guest_house'); ?></option><option value='Hotel'><?php echo $this->lang->line('msg_hotel'); ?></option><option value='Cafe'><?php echo $this->lang->line('msg_restaurant'); ?></option><option value='Company'><?php echo $this->lang->line('msg_company'); ?></option><option value='Butcher'><?php echo $this->lang->line('msg_butcher'); ?></option><option value='Online Marketer'><?php echo $this->lang->line('msg_online_marketers'); ?></option><option value='Insurance'><?php echo $this->lang->line('msg_insurance'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_business_works'); ?></option>");

        } else if (val == "POLITICIAN") {
            $("#category1").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='President'>President</option><option value='Member of Pariament (MP)'>Member of Pariament (MP)</option><option value='Diwani'>Diwani</option><option value='Chairman'>Chairman</option><option value='Periament Speaker'>Periament Speaker</option><option value='Other Position'>Other Position</option>");

        } else if (val == "OTHERS") {
            $("#category1").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='N/A'>N/A</option>");   
            /*<?php echo $this->lang->line('msg_'); ?>*/
        } else if (val == "N/A") {
            $("#category1").html("<option value='N/A'>Select category1</option>");

        }
    });


   //===========sub element ===========
    $("#category1").change(function() {
        var val2 = $(this).val();
        if (val2 == "Teacher") {
            $("#subcategory1").html("<option value='Mathematics'><?php echo $this->lang->line('msg_mathematics'); ?></option><option value='Physics'><?php echo $this->lang->line('msg_physics'); ?></option><option value='Chemistry'><?php echo $this->lang->line('msg_chemistry'); ?></option><option value='Biology'><?php echo $this->lang->line('msg_biology'); ?></option><option value='History'><?php echo $this->lang->line('msg_history'); ?></option><option value='Kiswahili'><?php echo $this->lang->line('msg_kiswahili'); ?></option><option value='English'><?php echo $this->lang->line('msg_english'); ?></option><option value='Kiswahili for Foreigners'><?php echo $this->lang->line('msg_kiswahili_to_foreigners'); ?></option><option value='Geography'><?php echo $this->lang->line('msg_geography'); ?></option><option value='French'><?php echo $this->lang->line('msg_french'); ?></option><option value='Chinese'><?php echo $this->lang->line('msg_chinese'); ?></option><option value='Other Subjects'><?php echo $this->lang->line('msg_other_subjects'); ?></option>");
        } else if (val2 == "Doctor") {
            $("#subcategory1").html("<option value='Doctor'><?php echo $this->lang->line('msg_general_doctor'); ?></option><option value='Pediatrician'><?php echo $this->lang->line('msg_pediatrician'); ?></option><option value='Surgeon'><?php echo $this->lang->line('msg_surgeon'); ?></option><option value='Dermatologist'><?php echo $this->lang->line('msg_Dermatologist'); ?></option><option value='Gynecologist'><?php echo $this->lang->line('msg_gynecologist'); ?></option><option value='Psychiatric'><?php echo $this->lang->line('msg_psychiatric'); ?></option><option value='Cardiologist'><?php echo $this->lang->line('msg_cardiologist'); ?></option><option value='Neurologist'><?php echo $this->lang->line('msg_neurologist'); ?></option><option value='Other Specialisations'><?php echo $this->lang->line('msg_other_specialisations'); ?></option>");

        } else if (val2 == "Techinician") {
            $("#subcategory1").html("<option value='Electrical'><?php echo $this->lang->line('msg_electrical'); ?></option><option value='Electronics'><?php echo $this->lang->line('msg_electronics'); ?></option><option value='Tailoring'><?php echo $this->lang->line('msg_tailoring'); ?></option><option value='Water Pumps'><?php echo $this->lang->line('msg_water_pumps'); ?></option><option value='Mechanics'><?php echo $this->lang->line('msg_mechanics'); ?></option><option value='Other Technicians'><?php echo $this->lang->line('msg_other_technicians'); ?></option>");

        } else if (val2 == "Animal Keeping") {
            $("#subcategory1").html("<option value='Beef'><?php echo $this->lang->line('msg_beef'); ?></option><option value='Milk'><?php echo $this->lang->line('msg_milk'); ?></option><option value='Chickens'><?php echo $this->lang->line('msg_chicken'); ?></option>");

        } else if (val2 == "Shop") {
            $("#subcategory1").html("<option value='Clothes'><?php echo $this->lang->line('msg_clothes'); ?></option><option value='Shoes'><?php echo $this->lang->line('msg_shoes'); ?></option><option value='Other Shops'><?php echo $this->lang->line('msg_othershops'); ?></option>");

        } else if (val2 == "Saloon") {
            $("#subcategory1").html("<option value='Barber Shop'><?php echo $this->lang->line('msg_barbershop'); ?></option><option value='Hair Dressers'><?php echo $this->lang->line('msg_hair_dressers'); ?></option>");

        } else if (val2 == "School") {
            $("#subcategory1").html("<option value='Primary'><?php echo $this->lang->line('msg_primary'); ?></option><option value='Secondary'><?php echo $this->lang->line('msg_secondary'); ?></option>");

        } else  {
            $("#subcategory1").html("<option value='N/A'>N/A</option>");

        }
    });

});

</script>

<script type="text/javascript">
    $(document).ready(function() {

    $("#type2").change(function() {
        var val = $(this).val();
        if (val == "PROFESSIONAL") {
            $("#category2").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Teacher'><?php echo $this->lang->line('msg_teacher'); ?></option><option value='Doctor'><?php echo $this->lang->line('msg_doctor'); ?></option><option value='Techinician'><?php echo $this->lang->line('msg_technician'); ?></option><option value='Animal Keeping'><?php echo $this->lang->line('msg_animal_keeper'); ?></option><option value='Agriculturist'><?php echo $this->lang->line('msg_farming_expert'); ?></option><option value='Lawyor'><?php echo $this->lang->line('msg_lawyer'); ?></option><option value='Nurse'><?php echo $this->lang->line('msg_nurse'); ?></option><option value='Burser'><?php echo $this->lang->line('msg_bursar'); ?></option><option value='Sychologist'><?php echo $this->lang->line('msg_psychologist'); ?></option><option value='Translator'><?php echo $this->lang->line('msg_translator'); ?></option><option value='Interpreter'><?php echo $this->lang->line('msg_interpretor'); ?></option><option value='Programmer'><?php echo $this->lang->line('msg_programmer'); ?></option><option value='Blogger'><?php echo $this->lang->line('msg_blogger'); ?></option><option value='Master Ceremony'><?php echo $this->lang->line('msg_master_of_ceremony'); ?></option><option value='Driver'><?php echo $this->lang->line('msg_driver'); ?></option><option value='Brocker'><?php echo $this->lang->line('msg_brocker'); ?></option><option value='Security Guard'><?php echo $this->lang->line('msg_security_guard'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_works'); ?></option>");
        } else if (val == "ENTREPRENEUR") {
            $("#category2").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Archtect'><?php echo $this->lang->line('msg_archtect'); ?></option><option value='Shop'><?php echo $this->lang->line('msg_shop'); ?></option><option value='Packing'><?php echo $this->lang->line('msg_parking'); ?></option><option value='Car Wash'><?php echo $this->lang->line('msg_car_wash'); ?></option><option value='Garage'><?php echo $this->lang->line('msg_garage'); ?></option><option value='Bar'><?php echo $this->lang->line('msg_bar'); ?></option><option value='Saloon'><?php echo $this->lang->line('msg_salon'); ?></option><option value='Bakery'><?php echo $this->lang->line('msg_bakery'); ?></option><option value='Tution Center'><?php echo $this->lang->line('msg_tuition_centre'); ?></option><option value='Day care'><?php echo $this->lang->line('msg_day_care'); ?></option><option value='School'><?php echo $this->lang->line('msg_school'); ?></option><option value='Guest House'><?php echo $this->lang->line('msg_guest_house'); ?></option><option value='Hotel'><?php echo $this->lang->line('msg_hotel'); ?></option><option value='Cafe'><?php echo $this->lang->line('msg_restaurant'); ?></option><option value='Company'><?php echo $this->lang->line('msg_company'); ?></option><option value='Butcher'><?php echo $this->lang->line('msg_butcher'); ?></option><option value='Online Marketer'><?php echo $this->lang->line('msg_online_marketers'); ?></option><option value='Insurance'><?php echo $this->lang->line('msg_insurance'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_business_works'); ?></option>");

        } else if (val == "POLITICIAN") {
            $("#category2").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='President'>President</option><option value='Member of Pariament (MP)'>Member of Pariament (MP)</option><option value='Diwani'>Diwani</option><option value='Chairman'>Chairman</option><option value='Periament Speaker'>Periament Speaker</option><option value='Other Position'>Other Position</option>");

        } else if (val == "OTHERS") {
            $("#category2").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='N/A'>N/A</option>");   
            /*<?php echo $this->lang->line('msg_'); ?>*/
        } else if (val == "N/A") {
            $("#category2").html("<option value='N/A'>Select category1</option>");

        }
    });


   //===========sub element ===========
    $("#category2").change(function() {
        var val2 = $(this).val();
        if (val2 == "Teacher") {
            $("#subcategory2").html("<option value='Mathematics'><?php echo $this->lang->line('msg_mathematics'); ?></option><option value='Physics'><?php echo $this->lang->line('msg_physics'); ?></option><option value='Chemistry'><?php echo $this->lang->line('msg_chemistry'); ?></option><option value='Biology'><?php echo $this->lang->line('msg_biology'); ?></option><option value='History'><?php echo $this->lang->line('msg_history'); ?></option><option value='Kiswahili'><?php echo $this->lang->line('msg_kiswahili'); ?></option><option value='English'><?php echo $this->lang->line('msg_english'); ?></option><option value='Kiswahili for Foreigners'><?php echo $this->lang->line('msg_kiswahili_to_foreigners'); ?></option><option value='Geography'><?php echo $this->lang->line('msg_geography'); ?></option><option value='French'><?php echo $this->lang->line('msg_french'); ?></option><option value='Chinese'><?php echo $this->lang->line('msg_chinese'); ?></option><option value='Other Subjects'><?php echo $this->lang->line('msg_other_subjects'); ?></option>");
        } else if (val2 == "Doctor") {
            $("#subcategory2").html("<option value='Doctor'><?php echo $this->lang->line('msg_general_doctor'); ?></option><option value='Pediatrician'><?php echo $this->lang->line('msg_pediatrician'); ?></option><option value='Surgeon'><?php echo $this->lang->line('msg_surgeon'); ?></option><option value='Dermatologist'><?php echo $this->lang->line('msg_Dermatologist'); ?></option><option value='Gynecologist'><?php echo $this->lang->line('msg_gynecologist'); ?></option><option value='Psychiatric'><?php echo $this->lang->line('msg_psychiatric'); ?></option><option value='Cardiologist'><?php echo $this->lang->line('msg_cardiologist'); ?></option><option value='Neurologist'><?php echo $this->lang->line('msg_neurologist'); ?></option><option value='Other Specialisations'><?php echo $this->lang->line('msg_other_specialisations'); ?></option>");

        } else if (val2 == "Techinician") {
            $("#subcategory2").html("<option value='Electrical'><?php echo $this->lang->line('msg_electrical'); ?></option><option value='Electronics'><?php echo $this->lang->line('msg_electronics'); ?></option><option value='Tailoring'><?php echo $this->lang->line('msg_tailoring'); ?></option><option value='Water Pumps'><?php echo $this->lang->line('msg_water_pumps'); ?></option><option value='Mechanics'><?php echo $this->lang->line('msg_mechanics'); ?></option><option value='Other Technicians'><?php echo $this->lang->line('msg_other_technicians'); ?></option>");

        } else if (val2 == "Animal Keeping") {
            $("#subcategory2").html("<option value='Beef'><?php echo $this->lang->line('msg_beef'); ?></option><option value='Milk'><?php echo $this->lang->line('msg_milk'); ?></option><option value='Chickens'><?php echo $this->lang->line('msg_chicken'); ?></option>");

        } else if (val2 == "Shop") {
            $("#subcategory2").html("<option value='Clothes'><?php echo $this->lang->line('msg_clothes'); ?></option><option value='Shoes'><?php echo $this->lang->line('msg_shoes'); ?></option><option value='Other Shops'><?php echo $this->lang->line('msg_othershops'); ?></option>");

        } else if (val2 == "Saloon") {
            $("#subcategory2").html("<option value='Barber Shop'><?php echo $this->lang->line('msg_barbershop'); ?></option><option value='Hair Dressers'><?php echo $this->lang->line('msg_hair_dressers'); ?></option>");

        } else if (val2 == "School") {
            $("#subcategory2").html("<option value='Primary'><?php echo $this->lang->line('msg_primary'); ?></option><option value='Secondary'><?php echo $this->lang->line('msg_secondary'); ?></option>");

        } else  {
            $("#subcategory2").html("<option value='N/A'>N/A</option>");

        }
    });

});

</script>
<!-- ================ end select inout script (LARGE DEVICES) ===========  -->








<!-- =============== select input script (SMALL DEVICES) ============ -->
<script type="text/javascript">
    $(document).ready(function() {

   $("#stype").change(function() {
        var val = $(this).val();
        if (val == "PROFESSIONAL") {
            $("#scategory").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Teacher'><?php echo $this->lang->line('msg_teacher'); ?></option><option value='Doctor'><?php echo $this->lang->line('msg_doctor'); ?></option><option value='Techinician'><?php echo $this->lang->line('msg_technician'); ?></option><option value='Animal Keeping'><?php echo $this->lang->line('msg_animal_keeper'); ?></option><option value='Agriculturist'><?php echo $this->lang->line('msg_farming_expert'); ?></option><option value='Lawyor'><?php echo $this->lang->line('msg_lawyer'); ?></option><option value='Nurse'><?php echo $this->lang->line('msg_nurse'); ?></option><option value='Burser'><?php echo $this->lang->line('msg_bursar'); ?></option><option value='Sychologist'><?php echo $this->lang->line('msg_psychologist'); ?></option><option value='Translator'><?php echo $this->lang->line('msg_translator'); ?></option><option value='Interpreter'><?php echo $this->lang->line('msg_interpretor'); ?></option><option value='Programmer'><?php echo $this->lang->line('msg_programmer'); ?></option><option value='Blogger'><?php echo $this->lang->line('msg_blogger'); ?></option><option value='Master Ceremony'><?php echo $this->lang->line('msg_master_of_ceremony'); ?></option><option value='Driver'><?php echo $this->lang->line('msg_driver'); ?></option><option value='Brocker'><?php echo $this->lang->line('msg_brocker'); ?></option><option value='Security Guard'><?php echo $this->lang->line('msg_security_guard'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_works'); ?></option>");
        } else if (val == "ENTREPRENEUR") {
            $("#scategory").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Archtect'><?php echo $this->lang->line('msg_archtect'); ?></option><option value='Shop'><?php echo $this->lang->line('msg_shop'); ?></option><option value='Packing'><?php echo $this->lang->line('msg_parking'); ?></option><option value='Car Wash'><?php echo $this->lang->line('msg_car_wash'); ?></option><option value='Garage'><?php echo $this->lang->line('msg_garage'); ?></option><option value='Bar'><?php echo $this->lang->line('msg_bar'); ?></option><option value='Saloon'><?php echo $this->lang->line('msg_salon'); ?></option><option value='Bakery'><?php echo $this->lang->line('msg_bakery'); ?></option><option value='Tution Center'><?php echo $this->lang->line('msg_tuition_centre'); ?></option><option value='Day care'><?php echo $this->lang->line('msg_day_care'); ?></option><option value='School'><?php echo $this->lang->line('msg_school'); ?></option><option value='Guest House'><?php echo $this->lang->line('msg_guest_house'); ?></option><option value='Hotel'><?php echo $this->lang->line('msg_hotel'); ?></option><option value='Cafe'><?php echo $this->lang->line('msg_restaurant'); ?></option><option value='Company'><?php echo $this->lang->line('msg_company'); ?></option><option value='Butcher'><?php echo $this->lang->line('msg_butcher'); ?></option><option value='Online Marketer'><?php echo $this->lang->line('msg_online_marketers'); ?></option><option value='Insurance'><?php echo $this->lang->line('msg_insurance'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_business_works'); ?></option>");

        } else if (val == "POLITICIAN") {
            $("#scategory").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='President'>President</option><option value='Member of Pariament (MP)'>Member of Pariament (MP)</option><option value='Diwani'>Diwani</option><option value='Chairman'>Chairman</option><option value='Periament Speaker'>Periament Speaker</option><option value='Other Position'>Other Position</option>");

        } else if (val == "OTHERS") {
            $("#scategory").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='N/A'>N/A</option>");   
            /*<?php echo $this->lang->line('msg_'); ?>*/
        } else if (val == "N/A") {
            $("#scategory").html("<option value='N/A'>Select category1</option>");

        }
    });


   //===========sub element ===========
    $("#scategory").change(function() {
        var val2 = $(this).val();
        if (val2 == "Teacher") {
            $("#ssubcategory").html("<option value='Mathematics'><?php echo $this->lang->line('msg_mathematics'); ?></option><option value='Physics'><?php echo $this->lang->line('msg_physics'); ?></option><option value='Chemistry'><?php echo $this->lang->line('msg_chemistry'); ?></option><option value='Biology'><?php echo $this->lang->line('msg_biology'); ?></option><option value='History'><?php echo $this->lang->line('msg_history'); ?></option><option value='Kiswahili'><?php echo $this->lang->line('msg_kiswahili'); ?></option><option value='English'><?php echo $this->lang->line('msg_english'); ?></option><option value='Kiswahili for Foreigners'><?php echo $this->lang->line('msg_kiswahili_to_foreigners'); ?></option><option value='Geography'><?php echo $this->lang->line('msg_geography'); ?></option><option value='French'><?php echo $this->lang->line('msg_french'); ?></option><option value='Chinese'><?php echo $this->lang->line('msg_chinese'); ?></option><option value='Other Subjects'><?php echo $this->lang->line('msg_other_subjects'); ?></option>");
        } else if (val2 == "Doctor") {
            $("#ssubcategory").html("<option value='Doctor'><?php echo $this->lang->line('msg_general_doctor'); ?></option><option value='Pediatrician'><?php echo $this->lang->line('msg_pediatrician'); ?></option><option value='Surgeon'><?php echo $this->lang->line('msg_surgeon'); ?></option><option value='Dermatologist'><?php echo $this->lang->line('msg_Dermatologist'); ?></option><option value='Gynecologist'><?php echo $this->lang->line('msg_gynecologist'); ?></option><option value='Psychiatric'><?php echo $this->lang->line('msg_psychiatric'); ?></option><option value='Cardiologist'><?php echo $this->lang->line('msg_cardiologist'); ?></option><option value='Neurologist'><?php echo $this->lang->line('msg_neurologist'); ?></option><option value='Other Specialisations'><?php echo $this->lang->line('msg_other_specialisations'); ?></option>");

        } else if (val2 == "Techinician") {
            $("#ssubcategory").html("<option value='Electrical'><?php echo $this->lang->line('msg_electrical'); ?></option><option value='Electronics'><?php echo $this->lang->line('msg_electronics'); ?></option><option value='Tailoring'><?php echo $this->lang->line('msg_tailoring'); ?></option><option value='Water Pumps'><?php echo $this->lang->line('msg_water_pumps'); ?></option><option value='Mechanics'><?php echo $this->lang->line('msg_mechanics'); ?></option><option value='Other Technicians'><?php echo $this->lang->line('msg_other_technicians'); ?></option>");

        } else if (val2 == "Animal Keeping") {
            $("#ssubcategory").html("<option value='Beef'><?php echo $this->lang->line('msg_beef'); ?></option><option value='Milk'><?php echo $this->lang->line('msg_milk'); ?></option><option value='Chickens'><?php echo $this->lang->line('msg_chicken'); ?></option>");

        } else if (val2 == "Shop") {
            $("#ssubcategory").html("<option value='Clothes'><?php echo $this->lang->line('msg_clothes'); ?></option><option value='Shoes'><?php echo $this->lang->line('msg_shoes'); ?></option><option value='Other Shops'><?php echo $this->lang->line('msg_othershops'); ?></option>");

        } else if (val2 == "Saloon") {
            $("#ssubcategory").html("<option value='Barber Shop'><?php echo $this->lang->line('msg_barbershop'); ?></option><option value='Hair Dressers'><?php echo $this->lang->line('msg_hair_dressers'); ?></option>");

        } else if (val2 == "School") {
            $("#ssubcategory").html("<option value='Primary'><?php echo $this->lang->line('msg_primary'); ?></option><option value='Secondary'><?php echo $this->lang->line('msg_secondary'); ?></option>");

        } else  {
            $("#ssubcategory").html("<option value='N/A'>N/A</option>");

        }
    });

});

</script>

<script type="text/javascript">
    $(document).ready(function() {

     $("#stype1").change(function() {
        var val = $(this).val();
        if (val == "PROFESSIONAL") {
            $("#scategory1").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Teacher'><?php echo $this->lang->line('msg_teacher'); ?></option><option value='Doctor'><?php echo $this->lang->line('msg_doctor'); ?></option><option value='Techinician'><?php echo $this->lang->line('msg_technician'); ?></option><option value='Animal Keeping'><?php echo $this->lang->line('msg_animal_keeper'); ?></option><option value='Agriculturist'><?php echo $this->lang->line('msg_farming_expert'); ?></option><option value='Lawyor'><?php echo $this->lang->line('msg_lawyer'); ?></option><option value='Nurse'><?php echo $this->lang->line('msg_nurse'); ?></option><option value='Burser'><?php echo $this->lang->line('msg_bursar'); ?></option><option value='Sychologist'><?php echo $this->lang->line('msg_psychologist'); ?></option><option value='Translator'><?php echo $this->lang->line('msg_translator'); ?></option><option value='Interpreter'><?php echo $this->lang->line('msg_interpretor'); ?></option><option value='Programmer'><?php echo $this->lang->line('msg_programmer'); ?></option><option value='Blogger'><?php echo $this->lang->line('msg_blogger'); ?></option><option value='Master Ceremony'><?php echo $this->lang->line('msg_master_of_ceremony'); ?></option><option value='Driver'><?php echo $this->lang->line('msg_driver'); ?></option><option value='Brocker'><?php echo $this->lang->line('msg_brocker'); ?></option><option value='Security Guard'><?php echo $this->lang->line('msg_security_guard'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_works'); ?></option>");
        } else if (val == "ENTREPRENEUR") {
            $("#scategory1").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Archtect'><?php echo $this->lang->line('msg_archtect'); ?></option><option value='Shop'><?php echo $this->lang->line('msg_shop'); ?></option><option value='Packing'><?php echo $this->lang->line('msg_parking'); ?></option><option value='Car Wash'><?php echo $this->lang->line('msg_car_wash'); ?></option><option value='Garage'><?php echo $this->lang->line('msg_garage'); ?></option><option value='Bar'><?php echo $this->lang->line('msg_bar'); ?></option><option value='Saloon'><?php echo $this->lang->line('msg_salon'); ?></option><option value='Bakery'><?php echo $this->lang->line('msg_bakery'); ?></option><option value='Tution Center'><?php echo $this->lang->line('msg_tuition_centre'); ?></option><option value='Day care'><?php echo $this->lang->line('msg_day_care'); ?></option><option value='School'><?php echo $this->lang->line('msg_school'); ?></option><option value='Guest House'><?php echo $this->lang->line('msg_guest_house'); ?></option><option value='Hotel'><?php echo $this->lang->line('msg_hotel'); ?></option><option value='Cafe'><?php echo $this->lang->line('msg_restaurant'); ?></option><option value='Company'><?php echo $this->lang->line('msg_company'); ?></option><option value='Butcher'><?php echo $this->lang->line('msg_butcher'); ?></option><option value='Online Marketer'><?php echo $this->lang->line('msg_online_marketers'); ?></option><option value='Insurance'><?php echo $this->lang->line('msg_insurance'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_business_works'); ?></option>");

        } else if (val == "POLITICIAN") {
            $("#scategory1").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='President'>President</option><option value='Member of Pariament (MP)'>Member of Pariament (MP)</option><option value='Diwani'>Diwani</option><option value='Chairman'>Chairman</option><option value='Periament Speaker'>Periament Speaker</option><option value='Other Position'>Other Position</option>");

        } else if (val == "OTHERS") {
            $("#scategory1").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='N/A'>N/A</option>");   
            /*<?php echo $this->lang->line('msg_'); ?>*/
        } else if (val == "N/A") {
            $("#scategory1").html("<option value='N/A'>Select category1</option>");

        }
    });

   //===========sub element ===========
    $("#scategory1").change(function() {
        var val2 = $(this).val();
        if (val2 == "Teacher") {
            $("#ssubcategory1").html("<option value='Mathematics'><?php echo $this->lang->line('msg_mathematics'); ?></option><option value='Physics'><?php echo $this->lang->line('msg_physics'); ?></option><option value='Chemistry'><?php echo $this->lang->line('msg_chemistry'); ?></option><option value='Biology'><?php echo $this->lang->line('msg_biology'); ?></option><option value='History'><?php echo $this->lang->line('msg_history'); ?></option><option value='Kiswahili'><?php echo $this->lang->line('msg_kiswahili'); ?></option><option value='English'><?php echo $this->lang->line('msg_english'); ?></option><option value='Kiswahili for Foreigners'><?php echo $this->lang->line('msg_kiswahili_to_foreigners'); ?></option><option value='Geography'><?php echo $this->lang->line('msg_geography'); ?></option><option value='French'><?php echo $this->lang->line('msg_french'); ?></option><option value='Chinese'><?php echo $this->lang->line('msg_chinese'); ?></option><option value='Other Subjects'><?php echo $this->lang->line('msg_other_subjects'); ?></option>");
        } else if (val2 == "Doctor") {
            $("#ssubcategory1").html("<option value='Doctor'><?php echo $this->lang->line('msg_general_doctor'); ?></option><option value='Pediatrician'><?php echo $this->lang->line('msg_pediatrician'); ?></option><option value='Surgeon'><?php echo $this->lang->line('msg_surgeon'); ?></option><option value='Dermatologist'><?php echo $this->lang->line('msg_Dermatologist'); ?></option><option value='Gynecologist'><?php echo $this->lang->line('msg_gynecologist'); ?></option><option value='Psychiatric'><?php echo $this->lang->line('msg_psychiatric'); ?></option><option value='Cardiologist'><?php echo $this->lang->line('msg_cardiologist'); ?></option><option value='Neurologist'><?php echo $this->lang->line('msg_neurologist'); ?></option><option value='Other Specialisations'><?php echo $this->lang->line('msg_other_specialisations'); ?></option>");

        } else if (val2 == "Techinician") {
            $("#ssubcategory1").html("<option value='Electrical'><?php echo $this->lang->line('msg_electrical'); ?></option><option value='Electronics'><?php echo $this->lang->line('msg_electronics'); ?></option><option value='Tailoring'><?php echo $this->lang->line('msg_tailoring'); ?></option><option value='Water Pumps'><?php echo $this->lang->line('msg_water_pumps'); ?></option><option value='Mechanics'><?php echo $this->lang->line('msg_mechanics'); ?></option><option value='Other Technicians'><?php echo $this->lang->line('msg_other_technicians'); ?></option>");

        } else if (val2 == "Animal Keeping") {
            $("#ssubcategory1").html("<option value='Beef'><?php echo $this->lang->line('msg_beef'); ?></option><option value='Milk'><?php echo $this->lang->line('msg_milk'); ?></option><option value='Chickens'><?php echo $this->lang->line('msg_chicken'); ?></option>");

        } else if (val2 == "Shop") {
            $("#ssubcategory1").html("<option value='Clothes'><?php echo $this->lang->line('msg_clothes'); ?></option><option value='Shoes'><?php echo $this->lang->line('msg_shoes'); ?></option><option value='Other Shops'><?php echo $this->lang->line('msg_othershops'); ?></option>");

        } else if (val2 == "Saloon") {
            $("#ssubcategory1").html("<option value='Barber Shop'><?php echo $this->lang->line('msg_barbershop'); ?></option><option value='Hair Dressers'><?php echo $this->lang->line('msg_hair_dressers'); ?></option>");

        } else if (val2 == "School") {
            $("#ssubcategory1").html("<option value='Primary'><?php echo $this->lang->line('msg_primary'); ?></option><option value='Secondary'><?php echo $this->lang->line('msg_secondary'); ?></option>");

        } else  {
            $("#ssubcategory1").html("<option value='N/A'>N/A</option>");

        }
    });

});

</script>

<script type="text/javascript">
    $(document).ready(function() {

    $("#stype2").change(function() {
        var val = $(this).val();
        if (val == "PROFESSIONAL") {
            $("#scategory2").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Teacher'><?php echo $this->lang->line('msg_teacher'); ?></option><option value='Doctor'><?php echo $this->lang->line('msg_doctor'); ?></option><option value='Techinician'><?php echo $this->lang->line('msg_technician'); ?></option><option value='Animal Keeping'><?php echo $this->lang->line('msg_animal_keeper'); ?></option><option value='Agriculturist'><?php echo $this->lang->line('msg_farming_expert'); ?></option><option value='Lawyor'><?php echo $this->lang->line('msg_lawyer'); ?></option><option value='Nurse'><?php echo $this->lang->line('msg_nurse'); ?></option><option value='Burser'><?php echo $this->lang->line('msg_bursar'); ?></option><option value='Sychologist'><?php echo $this->lang->line('msg_psychologist'); ?></option><option value='Translator'><?php echo $this->lang->line('msg_translator'); ?></option><option value='Interpreter'><?php echo $this->lang->line('msg_interpretor'); ?></option><option value='Programmer'><?php echo $this->lang->line('msg_programmer'); ?></option><option value='Blogger'><?php echo $this->lang->line('msg_blogger'); ?></option><option value='Master Ceremony'><?php echo $this->lang->line('msg_master_of_ceremony'); ?></option><option value='Driver'><?php echo $this->lang->line('msg_driver'); ?></option><option value='Brocker'><?php echo $this->lang->line('msg_brocker'); ?></option><option value='Security Guard'><?php echo $this->lang->line('msg_security_guard'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_works'); ?></option>");
        } else if (val == "ENTREPRENEUR") {
            $("#scategory2").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='Archtect'><?php echo $this->lang->line('msg_archtect'); ?></option><option value='Shop'><?php echo $this->lang->line('msg_shop'); ?></option><option value='Packing'><?php echo $this->lang->line('msg_parking'); ?></option><option value='Car Wash'><?php echo $this->lang->line('msg_car_wash'); ?></option><option value='Garage'><?php echo $this->lang->line('msg_garage'); ?></option><option value='Bar'><?php echo $this->lang->line('msg_bar'); ?></option><option value='Saloon'><?php echo $this->lang->line('msg_salon'); ?></option><option value='Bakery'><?php echo $this->lang->line('msg_bakery'); ?></option><option value='Tution Center'><?php echo $this->lang->line('msg_tuition_centre'); ?></option><option value='Day care'><?php echo $this->lang->line('msg_day_care'); ?></option><option value='School'><?php echo $this->lang->line('msg_school'); ?></option><option value='Guest House'><?php echo $this->lang->line('msg_guest_house'); ?></option><option value='Hotel'><?php echo $this->lang->line('msg_hotel'); ?></option><option value='Cafe'><?php echo $this->lang->line('msg_restaurant'); ?></option><option value='Company'><?php echo $this->lang->line('msg_company'); ?></option><option value='Butcher'><?php echo $this->lang->line('msg_butcher'); ?></option><option value='Online Marketer'><?php echo $this->lang->line('msg_online_marketers'); ?></option><option value='Insurance'><?php echo $this->lang->line('msg_insurance'); ?></option><option value='Others'><?php echo $this->lang->line('msg_other_business_works'); ?></option>");

        } else if (val == "POLITICIAN") {
            $("#scategory2").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='President'>President</option><option value='Member of Pariament (MP)'>Member of Pariament (MP)</option><option value='Diwani'>Diwani</option><option value='Chairman'>Chairman</option><option value='Periament Speaker'>Periament Speaker</option><option value='Other Position'>Other Position</option>");

        } else if (val == "OTHERS") {
            $("#scategory2").html("<option value='NA'><?php echo $this->lang->line('msg_select_profile_category'); ?></option><option value='N/A'>N/A</option>");   
            /*<?php echo $this->lang->line('msg_'); ?>*/
        } else if (val == "N/A") {
            $("#scategory2").html("<option value='N/A'>Select category1</option>");

        }
    });


   //===========sub element ===========
    $("#scategory2").change(function() {
        var val2 = $(this).val();
        if (val2 == "Teacher") {
            $("#ssubcategory2").html("<option value='Mathematics'><?php echo $this->lang->line('msg_mathematics'); ?></option><option value='Physics'><?php echo $this->lang->line('msg_physics'); ?></option><option value='Chemistry'><?php echo $this->lang->line('msg_chemistry'); ?></option><option value='Biology'><?php echo $this->lang->line('msg_biology'); ?></option><option value='History'><?php echo $this->lang->line('msg_history'); ?></option><option value='Kiswahili'><?php echo $this->lang->line('msg_kiswahili'); ?></option><option value='English'><?php echo $this->lang->line('msg_english'); ?></option><option value='Kiswahili for Foreigners'><?php echo $this->lang->line('msg_kiswahili_to_foreigners'); ?></option><option value='Geography'><?php echo $this->lang->line('msg_geography'); ?></option><option value='French'><?php echo $this->lang->line('msg_french'); ?></option><option value='Chinese'><?php echo $this->lang->line('msg_chinese'); ?></option><option value='Other Subjects'><?php echo $this->lang->line('msg_other_subjects'); ?></option>");
        } else if (val2 == "Doctor") {
            $("#ssubcategory2").html("<option value='Doctor'><?php echo $this->lang->line('msg_general_doctor'); ?></option><option value='Pediatrician'><?php echo $this->lang->line('msg_pediatrician'); ?></option><option value='Surgeon'><?php echo $this->lang->line('msg_surgeon'); ?></option><option value='Dermatologist'><?php echo $this->lang->line('msg_Dermatologist'); ?></option><option value='Gynecologist'><?php echo $this->lang->line('msg_gynecologist'); ?></option><option value='Psychiatric'><?php echo $this->lang->line('msg_psychiatric'); ?></option><option value='Cardiologist'><?php echo $this->lang->line('msg_cardiologist'); ?></option><option value='Neurologist'><?php echo $this->lang->line('msg_neurologist'); ?></option><option value='Other Specialisations'><?php echo $this->lang->line('msg_other_specialisations'); ?></option>");

        } else if (val2 == "Techinician") {
            $("#ssubcategory2").html("<option value='Electrical'><?php echo $this->lang->line('msg_electrical'); ?></option><option value='Electronics'><?php echo $this->lang->line('msg_electronics'); ?></option><option value='Tailoring'><?php echo $this->lang->line('msg_tailoring'); ?></option><option value='Water Pumps'><?php echo $this->lang->line('msg_water_pumps'); ?></option><option value='Mechanics'><?php echo $this->lang->line('msg_mechanics'); ?></option><option value='Other Technicians'><?php echo $this->lang->line('msg_other_technicians'); ?></option>");

        } else if (val2 == "Animal Keeping") {
            $("#ssubcategory2").html("<option value='Beef'><?php echo $this->lang->line('msg_beef'); ?></option><option value='Milk'><?php echo $this->lang->line('msg_milk'); ?></option><option value='Chickens'><?php echo $this->lang->line('msg_chicken'); ?></option>");

        } else if (val2 == "Shop") {
            $("#ssubcategory2").html("<option value='Clothes'><?php echo $this->lang->line('msg_clothes'); ?></option><option value='Shoes'><?php echo $this->lang->line('msg_shoes'); ?></option><option value='Other Shops'><?php echo $this->lang->line('msg_othershops'); ?></option>");

        } else if (val2 == "Saloon") {
            $("#ssubcategory2").html("<option value='Barber Shop'><?php echo $this->lang->line('msg_barbershop'); ?></option><option value='Hair Dressers'><?php echo $this->lang->line('msg_hair_dressers'); ?></option>");

        } else if (val2 == "School") {
            $("#ssubcategory2").html("<option value='Primary'><?php echo $this->lang->line('msg_primary'); ?></option><option value='Secondary'><?php echo $this->lang->line('msg_secondary'); ?></option>");

        } else  {
            $("#ssubcategory2").html("<option value='N/A'>N/A</option>");

        }
    });

});

</script>
<!-- ================ end select inout script (SMALL DEVICES) ===========  -->