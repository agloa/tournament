{* Smarty *}

<h1><a href="index.php" title="home">{$app_name}</a></h1>
{foreach from=$breadCrumbs key=href item=text}
  <a href="{$href}">{$text}</a> > 
{/foreach}

