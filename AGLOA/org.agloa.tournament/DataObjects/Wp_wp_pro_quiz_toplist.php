<?php
/**
 * Table Definition for wp_wp_pro_quiz_toplist
 */
require_once 'DB/DataObject.php';

class Wp_wp_pro_quiz_toplist extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_wp_pro_quiz_toplist';    // table name
    public $toplist_id;                     // int(4) primary_key not_null
    public $quiz_id;                        // int(4) primary_key not_null
    public $date;                           // int(4) not_null unsigned
    public $user_id;                        // bigint(8) not_null unsigned
    public $name;                           // varchar(30) not_null
    public $email;                          // varchar(200) not_null
    public $points;                         // int(4) not_null unsigned
    public $result;                         // float not_null unsigned
    public $ip;                             // varchar(100) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
