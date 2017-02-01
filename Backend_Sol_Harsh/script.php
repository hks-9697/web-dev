<?php
define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if(!$db)
    echo "could not connect";
$myname = $_POST['name'];
$mycol = $_POST['college'];
$mye1 = $_POST['event1'];
if(!$mye1)
    $mye1=0;
$mye2 = $_POST['event2'];
if(!$mye2)
    $mye2=0;
$mye3 = $_POST['event3'];
if(!$mye3)
    $mye3=0;
$sql="INSERT INTO `event` (`name`, `college`, `e1`,`e2` ,`e3` ) VALUES ('$myname', '$mycol', '$mye1','$mye2','$mye3')";
$result = mysqli_query($db,$sql);
header("Location:page.php")
?>