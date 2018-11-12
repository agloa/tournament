<?php
/**
 * Table Definition for test_competition_round
 */
require_once 'DB/DataObject.php';

class Test_competition_round extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'test_competition_round';    // table name
    public $id;                             // varchar(20) primary_key not_null
    public $competition;                    // varchar(20) not_null
    public $title;                          // varchar(512) not_null
    public $description;                    // text
    public $type;                           // varchar(20) not_null
    public $ordinal;                        // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
