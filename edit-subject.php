
<?php 

require_once ('includes/dbcon.php');
$DeptID = $_GET['GetID'];
$query = " select * from department where cid='".$DeptID."'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
   
    $DeptID = $row['cid'];
    $Deptcode = $row['dept_id'];
    $DeptName = $row['dept_name'];
    $Deptshort = $row['dept_sname'];
    
}

?>
<?php require_once('header.php'); ?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
<title>Course Form</title>
</head>
<body >

    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="card mt-4">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-2"> Department Update Registration Form </h3>
                    </div>
                    <div class="card-body">

                <form action="update-subject.php?ID=<?php echo $DeptID ?>" method="post">
                          <div class="form-group ">
                  Department ID:<input type="text"  class="form-control  " name="dept_id" placeholder="Enter Course Short Name" value="<?php echo $Deptcode ?>" required >
                        </div>
              <div class="form-group">
                  Department Full Name:<input type="text" class="form-control " name="dept_name" placeholder="Enter Course Full Name " value="<?php echo $DeptName ?>" required   >
              </div>
              <div class="form-group">
              Department short Name:<input type="text" class="form-control " name="dept_sname" placeholder="Enter Course Full Name " value="<?php echo $Deptshort ?>" required   >
              </div>
                            <button class="btn btn-primary" name="update">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>