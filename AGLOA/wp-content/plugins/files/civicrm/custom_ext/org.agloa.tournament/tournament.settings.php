<?php
// this is the common configuration code - place in a general site wide include file.

require_once 'PEAR.php';

$config = parse_ini_file('tournament.ini',TRUE);

// Load and store DataObjects Configuration.
$options = &PEAR::getStaticProperty('DB_DataObject','options');
$options = &PEAR::getStaticProperty($config['DB_DataObject'],'options');
	$options = $values;

// Load and store Web Configuration.
$web_options = &PEAR::getStaticProperty('Web_Config','web_options');
$config = parse_ini_file('tournament.ini',TRUE);
foreach($config as $class=>$values) {
	$web_options = &PEAR::getStaticProperty($class,'web_options');
	$web_options = $values;
}

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

function appName() { 
	$WebOptions = WebOptions();
	return $WebOptions['appName']; 
}

function tournamentRoot() { 
	$globalOptions = globalOptions();
	return $globalOptions['tournament_root']; 
}

function classFile($className) { 
	return tournamentRoot() . "/DataObjects/{$className}.php"; 
}