<?php
/**
 * Table Definition for wp_bp_activity
 */
require_once 'DB/DataObject.php';

class Wp_bp_activity extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bp_activity';      // table name
    public $id;                             // bigint(8) primary_key not_null
    public $user_id;                        // bigint(8) not_null
    public $component;                      // varchar(75) not_null
    public $type;                           // varchar(75) not_null
    public $action;                         // text not_null
    public $content;                        // longtext not_null
    public $primary_link;                   // varchar(255) not_null
    public $item_id;                        // bigint(8) not_null
    public $secondary_item_id;              // bigint(8)
    public $date_recorded;                  // datetime not_null
    public $hide_sitewide;                  // tinyint(1)
    public $mptt_left;                      // int(4) not_null
    public $mptt_right;                     // int(4) not_null
    public $is_spam;                        // tinyint(1) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
