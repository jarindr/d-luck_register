<!doctype html>
<?php
if (isset($_POST['name'])) {
$name = $_POST['name'];
}
if (isset($_POST['email'])) {
$email = $_POST['email'];
}
if (isset($_POST['text'])) {
$text = $_POST['text'];
}
$headers = "From: ".$email."\r\n";
$headers .= "X-Mailer: PHP/" . phpversion()."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=utf-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$msg="Name : ".$name."\n"."Email : ".$email."\n"."Message : ".$text;
$msg = wordwrap($msg,70);
$subject="Message from ".$name." (sent from d-luck.com)";
$recipient="audition.dluck@gmail.com";
$mail = mail($recipient, $subject, $msg, $headers) or die("Error!");
if ($mail) {
header("refresh:3; url=index.html");
} else {
echo "Mail sending failed.";
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, maximum-scale=1">
		<title>d-luck</title>
		<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="css/responsive.css" rel="stylesheet" type="text/css">
		<link href="css/animate.css" rel="stylesheet" type="text/css">
		<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->
		<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.js"></script>
		<script type="text/javascript" src="js/wow.js"></script>
		<script type="text/javascript" src="js/classie.js"></script>
		<!--[if lt IE 9]>
		<script src="js/respond-1.1.0.min.js"></script>
		<script src="js/html5shiv.js"></script>
		<script src="js/html5element.js"></script>
		<![endif]-->
		<style type="text/css">body{
			position: absolute;
			top:0;
			left:0;
			bottom:0;
			right:0;
		}
		</style>
	</head>
	<body>
		<div style="overflow:hidden;">
			<header class="header" id="header" style="width:100%; overflow-y:hidden;"><!--header-start-->
			<figure class="logo animated fadeInDown delay-07s">
			</figure>
			<div class="container">
				<h1 class="animated fadeInDown delay-07s" style="font-family:'rsu'; color:black;">เราได้รับข้อความแล้ว กรุณารอซักครู่...</h1>
			</div>
			
			</header><!--header-end-->
		</div>
		<script type="text/javascript">
		var h=$(window).height();
		console.log(h);
		$(".header").css("height",h);
		</script>
		
	</body>
</html>