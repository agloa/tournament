<?php
/**
 * Table Definition for log_civicrm_uf_join
 */
require_once 'DB/DataObject.php';

class Log_civicrm_uf_join extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_uf_join';    // table name
    public $id;                             // int(4) unsigned
    public $is_active;                      // tinyint(1) default_1
    public $module;                         // varchar(64)
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $weight;                         // int(4) default_1
    public $uf_group_id;                    // int(4) unsigned
    public $module_data;                    // longtext
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
