<?php
		if (!isset($_SESSION['message'])){
			header("location: admin_signup.php");	
		}
	if($_POST){
			$oldpassword = $_POST['oldpass'];
			$newpass = $_POST['newpass'];
			
			$res = mysqli_query($con, "SELECT * FROM admin WHERE username = '$user' AND password = md5('$oldpassword')");
			
			$total_records = mysqli_num_rows($res);
			
			if($total_records > 0){
				mysqli_query($con, "UPDATE admin SET password = md5('$newpass') WHERE username = $user");	
			}
	}
?>
<html>
<head>
<title>Multi-dimensional array </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>	
<div class = "container">
    
    <form class="form-group form-horizontal" method="POST" action="">
        <div class="row">
            <p class="well well-sm" >Change password or click <a href="logout.php">here</a> to logout</p>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label>Old Password:</label>
                <input type="password" id="pwd1" class="form-control" name="oldpass">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label>New Password:</label>
                <input type="password" id="pwd2" class="form-control" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label>confirm Password:</label>
                <input type="password" id="pwd2" class="form-control" name="pwd">
            </div>
        </div>
       
        <br>
        <button class="btn btn-default" >Update</button>
         <button class="btn btn-danger" onClick="document.location.href='party_homepage.php' " type ="button">cancel</button>
    </form>
<?php

 ?>
		</div>
    
		
		<script type="text/javascript" src="js/jquery.js">
		</script>
		<script type="text/javascript" src="js/bootstrap.js">
                            
                               
                            
						</script>
						
</body>
    </html>