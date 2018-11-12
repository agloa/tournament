<?php
/**
 * Table Definition for civicrm_financial_trxn
 */
require_once 'DB/DataObject.php';

class Civicrm_financial_trxn extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_financial_trxn';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $from_financial_account_id;      // int(4) unsigned
    public $to_financial_account_id;        // int(4) unsigned
    public $trxn_date;                      // datetime
    public $total_amount;                   // decimal(20,2) not_null
    public $fee_amount;                     // decimal(20,2)
    public $net_amount;                     // decimal(20,2)
    public $currency;                       // varchar(3)
    public $trxn_id;                        // varchar(255)
    public $trxn_result_code;               // varchar(255)
    public $status_id;                      // int(4) unsigned
    public $payment_processor_id;           // int(4) unsigned
    public $payment_instrument_id;          // int(4) unsigned
    public $card_type_id;                   // int(4) unsigned
    public $check_number;                   // varchar(255)
    public $pan_truncation;                 // varchar(4)
    public $is_payment;                     // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
