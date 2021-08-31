<div class="box box-info  " style="margin-top: 15px;">
                                                <div class="box-header">
                                                    <h3 class="box-title"><b>Manage User Profiles<?php //echo $this->lang->line('msg_manage_my_profile'); ?></b></h3>
                                                </div><!-- /.box-header -->
                                                <div class="box-body padding" style="overflow-x:scroll; white-space: nowrap;">
                                                <form action="<?php echo base_url('Profile/manageProfiles')?>" method="post">
                                                    <table class="table table-striped">
                                                        <tbody><tr>
                                                            <th style="width: 10px">#</th>
                                                            <th><?php echo $this->lang->line('msg_tools'); ?></th>
                                                            <th><?php echo $this->lang->line('msg_profile_name'); ?></th>
                                                            <th><?php echo $this->lang->line('msg_type'); ?></th>
                                                            <th><?php echo $this->lang->line('msg_category'); ?></th>
                                                            <th><?php echo $this->lang->line('msg_sub_category'); ?></th> 
                                                            <th><?php echo $this->lang->line('msg_profile_owner'); ?></th>
                                                            <th><?php echo $this->lang->line('msg_last_modified'); ?></th>
                                                        </tr>
                                                        <?php $index = 1;?>
                                                         <?php foreach ($profileRes->result() as $row): ?>
                                                            
                                                                <tr>
                                                                    <td><?php echo $index;?></td>
                                                                    <td>
                                                                        <!-- <button type="submit" class="btn btn-default btn-xs " name="editBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Edit This Artical"><i class="fa fa-edit"></i></button> -->
                                                                        <button type="submit" class="btn btn-danger btn-xs " name="deleteBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Delete This Profile"><i class="fa fa-times"></i></button>
                                                                        <!-- <button type="submit" class="btn btn-success btn-xs"  name="newBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as NEW"><i class="fa fa-file"></i></button> 
                                                                        <button type="submit" class="btn btn-warning btn-xs"  name="oldBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as OLD"><i class="fa fa-file"></i></button> -->
                                                                    </td>
                                                                    <td><a href="<?php echo base_url('Profile/userProfile/');?><?php echo $row->userid;?>"><?php echo $row->profilename;?> </a></td>
                                                                    <td><?php echo $row->type;?> </td>
                                                                    <td><?php echo $row->category;?> </td>
                                                                    <td><?php echo $row->subcategory;?> </td>
                                                                    <td><?php echo modules::load('Users')->get_where_custom('id', $row->userid)->row()->name;?> </td>
                                                                    <td><?php echo $row->udate;?> </td>
                                                                    <!-- <td><span class="label label-success">Online</span></td> -->
                                                                </tr>
                                                           
                                                        <?php $index ++;?>
                                                        <?php endforeach; ?>
                                                         
                                                    </tbody></table>
                                                    </form>
                                                    <br><br><br>
                                                </div><!-- /.box-body -->
                                            </div>