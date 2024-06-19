<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //LEARNING VARIABLES AND DATA TYPES IN PHP
    $fullName = "ADENIJI OYEYEMI MAYOKUN";
    $WelcomeMessage = "Welcome to my Portfolio Website";
    $numberOfViews = 10;
    $rate = 100.50;
    $numberOfViewsArray = [10,50,20,40];
    ?>
    <h1><?php echo "Hey!"." ". $fullName. " ". $WelcomeMessage?>
</h1>
<p><?php echo "View ten pages on my webiste and get". " ". $numberOfViews * $rate. " "?></p>
</body>
</html>