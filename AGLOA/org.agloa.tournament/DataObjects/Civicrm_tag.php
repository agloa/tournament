<?php
/**
 * Table Definition for civicrm_tag
 */
require_once 'DB/DataObject.php';

class Civicrm_tag extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_tag';         // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key not_null
    public $description;                    // varchar(255)
    public $parent_id;                      // int(4) unsigned
    public $is_selectable;                  // tinyint(1) default_1
    public $is_reserved;                    // tinyint(1)
    public $is_tagset;                      // tinyint(1)
    public $used_for;                       // varchar(64)
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $color;                          // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
