<?php
/**
 * Table Definition for active_team_player_count
 */
require_once 'DB/DataObject.php';

class Active_team_player_count extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'active_team_player_count';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $title;                          // varchar(64)
    public $num_players;                    // bigint(8) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
