<?php
/**
 * Table Definition for log_civicrm_financial_trxn
 */
require_once 'DB/DataObject.php';

class Log_civicrm_financial_trxn extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_financial_trxn';    // table name
    public $id;                             // int(4) unsigned
    public $from_financial_account_id;      // int(4) unsigned
    public $to_financial_account_id;        // int(4) unsigned
    public $trxn_date;                      // datetime
    public $total_amount;                   // decimal(20,2)
    public $fee_amount;                     // decimal(20,2)
    public $net_amount;                     // decimal(20,2)
    public $currency;                       // varchar(3)
    public $trxn_id;                        // varchar(255)
    public $trxn_result_code;               // varchar(255)
    public $status_id;                      // int(4) unsigned
    public $payment_processor_id;           // int(4) unsigned
    public $payment_instrument_id;          // int(4) unsigned
    public $check_number;                   // varchar(255)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $is_payment;                     // tinyint(1)
    public $card_type_id;                   // int(4) unsigned
    public $pan_truncation;                 // varchar(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
