<?php
/**
 * Table Definition for log_civicrm_survey
 */
require_once 'DB/DataObject.php';

class Log_civicrm_survey extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_survey';    // table name
    public $id;                             // int(4) unsigned
    public $title;                          // varchar(255)
    public $campaign_id;                    // int(4) unsigned
    public $activity_type_id;               // int(4) unsigned
    public $recontact_interval;             // text
    public $instructions;                   // text
    public $release_frequency;              // int(4) unsigned
    public $max_number_of_contacts;         // int(4) unsigned
    public $default_number_of_contacts;     // int(4) unsigned
    public $is_active;                      // tinyint(1) default_1
    public $is_default;                     // tinyint(1)
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $last_modified_id;               // int(4) unsigned
    public $last_modified_date;             // datetime
    public $result_id;                      // int(4) unsigned
    public $bypass_confirm;                 // tinyint(1)
    public $thankyou_title;                 // varchar(255)
    public $thankyou_text;                  // text
    public $is_share;                       // tinyint(1) default_1
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
