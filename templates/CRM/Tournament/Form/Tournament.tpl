{* HEADER *}

{* this template is used for adding/editing options *}
<div class="crm-block crm-form-block">
<div class="crm-submit-buttons">{include file="CRM/common/formButtons.tpl" location="top"}</div>

<table class="form-layout-compressed">
  <tr>
    <td class="label">{$form.title.label} 
      {if $action == 2}{include file='CRM/Core/I18n/Dialog.tpl' table='tournament' field='label' id=$id}{/if}
    </td>
    <td class="html-adjust">{$form.title.html}
      <br /><span class="description">{ts}The title is displayed to users.{/ts}</span>
    </td>
  </tr>
  <tr>
    <td class="label">{$form.description.label}</td>
    <td>{$form.description.html}
      <br /><span class="description">{ts}Optional verbose description.{/ts}</span>
    </td>
  </tr>
</table>
{* FOOTER *}
<div class="crm-submit-buttons">{include file="CRM/common/formButtons.tpl" location="bottom"}</div>
 </fieldset>
</div>