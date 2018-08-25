<!DOCTYPE HTML>
<html>
<head>
<title>contact third space architects </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/responsiveslides.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
<!--startsmothscrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!--endsmothscrolling-->
<link rel="stylesheet" href="css/swipebox.css">
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>


</head>
<body>
		<div class="heder-top">
				<div class="logo">
					<a href="index.html"><img src="images/header.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="clearfix"></div>
		</div>
			<!--start-header-section-->
		<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.html">home</a></li>
                <li><a href="about.html">about us</a></li>
				<li class="dropdown">
				<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">projects<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a href="projects.html">all projects</a></li>
				<li><a href="Residential.html">residential</a></li>
				<li><a href="Commercial.html">commercial</a></li>
				<li><a href="Construction.html">construction</a></li>
				</ul>
				</li>
				<li class="dropdown">
				<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">profile<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a href="services.html">our service</a></li>
				<li><a href="OurClient.html">our client</a></li>
				<li><a href="OurTeam.html">our team</a></li>
				</ul>
				</li>
				<li class="active"><a href="contact.php">contact us</a></li>
            </ul>
        </div>
    </div>
</nav>
		<!--end header-section-->
	<div class="content">
		<div class="contact">
			<div class="container">
					<div class="col-md-4 contact-form-left">
						<h4>Address :</h4>
						<p>Eiusmod Tempor inc</p>
						<p>9560 St Dolore Place,</p>
						<p>phone : +91 7708782836</p>
						<a href="mailto:example@email.com">thirdspacearchitects@gmail.com</a>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3737427404108!2d-87.6396654!3d41.8848187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2cc7c3102b49%3A0xb1fdcb49d39e5a1b!2sSpa+Space!5e0!3m2!1sen!2sin!4v1439200561345" frameborder="0" style="border:0" ></iframe>
						<h3>Drop a Line Here</h3>
						<form action="" method="post" name="form">
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" name="Name"required="">
						<input class="email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" name="email" required="">
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" name="telephone" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="" name="message">Message...</textarea>
						<input type="submit" value="Submit" name="submit">
						</form>
						<?php 
				if(isset($_POST['submit'])){
    // this is the sender's Email address
    $first_name = $_POST['Name'];
    $email = $_POST['email'];
	$phone = $_POST['telephone'];
    $message = $_POST['message'];
    
	
	$to = "syedmudaseer02@gmail.com"; // this is your Email address
	$headers = "From:".$email;
	$txt = 	"you have received the email from ".$first_name.".\n\n".$message;
	
    if(mail($to,$txt,$headers,$phone,$message)){
		echo"<h1>email has sent</h1>";
	}
	else{
		echo"<h1>some thing went wrong</h1>";
	}
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>

			</div>
		</div>
	</div>

	
</body>
</html> 