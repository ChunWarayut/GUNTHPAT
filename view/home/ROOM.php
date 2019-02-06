<br>
<br>
<?PHP
for ($i=0; $i < count($rooms); $i++){

    if ($i % 2 == 0 ) {

        ?>
<div class="container">
    <div class="row">
        <div class="col-xl-4">
            <h1 class="text-left">
            <?PHP  echo $i+1;  ?>
            </h1>
            <p class="text-left">
                |
            </p>
            <h3>
                <?PHP
           echo $rooms[$i]['room_name'];
        ?>
            </h3>
            <p>
                <?PHP
           echo $rooms[$i]['room_sub_title'];
        ?>
            </p>
            <div class="row">
                <h4>$
                    <?PHP echo $rooms[$i]['room_price']; ?> / วัน </h4> 
                    &nbsp; &nbsp; &nbsp;<a href=""
                    class="btn btn-primary text-uppercase js-scroll-trigger"> เพิ่มเติม </a>
            </div>
        </div>
        <div class="col-xl-8">
            <img src="
            <?PHP
           echo $pathImg .  $rooms[$i]['room_img']; 
        ?>
        "
                class="img-fluid" alt="">
        </div>
    </div>
</div>


<br>
<br>
<br>
<?PHP 
        
    }
    else {
        ?>

<div class="container">
    <div class="row">
        <div class="col-xl-8">
            <img src="
            <?PHP
           echo $pathImg .  $rooms[$i]['room_img']; 
        ?>
        "
                class="img-fluid" alt="">
        </div>
        <div class="col-xl-4">
            <h1 class="text-left">
                <?PHP  echo $i+1;  ?>
            </h1>
            <p class="text-left">
                |
            </p>
            <h3>
                <?PHP
           echo $rooms[$i]['room_name'];
        ?>
            </h3>
            <p>
                <?PHP
           echo $rooms[$i]['room_sub_title'];
        ?>
            </p>
            <div class="row">
                <h4>$
                    <?PHP echo $rooms[$i]['room_price']; ?> / วัน </h4> 
                    &nbsp; &nbsp; &nbsp;<a href=""
                    class="btn btn-primary text-uppercase js-scroll-trigger"> เพิ่มเติม </a>
            </div>
        </div>
    </div>
</div>


<br>
<br>
<br>
<?PHP
    }

?>



<?PHP
}
?>

<br>
<br>
<br>