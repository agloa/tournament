{*
 +--------------------------------------------------------------------+
 | CiviTournament version 2018                                        |
 +--------------------------------------------------------------------+
 | Copyright Academic Games Leagues of America, Inc. 2018-            |
 +--------------------------------------------------------------------+
 | This file is a part of CiviTournament.                             |
 |                                                                    |
 | CiviTournament is free software; you can copy, modify, and         |
 | distribute it under the terms of the GNU Affero General Public     |
 | License Version 3, 19 November 2007.                               |
 |                                                                    |
 | CiviTournament is distributed in the hope that it will be useful,  |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of     |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License with this program; if not, contact Academic Games Leagues  |
 | of America, Inc. at cio[AT]AGLOA[DOT]org.                          |
 +--------------------------------------------------------------------+
*}
{*This single page should provide all a user needs.*}
<h2>{ts}Welcome{/ts}</h2>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<div ng-app="">
  <p>Name: <input type="text" ng-model="name"></p>
  <p ng-bind="name"></p>
</div>
{ts}

... <a href="javascript:alert('Hello World!');">{$user.display_name}</a>. 
<div id="MyContactRecord" ><span class="crmf-label crm-editable">{$user.last_name}</div>
This page should be all you need for: <a title="Popup event data]" href="{crmURL p="civicrm/event/info" q="reset=1&id=`$tournament.id`"}" target="_blank">{$tournament.title}</a>.<p>If you are new to this system, the first step is to <a title="[Popup contact form]">double-check your contact information</a>. You probably only need to do this once, ever.</p>
{/ts}
