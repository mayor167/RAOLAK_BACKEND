<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="includes/signup.inc.php" method ="POST">
    <input type="text" name = 
        "name" placeholder="Enter your Full name">
        <br><br>
        <input type="text" name = "username"placeholder="Enter your Username">
        <br><br>
        <input type="email" name = 
        "email" placeholder="Enter your Email">
        <br><br>
        <input type="password" name = 
        "pwd" placeholder="Enter your password">
        <br><br>
        <button>Signup</button>
    </form>
    </center>
   
    <?php
    // require_once 'classes/Car.php';
    // $car1 = new Car("BWM", "green");
    // //echo $car1->vehicleType;
    // echo "<br/>";
    // echo $car1-> getCarInfo();
    // echo "<br/>";
    // echo $car1->getBrand();
    // echo "<br>";
    //  $car1->setBrand("Toyota");
    // echo $car1->getBrand();
    // echo "<br>";
    // echo $car1->getColor();
    // echo "<br>";
    // $car1->setColor("blue");
    // echo $car1->getColor();
   
   
    ?>
    
</body>
</html>