<?php
/**
 * Table Definition for log_civicrm_case_type
 */
require_once 'DB/DataObject.php';

class Log_civicrm_case_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_case_type';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(64)
    public $title;                          // varchar(64)
    public $description;                    // varchar(255)
    public $is_active;                      // tinyint(1)
    public $is_reserved;                    // tinyint(1)
    public $weight;                         // int(4) default_1
    public $definition;                     // blob
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
