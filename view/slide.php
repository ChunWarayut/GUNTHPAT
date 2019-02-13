<style>
.slide-detail {
    position: absolute;
    top: 30%;

    /* padding: 24px; */
    max-width: 10%;
    z-index: 999;
    margin-left: -90
}
</style>
    <div class="slide-item">
        <div class="slide-detail" style="padding-left: 200px;">
            <div class="slide-header" style="color: #fff">
                <span class="text" style="font-size:20px">
                    Welcome to
                </span>
            </div>
            <br>
            <div class="slide-text-detail" style="color: #fff">
                <h1>
                    <span class="text" style="font-size:60px">
                        GUNTHPAT PLACE
                    </span>
            </div>
            <br>
            <div class="slide-text-detail" style="color: #fff">
                <div class="font-weight-light">
                    <span class="text2" style="font-size:20px">
                        A place to experience and enjoy life
                    </span>
                </div>
            </div>
        </div> 
    </div> 
<section class="slide" style="margin-top: -350; ">

    <?php for ($i = 0; $i < count($slide); ++$i) {
    ?>
    <img style=" width: 200px; height: 900px; object-fit: cover;"
        src="img_upload/slide/<?php echo $slide[$i]['slide_img']; ?>">
    <?php
} ?>

</section>


<script type="text/javascript">
$(document).on('ready', function() {
    $(".slide").slick({
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2500,
    });
});
</script>
