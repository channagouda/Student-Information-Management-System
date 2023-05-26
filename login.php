<?php
    include ('includes/dbcon.php');

    if (isset($_POST['login'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];
        $pwd=md5($password);
        $qry = "SELECT * FROM student_log WHERE username='$user' AND password='$pwd'";
        
        $run  = mysqli_query($conn, $qry);

       $row = mysqli_num_rows($run);

   

        if($row > 0) {
         $data = mysqli_fetch_assoc($run);
                    $id= $data['id'];
                    $_SESSION['uid'] = $id;
                    header('location:student_home.php');

           
        } 
        else { 

            
            
?> 
<script>
        alert('username or passoword invalid');
        window.open('index.php','_self');
    </script>
                 
   

    <?php
                   
                }

}
?>