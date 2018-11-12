<?php
/**
 * Table Definition for log_civicrm_group_contact
 */
require_once 'DB/DataObject.php';

class Log_civicrm_group_contact extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_group_contact';    // table name
    public $id;                             // int(4) unsigned
    public $group_id;                       // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $status;                         // varchar(8)
    public $location_id;                    // int(4) unsigned
    public $email_id;                       // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
