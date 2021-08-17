<div style=" padding: 15px 5px 0px 0px; margin-left: 2%; margin-right: 2%;" class="row">

<div style=" padding:0px 5px 0px 0px;" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
  <div class="chat-panel panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-comments fa-fw"></i>
          <?php echo $this->lang->line('msg_my_chats'); ?>  - <?php echo modules::load('Users')->get_where($peopleid)->row()->username; ?>
       <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-chevron-down"></i>
          </button>
        <ul class="dropdown-menu slidedown">
        <li>
          <a href="<?php echo base_url('Chat/myChats')?>">
          <i class="fa fa-refresh fa-fw"></i> Refresh
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('Chat/myChats')?>">
            <i class="fa fa-save fa-fw"></i> Unread
          </a>
        </li>
        <!-- <li>
          <a href="#">
           <i class="fa fa-times fa-fw"></i> Busy
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-clock-o fa-fw"></i> Away
          </a>
        </li> -->
        <li class="divider"></li>
        <li>
          <a href="<?php echo base_url('Home/logout')?>">
            <i class="fa fa-sign-out fa-fw"></i> Sign Out
            </a>
        </li>
      </ul>
     </div>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
      <ul class="chat">
         <?php 
         $logoUrl = base_url('assets/img/logo.png');
          if ($unreadsms->num_rows() == 0) {
            # code...
            echo '<li class="left clearfix">
                    <span class="chat-img pull-left">
                      <img src="'.$logoUrl.'" alt="User" class="img-circle">
                    </span>
                    <div class="chat-body clearfix">
                      <div class="header">
                        <strong class="primary-font">eHuduma</strong> 
                        <small class="pull-right text-muted">
                          <i class="fa fa-clock-o fa-fw"></i> 0 mins ago
                        </small>
                      </div>
                      <p>
                       '.$this->lang->line('msg_sorry').'
                        <br><b style="color:blue;">'.$this->lang->line('msg_chat_welcome').'</b>
                      </p>
                    </div>
                  </li> ';
          }
        ?>
        
<!-- <?php echo $this->lang->line('msg_'); ?> -->

      <?php foreach ($unreadsms->result() as $row): ?>
      <?php 
            $peoplename = modules::load('Users')->get_where($row->senderid)->row()->username;
            $numunread = modules::load('Admin')->get_where_custom3('chat', 'senderid', $row->senderid, 'userid', $this->session->userData('user_id',true), 'status', 'unread')->num_rows(); 
      ?>
        
        <li class="left clearfix">
          <span class="chat-img pull-left">
            <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle">
          </span>
          <div class="chat-body clearfix">
            <div class="header">
              <strong class="primary-font"><?php echo $peoplename;?></strong> 
              <small class="pull-right text-muted">
                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                <i class="fa fa-reply fa-fw" data-toggle="collapse" data-target="#<?php echo $row->id; ?>"></i> Replay
              </small>
            </div>
            <p>
              <?php echo $row->incomming; ?>
            </p>
             <div class="collapse" id="<?php echo $row->id; ?>">
              <form role="form" method="post" action="<?php echo base_url('Admin/Chat')?>" enctype="multipart/form-data">  
                <div class="input-group " >
                  <input id="btn-input" type="text" name= "replay" class="form-control input-sm" placeholder="Type your message here...">
                  <span class="input-group-btn">
                    <button class="btn btn-warning btn-sm" name="replayBtn" Value="<?php echo $row->id; ?>" id="btn-chat">
                      Send
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </li>

       <!--  <li class="right clearfix">
          <span class="chat-img pull-right">
            <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle">
          </span>
          <div class="chat-body clearfix">
            <div class="header">
              <small class=" text-muted">
                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                <strong class="pull-right primary-font">Bhaumik Patel</strong>
            </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
              </p>
          </div>
        </li> -->
        <?php endforeach; ?>
                     
      </ul>
    </div>
    <!-- /.panel-body -->
    <div class="panel-footer">
     <!--  <div class="input-group">
        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here...">
          <span class="input-group-btn">
            <button class="btn btn-warning btn-sm" id="btn-chat">
               Send
            </button>
          </span>
      </div> -->
   </div>
   <!-- /.panel-footer -->
  </div>
</div>


<!-- xxxxxx the chat book xxxxxxxxxxx -->

<div style=" padding: 0px 0px 0px 5px;" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
  <div class="panel panel-info">
    <div class="panel-heading">
      <i class="fa fa-users fa-fw"></i>
       <?php echo $this->lang->line('msg_people'); ?> 
  </div>
   <div class="panel-body">
      <ul class="list-group list-group-flush"> 
        <?php 
          if ($smspeople->num_rows() == 0) {
            # code...
            //echo ' <li class="list-group-item"><h3>No New Messages.!</h3></li>';
            echo ' <b>
                   '.$this->lang->line('msg_sorry2').'
                     <br><b style="color:blue;">'.$this->lang->line('msg_chat_welcome').'</b>
                   </b>';
          }
        ?>
        <?php foreach ($smspeople->result() as $row): ?>
        <?php //echo $row->heading;?>
        <?php 
            $peoplenameRes = modules::load('Users')->get_where($row->senderid);
            if (!($peoplenameRes->num_rows() == 0)) {
              $peoplename = $peoplenameRes->row()->username; 
            } else {
              $peoplename = "eHuduma Vistor";
            }
            $numunread = modules::load('Admin')->get_where_custom3('chat', 'senderid', $row->senderid, 'userid', $this->session->userData('user_id',true), 'status', 'unread')->num_rows(); 
        ?>

        <li class="list-group-item"><a href="<?php echo base_url('Chat/myChats')?>/<?php echo $row->senderid; ?>"><i class="fa fa-user fa-fw"></i><?php echo $peoplename;?><span ><b class="badge label green pull-right" style="background-color: green;"><?php echo $numunread; ?></b></span></a></li> 
        <!-- <li class="list-group-item">Dapibus ac facilisis in</li> 
        <li class="list-group-item">Vestibulum at eros</li>  -->
        <?php endforeach; ?>
      </ul> 
   </div>
</div>
</div>

<!-- xxxxxxxxxxxxxxx end chat book xxxxxxxxxxxxxxxxxx -->

</div>