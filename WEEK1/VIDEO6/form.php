<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <center>
    <main>
        <form action="formhandler.php" method="post">
        <label for="usernmame">Username:</label>
        <br>
        <input type="text" name="username" placeholder="Enter your Username">
        <br><br>
        <label for="email">Email Address:</label>
        <br>
        <input type="email" name="email" placeholder="Enter your email address">
        <br><br>
      <button type="submit">Submit</button>
        </form>
    </main>
    </center>
    
</body>
</html>