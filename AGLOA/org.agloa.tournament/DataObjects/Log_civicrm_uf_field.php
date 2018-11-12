<?php
/**
 * Table Definition for log_civicrm_uf_field
 */
require_once 'DB/DataObject.php';

class Log_civicrm_uf_field extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_uf_field';    // table name
    public $id;                             // int(4) unsigned
    public $uf_group_id;                    // int(4) unsigned
    public $field_name;                     // varchar(64)
    public $is_active;                      // tinyint(1) default_1
    public $is_view;                        // tinyint(1)
    public $is_required;                    // tinyint(1)
    public $weight;                         // int(4) default_1
    public $help_post;                      // text
    public $help_pre;                       // text
    public $visibility;                     // varchar(32) default_User%20and%20User%20Admin%20Only
    public $in_selector;                    // tinyint(1)
    public $is_searchable;                  // tinyint(1)
    public $location_type_id;               // int(4) unsigned
    public $phone_type_id;                  // int(4) unsigned
    public $website_type_id;                // int(4) unsigned
    public $label;                          // varchar(255)
    public $field_type;                     // varchar(255)
    public $is_reserved;                    // tinyint(1)
    public $is_multi_summary;               // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
