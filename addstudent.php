<?php require_once('includes/Session.php');?>
<?php require_once('includes/Functions.php');?>


<?php include('header.php') ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
    <title>student Form</title>
</head>
<body >

        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="card mt-4">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-2"> Student Registration Form </h3>
                        </div>
                        <div class="card-body">

                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                              <div class="form-group">
				      USN.:<input type="text" class="form-control" name="usn" placeholder="Enter USN No." required>
				  </div>
				  <div class="form-group">
				    
				    First Name:<input type="text" class="form-control" name="fname" placeholder="first name" required>
				  </div>
				  <div class="form-group">
				    
				    Middle Name:<input type="text" class="form-control" name="mname" placeholder="middle name" >
				  </div>
				  <div class="form-group">
				    
				    last Name:<input type="text" class="form-control" name="lname" placeholder="last name" >
				  </div>
				  <div class="form-group">
				    
				    AGE:<input type="text" class="form-control" name="age" placeholder="age" required>
				  </div>
				  <div class="form-group">
				        Gender: <select type="text" class="form-control"  name="gender" required >
				             <option>SELECT  gender</option>
				             <option>Male</option>
                             <option>Female </option>
                                    
                                </select>
				  </div>
				  <div class="form-group">
				    
				    DOB:<input type="text" class="form-control" name="dob" placeholder="Enter Date of birth." required>
				  </div>
				  <div class="form-group">
				        City: <select type="text" class="form-control"  name="city" required >
				             <option>SELECT  City</option>
				             <option>BANGALORE URBAN</option>
                             <option>BANGALORE RURAL</option>
                                    
                                </select>
				  </div>
				  
				  <div class="form-group">
				    
				    Parent Phone No.:<input type="text" class="form-control" name="pphone" placeholder="Enter Parent Phone No." required>
				  </div>
				  <div class="form-group">
				    
				    Department:<select type="text" class="form-control"  name="department"  required>
                                    <option>SELECT Student Department</option>
                                    <option>Aeronautical Engineering</option>
                                    <option>Agricultural Engineering</option>
                                    <option>Apparel Design and Fabrication Technology</option>
                                    <option>Architecture</option>
                                    <option>Automobile Engineering</option>
                                    <option>Computer Science and Engineering</option>
                                     <option>Electrical and Electronics Engineering</option>
                                      <option>Electronics and Communication Engineering</option>
                                       <option>Information Science and Engineering</option>
                                        <option>Mechanical Engineering</option>
                                        <option>Sound Recording Engineering</option>
                                       
                                </select>
				  </div>
				

				  <div class="form-group">
				    
				    Semester: <select name="semester" class="form-control" required>
                                    <option>SELECT SEMESTER</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
									<option>7</option>
									<option>8</option>
                                </select>
				  </div>
				  <div class="form-group">
				    
				    Email:<input type="text" class="form-control" name="email" placeholder="Enter Email." required>
				  </div>
				  <div class="form-group">
				    
				    Address:<input type="text" class="form-control" name="address" placeholder="Enter address." required>
				  </div>

				   <div class="form-group">
				    
				    Image:<input type="file" class="form-control" name="simg" required>
				  </div>

				  <button type="submit" name="submit" class="btn btn-success btn-lg ">INSERT</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['usn']) && !empty($_POST['fname'])) {
		
			include ('includes/dbcon.php');
			$usn=$_POST['usn'];
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$lname=$_POST['lname'];
			$age=$_POST['age'];
			$gender=$_POST['gender'];
			$dob=$_POST['dob'];
			$city=$_POST['city'];
			$pphone=$_POST['pphone'];
			$department=$_POST['department'];
			$semester=$_POST['semester'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			include('ImageUpload.php');

			$sql = "INSERT INTO `student`( `usn`, `first_name`, `middle_name`,`last_name`,`age`,`gender`,`dob`,`city`, `pcontact`,`department`, `semester`,`email`,`address`,`image`) VALUES ('$usn','$fname','$mname','$lname','$age','$gender','$dob','$city','$pphone','$department',$semester,'$email','$address','$imgName')";

			$run = mysqli_query($conn,$sql);

			if ($run == true) {
				
				?>
				<script>
					alert("Data Inserted Successfully");
				</script>
				<?php
			} else {
				echo "Error : ".$sql."<br>". mysqli_error($conn); 
			}
		} else {
				?>
				<script>
					alert("Please insert atleast roll no. and fullname");
				</script>
				<?php
		}


	}

 ?>








