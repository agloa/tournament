<?php /*%%SmartyHeaderCode:187562683659753134debab3-46482698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fdc5f2244e1f58b5adfa15fa3aa83540662ad5f' => 
    array (
      0 => 'templates/sponsor.tpl',
      1 => 1501962757,
      2 => 'file',
    ),
    '9c6f8b972a71528aed53b30c13741c8b6b9a5621' => 
    array (
      0 => 'templates/dataObject.tpl',
      1 => 1501962697,
      2 => 'file',
    ),
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1501964253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187562683659753134debab3-46482698',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59864ad1611192_47095774',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59864ad1611192_47095774')) {function content_59864ad1611192_47095774($_smarty_tpl) {?>


<h1><a href="index.php" title="home">Tournament Administration System</a></h1>
  <a href="index.php">Home</a> > 
  <a href="sponsor.php">Sponsor</a> > 


  <div id="div_Sponsor" class="crm-block">
    <table id="tbl_Sponsor" class="display" sortable>
      <caption>Sponsor</caption>
      <thead>
                  <th>ID</th>
                  <th>Label</th>
                  <th>Description</th>
              </thead>
      
              <tr id="Sponsor-AGLOA" class="crm-entity">
        
                  <td>AGLOA</td>
                  <td>Academic Games Leagues of America</td>
                  <td>The Academic Games Leagues of America (AGLOA) is a non-profit organization formed in 1991 to encourage and conduct academic competitions at the local and national level. Players receive recognition and rewards in the same way that sports champions are honored. AGLOA is dedicated to developing “Thinking Kids” of character, excellence, and integrity.</td>
                </tr>
          </table>
  </div>
<?php }} ?>