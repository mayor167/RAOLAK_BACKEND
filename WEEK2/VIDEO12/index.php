<?php
declare(strict_types=1);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-defined Function in PHP</title>
</head>
<body>
    <?php 
    //creating my own function in php
    function greetCustomer(){
        echo "Hello World"."<br>";
        echo "World is a subset of Nature"."<br>";
    }
    greetCustomer();//calling the function here do its work.
    function moreGreet(){
        return greetCustomer();
       echo  $any = 'any other thing';
    }
    moreGreet();
    //print_r($storeMoreGreet);
    $c = 10;
    $d = 10;
    function add(int $a,int $b, int $c = 7){//defined function add with parameters/or placeholder a,b
         return $a + $b;
         
    }
    $sum = add(4,6); //invoking/calling the function add with 4,6 as inputs to save it result in variable $sum
    echo $sum."<br>";
    function add2(){
          global $c; 
          global $d;
          return $c + $d;
    }
    echo add2()."<br>";
    ?>
</body>
</html> 