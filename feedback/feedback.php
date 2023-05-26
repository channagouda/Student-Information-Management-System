
<!DOCTYPE html>
<html>
<head>
<title>FeedbacK Engine</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- //custom-theme -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" >
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<script>(function(w, d) { w.CollectId = "61e9b769be19f1762af028a9"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
</head>

<body class="agileits_w3layouts">

<div>

		<header class="headerWarp" role="banner" style="width: 100%;">
		
			<div class="brandInner" style="width: 100%;">
		
                
			 <h3 align="center"><span style="font-size:16px">Rashtreeya Sikshana Samithi
										Trust</span>
										<img src="../images/rv.jpeg" align="left" width="100" height="100" alt=""><br><span style="font-size:26px"><a href="/" title="Home">R V College
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
  
<nav class="navbar navbar-expand-sm bg-black justify-content-end">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../student_home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../findresult.php"> Results</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../aboutus/aboutus.php">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../contactus/contact.php">Contact us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../feedback/feedback.php">Feedback</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../logout.php">Logout</a>
    </li>
  </ul>
</nav>



    <h1 class="agile_head text-center">Feedback</h1>
    <div class="w3layouts_main wrap">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>

	    	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="agile_form" enctype="multipart/form-data">
		  <h2>How satisfied were you with our Service?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="excellent" id="excellent" required> 
				 	  <label for="excellent">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="good" id="good"> 
					  <label for="good"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" value="neutral" id="neutral">
					 <label for="neutral">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view" value="poor" id="poor"> 
					  <label for="poor">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="comments" required=""></textarea>
			<input type="text" placeholder="Your Name(opt)" name="name"  />
			<input type="email" placeholder="Your Email (opt)" name="email"/>
			<input type="text" placeholder="Your Num (opt)" name="num"  /><br>
			<center><input type="submit" value="Submit " name="submit" class="agileinfo" /></center>
	  </form>
	</div>
	<div class="agileits_copyright text-center">
			<p>© 2019 </p>
	</div>
</body>
</html>
s

<?php 

    if (isset($_POST['submit'])) {
        if (!empty($_POST['view']) && !empty($_POST['comments'])) 
        {
        
            include ('../includes/dbcon.php');
            $feedback=$_POST['view'];
            $name=$_POST['name'];
            $suggestions=$_POST['comments'];
            $email=$_POST['email'];
            $phone=$_POST['num'];
           

            $sql = "INSERT INTO `feedback`( `name`, `email`,`phone`,`feedback`,`suggestions`) VALUES ('$name','$email','$phone','$feedback','$suggestions')";
            $run = mysqli_query($conn,$sql);

            if ($run == true) {
                
                ?>
                <script>
                    alert("Thank You..! Your Feedback is Valuable to Us");
                </script>
                <?php
            } else {
                echo "Error : ".$sql."<br>". mysqli_error($conn); 
            }
        } else {
                ?>
                <script>
                    alert("Something went wrong ");
                </script>
                <?php
        }


    }

 ?>




