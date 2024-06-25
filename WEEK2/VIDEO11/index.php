 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in Function in PHP</title>
 </head>
 <body>
    <?php
        //Built-in function in PHP for handling string data type
        $string = "Hello World";
        echo strlen($string)."<br>";
        echo strpos($string, " ")."<br>";
        echo strpos($string, "World")."<br>";
        echo str_replace("World", "Heaven", $string)."<br>";
        $newWord = str_replace("World", "Heaven", $string);
        echo $newWord."<br>";
        echo strtolower($string)."<br>";
        echo strtoupper($string)."<br>";
        //math built-in functions in pHP
        $number1 = -5.5;
        $number2 = 5.5;
        echo abs($number1)."<br>";
        echo abs($number2)."<br>";
        echo round($number1)."<br>";
        $number3 = -4.4;
        echo round($number3)."<br>";
         echo pow($number1, $number2)."<br>";// this returns NAN
         echo pow($number2, 5.5)."<br>";
         echo sqrt($number1)."<br>";
         echo sqrt($number2)."<br>";
         echo round(sqrt($number2))."<br>";
         echo rand(1,100)."<br>";

         //Array Built-in Function in PHP
           $fruits = ["banana", "grape", "Apple", "orange", "pineapple"];
           print_r($fruits);
           echo"<br>";
            echo count($fruits)."<br>";
            $numbers = [1,2, 3, 4,5];
            $mergeArray = array_merge($fruits, $numbers);
            print_r($mergeArray);
            echo "<br>";
            echo is_array($mergeArray);
             //date built-in functions in PHP
             echo date("Y-m-d H:i:s")."<br>";
             echo time()."<br>";
             $date = "2024-6-25 12:00:00";
             echo strtotime($date)."<br>";
    ?>
 </body>
 </html> 