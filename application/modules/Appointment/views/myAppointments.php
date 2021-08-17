                            <section>

                            <div class="box box-info" style="margin-top: 15px;">
                                <div class="box-header" style="cursor: move;">
                                    <i class="ion ion-clipboard"></i>
                                    <h3 class="box-title"><?php echo $this->lang->line('msg_available_appointments'); ?></h3>
                                    <div class="box-tools pull-right">
                                       
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <ul class="todo-list ui-sortable">

                                       
                                        <?php foreach ($appointmentres->result() as $row): ?>
                                            <?php if($row->approval == "Accepted") {?>
                                                <li>
                                                <span class="handle">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>  
                                                <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" name="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                            
                                                <span class="text"><?php echo $row->date?>  <?php echo $row->sttime?> to <?php echo $row->entime?> | <?php echo $row->requestername?> | <?php echo $row->purpose?></span>
                                                <small class="label label-success"><i class="fa fa-clock-o"></i><?php echo $row->approval?></small>
                                                    <div class="tools">
                                                        <button type="submit" name="" value="<?php echo $row->id;?>" class="btn btn-default btn-sm pull-right"><i class="fa fa-eye"></i></button>
                                                        <button type="submit" name="delBtn" value="<?php echo $row->id;?>" class="btn btn-default btn-sm pull-right"><i class="fa fa-trash-o"></i></button>
                                                        <button type="submit" name="rejectBtn" value="<?php echo $row->id;?>" class="btn btn-default btn-sm pull-right"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </li>
                                            <?php } else if($row->approval == "Pending") {?>
                                            <li>
                                                <span class="handle">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>  
                                                <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" name="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                            
                                                <span class="text"><?php echo $row->date?>  <?php echo $row->sttime?> to <?php echo $row->entime?> | <?php echo $row->requestername?> | <?php echo $row->purpose?></span>
                                                <small class="label label-warning"><i class="fa fa-clock-o"></i><?php echo $row->approval;?></small>
                                                    <div class="tools">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row->id;?>" class="collapsed pull-right">
                                                            <button   class="btn btn-default btn-sm pull-right"><i class="fa fa-eye"></i></button>
                                                        </a>
                                                        <button type="submit" name="acceptBtn" value="<?php echo $row->id;?>" class="btn btn-default btn-sm pull-right"><i class="fa fa-check"></i></button>
                                                        <button type="submit" name="delBtn" value="<?php echo $row->id;?>" class="btn btn-default btn-sm pull-right"><i class="fa fa-trash-o"></i></button>
                                                        <button type="submit" name="rejectBtn" value="<?php echo $row->id;?>" class="btn btn-default btn-sm pull-right"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </li>
                                                 
                                                    
                                            <?php } else {?>
                                            <li>
                                                <span class="handle">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>  
                                                <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" name="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>                                            
                                                <span class="text"><?php echo $row->date?>  <?php echo $row->sttime?> to <?php echo $row->entime?> | <?php echo $row->requestername?> | <?php echo $row->purpose?></span>
                                                <small class="label label-danger"><i class="fa fa-clock-o"></i><?php echo $row->approval;?></small>
                                                    <div class="tools">
                                                        <button type="submit" name="" value="<?php echo $row->id;?>" class="btn btn-default btn-sm pull-right"><i class="fa fa-eye"></i></button>
                                                        <button type="submit" name="acceptBtn" value="<?php echo $row->id;?>" class="btn btn-default btn-sm pull-right"><i class="fa fa-check"></i></button>
                                                        <button type="submit" name="delBtn" value="<?php echo $row->id;?>" class="btn btn-default btn-sm pull-right"><i class="fa fa-trash-o"></i></button>
                                                        <button type="submit" name="rejectBtn" value="<?php echo $row->id;?>" class="btn btn-default btn-sm pull-right"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </li>
                                            <?php }?> <!--  ======= end if ======== -->
                                             <form action="<?php echo base_url('Appointment/availableAppointments')?>" method="post">
                                                    <div id="<?php echo $row->id;?>" class="panel-collapse collapse" style="height: 0px;">
                                                        <div class="box-body">
                                                        <hr>
                                                            <b>Requester Name: </b><?php echo $row->requestername;?> <br>
                                                            <b>Requester Contacts : </b><?php echo $row->requesterphone;?> | <?php echo $row->requesteremail;?><br>
                                                            <b>Requested Time: </b><?php echo $row->date;?> <?php echo $row->sttime;?> to <?php echo $row->entime;?><br>
                                                            <b>Request for : </b><?php echo $row->purpose;?> <br>
                                                            <b>Request Description: </b><p><?php echo $row->description;?> </p>
                                                        </div>
                                                         <div class="box-footer">
                                                            <button class="btn btn-warning btn-sm " name="rejectbtn" value="<?php echo $row->id;?>" type="submit">Reject &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="fa  fa-times"></li></button>
                                                            <button class="btn btn-info btn-sm " name="modifybtn" value="<?php echo $row->id;?>" type="submit">Delete &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="fa  fa-edit"></li></button>
                                                            <button class="btn btn-success btn-sm pull-right" name="acceptbtn" value="<?php echo $row->id;?>" type="submit">Accept &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="fa  fa-check"></li></button>
                                                        </div>
                                                        <hr>
                                                    </div>
                                               </form>
                                        <?php endforeach?>      
                                       
                                    </ul>
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix no-border">
                                    <!-- <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button> -->
                                </div>
                            </div>

</section>