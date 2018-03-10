<?php
include('_con.php');
// Create connection
// Check connection
if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
} 

$sql = "SELECT Date,Credits FROM user";
$result = $dbcon->query($sql);
if ($result->num_rows > 0) {
    // output ,data of each row	
	echo "<table><th>Date Credit</th>";
    while($row = $result->fetch_assoc()) {
	
	echo "<tr><td>";
	echo $row['Date'];
	echo "</td><td>";
	echo $row['Credits'];
	echo "</td></tr>";
    }
echo"</table>";
} else {
    echo "0 results";