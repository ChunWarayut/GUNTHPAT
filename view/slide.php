
<section class="slide" style="margin-top: -350;">
    <?PHP for($i=0;$i<count($slide );$i++){ ?>
        <img src="img_upload/slide/<?PHP echo $slide[$i]['slide_img']; ?>" > 
    <?PHP } ?>
</section>

<script type="text/javascript">
    $(document).on('ready', function() {
        $(".slide").slick({
            arrows: false,
            dots: false,
            infinite: true,
            // autoplay: true,
            // autoplaySpeed: 5000,
        });
    });
</script>
