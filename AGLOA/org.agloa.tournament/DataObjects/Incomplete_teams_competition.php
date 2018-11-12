<?php
/**
 * Table Definition for incomplete_teams_competition
 */
require_once 'DB/DataObject.php';

class Incomplete_teams_competition extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'incomplete_teams_competition';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $title;                          // varchar(64)
    public $num_players;                    // bigint(8) not_null
    public $competition;                    // varchar(257)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
