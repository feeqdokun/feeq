<?php
session_start();
?>
<html>
<head><title>End of Programme Party - Registration Form</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="row">
<h2> End of Bootcamp Party Registration</h2>
<?php
if(isset($_SESSION['message'])){
	$m = $_SESSION['message'];
	echo $m;
	session_destroy();
}
?>
<form action="post.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label>First Name</label>
<input type="text" class='form-control' name='firstname' />
</div>
<div class="form-group">
<label>Last Name</label>
<input type="text" class='form-control' name='lastname' />
</div>
<div class="form-group">
<label>Phone Number</label>
<input type="text" class='form-control' name='phone' />
</div>
<hr>
<div class="checkbox">
<p>Preference</p>
<input type="checkbox" value='Rice' name='menu[]'/> Rice<br>
<input type="checkbox" value='Pounded Yam' name='menu[]'/> Pounded Yam<br>
<input type="checkbox" value='Snacks' name='menu[]'/> Snacks<br>
</div>
<div class="form-group">
<label>Upload Your Passport</label>
<input type="file" name='passport' />
</div>
<input type="submit" class='btn btn-primary' value="Register" />
</form>

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</div>
</div>
</body>
</html>