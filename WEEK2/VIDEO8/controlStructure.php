<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structure</title>
</head>
<body>
    <?php
        $bool = false;
        $a = "1";
        $b= 2;
        $result = match ($a) {
            //match uses strict comparison (===) i.e check value and data type.
                1 => "This is true",
                2 =>  "This is false",
                default => "None of the above is true"
        };
        echo $result;
        // switch($a){
        //     //switch uses loosely comparison operator (==)
        //     case "1":
        //         echo "This is true";
        //         break; //The code stops here despite the fact that case 1 below is true.
        //     case 1:
        //         echo "This is not true";
        //         break;
        //     case 3: 
        //         echo "This is not true";
        //         break;
        //     default:
        //     echo "None of the statement is true";

        // }
        
        // if ($a < $b && $bool){
        //     echo "This statement is true";
        // }
        // else if($a < $b && $bool){
        //     echo "This statement is not true";
        // }
        // else
        // echo "none of the statement is not true"
    ?>
</body>
</html>