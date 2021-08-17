<div class="box box-info" style="margin-top: 15px;">
    <div class="box-header"><!-- <?php echo $this->lang->line('msg_'); ?> -->
        <h3 class="box-title"><?php echo $this->lang->line('msg_manage_blogs'); ?></b></h3>
    </div><!-- /.box-header -->
    <div class="box-body no-padding">
    <form action="<?php echo base_url('Artical/manageArticals')?>" method="post">
         <table class="table table-striped">
            <tbody><tr>
                <th style="width: 10px">#</th><!-- <?php echo $this->lang->line('msg_'); ?> -->
                <th><?php echo $this->lang->line('msg_blog_heading'); ?></th>
                <th><?php echo $this->lang->line('msg_registered_by'); ?></th>
                <th><?php echo $this->lang->line('msg_ageing'); ?></th>
                <th><?php echo $this->lang->line('msg_tools'); ?></th> 
                <th><?php echo $this->lang->line('msg_status'); ?></th>
            </tr>
            <?php $index = 1;?>
                <?php foreach ($articalRes->result() as $row): ?>
                    <tr>
                        <td><?php echo $index;?></td>
                        <td><?php echo $row->heading;?> </td>
                        <td><?php echo $row->registeredby;?> </td>
                        <td><?php $today = mdate('%Y-%d-%d %H:%i:%s'); echo timespan(strtotime($row->date),  strtotime($today));?></td>
                         <td>
                            <button type="submit" class="btn btn-default btn-xs " name="editBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Edit This Artical"><i class="fa fa-edit"></i></button>
                            <button type="submit" class="btn btn-danger btn-xs " name="deleteBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Delete This Artical"><i class="fa fa-times"></i></button>
                            <button type="submit" class="btn btn-success btn-xs"  name="newBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as NEW"><i class="fa fa-file"></i></button> 
                            <button type="submit" class="btn btn-warning btn-xs"  name="oldBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as OLD"><i class="fa fa-file"></i></button>
                            <a href="<?php echo base_url('Artical/blog');?>/<?php echo $row->id;?>" target="_blank" class="btn btn-default btn-xs"  data-toggle="tooltip" title="" data-original-title="Preview"><i class="fa fa-eye"></i></a>
                        </td>
                        <?php if($row->status == "NEW") {?>
                        <td><span class="label label-success"><?php echo $row->status;?></span></td>
                        <?php } else if($row->status == "OLD") {?>
                            <td><span class="label label-warning"><?php echo $row->status;?></span></td>
                        <?php } else { ?>
                        <td><span class="label label-default"><?php echo $row->status;?></span></td> 
                        <?php }?>  
                    </tr>
            <?php $index ++;?>
            <?php endforeach; ?>                                         
        </tbody></table>
        </form>
        <br><br><br>
    </div><!-- /.box-body -->
</div>