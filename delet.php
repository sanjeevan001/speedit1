

<?php

include"dconnect.php";


// sql to delete a record
$sql = "DELETE FROM khcoba WHERE id={$_GET["sanjee"]}";



if ($conn->query($sql) === TRUE) {
  echo header("location:reg.php");
} 





?>


