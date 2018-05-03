<?php
$connection = mysql_connect('localhost', 'root', ''); 
mysql_select_db('eduxa');

$query = "SELECT * FROM student"; 
$result = mysql_query($query);

echo "<table>"; 

while($row = mysql_fetch_array($result)){   
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['fullname'] . "</td></tr>" . $row['gender'] . "</td><td>" ;  
}

echo "</table>"; 

mysql_close();
?>
