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
}

// Get current month and year
$currentMonth = date('m');
$currentYear = date('Y');

// Get events for the current month
$events = getEventsForCurrentMonth();

// Number of days in the current month
$daysInMonth = date('t', strtotime("$currentYear-$currentMonth-01"));

// Start day of the week for the first day of the month
$startDay = date('N', strtotime("$currentYear-$currentMonth-01"));

// Create an array to store events by date
$eventsByDate = array();
foreach ($events as $event) {
    $eventsByDate[$event['date']][] = $event['title'];
}

// HTML structure for the calendar
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>High School Calendar</title>';
echo '<link rel="stylesheet" href="styles.css">';
echo '</head>';
echo '<body>';
echo '<header>';
echo '<h1>High School Calendar - ' . date('F Y', strtotime("$currentYear-$currentMonth-01")) . '</h1>';
echo '</header>';
echo '<main>';
echo '<section id="calendar">';
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Mon</th>';
echo '<th>Tue</th>';
echo '<th>Wed</th>';
echo '<th>Thu</th>';
echo '<th>Fri</th>';
echo '<th>Sat</th>';
echo '<th>Sun</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// Start the calendar table
echo '<tr>';

// Fill in the days of the previous month if necessary
for ($i = 1; $i < $startDay; $i++) {
    echo '<td></td>';
}

// Fill in the days of the current month
for ($day = 1; $day <= $daysInMonth; $day++) {
    $date = "$currentYear-$currentMonth-" . sprintf('%02d', $day);
    echo '<td>';
    echo '<span class="day">' . $day . '</span><br>';
    
    // Display events for this day
    if (isset($eventsByDate[$date])) {
        foreach ($eventsByDate[$date] as $event) {
            echo '<span class="event">' . htmlspecialchars($event) . '</span><br>';
        }
    }
    
    echo '</td>';
    
    // Move to next row if it's Sunday (end of the week)
    if (date('N', strtotime("$currentYear-$currentMonth-$day")) == 7) {
        echo '</tr>';
        if ($day != $daysInMonth) {
            echo '<tr>';
        }
    }
}

// Fill in the remaining cells of the last row
$remainingDays = 7 - (date('N', strtotime("$currentYear-$currentMonth-$daysInMonth")));
for ($i = 0; $i < $remainingDays; $i++) {
    echo '<td></td>';
}

echo '</tbody>';
echo '</table>';
echo '</section>';
echo '</main>';
echo '<footer>';
echo '<p>&copy; ' . date('Y') . ' High School. All rights reserved.</p>';
echo '</footer>';
echo '</body>';
echo '</html>';