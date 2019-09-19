<?php
require "../db_con.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Round 3 Slide show</title>
    <script src="../js/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="../css/style.css?v=1.1">
</head>
<body>
    <script>
        var min_time = 0;
        var max_time = 3;
    </script>
    <div class="container">
        <div class="img"  >
        <button class="next btn" id="1">Next</button>
        <img src="count/1.png" id="img1"  class="r3i" alt="">1
        </div>
        <div class="img">
        <button class="next btn" id="2">Next</button>
        <img src="count/2.png" class="r3i" id="img2" alt="">2
        </div>
        <div class="img"  >
        <button class="next btn" id="3">Next</button>
        <img src="count/3.png" id="img3" class="r3i" alt="">3
        </div>
        <div class="img"  >
        <button class="next btn" id="4">Next</button>
        <img src="count/4.png" id="img4" class="r3i" alt="">4
        </div>
        <div class="img"  >
        <button class="next btn" id="5">Next</button>
        <img src="count/5.png" id="img5" class="r3i" alt="">5
        </div>
        <div class="img"  >
        <button class="next btn" id="6">Next</button>
        <img src="count/6.png" id="img6" class="r3i" alt="">6
        </div>
        <div class="img"  >
        <button class="next btn" id="7">Next</button>
        <img src="count/7.png" id="img7" class="r3i" alt="">7
        </div>
        <div class="img"  >
        <button class="next btn" id="8">Next</button>
        <img src="count/8.png" id="img8" class="r3i" alt="">8
        </div>
        <div class="img"  >
        <button class="next btn" id="9">Next</button>
        <img src="count/9.png" id="img9" class="r3i" alt="">9
        </div>
        <div class="img">
        <button class="next btn" id="10">Next</button>
        <img src="count/10.png" id="img10" class="r3i" alt="">10
        </div>
    </div>
<div class="time"></div>
    <script src="../js/main_2.js"></script>
</body>
</html>