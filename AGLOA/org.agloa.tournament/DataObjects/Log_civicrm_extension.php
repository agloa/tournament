<?php
/**
 * Table Definition for log_civicrm_extension
 */
require_once 'DB/DataObject.php';

class Log_civicrm_extension extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_extension';    // table name
    public $id;                             // int(4) unsigned
    public $type;                           // varchar(8)
    public $full_name;                      // varchar(255)
    public $name;                           // varchar(255)
    public $label;                          // varchar(255)
    public $file;                           // varchar(255)
    public $schema_version;                 // varchar(63)
    public $is_active;                      // tinyint(1) default_1
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
