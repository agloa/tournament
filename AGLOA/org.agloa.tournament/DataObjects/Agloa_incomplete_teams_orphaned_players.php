<?php
/**
 * Table Definition for agloa_incomplete_teams_orphaned_players
 */
require_once 'DB/DataObject.php';

class Agloa_incomplete_teams_orphaned_players extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_incomplete_teams_orphaned_players';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $title;                          // varchar(64)
    public $num_players;                    // bigint(8) not_null
    public $competition_key;                // varchar(8)
    public $player_id;                      // int(4) not_null unsigned
    public $player_name;                    // varchar(128)
    public $registration_group;             // varchar(64)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
