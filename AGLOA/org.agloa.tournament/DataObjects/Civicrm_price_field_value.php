<?php
/**
 * Table Definition for civicrm_price_field_value
 */
require_once 'DB/DataObject.php';

class Civicrm_price_field_value extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_price_field_value';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $price_field_id;                 // int(4) not_null unsigned
    public $name;                           // varchar(255)
    public $label;                          // varchar(255)
    public $description;                    // text
    public $amount;                         // varchar(512) not_null
    public $count;                          // int(4) unsigned
    public $max_value;                      // int(4) unsigned
    public $weight;                         // int(4) default_1
    public $membership_type_id;             // int(4) unsigned
    public $membership_num_terms;           // int(4) unsigned
    public $is_default;                     // tinyint(1)
    public $is_active;                      // tinyint(1) default_1
    public $financial_type_id;              // int(4) unsigned
    public $non_deductible_amount;          // decimal(20,2) not_null default_0.00
    public $help_pre;                       // text
    public $help_post;                      // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
