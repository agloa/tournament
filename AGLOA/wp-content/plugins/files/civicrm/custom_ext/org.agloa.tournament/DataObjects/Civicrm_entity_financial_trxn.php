<?php
/**
 * Table Definition for civicrm_entity_financial_trxn
 */
require_once 'DB/DataObject.php';

class Civicrm_entity_financial_trxn extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_entity_financial_trxn';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64) not_null
    public $entity_id;                      // int(4) not_null unsigned
    public $financial_trxn_id;              // int(4) unsigned
    public $amount;                         // decimal(20,2) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
