<?php
     class Student{
         //properties
         var $name;
         var $matric;
         var $password;
         var $level;
         var $programme;
         var $department;
         var $year_of_admission;

         var $conn; //to connect to DB
         var $error = array();

         //methods
        //function __construct($server,$dbuser,$dbpassword,$db);
        function __construct(){
            session_start();
            $this->conn=mysqli_connect('localhost','root','','schoolapp');            
            if(!$this->conn){
                $this->error="Error connecting to DB";                
            }           

        }

        //public function login($mat,$pas){
        public function login(){
            if($this->conn){
                $res = mysqli_query($this->conn,"select * from user
                where user_matric='$this->matric' and user_password='$this->password';")or die(mysqli_error());
                $no= mysqli_num_rows($res);
                if($no>0){
                    $_SESSION['theuser']=$this->matric;
                    header("location:student_profile.php");

                }else{
                header("location:student_login.php");
                }
            }
             
        }
        public function attendance(){

        }        
        function setter_matric($matric_no){
            $this->matric = $matric_no;

        }
        function getter_matric(){
            return $this->matric;
        }
        function setter_password($pass){
            $this->password = $pass;

        }
        function getter_password(){
            return $this->password;
        }
        function setter_programme($pro){
            $this->programme = $pro;

        }
        function getter_programme(){
            return $this->programme;
        }
        function get_courses(){
             if($this->conn){
                $res = mysqli_query($this->conn,"select * from courses");
                $tosend = array();
                while($row= mysqli_fetch_array($res)){
                    $tosend[] = $row;
                }               
            }
            return $tosend;

        }
        function get_session(){
             if($this->conn){
                $res = mysqli_query($this->conn,"select * from acad_session");
                $tosend = array();
                while($row= mysqli_fetch_array($res)){
                    $tosend[] = $row;
                }               
            }
            return $tosend;

        }
        function registerCourses($a,$b){
             if($this->conn){                
                $size=count($a);
                for($i=0;$i<$size;$i++){
                    $res = mysqli_query($this->conn,"insert into course_reg
                    set reg_session='$b', reg_matric='$_SESSION[theuser]',reg_courseid='$a[$i]';");
                }                             
            }          
        }
        function checkResult(){
             if($this->conn){
                $res = mysqli_query($this->conn,"select score_id,course_name,course_unit,
                course_desc,result from scores left join courses
                on scores.reg_courseid=courses.course_id
                where scores.reg_matric='$_SESSION[theuser]';");
               
                $tosend = array();
                while($row= mysqli_fetch_array($res)){
                    $tosend[] = $row;
                }  
                return $tosend;              
            }
                  
                
        }

    }   

    //Create the object 
    //$obj = new Student('localhost','root','','schoolapp');
    $obj = new Student;
    
    
?>