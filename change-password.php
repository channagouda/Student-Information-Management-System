
<?php require_once('header.php'); ?>
<?php
session_start();
$_SESSION["userId"] = "1";
$conn = mysqli_connect('localhost','root','','sms') or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from admin WHERE userId='" . $_SESSION["userId"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE admin set password='" . $_POST["newPassword"] . "' WHERE userId='" . $_SESSION["userId"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
$pwd=md5($password);
$qry = "SELECT * FROM student_log WHERE username='$user' AND password='$pwd'";

$run  = mysqli_query($conn, $qry);

$row = mysqli_num_rows($run);
?>
<html>
<head>
<title>Change Password</title>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
    currentPassword.focus();
    document.getElementById("currentPassword");
    output = false;
}
else if(!newPassword.value) {
    newPassword.focus();
    document.getElementById("newPassword");
    output = false;
}
else if(!confirmPassword.value) {
    confirmPassword.focus();
    document.getElementById("confirmPassword");
    output = false;
}
if(newPassword.value != confirmPassword.value) {
    newPassword.value="";
    confirmPassword.value="";
    newPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "not same";
    output = false;
}   
return output;
}
</script>

            <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >

   <br><br>    
        
</head>
<body class="top-navbar-fixed">

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
                            <h3 class="bg-success text-white text-center py-2"> Change Password Form </h3>
                        </div>


    <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        <div class="list-group" align="center">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr>
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password"
                        name="currentPassword" class="form-control" required/><span
                        id="currentPassword" ></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                        class="form-control" required/><span id="newPassword"
                        ></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                    class="form-control" required/><span id="confirmPassword"
                    ></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"
                        value="Submit" class="btn btn-success btn-labeled"></td>
                </tr>
            </table>
        </div>
    </div>
  </div>
</div>  
  </div>
 </div>
</div>

</form>
</section>


</body>
</html>