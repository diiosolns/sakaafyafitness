<style type="text/css">
.jumbotron {
background: #358CCE;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 20px;
padding-bottom: 0px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 20px;
}

.fullwidth {
    margin-left: 0;
    margin-right: 0; 
    width: 100%;
}
</style>




<!-- ======================= LOCATION MAP ================= -->
<!-- <div  class="container fullwidth" >
     <div class="jumbotron jumbotron-sm" style="background-color:#00c0ef; margin-top:2%;color:white; margin-bottom: 1%;">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h3 class="h3" style="margin-top:-1%">
                    <b><?php echo $this->lang->line('msg_our_contacts'); ?></b>
                </h3>
            </div>
        </div>
    </div>
</div> -->


<div class="container fullwidth">
    <div class="row" >
        <div class="col-sm-4">
            <div class="well">
                <h3 style="line-height:20%;"><i class="fa fa-home fa-1x" style="line-height:6%;color:#00c0ef;"></i> <?php echo $this->lang->line('msg_physical_address'); ?></h3>               
                <p style="margin-top:6%;line-height:35%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $this->lang->line('msg_physical_address2'); ?>Dar es Salaam</p>
                <br />
                <br />
                <h3 style="line-height:20%;"><i class="fa fa-envelope fa-1x" style="line-height:6%;color:#00c0ef;"></i> <?php echo $this->lang->line('msg_email_title'); ?></h3>
                <p style="margin-top:6%;line-height:35%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_email2'); ?></p>
                <br />
                <br />
                <h3 style="line-height:20%;"><i class="fa fa-user fa-1x" style="line-height:6%;color:#00c0ef;"></i> <?php echo $this->lang->line('msg_phone'); ?></h3>
                <p style="margin-top:6%;line-height:35%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_phone2'); ?></p>
                <br />
                <br />
                <h3 style="line-height:20%;"><i class="fa fa-tasks fa-1x" style="line-height:6%;color:#00c0ef;"></i> <?php echo $this->lang->line('msg_location'); ?></h3>
                <p style="margin-top:6%;line-height:35%"><a href="www.udsm.com">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_location2'); ?></a></p>
                <br>
            </div>
        </div>
        <div  class="col-sm-8" style="margin-top: 0;">
            <div class="well">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24090.384201287958!2d39.20086205107034!3d-6.773269892092395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4ee805c13fbd%3A0xc5f6f7842c141a00!2sUniversity+of+Dar+Es+Salaam!5e0!3m2!1sen!2str!4v1524726722245" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
       

<!-- ======================= END MAP ====================== -->



<!-- ====================== CONTACT FORM ============= -->
<div class="container fullwidth partialwidth1">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
              <form class="form-style-1" action="<?php echo base_url('Api/getContactPage')?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                <?php echo $this->lang->line('msg_name'); ?></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $this->lang->line('msg_prf_full_name'); ?>" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                <?php echo $this->lang->line('msg_email_title'); ?></label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $this->lang->line('msg_email_address'); ?>" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject"><?php echo $this->lang->line('msg_subject'); ?></label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="None" selected=""><?php echo $this->lang->line('msg_choose_one'); ?></option>
                                <option value="service"><?php echo $this->lang->line('msg_general_customer_service'); ?></option>
                                <option value="suggestions"><?php echo $this->lang->line('msg_suggestions'); ?></option>
                                <option value="product"><?php echo $this->lang->line('msg_complaints'); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                <?php echo $this->lang->line('msg_message'); ?></label>
                            <textarea name="message" id="message" name="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="<?php echo $this->lang->line('msg_message_txt'); ?>"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info pull-right" id="btnContactUs" name="btnContactUs" value="ok">
                            <?php echo $this->lang->line('msg_send_message'); ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i></button>
                    </div>

                    <div class="col-md-12" style="text-align: center; font-size: 20px;"><b style="color: <?php echo $color;?>;"><?php echo $msg;?></b></div>
                </div>
            </form>
            </div>
        </div>



        <!-- <div class="col-md-4">
          <form class="form-style-1" action="<?php echo base_url('Home/contactUs')?>" method="post" enctype="multipart/form-data">
            <legend><span class="glyphicon glyphicon-globe"></span> <?php echo $this->lang->line('msg_our_office'); ?></legend>
            <address>
                <strong><?php echo $this->lang->line('msg_ehuduma'); ?></strong><br>
                <?php echo $this->lang->line('msg_address_place'); ?><br>
                <?php //echo $this->lang->line('msg_address_box'); ?>DSM<br>
                <i>  <?php echo $this->lang->line('msg_address_phone'); ?> </i>
            </address>
            <address>
                <strong><?php echo $this->lang->line('msg_full_name'); ?></strong><br>
                <?php echo $this->lang->line('msg_full_name2'); ?><br>
                <a href="mailto:ehuduma@uwezomedia.com"><?php echo $this->lang->line('msg_email'); ?> ehuduma@uwezomedia.com</a>
            </address>
            </form>
        </div> -->


    </div>
</div>



<!-- <div style="background-color: #00c0ef;">
    kjehige
    d,mfenkgevv<br><br><br><br>
</div> -->
