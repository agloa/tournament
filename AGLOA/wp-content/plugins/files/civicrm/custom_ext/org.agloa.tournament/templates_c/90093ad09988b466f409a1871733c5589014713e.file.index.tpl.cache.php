<?php /* Smarty version Smarty-3.1-DEV, created on 2017-08-05 17:52:05
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1352107763597527c9b2eb83-14452853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1501973515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352107763597527c9b2eb83-14452853',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_597527c9bc4d66_52106003',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597527c9bc4d66_52106003')) {function content_597527c9bc4d66_52106003($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<ol>
  <li><a href="sponsor.php">Sponsor</a></li>
  <li><a href="tournaments.php">Tournaments</a></li>
</ol>
<?php }} ?>