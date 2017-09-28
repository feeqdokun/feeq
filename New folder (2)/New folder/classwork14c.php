<?php
session_start();
?>

<html>
<head>
<title>Classwork 14b</title>
<link rel="stylesheet" href="mysite/css/bootstrap.css" type="text/css">
</head>
<body>

<?php
    if(isset($_POST['submit'])){
        $a=$_POST['input2'];
        $b=$_SESSION['unit'];
        if($b=="kelvin_fahereint"){
            $conv=(9/5*($a-273))+32;
            echo "<script>alert('Your temperature $a in Kelvin is equal to $conv in fahereint')</script>";

        }else{
            $conv=(5/9*($a-32));
            echo "<script>alert('Your temperature $a in Fahereint is equal to $conv in Celsius')</script>";
        }
    }
?>
    
    

   

<script type="text/javascript" src="mysite/js/jquery.js"></script>
<script type="text/javascript" src="mysite/js/bootstrap.js"></script>
</body>
</html>