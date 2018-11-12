<?php
/**
 * Table Definition for log_civicrm_preferences_date
 */
require_once 'DB/DataObject.php';

class Log_civicrm_preferences_date extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_preferences_date';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(64)
    public $description;                    // varchar(255)
    public $start;                          // int(4)
    public $end;                            // int(4)
    public $date_format;                    // varchar(64)
    public $time_format;                    // varchar(64)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
