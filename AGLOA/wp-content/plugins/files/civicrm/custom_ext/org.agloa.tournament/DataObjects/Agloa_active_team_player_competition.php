<?php
/**
 * Table Definition for agloa_active_team_player_competition
 */
require_once 'DB/DataObject.php';

class Agloa_active_team_player_competition extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_active_team_player_competition';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $competition_type;               // varchar(14) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
