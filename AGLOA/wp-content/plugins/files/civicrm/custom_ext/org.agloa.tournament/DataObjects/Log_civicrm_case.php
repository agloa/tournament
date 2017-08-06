<?php
/**
 * Table Definition for log_civicrm_case
 */
require_once 'DB/DataObject.php';

class Log_civicrm_case extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_case';    // table name
    public $id;                             // int(4) unsigned
    public $case_type_id;                   // int(4) unsigned
    public $subject;                        // varchar(128)
    public $start_date;                     // date
    public $end_date;                       // date
    public $details;                        // text
    public $status_id;                      // int(4) unsigned
    public $is_deleted;                     // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
