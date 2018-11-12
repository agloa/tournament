<?php
/**
 * Table Definition for log_civicrm_payment_processor_type
 */
require_once 'DB/DataObject.php';

class Log_civicrm_payment_processor_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_payment_processor_type';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(64)
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
    public $billing_mode;                   // int(4) unsigned
    public $is_recur;                       // tinyint(1)
    public $payment_type;                   // int(4) unsigned default_1
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $payment_instrument_id;          // int(4) unsigned default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
