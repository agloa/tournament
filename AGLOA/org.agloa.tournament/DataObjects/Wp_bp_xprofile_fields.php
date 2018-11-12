<?php
/**
 * Table Definition for wp_bp_xprofile_fields
 */
require_once 'DB/DataObject.php';

class Wp_bp_xprofile_fields extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bp_xprofile_fields';    // table name
    public $id;                             // bigint(8) primary_key not_null unsigned
    public $group_id;                       // bigint(8) not_null unsigned
    public $parent_id;                      // bigint(8) not_null unsigned
    public $type;                           // varchar(150) not_null
    public $name;                           // varchar(150) not_null
    public $description;                    // longtext not_null
    public $is_required;                    // tinyint(1) not_null
    public $is_default_option;              // tinyint(1) not_null
    public $field_order;                    // bigint(8) not_null
    public $option_order;                   // bigint(8) not_null
    public $order_by;                       // varchar(15) not_null
    public $can_delete;                     // tinyint(1) not_null default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
