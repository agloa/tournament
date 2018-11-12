<?php
/**
 * Table Definition for log_civicrm_relationship_type
 */
require_once 'DB/DataObject.php';

class Log_civicrm_relationship_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_relationship_type';    // table name
    public $id;                             // int(4) unsigned
    public $name_a_b;                       // varchar(64)
    public $label_a_b;                      // varchar(64)
    public $name_b_a;                       // varchar(64)
    public $label_b_a;                      // varchar(64)
    public $description;                    // varchar(255)
    public $contact_type_a;                 // varchar(12)
    public $contact_type_b;                 // varchar(12)
    public $contact_sub_type_a;             // varchar(64)
    public $contact_sub_type_b;             // varchar(64)
    public $is_reserved;                    // tinyint(1)
    public $is_active;                      // tinyint(1) default_1
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
