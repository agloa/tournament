<?php
/**
 * Table Definition for log_civicrm_pcp
 */
require_once 'DB/DataObject.php';

class Log_civicrm_pcp extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_pcp';     // table name
    public $id;                             // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $status_id;                      // int(4) unsigned
    public $title;                          // varchar(255)
    public $intro_text;                     // text
    public $page_text;                      // text
    public $donate_link_text;               // varchar(255)
    public $page_id;                        // int(4) unsigned
    public $page_type;                      // varchar(64) default_contribute
    public $pcp_block_id;                   // int(4) unsigned
    public $is_thermometer;                 // int(4) unsigned
    public $is_honor_roll;                  // int(4) unsigned
    public $goal_amount;                    // decimal(20,2)
    public $currency;                       // varchar(3)
    public $is_active;                      // tinyint(1)
    public $is_notify;                      // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
