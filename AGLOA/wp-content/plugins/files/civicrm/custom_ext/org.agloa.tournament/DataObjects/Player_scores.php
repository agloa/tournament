<?php
/**
 * Table Definition for player_scores
 */
require_once 'DB/DataObject.php';

class Player_scores extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'player_scores';       // table name
    public $tournament;                     // varchar(20) not_null
    public $age_group;                      // int(4) not_null unsigned
    public $competition_type;               // varchar(20) not_null
    public $round_type;                     // varchar(20) not_null
    public $ordinal;                        // int(4) not_null unsigned
    public $player;                         // int(4) not_null unsigned
    public $score;                          // decimal(10,0) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
