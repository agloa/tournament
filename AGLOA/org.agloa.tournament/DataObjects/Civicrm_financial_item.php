<?php
/**
 * Table Definition for civicrm_financial_item
 */
require_once 'DB/DataObject.php';

class Civicrm_financial_item extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_financial_item';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $created_date;                   // timestamp not_null default_CURRENT_TIMESTAMP
    public $transaction_date;               // datetime not_null
    public $contact_id;                     // int(4) not_null unsigned
    public $description;                    // varchar(255)
    public $amount;                         // decimal(20,2) not_null default_0.00
    public $currency;                       // varchar(3)
    public $financial_account_id;           // int(4) unsigned
    public $status_id;                      // int(4) unsigned
    public $entity_table;                   // varchar(64) multiple_key
    public $entity_id;                      // int(4) multiple_key unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
