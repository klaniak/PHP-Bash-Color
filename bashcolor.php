<?php

/**
 * @copyright 2011 Arkadius Stefanski (MIT License)
 * @author Arkadius Stefanski <arkste[at]gmail[dot]com>
 */

function bash_color($string, $color='white', $background='black') {

	$colored_string = "";

	$_color['black'] = '0;30';
	$_color['dark_gray'] = '1;30';
	$_color['blue'] = '0;34';
	$_color['light_blue'] = '1;34';
	$_color['green'] = '0;32';
	$_color['light_green'] = '1;32';
	$_color['cyan'] = '0;36';
	$_color['light_cyan'] = '1;36';
	$_color['red'] = '0;31';
	$_color['light_red'] = '1;31';
	$_color['purple'] = '0;35';
	$_color['light_purple'] = '1;35';
	$_color['brown'] = '0;33';
	$_color['yellow'] = '1;33';
	$_color['light_gray'] = '0;37';
	$_color['white'] = '1;37';

	$_bg_color['black'] = '40';
	$_bg_color['red'] = '41';
	$_bg_color['green'] = '42';
	$_bg_color['yellow'] = '43';
	$_bg_color['blue'] = '44';
	$_bg_color['magenta'] = '45';
	$_bg_color['cyan'] = '46';
	$_bg_color['light_gray'] = '47';

	if(isset($_color[$color])) {
		$colored_string .= "\033[" . $_color[$color] . "m";
	}

	if(isset($_bg_color[$background])) {
		$colored_string .= "\033[" . $_bg_color[$background] . "m";
	}

	$colored_string .= $string . "\033[0m";

	return $colored_string;
}

?>