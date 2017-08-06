<?php
require('Tournament_Smarty.php');

//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty = new Tournament_Smarty();
$smarty->display('index.tpl');

?>