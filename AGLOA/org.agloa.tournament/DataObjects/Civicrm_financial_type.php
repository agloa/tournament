<?php
/**
 * Table Definition for civicrm_financial_type
 */
require_once 'DB/DataObject.php';

class Civicrm_financial_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_financial_type';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) not_null
    public $description;                    // varchar(255)
    public $is_deductible;                  // tinyint(1) default_1
    public $is_reserved;                    // tinyint(1)
    public $is_active;                      // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
