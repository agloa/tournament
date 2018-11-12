<?php
/**
 * Table Definition for wp_bp_groups_groupmeta
 */
require_once 'DB/DataObject.php';

class Wp_bp_groups_groupmeta extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bp_groups_groupmeta';    // table name
    public $id;                             // bigint(8) primary_key not_null
    public $group_id;                       // bigint(8) not_null
    public $meta_key;                       // varchar(255)
    public $meta_value;                     // longtext

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
