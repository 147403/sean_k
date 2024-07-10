<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href = "styles.css">
</head>
<body>
<?php include_once ("templates/nav.php")?>
<?php
// Display the login form
echo '<form action="login.php" method="post">';
echo '<label for="username">Username:</label>';
echo '<input type="text" id="username" name="username"><br><br>';
echo '<label for="password">Password:</label>';
echo '<input type="password" id="password" name="password"><br><br>';
echo '<input type="submit" value="Log in">';
echo '</form>';
?>  
</body>
</html>