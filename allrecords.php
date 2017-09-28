<?php
session_start();
$conn = mysqli_connect("localhost","root","","party_db");

$query = mysqli_query($conn,"SELECT * FROM guest");

$num = mysqli_num_rows($query);
echo $num;
echo "<table border='1'>";
while($data = mysqli_fetch_assoc($query)){
	$guest_fname = $data['guest_fname'];
	
	echo "<tr>
<td>$guest_fname</td>
<td></td>
<td></td>
</tr>";
/* 	echo "<pre>";
	print_r($data);
	echo "</pre>"; */
	
}



	
	
?>


</table>