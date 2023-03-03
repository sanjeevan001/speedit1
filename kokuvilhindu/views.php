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
  





 <div class="col-md-8" >  
<table id="customers">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Batch</th>
      <th scope="col">Members Type</th>
       <th scope="col">DOB</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Delet</th>
    </tr>
  </thead>
  <tbody>


<?php
$id=$_GET['id'];
$sql = "SELECT * FROM khc where id='$id'";

$result = $conn->query($sql);

if ($result->num_rows>0) {
  // output data of each row
  $i=0;
  while($row = $result->fetch_assoc()) {

$i++;
echo"<tr>";
echo" <td>  {$i} </td>";
echo" <td>  {$row["name"]} </td>";
echo" <td>  {$row["batch"]} </td>";
echo" <td>  {$row["memeber"]} </td>";
echo" <td>  {$row["dob"]} </td>";
echo" <td>  {$row["address"]} </td>";
echo" <td>  {$row["email"]} </td>";
echo" <td> <a href='delet.php?sanjee={$row["id"]}' > delete  </a> </td>";
echo"<tr>";

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