<?php
/**
 * Table Definition for log_civicrm_financial_account
 */
require_once 'DB/DataObject.php';

class Log_civicrm_financial_account extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_financial_account';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(255)
    public $contact_id;                     // int(4) unsigned
    public $financial_account_type_id;      // int(4) unsigned default_3
    public $accounting_code;                // varchar(64)
    public $account_type_code;              // varchar(64)
    public $description;                    // varchar(255)
    public $parent_id;                      // int(4) unsigned
    public $is_header_account;              // tinyint(1)
    public $is_deductible;                  // tinyint(1) default_1
    public $is_tax;                         // tinyint(1)
    public $tax_rate;                       // decimal(10,8)
    public $is_reserved;                    // tinyint(1)
    public $is_active;                      // tinyint(1)
    public $is_default;                     // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $opening_balance;                // decimal(20,2) default_0.00
    public $current_period_opening_balance;   // decimal(20,2) default_0.00

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
