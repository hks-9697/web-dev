<?php
  include('config.php');
 session_start();  
$myusername = $_POST['username'];
$mypassword =$_POST['password']; 

$sql = "SELECT * FROM login WHERE user = '$myusername' and password = '$mypassword'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if(!$result)
{ header("Location: login.html");}
else
{$count = mysqli_num_rows($result);
    if($count==1)
    {$_SESSION['name']=$row['name'];
    $_SESSION['user']=$row['user'];
    header("Location: page.php");
    echo $_session['name'];}
    else
    {header("Location: login.html");}}
?>