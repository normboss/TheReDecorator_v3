<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>The Redecorator - sliderbase</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/sliderbase.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">

</head>

<body>
    <div class="sliderWrapper">
        <div id="sliderImages1">
            <img src="../img/scroll-battle.jpg" width="530" height="375">
            <img src="../img/scroll-blast.jpg" width="530" height="375">
            <img src="../img/scroll-bugs.jpg" width="530" height="375">
            <img src="../img/scroll-lustre.jpg" width="530" height="375">
        </div>
    </div>
    <div class="nav">
        <div id="nextButton1" class="button buttonRight">next</div>
    </div>

    <div class="sliderWrapper">
        <div id="sliderImages2">
            <img src="../img/piping.png" alt="" width="530" height="375">
            <img src="../img/dining_red_cks72.png" alt="" width="530" height="375">
            <img src="../img/couch_flounce72.png" alt="" width="530" height="375">
            <img src="../img/tie_chair72.png" alt="" width="530" height="375">
            <img src="../img/before72.png" alt="" width="530" height="375">
        </div>
    </div>
    <div class="nav">
        <div id="nextButton2" class="button buttonRight">next</div>
    </div>



    <!-- load scripts after dom has been rendered -->
    <script src="../js/gsap/TweenLite.js"></script>
    <script src="../js/gsap/plugins/CSSPlugin.js"></script>
    <script src="../js/gsap/easing/EasePack.js"></script>

    <!-- <script src="js/jquery/jquery-1.10.1.min.js"></script> -->


    <script>
        $(document).ready(function() {
            var slideWidth1 = $(".sliderWrapper").width(),
                $slider1 = $("#sliderImages1"),
                $nextButton1 = $("#nextButton1"),
                clickCount1 = 0;

            $nextButton1.click(function() {
                clickCount1++;
                if (clickCount1 > 3) {
                    clickCount1 = 0;
                }
                console.log(clickCount1);
                TweenLite.to($slider1, 0.5, {
                    x: -clickCount1 * slideWidth1
                });
            });


            var slideWidth2 = $(".sliderWrapper").width(),
                $slider2 = $("#sliderImages2"),
                $nextButton2 = $("#nextButton2"),
                clickCount2 = 0;

            $nextButton2.click(function() {
                clickCount2++;
                if (clickCount2 > 4) {
                    clickCount2 = 0;
                }
                console.log(clickCount2);
                TweenLite.to($slider2, 0.5, {
                    x: -clickCount2 * slideWidth2
                });
            });

        });
    </script>
</body>

</html>