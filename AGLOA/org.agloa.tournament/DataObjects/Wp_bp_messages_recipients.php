<?php
/**
 * Table Definition for wp_bp_messages_recipients
 */
require_once 'DB/DataObject.php';

class Wp_bp_messages_recipients extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bp_messages_recipients';    // table name
    public $id;                             // bigint(8) primary_key not_null
    public $user_id;                        // bigint(8) not_null
    public $thread_id;                      // bigint(8) not_null
    public $unread_count;                   // int(4) not_null
    public $sender_only;                    // tinyint(1) not_null
    public $is_deleted;                     // tinyint(1) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
