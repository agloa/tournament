<?php
/**
 * Table Definition for wp_2_wp_pro_quiz_question
 */
require_once 'DB/DataObject.php';

class Wp_2_wp_pro_quiz_question extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_2_wp_pro_quiz_question';    // table name
    public $id;                             // int(4) primary_key not_null
    public $quiz_id;                        // int(4) not_null
    public $sort;                           // smallint(2) not_null unsigned
    public $title;                          // varchar(200) not_null
    public $points;                         // int(4) not_null
    public $question;                       // text not_null
    public $correct_msg;                    // text not_null
    public $incorrect_msg;                  // text not_null
    public $correct_same_text;              // tinyint(1) not_null
    public $tip_enabled;                    // tinyint(1) not_null
    public $tip_msg;                        // text not_null
    public $answer_type;                    // varchar(50) not_null
    public $show_points_in_box;             // tinyint(1) not_null
    public $answer_points_activated;        // tinyint(1) not_null
    public $answer_data;                    // longtext not_null
    public $category_id;                    // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
