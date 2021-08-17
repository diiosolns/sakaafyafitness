<style type="text/css">
  /*  @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);*/
.faqHeader {
    font-size: 27px;
    margin: 20px;
}

.panel-heading [data-toggle="collapse"]:after {
    font-family: 'FontAwesome';
    content: "\f078"; /* "play" icon */
    float: right;
    color: #F58723;
    font-size: 18px;
    line-height: 22px;
    /* rotate "play" icon from > (right arrow) to down arrow */
/*    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg); */
}

.panel-heading [data-toggle="collapse"].collapsed:after {
    /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
/*    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg); */
    color: #454444;
}




.jumbotron {
background: #358CCE;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 20px;
padding-bottom: 0px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 20px;
}

.fullwidth {
    margin-left: 0;
    margin-right: 0; 
    width: 100%;
}



</style>

<div class="" >
<!-- <b><?php echo $this->lang->line('msg_'); ?></b> -->
<div  class="container partialwidth" >
    <!-- <div class="jumbotron jumbotron-sm" style="background-color:#339966;margin-top:2%;color:white;"> -->
     <div class="jumbotron jumbotron-sm" style="background-color:#00c0ef; margin-top:2%;color:white; margin-bottom: 1%;">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h3 class="h3" style="margin-top:-1%">
                    <b><?php echo $this->lang->line('msg_faq_long'); ?></b>
                </h3>
            </div>
        </div>
    </div>
</div>


<div class="container partialwidth">
    <div class="box padding">
        <div class="box-body">

    <!-- <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        This section contains a wealth of information, related to <strong>PrepBootstrap</strong> and its store. If you cannot find an answer to your question, 
        make sure to contact us. 
    </div> -->



    <div class="panel-group" id="accordion">
        <div class="faqHeader"><?php echo $this->lang->line('msg_general_questions'); ?></div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><?php echo $this->lang->line('msg_qn1'); ?> </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                   </a><?php echo $this->lang->line('msg_ans1'); ?>
                </div>
            </div></a>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"><?php echo $this->lang->line('msg_qn2'); ?></a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                   <?php echo $this->lang->line('msg_ans2'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven"><?php echo $this->lang->line('msg_qn3'); ?></a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $this->lang->line('msg_ans3'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve"><?php echo $this->lang->line('msg_qn4'); ?></a>
                </h4>
            </div>
            <div id="collapseTwelve" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $this->lang->line('msg_ans4'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen"><?php echo $this->lang->line('msg_qn5'); ?></a>
                </h4>
            </div>
            <div id="collapseThirteen" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $this->lang->line('msg_ans5'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseForteen"><?php echo $this->lang->line('msg_qn6'); ?> </a>
                </h4>
            </div>
            <div id="collapseForteen" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $this->lang->line('msg_ans6'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen"><?php echo $this->lang->line('msg_qn7'); ?></a>
                </h4>
            </div>
            <div id="collapseFifteen" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $this->lang->line('msg_ans7'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen"><?php echo $this->lang->line('msg_qn8'); ?></a>
                </h4>
            </div>
            <div id="collapseSixteen" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $this->lang->line('msg_ans8'); ?>
                </div>
            </div>
        </div>

        <!-- end ne ehuduma -->

        <!-- <div class="faqHeader"><?php echo $this->lang->line('msg_profile'); ?></div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><?php echo $this->lang->line('msg_how_can_i_register_a_profile_qn'); ?></a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $this->lang->line('msg_how_can_i_register_a_profile_answr'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><?php echo $this->lang->line('msg_how_can_i_search_a_profile_qn'); ?></a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $this->lang->line('msg_how_can_i_search_a_profile_answr'); ?>
                    <ul>
                        <li><?php echo $this->lang->line('msg_qn2_point1'); ?></li>
                        <li><?php echo $this->lang->line('msg_qn2_point2'); ?></li>
                        <li><?php echo $this->lang->line('msg_qn2_point3'); ?></li>
                        <li><?php echo $this->lang->line('msg_qn2_point4'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><?php echo $this->lang->line('msg_how_do_i_make_an_appointment_qn'); ?> </a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                 <div class="panel-body">
                   <?php echo $this->lang->line('msg_how_do_i_make_an_appointment_answr'); ?>
                     <ul>
                        <li><?php echo $this->lang->line('msg_qn3_point1'); ?></li>
                        <li><?php echo $this->lang->line('msg_qn3_point2'); ?></li>
                        <li><?php echo $this->lang->line('msg_qn3_point3'); ?></li>
                        <li><?php echo $this->lang->line('msg_qn3_point4'); ?></li>
                    </ul>
                </div>
            </div>
        </div> -->

        <!-- <div class="faqHeader"><?php echo $this->lang->line('msg_user'); ?></div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><?php echo $this->lang->line('msg_account_reg_qn'); ?></a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                     <?php echo $this->lang->line('msg_account_reg_answr'); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"><?php echo $this->lang->line('msg_is_there_any_cost_qn'); ?></a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo $this->lang->line('msg_is _there_any_cost_answr'); ?>
                </div>
            </div>
        </div> -->

        
    </div>
</div><!-- <?php //echo $this->lang->line('msg_'); ?> -->

</div>
</div>
   
</div>