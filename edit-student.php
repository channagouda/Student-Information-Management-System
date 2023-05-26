
<?php 

    require_once ('includes/dbcon.php');
    $Id = $_GET['GetID'];
    $query = " select * from student where id='".$Id."'";
    $result = mysqli_query($conn,$query);

    while ($DataRows = mysqli_fetch_assoc($result))
     {
        $Id = $DataRows['id'];
        $usn = $DataRows['usn'];
        $fname = $DataRows['first_name'];
        $mname = $DataRows['middle_name'];
        $lname = $DataRows['last_name'];
        $age = $DataRows['age'];
        $gender = $DataRows['gender'];
        $dob = $DataRows['dob'];
        $city = $DataRows['city'];
        $pcontact = $DataRows['pcontact'];
        $department = $DataRows['department'];
        $semester = $DataRows['semester'];
        $email = $DataRows['email'];
        $address = $DataRows['address'];
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
                            <h3 class="bg-success text-white text-center py-2"> Student Update Registration Form </h3>
                        </div>
                        <div class="card-body">

                    <form action="update-student.php?ID=<?php echo $Id ?>" method="post">
                              <div class="form-group">
              Usn No.:<input type="text" class="form-control" name="usn" value="<?php echo 
              $usn;?>" >
          </div>
         
          <div class="form-group">
              First Name.:<input type="text" class="form-control" name="fname" value="<?php echo 
              $fname;?>" required>
          </div>
          <div class="form-group">
              Middle Name.:<input type="text" class="form-control" name="mname" value="<?php echo 
              $mname;?>" >
          </div>
          <div class="form-group">
              last Name.:<input type="text" class="form-control" name="lname" value="<?php echo 
              $lname;?>" >
          </div>
          <div class="form-group">
              Age:<input type="text" class="form-control" name="age" value="<?php echo 
              $age;?>"required >
          </div>
          <div class="form-group">
              Gender:<input type="text" class="form-control" name="gender" value="<?php echo 
              $gender;?>"required >
          </div>
          <div class="form-group">
              DOB:<input type="text" class="form-control" name="dob" value="<?php echo 
              $dob;?>"required >
          </div>
          <div class="form-group">
              City:<input type="text" class="form-control" name="city" value="<?php echo 
              $city;?>"required >
          </div>
          <div class="form-group">
          Parent Phone No :<input type="text" class="form-control" name="pcontact" value="<?php echo 
              $pcontact;?>"required >
          </div>
				  
          <div class="form-group">
          Department :<input type="text" class="form-control" name="department" value="<?php echo 
              $department;?>"required >
          </div>
				

          <div class="form-group">
          Semester :<input type="number" class="form-control" name="semester" value="<?php echo 
              $semester;?>"required >
          </div>
          <div class="form-group">
          Email :<input type="text" class="form-control" name="email" value="<?php echo 
              $email;?>"required >
          </div>
          <div class="form-group">
          Address :<input type="text" class="form-control" name="address" value="<?php echo 
              $address;?>"required >
          </div>
          <button class="btn btn-primary" name="update">Update</button>
                            </form>
</body>
</html>