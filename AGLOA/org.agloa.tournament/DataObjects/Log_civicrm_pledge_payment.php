<?php
/**
 * Table Definition for log_civicrm_pledge_payment
 */
require_once 'DB/DataObject.php';

class Log_civicrm_pledge_payment extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_pledge_payment';    // table name
    public $id;                             // int(4) unsigned
    public $pledge_id;                      // int(4) unsigned
    public $contribution_id;                // int(4) unsigned
    public $scheduled_amount;               // decimal(20,2)
    public $actual_amount;                  // decimal(20,2)
    public $currency;                       // varchar(3)
    public $scheduled_date;                 // datetime
    public $reminder_date;                  // datetime
    public $reminder_count;                 // int(4) unsigned
    public $status_id;                      // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
