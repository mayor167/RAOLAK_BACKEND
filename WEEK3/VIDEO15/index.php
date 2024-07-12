<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPS IN PHP</title>
</head>
<body>
    <?php
    //how use loops in php

    //1. for loop
    $sum = 0;
    for($i=0; $i<=10; $i++){
        $sum+= $i; // adding the sum of number 0,1, 2 .... 10      
    }
    echo "$sum <br>";
    // 2. while loop
    $boolean = true;
    while($boolean){
        $boolean = false; // this terminate the loop
    }
    echo "This is true, pls read <br>";
    // using while loop to calculate sum of num from 0 1...10

    $sum = 0;
    $i = 0;
    while($i <= 10){
        $sum += $i;
        $i++;
    }
echo $sum. "<br>";
    //2. do-while loop
    $i = 0;
    $sum = 0;
    do{
        $sum += $i;
      echo $i. " ";
        ++$i;
      
    } while($i <= 10);
    echo "<br>".$sum."<br>";  
    $boolean =true;
    do{
        echo "This is true <br>";
        $boolean =false;
    }
    while($boolean);

    //4. for-each loop, mainly use to iterate thru an object or array

    $fruits = ["Oranges", "Grapes", "Apples", "Mangoes"];// indexed array
            foreach($fruits as $fruit){
                echo "$fruit <br>";
            }
            $fruits = ["Oranges" => "Red", "Grapes" => "Green", "Apples" => "whine", "Mangoes"=> "green-black"];//associative array
            foreach($fruits as $fruit => $color){
               // echo "$fruit <br>";
               echo "$fruit:$color <br>";
            }
          //using foreach to echo sum of numbers from 0 -10

        $sum =0;
        $numbers =[1,2,3,4,5,6,7,8,9,10];
        $mean = 0;
        foreach($numbers as $number){
                $sum += $number;
                $mean =$sum/count($numbers);
        }
        echo "The sum of the numbers is $sum <br>";
        echo "The mean if the numbers is $mean <br>";

        $users = [
            ["username"=> "user1", "fullname" => "fullname1", "phonenumber" => "07012345678"],
            ["username"=> "user2", "fullname" => "fullname2", "phonenumber" => "07012345671"],
            ["username"=> "user3", "fullname" => "fullname3", "phonenumber" => "07012345679"],
            ["username"=> "user4", "fullname" => "fullname4", "phonenumber" => "07012345670"]
        ];
echo "<br>";
        foreach ($users as $user) {
            echo "Username => {$user['username']} <br/>
            Fullname => {$user['fullname']} <hr/> ";


        }
    ?>
</body>
</html>