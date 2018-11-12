<?php
/**
 * Table Definition for player_standings
 */
require_once 'DB/DataObject.php';

class Player_standings extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'player_standings';    // table name
    public $tournament;                     // varchar(20) not_null
    public $age_group;                      // int(4) not_null unsigned
    public $competition_type;               // varchar(20) not_null
    public $round_type;                     // varchar(20) not_null
    public $player;                         // int(4) not_null unsigned
    public $total;                          // decimal(32,0)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
