<?php
/**
 * Table Definition for log_civicrm_price_field_value
 */
require_once 'DB/DataObject.php';

class Log_civicrm_price_field_value extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_price_field_value';    // table name
    public $id;                             // int(4) unsigned
    public $price_field_id;                 // int(4) unsigned
    public $name;                           // varchar(255)
    public $label;                          // varchar(255)
    public $description;                    // text
    public $amount;                         // varchar(512)
    public $count;                          // int(4) unsigned
    public $max_value;                      // int(4) unsigned
    public $weight;                         // int(4) default_1
    public $membership_type_id;             // int(4) unsigned
    public $membership_num_terms;           // int(4) unsigned
    public $is_default;                     // tinyint(1)
    public $is_active;                      // tinyint(1) default_1
    public $financial_type_id;              // int(4) unsigned
    public $deductible_amount;              // decimal(20,2) default_0.00
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $non_deductible_amount;          // decimal(20,2) default_0.00
    public $help_pre;                       // text
    public $help_post;                      // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
