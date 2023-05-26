<?php 

       require_once ('includes/dbcon.php');

        if(isset($_GET['Del']))
        {
            $id = $_GET['Del'];
            $query = " delete from result where sid = '".$id ."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:manageresult.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:manageresult.php");
        }

?>