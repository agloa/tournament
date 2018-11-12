<?php
/**
 * Table Definition for player_round_score
 */
require_once 'DB/DataObject.php';

class Player_round_score extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'player_round_score';    // table name
    public $id;                             // varchar(32) primary_key not_null
    public $player_round;                   // varchar(20) unique_key not_null
    public $title;                          // varchar(512)
    public $description;                    // text
    public $score;                          // decimal(10,0) not_null
    public $created_by;                     // varchar(20)
    public $created_timestamp;              // timestamp not_null default_CURRENT_TIMESTAMP
    public $modified_by;                    // varchar(20)
    public $modified_timestamp;             // timestamp

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
