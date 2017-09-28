<?php
    require("student_class.php");
?>
<html>
<head>
<title>classwork:Student Profile page</title>
<link rel="stylesheet" href="../mysite/css/bootstrap.css" type="text/css">
</head>
<body>
    <div class="container">
        <h2>Student Profile Page</h2>
        <h3>Welcome Student: <?php echo $_SESSION['theuser'] ?>.</h3>
        <div>         
            <a href="check_result.php">Check Result</a>            
        </div>
         <div>         
            <a href="course_registration.php">Register Courses</a>            
        </div>
    </div>
</body>
</html>
