<?php
$GLOBALS['_ta_rp_key'] = '2dde49ecbf6ac3afde475f8ade7f8e85';
$GLOBALS['_ta_reverse_proxy_id'] = 'n1a8e4';

require 'bootloader_e38ae6ab886a10ecfd318d23e1479c92.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>