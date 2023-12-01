#!/usr/bin/env php
<?php
function compile_message($text) {
	$text .= PHP_EOL;
	fwrite(STDERR, $text, strlen($text));
}

try {
	$opts = $_SERVER['argv'];
	array_shift($opts);
	include 'compiler.php';
}
catch (Exception $e) {
	compile_message('Usage: php compile.php [editor] [driver] [lang]');
	compile_message('Purpose: Compile adminer[-driver][-lang].php or editor[-driver][-lang].php.');
	exit(1);
}
