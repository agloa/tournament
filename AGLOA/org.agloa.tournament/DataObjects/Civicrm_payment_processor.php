<?php
/**
 * Table Definition for civicrm_payment_processor
 */
require_once 'DB/DataObject.php';

class Civicrm_payment_processor extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_payment_processor';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $domain_id;                      // int(4) unique_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $description;                    // varchar(255)
    public $payment_processor_type_id;      // int(4) unsigned
    public $is_active;                      // tinyint(1)
    public $is_default;                     // tinyint(1)
    public $is_test;                        // tinyint(1) unique_key
    public $user_name;                      // varchar(255)
    public $password;                       // varchar(255)
    public $signature;                      // text
    public $url_site;                       // varchar(255)
    public $url_api;                        // varchar(255)
    public $url_recur;                      // varchar(255)
    public $url_button;                     // varchar(255)
    public $subject;                        // varchar(255)
    public $class_name;                     // varchar(255)
    public $billing_mode;                   // int(4) not_null unsigned
    public $is_recur;                       // tinyint(1)
    public $payment_type;                   // int(4) unsigned default_1
    public $payment_instrument_id;          // int(4) unsigned default_1
    public $accepted_credit_cards;          // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
