<?php session_start();?>
<html>
<head>
<?php

$user='root';
$pass='';
$host='localhost';
$con=mysqli_connect($host,$user,$pass) or die("Failed to connect to MySQL:".mysqli_connect_errno());

$db = mysqli_select_db($con,"web_crawler_db") or die  (mysql_error());


$result = mysqli_query($con,"SELECT * FROM record WHERE ( RecordID='".$_GET['id']."' ) ");
$row = mysqli_fetch_array($result);

echo'
<form method="post"  action="update_record_response.php?id='.$_GET["id"].'" enctype="multipart/form-data" >

Record Number : '.$row["RecordID"].'

<br><br>

Record URL : '.$row["URL"].'

<br><br>

Context :
<br><br>


<textarea rows="30" cols="100" name="Content" value="'.$row['Content'].'" > '.$row['Content']. ' </textarea>

<br> <br>

<input type="submit" value="UPDATE">

</form>';

//<form method="post"  action="update_record_response.php?id='.$_GET["id"].'" enctype="multipart/form-data" >
?>

</body>
</html>