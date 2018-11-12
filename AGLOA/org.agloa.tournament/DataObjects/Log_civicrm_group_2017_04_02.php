<?php
/**
 * Table Definition for log_civicrm_group_2017_04_02
 */
require_once 'DB/DataObject.php';

class Log_civicrm_group_2017_04_02 extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_group_2017_04_02';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(64)
    public $title;                          // varchar(64)
    public $description;                    // text
    public $source;                         // varchar(64)
    public $saved_search_id;                // int(4) unsigned
    public $is_active;                      // tinyint(1)
    public $visibility;                     // varchar(24) default_User%20and%20User%20Admin%20Only
    public $where_clause;                   // text
    public $select_tables;                  // text
    public $where_tables;                   // text
    public $group_type;                     // varchar(128)
    public $cache_date;                     // timestamp
    public $refresh_date;                   // timestamp
    public $parents;                        // text
    public $children;                       // text
    public $is_hidden;                      // tinyint(1)
    public $is_reserved;                    // tinyint(1)
    public $created_id;                     // int(4) unsigned
    public $modified_id;                    // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // varchar(17)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
