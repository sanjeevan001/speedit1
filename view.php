
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




<!-- image coding -->
<div class="container">
<div class="row"> 
<div class="col-md-12">  
<img src="img/lg.jpg" height="140px;" width="100%;" style="border-radius: 2%; margin-top:15PX;">
</div>
</div>
</div>



<div class="container">
<div class="row"> 
<div class="col-md-12" >


  <img src="img/admin1.jpg" alt="Avatar" class="avatar" style=" margin: 10px auto 20px;
    display: block;">

</div>
</div>
</div>

<!-- view table coding -->
<div class="container">
<div class="row"> 
<div class="col-md-12" >
<table id="customers" class="viewtbl">
 <!--  <tr>
    <th>NAME</th>
    <th>BATCH</th>
    <th>MEMEBERTYPE</th>
    <th>DATE OF BIRTH </th>
     <th>ADDRESS</th>
     <th>Email</th>
  </tr>
 -->
<?php                                                                           
$id=$_GET['id'];
$sql = "SELECT * FROM khcoba where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows>0) {
  // output data of each row
  $i=0;
  while($row = $result->fetch_assoc()) {

$i++;
// echo"<tr>";

echo"<tr><td colspan='2'><img src='img/admin1.jpg' width='250'height='250' padding-left:200px;></td></tr>";



echo"<tr><th> NAME </th> <td>  {$row["name"]} </td></tr>";
echo"<tr><th> BATCH </th> <td>  {$row["batch"]} </td></tr>";
echo"<tr><th> MEMBER TYPE</th> <td>  {$row["mtype"]} </td></tr>";
echo"<tr><th> DATE Of BIRTH</th> <td>  {$row["dob"]} </td></tr>";
echo"<tr><th> ADDRESS </th> <td>  {$row["emai"]} </td></tr>";








  }
} 
 ?>
</table>
</div>
</div>
</div>
<!-- end table coding  -->












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>