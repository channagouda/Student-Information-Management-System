<?php 
    $result = "";
    $error  = "";
  if(isset($_POST['submit']))
  {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "vigneshdhev77@gmail.com"; // Your mail
    $mail->Password = '9740698090'; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('vigneshdhev77@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>';
    if(!$mail->send())
    {
      $error = "Something went worng. Please try again.";
    }
    else 
    {
      $result="Thanks\t" .$_POST['name']. " for contacting us.";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--========================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--=========================================================================================-->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/style.css">
	<script>(function(w, d) { w.CollectId = "61e9b769be19f1762af028a9"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>

</head>
<body>
 
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
<nav class="navbar navbar-expand-sm bg-white justify-content-end">
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


	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>
			<form action="" method="post" class="contact1-form validate-form">
				<span class="contact1-form-title">
					 CONTACT FORM
				</span>
				<h6 class="text-center text-success"> <?=$result; ?></h6>
				<h6 class="text-center text-danger"> <?=$error; ?></h6>
				<br>
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button type="submit" name="submit" class="contact1-form-btn">
						<span>
							Send Email
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<!--====================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--====================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--=====================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--=====================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--=========================================================-->
	<script src="js/main.js"></script>

</body>
</html>
