<?php
/**
 * Table Definition for wp_2_wp_pro_quiz_lock
 */
require_once 'DB/DataObject.php';

class Wp_2_wp_pro_quiz_lock extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_2_wp_pro_quiz_lock';    // table name
    public $quiz_id;                        // int(4) primary_key not_null
    public $lock_ip;                        // varchar(100) primary_key not_null
    public $user_id;                        // bigint(8) primary_key not_null unsigned
    public $lock_type;                      // tinyint(1) primary_key not_null unsigned
    public $lock_date;                      // int(4) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
