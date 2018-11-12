<?php
/**
 * Table Definition for wp_bp_messages_messages
 */
require_once 'DB/DataObject.php';

class Wp_bp_messages_messages extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bp_messages_messages';    // table name
    public $id;                             // bigint(8) primary_key not_null
    public $thread_id;                      // bigint(8) not_null
    public $sender_id;                      // bigint(8) not_null
    public $subject;                        // varchar(200) not_null
    public $message;                        // longtext not_null
    public $date_sent;                      // datetime not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
