<?php

try {
$conn = mysqli_connect("localhost:3306", "root","", "fleek") or die("Connection failed! REASON: " . mysqli_connect_errno());
}
catch(Exception $e) {
    echo "<h1>" . $e->getMessage() . "</h1>";
}
