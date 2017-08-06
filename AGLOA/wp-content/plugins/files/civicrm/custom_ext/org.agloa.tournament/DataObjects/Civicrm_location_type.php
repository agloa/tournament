<?php
/**
 * Table Definition for civicrm_location_type
 */
require_once 'DB/DataObject.php';

class Civicrm_location_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_location_type';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $display_name;                   // varchar(64)
    public $vcard_name;                     // varchar(64)
    public $description;                    // varchar(255)
    public $is_reserved;                    // tinyint(1)
    public $is_active;                      // tinyint(1)
    public $is_default;                     // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
