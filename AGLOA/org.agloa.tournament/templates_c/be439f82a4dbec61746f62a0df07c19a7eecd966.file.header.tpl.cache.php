<?php /* Smarty version Smarty-3.1-DEV, created on 2017-08-05 15:17:37
         compiled from "templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89148339859860593c01f19-94631231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1501964253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89148339859860593c01f19-94631231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59860593c2e790_41359865',
  'variables' => 
  array (
    'app_name' => 0,
    'breadCrumbs' => 0,
    'href' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59860593c2e790_41359865')) {function content_59860593c2e790_41359865($_smarty_tpl) {?>

<h1><a href="index.php" title="home"><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</a></h1>
<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_smarty_tpl->tpl_vars['href'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadCrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value){
$_smarty_tpl->tpl_vars['text']->_loop = true;
 $_smarty_tpl->tpl_vars['href']->value = $_smarty_tpl->tpl_vars['text']->key;
?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a> > 
<?php } ?>

<?php }} ?>