



// $sql = "UPDATE khc SET name='{$_POST["name"]}' batch='{$_POST["batch"]}' WHERE id={$_GET["sanjee"]}";

// if ($conn->query($sql) === TRUE) {
//   echo header("location:reg.php");
// } 








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
  


  $target_dir="img/";
$target_file=$target_dir.basename($_FILES['photo'] ['name']);



if (move_uploaded_file($_FILES['photo'] ['tmp_name'],$target_file)) {
  

$sql = "INSERT INTO khcoba(name,image,nic,occu,batch,mtype,dob,emai,ofadd,poadd,ylast,glast,reco,ypay,yexpdate)
VALUES ('{$_POST["name"]}','{$_POST["$target_file"]}','{$_POST["nic"]}','{$_POST["occ"]}','{$_POST["batch"]}','{$_POST["mty"]}','{$_POST["dob"]}','{$_POST["emi"]}','{$_POST["ofaddress"]}','{$_POST["poaddress"]}','{$_POST["ylast"]}','{$_POST["glast"]}','{$_POST["reco"]}','{$_POST["ypay"]}','{$_POST["yexp"]}')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// $conn->close();
}
}

?>



<!-- Reg page -->

<div class="container">
<div class="row"> 
<div class="col-md-4 " style="background-color:#F19F8C;" > 

<form action="reg.php" method="POST" enctype="multipart/form-data">

 



  <div class="form-group">
    <label for="text">Full Name</label>
    <input type="text" class="form-control" name="name" >
  </div>

    <div class="form-group">
    <label for="text"> upload photo</label>
    <input type="file" name="photo">
  </div>



 
   <div class="form-group">
    <label for="text">National Identity Card Number1</label>
    <input type="text" class="form-control" name="nic">
  </div>


   <div class="form-group">
    <label for="text">Designation / Occupation</label>
    <input type="text" class="form-control" name="occ">
  </div>


  <div class="form-group">
    <label for=""> School BatchType</label>
  <select name="batch" class="w">

<option value="">Batch</option>
                <option value="NA">N/A</option>
            <option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option>
  </select>
  </div>


<!-- dropdown members -->
  <div class="form-group">
  <label for="">Members Type</label>
  <select name="mty" class="w" >
    <option value="life">Life</option>
    <option value="normal">Normal</option>
  </select>
  </div>


  <div class="form-group">
    <label for="pwd">Date of birth</label>
    <input type="date" class="form-control" name="dob" >
  </div>

    <div class="form-group">
    <label for="pwd">Email</label>
    <input type="email" class="form-control" name="emi" >
  </div>

  <div class="form-group">
    <label for="">Official Address</label>
    <input type="text" class="form-control" name="ofaddress" >
  </div>

    <div class="form-group">
    <label for="">Residential Address / Postal Address</label>
    <input type="text" class="form-control" name="poaddress" >
  </div>



    <div class="form-group">
    <label for="pwd">Year Last attend</label>
    <input type="text" class="form-control" name="ylast">
  </div>

   <div class="form-group">
    <label for="pwd">
Grade Last attend</label>
    <input type="text" class="form-control" name="glast" >
  </div>



    <div class="form-group">
    <label for="pwd">
Recommendation By</label>
    <input type="text" class="form-control" name="reco" >
  </div>

  <div class="form-group">
    <label for="pwd">
YEARLY PAYNMENT</label>
    <input type="text" class="form-control" name="ypay">
  </div>

   <div class="form-group">
    <label for="pwd">
YEARLY EXP DATE</label>
    <input type="date" class="form-control" name="yexp" >
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
       <th scope="col">image</th>
        <th scope="col">NIC</th>
         <th scope="col">Occupation</th>
      <th scope="col">Batch</th>
      <th scope="col">Members Type</th>
       <th scope="col">DOB</th>
        <th scope="col">Email</th>
      <th scope="col">Official Address</th>
      <th scope="col">Postal Address</th>
     
         <th scope="col">Year Last attend</th>
          <th scope="col">Grade Last attend</th>
               <th scope="col">Recommendation By</th>
                <th scope="col">YEARLY PAYNMENT</th>
                 <th scope="col">YEARLY EXP DATE</th>
                

      <th scope="col">Delet</th>
        <th scope="col">Edit</th>



    </tr>
  </thead>
  <tbody>


<?php
 $edit=$_GET['id'];                                                                            
$sql = "SELECT * FROM khcoba where id='$edit'";
$result = $conn->query($sql);

if ($result->num_rows>0) {
  // output data of each row
  $i=0;
  while($row = $result->fetch_assoc()) {

$i++;
echo"<tr>";
echo" <td>  {$i} </td>";
echo" <td>  {$row["name"]} </td>";
echo" <td>  {$row["image"]} </td>";
echo" <td>  {$row["nic"]} </td>";
echo" <td>  {$row["occu"]} </td>";
echo" <td>  {$row["batch"]} </td>";
echo" <td>  {$row["mtype"]} </td>";
echo" <td>  {$row["dob"]} </td>";
echo" <td>  {$row["emai"]} </td>";
echo" <td>  {$row["ofadd"]} </td>";
echo" <td>  {$row["poadd"]} </td>";
echo" <td>  {$row["ylast"]} </td>";
echo" <td>  {$row["glast"]} </td>";
echo" <td>  {$row["reco"]} </td>";
echo" <td>  {$row["ypay"]} </td>";
echo" <td>  {$row["yexpdate"]} </td>";

echo" <td> <a href='delet.php?sanjee={$row["id"]}' > delete  </a> </td>";
echo" <td> <a href='edit.php?sanjee={$row["id"]}' > edit  </a> </td>";
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