<?php
include("header.php");
// check if user is logged in, only logged in user can access this page
if(!isset($_SESSION['user_online'])){ 
	header("location:admin.php");
}
?>
<form action="post.php" method="post" enctype="multipart/form-data">
<p>Welcome <?php echo $_SESSION['user_online']; ?>, Please use any of the links below to carry out actions on this website:</p>
<div class="form-group">
<label><a href="changepass.php">Change My Password</a></label>
</div>
<div class="form-group">
<label><a href="report.php">View Reports</a></label>
</div>
<div class="form-group">
<label><a href="logout.php">Logout</a></label>
</div>

</form>
<?php
include("footer.php");
?>