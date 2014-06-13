<?php session_start();
ob_start();?>


<html>
<head></head>
<body>

<?php

$user='root';
$pass='';
$host='localhost';
$con=mysqli_connect($host,$user,$pass) or die("Failed to connect to MySQL:".mysqli_connect_errno());

$db = mysqli_select_db($con,"web_crawler_db") or die  (mysql_error());

$Content=$_POST["Content"];


mysqli_query($con,"UPDATE record SET Content= '$Content' WHERE RecordID='".$_GET['id']."'  ") or die("".mysqli_error($con) );
						
header("Location:proje.php");

ob_end_flush();
?>
</body>
</html>
