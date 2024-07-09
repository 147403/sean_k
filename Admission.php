<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php include_once ("templates/nav.php")?>

        <h1>Admission Form</h1>

    <main>
        <section id="admission-form">
            <form action="process_admission.php" method="POST">
                <label for="fullname">Full Name:</label><br>
                <input type="text" id="fullname" name="fullname" required><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="phone">Phone Number:</label><br>
                <input type="text" id="phone" name="phone" required><br><br>

                <label for="grade">Grade Applying For:</label><br>
                <select id="grade" name="grade" required>
                    <option value="">Select Grade</option>
                    <option value="7">Grade 7</option>
                    <option value="8">Grade 8</option>
                    <option value="9">Grade 9</option>
                    <option value="10">Grade 10</option>
                    <option value="11">Grade 11</option>
                    <option value="12">Grade 12</option>
                    
                </select><br><br>

                <label for="message">Message (Optional):</label><br>
                <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>

                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> High School. All rights reserved.</p>
    </footer>
</body>
</html>