<?php
/**
 * Table Definition for log_civicrm_custom_field
 */
require_once 'DB/DataObject.php';

class Log_civicrm_custom_field extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_custom_field';    // table name
    public $id;                             // int(4) unsigned
    public $custom_group_id;                // int(4) unsigned
    public $name;                           // varchar(64)
    public $label;                          // varchar(255)
    public $data_type;                      // varchar(16)
    public $html_type;                      // varchar(32)
    public $default_value;                  // varchar(255)
    public $is_required;                    // tinyint(1)
    public $is_searchable;                  // tinyint(1)
    public $is_search_range;                // tinyint(1)
    public $weight;                         // int(4) default_1
    public $help_pre;                       // text
    public $help_post;                      // text
    public $mask;                           // varchar(64)
    public $attributes;                     // varchar(255)
    public $javascript;                     // varchar(255)
    public $is_active;                      // tinyint(1)
    public $is_view;                        // tinyint(1)
    public $options_per_line;               // int(4) unsigned
    public $text_length;                    // int(4) unsigned
    public $start_date_years;               // int(4)
    public $end_date_years;                 // int(4)
    public $date_format;                    // varchar(64)
    public $time_format;                    // int(4) unsigned
    public $note_columns;                   // int(4) unsigned
    public $note_rows;                      // int(4) unsigned
    public $column_name;                    // varchar(255)
    public $option_group_id;                // int(4) unsigned
    public $filter;                         // varchar(255)
    public $in_selector;                    // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
