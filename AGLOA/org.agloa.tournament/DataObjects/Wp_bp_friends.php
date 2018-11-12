<?php
/**
 * Table Definition for wp_bp_friends
 */
require_once 'DB/DataObject.php';

class Wp_bp_friends extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bp_friends';       // table name
    public $id;                             // bigint(8) primary_key not_null
    public $initiator_user_id;              // bigint(8) not_null
    public $friend_user_id;                 // bigint(8) not_null
    public $is_confirmed;                   // tinyint(1)
    public $is_limited;                     // tinyint(1)
    public $date_created;                   // datetime not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
