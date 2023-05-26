<?php 

       require_once ('includes/dbcon.php');

        if(isset($_GET['Del']))
        {
            $DeptID = $_GET['Del'];
            $query = " delete from department where cid = '".$DeptID ."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:managesubject.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:managesubject.php");
        }

?>