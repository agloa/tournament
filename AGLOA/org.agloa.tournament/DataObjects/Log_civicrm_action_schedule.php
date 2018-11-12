<?php
/**
 * Table Definition for log_civicrm_action_schedule
 */
require_once 'DB/DataObject.php';

class Log_civicrm_action_schedule extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_action_schedule';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(64)
    public $title;                          // varchar(64)
    public $recipient;                      // varchar(64)
    public $limit_to;                       // tinyint(1)
    public $entity_value;                   // varchar(255)
    public $entity_status;                  // varchar(64)
    public $start_action_offset;            // int(4) unsigned
    public $start_action_unit;              // varchar(8)
    public $start_action_condition;         // varchar(64)
    public $start_action_date;              // varchar(64)
    public $is_repeat;                      // tinyint(1)
    public $repetition_frequency_unit;      // varchar(8)
    public $repetition_frequency_interval;   // int(4) unsigned
    public $end_frequency_unit;             // varchar(8)
    public $end_frequency_interval;         // int(4) unsigned
    public $end_action;                     // varchar(32)
    public $end_date;                       // varchar(64)
    public $is_active;                      // tinyint(1) default_1
    public $recipient_manual;               // varchar(128)
    public $recipient_listing;              // varchar(128)
    public $body_text;                      // longtext
    public $body_html;                      // longtext
    public $sms_body_text;                  // longtext
    public $subject;                        // varchar(128)
    public $record_activity;                // tinyint(1)
    public $mapping_id;                     // varchar(64)
    public $group_id;                       // int(4) unsigned
    public $msg_template_id;                // int(4) unsigned
    public $sms_template_id;                // int(4) unsigned
    public $absolute_date;                  // date
    public $from_name;                      // varchar(255)
    public $from_email;                     // varchar(255)
    public $mode;                           // varchar(128) default_Email
    public $sms_provider_id;                // int(4) unsigned
    public $used_for;                       // varchar(64)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $filter_contact_language;        // varchar(128)
    public $communication_language;         // varchar(8)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
