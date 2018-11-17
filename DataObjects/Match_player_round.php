<?php
/**
 * Table Definition for match_player_round
 */
require_once 'DB/DataObject.php';

class Match_player_round extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'match_player_round';    // table name
    public $match_id;                       // varchar(20) unique_key not_null
    public $player_round;                   // varchar(20) unique_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
