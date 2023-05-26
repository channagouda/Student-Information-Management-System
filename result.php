<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
<script>(function(w, d) { w.CollectId = "61e9b769be19f1762af028a9"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
	<title> Results</title>
	<style type="text/css">
		* {
         padding: 0;
         margin: 0;
         font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open San','Helvetica Neue', sans-serif;

         }

         .header {
         background-color: darkslategray;
         color: white;
         font-size: 20px;
         text-align: center;
         }
         
        
         .clipboard
        {
        background-color: green;
        color: white;
        width: 450px;
        height: 40px;
        }
        .namenusn
        {
        	margin-left: 50px;
        	width: auto;
        }
        table,tr,td,th
        {
        	border-collapse: collapse;
        	border:2px solid black;
        	padding: 20px;
        }
        td
        {
        	font-size: 20px;
        }
	</style>
</head>
<body>

<div>

		<header class="headerWarp" role="banner" style="width: 100%;">
		
			<div class="brandInner" style="width: 100%;">
		
                
			 <h3 align="center"><span style="font-size:16px">Rashtreeya Sikshana Samithi
										Trust</span>
										<img src="images/rv.jpeg" align="left" width="100" height="100" alt=""><br><span style="font-size:26px"><a href="/" title="Home">R V College
											of Engineering </a></span>
											
											<br>
											<span style="font-size:12px">Autonomous Institution affiliated to
										Visvesvaraya Technological University, Belagavi</span>

										
									</h3>
								
										
										
               
										
                            
            </div>
        </header>
        <div
            style="display:inline-flex; float: right; padding: 3px; background-color:#27447E;width: 100%; margin-bottom: 20px;">
            
        </div>

  </div>
  <nav class="navbar navbar-expand-sm bg-light justify-content-end">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="student_home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="findresult.php"> Results</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="aboutus/aboutus.php">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contactus/contact.php">Contact us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="feedback/feedback.php">Feedback</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>
<br>
<center>
   <div class="clipboard">
   <h2 >Student Result Details</h2>
    </div>
</center><br>
    <center>
    <table>
        <tr>
    	<th><h2>Subjects</h2></th>
    	<th><h2>Internal marks</h2></th>
    	<th><h2>External marks</h2></th>
    	<th><h2>Total marks</h2></th>
    	<th><h2>Result</h2></th>
        </tr>
   <?php
   $conn = mysqli_connect("localhost","root","","sms");
   $set = $_POST['search'];
   $sem = $_POST['sem'];
   if($set) {
   $show = "SELECT * FROM result WHERE stusn = '$set' and sem = '$sem' " ;
   $result = mysqli_query($conn,$show);

if (mysqli_num_rows($result)==0) {
echo " No Result Found";
}else{
   while ($row = mysqli_fetch_array($result)) {
    echo "<h3> Name : ".$row['stname']."</h3>";
    echo "<h3> USN  : ".$row['stusn']."</h3>";
     echo "<h3> Sem  : ".$row['sem']."</h3><br>";
    echo "<tr><td>Subject 1</td><td>".$row['s1in']."</td><td>".$row['s1ex']."</td><td>".$row['s1tot']."</td><td>".$row['s1gr']."</td></tr>";
    echo "<tr><td>Subject 2</td><td>".$row['s2in']."</td><td>".$row['s2ex']."</td><td>".$row['s2tot']."</td><td>".$row['s2gr']."</td></tr>";
    echo "<tr><td>Subject 3</td><td>".$row['s3in']."</td><td>".$row['s3ex']."</td><td>".$row['s3tot']."</td><td>".$row['s3gr']."</td></tr>";
    echo "<tr><td>Subject 4</td><td>".$row['s4in']."</td><td>".$row['s4ex']."</td><td>".$row['s4tot']."</td><td>".$row['s4gr']."</td></tr>";
    echo "<tr><td>Subject 5</td><td>".$row['s5in']."</td><td>".$row['s5ex']."</td><td>".$row['s5tot']."</td><td>".$row['s1gr']."</td></tr>";
    echo "<tr><td>Subject 6</td><td>".$row['s6in']."</td><td>".$row['s6ex']."</td><td>".$row['s6tot']."</td><td>".$row['s6gr']."</td></tr>";
   }
}
 }
 
    $conn-> close();
  ?>
    </table>
    <div class="passfail">
    	 <h4>Abbrevations</h4>
    	 <p>
    	 <h4>P -> Pass</h4><h4>F -> Fail</h4>
    	</p>
    </div>
     </center>
</body>
</html>