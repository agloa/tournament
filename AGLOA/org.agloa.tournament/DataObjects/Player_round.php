<?php
/**
 * Table Definition for player_round
 */
require_once 'DB/DataObject.php';

class Player_round extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'player_round';        // table name
    public $id;                             // varchar(32) primary_key not_null
    public $round;                          // varchar(20) unique_key not_null
    public $title;                          // varchar(512)
    public $description;                    // text
    public $player;                         // int(4) unique_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
