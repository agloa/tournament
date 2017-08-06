{* Smarty *}

{include file="header.tpl"}
{capture assign=newObjectURL}{rootURL q="action=add&reset=1"}{/capture}
<div class="action-link">
  <a accesskey="N" href="{$newObjectURL}" id="newObject" class="button crm-popup">
    <span><i class="crm-i"></i>Add {$table_caption}</span>
  </a>
  <div class="clear"></div>
</div>
{if $rows}
  <div id="div_{$table_caption}" class="crm-block">
    <table id="tbl_{$table_caption}" class="display" sortable>
      <caption>{$table_caption}</caption>
      <thead>
        {foreach from=$columnHeaders key=keys item=label}
          <th>{$label}</th>
        {/foreach}
      </thead>
      
      {foreach from=$rows key=keys item=row}
        <tr id="{$table_caption}-{$row.$keyField}" class="crm-entity">
        
        {foreach from=$columns key=colKeys item=field}
          <td>{$row.$field}</td>
        {/foreach}
        </tr>
      {/foreach}
    </table>
  </div>
{/if}