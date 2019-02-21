    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-6">
                    <h1> About Us </h1>
                    <h2> เกี่ยวกับเรา</h2>
                </div>
                <div class="col-6">
                    <a href="?content=about_us&action=edit&id=0" class="btn btn-primary float-right">แก้ไข About us</a>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <img src="<?PHP echo $img_path . $about_us[0]['about_us_img'];  ?>" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h1 class="card-title">
                                        <?PHP echo $about_us[0]['about_us_title_en'];  ?>
                                    </h1>
                                    <p class="card-text">
                                        <?PHP echo  $about_us[0]['about_us_sub_title_en'];  ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <img src="<?PHP echo $img_path . $about_us[0]['about_us_img'];  ?>" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h1 class="card-title">
                                        <?PHP echo $about_us[0]['about_us_title_th'];  ?>
                                    </h1>
                                    <p class="card-text">
                                        <?PHP echo  $about_us[0]['about_us_sub_title_th'];  ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>