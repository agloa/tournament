<?php
/**
 * Table Definition for wp_bp_notifications
 */
require_once 'DB/DataObject.php';

class Wp_bp_notifications extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bp_notifications';    // table name
    public $id;                             // bigint(8) primary_key not_null
    public $user_id;                        // bigint(8) multiple_key not_null
    public $item_id;                        // bigint(8) not_null
    public $secondary_item_id;              // bigint(8)
    public $component_name;                 // varchar(75) not_null
    public $component_action;               // varchar(75) not_null
    public $date_notified;                  // datetime not_null
    public $is_new;                         // tinyint(1) multiple_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
