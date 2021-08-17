<div class="box box-info  " style="margin-top: 15px;">
    <div class="box-header">
        <h3 class="box-title"><b>Manage User Accounts</b></h3>
        <div class="pull-right" style="padding-top: 10px;">
            <a href="<?php echo base_url('Users/manageUsers/unverified');?>" class="btn btn-default btn-sm pull-right">Un-verified&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
            <a href="<?php echo base_url('Users/manageUsers/verified');?>" class="btn btn-default btn-sm pull-right">Verified&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
            <a href="<?php echo base_url('Users/manageUsers/User');?>" class="btn btn-default btn-sm pull-right">Employers&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
            <a href="<?php echo base_url('Users/manageUsers/Freelancer');?>" class="btn btn-default btn-sm pull-right">Freelancers&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
            <a href="<?php echo base_url('Users/manageUsers/Admin');?>" class="btn btn-default btn-sm pull-right">Admins&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- /.box-header -->
     <div class="box-body padding" style="overflow-x:scroll; white-space: nowrap;">
    <form action="<?php echo base_url('Users/manageUsers')?>" method="post">
        <table class="table table-striped">
            <tbody><tr>
                <th style="width: 10px">#</th>
                <th>TOOLS</th>
                <th>STATUS</th>
                <th>FULL NAME</th>
                <th>USER NAME</th>
                <th>EMAIL ADDRESS</th> 
                <th>PHONE NUMBER</th>
                <th>USER ROLE</th>
                <th>E-MAIL VERIFIED</th>
                <th>E-MAIL VERIFICATION TOCKEN</th>
                <th>CREATED ON</th>
            </tr>
            <?php $index = 1;?>
                <?php foreach ($userRes->result() as $row): ?>
                <?php if ($row->role=="User") {
                    $row->role = "Employer";
                } ?>
                <tr>
                <td><?php echo $index;?></td>
                 <td>
                    <a href="<?php echo base_url('Users/verifyUserAccount/');?><?php echo $row->id;?>" class="btn btn-info btn-xs "  data-toggle="tooltip"  title="" data-original-title="Verify user"><i class="fa fa-check"></i></a> 
                    <button type="submit" class="btn btn-danger btn-xs " name="deleteBtn" value="<?php echo $row->id;?>" data-toggle="tooltip"  title="" data-original-title="Delete This User"><i class="fa fa-times"></i></button>
                    <!-- <button type="submit" class="btn btn-success btn-xs"  name="newBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as NEW"><i class="fa fa-file"></i></button> 
                    <button type="submit" class="btn btn-warning btn-xs"  name="oldBtn" value="<?php echo $row->id;?>" data-toggle="tooltip" title="" data-original-title="Mark as OLD"><i class="fa fa-file"></i></button> -->
                </td>
                <td>
                    <?php if( $row->online==1) { ?>
                        <span class="label label-success">Online</span>
                    <?php } else { ?>
                        <span class="label label-warning">Offline</span>
                     <?php } ?> 
                </td>
                <td><a href="<?php echo base_url('Profile/userProfile/');?><?php echo $row->id;?>" ><?php echo $row->name;?></a> </td>
                <td><?php echo $row->username;?> </td>
                <td><?php echo $row->email;?> </td>
                <td><?php echo $row->phone;?> </td>
                <td><?php echo $row->role;?> </td>
                <td><?php echo $row->email_verified;?> </td>
                <td><?php echo $row->email_verification_tocken;?> </td>
                <td><?php echo $row->date;?> </td>
            </tr>
        <?php $index ++;?>
        <?php endforeach; ?>                                                 
        </tbody></table>
    </form>
    <br><br><br>
    </div><!-- /.box-body -->
</div>