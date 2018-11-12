<?php
/**
 * Table Definition for log_civicrm_pledge
 */
require_once 'DB/DataObject.php';

class Log_civicrm_pledge extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_pledge';    // table name
    public $id;                             // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $financial_type_id;              // int(4) unsigned
    public $contribution_page_id;           // int(4) unsigned
    public $amount;                         // decimal(20,2)
    public $original_installment_amount;    // decimal(20,2)
    public $currency;                       // varchar(3)
    public $frequency_unit;                 // varchar(8) default_month
    public $frequency_interval;             // int(4) unsigned default_1
    public $frequency_day;                  // int(4) unsigned default_3
    public $installments;                   // int(4) unsigned default_1
    public $start_date;                     // datetime
    public $create_date;                    // datetime
    public $acknowledge_date;               // datetime
    public $modified_date;                  // datetime
    public $cancel_date;                    // datetime
    public $end_date;                       // datetime
    public $max_reminders;                  // int(4) unsigned default_1
    public $initial_reminder_day;           // int(4) unsigned default_5
    public $additional_reminder_day;        // int(4) unsigned default_5
    public $status_id;                      // int(4) unsigned
    public $is_test;                        // tinyint(1)
    public $campaign_id;                    // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
