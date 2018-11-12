<?php
/**
 * Table Definition for log_civicrm_campaign
 */
require_once 'DB/DataObject.php';

class Log_civicrm_campaign extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_campaign';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(255)
    public $title;                          // varchar(255)
    public $description;                    // text
    public $start_date;                     // datetime
    public $end_date;                       // datetime
    public $campaign_type_id;               // int(4) unsigned
    public $status_id;                      // int(4) unsigned
    public $external_identifier;            // varchar(32)
    public $parent_id;                      // int(4) unsigned
    public $is_active;                      // tinyint(1) default_1
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $last_modified_id;               // int(4) unsigned
    public $last_modified_date;             // datetime
    public $goal_general;                   // text
    public $goal_revenue;                   // decimal(20,2)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
