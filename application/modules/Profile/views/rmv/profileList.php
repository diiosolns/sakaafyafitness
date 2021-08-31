<style>
/*.imgcontainer {
    position: relative;
    width: 100%;
}*/

.container {
  padding-left: 2%;
  padding-right: 2%;
}

.box {
  width: 100%;
  height: 265px;
  /*margin : 5px 5px 5px 5px;*/
}

.pbox {
  border: 0px solid;
  border-color: lightgray;
}

.pbox:hover {
   background-color: lightgray;
   border: 2px solid;
   border-color: #10C4EF;
}

.searchin {
    font-size: 22px;
    padding-left: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    width: 100%; 
    border-radius: 15px;  
   /* border-radius: 10px;*/
  }

   .searchinS {
    font-size: 22px;
    padding-left: 20px;
    padding-top: 12px;
    padding-bottom: 12px;
    width: 100%; 
    border-radius: 15px;  
   /* border-radius: 10px;*/
  }

.psearch {
  background-color: lightgray;
  font-size: 26px;
  text-align: center;
  padding-bottom: 15px;
  padding-top: 15px;
  padding-left: 50px;
  padding-right: 50px;
  width: 100%;
}

.searchin2 {
    font-size: 20px;
    padding-left: 12px;
    padding-top: 10px;
    padding-bottom: 10px;
    width: 90%; 
    border-radius: 15px;
   /* border-radius: 10px;*/
  }

.psearchsm {
  background-color: lightgray;
  font-size: 20px;
  text-align: center;
  padding-bottom: 15px;
  padding-top: 15px;
}


.region {

}

.region:hover {
  color: gray;
  background-color: #10C4EF;
  font-size: 32px:;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.imgcontainer:hover .image {
  opacity: 0.3;
}

.imgcontainer:hover .middle {
  opacity: 1;
}

.text {
  /*background-color: #4CAF50;*/
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}


/*========== pagination==========*/
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    border: 1px solid #ddd;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

.pagination a:first-child {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.pagination a:last-child {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
/*=============end pagnation ===*/
</style>


<section class="content" style="padding: 15px 1% 0 1%">
<div class="container fullwidth">

  <?php
    $regionRes = modules::load('Profile')->get_col_where('profile', 'region');
  ?>

<div class="row">
  <div class="col-md-12 hidden-sm hidden-xs psearch">
     <form  class="form-style-1" action="<?php echo base_url('Profile/profileSearchList')?>" method="post"  >
      <div class="row">
        <div class="col-md-5"  style="padding: 0 5px 0 0"  >
          <input type="text"  class=" searchin" name="searchkeyword" value="" placeholder="Who are you looking for ?<?php //echo $this->lang->line('msg_search_keyword'); ?>" required=""  >
        </div>
        <div class="col-md-4"   style="padding: 0 5px 0 0">
          <select  class="searchinS" name="region" id="region"   required=""  >
            <option value="none">Where? Select a region</option>
            <?php foreach ($regionRes->result() as $row): ?>
            <option value="<?php echo $row->region;?>"><?php echo $row->region;?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-md-3" style="padding: 0 0 0 5px">
          <button  type="submit" name="searchBtn" value="OK" class="btn btn-danger btn-md searchin ">&nbsp;&nbsp;<b><?php echo $this->lang->line('msg_search_profile'); ?></b>&nbsp;&nbsp;<i class="fa fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>
  <!-- ==========Small devices ========= -->
  <div class="col-md-12 hidden-xl hidden-lg hidden-md psearchsm">
     <form class="form-style-1" action="<?php echo base_url('Profile/profileSearchList')?>" method="post">
        <div class="row">
        <div class="col-md-12" style="padding-bottom: 5px;">
            <input type="text"  class="field-long1 searchin2" name="searchkeyword" value="" placeholder="Who are you looking for ?<?php //echo $this->lang->line('msg_search_keyword'); ?>" style=""   required=""  >
        </div>
        <div class="col-md-12" style="padding-bottom: 5px;">
            <select  class="searchin2" name="region" id="region"   required=""  >
                <option value="none">Where? Select a region</option>
                <?php foreach ($regionRes->result() as $row): ?>
                <option value="<?php echo $row->region;?>"><?php echo $row->region;?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-12" >
            <button style="" type="submit" name="searchBtn" value="OK" class="btn btn-danger btn-md searchin2 "><b><?php echo $this->lang->line('msg_search_profile'); ?></b><i class="fa fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>
 <!--  =============end sm============== -->





  <div class="col-md-9">
        <div class="row">    
            <form action="<?php echo base_url('Profile/viewSelectedProfile')?>" method="post">
              <?php foreach ($profileres->result() as $row): ?>
              <?php $imgUrl = 'assets/img/profile/0/'.$row->img; ?>
              <div class=" col-md-2 hidden-sm hidden-xs " >
                <div class="box card" style="padding: 10px 10px 10px 10px;">
                <div class="imgcontainer">
                <img src="<?php echo base_url($imgUrl);?>" alt="Avatar" class="image img-rounded" style="width:100%">
                <div class="middle">
                  <div class="text">
                    <button type="submit" name="viewBtn" value="<?php echo $row->id;?>" class="btn btn-info  btn-lg">View Profile</button>
                  </div>
                </div>
                </div>
                <div class=" box1 card-block">
                  <h4 class="card-title"><?php echo $row->profilename;?></h4>
                  <!-- <span style="color: #ff3546;"><?php echo $row->type;?> </span><span style="color: blue;">| <?php echo $row->category;?> | <?php echo $row->subcategory;?></span> <br> -->
                  <span style="color: #ff3546;"><?php echo $row->type;?> </span><span style="color: blue;"> <?php if (!($row->category == "NA")) {
                    echo " | "; echo $row->category;
                  } ?>  <?php if (!($row->subcategory == "N/A")) {
                   echo " | "; echo $row->subcategory;
                  } ?></span> <br>
                  <!-- <span><i><b>Phone #:</b> <?php //echo $row->phone;?> | <?php //echo $row->altphone;?></i></span><br> -->
                  <!-- <span><i><b>E-mail:</b> <?php //echo $row->email;?></i></span><br> -->
                  <!-- <span><i><b>Location:</b> <?php //echo $row->phyaddress;?></i></span><br> -->
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
                </div>
              </div>


              <!-- ================== for small dev ================ -->
              <div class=" c hidden-md hidden-lg hidden-xl " >
                <div class="box1 card" style="padding: 10px 10px 10px 10px;">
                <div class="row pbox" >
                  <a href="<?php echo base_url('Profile/viewSelectedProfile')?>/<?php echo $row->id;?>">
                  <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="imgcontainer">
                      <img src="<?php echo base_url($imgUrl);?>" alt="Avatar" class="image img-rounded thumbnail1" style="width:100%">
                      <!-- <div class="middle">
                        <div class="text">
                          <button type="submit" name="viewBtn" value="<?php echo $row->id;?>" class="btn btn-info  btn-lg">View Profile</button>
                        </div>
                      </div> -->
                      </div>
                  </div> 
                  <div class="col-md-8 col-sm-8 col-xs-8" >
                      <div class=" box1 card-block">
                        <h4 class="card-title"><?php echo $row->profilename;?></h4>
                        <!-- <span style="color: #ff3546;"><?php echo $row->type;?> </span><span style="color: blue;">| <?php echo $row->category;?> | <?php echo $row->subcategory;?></span> <br> -->
                        <span style="color: #ff3546;"><?php echo $row->type;?> </span><span style="color: blue;"> <?php if (!($row->category == "NA")) {
                          echo " | "; echo $row->category;
                        } ?>  <?php if (!($row->subcategory == "N/A")) {
                         echo " | "; echo $row->subcategory;
                        } ?></span> <br>
                        <!-- <span><i><b>Phone #:</b> <?php //echo $row->phone;?> | <?php //echo $row->altphone;?></i></span><br> -->
                        <!-- <span><i><b>E-mail:</b> <?php //echo $row->email;?></i></span><br> -->
                        <!--  <span><i><b>Location:</b> <?php //echo $row->country;?> | <?php //echo $row->region;?></i></span><br>  -->
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                      </div>
                      <!-- <button type="submit" name="viewBtn" value="<?php //echo $row->id;?>" class="btn btn-info  btn-sm pull-right">View</button> -->
                  </div> 
                  </a>
                </div>
                </div>
              </div>
              <!-- ======================  end small dev =========== -->

              <?php endforeach; ?>

            </form>


            <div class="col-md-12 " >
              <div  style="margin: auto; text-align: center; border-radius: 50%;">
                  <?php if (isset($links)) { ?>
                    <?php echo $links ?>
                  <?php } ?>
              </div>
            </div>

              <!-- <div class="col-md-12 " >
                <div  style="margin: auto; text-align: center; ">
                    <?php if (isset($links)) { ?>
                     <?php echo $links ?>
                    <?php } ?>
                </div>
              </div> -->

              <!-- <div class="col-md-3" style="padding-bottom: 10px;">
                <div class="imgcontainer">
                <img src="<?php //echo base_url('assets/img/slider/slider_01.jpg');?>" alt="Avatar" class="image " style="width:100%">
                <div class="middle">
                  <div class="text">
                    <button type="submit" name="viewBtn" value="ok" class="btn btn-default  btn-lg">View Profile</button>
                  </div>
                </div>
              </div>
              </div> -->

            </div>

  </div>









  <div class="col-md-3 card card-sm">
    <b style="font-size: 28px;">Choose your region/ City</b>
    <?php
        $regionRes = modules::load('Profile')->get_col_where('profile', 'region');
        $categoryRes = modules::load('Profile')->get_col_where('profile', 'category');
    ?>

    <ul>
      <?php foreach ($regionRes->result() as $row2): ?>
        <a href="<?php echo base_url('Profile/profileSearchListByRegion')?>/<?php echo $row2->region;?>"><li style="font-size: 20px;" class="region"><?php echo $row2->region;?></li></a>
      <?php endforeach; ?>
    </ul>
    <hr>
    <b style="font-size: 28px;">Choose a profile category</b>
     <ul>
      <?php foreach ($categoryRes->result() as $row2): ?>
        <a href="<?php echo base_url('Profile/profileSearchListByCategory')?>/<?php echo $row2->category;?>"><li style="font-size: 20px;" class="region"><?php echo $row2->category;?></li></a>
      <?php endforeach; ?>
    </ul>
   
  </div>







</div>



</div>

</section>
 