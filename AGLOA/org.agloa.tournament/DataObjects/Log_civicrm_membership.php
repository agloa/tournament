<?php
/**
 * Table Definition for log_civicrm_membership
 */
require_once 'DB/DataObject.php';

class Log_civicrm_membership extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_membership';    // table name
    public $id;                             // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $membership_type_id;             // int(4) unsigned
    public $join_date;                      // date
    public $start_date;                     // date
    public $end_date;                       // date
    public $source;                         // varchar(128)
    public $status_id;                      // int(4) unsigned
    public $is_override;                    // tinyint(1)
    public $owner_membership_id;            // int(4) unsigned
    public $max_related;                    // int(4)
    public $is_test;                        // tinyint(1)
    public $is_pay_later;                   // tinyint(1)
    public $contribution_recur_id;          // int(4) unsigned
    public $campaign_id;                    // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
