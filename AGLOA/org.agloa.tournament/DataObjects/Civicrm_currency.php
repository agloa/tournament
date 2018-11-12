<?php
/**
 * Table Definition for civicrm_currency
 */
require_once 'DB/DataObject.php';

class Civicrm_currency extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_currency';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64)
    public $symbol;                         // varchar(8)
    public $numeric_code;                   // varchar(3)
    public $full_name;                      // varchar(64)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
