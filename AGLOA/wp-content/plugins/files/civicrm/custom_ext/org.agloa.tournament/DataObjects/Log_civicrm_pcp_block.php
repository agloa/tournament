<?php
/**
 * Table Definition for log_civicrm_pcp_block
 */
require_once 'DB/DataObject.php';

class Log_civicrm_pcp_block extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_pcp_block';    // table name
    public $id;                             // int(4) unsigned
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $target_entity_type;             // varchar(255) default_contribute
    public $target_entity_id;               // int(4) unsigned
    public $supporter_profile_id;           // int(4) unsigned
    public $owner_notify_id;                // int(4) unsigned
    public $is_approval_needed;             // tinyint(1)
    public $is_tellfriend_enabled;          // tinyint(1)
    public $tellfriend_limit;               // int(4) unsigned
    public $link_text;                      // varchar(255)
    public $is_active;                      // tinyint(1) default_1
    public $notify_email;                   // varchar(255)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
