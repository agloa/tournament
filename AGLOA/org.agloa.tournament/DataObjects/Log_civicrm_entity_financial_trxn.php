<?php
/**
 * Table Definition for log_civicrm_entity_financial_trxn
 */
require_once 'DB/DataObject.php';

class Log_civicrm_entity_financial_trxn extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_entity_financial_trxn';    // table name
    public $id;                             // int(4) unsigned
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $financial_trxn_id;              // int(4) unsigned
    public $amount;                         // decimal(20,2)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
