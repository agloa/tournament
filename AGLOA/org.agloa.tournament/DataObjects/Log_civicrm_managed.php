<?php
/**
 * Table Definition for log_civicrm_managed
 */
require_once 'DB/DataObject.php';

class Log_civicrm_managed extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_managed';    // table name
    public $id;                             // int(4) unsigned
    public $module;                         // varchar(127)
    public $name;                           // varchar(127)
    public $entity_type;                    // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $cleanup;                        // varchar(32)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
