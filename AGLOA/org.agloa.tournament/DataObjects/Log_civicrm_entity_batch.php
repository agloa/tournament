<?php
/**
 * Table Definition for log_civicrm_entity_batch
 */
require_once 'DB/DataObject.php';

class Log_civicrm_entity_batch extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_entity_batch';    // table name
    public $id;                             // int(4) unsigned
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $batch_id;                       // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
