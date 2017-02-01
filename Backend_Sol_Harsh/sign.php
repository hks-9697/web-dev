<?php
   include('config.php');
$myname = $_POST['name'];    
$myusername = $_POST['username'];
$mypassword =$_POST['password']; 
/*
$sql = "SELECT * FROM login WHERE user = '$myusername'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($result)
    header("Location: login.html");
else*/
    $sql="INSERT INTO `login` (`name`, `user`, `password`) VALUES ('$myname', '$myusername', '$mypassword')";
    $result = mysqli_query($db,$sql);
    echo "complete"
    #header("Location: login.html")
?>
<html><hr><a href='login.php'>login</a></html>