<?php
/**
 * Table Definition for civicrm_timezone
 */
require_once 'DB/DataObject.php';

class Civicrm_timezone extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_timezone';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64)
    public $abbreviation;                   // char(3)
    public $gmt;                            // varchar(64)
    public $offset;                         // int(4)
    public $country_id;                     // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
