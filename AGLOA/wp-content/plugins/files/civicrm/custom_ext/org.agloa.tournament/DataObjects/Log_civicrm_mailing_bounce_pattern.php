<?php
/**
 * Table Definition for log_civicrm_mailing_bounce_pattern
 */
require_once 'DB/DataObject.php';

class Log_civicrm_mailing_bounce_pattern extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_mailing_bounce_pattern';    // table name
    public $id;                             // int(4) unsigned
    public $bounce_type_id;                 // int(4) unsigned
    public $pattern;                        // varchar(255)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
