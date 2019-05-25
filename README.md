# PHP Download
	- Version: 1.0
	- License: GNU
	- Author: Andrew Halabi <scripts@venzium.com>
	- Www: http://venzium.com/scripts/

PHP Download is a file download system with email verification

This is a tool meant for allowing website visitors to download a SINGLE file from your site
Feel free to modify it and use it as you please.

## Installation:
1. Upload the script to a folder that you named   /download/ 
	you can change it but you need to change a couple of lines in the script.

2. The script is configured to send one single file preferably as a zipped .zip (that saves bandwidth also)

3. Upload the file you're sending to  the folder /download/files/ (we included EZDownload.zip as an example)

4. Open config.php and change the following settings:

	- $siteemail	email address used to send confirmation links
	- $siteurl	your website's address		e.g. http://example.com		NO slashes at the end
	- $sitename	your website's name. 		e.g. Joe Shmoe Blog.
	- $filename	file that will be downloaded. 	e.g. EZDownload.zip		Must be placed in folder /download/files/
Voila!

You can download the Pro version at http://venzium.com/scripts/

## Features:
- Customers visit your download page and submit their name/email address (index.php)
- They will receive a confirmation email containing a link to a confirm page (confirm.php)
- After confirming they will be redirected to (dl.php) that send the file as a download without divulging it's location.

## License:
PHP Download is free software; you can redistribute it and/or modify it
under the terms any of the following licenses at your choice:
- GNU General Public License Version 2 or later (the "GPL");
- GNU Lesser General Public License Version 2.1 or later (the "LGPL");
- Mozilla Public License Version 1.1 or later (the "MPL").

## Disclaimer:
BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.
EXCEPT WHEN OTHERWISE STATED IN WRITING, THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY 
OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR 
A PARTICULAR PURPOSE. THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU. SHOULD THE PROGRAM PROVE 
DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING, REPAIR OR CORRECTION.

