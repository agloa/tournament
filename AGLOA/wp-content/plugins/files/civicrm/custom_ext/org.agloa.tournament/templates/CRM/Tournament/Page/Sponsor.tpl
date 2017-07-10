<h3>Tournament Sponsor</h3>

<div class="help">
    {ts}The name of the organization that sponsors tournaments for this site is below. You can edit from this screen.{/ts}
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
              {ts}Label{/ts}
            </th>
            <th id="nosort">{ts}Description{/ts}</th>
          </tr>
          </thead>
          <tbody>
        {foreach from=$rows item=row}
          <tr id="tournament_sponsor-{$row.id}" class="crm-entity {cycle values="odd-row,even-row"}">
            <td class="crm-editable" data-field="id">{$row.id}</td>
            <td class="crm-editable" data-field="label">{$row.label}</td>           
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
      {crmButton p="civicrm/admin" q="reset=1" class="cancel" icon="times"}{ts}Done{/ts}{/crmButton}
    </div>
</div>