<div class="box box-info  " style="margin-top: 15px;">
    <div class="box-header">
        <h3 class="box-title"><b>Manage Transactions<?php //echo $this->lang->line('msg_manage_my_profile'); ?></b></h3>
    </div><!-- /.box-header -->
    <div class="box-body padding" style="overflow-x:scroll; white-space: nowrap;">
         <form class="form-inline pull-left" action="<?php echo base_url('Admin/ManageTransactions'); ?>"  method="post" style="padding-bottom: 10px;" >
           <div class="form-group subscribe_email">
            <input type="text" name="keyword" class="form-control subscribe_in" id="email" placeholder="Control No" required="">
           </div>
           <button type="submit" name="searchBtn" value="ok" class="btn btn-default subscribe_btn" >Search</button>
        </form>
    <div class="btn-group pull-right" style="padding-bottom: 10px;">
        <a href="<?php echo base_url('Admin/ManageTransactions/Active');?>" class="btn btn-default btn-sm">Active&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
        <a href="<?php echo base_url('Admin/ManageTransactions/Pending');?>" class="btn btn-default btn-sm">Pending&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
        <a href="<?php echo base_url('Admin/ManageTransactions/Received');?>" class="btn btn-default btn-sm">Received&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
        <a href="<?php echo base_url('Admin/ManageTransactions/Cancelled');?>" class="btn btn-default btn-sm">Cancelled&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
    </div>  

    <form action="<?php echo base_url('Admin/ManageTransactions')?>" method="post">
        <table class="table table-striped">
            <tbody><tr>
                <th style="width: 10px">S/N</th>
                <th><?php echo $this->lang->line('msg_tools'); ?></th>
                <th>Requested by<?php //echo $this->lang->line('msg_tools'); ?></th>
                <th>Invoice No.<?php //echo $this->lang->line('msg_tools'); ?></th>
                <th>Control No.<?php //echo $this->lang->line('msg_profile_name'); ?></th>
                <th>Pay No.<?php //echo $this->lang->line('msg_profile_name'); ?></th>
                <th>Receipt<?php //echo $this->lang->line('msg_type'); ?></th>
                <th>Amount<?php //echo $this->lang->line('msg_category'); ?></th>
                <th>Period<?php //echo $this->lang->line('msg_category'); ?></th>
                <th>Pay method<?php //echo $this->lang->line('msg_category'); ?></th>
                <th>Paid<?php //echo $this->lang->line('msg_category'); ?></th>
                <th>Trans Time<?php //echo $this->lang->line('msg_sub_category'); ?></th> 
                <th>Expire Date<?php //echo $this->lang->line('msg_profile_owner'); ?></th>
                <th>Status<?php //echo $this->lang->line('msg_last_modified'); ?></th>
                <th>Remove<?php //echo $this->lang->line('msg_last_modified'); ?></th>
            </tr>
            <?php $index = 1;?>
                <?php foreach ($paymentRes->result() as $row): ?> 
                    <?php
                        $user_res = modules::load('Admin')->Mdl_admin->get_where_custom_tb('users', 'id', $row->userid);
                    ?>                                      
                    <tr>
                        <td><?php echo $index;?></td>
                        <td>
                            <button type="submit" class="btn btn-success btn-xs " name="receiveBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Received"><i class="fa fa-check"></i></button>
                            <button type="submit" class="btn btn-warning btn-xs " name="cancelBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Cancel"><i class="fa fa-times"></i></button>
                            <!-- <button type="submit" class="btn btn-success btn-xs"  name="newBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as NEW"><i class="fa fa-file"></i></button> 
                            <button type="submit" class="btn btn-warning btn-xs"  name="oldBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as OLD"><i class="fa fa-file"></i></button> -->
                        </td>
                        <td><a href="<?php echo base_url('Profile/userProfile');?>/<?php echo $user_res->row()->id;?>"><?php echo $user_res->row()->name;?></a></td>
                        <td><?php echo $row->invoiceno;?> </td>
                        <td><?php echo $row->controlno;?> </td>
                        <td><?php echo $row->payno;?> </td>
                        <td>
                            <?php if($row->receipt=="Received") { ;?>
                            <span class="label label-success"><?php echo $row->receipt;?></span>
                            <?php } else { ;?>
                            <span class="label label-warning"><?php echo $row->receipt;?></span>
                            <?php } ;?>
                        </td>
                        <td><?php echo number_format($row->amount,0) ;?> </td>
                        <td><?php echo $row->period;?> </td>
                        <td><?php echo $row->paymethod;?> </td>
                        <td><?php echo $row->paid;?> </td>
                        <td><?php echo $row->udate;?> </td>
                        <td><?php echo $row->expdate;?> </td>
                        <td>
                            <?php if($row->status=="Active") { ;?>
                            <span class="label label-success"><?php echo $row->status;?></span>
                            <?php } else { ;?>
                            <span class="label label-warning"><?php echo $row->status;?></span>
                            <?php } ;?>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-danger btn-xs " name="deleteBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Delete this transaction"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>                                        
            <?php $index ++;?>
            <?php endforeach; ?>                                              
        </tbody></table>
        </form>
        <br><br><br>
    </div><!-- /.box-body -->
</div>