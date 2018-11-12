<?php
/**
 * Table Definition for log_civicrm_financial_item
 */
require_once 'DB/DataObject.php';

class Log_civicrm_financial_item extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_financial_item';    // table name
    public $id;                             // int(4) unsigned
    public $created_date;                   // timestamp
    public $transaction_date;               // datetime
    public $contact_id;                     // int(4) unsigned
    public $description;                    // varchar(255)
    public $amount;                         // decimal(20,2) default_0.00
    public $currency;                       // varchar(3)
    public $financial_account_id;           // int(4) unsigned
    public $status_id;                      // int(4) unsigned
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
