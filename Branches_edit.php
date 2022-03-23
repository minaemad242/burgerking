<?php
error_reporting(0);
$host="localhost";
$port=3310;
$socket="";
$user="root";
$password="Min242&1998mIN";
$dbname="burgerking";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
?>
  <?php
$Id="";
$Name="";
$Area="";
$Governvate="";
$Address="";
$Branch_phone="";
$Branch_Time="";
$available="";
$payment_methods="";
if(isset($_POST['Id'])){
    $Id = $_POST['Id'];
}
if(isset($_POST['Name'])){
    $Name = $_POST['Name'];
}
if(isset($_POST['Area'])){
    $Area = $_POST['Area'];
}
if(isset($_POST['Governvate'])){
    $Governvate = $_POST['Governvate'];
}
if(isset($_POST['Address'])){
    $Address = $_POST['Address'];
}
if(isset($_POST['Branch_phone'])){
    $Branch_phone = $_POST['Branch_phone'];
}
if(isset($_POST['Branch_Time'])){
    $Branch_Time = $_POST['Branch_Time'];
}
if(isset($_POST['available'])){
    $available = $_POST['available'];
}
if(isset($_POST['payment_methods'])){
    $payment_methods = $_POST['payment_methods'];
}
$sqls="";
if(isset($_POST['ADD'])){
    $sqls="insert into branches values($Id,'$Name','$Area','$Governvate','$Address','$Branch_phone','$Branch_Time','$available','$payment_methods')";
mysqli_query($con,$sqls);
}
if(isset($_POST['Upd'])){
    $sqls="update branches set Branch_Name='$Name', Area ='$Area', Governvate='$Governvate', Address='$Address', Branch_phone='$Branch_phone', Branch_Time='$Branch_Time', available='$available', payment_methods='$payment_methods' WHERE Branch_ID=$Id";
    mysqli_query($con,$sqls);
}
if(isset($_POST['Del'])){
    $sqls="Delete from branches WHERE Branch_ID=$Id";
    mysqli_query($con,$sqls);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://localhost:8080/burgerking/css/BR_E.CSS" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="http://localhost:8080/burgerking/IMAGES/2222.png">

    <title>
        Edit Branches
    </title>
    <meta charset="viewport" content="width=device-width, initial-scale=1">
<link href="http://localhost:8080/burgerking/css/BR_E.CSS" rel="stylesheet">
</head>
<body>
    <form action="" method="POST">
    <div class="login">
        <h2>
            Edit Branch
        </h2>
        <div class="input-text">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Branch Id" name="Id" value="">
        </div>
        <div class="input-text">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Branch Name" name="Name" value="">
        </div>
        <div class="input-text">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Area" name="Area" value="">
        </div>
        <div class="input-text">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Governvate" name="Governvate" value="">
        </div>
        <div class="input-text">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Address" name="Address" value="">
        </div>
        <div class="input-text">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Branch_phone" name="Branch_phone" value="">
        </div>
        <div class="input-text">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Branch_Time" name="Branch_Time" value="">
        </div>
        <div class="input-text">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="available" name="available" value="">
        </div>
        <div class="input-text">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="payment_methods" name="payment_methods" value="">
        </div>
        <button name="ADD">ADD</button>
        <button name="Upd">Update</button>
        <button name="Del">Delete</button>
        <nav class="NAVIGATION">
            <a href="http://localhost:8080/burgerking/sections.php">Back To Sections</a>
        <br>
        <a href="http://localhost:8080/burgerking/main.php">Back To Main Page</a> </center>
        </nav>
    </div>
</form>
</body>
</html>