<?php
/**
 * Table Definition for wp_bp_groups
 */
require_once 'DB/DataObject.php';

class Wp_bp_groups extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bp_groups';        // table name
    public $id;                             // bigint(8) primary_key not_null
    public $creator_id;                     // bigint(8) not_null
    public $name;                           // varchar(100) not_null
    public $slug;                           // varchar(200) not_null
    public $description;                    // longtext not_null
    public $status;                         // varchar(10) not_null default_public
    public $enable_forum;                   // tinyint(1) not_null default_1
    public $date_created;                   // datetime not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
