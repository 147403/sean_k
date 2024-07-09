<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href = "styles.css">
<head>
<body>
<?php include_once ("templates/nav.php")?>
</head>
<body>
<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Redirect the user to the login page or homepage
header('Location: login.php');
exit;
?>    
</body>
</html>