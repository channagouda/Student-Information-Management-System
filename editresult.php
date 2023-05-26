<?php require_once('header.php'); ?>
<?php 

    require_once ('includes/dbcon.php');
    $id = $_GET['GetID'];
    $query = " select * from result where sid='".$id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        
        $id = $row['sid'];
        $studentname = $row['stname'];
       $studentID = $row['stusn'];
       $semester = $row['sem'];
       $subject1in = $row['s1in'];
       $subject1ex = $row['s1ex'];
       $subject2in = $row['s2in'];
       $subject2ex = $row['s2ex'];
       $subject3in = $row['s3in'];
       $subject3ex = $row['s3ex'];
       $subject4in= $row['s4in'];
       $subject4ex = $row['s4ex'];
       $subject5in = $row['s5in'];
       $subject5ex = $row['s5ex'];
       $subject6in = $row['s6in'];
       $subject6ex = $row['s6ex'];
       $s1tol=$row['s1tot'];
       $s2tol=$row['s2tot'];
       $s3tol=$row['s3tot'];
       $s4tol=$row['s4tot'];
       $s5tol=$row['s5tot'];
       $s6tol=$row['s6tot'];
       $s1gr=$row['s1gr'];
       $s2gr=$row['s2gr'];
       $s3gr=$row['s3gr'];
       $s4gr=$row['s4gr'];
       $s5gr=$row['s5gr'];
       $s6gr=$row['s6gr'];

    }

?>
<!DOCTYPE html>
<html lang="en">
<style>
 * {
 padding: 0;
 margin: 0;
 font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'HelveticaNeue', sans-serif;
 }
   .header {
   background-color: darkslategray;
   color: white;
   font-size: 20px;
   text-align: center;
   }
   .adminpanel
   {
       background-color: green;
       height: 38px;
       margin-left: 15px;
       font-size: 19px;
       text-align: center;
       width: 350px;
       color: white;
   }
   
   .container-element
   {
       margin-left: 15px;
       margin-right: 15px;
   }
   #usn
   {
       width: 300px;
       height: 30px;
       font-size: 15px;
   }
   #studentname
   {
   width: 300px;
   height: 30px;
   font-size: 15px;
   }
   .name-container
   {
       margin-top: -60px;
       margin-left: 355px;
   }
    .name-containr
   {
       margin-top: -60px;
       margin-left: 650px;
   }
   .marks
   {
    width: 250px;
    height: 25px;
    font-size: 12px;
   }
   .gradenotice
   {
       border: 2px solid red;
       border-style: dashed;
       width: 450px;
       height: 30px;
   }
   .btn
   {
       padding: 15px;
       font-size: 15px;
       border: none;
       outline: none;
       cursor: pointer;
       background-color: green;
       color: white;
   }
 </style>
 <script>
  
         function verify(subject) {
            var subjectin = document.getElementById(`${subject}in`).value;
            var subjectex = document.getElementById(`${subject}ex`).value;
            var subjectres = parseInt(subjectin) + parseInt(subjectex);
            if (!isNaN(subjectres)) {
                document.getElementById(`${subject}to`).value = subjectres
            }
            if (subjectin < 12 || subjectex < 28) {
                document.getElementById(`${subject}gr`).value = "F";
            }
            else {
                document.getElementById(`${subject}gr`).value = "P";
            }
        }
 </script>
<body>
   <form action="update-result.php?ID=<?php echo $id ?>" method="post"> <br>
   
      <div class="container-element">
          <h6 style="color: red;">Please fill the details carefully.</h6><br>
          <h5>Enter Student's USN</h5>
          <input type="text" name="stuusn" id="studentID" autocomplete="off" maxlength="10" value="<?php echo $studentID ?>">
           <div class="name-container">
          <h5>Enter Student's Semester</h5>
          <input type="number" name="sem" id="sem" value="<?php echo  $semester ?>" >
          </div>
          <div class="name-containr">
          <h5>Enter Student's Name</h5>
          <input type="text" name="stuname" id="studentname" value="<?php echo $studentname ?>" >
          </div><br>
          <div class="gradenotice">
            <center>
           <p><b>Note:</b>Total marks and Result will be calculated automatically.</p>
         </center>
          </div><br>
           <h4>Subject 1</h4>
           <p>
           <input type="number" size="2" name="sub1in" id="subject1in" class="marks" onkeyup="verify('subject1')" placeholder="Internal Marks" value="<?php echo $subject1in ?>" >
           <input type="number" size="2" name="sub1ex" id="subject1ex" class="marks" onkeyup="verify('subject1')" placeholder="External Marks" value="<?php echo $subject1ex ?>">
           <input type="number" id="subject1to" name="sub1tot" class="marks"  placeholder="Total Marks" value="<?php echo $s1tol ?>">
           <input type="text" name="sub1gr" id="subject1gr" class="marks"  placeholder="Result" value="<?php echo $s1gr ?>">
           </p><br><hr><br>
           <h4>Subject 2</h4>
           <p>
               <input type="number" size="2" name="sub2in" id="subject2in" class="marks" onkeyup="verify('subject2')" placeholder="Internal Marks" value="<?php echo $subject2in ?>">
               <input type="number" size="2" name="sub2ex" id="subject2ex" class="marks" onkeyup="verify('subject2')" placeholder="External Marks"value="<?php echo $subject2ex ?>">
               <input type="number" id="subject2to" name="sub2tot" class="marks" placeholder="Total Marks" value="<?php echo $s2tol ?>">
               <input type="text" id="subject2gr" name="sub2gr" class="marks" placeholder="Result" value="<?php echo $s2gr ?>">
           </p><br>
           <hr><br>
           <h4>Subject 3</h4>
           <p>
               <input type="number" size="2" name="sub3in" id="subject3in" class="marks" onkeyup="verify('subject3')" placeholder="Internal Marks" value="<?php echo $subject3in ?>">
               <input type="number" size="2" id="subject3ex" name="sub3ex" class="marks" onkeyup="verify('subject3')" placeholder="External Marks" value="<?php echo $subject3ex ?>">
               <input type="number" id="subject3to" name="sub3tot" class="marks" placeholder="Total Marks" value="<?php echo $s3tol ?>">
               <input type="text" id="subject3gr" name="sub3gr" class="marks" placeholder="Result" value="<?php echo $s3gr ?>">
           </p><br>
           <hr><br>
           <h4>Subject 4</h4>
           <p>
               <input type="number" size="2" id="subject4in" name="sub4in" class="marks" onkeyup="verify('subject4')" placeholder="Internal Marks" value="<?php echo $subject4in ?>">
               <input type="number" size="2" id="subject4ex" name="sub4ex" class="marks" onkeyup="verify('subject4')" placeholder="External Marks" value="<?php echo $subject4ex ?>">
               <input type="number" id="subject4to" name="sub4tot" class="marks" placeholder="Total Marks" value="<?php echo $s4tol ?>">
               <input type="text" id="subject4gr" name="sub4gr" class="marks" placeholder="Result" value="<?php echo $s4gr ?>">
           </p><br>
           <hr><br>
           <h4>Subject 5</h4>
           <p>
               <input type="number" size="2" id="subject5in" name="sub5in" class="marks" onkeyup="verify('subject5')" placeholder="Internal Marks"value="<?php echo $subject5in ?>">
               <input type="number" size="2" id="subject5ex" name="sub5ex" class="marks" onkeyup="verify('subject5')" placeholder="External Marks" value="<?php echo $subject5ex ?>">
               <input type="number" id="subject5to" class="marks" name="sub5tot" placeholder="Total Marks" value="<?php echo $s5tol ?>">
               <input type="text" id="subject5gr" name="sub5gr" class="marks" placeholder="Result" value="<?php echo $s5gr ?>">
           </p><br>
           <hr><br>
           <h4>Subject 6</h4>
           <p>
               <input type="number" size="2" id="subject6in" name="sub6in" class="marks" onkeyup="verify('subject6')" placeholder="Internal Marks" value="<?php echo $subject6in ?>">
               <input type="number" size="2" id="subject6ex" name="sub6ex" class="marks" onkeyup="verify('subject6')" placeholder="External Marks" value="<?php echo $subject6ex ?>">
               <input type="number" id="subject6to" class="marks" name="sub6tot" placeholder="Total Marks" value="<?php echo $s6tol ?>">
               <input type="text" id="subject6gr" class="marks" name="sub6gr" placeholder="Result" value="<?php echo $s6gr ?>">
           </p><br>
           <input type="checkbox" id="check" required="">I have entered the details correctly and i am responsible for any mistake in the entered data.
      </div><br>
      <center>
         <button class="btn btn-primary" name="update">Update</button>
      </center>
   </div>
 </form>
</body>
</html>