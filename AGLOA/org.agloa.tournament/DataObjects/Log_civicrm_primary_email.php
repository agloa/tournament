<?php
/**
 * Table Definition for log_civicrm_primary_email
 */
require_once 'DB/DataObject.php';

class Log_civicrm_primary_email extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_primary_email';    // table name
    public $contact_id;                     // int(4) unsigned
    public $email;                          // varchar(254)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // varchar(17)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
