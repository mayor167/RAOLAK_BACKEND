<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class work</title>
</head>
<body>
    <form action="formhandler.php" method="POST">
        <label for="firsname">First name</label><br>
        <input type="text" name= "firstname" required><br>
        <label for="middlename">Middle name</label><br>
        <input type="text" name= "middlename" required><br>
        <label for="lastname">Last name</label><br>
        <input type="text" name= "lastname" required><br><br>
        <label for="gender">Male</label>
        <input type="radio" name="gender" value="Male" required>
        <label for="gender">Female</label>
        <input type="radio" name="gender" value="Female" required><br><br>
        <label for="email">Email</label><br>
        <input type="email" name= "email" required><br>
        <label for="phoneno">Phone number</label><br>
        <input type="number" name= "phoneno" required><br>
        <label for="walletbalance">Wallet balance</label><br>
        <input type="number" name= "walletbalance" required><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>