<?php
// caching headers added in compile.php

if ($_GET["file"] == "favicon.ico") {
	header("Content-Type: image/x-icon");
	echo base64_decode(compile_file('../adminer/static/favicon.ico', 'base64_encode'));
} elseif ($_GET["file"] == "default.css") {
	header("Content-Type: text/css; charset=utf-8");
	echo compile_file('../adminer/static/default.css;../externals/jush/jush.css');
} elseif ($_GET["file"] == "functions.js") {
	header("Content-Type: text/javascript; charset=utf-8");
	echo compile_file('../adminer/static/functions.js;static/editing.js');
} elseif ($_GET["file"] == "jush.js") {
	header("Content-Type: text/javascript; charset=utf-8");
	echo compile_file('../externals/jush/modules/jush.js;../externals/jush/modules/jush-textarea.js;../externals/jush/modules/jush-txt.js;../externals/jush/modules/jush-js.js;../externals/jush/modules/jush-sql.js;../externals/jush/modules/jush-pgsql.js;../externals/jush/modules/jush-sqlite.js;../externals/jush/modules/jush-mssql.js;../externals/jush/modules/jush-oracle.js;../externals/jush/modules/jush-simpledb.js');
} else {
	header("Content-Type: image/gif");
	switch ($_GET["file"]) {
		case "plus.gif": echo base64_decode(compile_file('../adminer/static/plus.gif', 'base64_encode')); break;
		case "cross.gif": echo base64_decode(compile_file('../adminer/static/cross.gif', 'base64_encode')); break;
		case "up.gif": echo base64_decode(compile_file('../adminer/static/up.gif', 'base64_encode')); break;
		case "down.gif": echo base64_decode(compile_file('../adminer/static/down.gif', 'base64_encode')); break;
		case "arrow.gif": echo base64_decode(compile_file('../adminer/static/arrow.gif', 'base64_encode')); break;
	}
}
exit;
