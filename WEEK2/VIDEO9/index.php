<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="reset.css ">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <center>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <input type="number" name ="num1" placeholder="Enter first number">
        <br><br>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <br><br>
        <input type="number" name ="num2" placeholder="Enter the second number">
        <br><br>
         <button>Calculator</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            //grabbing the data with filtration and security measures
           $num1 = htmlspecialchars(filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT));
           $num2 = htmlspecialchars(filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT));
            $operator = htmlspecialchars($_POST["operator"]) ;
            //handling errors
            $errors =false;
            if (empty($num1) || empty($num2)||empty($operator)){
            echo "<p class 'calc-error'>Fill in all fields</p>";
            $errors = true;
            }
            if (!is_numeric($num1) || !is_numeric($num2)){
                echo "<p class = 'calc-error'>Only write numbers!</p>";
                $errors = true;
            }
            //calculate the numbers if no errors
            if (!$errors){
                $value = 0;
                switch($operator){
                    case "add":
                        $value = $num1 + $num2;
                        break;
                    case "subtract":
                            $value = $num1 - $num2;
                            break;
                    case "divide":
                             $value = $num1 / $num2;
                             break;
                    case "multiply":
                            $value = $num1 * $num2;
                            break;
                    default:
                    echo "<p = 'calc-error'>Something went wrong!";
            }
                    echo "<p class = 'calc-result'>The result is". " ". $value."</p>";
            }   
        }
        ?>
    </center>
</body>
</html>