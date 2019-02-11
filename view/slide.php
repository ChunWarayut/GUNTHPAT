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
