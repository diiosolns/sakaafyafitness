<style type="text/css">
    .file_card{
        background-color: #fff;
        margin-bottom: 20px;
        padding-bottom: 10px;
    }
    .file_card_desc{
        padding: 5px 15px 5px 15px;
    }

    /*copy*/
    .tooltip {
      position: relative;
      display: inline-block;
    }

    .tooltip .tooltiptext {
      visibility: hidden;
      width: 140px;
      background-color: #555;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px;
      position: absolute;
      z-index: 1;
      bottom: 150%;
      left: 50%;
      margin-left: -75px;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .tooltip .tooltiptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }

    .tooltip:hover .tooltiptext {
      visibility: visible;
      opacity: 1;
    }
    /*end copy*/
</style>

<div class="box box-info" style="margin-top: 15px;">
    <div class="box-header">
        <h3 class="box-title"><b>Add new file<?php //echo $this->lang->line('msg_record_news'); ?></b></h3>
    </div><!-- /.box-header -->
    <form class="form-style-1" action="<?php echo base_url('Artical/submitUploads')?>" method="post" enctype="multipart/form-data">
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" id="title" placeholder="File title<?php //echo $this->lang->line('msg_enter_heading'); ?>." required="">
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="form-group">
                        <input type="file" name="file_name" accept=".gif, .jpg, .png" class="form-control" id="file_name" placeholder="Choose a file to upload<?php //echo $this->lang->line('msg_enter_heading'); ?>." required="">
                    </div>
                </div>
                <div class="col-md-3" style="text-align: center;">
                    <button type="submit" name="upbtn" value="ok" class="btn btn-info btn-md"><b>Upload<?php //echo $this->lang->line('msg_save_news'); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-upload"></i></b></button>
                </div>
            </div>
        </div><!-- /.box-body -->
    </form>
</div>

<!-- List of all uploads -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <?php $index = 1;?>
        <?php foreach ($uploadsRes->result() as $up): ?>
            <?php $url = base_url('/uploads/blogs/').$up->name;?>
            <div class="row file_card">
                <div class="col-md-3">
                    <a href="<?php echo $url;?>" target="_blank"><img src="<?php echo $url;?>" alt="blog file" width="100%"></a>
                </div>
                
                <div class="col-md-9 file_card_desc">
                    <h3><?php echo $up->title;?></h3>
                    <div style="margin-top: 20px;" >
                        <button id="copy_btn<?php echo $up->id;?>" onclick1="myFunction()" >Copy Link:</button>
                        <input type="text" value="<?php echo $url;?>" id="myInput<?php echo $up->id;?>" >
                        <a href="<?php echo base_url('Artical/removeUploads/')?><?php echo $up->id;?>" class="pull-right" style="color: red;"><b>Remove</b></a>
                    </div>
                    <!-- <small>
                        <strong><a onclick="myFunction()" onmouseout="outFunc()">Copy Link:</a> </strong>
                        <a href="<?php echo $url;?>" id="myInput" target="_blank" ><?php echo $url;?></a>
                    </small> --> 
                </div>
            </div>
        <?php $index ++;?>
        <script>
            function myFunction() {
              var copyText = document.getElementById("myInput<?php echo $up->id;?>");
              copyText.select();
              copyText.setSelectionRange(0, 99999);
              document.execCommand("copy");
            }

            var element = document.getElementById('copy_btn<?php echo $up->id;?>'); // grab a reference to your element
            element.addEventListener('click', myFunction); 
        </script>
        <?php endforeach; ?>
        </div>
        <div class="col-md-2"></div>
    </div>
      
</div>
<!-- end uploads -->




