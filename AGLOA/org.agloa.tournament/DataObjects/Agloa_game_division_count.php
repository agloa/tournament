<?php
/**
 * Table Definition for agloa_game_division_count
 */
require_once 'DB/DataObject.php';

class Agloa_game_division_count extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_game_division_count';    // table name
    public $game;                           // varchar(5) not_null
    public $division;                       // varchar(3)
    public $count;                          // bigint(8) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
