<?php
/**
 * Table Definition for log_civicrm_phone
 */
require_once 'DB/DataObject.php';

class Log_civicrm_phone extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_phone';    // table name
    public $id;                             // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $location_type_id;               // int(4) unsigned
    public $is_primary;                     // tinyint(1)
    public $is_billing;                     // tinyint(1)
    public $mobile_provider_id;             // int(4) unsigned
    public $phone;                          // varchar(32)
    public $phone_ext;                      // varchar(16)
    public $phone_numeric;                  // varchar(32)
    public $phone_type_id;                  // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
