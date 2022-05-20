<?php
$servername = "localhost";
$username = "id18960189_oglivytimer";
$password = "/HH1rPALnT4F7HV_";
$dbname = "id18960189_timer";

 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `timerTable`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $time = "time";
      $details  = (object)[$time => $row["time"]];

    echo  json_encode ($details) ;
  
  }
} 
  
$conn->close();
?>