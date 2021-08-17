<section class="content" style="padding: 15px 2% 0 2%">
<!-- <?php echo $this->lang->line('msg_'); ?> -->
                    <!-- row -->
                    <div class="row">                        
                        <div class="col-md-10 col-sm-12 col-xs-12" style="padding-right: 0;">
                            <!-- The time line -->
                            <ul class="timeline">
                                <!-- timeline time label -->
                                <li class="time-label">
                                    <span class="bg-aqua">
                                       <b style="font-size: 20px;"><?php echo $this->lang->line('msg_quick_deals'); ?></b>
                                    </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <?php foreach ($news_newRes->result() as $row): ?>
                                <li>
                                     <i class="fa fa-clock-o bg-green"></i>
                                    <div class="timeline-item">
                                        <span style="font-size: 14px;" class="label label-success pull-right"><i class="fa fa-clock-o"></i> <b ><?php echo $this->lang->line('msg_new'); ?></b></span>
                                        <h3 class="timeline-header"><a href="#"></a><b><?php echo $row->heading;?></b></h3>
                                        <div class="timeline-body" style="text-align: justify; font-size: 16px;">
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->body;?>
                                        </div>
                                        <div class="timeline-footer">
                                            <a class="btn btn-default btn-xs" style="margin-bottom: 2px;"><?php echo $this->lang->line('msg_posted_by'); ?> <?php echo $row->registeredby;?></a>
                                            <a class="btn btn-default btn-xs" style="margin-bottom: 2px;"><?php echo $this->lang->line('msg_email'); ?> <?php echo $row->email;?></a>
                                            <a class="btn btn-default btn-xs" style="margin-bottom: 2px;"><?php echo $this->lang->line('msg_phone_no'); ?> <?php echo $row->phone;?></a>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                                <!-- <li>
                                                    <i class="fa fa-clock-o bg-green"></i>
                                                    <div class="timeline-item">
                                                         <span style="font-size: 14px;" class="label label-success pull-right"><i class="fa fa-clock-o"></i> <b >NEW</b></span>
                                                        <h3 class="timeline-header no-border"><a href="#"></a><b>News Two</b></h3>
                                                            <div class="timeline-body">
                                                            ..
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a class="btn btn-primary btn-xs">Read more</a>
                                                            <a class="btn btn-danger btn-xs">Delete</a>
                                                        </div>
                                                    </div>
                                                </li> -->
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <li>
                                    <i class="fa fa-clock-o bg-green"></i>
                                    <div class="timeline-item">
                                    <!-- ======== link add ======== -->
                                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                            <!-- Long Horizontal Link -->
                                            <ins class="adsbygoogle"
                                                 style="display:inline-block;width:468px;height:15px"
                                                 data-ad-client="ca-pub-4546444563839054"
                                                 data-ad-slot="3156538198"></ins>
                                            <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});
                                         </script>
                                    <!-- ============ end add ======= -->

                                    </div>
                                </li>


                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <li class="time-label">
                                    <span class="bg-yellow">
                                        <b style="font-size: 20px;"> <?php echo $this->lang->line('msg_ehuduma_new_deal'); ?></b>
                                    </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <?php //foreach ($news_oldRes->result() as $row): ?>
                                 <li>
                                    <i class="fa fa-eye bg-yellow"></i>
                                    <div class="timeline-item">
                                         <span style="font-size: 14px;" class="label label-success pull-right"><i class="fa fa-clock-o"></i> <b ><?php echo $this->lang->line('msg_new'); ?></b></span>
                                        <h3 class="timeline-header"><a href="#"></a><b><?php echo $this->lang->line('msg_post_deal'); ?></b></h3>
                                        <div class="timeline-body" style="text-align: justify; font-size: 16px;">
                                           



                                            <div class="row">
                                             <form role="form" method="post" action="<?php echo base_url('Artical/postDeal')?>" enctype="multipart/form-data">
  
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                   <fieldset enabled="">
                                                     <div class="form-group">
                                                      <label><h3><b><?php echo $this->lang->line('msg_leave_your_deal'); ?></b> <a href="#"> <?php echo $this->lang->line('msg_remember_to_join'); ?></a></h3></label>
                                                        <input type="text" name="heading"  placeholder="<?php echo $this->lang->line('msg_deal_tittle'); ?>" class="form-control" style="margin-bottom:  10PX;" required="" />          
                                                        <textarea name="body" rows="3"  onclick="myFunction()" placeholder="<?php echo $this->lang->line('msg_enter_name'); ?>"  class="form-control input-sm chat_input" required=""></textarea>
                                                      </div>
                                                    </fieldset>
                                                </div>


                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden1" id="myForm">
                                                 
                                                 <div style="background-color: #E5E5E5; color:rightgray;" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                                 </div>
                                             
                                                 <div style="background-color: #E5E5E5; color:rightgray;" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                                                        <h3><?php echo $this->lang->line('msg_contact_infor'); ?> <small></small></h3>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12" style="margin-bottom: 10px;">
                                                    <!-- <div class="input-group">
                                                     <label>Full Name</label> -->
                                                     <input type="text" name="name"  placeholder="<?php echo $this->lang->line('msg_enter_your_name'); ?>" class="form-control" required="" />          
                                                    <!-- </div> -->
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12" style="margin-bottom: 10px;">
                                                    <!-- <div class="input-group">
                                                     <label>Phone Number</label> -->
                                                     <input type="number" name="phone"  placeholder="<?php echo $this->lang->line('msg_enter_phone_number'); ?>"  class="form-control"  />          
                                                    <!-- </div> -->
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12" style="margin-bottom: 25px;">
                                                    <!-- <div class="input-group">
                                                     <label>E-mail Address</label> -->
                                                     <input type="email" name="email"  placeholder="<?php echo $this->lang->line('msg_enter_email_address'); ?> "  class="form-control" required="" />          
                                                    <!-- </div> -->
                                                    </div>
                                                 </div>

                                                 <div style="background-color: #E5E5E5; color:rightgray;" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                                 </div>

                                                 <div style="margin-top: 20px;" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> 
                                                     <button type="submit" name="postBtn" value="OK" class="btn btn-info btn-lg pull-right" id="btn-chat">&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_post'); ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-save"></i></button>
                                                 </div>
                                                


                                                </div>
                                               <!--  <div id="demo"></div> -->
                                              
                                           </form>
                                            </div>





                                        </div>
                                        <div class="timeline-footer">
                                            <!-- <a class="btn btn-warning btn-flat btn-xs">View comment</a> -->
                                        </div>
                                    </div>
                                </li>
                                <?php //endforeach; ?>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                         <!-- <li>
                                            <i class="fa fa-eye bg-yellow"></i>
                                            <div class="timeline-item">
                                                 <span style="font-size: 14px;" class="label label-warning pull-right"><i class="fa fa-clock-o"></i> <b >OLD</b></span>
                                                <h3 class="timeline-header"><a href="#"></a><b>Old Two</b></h3>
                                                <div class="timeline-body">
                                                    ...
                                                </div>
                                                <div class="timeline-footer">
                                                    <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                                </div>
                                            </div>
                                        </li> -->
                                <!-- END timeline item -->
                                <li>
                                    <i class="fa fa-clock-o"></i>


                                </li>
                            </ul>
                        </div><!-- /.col -->



                        <!-- =============== ADSENSE ============== -->
                        <div class="col-md-2 col-sm-12 col-xs-12" style="padding-right: 0; padding-left: 0;">
                          
                        </div>
                        <!-- ===============END ADSENSE ========== -->



                    </div><!-- /.row -->

                </section>






<script type="text/javascript">
    
$(document).ready(function(){
         var x = document.getElementById('myForm');
         x.style.display = 'none';
         /* var y = document.getElementById('myReplay');
         y.style.display = 'none';*/
    });



    function myFunction() {
        /*alert('here');*/
        var x = document.getElementById('myForm');
        if (x.style.display === 'none') {
            x.style.display = 'block';
        } else {
           /* x.style.display = 'none';*/
        }
    }

     function myFunction2() {
        var y = document.getElementById('myReplay');
        if (y.style.display === 'none') {
            y.style.display = 'block';
        } else {
           /* x.style.display = 'none';*/
        }
    }
</script>