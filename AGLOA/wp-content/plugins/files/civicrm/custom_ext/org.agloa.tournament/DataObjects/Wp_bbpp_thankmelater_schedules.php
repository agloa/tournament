<?php
/**
 * Table Definition for wp_bbpp_thankmelater_schedules
 */
require_once 'DB/DataObject.php';

class Wp_bbpp_thankmelater_schedules extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bbpp_thankmelater_schedules';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $message_id;                     // int(4) not_null unsigned
    public $comment_id;                     // int(4) not_null unsigned
    public $send_date_gmt;                  // datetime multiple_key not_null
    public $sent;                           // tinyint(1) multiple_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
