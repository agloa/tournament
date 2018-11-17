<?php
/**
 * Table Definition for active_team_players
 */
require_once 'DB/DataObject.php';

class Active_team_players extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'active_team_players';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $title;                          // varchar(64)
    public $contact_id;                     // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
