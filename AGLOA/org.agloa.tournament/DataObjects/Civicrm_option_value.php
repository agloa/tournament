<?php
/**
 * Table Definition for civicrm_option_value
 */
require_once 'DB/DataObject.php';

class Civicrm_option_value extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_option_value';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $option_group_id;                // int(4) multiple_key not_null unsigned
    public $label;                          // varchar(512)
    public $value;                          // varchar(512) multiple_key not_null
    public $name;                           // varchar(255) multiple_key
    public $grouping;                       // varchar(255)
    public $filter;                         // int(4) unsigned
    public $is_default;                     // tinyint(1)
    public $weight;                         // int(4) not_null unsigned
    public $description;                    // text
    public $is_optgroup;                    // tinyint(1)
    public $is_reserved;                    // tinyint(1)
    public $is_active;                      // tinyint(1) default_1
    public $component_id;                   // int(4) unsigned
    public $domain_id;                      // int(4) unsigned
    public $visibility_id;                  // int(4) unsigned
    public $icon;                           // varchar(255)
    public $color;                          // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
