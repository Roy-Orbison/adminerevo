<?php
function compile_message($text) {
	# no output
}

try {
	$opts = array();
	foreach (array('project', 'driver', 'lang') as $k) { # semi-positional
		if (isset($_GET[$k]) && is_string($_GET[$k])) {
			$v = preg_replace('/[^-[:alnum:]]+/', '', $_GET[$k]);
			if ($v != '') {
				$opts[] = $v;
			}
		}
	}
	unset($k, $v);
	$output_filename = @tempnam(sys_get_temp_dir(), 'adminer-compile-');
	if (!$output_filename) {
		throw new Exception('File creation failed');
	}
	include 'compiler.php';
	header('Content-Type: text/plain');
	readfile($output_filename);
}
catch (Exception $e) {
	header('Content-Type: text/plain', true, 500);
	echo $e->getMessage();
	exit(1);
}
