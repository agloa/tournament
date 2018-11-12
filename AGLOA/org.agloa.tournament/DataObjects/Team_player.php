<?php
/**
 * Table Definition for team_player
 */
require_once 'DB/DataObject.php';

class Team_player extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'team_player';         // table name
    public $team;                           // int(4) primary_key not_null unsigned
    public $player;                         // int(4) primary_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
