<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finish</title>
    <script src="js/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="css/style.css?v=1.1">
</head>
<body>
    <div class="head">
        <h1 class="r2h">Entering to Round-3</h1>
        <h1 class="r1h ">Round-2 Completed!</h1>
    </div>
<script>
        $(document).ready(()=>{
            var time = 4000;
            $(".r1h").fadeOut(time);
            $(".r2h").fadeIn(time);
        })
    </script>
</body>
</html>
