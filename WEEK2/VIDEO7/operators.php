<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in PHP</title>
</head>
<body>
    <?php
        //string operator e.g contenation(note we join or contenate strings together using .)
        $surname = 'ADENIJI';
        $firstname = 'Oyeyemi';
        $profession = 'Full Stack Engineer';
        $companyName = 'Techsol';
        echo "I'm $surname $firstname , a $profession at $companyName";
    ?>
    <br>
    <?php
    // Arithmetic Operators;
    $num1 = 20;
    $num2 = 30;
    $sum = $num1 + $num2;
    echo "The sum of ". " ". $num1." ". "and". " ". $num2." ". "is". " ".$sum;
    ?>
    <br>
    <?php
     $diff1 = $num1 - $num2;
     $diff2 = $num2 - $num1;
       echo "The difference btw ". " ". $num1." ". "and". " ". $num2." ". "is". " ".$diff1 ?><br>
       <?php
        echo "The difference of ". " ". $num2." ". "and". " ". $num1." ". "is". " ".$diff2;
       ?>
     <br>
     <?php
     $mod1 = $num2 % $num1; //remainder here is 10
     $mod2 = $num1 % $num2; //remainder here is 20
     // Note % returns the remainder when a number is divided by another.
     ?>
     <?php echo "The remainder mod1 is ". " ". $mod1 ?><br>
       <?php
        echo "The remainder mod1 is ". " ". $mod2 ?> <br>
        <?php
        $power = $num1 ** $num2; // this returns 1.073741824E+39
        echo $power;?><br>
        <?php
        $divide = $num2 / $num1; //this returns 1.5
        echo $divide;
        ?>
        <br>
        <?php
        $mul = $num1 * $num2;
        echo $mul;
        ?>
        <br>
        <?php
        //assignment Operator
            $num3 = $num1; // The content in $num1 is now assigned to variable named $num3
            echo $num3;?><br>
           <?php 
           $num3 +=$num2;// we take the content in $num3 and $num2, add them together and assigned the result back to varible $num3
           //note, we can do the same for / ,*, -,%
            echo $num3;
            //
        ?>
        <br>
        <?php
        //comparison Operators
        if ($num1 == $num3){//note !== means not equal and it can be used to compare as well
            // == only compares value not data types
            // === compares value and data types 
            echo "This is true";
        }
        else
        echo "This is not true because num1 and num3 are ". " ". $num1. " ". "and". $num3. " ". "respectively"     
        ?>
        <br>
        <?php
        //Logical Operator
        $num4 = 50;
        if ($num4 === $num3 or $num1 === $num2){
            echo "This is true"; // || is the same as OR and it returns true if one of the conditions is true, also returns false if both conditions are false and verse-versa
            // && is the same as "AND" and it returns true if both conditions are true and verse-versa, also returns false if one of the conditions is false
            /* 
            ||(OR) table

            true || true = true
            true || false = true
            false || false = false

            &&(AND) table
            true && true = true
            false && true = false
            false && true = false
            COMBINATION OF || AND &&
            true || true && false || true = true
            false || true && true && false = false 
            */
        }
        ?>
        <br>
        <?php
        //imcrementing/derementing operators
        $num5 = 4;
        echo $num5."<br>";
        ++$num5;
        echo $num5."<br>";
        $num5++;
        echo $num5;
        ?>
</body>
</html>