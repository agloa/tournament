<?php
/**
 * Table Definition for player_section
 */
require_once 'DB/DataObject.php';

class Player_section extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'player_section';      // table name
    public $player;                         // int(4) primary_key not_null unsigned
    public $section;                        // varchar(20) primary_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
