<?php
session_start();
?>
<?php require_once('header.php'); ?>

<?php 

    require_once ('includes/dbcon.php');
    $query = " select * from department ";
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
                                <td> Dept ID </td>
                                <td> Dept code </td>
                                <td> Dept  Name </td>
                                <td>Dept short </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $DeptID = $row['cid'];
                                        $Deptcode = $row['dept_id'];
                                        $DeptName = $row['dept_name'];
                                        $Deptshort = $row['dept_sname'];
                                        
                                       
                            ?>
                                    <tr>
                                        <td><?php echo $DeptID ?></td>
                                        <td><?php echo $Deptcode ?></td>
                                        <td><?php echo $DeptName ?></td>
                                        <td><?php echo $Deptshort ?></td>
                                        <td><a href="edit-subject.php?GetID=<?php echo $DeptID ?>" class="badge badge-pill badge-info">Edit</a></td>
                                        <td><a href="delete-subject.php?Del=<?php echo $DeptID ?>" class="badge badge-pill badge-info">Delete</a></td>
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