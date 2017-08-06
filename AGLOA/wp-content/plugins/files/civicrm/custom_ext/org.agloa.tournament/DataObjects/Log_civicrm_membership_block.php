<?php
/**
 * Table Definition for log_civicrm_membership_block
 */
require_once 'DB/DataObject.php';

class Log_civicrm_membership_block extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_membership_block';    // table name
    public $id;                             // int(4) unsigned
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $membership_types;               // varchar(1024)
    public $membership_type_default;        // int(4) unsigned
    public $display_min_fee;                // tinyint(1) default_1
    public $is_separate_payment;            // tinyint(1) default_1
    public $new_title;                      // varchar(255)
    public $new_text;                       // text
    public $renewal_title;                  // varchar(255)
    public $renewal_text;                   // text
    public $is_required;                    // tinyint(1)
    public $is_active;                      // tinyint(1) default_1
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
