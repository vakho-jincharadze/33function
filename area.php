<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="area">
        <h1>Circle area is:</h1>
        <?php
            $radius = $_POST["radius"];
            function circleArea($radius) {
                $area = 3.14 * $radius * $radius;
                echo $area;
            }    
        circleArea($radius);
        ?>
    </div>
    
</body>
</html>

