<?php
/**
 * Table Definition for log_civicrm_membership_status
 */
require_once 'DB/DataObject.php';

class Log_civicrm_membership_status extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_membership_status';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(128)
    public $label;                          // varchar(128)
    public $start_event;                    // varchar(12)
    public $start_event_adjust_unit;        // varchar(8)
    public $start_event_adjust_interval;    // int(4)
    public $end_event;                      // varchar(12)
    public $end_event_adjust_unit;          // varchar(8)
    public $end_event_adjust_interval;      // int(4)
    public $is_current_member;              // tinyint(1)
    public $is_admin;                       // tinyint(1)
    public $weight;                         // int(4)
    public $is_default;                     // tinyint(1)
    public $is_active;                      // tinyint(1) default_1
    public $is_reserved;                    // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
