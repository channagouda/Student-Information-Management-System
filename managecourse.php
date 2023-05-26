<?php
session_start();
?>
<?php require_once('header.php'); ?>

<?php 

    require_once ('includes/dbcon.php');
    $query = " select * from courses ";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body >

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-striped text-center">
                            <tr>
                                <td> Course ID </td>
                                <td> Course code </td>
                                <td> Course  Name </td>
                                <td>Course credits </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $CourseID = $row['sid'];
                                        $Coursecode = $row['course_code'];
                                        $CourseName = $row['course_name'];
                                        $Coursecredits = $row['credits'];
                                        
                                       
                            ?>
                                    <tr>
                                        <td><?php echo $CourseID ?></td>
                                        <td><?php echo $Coursecode ?></td>
                                        <td><?php echo $CourseName ?></td>
                                        <td><?php echo $Coursecredits ?></td>
                                        <td><a href="edit-course.php?GetID=<?php echo $CourseID ?>" class="badge badge-pill badge-info">Edit</a></td>
                                        <td><a href="delete-course.php?Del=<?php echo $CourseID ?>" class="badge badge-pill badge-info">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>