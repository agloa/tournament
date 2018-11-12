<?php
/**
 * Table Definition for agloa_reading_awards
 */
require_once 'DB/DataObject.php';

class Agloa_reading_awards extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_reading_awards';    // table name
    public $Teams;                          // int(4) primary_key not_null
    public $largeThinkers;                  // int(4) not_null
    public $smallThinkers;                  // int(4) not_null
    public $Medals;                         // int(4) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
