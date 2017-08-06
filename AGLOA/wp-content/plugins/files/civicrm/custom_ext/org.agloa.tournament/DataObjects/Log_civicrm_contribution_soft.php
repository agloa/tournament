<?php
/**
 * Table Definition for log_civicrm_contribution_soft
 */
require_once 'DB/DataObject.php';

class Log_civicrm_contribution_soft extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_contribution_soft';    // table name
    public $id;                             // int(4) unsigned
    public $contribution_id;                // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $amount;                         // decimal(20,2)
    public $currency;                       // varchar(3)
    public $pcp_id;                         // int(4) unsigned
    public $pcp_display_in_roll;            // tinyint(1)
    public $pcp_roll_nickname;              // varchar(255)
    public $pcp_personal_note;              // varchar(255)
    public $soft_credit_type_id;            // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
