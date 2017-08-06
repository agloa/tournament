<?php
/**
 * Table Definition for log_civicrm_value_civivolunteer_10
 */
require_once 'DB/DataObject.php';

class Log_civicrm_value_civivolunteer_10 extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_value_civivolunteer_10';    // table name
    public $id;                             // int(4) unsigned
    public $entity_id;                      // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // varchar(17)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $volunteer_need_id_79;           // int(4)
    public $volunteer_role_id_80;           // varchar(64)
    public $time_scheduled_in_minutes_81;   // int(4)
    public $time_completed_in_minutes_82;   // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
