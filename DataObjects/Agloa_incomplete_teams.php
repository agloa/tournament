<?php
/**
 * Table Definition for agloa_incomplete_teams
 */
require_once 'DB/DataObject.php';

class Agloa_incomplete_teams extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_incomplete_teams';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $title;                          // varchar(64)
    public $num_players;                    // bigint(8) not_null
    public $competition_key;                // varchar(8)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
