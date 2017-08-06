<?php
/**
 * Table Definition for civicrm_line_item
 */
require_once 'DB/DataObject.php';

class Civicrm_line_item extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_line_item';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64) unique_key not_null
    public $entity_id;                      // int(4) unique_key not_null unsigned
    public $contribution_id;                // int(4) unique_key unsigned
    public $price_field_id;                 // int(4) unique_key unsigned
    public $label;                          // varchar(255)
    public $qty;                            // decimal(20,2) not_null
    public $unit_price;                     // decimal(20,2) not_null
    public $line_total;                     // decimal(20,2) not_null
    public $participant_count;              // int(4) unsigned
    public $price_field_value_id;           // int(4) unique_key unsigned
    public $financial_type_id;              // int(4) unsigned
    public $non_deductible_amount;          // decimal(20,2) not_null default_0.00
    public $tax_amount;                     // decimal(20,2)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
