<?php
include("header.php");

// check if user is logged in, only logged in user can access this page
if(!isset($_SESSION['user_online'])){ 
	//header("location:admin.php");
}

?>

<form action="index.php" method="post" id="changepass">
<p>You can change your password by filling the form below: or click <a href="logout.php">here</a> to logout</p>
<div class="form-group">
<label>Username</label>
<input type="text" class='form-control' id='username' name='oldpass' />
</div>
<div class="form-group">
<label>New Password</label>
<input type="password" class='form-control' name='newpass' />
</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" class='form-control' name='newpass1' />
</div>
<div class="form-group">
<label>Have You Learnt Programming Before?</label>
<select name='b4' id='b4'>
<option value=''>Please Select</option>
<option value='yes'>Yes</option>
<option value='no'>No</option>
</select>
</div>
<div id="result"></div>

<hr>

<input type="button" onclick="document.location.href='home.php'" class='btn btn-danger' value="Cancel" />
<input type="submit" class='btn btn-primary' value="Change Password" />
</form>
<p>Copyright. Designed by Moat Academy Class</p>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	/* $("#changepass").submit(function(event){
		event.preventDefault();
		$("#result").load('external.php');
		
	}); */
	
	$("#b4").change(function(){
		var resp = $("#b4").val();
		var data = $("#username").val();
		var pass = '1234';
		//var tobesent = "user="+data+"&password="+pass ;
		var tobesent ={user:data,password:pass};
		//alert(tobesent);
		if(resp =='yes'){
			$("#result").load('external.php',tobesent,function(){alert("I have come back");});
			
		}else{
			alert('no');
			$("#result").empty();
			$("#changepass").submit();
		}
		
	});
})

</script>
</div>
</div>
</body>
</html>
