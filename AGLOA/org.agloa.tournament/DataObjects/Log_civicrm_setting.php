<?php
/**
 * Table Definition for log_civicrm_setting
 */
require_once 'DB/DataObject.php';

class Log_civicrm_setting extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_setting';    // table name
    public $id;                             // int(4) unsigned
    public $group_name;                     // varchar(64)
    public $name;                           // varchar(255)
    public $value;                          // text
    public $domain_id;                      // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $is_domain;                      // tinyint(1)
    public $component_id;                   // int(4) unsigned
    public $created_date;                   // datetime
    public $created_id;                     // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
