<?php
/**
 * Table Definition for log_civicrm_print_label
 */
require_once 'DB/DataObject.php';

class Log_civicrm_print_label extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_print_label';    // table name
    public $id;                             // int(4) unsigned
    public $title;                          // varchar(255)
    public $name;                           // varchar(255)
    public $description;                    // text
    public $label_format_name;              // varchar(255)
    public $label_type_id;                  // int(4) unsigned
    public $data;                           // longtext
    public $is_default;                     // tinyint(1) default_1
    public $is_active;                      // tinyint(1) default_1
    public $is_reserved;                    // tinyint(1) default_1
    public $created_id;                     // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
