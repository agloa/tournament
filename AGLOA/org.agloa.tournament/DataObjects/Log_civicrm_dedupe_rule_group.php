<?php
/**
 * Table Definition for log_civicrm_dedupe_rule_group
 */
require_once 'DB/DataObject.php';

class Log_civicrm_dedupe_rule_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_dedupe_rule_group';    // table name
    public $id;                             // int(4) unsigned
    public $contact_type;                   // varchar(12)
    public $threshold;                      // int(4)
    public $used;                           // varchar(12)
    public $name;                           // varchar(64)
    public $title;                          // varchar(255)
    public $is_reserved;                    // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
