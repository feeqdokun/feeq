<?php
$con = mysqli_connect('localhost','root','','party');

$username = $_POST['username'];
$password = $_POST['password'];

//mYSQL Way
/* $query = mysqli_query($con,"SELECT * FROM admin WHERE username='$username' AND password= md5('$password')");
 */
 
 //PHP Way
 
 $encrypted_pass = md5($password);
 
 $query = mysqli_query($con,"SELECT * FROM admin WHERE username='$username' AND password= '$encrypted_pass'");

 
$number_of_rows = mysqli_num_rows($query);

echo $number_of_rows;
if($number_of_rows >0){
	//redirect to profile  page
}else{
	//redirect to login page
}



