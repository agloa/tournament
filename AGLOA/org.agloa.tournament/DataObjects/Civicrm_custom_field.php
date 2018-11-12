<?php
/**
 * Table Definition for civicrm_custom_field
 */
require_once 'DB/DataObject.php';

class Civicrm_custom_field extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_custom_field';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $custom_group_id;                // int(4) unique_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $label;                          // varchar(255) unique_key not_null
    public $data_type;                      // varchar(16) not_null
    public $html_type;                      // varchar(32) not_null
    public $default_value;                  // varchar(255)
    public $is_required;                    // tinyint(1)
    public $is_searchable;                  // tinyint(1)
    public $is_search_range;                // tinyint(1)
    public $weight;                         // int(4) not_null default_1
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

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
