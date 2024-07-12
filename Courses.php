<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High School Courses</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
<?php include_once ("templates/nav.php")?>
    <header>
    </header>
    <main>
        <section id="courses">
            <?php
            // Array of courses (in real scenario, this data might come from a database)
            $courses = array(
                array(
                    'title' => 'Mathematics',
                    'description' => 'A comprehensive study of algebra, geometry, and calculus.',
                    'subjects' => array('Algebra', 'Geometry', 'Calculus')
                ),
                array(
                    'title' => 'Science',
                    'description' => 'Exploring biology, chemistry, and physics.',
                    'subjects' => array('Biology', 'Chemistry', 'Physics')
                ),
                // Add more courses as needed
            );

            // Loop through courses and display each one
            foreach ($courses as $course) {
                echo '<article class="course">';
                echo '<h2>' . htmlspecialchars($course['title']) . '</h2>';
                echo '<p>Description: ' . htmlspecialchars($course['description']) . '</p>';
                echo '<ul>';
                foreach ($course['subjects'] as $subject) {
                    echo '<li>' . htmlspecialchars($subject) . '</li>';
                }
                echo '</ul>';
                echo '</article>';
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> High School. All rights reserved.</p>
    </footer>
</body>
</html>