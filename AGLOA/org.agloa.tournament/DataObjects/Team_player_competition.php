<?php
/**
 * Table Definition for team_player_competition
 */
require_once 'DB/DataObject.php';

class Team_player_competition extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'team_player_competition';    // table name
    public $team;                           // int(4) not_null unsigned
    public $player;                         // int(4) not_null unsigned
    public $competition;                    // varchar(20) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
