<?php 

    require_once ('includes/dbcon.php');

    if(isset($_POST['update']))
    {
        $DeptID = $_GET['ID'];
        $Deptcode = $_POST['dept_id'];
        $DeptName = $_POST['dept_name'];
         $Deptshort = $_POST['dept_sname'];
    }

        $query = " update department set dept_id = '".$Deptcode."', dept_name='".$DeptName."', dept_sname='".$Deptshort."' where cid='". $DeptID."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:managesubject.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    


?>