<!-- <section class="content" style="padding: 15px 2% 0 2%"> -->

    <section class="content" style="padding: 0px 0% 0 0%">
<!-- <?php echo $this->lang->line('msg_'); ?> -->
                    <!-- row -->
                    <div class="row">                        
                        <div class="col-md-10 col-sm-12 col-xs-12" style="padding-right: 0;">
                            <!-- The time line -->
                            <ul class="timeline">
                                <!-- timeline time label -->
                                <!-- <li class="time-label">
                                    <span class="bg-aqua">
                                       <b style="font-size: 20px;"><?php echo $this->lang->line('msg_blog_and_posts'); ?></b>
                                    </span>
                                </li> -->
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <?php foreach ($artical_newRes->result() as $row): ?>
                                <li>
                                     <i class="fa fa-clipboard bg-aqua"></i>
                                    <div class="timeline-item">
                                        <span style="font-size: 14px;" class="label label-default pull-right"><i class="fa fa-file"></i> <b ><?php echo $this->lang->line('msg_new_post'); ?></b></span>
                                        <h3 class="timeline-header"><a href="#"></a><b><?php echo $row->heading;?></b></h3>
                                        <div class="timeline-body" style="text-align: justify; font-size: 16px;">
                                            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->body; //echo word_limiter($row->body, 60);?> <br></div>
                                            <!-- <div class="collapse" id="<?php //echo $row->id;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... <?php //echo substr($row->body, (strlen(word_limiter($row->body, 60))-6));?></div> -->
                                        </div>
                                        <!-- <div style="text-align: center;" class="timeline-footer">
                                            <a data-toggle="collapse" data-target="#<?php //echo $row->id;?>"><b style="font-size: 18px;" ><?php //echo $this->lang->line('msg_read_more'); ?> <i class="fa fa-arrow-right"></i></b></a>
                                            <a href="<?php //echo base_url('Artical/articalPage');?>/<?php //echo $row->id;?>" class="btn btn-default btn-xs pull-right">Like &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-thumbs-o-up"></i></a>
                                            <em class="pull-right"><?php //echo number_format($row->likecount, 0) ?> Likes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em>
                                            <a class="btn btn-danger btn-xs">Delete</a>
                                        </div> -->
                                    </div>
                                </li>
                            <?php endforeach; ?>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                        <!-- <li>
                                            <i class="fa fa-clipboard bg-aqua"></i>
                                            <div class="timeline-item">
                                                <span style="font-size: 14px;" class="label label-default pull-right"><i class="fa fa-file"></i> <b >New Artical</b></span>
                                                <h3 class="timeline-header no-border"><a href="#"></a><b>Artical Two</b></h3>
                                                    <div class="timeline-body">
                                                    ..
                                                </div>
                                                <div style="text-align: center;" class="timeline-footer">
                                                    <a href="#"><b style="font-size: 18px;" >Read More ... <i class="fa fa-arrow-right"></i></b></a>
                                                    <a class="btn btn-primary btn-xs">Read more</a>
                                                    <a class="btn btn-danger btn-xs">Delete</a>
                                                </div>
                                            </div>
                                        </li> -->
                                <!-- END timeline item -->
                                <!-- timeline item -->
                               
                                <li>
                                    <i class="fa fa-clipboard "></i>
                                    <div class="timeline-item">
                                        <!-- ======== link add ======== -->
                                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                            <!-- Long Horizontal Link -->
                                            <ins class="adsbygoogle"
                                                 style="display:inline-block;width:468px;height:15px"
                                                 data-ad-client="ca-pub-4546444563839054"
                                                 data-ad-slot="3156538198"></ins>
                                            <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});
                                         </script>
                                    <!-- ============ end add ======= -->
                                    </div>
                                </li>


                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <li class="time-label">
                                    <span class="bg-yellow">
                                        <b style="font-size: 20px;"> <?php echo $this->lang->line('msg_more_news'); ?> </b>
                                    </span>
                                </li>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <?php foreach ($artical_oldRes->result() as $row): ?>
                                 <li>
                                    <i class="fa fa-clipboard bg-yellow"></i>
                                    <div class="timeline-item">
                                        <span style="font-size: 14px;" class="label label-default pull-right"><i class="fa fa-file"></i> <b >Old Posts</b></span>
                                        <h3 class="timeline-header"><a href="#"></a><b><?php echo $row->heading;?></b></h3>
                                        <div class="timeline-body" style="text-align: justify; font-size: 16px;">
                                            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->body; //echo word_limiter($row->body, 60);?> <br></div>
                                            <!-- <div class="collapse" id="<?php //echo $row->id;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... <?php //echo substr($row->body, (strlen(word_limiter($row->body, 60))-6));?></div> -->
                                        </div>
                                        <!-- <div style="text-align: center;" class="timeline-footer">
                                            <a href="#"><b style="font-size: 18px;" ><?php echo $this->lang->line('msg_read_more'); ?><i class="fa fa-arrow-right"></i></b></a>
                                            <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                        </div> -->
                                    </div>
                                </li>
                                <?php endforeach; ?>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                         <!-- <li>
                                            <i class="fa fa-clipboard bg-yellow"></i>
                                            <div class="timeline-item">
                                                <span style="font-size: 14px;" class="label label-default pull-right"><i class="fa fa-file"></i> <b >Old Artical</b></span>
                                                <h3 class="timeline-header"><a href="#"></a><b>Artical Two</b></h3>
                                                <div class="timeline-body">
                                                    ...
                                                </div>
                                                <div style="text-align: center;" class="timeline-footer">
                                                    <a href="#"><b style="font-size: 18px;" >Read More ... <i class="fa fa-arrow-right"></i></b></a>
                                                    <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                                </div>
                                            </div>
                                        </li> -->
                                <!-- END timeline item -->
                                <li>
                                    <i class="fa fa-clipboard "></i>
                                </li>
                            </ul>
                        </div><!-- /.col -->

                        <!-- =============== ADSENSE ============== -->
                        <div class="col-md-2 col-sm-12 col-xs-12" style="padding-right: 0; padding-left: 0;">
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- diioAd2 -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-4546444563839054"
                                 data-ad-slot="9199756308"
                                 data-ad-format="auto"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                        <!-- ===============END ADSENSE ========== -->


                    </div><!-- /.row -->

                </section>