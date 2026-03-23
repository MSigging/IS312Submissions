<?php
/*
Author: Megdelene SIGGING
Date: 23rd/03/2026
Unit:  Web Application Development 
*/


$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "FRU10";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$p_code = $_POST['p_code'];
$p_name = $_POST['p_name'];


$sql = "INSERT INTO Program (ProgramCode, ProgramName) VALUES ('$p_code', '$p_name')";


echo "<h2>Program Entry Status</h2>";

if ($conn->query($sql) === TRUE) {
    echo "<p style='color: green;'>Success! The new program <strong>$p_name</strong> has been added.</p>";
} else {
    echo "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
}


$conn->close();


echo "<hr>";
echo "<a href='new-program.html'>Add Another Program</a> | ";
echo "<a href='index.php'>Back to Home</a>";
?>