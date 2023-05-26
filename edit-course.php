
<?php 

    require_once ('includes/dbcon.php');
    $CourseID = $_GET['GetID'];
    $query = " select * from courses where sid='".$CourseID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $CourseID = $row['sid'];
        $course_code = $row['course_code'];
        $course_name = $row['course_name'];
        $credits = $row['credits'];
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
                            <h3 class="bg-success text-white text-center py-2"> Course Update Registration Form </h3>
                        </div>
                        <div class="card-body">

                    <form action="update-course.php?ID=<?php echo $CourseID ?>" method="post">
                              <div class="form-group ">
                      Course Code:<input type="text"  class="form-control  " name="course_code" placeholder="Enter Course Short Name" value="<?php echo $course_code ?>" required >
                            </div>
                  <div class="form-group">
                      Course Full Name:<input type="text" class="form-control " name="course_name" placeholder="Enter Course Full Name " value="<?php echo $course_name ?>" required   >
                  </div>
                  <div class="form-group">
                      Course Credits:<input type="text" class="form-control " name="credits" placeholder="Enter Course Full Name " value="<?php echo $credits ?>" required   >
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