<?php
/**
 * Table Definition for log_civicrm_cxn
 */
require_once 'DB/DataObject.php';

class Log_civicrm_cxn extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_cxn';     // table name
    public $id;                             // int(4) unsigned
    public $app_guid;                       // varchar(128)
    public $app_meta;                       // text
    public $cxn_guid;                       // varchar(128)
    public $secret;                         // text
    public $perm;                           // text
    public $options;                        // text
    public $is_active;                      // tinyint(1) default_1
    public $created_date;                   // timestamp
    public $modified_date;                  // timestamp
    public $fetched_date;                   // timestamp
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
