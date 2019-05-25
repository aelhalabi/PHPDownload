<?php
/* PHP Download
	- Version: 1.0
	- License: GNU
	- Author: Andrew Halabi <scripts@venzium.com>
	- Www: http://venzium.com/scripts/
*/

function get_random_bytes($length) {
	if (function_exists('openssl_random_pseudo_bytes')) {
		return openssl_random_pseudo_bytes($length);
	} else {
		$output = "";

		for ($i = 0; $i < $length; $i++)
			$output .= chr(mt_rand(0, 255));

		return $output;
	}
}




?>
