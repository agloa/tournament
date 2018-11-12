<?php
/**
 * Table Definition for player_competition
 */
require_once 'DB/DataObject.php';

class Player_competition extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'player_competition';    // table name
    public $player;                         // int(4) primary_key not_null unsigned
    public $competition;                    // varchar(20) primary_key not_null
    public $registration_group;             // varchar(20)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
