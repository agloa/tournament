<?php
/**
 * Table Definition for civicrm_contact_type
 */
require_once 'DB/DataObject.php';

class Civicrm_contact_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_contact_type';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $label;                          // varchar(64)
    public $description;                    // text
    public $image_URL;                      // varchar(255)
    public $parent_id;                      // int(4) unsigned
    public $is_active;                      // tinyint(1)
    public $is_reserved;                    // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
