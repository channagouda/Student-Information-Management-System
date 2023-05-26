<?php require_once('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
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

  <form  method="post" action="action.php">

   <div class="container">
      <div class="container-element"> <br>
          <h6 style="color: red;">Please fill the details carefully.</h6><br>
          <h5>Enter Student's USN</h5>
          <input type="text" name="stuusn" id="usn" autocomplete="off" maxlength="10" >
           <div class="name-container">
          <h5>Enter Student's Semester</h5>
          <input type="number" name="sem" id="sem" >
          </div>
          <div class="name-containr">
          <h5>Enter Student's Name</h5>
          <input type="text" name="stuname" id="studentname" >
          </div><br>
          <div class="gradenotice">
            <center>
           <p><b>Note:</b>Total marks and Result will be calculated automatically.</p>
         </center>
          </div><br>
           <h4>Subject 1</h4>
           <p>
           <input type="number" size="2" name="sub1in" id="subject1in" class="marks" onkeyup="verify('subject1')" placeholder="Internal Marks"  >
           <input type="number" size="2" name="sub1ex" id="subject1ex" class="marks" onkeyup="verify('subject1')" placeholder="External Marks" >
           <input type="number" id="subject1to" name="sub1tot" class="marks"  placeholder="Total Marks" >
           <input type="text" name="sub1gr" id="subject1gr" class="marks"  placeholder="Result" >
           </p><br><hr><br>
           <h4>Subject 2</h4>
           <p>
               <input type="number" size="2" name="sub2in" id="subject2in" class="marks" onkeyup="verify('subject2')" placeholder="Internal Marks" >
               <input type="number" size="2" name="sub2ex" id="subject2ex" class="marks" onkeyup="verify('subject2')" placeholder="External Marks">
               <input type="number" id="subject2to" name="sub2tot" class="marks" placeholder="Total Marks" >
               <input type="text" id="subject2gr" name="sub2gr" class="marks" placeholder="Result" >
           </p><br>
           <hr><br>
           <h4>Subject 3</h4>
           <p>
               <input type="number" size="2" name="sub3in" id="subject3in" class="marks" onkeyup="verify('subject3')" placeholder="Internal Marks" >
               <input type="number" size="2" id="subject3ex" name="sub3ex" class="marks" onkeyup="verify('subject3')" placeholder="External Marks" >
               <input type="number" id="subject3to" name="sub3tot" class="marks" placeholder="Total Marks" >
               <input type="text" id="subject3gr" name="sub3gr" class="marks" placeholder="Result" >
           </p><br>
           <hr><br>
           <h4>Subject 4</h4>
           <p>
               <input type="number" size="2" id="subject4in" name="sub4in" class="marks" onkeyup="verify('subject4')" placeholder="Internal Marks" >
               <input type="number" size="2" id="subject4ex" name="sub4ex" class="marks" onkeyup="verify('subject4')" placeholder="External Marks" >
               <input type="number" id="subject4to" name="sub4tot" class="marks" placeholder="Total Marks" >
               <input type="text" id="subject4gr" name="sub4gr" class="marks" placeholder="Result" >
           </p><br>
           <hr><br>
           <h4>Subject 5</h4>
           <p>
               <input type="number" size="2" id="subject5in" name="sub5in" class="marks" onkeyup="verify('subject5')" placeholder="Internal Marks">
               <input type="number" size="2" id="subject5ex" name="sub5ex" class="marks" onkeyup="verify('subject5')" placeholder="External Marks" >
               <input type="number" id="subject5to" class="marks" name="sub5tot" placeholder="Total Marks" >
               <input type="text" id="subject5gr" name="sub5gr" class="marks" placeholder="Result" >
           </p><br>
           <hr><br>
           <h4>Subject 6</h4>
           <p>
               <input type="number" size="2" id="subject6in" name="sub6in" class="marks" onkeyup="verify('subject6')" placeholder="Internal Marks" >
               <input type="number" size="2" id="subject6ex" name="sub6ex" class="marks" onkeyup="verify('subject6')" placeholder="External Marks" >
               <input type="number" id="subject6to" class="marks" name="sub6tot" placeholder="Total Marks" >
               <input type="text" id="subject6gr" class="marks" name="sub6gr" placeholder="Result" >
           </p><br>
           <input type="checkbox" id="check" required="">I have entered the details correctly and i am responsible for any mistake in the entered data.
      </div><br>
      <center>
          <input type="submit" value="Submit" class="btn">
      </center>
   </div>
 </form>
</body>
</html>
         
      