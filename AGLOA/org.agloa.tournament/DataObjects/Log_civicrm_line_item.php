<?php
/**
 * Table Definition for log_civicrm_line_item
 */
require_once 'DB/DataObject.php';

class Log_civicrm_line_item extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_line_item';    // table name
    public $id;                             // int(4) unsigned
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $contribution_id;                // int(4) unsigned
    public $price_field_id;                 // int(4) unsigned
    public $label;                          // varchar(255)
    public $qty;                            // decimal(20,2)
    public $unit_price;                     // decimal(20,2)
    public $line_total;                     // decimal(20,2)
    public $participant_count;              // int(4) unsigned
    public $price_field_value_id;           // int(4) unsigned
    public $financial_type_id;              // int(4) unsigned
    public $deductible_amount;              // decimal(20,2) default_0.00
    public $tax_amount;                     // decimal(20,2)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $non_deductible_amount;          // decimal(20,2) default_0.00

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
