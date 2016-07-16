<?php


$servername = "db4free.net:3306";
$username = "backlink9";
$password = "rootpass";
$dbname = "backl89";

$url = $_POST["url"];

echo $url;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO backlinks (url)
VALUES ('$url')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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
