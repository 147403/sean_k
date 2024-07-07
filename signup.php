<!DOCTYPE html>
<html>
    <head>
        <title>HTML Sign Up</title>
        <meta  name = "viewport" content =
        "Width=device-width, initial-scale=1" />
        <meta charset = "uft-8" />
        <link rel = "stylesheet" href = "css/style.css" />
</head>
<body>
    <div class = "topnav">
        <a href = "./" >Home</a>
        <a href = ""   ><About class="php"></About></a>
        <a href = ""   >Admission.php</a>
        <a href = ""   >Calendar.php</a>
        <a href = ""   >Courses.php</a>
        <a href = ""   >Media Center.php</a>
        <a href = "Contact.php">Contact</a>

        <div class = "topnav-right">
            <a href = "signup.php" >Sign Up</a>
            <a href = "signin.php" >Sign In</a>
</div>
<div class = "header">
    <h1>Sign Up Header</h1>
</div>
<div class = "row">
    < div class = "content">
         <h1>Sign Up Form</h1>
         <form action = "" method = "POST" autocomplete = "off" >
         <div>
             <input type = "text" name = "fullname" maxlength = "50"
             Placeholder = "Please enter your full name" required
             autofocus />  
</div>
<div>
    <input type = "email" name = "email" maxlength = "50"
    Placeholder = "Please enter your email" required />
</div>
<div>
    <input type = "text" name = "username" maxlength = "50"
    Placeholder = "Please enter your username" required />
</div>
<div>
    <input type = "password" name = "password" maxlength = "100"
    Placeholder = "Please enter your password" required />
</div>
<div>
    <input type = "password" name = "ConfPass" maxlength = "100"
    Placeholder = "Please repeat password" required />
</div>
<div>
    <select name = "userType" required >
        <option value = "">---Please Select User type---
</option>
<option value = "Male">Male</option>
<option value = "Female">Female</option>
<option value = "Admin">Admin</option>
<option value = "rather not say">rather not say</option>
</select>
</div>
<div>
    <input type = "submit" name = "signup" value = "Sign Up" />
</div>
</form>
</div>
<div class = "sidebar">
    <h1>Side Bar</h1>
      Our school vision and mission is to provide an all round world education,
      so that our students prosper and conquer.
</div>
</div>
<div class = "footer" >  
    Copyright &copy; BAIA 2020
</div>
</body>
<html>    

