<?php
session_start();
?>

<html>
<head>
<title>Classwork 14a</title>
<link rel="stylesheet" href="mysite/css/bootstrap.css" type="text/css">
</head>
<body>
    <div class="container">
        <form class="horizontal" action="post4.php" method="POST">
            <div class="form-group">
                <input type="text" value="" placeholder="Enter your name" name="name" />
            </div>            
            <div class="form-group">
                <select name="temperature" onchange="this.form.submit()">
                    <option value="">Select conversion</option>
                    <option name="kf" value="kelvin_fahereint" name="unit">Kelvin-Fahereint</option>
                    <option name="fc" value="fahereint_celsius" name="unit">Fahereint-Celsius</option>
                </select>
            </div>               
        </form>
    </div>


    <?php
        /*
        if($_POST){
            $username=$_POST['name'];
            $input=$_POST['input'];
            $unit=$_POST['temperature'];
            var_dump($_POST);
            $_SESSION['name']=$username;
            $_SESSION['temp']=$input;
            $_SESSION['unit']=$unit;
            if($_SESSION['unit']=="kelvin_fahereint"){
                $_SESSION['name']=$username;
                $_SESSION['unit']=$unit;
                header("location:classwork14b.php");

            }else{
                $_SESSION['name']=$username;
                $_SESSION['unit']=$unit;
                header("location:classwork14b.php");

            }
            //header("location:classwork14b.php");





            
        }*/
    
    ?>

<script type="text/javascript" src="mysite/js/jquery.js"></script>
<script type="text/javascript" src="mysite/js/bootstrap.js"></script>
</body>
</html>