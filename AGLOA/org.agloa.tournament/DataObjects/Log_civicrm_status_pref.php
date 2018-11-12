<?php
/**
 * Table Definition for log_civicrm_status_pref
 */
require_once 'DB/DataObject.php';

class Log_civicrm_status_pref extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_status_pref';    // table name
    public $id;                             // int(4) unsigned
    public $domain_id;                      // int(4) unsigned
    public $name;                           // varchar(255)
    public $hush_until;                     // date
    public $ignore_severity;                // int(4) unsigned default_1
    public $prefs;                          // varchar(255)
    public $check_info;                     // varchar(255)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // varchar(17)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
