<html>
<head>
<title>classwork:Student login page</title>
<link rel="stylesheet" href="../mysite/css/bootstrap.css" type="text/css">
</head>
<body>
    <div class="container">
        <h2>Student Login</h2>
        <div>
            <form method="post" action="">
                <div class=form-group>
                <input type="text" class="form-control" value="" name="matric" placeholder="Enter Your Matric Number">
                </div>
                <div class=form-group>
                <input type="password" class="form-control" value="" name="password" placeholder="Enter Your Password">
                </div>
                <div class=form-group>
                <input type="submit" value="Login" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>
<?php
    if($_POST){
        require ("student_class.php");

        $matric = $_POST['matric'];
        $pass = $_POST['password'];

        $obj->setter_matric($matric);
        $obj->setter_password($pass);
        $obj->login();

    }
?>
</html>
