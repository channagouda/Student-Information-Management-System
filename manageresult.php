<?php
session_start();
?>

<?php require_once('header.php'); ?>
<?php 

    require_once ('includes/dbcon.php');
    $query = " select * from result ";
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
<body class="">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-striped text-center">
                            <tr>
                                
                                <td> Student Name </td>
                                <td> Student ID </td>
                                <td> Semester </td>
                                <td> Subject 1 </td>
                                <td> Subject 2 </td>
                                <td> Subject 3 </td>
                                <td> Subject 4 </td>
                                <td> Subject 5 </td>
                                <td> Subject 6 </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                       
                                       $id = $row['sid'];
                                        $studentname = $row['stname'];
                                        $studentID = $row['stusn'];
                                        $semester = $row['sem'] ;
                                        $subject1 = $row['s1tot'];
                                        $subject2 = $row['s2tot'];
                                        $subject3 = $row['s3tot'];
                                        $subject4 = $row['s4tot'];
                                        $subject5 = $row['s5tot'];
                                        $subject6 = $row['s6tot'];
                                       
                            ?>
                                    <tr>
                                        
                                        <td><?php echo $studentname?></td>
                                        <td><?php echo $studentID ?></td>
                                        <td><?php echo $semester ?></td>
                                        <td><?php echo $subject1 ?></td>
                                        <td><?php echo $subject2 ?></td>
                                        <td><?php echo $subject3 ?></td>
                                        <td><?php echo $subject4 ?></td>
                                        <td><?php echo $subject5 ?></td>
                                        <td><?php echo $subject6 ?></td>
                                        <td><a href="editresult.php?GetID=<?php echo $id ?>" class="badge badge-pill badge-info">Edit</a></td>
                                        <td><a href="deleteresult.php?Del=<?php echo $id ?>" class="badge badge-pill badge-info">Delete</a></td>
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