<?php
/**
 * Table Definition for log_civicrm_navigation
 */
require_once 'DB/DataObject.php';

class Log_civicrm_navigation extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_navigation';    // table name
    public $id;                             // int(4) unsigned
    public $domain_id;                      // int(4) unsigned
    public $label;                          // varchar(255)
    public $name;                           // varchar(255)
    public $url;                            // varchar(255)
    public $permission;                     // varchar(255)
    public $permission_operator;            // varchar(3)
    public $parent_id;                      // int(4) unsigned
    public $is_active;                      // tinyint(1)
    public $has_separator;                  // tinyint(1)
    public $weight;                         // int(4)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
