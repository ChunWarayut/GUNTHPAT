<div class="container facilities-header" id="facilities">
    <div class="row">
        <div class="col-lg-auto facilities-header">
            <div class="text-center">
                <h1>
                    FACILITI<span style="color:#f47322;">ES</span>
                </h1>
                <p class="facilities-text-back">
                <?php if ($lng == TH) {  echo $facilities_head[0]['facilities_head_sub_title_th'];   }else { echo $facilities_head[0]['facilities_head_sub_title_en'];  }  ?>
                
                </p>
            </div>
            <div class="row">

                <?php for ($i = 0; $i < count($facilities); ++$i) {
    ?>
                <div class="col-lg-4">
                    <div class="text-center"
                        style="background-image: url('<?php echo    $pathImgFacilities.$facilities[$i]['facilities_img']; ?>');   background-repeat: no-repeat;  background-size: contain;   /* background-attachment: fixed; */  background-position: center;  background-repeat: no-repeat;  /* background-attachment: fixed; */  ">
                        <!-- <img src="<?php echo    $pathImgFacilities.$facilities[$i]['facilities_img']; ?>"
                            class="img-responsive" width="300px" height="300px" alt=""> -->
                        <div style=" padding-top: 10%; padding-bottom: 10%; ">
                            <div style=" padding-top: 20%; padding-bottom: 20% ">
                                <h4>
                                    <span class="text text-truncate" style="color:#FFFFFF">
                                    <?php if ($lng == TH) {  echo    $facilities[$i]['facilities_name_th'];   }else { echo    $facilities[$i]['facilities_name_en'];  }  ?>
                                    </span>
                                </h4>
                                <p>
                                    <span class="text text-truncate" style="color:#FFFFFF">
                                    <?php if ($lng == TH) {  echo    $facilities[$i]['facilities_detail_th'];   }else { echo    $facilities[$i]['facilities_detail_en'];  }  ?>
                             
                                    </span>
                                </p>
                                <!-- <button type="button" class="btn btn-outline-light">MORE</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>