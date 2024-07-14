<?php
include 'config.php';

// Query to get the last record
$sql = "SELECT * FROM directions ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

// Check if a record was found
if ($result->num_rows > 0) {
    // Fetch the last record
    $row = $result->fetch_assoc();
} else {
    echo "No records found";
}

$conn->close();
?>
