<?php
    require("student_class.php");
?>
<html>
<head>
<title>classwork:Course Registration page</title>
<link rel="stylesheet" href="../mysite/css/bootstrap.css" type="text/css">
</head>
<body>
    <?php
        if(!isset($_SESSION['theuser'])){
            header("location:student_login.php");
        }
    ?>
    <div class="container">
        <h2>Student Course Registration</h2>
        <div>
            <form method="post" action="#">
                <div class=form-group>
                <label class="label-control">Session</label>
                <select name="acad_session"class="form-control" value="">
                    <?php
                        $res=$obj->get_session();
                        var_dump($res);
                        foreach($res as $key=>$value){
                            $sid=$value[0];
                            $session=$value[1];
                            echo "<option>$session</option>";                                          
                        }                    
                    ?>
                </select>
                </div>                
                <div>
                    <?php
                        $result = $obj->get_courses();
                        var_dump($result);
                        //$size=count($result);
                    ?>
                    <table class="table table-responsive">
                        <th>
                            <tr>
                                <td>s/n</td>
                                <td>Course Name</td>
                                <td>Couse Unit</td>
                                <td>Course Description</td>
                                <td>Select</td>
                            </tr>
                        </th>
                        <tbody>
                            <?php
                                //$i=1;
                                foreach($result as $key=>$value){
                                    $cid=$value[0];
                                    $cc=$value[1];
                                    $cu=$value[2];
                                    $cd=$value[3];
                                    echo "<tr>
                                            <td>$cid</td><td>$cc</td><td>$cu</td><td>$cd</td>
                                            <td><input type='checkbox' value='$cid' name='course[]' ></td>
                                         </tr>";
                                    //$i++;
                                }
                            ?>

                        </tbody>

                    <table>
                    
                    
                </div>
                <div class=form-group>
                <input type="submit" value="Register" name="check_result">
                </div>
            </form>
        </div>
    </div>
    <?php
        if($_POST){
            var_dump($_POST);
            
            $obj->registerCourses($_POST['course'],$_POST['acad_session']);

        }
    
    ?>
</body>
</html>
