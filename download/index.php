<?php
/* PHP Download
	- Version: 1.0
	- License: GNU
	- Author: Andrew Halabi <scripts@venzium.com>
	- Www: http://venzium.com/scripts/
*/


include "config.php";
include "inc_functions.php";

$log = "";

$fuid = substr(bin2hex(get_random_bytes(12)), 0, 250);
if (isset($_POST['id'])) {
$id1 = $_POST['id'];
if ($id1 == $fuid) {

header('location:confirm.php');
}
}


if (isset($_POST['dsubmit'])) {

	$msg1 = "Download Link has been sent please check your Mail";
	echo "<script type='text/javascript'>alert('$msg1')</script>";
}

if (isset($_POST['dsubmit'])) {
	
$url = $siteurl."/download/confirm.php?id=".$fuid; 
	
// --------------- Mail  -----------------
	$to = $_POST['textmail']; // to

	$headers = "From: $siteemail \r\n";
	$headers .= "Reply-To: $siteemail \r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	$subject = "Your download link";
	
	$message = "Hi.<br>Here's the download link for the file you requested:<br>";
	$message .= "<a href=".$url."> Download </a>";


	if (@mail($to, $subject, $message, $headers))
	 	{$log .="Download Link Sent. Check your email.";
	 	}else{$log.="FAIL: Download Link Not Sent!!";
	}

	echo $log;

}


?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Download</title>
<link href="dl.css" rel="stylesheet" type="text/css"/>
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/open-sans:n3:default.js" type="text/javascript"></script>

</head>
<body>
<div id="main">
<center>
 <h1>Download</h1></center>
<div id="login">
<h2>Enter your details below to receive a secure download link</h2>
<hr>
<div id="left"></div>
<div id="right">
<div id ="form1">
<form method="post" action ="" id="ctform">
<label><b>Your Name :</b></label>
<input type="text" id ="text1" name ="textname" required/>
<br/>
<br/>
<label><b>Your Email :</b></label><br>
<span style="font-family: 'Trebuchet MS', Verdana, Tahoma; font-style: normal; font-weight: 300; font-size: 10px; color: #000000;">(where you will receive a download link) </span>
<input type="email" name ="textmail" id ="text1" required/>
<br/>
<br/>
<input type="submit" id ="dsubmit" value ="submit" name ="dsubmit" />
</form>
</div>
</div>
</div>
</div>
</body>
</html>
