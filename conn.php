<?php

$conn = new mysqli('localhost', 'root', '', 'home_a_heaven');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo $conn->connect_error;
}
 

?>