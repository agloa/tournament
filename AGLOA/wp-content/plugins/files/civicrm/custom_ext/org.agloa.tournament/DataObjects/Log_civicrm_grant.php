<?php
/**
 * Table Definition for log_civicrm_grant
 */
require_once 'DB/DataObject.php';

class Log_civicrm_grant extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_grant';    // table name
    public $id;                             // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $application_received_date;      // date
    public $decision_date;                  // date
    public $money_transfer_date;            // date
    public $grant_due_date;                 // date
    public $grant_report_received;          // tinyint(1)
    public $grant_type_id;                  // int(4) unsigned
    public $amount_total;                   // decimal(20,2)
    public $amount_requested;               // decimal(20,2)
    public $amount_granted;                 // decimal(20,2)
    public $currency;                       // varchar(3)
    public $rationale;                      // text
    public $status_id;                      // int(4) unsigned
    public $financial_type_id;              // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
