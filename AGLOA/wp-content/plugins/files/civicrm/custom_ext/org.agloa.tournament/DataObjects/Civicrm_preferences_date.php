<?php
/**
 * Table Definition for civicrm_preferences_date
 */
require_once 'DB/DataObject.php';

class Civicrm_preferences_date extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_preferences_date';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) not_null
    public $description;                    // varchar(255)
    public $start;                          // int(4) not_null
    public $end;                            // int(4) not_null
    public $date_format;                    // varchar(64)
    public $time_format;                    // varchar(64)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
