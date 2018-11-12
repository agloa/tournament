<?php
/**
 * Table Definition for civicrm_custom_group
 */
require_once 'DB/DataObject.php';

class Civicrm_custom_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_custom_group';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $title;                          // varchar(64) unique_key not_null
    public $extends;                        // varchar(255) unique_key default_Contact
    public $extends_entity_column_id;       // int(4) unsigned
    public $extends_entity_column_value;    // varchar(255)
    public $style;                          // varchar(15)
    public $collapse_display;               // int(4) unsigned
    public $help_pre;                       // text
    public $help_post;                      // text
    public $weight;                         // int(4) not_null default_1
    public $is_active;                      // tinyint(1)
    public $table_name;                     // varchar(255)
    public $is_multiple;                    // tinyint(1)
    public $min_multiple;                   // int(4) unsigned
    public $max_multiple;                   // int(4) unsigned
    public $collapse_adv_display;           // int(4) unsigned
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $is_reserved;                    // tinyint(1)
    public $is_public;                      // tinyint(1) default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
