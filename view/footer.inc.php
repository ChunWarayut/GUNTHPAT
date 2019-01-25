<style>
a.ex5:hover, a.ex5:active {text-decoration: underline;}
</style>
<footer>
    <div class="row">
        <div class="col-md-4">
            <div class="footer-panel text-detail">
                <div class="footer-header text-header text-sm">
                <?PHP
                    if($lng == "TH"){
                        echo "เกี่ยวกับเรา";
                    }else{
                        echo "ABOUT SMT";
                    } 
                ?>
                </div>
                <div style="padding-top: 2rem;">
                <?PHP
                    if($lng == "TH"){
                        echo $footer['detail_footer_th'];
                    }else{
                        echo $footer['detail_footer_en'];
                    } 
                ?>
                </div>
                <div class="ml-auto" style="padding-top: 1rem;">
                    <a href="<?php if($setting['setting_facebook'] != ""){ echo $setting['setting_facebook']; }else{ echo "#"; } ?>"><i style="padding-right: 2%;color:#f47322;" class="fab fa-facebook-f"></i></a>
                    <a href="<?php if($setting['setting_google_plus'] != ""){ echo $setting['setting_google_plus']; }else{ echo "#"; } ?>"><i style="padding-right: 2%;color:#f47322;" class="fab fa-google-plus-g"></i></a>
                    <a href="<?php if($setting['setting_twitter'] != ""){ echo $setting['setting_twitter']; }else{ echo "#"; } ?>"><i style="padding-right: 2%;color:#f47322;" class="fab fa-twitter"></i></a>
                    <a href="<?php if($setting['setting_instagram'] != ""){ echo $setting['setting_instagram']; }else{ echo "#"; } ?>"><i style="padding-right: 2%;color:#f47322;" class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="footer-panel text-detail">
                <div class="footer-header text-header text-sm">
                <?PHP
                    if($lng == "TH"){
                        echo "บทความเเละข่าวสาร";
                    }else{
                        echo "ARTICLES";
                    } 
                ?>
                </div>
                <div style="padding-top: 2rem;">
                    <?PHP for($i=0; $i < count($article) && $i < 4; $i++){
                        if($lng == "TH"){
                            echo "<li><a class='ex5' style='color:#fff;' href='article.php?article=".$article[$i]['article_id']."'>".$article[$i]['article_header_th']."</a></li>";
                        }else{
                            echo "<li><a class='ex5' style='color:#fff;' href='article.php?article=".$article[$i]['article_id']."'>".$article[$i]['article_header_en']."</a></li>";
                        }
                    }?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="footer-panel text-detail">
                <div class="footer-header text-header text-sm">
                    <?PHP
                        if($lng == "TH"){
                            echo "ข้อมูลติดต่อ";
                        }else{
                            echo "CONTACT";
                        } 
                    ?>
                </div>
                <div style="padding-top: 2rem;">
                    <table style="color:#FFF">
                        <tbody>
                        <tr>
                            <td valign="top" align="center" style="padding: 4px;"><i class="fa fa-map-marker" style="padding-right: 10px;" aria-hidden="true"></td>
                            <td style="padding: 4px;"><?PHP
                            if($lng == "TH"){
                                echo $setting['setting_address_th'];
                            }else{
                                echo $setting['setting_address_en'];
                            } 
                            ?></td>
                        </tr>
                        <tr>
                            <td valign="top" align="center" style="padding-top: 1rem;"><i class="fa fa-mobile" style="padding-right: 10px;" aria-hidden="true"></i></td>
                            <td style="padding-top: 1rem;"><?PHP echo $setting['setting_phone']; ?></td>
                        </tr>
                        <tr>
                            <td valign="top" align="center" style="padding-top: 1rem;"><i class="fa fa-envelope" style="padding-right: 10px;" aria-hidden="true"></i></td>
                            <td style="padding-top: 1rem;"><?PHP echo $setting['setting_email']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="text-center" style="padding-top: 2em; font-size: 0.9em;">
                <?PHP 
                for($i=0 ; $i < count($policy); $i++){ 
                    if($lng == "TH"){
                        echo "<a class='ex5' style='padding: 0px 2%;color:#fff;' href='policy.php?policy=".$policy[$i]['policy_id']."'>".$policy[$i]['policy_name_th']."</a>";
                    }else{
                        echo "<a class='ex5' style='padding: 0px 2%;color:#fff;' href='policy.php?policy=".$policy[$i]['policy_id']."'>".$policy[$i]['policy_name_en']."</a>";
                    } 
                }
                ?>
            </div>
            <div class="text-center" style="padding-top: 2em; font-size: 0.9em;">
                Copyright © 2018. REVELSOFT (thailand) Co.,Ltd
            </div>
        </div>
    </div>    
</footer>
