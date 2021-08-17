                                    <div class="box box-info  " style="margin-top: 15px;">
                                         <form action="<?php echo base_url('Appointment/profileTimetable')?>" method="post">
                                                <div class="box-header">
                                                    <h3 class="box-title"><b><?php echo $this->lang->line('msg_edit_schedule'); ?> (<?php echo $profileName;?>)</b></h3>
                                                </div><!-- /.box-header -->
                                                <div class="box-body padding">
                                               
                                                    <table class="table table-striped">
                                                        <tbody><tr>
                                                            <th style="width: 5%">#</th>
                                                            <th style="width: 30%"><?php echo $this->lang->line('msg_day'); ?></th>
                                                            <th style="width: 20%"><?php echo $this->lang->line('msg_from'); ?></th>
                                                            <th style="width: 20%"><?php echo $this->lang->line('msg_to'); ?></th>
                                                            <th style="width: 25%"><?php echo $this->lang->line('msg_timezone'); ?></th> 
                                                        </tr>
                                                       
                                                        <tr>
                                                            <td><b>1</b></td> 
                                                            <td><b><?php echo $this->lang->line('msg_mon'); ?></b></td>   
                                                            <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="monfrom" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                             <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="monto" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                            <td>EAT</td>      
                                                        </tr>


                                                        <tr>
                                                            <td><b>2</b></td> 
                                                            <td><b><?php echo $this->lang->line('msg_tues'); ?></b></td>   
                                                            <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="tuesfrom" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                             <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="tuesto" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                            <td>EAT</td>      
                                                        </tr>


                                                        <tr>
                                                            <td><b>3</b></td> 
                                                            <td><b><?php echo $this->lang->line('msg_wedness'); ?></b></td>   
                                                            <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="wednessfrom" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                             <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="wednessto" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                            <td>EAT</td>      
                                                        </tr>


                                                        <tr>
                                                            <td><b>4</b></td> 
                                                            <td><b><?php echo $this->lang->line('msg_thurs'); ?></b></td>   
                                                            <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="thursfrom" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                             <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="thursto" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                            <td>EAT</td>      
                                                        </tr>

                                                        <tr>
                                                            <td><b>5</b></td> 
                                                            <td><b><?php echo $this->lang->line('msg_fri'); ?></b></td>   
                                                            <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="frifrom" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                             <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="frito" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                            <td>EAT</td>      
                                                        </tr>


                                                        <tr>
                                                            <td><b>6</b></td> 
                                                            <td><b><?php echo $this->lang->line('msg_satur'); ?></b></td>   
                                                            <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="saturfrom" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                             <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="saturto" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                            <td>EAT</td>      
                                                        </tr>


                                                        <tr>
                                                            <td><b>7</b></td> 
                                                            <td><b><?php echo $this->lang->line('msg_sun'); ?></b></td>   
                                                            <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="sunfrom" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                             <td>            
                                                                <div class="form-group">
                                                                    <div class='input-group date' id='datetimepicker3'>
                                                                       <input type='time' class="form-control input-sm" name="sunto" required/>
                                                                       <span class="input-group-addon">
                                                                           <span class="glyphicon glyphicon-time"></span>
                                                                       </span>
                                                                    </div>
                                                                </div>
                                                            </td>  
                                                            <td>EAT</td>      
                                                        </tr>
                                                        
                                                         
                                                    </tbody></table>
                                                   
                                                   
                                                </div><!-- /.box-body -->
                                                <div class="box-footer">
                                                    <button type="submit" class="btn btn-info btn-md pull-right " name="modifyBtn" value="ok"  ><i class="fa fa-save"></i> <?php echo $this->lang->line('msg_update'); ?></button>
                                                </div>
                                            <br><br>
                                            </form>
                                            </div>