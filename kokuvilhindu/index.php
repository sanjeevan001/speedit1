<?php
include"dconnect.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Khc</title>
  </head>
   <body>
  



<!-- image  -->
<div class="container">
<div class="row">
<div class="col-md-12"> 
   <img src="img/lg.jpg" height="140px;" width="100%;" style="border-radius: 2%; margin-top:15PX;">
</div>
</div>
</div>


<div class="container">
<div class="row">
<div class="col-md-6"> 
 <!--  blank -->
</div> 

<!-- drop down batch coding -->
  <div class="col-md-2">  
    <form action="index.php" method="POST">
   <select name="batch" class="indrop">
  <?php
$sql = "SELECT * FROM khc";
$result = $conn->query($sql);
if ($result->num_rows>0) {
  // output data of each row
  
  echo "<option> Enter batch  </option>";
  while($row = $result->fetch_assoc()) {
echo" <option value='{$row["batch"]}'> {$row["batch"]}</option> ";
  }
} 
 ?>
</select>
</div>
<!-- batch drop down finished -->




<!-- members type drop down box -->
 <div class="col-md-2">  
<select name="memeber" class="indrop">
  <?php
$sql = "SELECT * FROM khc";
$result = $conn->query($sql);

if ($result->num_rows>0) {
  // output data of each row
  echo "<option> Member type  </option>";
  while($row = $result->fetch_assoc()) {
echo" <option value='{$row["memeber"]}'> {$row["memeber"]}    </option> ";
  }
} 
 ?>
</select>
</div>
<!-- end coding -->
 <div class="col-md-2">    
<input type="submit" name="sub" class="inbtn"> 
</form>
</div>
</div>
</div>
<br>


<!-- end 2nd container -->



<!-- table -->
<div class="container">
  <div class="row"> 
  <div class="col-md-12">  
<table id="customers" class="tbl">
  <thead>
    <tr>
 
      <th scope="col">Name</th>
      <th scope="col">Members Type</th>
       <th scope="col"></th>
    </tr>
  </thead>
  <tbody>





<?php

if(isset($_POST["sub"])) {

                                                                             
$sql = "SELECT * FROM khc where batch='{$_POST["batch"]}' and memeber='{$_POST["memeber"]}'";

$result = $conn->query($sql);

if ($result->num_rows>0) {
  // output data of each row
  $i=0;
  while($row = $result->fetch_assoc()) {

$i++;
echo"<tr>";

echo" <td>  {$row["name"]} </td>";
echo" <td>  {$row["memeber"]} </td>";

echo" <td> <button type='button' class='btn btn-outline-danger  btn-sm' style='width:72px;'> <a href='view.php?id={$row["id"]}'> View</a> </button>  </td>";



echo"</tr>";

  }
} 
}



else{


$sql = "SELECT * FROM khc ";

$result = $conn->query($sql);

if ($result->num_rows>0) {
  // output data of each row
  $i=0;
  while($row = $result->fetch_assoc()) {

$i++;
echo"<tr>";

echo" <td>  {$row["name"]} </td>";
echo" <td>  {$row["memeber"]} </td>";

echo" <td> <button type='button' class='btn btn-outline-danger  btn-sm' style='width:72px;'> <a href='view.php?id={$row["id"]}'> View</a> </button>  </td>";

echo"</tr>";

  }
} 
  








}

 ?>




  </tbody>
</table>







</div>
</div>
</div>

















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>