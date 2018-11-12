<?php
require_once("tournament.settings.php");

$className = 'Tournament';
$classFile = classFile($className);
require_once($classFile);

// get all rows from table
$object = new $className;

require_once('Tournament_Smarty.php');
//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty = new Tournament_Smarty();

$breadCrumbs['index.php'] = "Home";
$breadCrumbs['sponsor.php'] = "Sponsor";
$breadCrumbs['tournaments.php'] = "Tournament";
$smarty->assign('breadCrumbs', $breadCrumbs);

$keys = $object->keys();
$smarty->assign('keyField', "id");

$columnHeaders[] = "ID";
$columnHeaders[] = "Title";
$columnHeaders[] = "Description";
$smarty->assign('columnHeaders', $columnHeaders);
	
$columns[] = "id";
$columns[] = "title";
$columns[] = "description";
$smarty->assign('columns', $columns);
	
$smarty->assign('rows', $object->rows());

$pageName = "tournament";
$smarty->assign('table_caption', ucfirst($pageName));
$smarty->display("{$pageName}.tpl");

?>