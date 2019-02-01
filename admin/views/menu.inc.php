<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="logo">
            <div align="center">
                <img src="../template/backend/images/logo/logo_header.png" class="img-responsive" style=" padding-top: 10%" width="170px">
            </div>
        </li>
        <li>
            <div style="padding: 20px 0; text-indent: 0px;" align="center">
                <span class="brand-line-one"></span><br>
                <!-- <span class="brand-line-second">SMT GROUP</span><br> -->
            </div>
        </li>
        <li><a href="index.php?content=home">
                <div
                    <?php if($content=="" || $content=="home" ){echo "class='menu-active top'" ;} else {echo
                    "class='menu top'" ;}?>>
                    <i class="fa fa-home" style="font-size:24px"></i>
                    <span style="padding:5px; font-size:15px;">HOME</span>
                </div>
            </a></li>

        <li><a href="index.php?content=rooms">
                <div <?php if($content=="rooms" ){echo "class='menu-active '" ;} else {echo "class='menu'" ;}?>>
                    <i class="fa fa-bed" style="font-size:24px"></i>
                    <span style="padding:5px; font-size:15px;">ROOMS</span>
                </div>
            </a></li>

        <li><a href="index.php?content=facilities">
                <div <?php if($content=="facilities" ){echo "class='menu-active'" ;} else {echo "class='menu'" ;}?>>
                    <i class="fa fa-bath" style="font-size:24px"></i>
                    <span style="padding:5px; font-size:15px;">FACILITIES</span>
                </div>
            </a></li>

        <li><a href="index.php?content=gallery">
                <div <?php if($content=="gallery" ){echo "class='menu-active'" ;} else {echo "class='menu'" ;}?>>
                    <i class="fa fa-picture-o" style="font-size:24px"></i>
                    <span style="padding:5px; font-size:15px; ">GALLARY</span>
                </div>
            </a></li>

        <li><a href="index.php?content=about_us">
                <div
                    <?php if($content=="about_us" ){echo "class='menu-active'" ;} else
                    {echo "class='menu'" ;}?>>
                    <i class="fa fa-info-circle" style="font-size:24px"></i>
                    <span style="padding:5px; font-size:15px; ">ABOUT US</span>
                </div>
            </a></li>

        <li><a href="index.php?content=contact_us">
                <div
                    <?php if($content=="contact_us" ){echo "class='menu-active'" ;} else
                    {echo "class='menu'" ;}?>>
                    <i class="fa fa-comments" style="font-size:24px"></i>
                    <span style="padding:5px; font-size:15px; ">CONTACT US</span>
                </div>
            </a></li>
            
        <li><a href="index.php?content=contact">
                <div
                    <?php if($content=="contact" ){echo "class='menu-active'" ;} else
                    {echo "class='menu'" ;}?>>
                    <i class="fa fa-commenting" style="font-size:24px"></i>
                    <span style="padding:5px; font-size:15px; "> CONTACT </span>
                </div>
            </a></li>

        <li><a href="index.php?content=news">
                <div
                    <?php if($content=="news" ){echo "class='menu-active'" ;} else
                    {echo "class='menu'" ;}?>>
                    <i class="fa fa-newspaper-o" style="font-size:24px"></i>
                    <span style="padding:5px; font-size:15px; "> NEWS </span>
                </div>
            </a></li>

        <li><a href="index.php?content=user">
                <div
                    <?php if($content=="user" ){echo "class='menu-active'" ;} else
                    {echo "class='menu'" ;}?>>
                    <i class="fa fa-user" style="font-size:24px"></i>
                    <span style="padding:5px; font-size:15px; "> ADMINISTRATORS </span>
                </div>
            </a></li>

    </ul>
</div>