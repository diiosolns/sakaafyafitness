<div class="box box-info" style="margin-top: 15px;">
                                <div class="box-header">
                                    <h3 class="box-title"><?php echo $this->lang->line('msg_edit_news'); ?></h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form class="form-style-1" action="<?php echo base_url('Artical/manageNews')?>" method="post" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <?php foreach ($newsRes->result() as $row): ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="body"><?php echo $this->lang->line('msg_news_heading1'); ?></label>
                                                    <input type="text" name="heading" class="form-control" id="heading" value="<?php echo $row->heading;?>" placeholder="Enter heading ..." required="">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="body"><?php echo $this->lang->line('msg_news_body'); ?></label>
                                                    <textarea class="textarea"  name="body" rows="10" class="form-control" required=""  style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $row->body;?> </textarea>
                                                </div>
                                            </div>

                                             <div class="col-md-12" style="text-align: center;">
                                                <b style="color: <?php echo $color;?>;"><?php echo $msg;?></b>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer" style="text-align: center;">
                                        <button type="submit" name="modifyBtn" value="<?php echo $row->id;?>" class="btn btn-info btn-md"><b><?php echo $this->lang->line('msg_modify'); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-save"></i></b></button>
                                    </div>
                                </form>
                            </div>