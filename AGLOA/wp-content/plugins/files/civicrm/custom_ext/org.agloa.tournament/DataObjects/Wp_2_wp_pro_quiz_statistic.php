<?php
/**
 * Table Definition for wp_2_wp_pro_quiz_statistic
 */
require_once 'DB/DataObject.php';

class Wp_2_wp_pro_quiz_statistic extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_2_wp_pro_quiz_statistic';    // table name
    public $quiz_id;                        // int(4) primary_key not_null
    public $question_id;                    // int(4) primary_key not_null
    public $user_id;                        // bigint(8) primary_key not_null unsigned
    public $correct_count;                  // int(4) not_null unsigned
    public $incorrect_count;                // int(4) not_null unsigned
    public $hint_count;                     // int(4) not_null unsigned
    public $points;                         // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
