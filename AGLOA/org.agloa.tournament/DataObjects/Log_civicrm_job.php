<?php
/**
 * Table Definition for log_civicrm_job
 */
require_once 'DB/DataObject.php';

class Log_civicrm_job extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_job';     // table name
    public $id;                             // int(4) unsigned
    public $domain_id;                      // int(4) unsigned
    public $run_frequency;                  // varchar(8) default_Daily
    public $last_run;                       // datetime
    public $name;                           // varchar(255)
    public $description;                    // varchar(255)
    public $api_entity;                     // varchar(255)
    public $api_action;                     // varchar(255)
    public $parameters;                     // text
    public $is_active;                      // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $scheduled_run_date;             // timestamp

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
