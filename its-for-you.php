<?php
ob_start();
session_start();
include('dbconfig.php');
include('OTPfunction.php');
if (isset($_SESSION['talentpage']))
	unset($_SESSION['talentpage']);
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Google MetaSearch entries -->
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
    <title>Its For You - BeAwiz</title>
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
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">
             <img src="img/logo.png"  alt="logo">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
			  <!-- <li><a href="talentprogram2021"><strong>Tatent Program 2021</strong></a></li> -->
              <li><a href="home">Home</a></li>
              <li><a href="about-us">About Us</a></li>
              <li class="active-nav"><a href="its-for-you">Its For You</a></li>
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
              <div class="dropdown dropdown-myaccount" >
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
</nav>

<!-- banner -->
<!-- <div class="subpage-banner">
    <div class="container">
        <div class="row">
            <div class="page-head">
                <h1>Its For You</h1>
            </div>
        </div>
    </div>
</div> -->
<!-- <div class="banner">
	<div class="floating">
        <h1>Its For You</h1>
    </div>	
</div> -->
<!-- Page Contents -->

<div class="its-for-you-main">
    <div class="container">
        <div class="row">
            <div class="its-for-you-main-head">
                <h2 class="text-center">Education is about Power and Change</h2>
            </div>
            <div class="its-you-video">
                <div class="col-md-6">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/F6ERh9fgNGQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="its-main-contents">
                <div class="col-md-6">
                    <div class="rowtext">
                        <p><b>Where does Be A Wiz get its inspiration from?</b></p>
                        <p>The oldest and still one of the most powerful teaching method is the Socratic method.  This method is a style of education based on asking and answering questions to stimulate critical thinking and to draw out ideas and underlying presumptions. </p>
                        <br>
                        <p><b>What is the Be A Wiz learning model?</b></p>
                        <p>Be A Wiz is based on a unique 20 step learning model where students learn by attempting a series of learning modules of varying difficulty. This is a analogous to a child learning to climb stairs and may stumble along the way but eventually reaches the top.  Our score at the end of each learning session is only indicative of student's learning ladder and guides the student to the top over several attempts.</p>
                        <br>
                    </div>
                </div>
                <div class="rem-main-cont">
                    <p><b>What is mood analysis and how is it related to learning?</b></p>
                    <p> This is a psychometry analysis of the learners presence and application of mind, thought during the time of learning. At Be A Wiz we strongly believe that learning is sensory in nature and intelligence is malleable. With self awareness, a learner will be able to improve learning outcomes. We measure 5 parameters namely, Attentiveness, Calmness, Grit, Progression and Observance. Take a trial session to see how this is done.</p>
                    <br>
					<p><b>What is the advantage of enrolling in Be A Wiz?</b></p>
                    <p> Children make mistakes when they lack conceptual understanding or when they have not practiced enough. Be A Wiz provides an environment coupled with constant guidance, feedback and support motivates students to persist and gain mastery over topics.</p>
                    <br>
                    <p><b>Is this another set of tests that will put students under stress?</b></p>
                    <p>Our modules are crafted to delight and engage the students. The Be A Wiz learning experience is student-driven and boosts inspiration, motivates students and enhances the confidence of all learners. In fact, our goal is to turn students into a wiz without them having go through a plethora of practice sheets.</p>
					<br>
					<p><b>Can this be used by teachers in schools and how does it help teachers?</b></p>
					<p>Be A Wiz is based proven scientific learning models to identify difficulty areas of students and provide targeted instructions to a student. BE A Wiz assists the teacher to provide personalized attention to students and the content is aligned with ICSE/CBSE syllabus.</p>
					<br>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ -->
<div class="its-faq">
    <div class="container">
        <div class="row">
            <div class="faq-row">
                <div class="col-md-6 faq-one">
                    <h3 style="line-height: 28px;">How is this adaptive method different from classroom methods?</h3>
                    <p>Learning patterns vary widely across students and the learning pace of two students is never the same. For this reason learning can be stimulated by presenting appropriate learning materials in terms of complexity of the problem or application of the concept.</p>
                </div>
                <div class="col-md-6 faq-two">
                    <h3>Why and who should enroll into Be A Wiz?</h3>
                    <p>Our differentiated learning blocks cater to a diverse set of learners. We challenge a fluent learner and make them outstanding. We take the intermediate learner to higher fluency levels. The beginner learner is led to take the progressive steps of learning. Our intuitive scoring system lets you visualize your progress.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- How does this work Section -->
<div class="how-work-section">
    <div class="container">
        <div class="row">
            <div class="how-main-head">
                <h2>How Does this work ?</h2>
            </div>
            <div class="how-contents">
                <div class="col-md-6">
                    <p>Each session is carefully crafted to flow through twenty levels of difficulty. We use the analogy of a child learning to climb a stair one at a time. Some children learn to climb quickly while some may need more guidance at certain stages. We try to replicate this same thought to teach specific topics to children by providing several intermediate steps to guide and steer a student to the top.</p>
                    <p>The difficulty areas, instruction, and guidance required for any two students to climb from Level 1 to Level 20 are very different. Predictive modeling techniques provide customized, specific and targeted instructions to take the student to the highest level of mastery. Proficiency is not attained in a single session but over several attempts on the same topic.</p>
                </div>
            </div>
            <div class="how-image">
                <div class="col-md-6">
                        <img src="img/how-img1.png" class="img-responsive" alt="">
                </div>                
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
<script src="assets/js/bootstrap.js"></script>
<script src="footer.js"></script>
</body>
</html>