<?php
/**
 * Table Definition for civicrm_contribution_page
 */
require_once 'DB/DataObject.php';

class Civicrm_contribution_page extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_contribution_page';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $title;                          // varchar(255)
    public $intro_text;                     // text
    public $financial_type_id;              // int(4) unsigned
    public $payment_processor;              // varchar(128)
    public $is_credit_card_only;            // tinyint(1)
    public $is_monetary;                    // tinyint(1) default_1
    public $is_recur;                       // tinyint(1)
    public $is_confirm_enabled;             // tinyint(1) default_1
    public $recur_frequency_unit;           // varchar(128)
    public $is_recur_interval;              // tinyint(1)
    public $is_recur_installments;          // tinyint(1)
    public $adjust_recur_start_date;        // tinyint(1) not_null
    public $is_pay_later;                   // tinyint(1)
    public $pay_later_text;                 // text
    public $pay_later_receipt;              // text
    public $is_partial_payment;             // tinyint(1)
    public $initial_amount_label;           // varchar(255)
    public $initial_amount_help_text;       // text
    public $min_initial_amount;             // decimal(20,2)
    public $is_allow_other_amount;          // tinyint(1)
    public $default_amount_id;              // int(4) unsigned
    public $min_amount;                     // decimal(20,2)
    public $max_amount;                     // decimal(20,2)
    public $goal_amount;                    // decimal(20,2)
    public $thankyou_title;                 // varchar(255)
    public $thankyou_text;                  // text
    public $thankyou_footer;                // text
    public $is_email_receipt;               // tinyint(1)
    public $receipt_from_name;              // varchar(255)
    public $receipt_from_email;             // varchar(255)
    public $cc_receipt;                     // varchar(255)
    public $bcc_receipt;                    // varchar(255)
    public $receipt_text;                   // text
    public $is_active;                      // tinyint(1)
    public $footer_text;                    // text
    public $amount_block_is_active;         // tinyint(1) default_1
    public $start_date;                     // datetime
    public $end_date;                       // datetime
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $currency;                       // varchar(3)
    public $campaign_id;                    // int(4) unsigned
    public $is_share;                       // tinyint(1) default_1
    public $is_billing_required;            // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
