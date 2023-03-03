

<?php

include"dconnect.php";



$id=$_GET['id'];
$sql = "SELECT * FROM khc where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["batch"]. "<br>";
  }
}








?>


