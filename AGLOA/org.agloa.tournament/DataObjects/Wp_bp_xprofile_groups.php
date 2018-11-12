<?php
/**
 * Table Definition for wp_bp_xprofile_groups
 */
require_once 'DB/DataObject.php';

class Wp_bp_xprofile_groups extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bp_xprofile_groups';    // table name
    public $id;                             // bigint(8) primary_key not_null unsigned
    public $name;                           // varchar(150) not_null
    public $description;                    // mediumtext not_null
    public $group_order;                    // bigint(8) not_null
    public $can_delete;                     // tinyint(1) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
