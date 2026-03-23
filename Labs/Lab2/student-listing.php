<?php

// Author: Megdelene SIGGING
// Date: 23rd/03/2026
// Unit: Website Developement

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FRU10";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT StudentNo, Firstname, Lastname, Gender, ContactNo, ProgramCode FROM Student";
$result = $conn->query($sql);

echo "<h2>Table 1: Student Listing</h2>";


echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%; text-align: left;'>";
echo "<tr style='background-color: #f2f2f2;'>
        <th>StudentNo</th> 
        <th>Firstname</th> 
        <th>Lastname</th> 
        <th>Gender</th> 
        <th>ContactNo</th> 
        <th>ProgramCode</th>
      </tr>";


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["StudentNo"] . "</td>";
        echo "<td>" . $row["Firstname"] . "</td>";
        echo "<td>" . $row["Lastname"] . "</td>";
        echo "<td>" . $row["Gender"] . "</td>";
        echo "<td>" . $row["ContactNo"] . "</td>";
        echo "<td>" . $row["ProgramCode"] . "</td>";
        echo "</tr>";
    }
} else {
    
    echo "<tr><td colspan='6'>No student records found.</td></tr>";
}
echo "</table>";


$conn->close();


echo "<br><br><a href='index.php'>Back to Home Page</a>";
?>