<?php 

include "dbmanagment.php";

$image = "SELECT * FROM images ORDER BY id desc limit 10";





$result = mysqli_query($conn,$image);

$row = mysqli_fetch_array($result);

$filename = $row['name'];
$image = $row['image'];

?>
<!DOCTYPE html>
<html>
<head></head>
<body>

	<!-- Image -->
	<img src="upload/<?= $filename ?>" width="300px" height="300px" >

	
</body>
</html>