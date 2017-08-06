<?php
/**
 * Table Definition for civicrm_contribution_recur
 */
require_once 'DB/DataObject.php';

class Civicrm_contribution_recur extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_contribution_recur';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $amount;                         // decimal(20,2) not_null
    public $currency;                       // varchar(3)
    public $frequency_unit;                 // varchar(8) default_month
    public $frequency_interval;             // int(4) not_null unsigned
    public $installments;                   // int(4) unsigned
    public $start_date;                     // datetime not_null
    public $create_date;                    // datetime not_null
    public $modified_date;                  // datetime
    public $cancel_date;                    // datetime
    public $end_date;                       // datetime
    public $processor_id;                   // varchar(255)
    public $payment_token_id;               // int(4) unsigned
    public $trxn_id;                        // varchar(255) unique_key
    public $invoice_id;                     // varchar(255) unique_key
    public $contribution_status_id;         // int(4) unsigned default_1
    public $is_test;                        // tinyint(1)
    public $cycle_day;                      // int(4) not_null unsigned default_1
    public $next_sched_contribution_date;   // datetime
    public $failure_count;                  // int(4) unsigned
    public $failure_retry_date;             // datetime
    public $auto_renew;                     // tinyint(1) not_null
    public $payment_processor_id;           // int(4) unsigned
    public $financial_type_id;              // int(4) unsigned
    public $payment_instrument_id;          // int(4) unsigned
    public $campaign_id;                    // int(4) unsigned
    public $is_email_receipt;               // tinyint(1) default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
