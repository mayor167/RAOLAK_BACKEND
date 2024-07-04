<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSTANT IN PHP</title>
</head>
<body>
    <?php
    //creating constant in php
    define("PI", 3.14);
    $radius = 4.8;
    function calAreaOfCircle($radius){
            $area = PI *($radius**2);
            return $area;
    }
     $result = calAreaOfCircle($radius);
     echo "This is the area of the cirlce radius, $radius m is $result"; // had little issue here
    ?>
</body>
</html>