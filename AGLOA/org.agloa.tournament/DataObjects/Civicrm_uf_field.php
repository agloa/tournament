<?php
/**
 * Table Definition for civicrm_uf_field
 */
require_once 'DB/DataObject.php';

class Civicrm_uf_field extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_uf_field';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $uf_group_id;                    // int(4) not_null unsigned
    public $field_name;                     // varchar(64) not_null
    public $is_active;                      // tinyint(1) default_1
    public $is_view;                        // tinyint(1)
    public $is_required;                    // tinyint(1)
    public $weight;                         // int(4) not_null default_1
    public $help_post;                      // text
    public $help_pre;                       // text
    public $visibility;                     // varchar(32) default_User%20and%20User%20Admin%20Only
    public $in_selector;                    // tinyint(1)
    public $is_searchable;                  // tinyint(1)
    public $location_type_id;               // int(4) unsigned
    public $phone_type_id;                  // int(4) unsigned
    public $website_type_id;                // int(4) unsigned
    public $label;                          // varchar(255) not_null
    public $field_type;                     // varchar(255)
    public $is_reserved;                    // tinyint(1)
    public $is_multi_summary;               // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
