<?php
require_once('Tournament_Smarty.php');
//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty = new Tournament_Smarty();

require_once("tournament.settings.php");

$className = 'Tournament_sponsor'; //$className = 'Tournament';
$classFile = classFile($className);
require_once($classFile);

$object = new $className;
$smarty->assign('columnHeaders', $object->columnHeaders());
	
$columns = $object->columns();
$smarty->assign('columns', $columns);

// get all rows from table
$keys = $object->keys();
$smarty->assign('keyField', "id");

$rows = $object->rows();
$smarty->assign('rows', $rows);

$pageName = $object->table_title();
$smarty->assign('table_caption', ucfirst($pageName));

$breadCrumbs['index.php'] = "Home";
$breadCrumbs['sponsor.php'] = $pageName;
$smarty->assign('breadCrumbs', $breadCrumbs);

$smarty->display("{$pageName}.tpl");
?>