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
    <title>Department Form</title>
</head>
<body >

        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="card mt-4">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-2"> Department Registration Form </h3>
                        </div>
                        <div class="card-body">

                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                            <div class="form-group ">
                      Department Code:<input type="text"  class="form-control  " name="dept_id" placeholder="Enter Department code" required>
                            </div>
                              
                  <div class="form-group">
                      Department Full Name:<input type="text" class="form-control " name="dept_name" placeholder="Enter Department Full Name "  >
                  </div>
                  <div class="form-group">
                      Department Short name :<input type="text" class="form-control " name="dept_sname" placeholder="Enter Department short Name "  >
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
        if (!empty($_POST['dept_id']) && !empty($_POST['dept_name'])) 
        {
        
            include ('includes/dbcon.php');
            $dept_id=$_POST['dept_id'];
            $dept_name=$_POST['dept_name'];
            $dept_sname=$_POST['dept_sname'];


            
            $sql = "INSERT INTO `department`( `dept_id`, `dept_name`,`dept_sname`) VALUES ('$dept_id','$dept_name','$dept_sname')";

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
                    alert("Please insert atleast name");
                </script>
                <?php
        }


    }

 ?>
