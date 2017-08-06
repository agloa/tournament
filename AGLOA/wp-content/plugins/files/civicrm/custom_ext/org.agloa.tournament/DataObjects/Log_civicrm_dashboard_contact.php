<?php
/**
 * Table Definition for log_civicrm_dashboard_contact
 */
require_once 'DB/DataObject.php';

class Log_civicrm_dashboard_contact extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_dashboard_contact';    // table name
    public $id;                             // int(4) unsigned
    public $dashboard_id;                   // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $column_no;                      // tinyint(1)
    public $is_minimized;                   // tinyint(1)
    public $is_fullscreen;                  // tinyint(1) default_1
    public $is_active;                      // tinyint(1)
    public $weight;                         // int(4)
    public $content;                        // longtext
    public $created_date;                   // datetime
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
