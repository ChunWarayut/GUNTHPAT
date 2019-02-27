<div class="container facilities">
    <div class="text-center">
        <h1>FACILITI<span>ES</span></h1>
        <p class="facilities-text-back">
            <?php if ($lng == TH) {  echo $facilities_head[0]['facilities_head_sub_title_th'];   }else { echo $facilities_head[0]['facilities_head_sub_title_en'];  }  ?>
        </p>
    </div>
    <div class="row">
        <?php for ($i = 0; $i < count($facilities); ++$i) { ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 pb-5"> 
                <div class="facilities-bg p-3">
                    <div class="facilities-content">
                        <h3>
                            <span>
                                <?php if ($lng == TH) {  echo    $facilities[$i]['facilities_name_th'];   }else { echo    $facilities[$i]['facilities_name_en'];  }  ?>
                            </span>
                        </h3>
                        <p>
                            <?php if ($lng == TH) {  echo    $facilities[$i]['facilities_detail_th'];   }else { echo    $facilities[$i]['facilities_detail_en'];  }  ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>