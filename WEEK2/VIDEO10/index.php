<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation of Arrays</title>
</head>
<body>
    <?php
         //create array
         $fruits = array("oranges", "mangoes", "Apples");//old way of creating array
         $cars = ["benz", "toyota","honda"];
          $countries =[
            "Nigeria", // 0
            "USA",     // 1
            "England",  // 2
          ];// $countries, $fruits, $cars are an indexed arrays
 //assessing array using index number
          //   echo $countries[1]."<br>";
          //  // unset($countries[1]);
          //   print_r($countries);
          //   $countries[] = "Russian";
          //   array_push($countries, "canada");
          //   print_r($countries);
           //print_r($countries);
          $choresTimetable =[
                    "Laundry" => "Seyi",
                    "Sweeping"=> "Mayor",
                    "Cooking" => "Temi",
                    "Mopping" => "Kenny"
          ];// $choresTimetable is an assosative array that uses keys to access its elements.
$person = [
  'name' => 'Mr akin',
  'occupation' => 'Engineer',
  'number_of_wives' => 5,
  'number_of_friends' => 1000
];

$person['number_of_meals'] = 3;
// array_map(function($arr) {
//   print_r($arr);
//   echo "<br>";
// }, $person);
array_pop($person);
array_pop($person);

print_r($person);
exit;
//assessing array using keys
                echo $choresTimetable["Laundry"]. "<br>";
                print_r($choresTimetable)."<br>";
                $choresTimetable["washing"] = "Taiwo";
            print_r($choresTimetable);
            //multi-dimensional array
            $multiArray =[
                "fruit" => ["pears", "apple", "pineapple"],
                "animals",
                    "person"
            ];
            echo $multiArray["fruit"][0];
            echo $multiArray[0];
            print_r($cars);
            //array_splice($cars, 1);
            array_splice($cars, 1, 2,"volvo");
            print_r($cars);
            array_push($cars, "BMW", "Mazda", "Innosun");
            print_r($cars);
            array_splice($cars, 0,0,["a","b","c","d", "e", "f"]);
            print_r($cars);
            array_splice($cars, 1,0,["a","b","c","d", "e", "f"]);
            print_r($cars);
          ?>
</body>
</html>