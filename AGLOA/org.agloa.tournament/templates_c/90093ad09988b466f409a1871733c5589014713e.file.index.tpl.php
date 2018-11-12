<?php /* Smarty version Smarty-3.1-DEV, created on 2017-07-23 17:02:35
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48975529659751cfbb40c01-68319140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1500846247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48975529659751cfbb40c01-68319140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59751cfbb74757_97705969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59751cfbb74757_97705969')) {function content_59751cfbb74757_97705969($_smarty_tpl) {?>

Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, welcome to Smarty!

    <?php }} ?>