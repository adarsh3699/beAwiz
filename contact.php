<?php
ob_start();
session_start();
include('dbconfig.php');
include('OTPfunction.php');
if (isset($_SESSION['talentpage']))
	unset($_SESSION['talentpage']);

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Google Metasearch -->
	<meta name="Keywords" content="Help in Maths, Adaptive learning, Learning Maths Online, Maths Test, Maths Worksheets, Teacher Online, Maths Tutor, Self Learn Maths, Math Practice, NCERT Online, Exam Papers, ICSE, CBSE, online maths tutions,personalised learning, practice tests">
    <meta name="Description" content="Be A Wiz offers computer-based online adaptive learning blocks designed to master the concepts and practice to perfection. These blocks adapt student's action to stimulate their minds and incrementally take them to highest levels of conceptual understanding through regular instructions. Learn More!">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106556349-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		
		gtag('config', 'UA-106556349-1');
	</script>
	
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Contact - BeAwiz</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- CSS -->
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel='stylesheet' href='css/style.css'>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script>
	function OTPFunction() {
		var userID = document.getElementById("userid").value;
        var phoneno = /^\d{10}$/;
		let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		
		
		if(((userID.length == 10) && userID.match(phoneno)) || (userID.match(regexEmail))) {
            $.ajax({
            type:'POST',
            url:'sendOTP.php',
            data:'userID='+userID,
            success:function(html){
                $('#attempt').html(html);
                                    }
                            });
					//window.alert ("PIN has been sent");
                     document.getElementById("tid").innerHTML = 'PIN has been sent';
					}
					else
					{
						document.getElementById("userid").value = '';
						document.getElementById("tid").innerHTML = 'Input a 10 digit mobile number or a valid email ID';
						//window.alert ("Input a 10 digit number or a valid email Address");
					}

	$("button").submit(function( event ) {
		event.preventDefault();
		});
     
	}
   </script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">
             <img src="assets/images/logo.png"  alt="logo">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
			  <!-- <li><a href="talentprogram2021"><strong>Tatent Program 2021</strong></a></li> -->
              <li><a href="home">Home</a></li>
              <li><a href="about-us">About Us</a></li>
              <li><a href="its-for-you">Its For You</a></li>
              <li><a href="pricing">Pricing</a></li>
              <li><a href="learning-portfolio">Learning Portfolio</a></li>
              <li class="active-nav"><a href="contact">Contact</a></li>
              <!-- <li><a href="#" data-toggle="modal" data-target="#myModal"  class="nav-log-btn">Login</a></li> -->
			  
			    <?php
					if(!isset($_SESSION['uname'])){ 
			   ?>
			   
              <div class="dropdown">
                <button style="width: 100%;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Login
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#" data-toggle="modal" data-target="#myModal">Student Login</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal">Teacher Login</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#myModal">Parent Login</a></li>
                </ul>
              </div>
			  
			   <?php
			   }
			   else 
			   {
			   	$name = $_SESSION['uname'];
				$check = mysqli_query($conn, 'SELECT * FROM users WHERE uname = "'.$name.'"');
				$arr = mysqli_fetch_array($check);
				$uid = $arr['id'];
				
			   ?>
              <div class="dropdown dropdown-myaccount">
                <button style="width: 100%;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">My Account
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="dashboard/dashboard">My Account</a></li>
                  <li><a href="logout">Logout</a></li>
                </ul>
              </div>
			   <?php
				}
			   ?>
            </ul>
       </div>
    </div>
</nav>

<!-- banner -->
<div class="banner">
	<div class="floating">
        <h1>Contact Us</h1>
    </div>	
</div>

<!-- Page Contents -->
<div class="home-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 home-cont-addr">
               <div class="col-md-6 home-contact-info-add">
                        <h1>Address</h1>
                        <p>Be A Wiz Education</p> 
                        <p>JP Nagar 6th Phase</p> 
                        <p>Bangalore</p>   
                        <p>Pin : 560078</p>
                </div>
                <div class="col-md-6 home-contact-info-info">
                        <h3 style="margin-bottom: 20px; margin-top: 28px;"> Phone Number</h3>         
                        <p><i class="fas fa-phone"></i> +91-8943600513</p>  
                        <h3 style="margin-bottom: 20px;">Email</h3>
                        <p><i class="fas fa-envelope"></i> contact@beawiz.com </p>    
                </div>
            </div>
            <div class="col-md-6 home-contact-form">
                <form method="post">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text"  name="fullname">
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="col-md-6">
                        <label>Phone Number</label>
                        <input type="text" name="mobile" >
                        <label>Subject</label>
                        <input type="text" name="subject">
                    </div>
                    <div class="col-md-12">
                        <label>Message</label>
                        <textarea name="message" cols="30" rows="10"></textarea>
                       <!-- <div class="home-contact-submit-btn">
                           <a href="#" class="home-contact-btn">Submit</a>
                        </div> -->
					</div>
					
					<div>
						<input 
							type="submit" 
							class="home-contact-submit-btn home-contact-btn g-recaptcha" 
							id="sub-btn" 
							name="submit" 
							value="Send Message"
							data-sitekey="6LfjWBsgAAAAAOJ-lPNYr1OSSe0TZeKgurskKXy1" 
							data-callback='onSubmit' 
							data-action='submit'
						>
                    </div>
                </form>
	
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<div id="footer"></div>

<!-- Login Modal -->
<div class="container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                    <div class="modal-brand-logo">
                        <img src="assets/images/logo.png" style="width: 30%;">
                    </div>
                </div>
				
                <div class="modal-body">
				<form class="form" role="form" method="POST" id="login-nav">
						<div class="form-group">
						<label class="sr-only" for="userid">Email or Phone Number</label>
						<input type="text" class="form-control" id="userid" name="userid" placeholder="Email or Phone Number" required>
						</div>
						<!-- button to add OTP -->
						<div>
						<button type="button" form="login-nav" onClick="OTPFunction()" class="button" id="OTPlogin">Generate OTP</button>
						</div>
						<br>
						or
						<div class="form-group">
						<label class="sr-only" for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <div class="help-block text-right"><a href="forgotpassword">Forgot the password ?</a></div>
						</div>
						<div class="form-group sign-button-sec">
						<input type="submit" class="sign-in-btn" id="signin" name="signin" value="Sign In"></input>
						</div>
				</form>
				
				<?php
						if(isset($_POST['signin'])){
						$userid = trim($_POST['userid']);
						$passin = trim($_POST['password']);
						$pass = md5($_POST['password']);
						//$query = mysqli_query($conn, 'SELECT * FROM users WHERE uname = "'.$userid.'" AND password = "'.$pass.'"');
						$numrowflag = false;
						$stmt = $conn->prepare("SELECT * FROM users where uname =  ? AND password = ?");
						$stmt->bind_param("ss", $userid,$pass);
						$stmt->execute();
						$res_ = $stmt->get_result();
						if($res_->num_rows > 0)
							$numrowflag = true;
						$stmt->close();				
						//if((mysqli_num_rows($query)< 1) && !isset($_SESSION['OTP']))
						if(($numrowflag==false) && !isset($_SESSION['OTP']))
						{
								$uid = 0;
								//$query2 = mysqli_query($conn, 'SELECT * FROM profile WHERE phone_number = "'.$userid.'"');
								$stmt = $conn->prepare("SELECT * FROM profile WHERE phone_number =  ?");
								$userid1 = intval($userid);
								$stmt->bind_param("i", $userid1);
								$stmt->execute();
								$res_ = $stmt->get_result();
								if($res_->num_rows > 0 && $userid1 != 0)
								{
								//$row = mysqli_fetch_array($query2);
								$numrowflag = true;
								while($row = $res_->fetch_assoc()) 
								{
								$uid = $row['userid'];
								}
								$query3 = mysqli_query($conn, 'SELECT * FROM users WHERE id = "'.$uid.'"');
								if(mysqli_num_rows($query3)> 0) 
								{
									$row = mysqli_fetch_array($query3);
									$userid = $row['uname'];
								}
								mysqli_free_result($query3);
								unset ($_SESSION['OTP']); 
								unset ($_SESSION['userexist']);
								}
								$stmt->close();	
						}
						//else if(mysqli_num_rows($query)>= 1)
						else if ($numrowflag == true)
						{ 
								unset ($_SESSION['OTP']); 
								unset ($_SESSION['userexist']);
						}
								//mysqli_free_result($query);	
								
								if ($numrowflag==true && !isset($_SESSION['OTP']))
								{
							    $query = mysqli_query($conn, 'SELECT * FROM users WHERE uname = "'.$userid.'" AND password = "'.$pass.'"');
								$result = mysqli_fetch_row($query);
									if($result>0)
									{
										$get = mysqli_query($conn, 'SELECT * FROM users WHERE uname = "'.$userid.'"');
										$row = mysqli_fetch_array($get);
										$_SESSION['started'] = true;
										$_SESSION['uname'] = $row['uname'];
										$_SESSION['id'] = $row['id'];
										
										$res = mysqli_query($conn, 'SELECT * FROM profile WHERE userid = "'.$_SESSION['id'].'"');
										if(mysqli_num_rows($res) >= 1)
										{
											$rowprofile = mysqli_fetch_array($res);
											if (is_numeric($rowprofile['grade']) != false)
											{
											mysqli_free_result($res);
											mysqli_free_result($get);
											header('Location: dashboard/dashboard');
											}
											else
											{
											mysqli_free_result($res);
											mysqli_free_result($get);	
											mysqli_query($conn, 'DELETE FROM users WHERE id = "'.$_SESSION['id'].'"');
											mysqli_query($conn, 'DELETE FROM profile WHERE userid = "'.$_SESSION['id'].'"');
											mysqli_query($conn, 'DELETE FROM enrollment WHERE user_id = "'.$_SESSION['id'].'"');
											$error = 'Invalid Profile. Please recreate a profile';
											echo '<script type="text/javascript">alert("'.$error.'");</script>';
											}
												
										}
										else
										{
											mysqli_free_result($res);
											mysqli_free_result($get);	
											mysqli_query($conn, 'DELETE FROM users WHERE id = "'.$_SESSION['id'].'"');
											mysqli_query($conn, 'DELETE FROM profile WHERE userid = "'.$_SESSION['id'].'"');
											mysqli_query($conn, 'DELETE FROM enrollment WHERE user_id = "'.$_SESSION['id'].'"');
											$error = 'Invalid Profile. Please recreate a profile';
											echo '<script type="text/javascript">alert("'.$error.'");</script>';
											
										}	
									}
									else
									{
										$error = 'Invalid Username/Password';
										echo '<script type="text/javascript">alert("'.$error.'");</script>';
										//echo '<script type="text/javascript">document.getElementById("tid").innerHTML = "Invalid //Username/Password";</script>';
									}
									mysqli_free_result($query);	
									unset ($_SESSION['OTP']); 
									unset ($_SESSION['userexist']);
								}
								else if ($numrowflag == false && !isset($_SESSION['OTP']))
								{
									unset ($_SESSION['OTP']); 
									unset ($_SESSION['userexist']);
									$error = 'Invalid Username/Password';
									echo '<script type="text/javascript">alert("'.$error.'");</script>';
									
								}
								else if (isset($_SESSION['OTP']) && ($_SESSION['userexist'] == true))
								{
										$intercode = 91;
										$intuserid = intval($userid);
										$validemailID = false;
										$validphone = true;
										if (filter_var($userid, FILTER_VALIDATE_EMAIL)) 
										{
											$validemailID = true;
											$validphone = false;
										}
										else if (preg_match('/^[0-9]{10}+$/',$userid) != true && $validemailID == false)
										{
										$error = 'Invalid Phone Number or email ID';
										$validphone = false;
										echo '<script type="text/javascript">alert("'.$error.'");</script>';
										}
										else if (preg_match('/^[0-9]{4}+$/',$passin) != true)
										{
										$error = 'Pin should be 4 digits';
										$validphone = false;
										$validemailID = false;
										echo '<script type="text/javascript">alert("'.$error.'");</script>';									
										}
										
										if ($validphone == true)
										{
										$mobilenum = (int)($intercode.$intuserid);
										$response = verifyOTP ($mobilenum, (int)($passin));
										$obj = json_decode($response);
										$reqid =  $obj->{'request_id'}; 
										$type_ = $obj->{'type'}; 
										if ($type_ == 'success')
										{
											$query1 = mysqli_query($conn, 'SELECT * FROM profile WHERE phone_number = "'.$userid.'"');
											$row1 = mysqli_fetch_array($query1);
											$uid = $row1['userid'];
											$_SESSION['id'] = $uid;
											mysqli_free_result($query1);
											
											$query2 = mysqli_query($conn, 'SELECT * FROM users WHERE id = "'.$uid.'"'); 
											$uname = null;
											if(mysqli_num_rows($query2)> 0) 
											{
											$row2 = mysqli_fetch_array($query2);
											$_SESSION['uname'] = $row2['uname'];
											}
											mysqli_free_result($query2);
											$_SESSION['started'] = true;
											
											unset ($_SESSION['OTP']);
											unset ($_SESSION['userexist']);
											header('Location: dashboard/dashboard');
										}
										else
										{ 
										$error = 'Invalid OTP';
										echo '<script type="text/javascript">alert("'.$error.'");</script>';
										}
										}
										else if ($validemailID == true)
										{
										$response = verifyemailOTP($userid,	(int)($passin));
										if ($response == true)
										{
											$query1 = mysqli_query($conn, 'SELECT * FROM profile WHERE emailid = "'.$userid.'"');
											$row1 = mysqli_fetch_array($query1);
											$uid = $row1['userid'];
											$_SESSION['id'] = $uid;
											mysqli_free_result($query1);
											
											$query2 = mysqli_query($conn, 'SELECT * FROM users WHERE id = "'.$uid.'"'); 
											$uname = null;
											if(mysqli_num_rows($query2)> 0) 
											{
											$row2 = mysqli_fetch_array($query2);
											$_SESSION['uname'] = $row2['uname'];
											}
											mysqli_free_result($query2);
											$_SESSION['started'] = true;
											
											unset ($_SESSION['OTP']);
											unset ($_SESSION['userexist']);
											header('Location: dashboard/dashboard');		
										}
										else
										{ 
										$error = 'Invalid OTP';
										echo '<script type="text/javascript">alert("'.$error.'");</script>';
										}			
										}
								}
								else if (isset($_SESSION['OTP']) && ($_SESSION['userexist'] == false))
								{
										$intercode = 91;
										$intuserid = intval($userid);
										$validemailID = false;
										$validphone = true;
										if (filter_var($userid, FILTER_VALIDATE_EMAIL)) 
										{
											$validemailID = true;
											$validphone = false;
										}
										elseif (preg_match('/^[0-9]{10}+$/',$userid) != true)
										{
										$error = 'Invalid Phone Number';
										$validphone = false;
										echo '<script type="text/javascript">alert("'.$error.'");</script>';
										}
										elseif (preg_match('/^[0-9]{4}+$/',$passin) != true)
										{
										$error = 'Pin should be 4 digits';
										$validphone = false;
										$validemailID = false;
										echo '<script type="text/javascript">alert("'.$error.'");</script>';									
										}
										
										if ($validphone == true)
										{
										$mobilenum = (int)($intercode.$intuserid);
										$response = verifyOTP ($mobilenum, (int)($passin));
										$obj = json_decode($response);
										$reqid =  $obj->{'request_id'}; 
										$type_ = $obj->{'type'}; 
										if ($type_ == 'success')
										{
											unset ($_SESSION['OTP']);
											unset ($_SESSION['userexist']);
											header('Location: sign-up');
										}
										else
										{ 
										$error = 'Invalid OTP';
										echo '<script type="text/javascript">alert("'.$error.'");</script>';
										}
									
										}
										else if ($validemailID == true)
										{
											$response = verifyemailOTP($userid,	(int)($passin));
											if ($response == 1)
											{
												unset ($_SESSION['OTP']);
												unset ($_SESSION['userexist']);
												header('Location: sign-up');
											}
											else
											{ 
												$error = 'Invalid OTP';
												echo '<script type="text/javascript">alert("'.$error.'");</script>';
											}	
										}
								
								} 
						}
				?>
								 
                        <p class="text-center">or</p>
                        <div class="google-button-sec">
                            <button class="sign-google">
                                <div class="goo-img">
									<a href="social?provider=Google">
                                    <img src="assets/images/google-img.jpg" alt="">
                                    <font color="FFFFFF">Login with Google</font>
									</a>
                                </div>
                            </button>
                        </div>
                    </div>
               
			    <div class="modal-body" class="text-center" id="tid">
					</div>
					
                <div class="modal-footer">
                    <p class="text-center">New here ? <a href="sign-up">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
	
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="footer.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
</body>
</html>