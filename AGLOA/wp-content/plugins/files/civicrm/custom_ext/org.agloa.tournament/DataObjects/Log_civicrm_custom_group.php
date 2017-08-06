<?php
/**
 * Table Definition for log_civicrm_custom_group
 */
require_once 'DB/DataObject.php';

class Log_civicrm_custom_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_custom_group';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(64)
    public $title;                          // varchar(64)
    public $extends;                        // varchar(255) default_Contact
    public $extends_entity_column_id;       // int(4) unsigned
    public $extends_entity_column_value;    // varchar(255)
    public $style;                          // varchar(15)
    public $collapse_display;               // int(4) unsigned
    public $help_pre;                       // text
    public $help_post;                      // text
    public $weight;                         // int(4) default_1
    public $is_active;                      // tinyint(1)
    public $table_name;                     // varchar(255)
    public $is_multiple;                    // tinyint(1)
    public $min_multiple;                   // int(4) unsigned
    public $max_multiple;                   // int(4) unsigned
    public $collapse_adv_display;           // int(4) unsigned
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $is_reserved;                    // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $is_public;                      // tinyint(1) default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
