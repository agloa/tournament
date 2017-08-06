<?php
/**
 * Table Definition for civirule_trigger
 */
require_once 'DB/DataObject.php';

class Civirule_trigger extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civirule_trigger';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(80)
    public $label;                          // varchar(128)
    public $object_name;                    // varchar(45)
    public $op;                             // varchar(45)
    public $cron;                           // tinyint(1)
    public $class_name;                     // varchar(128)
    public $is_active;                      // tinyint(1) default_1
    public $created_date;                   // date
    public $created_user_id;                // int(4)
    public $modified_date;                  // date
    public $modified_user_id;               // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
