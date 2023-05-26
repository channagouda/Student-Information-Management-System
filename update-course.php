<?php 

    require_once ('includes/dbcon.php');

    if(isset($_POST['update']))
    {
        $CourseID = $_GET['ID'];
        $course_code = $_POST['course_code'];
        $course_name = $_POST['course_name'];
         $credits = $_POST['credits'];
    }

        $query = " update courses set course_code = '".$course_code."', course_name='".$course_name."', credits='".$credits."' where sid='". $CourseID."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:managecourse.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    


?>