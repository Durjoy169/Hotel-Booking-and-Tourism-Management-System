<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "tms";

// CREATE CONNECTION
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $databasename
);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM test where Name like'A%';";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // OUTPUT DATA OF EACH ROW
    while ($row = $result->fetch_assoc()) {
        echo $row["Name"];
    }
} else {
    echo "0 results";
}

$conn->close();
