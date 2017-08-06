<?php
/**
 * Table Definition for civicrm_extension
 */
require_once 'DB/DataObject.php';

class Civicrm_extension extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_extension';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $type;                           // varchar(8) not_null
    public $full_name;                      // varchar(255) unique_key not_null
    public $name;                           // varchar(255)
    public $label;                          // varchar(255)
    public $file;                           // varchar(255)
    public $schema_version;                 // varchar(63)
    public $is_active;                      // tinyint(1) default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
