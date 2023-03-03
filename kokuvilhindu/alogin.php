<?php
include"dconnect.php";
session_start();
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
<?php
        if(isset($_POST["login"]))
        {
          $sql="select * from admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
          $res=$conn->query($sql);
          if($res->num_rows>0)
          {
            $ro=$res->fetch_assoc();

            $_SESSION["AID"]=$ro["AID"];
            $_SESSION["ANAME"]=$ro["ANAME"];
            header('Location:reg.php');
          }
          else
          {
            echo "<div class='error'>Invalid Username or Password</div>";
          }
          
        }
        if(isset($_GET["mes"]))
        {
          echo "<div class='error'>{$_GET["mes"]}</div>";
        } 
      ?>

 

<form action="alogin.php" method="post">
  <div class="imgcontainer">
    <img src="img/admin1.jpg" alt="Avatar" class="avatar" >
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="aname" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="apass" required>
        
    <button type="submit" name="login" class="lbtn">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>

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