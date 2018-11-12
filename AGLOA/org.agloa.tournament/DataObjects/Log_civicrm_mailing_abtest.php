<?php
/**
 * Table Definition for log_civicrm_mailing_abtest
 */
require_once 'DB/DataObject.php';

class Log_civicrm_mailing_abtest extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_mailing_abtest';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(128)
    public $status;                         // varchar(32)
    public $mailing_id_a;                   // int(4) unsigned
    public $mailing_id_b;                   // int(4) unsigned
    public $mailing_id_c;                   // int(4) unsigned
    public $domain_id;                      // int(4) unsigned
    public $testing_criteria;               // varchar(32)
    public $winner_criteria;                // varchar(32)
    public $specific_url;                   // varchar(255)
    public $declare_winning_time;           // datetime
    public $group_percentage;               // int(4) unsigned
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
