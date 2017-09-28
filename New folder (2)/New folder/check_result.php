<?php
require("student_class.php");
?>
<?php
if(!isset($_SESSION['theuser'])){
    header("location:student_login.php");
}else{
    $result=$obj->checkResult();
?>
<html>
<head>
<title>classwork:Student Check result  page</title>
<link rel="stylesheet" href="../mysite/css/bootstrap.css" type="text/css">
</head>
<body>
    <div class="container">
        <h2>Student <?php echo $_SESSION['theuser'];?> Result</h2>
        <div>
            <table class="table table-responsive">
                        <th>
                            <tr>
                                <td>s/n</td>
                                <td>Course Name</td>
                                <td>Couse Unit</td>
                                <td>Course Description</td>
                                <td>Score</td>
                            </tr>
                        </th>
                        <tbody>
                            <?php
                                foreach($result as $key=>$value){
                                    $sid=$value[0];
                                    $sc=$value[1];
                                    $su=$value[2];
                                    $sd=$value[3];
                                    $ss=$value[4];
                                    echo "<tr>
                                            <td>$sid</td><td>$sc</td><td>$su</td><td>$sd</td>
                                            <td>$ss</td>
                                         </tr>";                                    
                                }
                            ?>

                        </tbody>

                    <table>
            
        </div>
    </div>
</body>
</html>
<?php
}
?>

