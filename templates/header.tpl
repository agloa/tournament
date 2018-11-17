{* Smarty *}
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
</head>
<html>
<body>
<h1><a href="index.php" title="home">{$appName}</a></h1>
{foreach from=$breadCrumbs key=href item=text}
  <a href="{$href}">{$text}</a> > 
{/foreach}