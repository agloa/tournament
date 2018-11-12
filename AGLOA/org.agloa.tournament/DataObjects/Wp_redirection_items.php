<?php
/**
 * Table Definition for wp_redirection_items
 */
require_once 'DB/DataObject.php';

class Wp_redirection_items extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_redirection_items';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $url;                            // mediumtext not_null
    public $regex;                          // int(4) not_null unsigned
    public $position;                       // int(4) multiple_key not_null unsigned
    public $last_count;                     // int(4) not_null unsigned
    public $last_access;                    // datetime not_null
    public $group_id;                       // int(4) multiple_key not_null
    public $status;                         // enum(8) not_null default_enabled
    public $action_type;                    // varchar(20) not_null
    public $action_code;                    // int(4) not_null unsigned
    public $action_data;                    // mediumtext
    public $match_type;                     // varchar(20) not_null
    public $title;                          // varchar(50)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
