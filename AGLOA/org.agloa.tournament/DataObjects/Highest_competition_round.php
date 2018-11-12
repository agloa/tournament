<?php
/**
 * Table Definition for highest_competition_round
 */
require_once 'DB/DataObject.php';

class Highest_competition_round extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'highest_competition_round';    // table name
    public $competition;                    // varchar(20) not_null
    public $type;                           // varchar(20) not_null
    public $highest_round;                  // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
