<?php
// Function to get events for the current month (dummy data)
function getEventsForCurrentMonth() {
    // In a real scenario, fetch events from a database based on current month/year
    // For demo, returning dummy data
    return array(
        array(
            'date' => '2024-07-10',
            'title' => 'Math Club Meeting'
        ),
        array(
            'date' => '2024-07-15',
            'title' => 'Field Trip to Science Museum'
        ),
        // Add more events as needed
    );

// Create an array of day names
$dayNames = array(
    'Sun',
    'Mon',
    'Tue',
    'Wed',
    'Thu',
    'Fri',
    'Sat'
);

// Calculate the number of days in the current month
$daysInMonth = date('t', mktime(0, 0, 0, $month, 1, $year));

// Create a table to display the calendar
echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
foreach ($dayNames as $day) {
    echo "<th>$day</th>";
}
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// Calculate the first day of the week for the current month
$firstDayOfWeek = date('w', mktime(0, 0, 0, $month, 1, $year));

// Fill in the table with the days of the month
for ($i = 1; $i < $firstDayOfWeek; $i++) {
    echo '<td>&nbsp;</td>';
}
for ($i = 1; $i <= $daysInMonth; $i++) {
    echo "<td>$i</td>";
    if (($i + $firstDayOfWeek - 1) % 7 == 0) {
        echo '</tr><tr>';
    }
}
        echo '</tr>';
echo '</table>';

echo '</tbody>';
echo '</table>';
echo '</section>';
echo '</main>';
echo '<footer>';
echo '<p>&copy; ' . date('Y') . ' High School. All rights reserved.</p>';
echo '</footer>';
echo '</body>';
echo '</html>';
