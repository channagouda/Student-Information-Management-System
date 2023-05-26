<?php
session_start();
error_reporting(0);
include('includes/dbcon.php');
include('login-exe.php');
include('login.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <script>(function(w, d) { w.CollectId = "61e9b769be19f1762af028a9"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="">
            <?php require_once('img.html'); ?>
                <div class="row">
 <h1 align="center">Student Information Management System</h1>
                    <div class="col-lg-6 visible-lg-block">

<section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>For Students</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <div class="section-title">
                                                        <p class="sub-title">Student Login </p>
                                                    </div>

                                                    <form action="login.php" method="post">
                              <div class="form-group">
                                  Username:<input type="text" class="form-control" name="user" placeholder=" Enter Username" required>
                              </div>
                            <div class="form-group">
                                  Password:<input type="password" class="form-control" name="password" placeholder="Enter Passoword" required>
                            </div>
                              <div class="form-group">
                                  <input type="submit" name="login" value="LOGIN" class="btn btn-success btn-block text-center" > 
                              </div> 
                            </form>



                                                </div>
                                            </div>
                                            <!-- /.panel -->

                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Admin Login</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <div class="section-title">
                                                        <p class="sub-title">Student Information  Management System</p>
                                                    </div>

                                                    <form action="login-exe.php" method="post">
                              <div class="form-group">
                                  Username:<input type="text" class="form-control" name="user" placeholder=" Enter Username" required>
                              </div>
                            <div class="form-group">
                                  Password:<input type="password" class="form-control" name="password" placeholder="Enter Passoword" required>
                            </div>
                              <div class="form-group">
                                  <input type="submit" name="login" value="LOGIN" class="btn btn-success btn-block text-center" > 
                              </div> 
                            </form>



                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

    </body>
</html>
