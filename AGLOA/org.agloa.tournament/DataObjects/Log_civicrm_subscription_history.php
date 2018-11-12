<?php
/**
 * Table Definition for log_civicrm_subscription_history
 */
require_once 'DB/DataObject.php';

class Log_civicrm_subscription_history extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_subscription_history';    // table name
    public $id;                             // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $group_id;                       // int(4) unsigned
    public $date;                           // datetime
    public $method;                         // varchar(8)
    public $status;                         // varchar(8)
    public $tracking;                       // varchar(255)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
