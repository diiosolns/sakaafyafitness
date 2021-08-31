<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />     
<style type="text/css">
    #account {
        background-color: #4e4b4a !important;
    }
        .mypadding {
             padding: 1% 4% 0 4%;
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
        .custom-file-upload {
            background-color: #F4F4F4;
            border: 1px solid #ccc;
            display: inline-block;
            text-align: center !important;
            padding: 2px 2px 2px 2px !important;
            cursor: pointer;
        }
        /*input[type="file"] {
              display: none;
          }*/
        #img {
            display: none;
        }
</style>

<?php
    $services = modules::load('Profile')->get_where_custom_tb('services', 'status', "Active");
    $sports = modules::load('Profile')->get_where_custom_tb('sports', 'status', "Active");
?>
<!--  ======================== Create Profile Form ================= -->
        <div class="row" style="margin: 5px 5px 5px 5px">
        
            <div class="col-md-2"></div>

            <div class="col-md-8" style="background-color: #fff; border-right: 1px solid lightgray; border-bottom: 1px solid lightgray; border-left: 1px solid lightgray; border-top: 1px solid lightgray;">
                <form class="form-style-1" action="<?php echo base_url('Profile/createProfile')?>" method="post" enctype="multipart/form-data">
                           <div class="box-body" style="text-align: left;">

                            <div class="row">
                                <div class="col-md-12 sitecolor1" style="font-size: 28px; text-align: center; padding-top: 10px; padding-bottom: 10px; background-color: #F4F4F4;">
                                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/img/def.png');?>" class="avater" alt="service" style="width: 8%;" ></a>
                                    <b class="sitecolor1">Complete account registration <?php //echo $this->lang->line('msg_create_new_profile'); ?></b>
                                     <!-- <hr>  -->    
                                </div>  
                                <div class="col-md-12"  style="text-align: center; font-size: 14px; padding-bottom: 20px;">

                                </div>
                                     
                                    <div class="col-md-9" style1="vertical-align: top !important; background-color: red;">
                                        <h4><b>Basic Information</b></h4>
                                        <div class="row">
                                            <div class="col-md-12" style1="margin-bottom: 30px; margin-top: 20px;">
                                                <div class="form-group" >
                                                    <label><?php echo $this->lang->line('msg_profile_name'); ?><span class="required">*</span></label>
                                                    <input type="text" class="form-control  field-long input-sm1" name="pname" value="" placeholder="<?php echo $this->lang->line('msg_enter_profile_name'); ?>"  required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Gender<?php //echo ucfirst($this->lang->line('msg_profile_type')); ?><span class="required">*</span></label>
                                                    <select class=" field-select input-sm1" name="gender" id="gender" required="">
                                                        <option value="Other">Select your gender<?php //echo $this->lang->line('msg_select_profile_type'); ?></option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                 </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Age<?php //echo ucfirst($this->lang->line('msg_profile_type')); ?><span class="required">*</span></label>
                                                    <select class=" field-select input-sm1" name="age" id="age" required="">
                                                        <option value="Other">Select your age<?php //echo $this->lang->line('msg_select_profile_type'); ?></option>
                                                        <?php for($i = 15; $i <= 100; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                 </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>ID Number<?php //echo $this->lang->line('msg_profile_name'); ?><span class="required">*</span></label>
                                                        <input type="text" class="form-control  field-long input-sm1" name="idno" id="idno" value="" placeholder="National ID/Driving license<?php //echo $this->lang->line('msg_enter_profile_name'); ?>"  required="">
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="custom-file-upload"><img class="thumbnail" id="img1" src="<?php echo base_url('assets/img/profile/0/def.png');?>" alt="Profile pic" width="100%" /><input accept="image/*" type='file' id="img" name="img" /><i class="fa fa-upload"></i> Choose Photo</label>
                                            <!-- <label><?php echo $this->lang->line('msg_profile_image'); ?> </label>
                                            <input type="file"  class="form-control" name="img" accept=".gif, .jpg, .png" value="" placeholder="<?php echo $this->lang->line('msg_choose_file'); ?>"   required1=""> -->
                                        </div>
                                    </div>
                                    
                            </div>
                               
                            <div class="row">
                                <!-- <hr>
                                <h4><b>Basic Information</b></h4>  -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><?php echo ucfirst($this->lang->line('msg_profile_type')); ?><span class="required">*</span></label>
                                        <select class=" field-select input-sm1" name="type" id="type" required="">
                                            <option value="Other"><?php echo $this->lang->line('msg_select_profile_type'); ?></option>
                                            <option value="Individual">Individual</option>
                                            <option value="Group">Group/ Team</option>
                                            <option value="Company">Company</option>
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('msg_profile_category'); ?><span class="required">*</span></label>
                                        <select class="field-select" name="cat" id="category" required="">
                                            <option value="Others">Select category<?php //echo $this->lang->line('msg_select_profile_category'); ?></option>
                                            <?php foreach ($services->result() as $row1): ?>
                                              <option value="<?php echo $row1->service;?>"><?php echo $row1->service;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('msg_profile_sub_category'); ?><span class="required">*</span></label>
                                        <select class="form-control" name="subcat" id="subcategory" required="">
                                            <option value="Others">Select type of sport<?php //echo $this->lang->line('msg_select_profile_subcategory'); ?></option>
                                            <?php foreach ($sports->result() as $row3): ?>
                                              <option value="<?php echo $row3->name;?>"><?php echo $row3->name;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                     </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <hr>
                                 <h4><b>Contact Information</b></h4>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label><?php echo $this->lang->line('msg_phone_number'); ?><span class="required">*</span></label>
                                            <input type="text"  class="field-long" name="phone" value="" placeholder="Eg. 07XXXXXXXX<?php //echo $this->lang->line('msg_enter_phone_number'); ?>"   required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label><?php echo $this->lang->line('msg_alt_phone_number'); ?></label>
                                            <input type="text"  class="field-long" name="altphone" value="" placeholder="Eg. 07XXXXXXXX<?php //echo $this->lang->line('msg_enter_alt_phone_number'); ?>"   >
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group field-select">
                                            <label><?php echo $this->lang->line('msg_email_address'); ?><span class="required">*</span></label>
                                            <input type="email"  class="field-long" name="email" value="" placeholder="Enter e-mail<?php //echo $this->lang->line('msg_enter_email_address'); ?>"   required="">
                                        </div>
                                      </div>
                                </div>
                            </div>

                            <div class="row">
                                <hr>
                                <h4><b>Location Information</b></h4>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><?php //echo $this->lang->line('msg_profile_type'); ?> Country<span class="required">*</span></label>
                                        <select class=" field-select input-sm1" name="country" id="country" required="">
                                           <option value="Other"><?php //echo $this->lang->line('msg_select_profile_type'); ?></option>
                                           <!-- <option value="empty" selected="" >Select Country</option> -->
                                            <option value="Tanzania"  selected="">Tanzania</option>
                                           <!--  <option value="Kenya">Kenya</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Rwanda">Rwanda</option> -->
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
                                <h4><b>Description (More Details) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-info btn-sm " name="editBtn" value="" data-toggle="tooltip"  title="" data-original-title="Please write short description about you/ your team, group or club."><i class="fa fa-info" style="border-radius: 50%;"></i></button></b></h4> 
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
                                <hr>
                                <h4><b>Attachments</b></h4>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>ID No./ National ID/Driving License (.pdf)<?php //echo $this->lang->line('msg_profile_image'); ?> </label>
                                            <input type="file"  class="form-control" name="idfile" accept=".pdf" value="" placeholder="Attach your resume (must be a PDF file)<?php //echo $this->lang->line('msg_choose_file'); ?>"   required1="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Identification – Certificate (.pdf)<?php //echo $this->lang->line('msg_profile_image'); ?> </label>
                                            <input type="file"  class="form-control" name="certificate" accept=".pdf" value="" placeholder="Attach your resume (must be a PDF file)<?php //echo $this->lang->line('msg_choose_file'); ?>"   required1="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Attach Your Resume/ CV (.pdf)<?php //echo $this->lang->line('msg_profile_image'); ?> </label>
                                            <input type="file"  class="form-control" name="resume" accept=".pdf" value="" placeholder="Attach your resume (must be a PDF file)<?php //echo $this->lang->line('msg_choose_file'); ?>"   required1="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" style="text-align: center; font-size: 14px;">
                                 <br>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="regBtn" value="ok" class="btn btn-info btn-lg pull-right">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_submit'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                </div>
                            </div>  
                            <!-- <hr> -->
                        </div><!-- /.box-body -->
                    </form>  
            </div>

            <div class="col-md-2"></div>
        </div>
        <!--  ======================== end Create Profile Form ============= -->


<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>" type="text/javascript"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) { 
        //do work
        img.onchange = evt => {
            const [file] = img.files
            if (file) {
            img1.src = URL.createObjectURL(file)
            }
        }
    });
</script>