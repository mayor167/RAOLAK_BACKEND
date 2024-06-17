<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in Superglobal variable in PHP</title>
</head>
<body>
    <?php 
        echo $_GET['name'];
        echo"<br>";
        echo $_GET['username'];
        echo $_POST['username'];
        echo "<br>";
        echo $_REQUEST['name'];
        echo "<br>";
        echo $_REQUEST['username'];
        echo "<br><br>";
        echo $_SERVER['PHP_SELF'];
        echo "<br><br>";
        echo "This is my website root directory". " ".$_SERVER['DOCUMENT_ROOT'];
    ?>
</body>
</html>