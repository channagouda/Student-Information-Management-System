<?php 

       require_once ('includes/dbcon.php');

        if(isset($_GET['Del']))
        {
            $CourseID = $_GET['Del'];
            $query = " delete from courses where sid = '".$CourseID ."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:managecourse.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:managecourse.php");
        }

?>