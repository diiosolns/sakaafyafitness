<style type="text/css">
    .blog {
        /*background-color: #1328a8;*/
        color: #ed9d00 !important;
        /*background-color: #DCDCDC;*/
    }
    .blog_post{
        background-color: #fff;
        padding: 5px 15px 5px 15px;
        margin-bottom: 20px;
    }
    .blog_section{
        padding-left: 10%;
        padding-right: 10%;
    }
    .blog_related{
        margin-top: 10px;
        padding-top: 10px;
    }
    .blog_related_title{
        text-align: center;
        padding-bottom:20px;
        font-size: 28px;
    }
    .blog_related_card{
        background-color: #fff;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }
    .blog_related_card:hover{
        box-shadow: 5px 10px 18px #888888;
    }
    .blog_related_card_title{
        margin: 10px 10px 20px 10px;
    }
</style>


<!-- ======================= HEADER IMAGE ================= -->
<div id="myCarousel" class="carousel slide carousel-fade hidden-xs hidden-sm fullscreen slider" data-ride="carousel" data-interval="3000" data-pause="hover" data-wrap="true"  >
  <div class="carousel-inner" role="listbox">
    <div class="item active"  id="0">
      <img class="slider_img" src="<?php echo base_url('assets/img/fitness/4.jpg');?>" alt="About Us" width="100%" >
      <div class="carousel-caption  animated fadeInUp" style="text-align: center;  padding-bottom: 40%;  ">
        <span style="font-size: 54px;">Our blog posts<?php //echo $this->lang->line('msg_get_the_best_freelance_services'); ?></span>
        <p style="font-size: 30px;">Explore what's happening at Saka Afya Fitness Club. Subscribe to get notfied whenever we post a new topic!<?php //echo $this->lang->line('msg_small_caption'); ?></p>
      </div>
    </div>
  </div>
</div>


<section class="content blog_section" style1="padding: 15px 2% 0 2%">

<div class="row">
    <div class="col-md-9">
        <?php foreach ($visible_blog_res->result() as $row): ?>
            <div class="blog_post">
                <?php echo $row->body;?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="col-md-3">
        
    </div>
</div>



<div class="blog_related">
    <div class="text-center blog_related_title">
        <b>Related Articles</b> <br>
        <i class="fa fa-arrow-down"></i>
    </div>

    <div class="row">
        <?php foreach ($relatedRes->result() as $post): ?>
            <?php $url = base_url('/uploads/blogs/ehuduma.png')?>
            <div class="col-md-4">
                <div class="blog_related_card">
                    <a href="<?php echo base_url('/Artical/blog/').$post->id;?>"><img src="<?php echo $url;?>" alt="blog post" width="100%"></a>
                    <div class="blog_related_card_title">
                        <a href="<?php echo base_url('/Artical/blog/').$post->id;?>" style="color: #222;"><h3><?php echo $post->heading;?></h3></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?> 
    </div>
</div>

</section>