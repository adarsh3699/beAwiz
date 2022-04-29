<?php
ob_start();
session_start();
include('dbconfig.php');
include('OTPfunction.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Google SignIn and Google Search metaname-->
	<meta name="google-site-verification" content="M-I4B9bVO5aGPhtqL-RxaqgF5ORb6wceO7nQ-HiBOwM" />
	<title>Integrating Mood and Learning</title>
	<meta name="Keywords" content="Help in Maths, Adaptive learning, Learning Maths Online, Maths Test, Maths Worksheets, Teacher Online, Maths Tutor, Self Learn Maths, Math Practice, NCERT Online, Exam Papers, ICSE, CBSE, online maths tutions,personalised learning, practice tests">
    <meta name="Description" content="Be A Wiz is a learning tool that uses the Socratic method of learning to take the student incrementally to the highest level of understanding">
	<meta property="og:title" content="Adaptive Learning Blocks" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://beawiz.com/home" />
	<meta property="og:image" content="https://beawiz.com/images/hometestbanner.jpg" />
	
	<!-- structured data -->
	<script type="application/ld+json">
	{
	"@context": "https://schema.org/",
	"@type": "WebSite",
	"name": "Be A Wiz Education",
	"url": "https://beawiz.com",
	"address": "Bangalore, India",
    "sameAs": [
      "https://www.facebook.com/beawiz",
      "https://twitter.com/beAwiz2017",
      "https://www.linkedin.com/company/beawizeducation/",
	  "https://www.instagram.com/beawiz2017/"
    ],
	"potentialAction": {
    "@type": "SearchAction",
    "target": "https://beawiz.com/home{search_term_string}",
    "query-input": "required name=search_term_string"
					}
	}
	</script>
	
	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="856532918346-vmk7j58b2pnrg3rr97a8tmn1262dchej.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
	<!-- Google SignIn and search meta name ends -->
	
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.png">
	<link rel="canonical" href="https://beawiz.com/home"/>
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- CSS -->
    <link rel='stylesheet' href='bootstrap.css'>
    <link rel='stylesheet' href='style4.css'>
    <link rel='stylesheet' href='assets/css/font-awesome.css'>
	
	<!-- Facebook Pixel Code 
	<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '516592038738971');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=516592038738971&ev=PageView&noscript=1"
   /></noscript>
   -- End Facebook Pixel Code -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script> -->
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
             <img src="logo.png"  alt="Learning Ladder">
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
              <li><a href="contact">Contact</a></li>
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

<!-- home banner -->
<div class="main-home-banner" >
    <div class="container">
        <div class="row">
            <div class="banner-content">
                <div class="banner-content-head">
                    <h1>Integrating Learning with Emotional Preparedness</h1>
                </div>
                <div class="banner-content-content">
                    <p style="font-size: 18px;"><span style="background-color: #2572b7"></span></p> 
                </div> 
                    <!-- <a href="#" data-toggle="modal" data-target="#myModal" class="btn-banner">Get Your Free Analysis Today</a> -->
            </div>
        </div>
    </div>
</div>

<!-- Content Starts  -->
<div class="section-solutions">
    <div class="container">
        <div class="row">
            <div class="sol-content-main">
                <div class="col-md-6">
                    <div class="sol-cont-head">
                        <h3>A unique learning experience to help you climb the ladder of success</h3>
                    </div>
                    <div class="underline"></div>
                    <div class="sol-cont-cont">
                        <p>Become a Math Wiz For Class 6, Class 7, Class 8</p>
                    </div>
                    <div class="solutions-button-sec">
                        <a href="get-started" class="get-sol-btn">How it Works</a>
                        <a data-toggle="modal" data-target="#myModal" class="get-sol-btn">Get Started for Free</a>
                    </div>
                </div>
            </div>
            <div class="sol-box-points">
                <div class="col-md-6">
                    <div class="col-md-6 sol-box-1">
                        <div class="sol-box-ico">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div class="sol-box-cont">
                            <p>Build Confidence</p>
                        </div>
                    </div>
                    <div class="col-md-6 sol-box-1">
                        <div class="sol-box-ico">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <div class="sol-box-cont">
                            <p>Faster Learning</p>
                        </div>
                    </div>
                    <div class="col-md-6 sol-box-1">
                        <div class="sol-box-ico">
                           <!--  <i class="fas fa-user-graduate"></i> -->
						   <i class="fas fa-running"></i>
                        </div>
                        <div class="sol-box-cont">
                            <p>Develop Resilience</p>
                        </div>
                    </div>
                    <div class="col-md-6 sol-box-1">
                        <div class="sol-box-ico">
                            <i class="fas fa-portrait"></i>
                        </div>
                        <div class="sol-box-cont">
                            <p>Create Self Awareness</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- video Section -->
<div class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 video-section">
                <iframe class="youtube-video-iframe" src="https://www.youtube.com/embed/sPqsNof8UOs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
            </div>
            <div class="col-md-6 video-cont">
                <h3>Converging Mood Index & Screen Wellness with Learning</h3>
                <a href="its-for-you" class="video-btn">Learn More</a>
            </div>
        </div>
    </div>
</div>

<!-- Content Starts  -->
<div class="section-solutions">
    <div class="container">
        <div class="row">
            <div class="sol-box-points">
                <div class="col-md-6">
                    <div class="col-md-6 sol-box-1">
                        <div class="sol-box-ico">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="sol-box-cont">
                            <p>Unique 20 Step Learning Model</p>
                        </div>
                    </div>
                    <div class="col-md-6 sol-box-1">
                        <div class="sol-box-ico">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="sol-box-cont">
                            <p>Mood Analysis for better Learning</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sol-box-points">
                <div class="col-md-6">
                    <div class="col-md-6 sol-box-1">
                        <div class="sol-box-ico">
                            <i class="fas fa-spa"></i>
                        </div>
                        <div class="sol-box-cont">
                            <p>Screen Wellness</p>
                        </div>
                    </div>
                    <div class="col-md-6 sol-box-1">
                        <div class="sol-box-ico">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <div class="sol-box-cont">
                            <p>Stimulate the learner's mind</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial Section -->
<div class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="testi-head">
                <h1 class="text-center">Testimonials</h1>
            </div>
            <div class="slideshow-container">
                <div class="mySlides">
                    <q>We appreciate the good work of Be A Wiz Education with our students. Many of our students are finding this tool very useful and this has increased their enthusiasm in learning math. This tool is helping them understand concepts better and provides personal attention.</q>
                    <p class="author">- Ms. Deepika, Principal</p>
                </div>
                <div class="mySlides">
                    <q>I have been using Be A wiz for learning math for the past few months. I find this very useful since it helps me understand concepts & problems where I have difficulty in understanding. This tool has helped to identify my difficulty areas and put focus on them.</q>
                    <p class="author">- Yuktha. M, Class 8</p>
                </div>
                <div class="mySlides">
                    <q>My daughter has been using Be A wiz for math learning. The best part of this tool is that it is able to adapt with the student and helps them correct their difficulty areas. All other tools I have used are a plain series of questions but this one is very different </q>
                    <p class="author">- Mrs. Mahesh, parent of Priya Mahesh</p>
                </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <div class="dot-container">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
        </div>
    </div>
</div>

<!-- video Section 2 -->
<div class="video-section" style="margin-top: 4rem;">
    <div class="container">
        <div class="row">
            <div id="video2-cont" class="col-md-6 video-cont">
                <p class="video2-text">More hours of screen time are associated with lower well-being in ages 2 to 17. Many learning solutions encourage more and more use of the screen. Hence we need a breakthrough that brings forth the best of technology-based learning and conventional learning</p>
                <!--<a href="https://www.sciencedirect.com/science/article/pii/S2211335518301827" target="_blank" class="video-btn">Read more</a>-->
				<a href="its-for-you" target="_blank" class="video-btn">Read more</a>
            </div>
            <div class="col-md-6 video-sec">
                <iframe class="youtube-video-iframe" src="https://www.youtube.com/embed/H373A-YK8ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="logo.png" alt="Learning Ladder" class="footer-img">
                <ul class="cont-det">
                    <li> <i class="fas fa-envelope"></i><a href="mailto:contact@beawiz.com"> contact@beawiz.com</a></li>
                    <li> <i class="fas fa-phone"></i><a href="#"> +91-8943600513</a></li> 
                </ul>
                
                <ul class="social-icons">
                    <li> <a href="https://www.facebook.com/beawiz" target="_blank"><i style="color: #38539b" class="fab fa-facebook fb"></i></a></li>
                    <li> <a href="https://twitter.com/beAwiz2017" target="_blank"><i style="color: #58afe0" class="fab fa-twitter twitter"></i></a> </li>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="links-sec">
                    <h4>Know Us</h4>
                    <ul id="footer-links">
                        <li><a href="home">Home</a></li>
                        <li><a href="about-us">About Us</a></li>
                        <li><a href="its-for-you">Its For You</a></li>
                        <li><a href="pricing">Pricing</a></li>
                        <li><a href="learning-portfolio">Learning Portfolio</a></li>
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="links-sec">
                        <h4>Legal</h4>
                    <ul id="footer-links">
                        <li><a href="terms-and-conditions">Terms & Conditions</a></li>
                        <li><a href="privacy-policy">Privacy Policy</a></li>
                        <li><a href="refund-policy">Refund Policy</a></li>
                        <li><a href="faq">FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="links-sec">
                    <h4>Quick Links</h4>
                    <ul id="footer-links">
                        <li><a href="syllabus">Syllabus</a></li>
                        <li><a href="jobs">Jobs</a></li>
                        <!-- <li><a href="media">Media</a></li> -->
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
                <p>© 2020 Be A Wiz Education</p>
        </div>
    </div>
</div>
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
                        <img src="assets/images/logo.png" alt="Learning Ladder" style="width: 30%;">
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
						<input type="password" class="form-control" id="password" name="password" placeholder="Password/OTP" required>
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
								$stmt->bind_param("s", $userid);
								$stmt->execute();
								$res_ = $stmt->get_result();
								if($res_->num_rows > 0)
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
                                    <img src="assets/images/google-img.jpg" alt="Learning Ladder">
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
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
        
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }
       function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
    }
</script>   
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>