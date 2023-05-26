<?php 

    require_once ('includes/dbcon.php');

if(isset($_POST['update']))
    {
$id = $_GET['ID'];
        $studentname = $_POST['stuname'];
       $studentID = $_POST['stuusn'];
       $semester = $_POST['sem'];
       $subject1in = $_POST['sub1in'];
       $subject1ex = $_POST['sub1ex'];
       $subject2in = $_POST['sub2in'];
       $subject2ex = $_POST['sub2ex'];
       $subject3in = $_POST['sub3in'];
       $subject3ex = $_POST['sub3ex'];
       $subject4in= $_POST['sub4in'];
       $subject4ex = $_POST['sub4ex'];
       $subject5in = $_POST['sub5in'];
       $subject5ex = $_POST['sub5ex'];
       $subject6in = $_POST['sub6in'];
       $subject6ex = $_POST['sub6ex'];
       $s1tol=$_POST['sub1tot'];
       $s2tol=$_POST['sub2tot'];
       $s3tol=$_POST['sub3tot'];
       $s4tol=$_POST['sub4tot'];
       $s5tol=$_POST['sub5tot'];
       $s6tol=$_POST['sub6tot'];
       $s1gr=$_POST['sub1gr'];
       $s2gr=$_POST['sub2gr'];
       $s3gr=$_POST['sub3gr'];
       $s4gr=$_POST['sub4gr'];
       $s5gr=$_POST['sub5gr'];
       $s6gr=$_POST['sub6gr'];
}


        $query = " update result set stname = '".$studentname."', stusn='".$studentID."',sem='".$semester."', s1in='".$subject1in."', s1ex='".$subject1ex."', s2in='".$subject2in."', s2ex='".$subject2ex."', s3in='".$subject3in."', s3ex='".$subject3ex."', s4in='".$subject4in."', s4ex='".$subject4ex."', s5in='".$subject5in."', s5ex='".$subject5ex."',s6in='".$subject6in."', s6ex='".$subject6ex."', s1tot='".$s1tol."', s2tot='".$s2tol."', s3tot='".$s3tol."', s4tot='".$s4tol."', s5tot='".$s5tol."', s6tot='".$s6tol."', s1gr='".$s1gr."', s2gr='".$s2gr."', s3gr='".$s3gr."', s4gr='".$s4gr."', s5gr='".$s5gr."', s6gr='".$s6gr."' where sid='". $id."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            

            header("location:manageresult.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    


?>