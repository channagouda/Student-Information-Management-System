
<?php
//include header part of html
 include('header.php')
  ?>
       
       <br>     


            <div class="student-info text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 jumbotron">
                            <h2>Student's information</h2>
                            <form action="" method="post">
                <input type="text" name="usn" placeholder="Enter usn Number" style="width: 240px;height: 35px;"><span>OR/AND</span>
                 <select type="text"  name="department"  style="width: 300px;height: 35px;">
                                    <option>SELECT  Department Name</option>
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
                                       
                                </select><span>OR/AND</span>
                 <select name="semester" class="btn btn-info" >
                                    <option>SELECT STANDARD</option>
                                    <option>1st</option>
                                    <option>2nd</option>
                                    <option>3rd</option>
                                    <option>4th</option>
                                    <option>5th</option>
                                    <option>6th</option>
                                </select>
                  <input type="submit" name="show" value="SHOW INFO" class="btn btn-success text-center" style="margin-left: 30px;" >  
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<table class="table table-striped text-center">
    <tr >
    <th class="text-center">Usn No.</th>
        <th class="text-center">Semester</th>
        <th class="text-center">FName</th>
        <th class="text-center">MName</th>
        <th class="text-center">LName</th>
        <th class="text-center">Age</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Dob</th> 
        <th class="text-center">City</th>
        <th class="text-center">parent phone No.</th>
        <th class="text-center">Department</th>
        <th class="text-center">email</th>
        <th class="text-center">Address</th>

        
        <th class="text-center">Profile Pic</th>
    </tr>
<?php 
    include('includes/dbcon.php');
    if (isset($_POST['show'])) {

        $Semester = $_POST['semester'];
        $RollNo = $_POST['usn'];
        $Department = $_POST['department'];

        $sql = "SELECT * FROM `student` WHERE `semester` = '$Semester' or  `usn`='$RollNo' OR `department`='$Department'" ;

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
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
                $ProfilePic = $DataRows['image'];
                ?>
 

 



 <tr class="text-center">
                    <td><?php echo $usn;?></td>
                    <td><?php echo $semester;?></td>
                    <td><?php echo $fname; ?></td>
                    <td><?php echo $mname; ?></td>
                    <td><?php echo $lname; ?></td>
                    <td><?php echo $age; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $dob; ?></td>
                    <td><?php echo $city; ?></td>
                    <td><?php echo $pcontact; ?></td>
                    <td><?php echo $department; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><img src="databaseimg/<?php echo $ProfilePic;?>" alt="img"></td>
                </tr>
                <?php
                
            }
            
        } else {
            echo "<tr><td colspan ='7' class='text-center'>No Record Found</td></tr>";
        }
    }

 ?>
    



