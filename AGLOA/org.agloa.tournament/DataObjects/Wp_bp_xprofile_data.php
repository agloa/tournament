<?php
/**
 * Table Definition for wp_bp_xprofile_data
 */
require_once 'DB/DataObject.php';

class Wp_bp_xprofile_data extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bp_xprofile_data';    // table name
    public $id;                             // bigint(8) primary_key not_null unsigned
    public $field_id;                       // bigint(8) not_null unsigned
    public $user_id;                        // bigint(8) not_null unsigned
    public $value;                          // longtext not_null
    public $last_updated;                   // datetime not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
