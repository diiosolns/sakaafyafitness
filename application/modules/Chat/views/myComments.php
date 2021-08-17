                                            <div class="box box-info  " style="margin-top: 15px;">
                                                <div class="box-header">
                                                    <h3 class="box-title"><b><?php echo $this->lang->line('msg_profile_comments'); ?></b></h3>
                                                </div><!-- /.box-header -->
                                                <div class="box-body padding" style1="overflow-x:scroll; white-space: nowrap;">
                                                <form action="<?php echo base_url('Chat/manageComments')?>" method="post">
                                                    <table class="table table-striped">
                                                        <tbody><tr>
                                                            <th style="width: 5%">#</th>
                                                             <th style="width: 5%"><?php echo $this->lang->line('msg_tools'); ?></th>
                                                            <th style="width: 15%"><?php echo $this->lang->line('msg_sender_name'); ?></th>
                                                            <th style="width: 35%"><?php echo $this->lang->line('msg_comment_text'); ?></th>
                                                            <th style="width: 20%"><?php echo $this->lang->line('msg_comment_replay'); ?></th>
                                                            <th style="width: 10%"><?php echo $this->lang->line('msg_update_on'); ?></th>
                                                        </tr>
                                                        <?php $index = 1;?>
                                                        <?php foreach ($commentRes->result() as $row): ?>
                                                            <tr>
                                                                <td><?php echo $index; ?></td>
                                                                 <td>
                                                                    <!-- <button type="submit" class="btn btn-default btn-xs " name="editBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Edit This Artical"><i class="fa fa-edit"></i></button> -->
                                                                    <button type="submit" class="btn btn-danger btn-md " name="viewBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Delete This Comment"   style="border-radius: 50px;" ><i class="fa fa-times"></i></button>
                                                                    <!-- <button type="submit" class="btn btn-default btn-xs"  name="editBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Edit Timetable"><i class="fa fa-edit"></i></button>  -->
                                                                    <!-- <button type="submit" class="btn btn-warning btn-xs"  name="oldBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as OLD"><i class="fa fa-file"></i></button> -->
                                                                </td>
                                                                <td><?php echo $row->sender; ?> </td>
                                                                <td><?php echo $row->comment; ?> </td>
                                                                <td><?php echo $row->replay; ?> </td>
                                                                <!-- <td><?php //echo modules::load('Users')->get_where_custom('id', $row->userid)->row()->name;?> </td> -->
                                                               
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