<?php
/**
 * Table Definition for log_civicrm_dashboard
 */
require_once 'DB/DataObject.php';

class Log_civicrm_dashboard extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_dashboard';    // table name
    public $id;                             // int(4) unsigned
    public $domain_id;                      // int(4) unsigned
    public $name;                           // varchar(64)
    public $label;                          // varchar(255)
    public $url;                            // varchar(255)
    public $permission;                     // varchar(255)
    public $permission_operator;            // varchar(3)
    public $column_no;                      // tinyint(1)
    public $is_minimized;                   // tinyint(1)
    public $fullscreen_url;                 // varchar(255)
    public $is_fullscreen;                  // tinyint(1) default_1
    public $is_active;                      // tinyint(1)
    public $is_reserved;                    // tinyint(1)
    public $weight;                         // int(4)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $cache_minutes;                  // int(4) unsigned default_60

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
