<?php
/**
 * Table Definition for log_civicrm_email
 */
require_once 'DB/DataObject.php';

class Log_civicrm_email extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_email';    // table name
    public $id;                             // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $location_type_id;               // int(4) unsigned
    public $email;                          // varchar(254)
    public $is_primary;                     // tinyint(1)
    public $is_billing;                     // tinyint(1)
    public $on_hold;                        // tinyint(1)
    public $is_bulkmail;                    // tinyint(1)
    public $hold_date;                      // datetime
    public $reset_date;                     // datetime
    public $signature_text;                 // text
    public $signature_html;                 // text
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
