<div class="container" style=" padding-top: 8%; padding-bottom: 8%; margin-top: -200; ">
    <div class="row">
        <div class="col-lg-auto">
            <div class="text-center">
                <h1>
                    <span>FACILITI</span><span style="color:#f47322;">ES</span>
                </h1>
                <p>
                    <?php echo $facilities_head[0]['facilities_head_sub_title']; ?>
                </p>
            </div>
            <div class="row">
                <?php for ($i = 0; $i < count($facilities); ++$i) {
    ?>
                <div class="col-lg-4">
                    <div class="text-center"
                        style="background-image: url('<?php echo    $pathImgFacilities.$facilities[$i]['facilities_img']; ?>'); 
  background-repeat: no-repeat;
  background-size: contain;  
  /* background-attachment: fixed; */
  background-position: center;
  background-repeat: no-repeat;
  /* background-attachment: fixed; */
  ">
                        <!-- <img src="<?php echo    $pathImgFacilities.$facilities[$i]['facilities_img']; ?>"
                            class="img-responsive" width="300px" height="300px" alt=""> -->
                        <div style=" padding-top: 10%; padding-bottom: 10%; ">
                            <div  style=" padding-top: 20%; padding-bottom: 20% ">
                                <h4>
                                    <span style="color:#FFFFFF">
                                        <?php echo    $facilities[$i]['facilities_name']; ?>
                                    </span>
                                </h4>
                                <p>
                                    <span style="color:#FFFFFF">
                                    <?php echo    $facilities[$i]['facilities_detail']; ?>
                                    </span>
                                </p>
                                <button type="button" class="btn btn-outline-light">MORE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
}?>
            </div>
        </div>
    </div>
</div>