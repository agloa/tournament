<?php
/**
 * Table Definition for active_team_players_5
 */
require_once 'DB/DataObject.php';

class Active_team_players_5 extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'active_team_players_5';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $title;                          // varchar(64)
    public $P1;                             // bigint(8) unsigned
    public $P2;                             // bigint(8) unsigned
    public $P3;                             // bigint(8) unsigned
    public $P4;                             // bigint(8) unsigned
    public $P5;                             // bigint(8) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
