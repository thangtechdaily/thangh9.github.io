<?php
#Place this file in root folder of your website (ex: /var/home/public_html)
#Open php.ini file and find auto_prepend_file
#Paste link to file (ex: auto_prepend_file = "/var/home/public_html/minify.php")
#origin: http://jesin.tk/how-to-use-php-to-minify-html-output/
#note: it conflict with ckeditor, i'm trying to solve it
function minify_output($buffer){
	$search = array(
		'/\>[^\S ]+/s',
		'/[^\S ]+\</s',
		'/(\s)+/s');
	$replace = array(
		'>',
		'<',
		'\\1');
	if (preg_match("/\<html/i",$buffer) == 1 && preg_match("/\<\/html\>/i",$buffer) == 1) {
		$buffer = preg_replace($search, $replace, $buffer);
	}
		return $buffer;
	}
ob_start("minify_output");
?>
