<?php
/**
 * Table Definition for civicrm_option_group
 */
require_once 'DB/DataObject.php';

class Civicrm_option_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_option_group';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key not_null
    public $title;                          // varchar(255)
    public $description;                    // varchar(255)
    public $is_reserved;                    // tinyint(1) default_1
    public $is_active;                      // tinyint(1)
    public $is_locked;                      // tinyint(1)
    public $data_type;                      // varchar(128)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
