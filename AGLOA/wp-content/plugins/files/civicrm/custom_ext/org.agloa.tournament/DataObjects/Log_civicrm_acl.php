<?php
/**
 * Table Definition for log_civicrm_acl
 */
require_once 'DB/DataObject.php';

class Log_civicrm_acl extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_acl';     // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(64)
    public $deny;                           // tinyint(1)
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $operation;                      // varchar(8)
    public $object_table;                   // varchar(64)
    public $object_id;                      // int(4) unsigned
    public $acl_table;                      // varchar(64)
    public $acl_id;                         // int(4) unsigned
    public $is_active;                      // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
