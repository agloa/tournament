<?php
/**
 * Table Definition for civicrm_financial_account
 */
require_once 'DB/DataObject.php';

class Civicrm_financial_account extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_financial_account';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(255) unique_key not_null
    public $contact_id;                     // int(4) unsigned
    public $financial_account_type_id;      // int(4) not_null unsigned default_3
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

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
