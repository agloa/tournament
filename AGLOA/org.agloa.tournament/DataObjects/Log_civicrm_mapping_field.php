<?php
/**
 * Table Definition for log_civicrm_mapping_field
 */
require_once 'DB/DataObject.php';

class Log_civicrm_mapping_field extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_mapping_field';    // table name
    public $id;                             // int(4) unsigned
    public $mapping_id;                     // int(4) unsigned
    public $name;                           // varchar(255)
    public $contact_type;                   // varchar(64)
    public $column_number;                  // int(4) unsigned
    public $location_type_id;               // int(4) unsigned
    public $phone_type_id;                  // int(4) unsigned
    public $im_provider_id;                 // int(4) unsigned
    public $website_type_id;                // int(4) unsigned
    public $relationship_type_id;           // int(4) unsigned
    public $relationship_direction;         // varchar(6)
    public $grouping;                       // int(4) unsigned default_1
    public $operator;                       // varchar(16)
    public $value;                          // varchar(255)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
