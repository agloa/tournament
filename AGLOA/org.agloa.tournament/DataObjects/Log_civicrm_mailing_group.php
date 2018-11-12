<?php
/**
 * Table Definition for log_civicrm_mailing_group
 */
require_once 'DB/DataObject.php';

class Log_civicrm_mailing_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_mailing_group';    // table name
    public $id;                             // int(4) unsigned
    public $mailing_id;                     // int(4) unsigned
    public $group_type;                     // varchar(8)
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $search_id;                      // int(4)
    public $search_args;                    // text
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
