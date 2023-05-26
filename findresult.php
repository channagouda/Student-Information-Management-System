<!DOCTYPE html>
<html lang="en">
<head>
    <title>Results</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
    <script>(function(w, d) { w.CollectId = "61e9b769be19f1762af028a9"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
    <style>
         * {
         padding: 0;
         margin: 0;
         font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans',
         'Helvetica Neue', sans-serif;

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
     #studentusn
     {
     width: 300px;
     height: 30px;
     font-size: 15px;
     }
      .container {
      border: 4px solid lightgray;
      width: 500px;
      margin-top: 50px;
      height: 500px;
      }
    #btn 
    {
    padding: 15px;
    font-size: 15px;
    border: none;
    outline: none;
    cursor: pointer;
    background-color: green;
    color: white;
    }
    #notice
    {
        border: 3px solid red;
        border-style: dashed;
        height: 80px;
        width: 400px;
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



    <form method="POST" action="result.php" > 
    <br> <br>
    <center>
    <div class="container">  <br>
   <div class="clipboard">
   <h2>School Result Management System</h2>
    </div><br>
     <h5>Enter your USN</h5><br>
     <input type="text" id="studentusn" name="search" minlength="10" maxlength="10" required="required"><br><br>
     <h5>Enter your Semester</h5><br>
     <input type="number" id="sem" name="sem" required="required"><br><br>
     <input type="submit" name="submit" id="btn" /><br><br>
     <div id="notice">
         <p style="font-size: 18px;"><b>Note</b> : USN format should be 10 Digit,if there is any problems in querying please feedback </p> <br><br><br>
<br><br><br>
     </div>
    
   
       
    </div>
    </center>
</form>
</body>
</html>