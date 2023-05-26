
<?php require_once('includes/Session.php');?>
<?php require_once('includes/Functions.php');?>
<?php 
    require_once ('includes/dbcon.php');

    if(isset($_POST['update']))
    {
        $Id = $_GET['ID'];
        $usn=$_POST['usn'];
			$fname=$_POST['first_name'];
			$mname=$_POST['middle_name'];
			$lname=$_POST['last_name'];
			$age=$_POST['age'];
			$gender=$_POST['gender'];
			$dob=$_POST['dob'];
			$city=$_POST['city'];
			$pcontact=$_POST['pcontact'];
			$department=$_POST['department'];
			$semester=$_POST['semester'];
			$email=$_POST['email'];
			$address=$_POST['address'];
            

    }
  

        $query = "update student set usn = '$usn', first_name = '$fname', middle_name = '$mname', last_name = '$lname', age = '$age', gender = '$gender', dob = '$dob', city='$city', pcontact = '$pcontact', department = '$department',semester = '$semester',email = '$email',address = '$address' WHERE id = '$Id'";

        $Execute = mysqli_query($conn,$query);

            if ($Execute)
             {
                 $_SESSION['SuccessMessage'] = " Data Updated Successfully";
                Redirect_to("managestudent.php");

            }
           
    


?>
