<div class="box box-info  " style="margin-top: 15px;">
                                                <div class="box-header">
                                                    <h3 class="box-title"><b>Manage historical projects<?php //echo $this->lang->line('msg_manage_my_profile'); ?></b></h3>
                                                    <div class="pull-right" style="padding-top: 10px;">
                                                        <a href="<?php echo base_url('Job/historical_jobs/cancelled');?>" class="btn btn-default btn-sm pull-right">Cancelled&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                                                        <a href="<?php echo base_url('Job/historical_jobs/pendingpayment');?>" class="btn btn-default btn-sm pull-right">Pending payment&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                                                        <a href="<?php echo base_url('Job/historical_jobs/completed');?>" class="btn btn-default btn-sm pull-right">Completed&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div><!-- /.box-header -->
                                                <div class="box-body padding" style="overflow-x:scroll; white-space: nowrap;">
                                                <form action="<?php echo base_url('Job/historical_jobs')?>" method="post">
                                                    <table class="table table-striped">
                                                        <tbody><tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Project id<?php //echo $this->lang->line('msg_profile_name'); ?></th>
                                                            <th>Project Title<?php //echo $this->lang->line('msg_type'); ?></th>
                                                            <th>Service Type<?php //echo $this->lang->line('msg_category'); ?></th>
                                                            <th>Budget<?php //echo $this->lang->line('msg_sub_category'); ?></th> 
                                                            <th>Total Cost (TZS)<?php //echo $this->lang->line('msg_sub_category'); ?></th> 
                                                            <th>Progress<?php //echo $this->lang->line('msg_profile_owner'); ?></th>
                                                            <th>Posted by<?php //echo $this->lang->line('msg_profile_owner'); ?></th>
                                                            <th>Accepted by<?php //echo $this->lang->line('msg_profile_owner'); ?></th>
                                                            <th>Done by<?php //echo $this->lang->line('msg_profile_owner'); ?></th>
                                                            <th>Closed by<?php //echo $this->lang->line('msg_profile_owner'); ?></th>
                                                            <th>Bid Status by<?php //echo $this->lang->line('msg_profile_owner'); ?></th>
                                                            <th>Project Status<?php //echo $this->lang->line('msg_profile_owner'); ?></th>
                                                            <th>Manage<?php //echo $this->lang->line('msg_tools'); ?></th>
                                                            <th>Posted On<?php //echo $this->lang->line('msg_last_modified'); ?></th>
                                                            <th>Paid On<?php //echo $this->lang->line('msg_last_modified'); ?></th>
                                                            <th>Closed On<?php //echo $this->lang->line('msg_last_modified'); ?></th>
                                                        </tr>
                                                        <?php $index = 1;?>
                                                         <?php foreach ($jobRes->result() as $row): ?>
                                                            
                                                                <tr>
                                                                    <td><?php echo $index;?></td>
                                                                    <td><a href="<?php echo base_url('Job/job_view');?>/<?php echo $row->jobid;?> "><?php echo $row->jobid;?></a> </td>
                                                                    <td><?php echo $row->jobtitle;?> </td>
                                                                    <td><?php echo modules::load('Job')->get_where_custom_tb('services', 'id', $row->serviceid)->row()->service;?> </td>
                                                                    <td><?php echo $row->budget;?> </td>
                                                                    <td><?php echo number_format($row->totalcost,0);?> </td>
                                                                    <td><?php echo $row->progress;?> </td>
                                                                    <td><?php if(!$row->postedby == 0) { echo modules::load('Users')->get_where_custom('id', $row->postedby)->row()->name; } ?> </td>
                                                                    <td><?php if(!$row->acceptedby == 0) {  echo modules::load('Users')->get_where_custom('id', $row->acceptedby)->row()->name; } ?> </td>
                                                                    <td><?php if(!$row->doneby == 0) {  echo modules::load('Users')->get_where_custom('id', $row->doneby)->row()->name; } ?> </td>
                                                                    <td><?php if(!$row->closedby == 0) {  echo modules::load('Users')->get_where_custom('id', $row->closedby)->row()->name; } ?> </td>
                                                                    <td><?php echo $row->bidstatus;?> </td>
                                                                    <td><?php echo $row->status;?> </td>
                                                                    <td>
                                                                        <!-- <button type="submit" class="btn btn-default btn-xs " name="editBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Edit This Artical"><i class="fa fa-edit"></i></button> -->
                                                                        <button type="submit" class="btn btn-danger btn-xs " name="deleteBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Delete This Profile"><i class="fa fa-times"></i></button>
                                                                        <!-- <button type="submit" class="btn btn-success btn-xs"  name="newBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as NEW"><i class="fa fa-file"></i></button> 
                                                                        <button type="submit" class="btn btn-warning btn-xs"  name="oldBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as OLD"><i class="fa fa-file"></i></button> -->
                                                                    </td>
                                                                    <td><?php echo $row->postedon;?> </td>
                                                                    <td><?php echo $row->paidon;?> </td>
                                                                    <td><?php echo $row->closedon;?> </td>
                                                                    <!-- <td><span class="label label-success">Online</span></td> -->
                                                                </tr>
                                                           
                                                        <?php $index ++;?>
                                                        <?php endforeach; ?>
                                                         
                                                    </tbody></table>
                                                    </form>
                                                    <br><br><br>
                                                </div><!-- /.box-body -->
                                            </div>