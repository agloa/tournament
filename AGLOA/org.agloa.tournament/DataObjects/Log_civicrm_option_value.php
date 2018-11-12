<?php
/**
 * Table Definition for log_civicrm_option_value
 */
require_once 'DB/DataObject.php';

class Log_civicrm_option_value extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_option_value';    // table name
    public $id;                             // int(4) unsigned
    public $option_group_id;                // int(4) unsigned
    public $label;                          // varchar(512)
    public $value;                          // varchar(512)
    public $name;                           // varchar(255)
    public $grouping;                       // varchar(255)
    public $filter;                         // int(4) unsigned
    public $is_default;                     // tinyint(1)
    public $weight;                         // int(4) unsigned
    public $description;                    // text
    public $is_optgroup;                    // tinyint(1)
    public $is_reserved;                    // tinyint(1)
    public $is_active;                      // tinyint(1) default_1
    public $component_id;                   // int(4) unsigned
    public $domain_id;                      // int(4) unsigned
    public $visibility_id;                  // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $icon;                           // varchar(255)
    public $color;                          // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
