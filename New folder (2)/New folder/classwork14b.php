<?php
session_start();
?>

<html>
<head>
<title>Classwork 14b</title>
<link rel="stylesheet" href="mysite/css/bootstrap.css" type="text/css">
</head>
<body>
    <div class="container">
        <p>Hi <?php echo $_SESSION['name']?>. Kindly Enter the temperature value</p>
        <?php 
            if($_SESSION['name']){
                if($_SESSION['unit']=="kelvin_fahereint"){
                echo "<h2>Conversion from kelvin to Faherenit</h2>";
                echo "<h2>Kindly enter your temperature value in Kelvin</h2>";
            }else{
                echo "<h2>Conversion from Faherenit to Celcius</h2>";
                echo "<h2>Kindly enter your temperature value in Fahereint</h2>";
            }
        }
        ?>
        <form class="horizontal" action="classwork14c.php" method="POST">
            <div class="form-group">
                <label>Temperature: </label>
                <input type="text" value="" name="input2" />
            </div>            
            <div class="form-group">
                <input type="submit" value="Convert" name="submit" />
            </div>        

        </form>
    </div>

    


   

<script type="text/javascript" src="mysite/js/jquery.js"></script>
<script type="text/javascript" src="mysite/js/bootstrap.js"></script>
</body>
</html>