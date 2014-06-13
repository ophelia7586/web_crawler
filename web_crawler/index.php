<?php session_start();?>

<html>
<html>
<body>


<?php
$user='root';
$pass='';
$host='localhost';
$con=mysqli_connect($host,$user,$pass) or die("Failed to connect to MySQL:".mysqli_connect_errno());

$db = mysqli_select_db($con,"web_crawler_db") or die  (mysql_error());


$texts = mysqli_query($con,"SELECT * FROM record ");

if(!(is_null($texts))){
	while($row = mysqli_fetch_array($texts)){

	$link = $row['URL'];
	//echo "<pre> RecordID:". $row['RecordID']. "<br>"."<br>". "Url ".; 
	
	echo "<pre> RecordID:". $row['RecordID']. "</pre>";
	
	echo "<pre> Url :". $row['URL'] . "</pre>";
	
	echo "Content :". $row['Content']. "</pre>";

	?> 
	<br>
	<?php
	echo '<a href="update_record.php?id='.$row['RecordID'].'" >Edit</a>
	  <a href="delete_record.php?id='.$row['RecordID'].'" >Delete</a></div>';
	}
	?>
	<br>
	<?php
}
else{
	echo "there is no record " ;
}


?>

</body>
</html>
