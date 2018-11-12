<?php
/**
 * Table Definition for civicrm_case_type
 */
require_once 'DB/DataObject.php';

class Civicrm_case_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_case_type';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key not_null
    public $title;                          // varchar(64) not_null
    public $description;                    // varchar(255)
    public $is_active;                      // tinyint(1)
    public $is_reserved;                    // tinyint(1)
    public $weight;                         // int(4) not_null default_1
    public $definition;                     // blob

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
