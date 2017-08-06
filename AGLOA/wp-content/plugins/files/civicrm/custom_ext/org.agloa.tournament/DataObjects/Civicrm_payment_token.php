<?php
/**
 * Table Definition for civicrm_payment_token
 */
require_once 'DB/DataObject.php';

class Civicrm_payment_token extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_payment_token';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $payment_processor_id;           // int(4) not_null unsigned
    public $token;                          // varchar(255) not_null
    public $created_date;                   // timestamp not_null default_CURRENT_TIMESTAMP
    public $created_id;                     // int(4) unsigned
    public $expiry_date;                    // datetime
    public $email;                          // varchar(255)
    public $billing_first_name;             // varchar(255)
    public $billing_middle_name;            // varchar(255)
    public $billing_last_name;              // varchar(255)
    public $masked_account_number;          // varchar(255)
    public $ip_address;                     // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
