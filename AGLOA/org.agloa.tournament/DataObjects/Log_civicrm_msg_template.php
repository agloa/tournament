<?php
/**
 * Table Definition for log_civicrm_msg_template
 */
require_once 'DB/DataObject.php';

class Log_civicrm_msg_template extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_msg_template';    // table name
    public $id;                             // int(4) unsigned
    public $msg_title;                      // varchar(255)
    public $msg_subject;                    // text
    public $msg_text;                       // longtext
    public $msg_html;                       // longtext
    public $is_active;                      // tinyint(1) default_1
    public $workflow_id;                    // int(4) unsigned
    public $is_default;                     // tinyint(1) default_1
    public $is_reserved;                    // tinyint(1)
    public $is_sms;                         // tinyint(1)
    public $pdf_format_id;                  // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
