<?php
// this is the common configuration code - place in a general site wide include file.

require_once 'PEAR.php';

$config = parse_ini_file('tournament.ini',TRUE);

// Load and store DataObjects Configuration.
$options = &PEAR::getStaticProperty('DB_DataObject','options');
$options = $config['DB_DataObject'];

// Store Web Configuration.
$GLOBALS['GLOBALS']['web_options'] = $config['Web_Config'];

function globals() {
	return $GLOBALS['GLOBALS'];
}

function globalOptions() {
	$globals = globals();
	return $globals['options'];
}

function WebOptions() {
	$globals = globals();
	return $globals['web_options'];
}

function WebOption($option) {
	$WebOptions = WebOptions();
	return $WebOptions[$option];
}

function classFile($className) {
	return WebOption('tournament_root'). "/DataObjects/{$className}.php";
}