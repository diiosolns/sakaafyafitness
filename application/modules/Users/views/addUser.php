                              <div style="margin-top: 15px; padding-top: 0px;" class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><b>Add New User</b></h3>
                                </div> 

                                  <form action="<?php echo base_url('Users/addUser')?>" method="post">
                                        <div class="box-body">
                                        <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input class="form-control input-sm" name="name" value="" placeholder="Enter Full Name"  type="text" required="">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Username (One word)</label>
                                                    <input class="form-control input-sm" name="username" value="" placeholder="Enter Username"  type="text" required="">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input class="form-control input-sm" name="phone" value="" placeholder="Enter Mobile Phone #"  type="number" required="">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>E-mail Address</label>
                                                    <input class="form-control input-sm" name="email" value="" placeholder="Enter Username"  type="email" required="">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Default Password</label>
                                                    <input class="form-control input-sm" name="password" value="" placeholder="Enter User Default Password"  type="password" required="">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input class="form-control input-sm" name="cpassword" value="" placeholder="Confirm Password"  type="password" required="">
                                                </div>
                                              </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>User Category</label>
                                                <select class="form-control input-sm" name="role" id="" required="">
                                                    <option value="Normal">Select User Category</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Normal">Normal</option>
                                                    <option value="Subscriber">Subscriber</option>
                                                    <!-- <option value="seller">Sales Member</option> -->
                                                </select>
                                             </div>
                                        </div>
                                        
                                         <div class="col-md-12">
                                         <br>
                                         <?php echo $msg;?>
                                        </div>
                                         </div>  

                                          <button type="submit" name="saveBtn" value="OK" class="btn btn-info btn-sm pull-right">&nbsp;&nbsp;&nbsp;&nbsp;REGISTER USER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="fa  fa-save"></li></button>
                                          <hr>
                                    
                                        </div><!-- /.box-body -->
                                       </form>  
                                  </div>