<html>
	<head>
		<title>changepassword</title>
		<link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
	
	
	<?php
$ray = mysqli_connect('localhost', 'root', '','myparty');


$res = mysqli_query($ray, "SELECT * from registration");

echo '<table class="table" border="1" width="400" height="400>';

while($data = mysqli_fetch_assoc($res)){
	
	echo"<pre>";
	print_r ($data);
	echo "</pre>";
}
	
	?>
echo "</table>";
	</body>
</html>