<?php
session_start();
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
                            <h3 class="bg-success text-white text-center py-2"> Course Registration Form </h3>
                        </div>
                        <div class="card-body">

                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                            <div class="form-group ">
                      Course code:<input type="text"  class="form-control  " name="course_code" placeholder="Enter Course code" required>
                            </div>
                              
                  <div class="form-group">
                      Course Full Name:<input type="text" class="form-control " name="course_name" placeholder="Enter Course Full Name "  >
                  </div>
                  <div class="form-group">
                      Course credits :<input type="number" class="form-control " name="credits" placeholder="Enter Course Credits  "  >
                  </div>
                                <button class="btn btn-primary" name="submit">Submit</button>
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
        if (!empty($_POST['course_code']) && !empty($_POST['course_name'])) 
        {
        
            include ('includes/dbcon.php');
            $course_code=$_POST['course_code'];
            $course_name=$_POST['course_name'];
            $credits=$_POST['credits'];


            
            $sql = "INSERT INTO `courses`( `course_code`, `course_name`,`credits`) VALUES ('$course_code','$course_name','$credits')";

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
                    alert("Please insert atleast cshort");
                </script>
                <?php
        }


    }

 ?>
