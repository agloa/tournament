<?php
/**
 * Table Definition for civicrm_payment_processor_type
 */
require_once 'DB/DataObject.php';

class Civicrm_payment_processor_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_payment_processor_type';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $title;                          // varchar(127)
    public $description;                    // varchar(255)
    public $is_active;                      // tinyint(1)
    public $is_default;                     // tinyint(1)
    public $user_name_label;                // varchar(255)
    public $password_label;                 // varchar(255)
    public $signature_label;                // varchar(255)
    public $subject_label;                  // varchar(255)
    public $class_name;                     // varchar(255)
    public $url_site_default;               // varchar(255)
    public $url_api_default;                // varchar(255)
    public $url_recur_default;              // varchar(255)
    public $url_button_default;             // varchar(255)
    public $url_site_test_default;          // varchar(255)
    public $url_api_test_default;           // varchar(255)
    public $url_recur_test_default;         // varchar(255)
    public $url_button_test_default;        // varchar(255)
    public $billing_mode;                   // int(4) not_null unsigned
    public $is_recur;                       // tinyint(1)
    public $payment_type;                   // int(4) unsigned default_1
    public $payment_instrument_id;          // int(4) unsigned default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
