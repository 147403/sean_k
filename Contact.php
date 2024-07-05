<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process form submission here
        // Example: sending an email
        $to = "your-email@example.com";
        $subject = "Contact Form Submission";
        $message = "Name: " . $_POST['name'] . "\r\n";
        $message .= "Email: " . $_POST['email'] . "\r\n";
        $message .= "Message: " . $_POST['message'] . "\r\n";
        $headers = "From: " . $_POST['email'];
        
        if (mail($to, $subject, $message, $headers)) {
            echo "<p>Thank you for contacting us!</p>";
        } else {
            echo "<p>Sorry, there was an error sending your message.</p>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
</head>
<body>
    <h2>Contact Us</h2>
    
   

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
