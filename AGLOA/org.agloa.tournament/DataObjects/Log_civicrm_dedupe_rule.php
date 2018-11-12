<?php
/**
 * Table Definition for log_civicrm_dedupe_rule
 */
require_once 'DB/DataObject.php';

class Log_civicrm_dedupe_rule extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_dedupe_rule';    // table name
    public $id;                             // int(4) unsigned
    public $dedupe_rule_group_id;           // int(4) unsigned
    public $rule_table;                     // varchar(64)
    public $rule_field;                     // varchar(64)
    public $rule_length;                    // int(4) unsigned
    public $rule_weight;                    // int(4)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
