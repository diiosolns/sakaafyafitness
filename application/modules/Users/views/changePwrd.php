<div class="row">
<div class="col-md-12"><br></div>
          <!-- CHANGE PASSWORD -->
          <div class="col-md-6">  <!-- <?php //echo $this->lang->line('msg_'); ?> -->
                        <div style="margin-top: 0px; padding-top: 0px;" class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><b><?php echo $this->lang->line('msg_change_password'); ?></b></h3>
                                </div> 
                                 <div class="col-md-12">
                                  <!--  alert message ..... -->
                                         <?php echo $err;?>
                                        <!-- ... end alert...  --> 
                                 </div>
                                  <form action="<?php echo base_url('Users/ChangePassword')?>" method="post">
                                        <div class="box-body">
                                      
                                        <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label><?php echo $this->lang->line('msg_current_password'); ?></label>
                                                    <input class="form-control input-sm" name="cpword" value="" placeholder="<?php echo $this->lang->line('msg_enter_current_password'); ?>"  type="password" required="">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label><?php echo $this->lang->line('msg_new_password'); ?></label>
                                                    <input class="form-control input-sm" name="password" value="" placeholder="<?php echo $this->lang->line('msg_enter_new_password'); ?>"  type="password" required="">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label><?php echo $this->lang->line('msg_comfirm_password'); ?></label>
                                                    <input class="form-control input-sm" name="password2" value="" placeholder="<?php echo $this->lang->line('msg_re_enter_new_password'); ?>"  type="password" required="">
                                                </div>
                                              </div>
                                        </div>
                                        
                                         <div class="col-md-12">
                                         <br>
                                         <?php //echo $err;?>
                                        </div>
                                         </div>  

                                          <!-- <input class="form-control input-lg" placeholder=".input-lg" type="text">
                                            <br>
                                            <input class="form-control" placeholder="Default input" type="text">
                                            <br>
                                            <input class="form-control input-sm" placeholder=".input-sm" type="text"> -->
                                          <button type="submit" name="changeBtn" value="ok" class="btn btn-info btn-sm pull-right">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->lang->line('msg_comfirm'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="fa  fa-save"></li></button>
                                          <hr>
                                        </div><!-- /.box-body -->
                                       </form>  
                                  </div>   
              </div>

              
              
          <!-- PROFILE DETAILS -->
          <div class="col-md-6">
                        <div style="margin-top: 0px; padding-top: 0px;" class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><b><?php echo $this->lang->line('msg_user_account_details'); ?></b></h3>
                                </div> 
                                 
                                        <div class="box-body">
                                       <?php foreach ($userres->result() as $row): ?>
                                        <div class="row">
                                          <div class="col-md-6">
                                             <b><?php echo $this->lang->line('msg_cpwd_full_name'); ?> : </b>
                                          </div>
                                           <div class="col-md-6">
                                             <b><?php echo $row->name;?> </b>
                                          </div>

                                          <div class="col-md-6">
                                             <b><?php echo $this->lang->line('msg_username'); ?> : </b>
                                          </div>
                                           <div class="col-md-6">
                                             <b><?php echo $row->username;?> </b>
                                          </div>

                                          <div class="col-md-6">
                                             <b>USER <?php echo $this->lang->line('msg_category'); ?> : </b>
                                          </div>
                                           <div class="col-md-6">
                                             <b><?php echo $row->role;?> </b>
                                          </div>

                                          <div class="col-md-6">
                                             <b><?php echo $this->lang->line('msg_date_registered'); ?> : </b>
                                          </div>
                                           <div class="col-md-6">
                                             <b><?php echo $row->date;?> </b>
                                          </div>

                                          <div class="col-md-6">
                                             <b><?php echo $this->lang->line('msg_last_modified'); ?> : </b>
                                          </div>
                                           <div class="col-md-6">
                                             <b><?php echo $row->udate;?> </b>
                                          </div>

                                        </div>
                                        <hr>

                                        <?php endforeach; ?> <!--  -->
                                       </div><!-- /.box-body -->

                                  </div>
              </div>


         <div class="col-md-12"><br><br><br></div>
  
</div>