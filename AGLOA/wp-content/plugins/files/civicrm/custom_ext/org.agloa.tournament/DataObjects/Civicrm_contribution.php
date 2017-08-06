<?php
/**
 * Table Definition for civicrm_contribution
 */
require_once 'DB/DataObject.php';

class Civicrm_contribution extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_contribution';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $financial_type_id;              // int(4) unsigned
    public $contribution_page_id;           // int(4) unsigned
    public $payment_instrument_id;          // int(4) unsigned
    public $receive_date;                   // datetime multiple_key
    public $non_deductible_amount;          // decimal(20,2) default_0.00
    public $total_amount;                   // decimal(20,2) multiple_key not_null
    public $fee_amount;                     // decimal(20,2)
    public $net_amount;                     // decimal(20,2)
    public $trxn_id;                        // varchar(255) unique_key
    public $invoice_id;                     // varchar(255) unique_key
    public $currency;                       // varchar(3)
    public $cancel_date;                    // datetime
    public $cancel_reason;                  // text
    public $receipt_date;                   // datetime
    public $thankyou_date;                  // datetime
    public $source;                         // varchar(255)
    public $amount_level;                   // text
    public $contribution_recur_id;          // int(4) unsigned
    public $is_test;                        // tinyint(1)
    public $is_pay_later;                   // tinyint(1)
    public $contribution_status_id;         // int(4) unsigned default_1
    public $address_id;                     // int(4) unsigned
    public $check_number;                   // varchar(255)
    public $campaign_id;                    // int(4) unsigned
    public $creditnote_id;                  // varchar(255)
    public $tax_amount;                     // decimal(20,2)
    public $revenue_recognition_date;       // datetime

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
