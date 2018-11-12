<?php
/**
 * Table Definition for log_civicrm_mailing_spool
 */
require_once 'DB/DataObject.php';

class Log_civicrm_mailing_spool extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_mailing_spool';    // table name
    public $id;                             // int(4) unsigned
    public $job_id;                         // int(4) unsigned
    public $recipient_email;                // text
    public $headers;                        // text
    public $body;                           // text
    public $added_at;                       // datetime
    public $removed_at;                     // datetime
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
