<?php
session_start();
$con = mysqli_connect('localhost','root','','party');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];

$picture = $_FILES['passport']['name'];
$size = $_FILES['passport']['size'];
$type = $_FILES['passport']['type'];
$temp_location = $_FILES['passport']['tmp_name'];

if(isset($_POST['menu'])){
	$menu = $_POST['menu'];
}

$r = time();


$fullpath = "uploads/".$r.$picture;

if(move_uploaded_file($temp_location,$fullpath)){
	
	if($con){
	
mysqli_query($con,"INSERT INTO registration SET firstname='$firstname',lastname='$lastname',phone_no='$phone',picture='$picture'")or die(mysqli_error($con));

$id = mysqli_insert_id($con);

if(isset($_POST['menu'])){
	foreach($menu as $key=>$value){
		
		$query = "INSERT INTO preference SET reg_id='$id',
		item='$value'";
		
		mysqli_query($con,$query);
	}	
}	
}
$_SESSION['message'] ="Your Applicationm was successful"; 
header("location:review.php");
}else{
	$_SESSION['message'] ="Why didnt you supply an image? Why?"; 
	header("location:review.php");
}



?>