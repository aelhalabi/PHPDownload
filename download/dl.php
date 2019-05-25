<?php
/* EZ PHP Download
	- Version: 1.2
	- License: GNU
	- Author: Andrew Halabi <scripts@venzium.com>
	- Www: http://venzium.com/scripts/
*/

include_once("config.php");

if(isset($_GET['id1']))
{

	
	
$file="files/".$filename;
$len = filesize($file); // Calculate File Size
ob_clean();
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public");
header("Content-Description: File Transfer");
//header("Content-Type:application/pdf");	// for pdf file
header("Content-Type:application/zip"); 					// for zip file
$header="Content-Disposition: attachment; filename=$filename;"; // Send File Name
header($header );
header("Content-Transfer-Encoding: binary");
header("Content-Length: ".$len); // Send File Size
@readfile($file);
exit;
}
//echo"<h2>Thanks for download</h2>";
?>