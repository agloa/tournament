<?php
/**
 * Table Definition for log_civicrm_mailing
 */
require_once 'DB/DataObject.php';

class Log_civicrm_mailing extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_mailing';    // table name
    public $id;                             // int(4) unsigned
    public $domain_id;                      // int(4) unsigned
    public $header_id;                      // int(4) unsigned
    public $footer_id;                      // int(4) unsigned
    public $reply_id;                       // int(4) unsigned
    public $unsubscribe_id;                 // int(4) unsigned
    public $resubscribe_id;                 // int(4) unsigned
    public $optout_id;                      // int(4) unsigned
    public $name;                           // varchar(128)
    public $mailing_type;                   // varchar(32)
    public $from_name;                      // varchar(128)
    public $from_email;                     // varchar(128)
    public $replyto_email;                  // varchar(128)
    public $subject;                        // varchar(128)
    public $body_text;                      // longtext
    public $body_html;                      // longtext
    public $url_tracking;                   // tinyint(1)
    public $forward_replies;                // tinyint(1)
    public $auto_responder;                 // tinyint(1)
    public $open_tracking;                  // tinyint(1)
    public $is_completed;                   // tinyint(1)
    public $msg_template_id;                // int(4) unsigned
    public $override_verp;                  // tinyint(1)
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $scheduled_id;                   // int(4) unsigned
    public $scheduled_date;                 // datetime
    public $approver_id;                    // int(4) unsigned
    public $approval_date;                  // datetime
    public $approval_status_id;             // int(4) unsigned
    public $approval_note;                  // longtext
    public $is_archived;                    // tinyint(1)
    public $visibility;                     // varchar(40) default_Public%20Pages
    public $campaign_id;                    // int(4) unsigned
    public $dedupe_email;                   // tinyint(1)
    public $sms_provider_id;                // int(4) unsigned
    public $hash;                           // varchar(16)
    public $location_type_id;               // int(4) unsigned
    public $email_selection_method;         // varchar(20) default_automatic
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $language;                       // varchar(5)
    public $template_type;                  // varchar(64) default_traditional
    public $template_options;               // longtext

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
