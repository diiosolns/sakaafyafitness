                              <div style="margin-top: 0px; padding-top: 0px;" class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><b>Edit User Credentials</b></h3>
                                </div> 

                                  <form action="<?php echo base_url('Users/manageUsers')?>" method="post">
                                        <div class="box-body">
                                        <?php foreach ($editres->result() as $row): ?>
                                        <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input class="form-control input-sm" name="name" value="<?php echo $row->name;?>" placeholder="Enter Full Name"  type="text" required="">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Username (One word)</label>
                                                    <input class="form-control input-sm" name="username" value="<?php echo $row->username;?>" placeholder="Enter Username"  type="text" required="">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Default Password</label>
                                                    <input class="form-control input-sm" name="password" value="<?php echo $row->password;?>" placeholder="Enter User Default Password"  type="password" required="">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input class="form-control input-sm" name="password2" value="" placeholder="Confirm User Default Password"  type="password" required="">
                                                </div>
                                              </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>User Category</label>
                                                <select class="form-control input-sm" name="role" id="" required="">
                                                    <option value="<?php echo $row->role;?>"><?php echo $row->role;?></option>
                                                    <option value="admin">Admin</option>
                                                    <option value="store">Storekeeper</option>
                                                    <option value="baker">Production Member</option>
                                                    <option value="seller">Sales Member</option>
                                                </select>
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
                                          <button type="submit" name="modifyBtn" value="<?php echo $row->id;?>" class="btn btn-info btn-sm pull-right">&nbsp;&nbsp;&nbsp;&nbsp;UPDATE USER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="fa  fa-save"></li></button>
                                          <hr>
                                    <?php endforeach; ?> 
                                        </div><!-- /.box-body -->
                                       </form>  
                                  </div>