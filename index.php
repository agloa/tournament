<?php
require('Tournament_Smarty.php');

//** uncomment the following line to show the debug console
//$smarty->debugging = true;

$smarty = new Tournament_Smarty();
$smarty->display('index.tpl');

?>