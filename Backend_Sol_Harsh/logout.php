<html>
<title>logout</title>
<body>
<?php
session_start();
session_destroy();
echo "you have been loggedout.";
?>
<br>
<a href='home.php'>click here</a>
</body>
</html>
