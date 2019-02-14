
<?PHP
require_once('models/Rooms.php');
$rooms_model = new Rooms;
$rooms = $rooms_model -> getRooms();
?>
<script>

function search() {
    var room_id = $("#room_id").val();
    var book_person = $("#book_person").val();
    var book_date_start = $("#book_date_start").val();
    var book_date_end = $("#book_date_end").val();
        window.location = "room.php?action=book&room_id="+room_id+"&book_person="+book_person+"&book_date_start="+book_date_start+"&book_date_end="+book_date_end;

}
</script>
<style>
.slide-detail {
    position: absolute;
    top: 30%;
    max-width: 100%;
    z-index: 999;
    margin-left: -90
}
</style>
<style type="text/css">
.ui-datepicker {
    background: #333;
    border: 1px solid #555;
    color: #EEE;
}
</style>
<link type="text/css" rel="Stylesheet"
href="http://ajax.microsoft.com/ajax/jquery.ui/1.8.6/themes/
smoothness/jquery-ui.css" />
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datestart" ).datepicker({dateFormat: 'dd/mm/yy'});
    $( "#dateend" ).datepicker({dateFormat: "dd/mm/yy"});
    

  } );
  </script>

<div class="slide-item">
    <div class="slide-detail" style="padding-left: 200px; padding-right: 50px; width: 100%; ">
        <div class="row">
            <div class="col-lg-10">
                <div class="slide-header" style="color: #fff">
                    <span class="text" style="font-size:20px">
                        Welcome to
                    </span>
                </div>
                <br>
                <div class="slide-text-detail" style="color: #fff">
                    <h1>
                        <span class="text" style="font-size:80px">
                            GUNTHPAT PLACE
                        </span>
                </div>
                <br>
                <div class="slide-text-detail" style="color: #fff">
                    <div class="font-weight-light">
                        <span class="text2" style="font-size:30px">
                            A place to experience and enjoy life
                        </span>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="slide-text-detail" style="color: #fff">
                    <div class="font-weight-light">
                        <i class="far fa-play-circle" style="font-size:100px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
                <div class="slide-text-detail" style="color: #fff; padding-left: 130px; margin-top: -75">
                    <div class="font-weight-light">
                        <span class="text2" style="font-size:40px;">
                            Watch Video
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2" style="background-color: #00000036 ">
                <br>
                <div class="font-weight-light">
                    <span class="text2" style="font-size:15px; color: #fff">
                        Arrival Date
                    </span>
                    <br>
                    <input class="form-control" autocomplete="off" id = "book_date_start" name="book_date_start"
                        style="background-color: #00000078; border: 0.5px solid #ffffff45; color :fff;" >
                </div>
                <br>
                <div class="font-weight-light">
                    <span class="text2" style="font-size:15px; color: #fff">
                        Depature Date
                    </span>
                    <br>
                    <input class="form-control" autocomplete="off" id = "book_date_end" name="book_date_end"
                        style="background-color: #00000078; border: 0.5px solid #ffffff45; color :fff; ">
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="font-weight-light">
                            <span class="text2" style="font-size:15px; color: #fff">
                                Persons
                            </span>
                            <br>
                            <input class="form-control" type="number" autocomplete="off" id="book_person" name="book_person"
                                style="background-color: #00000078; border: 0.5px solid #ffffff45; color :fff; ">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="font-weight-light">
                            <span class="text2" style="font-size:15px; color: #fff">
                                Room
                            </span>
                            <br>
                            
                            <select class="form-control  custom-select" id="room_id" name="room_id"  style="background-color: #00000078; border: 0.5px solid #ffffff45; color :fff; "><?PHP for ($i=0; $i < count($rooms); $i++) { ?>
                                <option value="<?PHP echo $rooms[$i]['room_id'];?>">
                                    <?PHP echo $rooms[$i]['room_name'];?>
                                </option> <?PHP } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="class col-lg-12">
                        <button onclick="search();" class="btn btn-primary text-uppercase js-scroll-trigger btn-lg btn-block">
                            <span class="text">
                                BOOK NOW
                            </span>
                        </button>
                    </div>
                    <div class="input-group date" data-provide="datepicker">
                </div>
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