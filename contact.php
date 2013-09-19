<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link href="profile.css" media="screen" type="text/css" rel="stylesheet">
<link href="profilemob.css" media="screen" type="text/css" rel="stylesheet">
<meta name="viewport" content="width=device-width">
<link type="text/css" href="profprint.css" rel="stylesheet" media="print">
<meta charset="UTF-8">
<meta name="description" content="Helping people with their web development needs since 2012. This is THE personal site of yours truly, Evan McCullough. Get into contact with me here!" />
<meta name="author" content="Evan McCullough" />
<title>Evan McCullough | Contact Me</title>
<script type="text/javascript" src="scripts/googleAnalytics.js"></script>
</head>
<body>
	<header>
			<h1><a href="index.html"><img src="images/logo.png" alt="Evan McCullough Logo" /></a></h1>
		<nav id="nav">
			<ul id="headernav">
				<li><a href="projects.html">Projects</a></li>
				<li>Contact</li>
				<li><a href="http://blog.evanamccullough.com" target="_blank">Blog</a></li>
			</ul>
		</nav>
	</header>
	<script type="text/javascript" src="scripts/windowmac.js"></script>
	<div id="box">
		<div>
		</div>
		<div id="project">
			<h2 id="top">Contact Me</h2>
			<p>For more information about me or for a possible opportunity, please use the following form.</p>
			<?php 

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {

				$problem = FALSE;

				if (empty($_POST['name'])) { //verify that name is filled out
					$problem = TRUE;
					echo "<script type='text/javascript'>alert('Name must be filled out');</script>";
				}
				if (empty($_POST['email']) || (substr_count($_POST['email'], '@') != 1) ) {//verify that email is filled out and there is at least one @ in email address
					$problem = TRUE;
					echo "<script type='text/javascript'>alert('Please provide a valid email address');</script>";
				}
				if (empty($_POST['message'])) { //verify that message is filled out
					$problem = TRUE;
					echo "<script type='text/javascript'>alert('Message must be filled out');</script>";
				}

				if (!$problem) {
					$email = $_POST['email'];
					$name = $_POST['name'];
					$message = $_POST['message'];
					$body = "Message from: $name\n\nReturn Email: $email\n\nMessage:\n$message"; //body of email
					$emailto = "eamccullough@suffolk.edu, e_mccullough92@yahoo.com"; //everyones email to send to
		
					echo "<script type='text/javascript'>alert('Thank you for submitting your comment. We will contact you shortly.');</script>";
					mail($emailto, 'Message from evanamccullough.com', $body, 'From: webmaster@evanamccullough.com');
				}
			}
	

			?>
			<form name="commentSubmit" action="contact.php" method="post">
				<fieldset id="emailname">
						<legend>Name*</legend>
						<input name="name" id="name" placeholder="Name" type="text"><br/>
				</fieldset>
				<fieldset id="emailaddress">
						<legend>Email*</legend>
						<input name="email" id="email" placeholder="example@domain.com" type="text"><br/>
				</fieldset>
				<fieldset id="emailmessage">
						<legend>Message*</legend>
						<textarea id="message" name="message" placeholder="Enter comments here."></textarea>			</fieldset>
				<fieldset id="buttons">
					<input id="submit" value="Submit" type="submit" >
					<input id="reset" value="Clear" type="reset" >
				</fieldset>
			</form>
			<p>* required fields</p>
		</div>
	</div>
	<footer>
		<div id="socialmedia">
			<ul>
				<li><a href="https://coderbits.com/evanmcc92"><img src="images/coderbits32x32.png" alt="View Evan McCullough's profile on Coderbits"></a></li>
				<li><a href="mailto:webmaster@evanamccullough.com"><img src="images/email.png" alt="Email Evan McCullough directly"></a></li>
				<li><a href="https://www.facebook.com/evan.mccullough.92"><img src="images/facebook.png" alt="View Evan McCullough's profile on Facebook"></a></li>
				<li><a href="https://github.com/evanmcc92"><img src="images/github.png" alt="View Evan McCullough's profile on GitHub"></a></li>
				<li><a href="http://www.linkedin.com/in/evanmccullough"><img src="images/linkedin.png" alt="View Evan McCullough's profile on LinkedIn"></a></li>
			</ul>
		</div>
		<div id="footerDiv">
			<ul>
				<li>Created by Evan McCullough</li>
				<li><a href="#top">Top</a></li>
				<li><a href="index.html">Home</a></li>
				<li>Contact</li>
			</ul>
		</div>
	</footer>
</body>
</html>