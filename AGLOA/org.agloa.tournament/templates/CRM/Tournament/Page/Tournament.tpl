<h3>Tournament</h3>

<div class="help">
    {ts}The list of existing tournaments for this site is below. You can edit from this screen.{/ts}
</div>
<div class="crm-content-block crm-block">
{if $rows}
<div id="Sponsor">
  {strip}
        <table id="options" class="row-highlight">
         <thead>
         <tr>
            <th>
              {ts}ID{/ts}
            </th>
            <th>
              {ts}Title{/ts}
            </th>
            <th id="nosort">{ts}Description{/ts}</th>
          </tr>
          </thead>
          <tbody>
        {foreach from=$rows item=row}
          <tr id="tournament-{$row.id}" class="crm-entity {cycle values="odd-row,even-row"}">
            <td data-field="id">{$row.id}</td>
            <td class="crm-editable" data-field="title">{$row.title}</td>           
            <td class="crm-editable" data-field="description" data-type="textarea">{$row.description}</td>
          </tr>
        {/foreach}
        </tbody>
        </table>
  {/strip}
</div>
{else}
    <div class="messages status no-popup">
      <img src="{$config->resourceBase}i/Inform.gif" alt="{ts}status{/ts}"/>
      {ts}None found.{/ts}
    </div>
{/if}
    <div class="action-link">
      {crmButton q="action=add&reset=1" id="newTournament" icon="plus-circle"}{ts}Add Tournament{/ts}{/crmButton}
      {crmButton p="civicrm/admin" q="reset=1" class="cancel" icon="times"}{ts}Done{/ts}{/crmButton}
    </div>
</div>