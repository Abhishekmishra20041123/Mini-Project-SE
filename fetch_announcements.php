<?php
// Includ../e database connection
include 'db_connect.php';

// Fetch latest announcements
$latest_sql = "SELECT * FROM announcements WHERE category='latest' ORDER BY date DESC LIMIT 5";
$latest_result = $conn->query($latest_sql);

// Create an array to hold the announcements
$announcements = array();

if ($latest_result && $latest_result->num_rows > 0) {
    while($row = $latest_result->fetch_assoc()) {
        $announcements[] = array(
            'title' => $row['title'],
            'content' => $row['content']
        );
    }
}

// Close connection
$conn->close();

// Return JSON if this is an AJAX request
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    header('Content-Type: application/json');
    echo json_encode($announcements);
    exit;
}
?>

