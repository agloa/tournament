<?php
/**
 * Table Definition for civicrm_participant_status_type
 */
require_once 'DB/DataObject.php';

class Civicrm_participant_status_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_participant_status_type';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64)
    public $label;                          // varchar(255)
    public $class;                          // varchar(8)
    public $is_reserved;                    // tinyint(1)
    public $is_active;                      // tinyint(1) default_1
    public $is_counted;                     // tinyint(1)
    public $weight;                         // int(4) not_null unsigned
    public $visibility_id;                  // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
