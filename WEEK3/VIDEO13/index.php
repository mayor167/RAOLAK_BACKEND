<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes in PHP</title>
</head>
<body>
    <?php
    /* 
    TYPES OF Scopes
    local scope
    global ""
    static ""
    class ""

    */
        $name = "Mayor";// this global variale
        function greetMayor($name){//pass the global variable as parameter
            return "hello"." ".$name;
        }
        echo greetMayor($name)."<br>";
        //another way to use global variable within a function
        $name1 = "Temi";
        function greetMe(){
            global $name1;
            return "hello". " ". $name1;
        }
        echo greetMe()."<br>";
         //another way to access global variable within a function
         function saluteMe(){
            $specialMessage = "You are special and great";
            return "hello"." ".$GLOBALS["name"].".".$specialMessage;
            //$specialMessage is a local variable within function saluteMe, and it can only be accessed within this function
         }
         echo saluteMe()."<br>";
         function testStaticScope(){
            static $count = 0;
                return $count++;
         }
         echo testStaticScope()."<br>";
         echo testStaticScope()."<br>";
         echo testStaticScope()."<br>";
         echo testStaticScope()."<br>";
    ?>
</body>
</html>