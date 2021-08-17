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

.psearch {
  background-color: lightgray;
  font-size: 26px;
  text-align: center;
  padding-bottom: 15px;
  padding-top: 15px;
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


<section class="content" style="padding: 0px 0% 0 0%">
<div class="container" style="background-color: #E9E9E9;">


  <div class="row" >
    
  <form action="<?php echo base_url('Api/getSelectedProfile')?>" method="post">

    <?php foreach ($profileres->result() as $row): ?>
       <?php $imgUrl = 'assets/img/profile/0/'.$row->img; ?>
    <div class=" col-md-2 hidden-sm hidden-xs " >
      <div class="box card" style="padding: 10px 10px 10px 10px;">
      <div class="imgcontainer">
      <img src="<?php echo base_url($imgUrl);?>" alt="Avatar" class="image img-rounded" style="width:100%">
      <div class="middle">
        <div class="text">
          <button type="submit" name="viewBtn" value="<?php echo $row->id;?>" class="btn btn-info  btn-lg">View Profile</button> <br><br>
          <button type="submit" name="reloadBtn" value="<?php echo $row->id;?>" class="btn btn-default  btn-lg" style="border-radius: 50%; margin-top: 5px: padding-top: 5px;" ><i class="fa fa-fw fa-refresh"></i> </button>
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
              <div class=" padding hidden-md hidden-lg hidden-xl " style="margin-right: 5%; margin-left: 5%;">
                <div class="box1 card" style="padding: 0 0 0 0;">
                <div class="row pbox" style="background-color: #fff;">
                  <a href="<?php echo base_url('Api/getSelectedProfile')?>/<?php echo $row->id;?>">
                  <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="imgcontainer">
                      <img src="<?php echo base_url($imgUrl);?>" alt="Avatar" class="image img-rounded thumbnail1 nopadding" style="width:100%; border: 3px solid; border-color: #fff;">
                      <!-- <div class="middle">
                        <div class="text">
                         <button type="submit" name="viewBtn" value="<?php echo $row->id;?>" class="btn btn-info  btn-lg">View Profile</button> <br><br>
                          <button type="submit" name="reloadBtn" value="<?php echo $row->id;?>" class="btn btn-default  btn-lg" style="border-radius: 50%; margin-top: 5px: padding-top: 5px;" ><i class="fa fa-fw fa-refresh"></i> </button>
                        </div>
                      </div> -->
                      </div>
                  </div> 
                  <div class="col-md-8 col-sm-8 col-xs-8" >
                      <div class=" box1 card-block">
                        <span class="badge badge-info pull-right">New</span>
                        <h4 class="card-title"><?php echo $row->profilename;?></h4>
                        <!-- <span style="color: #ff3546;"><?php echo $row->type;?> </span><span style="color: blue;">| <?php echo $row->category;?> | <?php echo $row->subcategory;?></span> <br> -->
                        <span style="color: gray;"><?php echo $row->type;?> </span><span style="color: gray;"> <?php if (!($row->category == "NA")) {
                          echo " | "; echo $row->category;
                        } ?>  <?php if (!($row->subcategory == "N/A")) {
                         echo " | "; echo $row->subcategory;
                        } ?></span> <br>
                        <span><i> <?php echo $row->country;?> | <?php echo $row->region;?></i></span><br>
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

</section>
 