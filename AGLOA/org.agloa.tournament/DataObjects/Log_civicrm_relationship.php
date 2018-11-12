<?php
/**
 * Table Definition for log_civicrm_relationship
 */
require_once 'DB/DataObject.php';

class Log_civicrm_relationship extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_relationship';    // table name
    public $id;                             // int(4) unsigned
    public $contact_id_a;                   // int(4) unsigned
    public $contact_id_b;                   // int(4) unsigned
    public $relationship_type_id;           // int(4) unsigned
    public $start_date;                     // date
    public $end_date;                       // date
    public $is_active;                      // tinyint(1) default_1
    public $description;                    // varchar(255)
    public $is_permission_a_b;              // tinyint(1)
    public $is_permission_b_a;              // tinyint(1)
    public $case_id;                        // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
