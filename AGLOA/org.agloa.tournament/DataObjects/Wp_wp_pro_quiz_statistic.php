<?php
/**
 * Table Definition for wp_wp_pro_quiz_statistic
 */
require_once 'DB/DataObject.php';

class Wp_wp_pro_quiz_statistic extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_wp_pro_quiz_statistic';    // table name
    public $statistic_ref_id;               // int(4) primary_key not_null unsigned
    public $question_id;                    // int(4) primary_key not_null
    public $correct_count;                  // int(4) not_null unsigned
    public $incorrect_count;                // int(4) not_null unsigned
    public $hint_count;                     // int(4) not_null unsigned
    public $points;                         // int(4) not_null unsigned
    public $question_time;                  // int(4) not_null unsigned
    public $answer_data;                    // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
