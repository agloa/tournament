<?php /* Smarty version Smarty-3.1-DEV, created on 2017-08-05 15:02:21
         compiled from "templates/dataObject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4263949795986244d6fcbd6-99172623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c6f8b972a71528aed53b30c13741c8b6b9a5621' => 
    array (
      0 => 'templates/dataObject.tpl',
      1 => 1501962697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4263949795986244d6fcbd6-99172623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'table_caption' => 0,
    'columnHeaders' => 0,
    'label' => 0,
    'keyField' => 0,
    'row' => 0,
    'columns' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5986244d803d16_32121835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5986244d803d16_32121835')) {function content_5986244d803d16_32121835($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['rows']->value){?>
  <div id="div_<?php echo $_smarty_tpl->tpl_vars['table_caption']->value;?>
" class="crm-block">
    <table id="tbl_<?php echo $_smarty_tpl->tpl_vars['table_caption']->value;?>
" class="display" sortable>
      <caption><?php echo $_smarty_tpl->tpl_vars['table_caption']->value;?>
</caption>
      <thead>
        <?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['columnHeaders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['keys']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
          <th><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</th>
        <?php } ?>
      </thead>
      
      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['keys']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
        <tr id="<?php echo $_smarty_tpl->tpl_vars['table_caption']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['keyField']->value];?>
" class="crm-entity">
        
        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['colKeys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['colKeys']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['field']->value];?>
</td>
        <?php } ?>
        </tr>
      <?php } ?>
    </table>
  </div>
<?php }?><?php }} ?>