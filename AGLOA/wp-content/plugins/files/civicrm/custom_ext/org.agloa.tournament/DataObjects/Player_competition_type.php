<?php
/**
 * Table Definition for player_competition_type
 */
require_once 'DB/DataObject.php';

class Player_competition_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'player_competition_type';    // table name
    public $contact_id;                     // int(4) not_null unsigned
    public $sort_name;                      // varchar(128)
    public $competition;                    // varchar(7)
    public $competition_type;               // varchar(14) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
