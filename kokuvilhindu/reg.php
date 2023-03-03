
<?php

include"dconnect.php";

session_start();
  if(!isset($_SESSION["AID"]))
  {
    header('Location:alogin.php');
  } 
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


<div class="container">
<div class="row"> 
  <div class="col-md-12">
    <img src="img/lg.jpg" height="140px;" width="100%;" style="border-radius: 2%; margin-top:15PX;">
</div>
</div>
</div>


<!-- navbar coding -->
<div class="container" style="background-color:#EC7063;">
<div class="row"> 
  <div class="col-md-8"> 
</div>
  <div class="col-md-2">
 
  <button type="button" class="btn btn-outline-light"><a href="logout.php" style="color:#D82F1E;">setting</a></button>
</div>
  <div class="col-md-2">
     <button type="button" class="btn btn-outline-light"><a href="logout.php" style="color:#D82F1E;">LOGOUT</a></button>
</div>

</div>
</div>

<br>


<!-- data insert coding -->

<?php

if (isset($_POST['sub'])) {
  

$sql = "INSERT INTO khc(name,batch,memeber,dob,address,email)
VALUES ('{$_POST["name"]}','{$_POST["batch"]}', '{$_POST["mty"]}','{$_POST["dob"]}','{$_POST["address"]}','{$_POST["emi"]}')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// $conn->close();
}

?>



<!-- Reg page -->

<div class="container">
<div class="row"> 
<div class="col-md-4 " style="background-color:#F19F8C;" > 

<form action="reg.php" method="POST" >
  <div class="form-group">
    <label for="text">Full Name</label>
    <input type="text" class="form-control" name="name" required="">
  </div>
 
  <div class="form-group">
    <label for=""> School BatchType</label>
  <select name="batch" class="w" required="">

<option value="">Batch</option>
                <option value="NA">N/A</option>
            <option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option>
  </select>
  </div>


<!-- dropdown members -->
  <div class="form-group">
  <label for="">Members Type</label>
  <select name="mty" class="w" required="">
    <option value="life">Life</option>
    <option value="normal">Normal</option>
  </select>
  </div>


  <div class="form-group">
    <label for="pwd">Date of birth</label>
    <input type="date" class="form-control" name="dob" required="">
  </div>

  <div class="form-group">
    <label for="">Address</label>
    <input type="text" class="form-control" name="address" required="">
  </div>

  <div class="form-group">
    <label for="pwd">Email</label>
    <input type="email" class="form-control" name="emi" required="">
  </div>


  
  <button type="submit"name="sub">Submit</button>
</form>
</div>







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
                                                                             
$sql = "SELECT * FROM khc";
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