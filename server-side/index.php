<?php

$servername = "sql100.byethost4.com:3306";
$username = "b4_18540083";
$password = "TechToday";
$dbname = "b4_18540083_bl";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$msql = "SELECT url FROM backlinks";
$result = $conn->query($msql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<a href="//' . $row["url"] . '">'. $row["url"] . '</a><br>';
    }
} else {
    echo "0 results";
}

$conn->close();

?>
