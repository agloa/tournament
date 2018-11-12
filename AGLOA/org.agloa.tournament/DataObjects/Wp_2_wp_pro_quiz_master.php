<?php
/**
 * Table Definition for wp_2_wp_pro_quiz_master
 */
require_once 'DB/DataObject.php';

class Wp_2_wp_pro_quiz_master extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_2_wp_pro_quiz_master';    // table name
    public $id;                             // int(4) primary_key not_null
    public $name;                           // varchar(200) not_null
    public $text;                           // text not_null
    public $result_text;                    // text not_null
    public $result_grade_enabled;           // tinyint(1) not_null
    public $title_hidden;                   // tinyint(1) not_null
    public $btn_restart_quiz_hidden;        // tinyint(1) not_null
    public $btn_view_question_hidden;       // tinyint(1) not_null
    public $question_random;                // tinyint(1) not_null
    public $answer_random;                  // tinyint(1) not_null
    public $check_answer;                   // tinyint(1) not_null
    public $back_button;                    // tinyint(1) not_null
    public $time_limit;                     // int(4) not_null
    public $statistics_on;                  // tinyint(1) not_null
    public $statistics_ip_lock;             // int(4) not_null unsigned
    public $show_points;                    // tinyint(1) not_null
    public $quiz_run_once;                  // tinyint(1) not_null
    public $quiz_run_once_type;             // tinyint(1) not_null
    public $quiz_run_once_cookie;           // tinyint(1) not_null
    public $quiz_run_once_time;             // int(4) not_null unsigned
    public $question_on_single_page;        // tinyint(1) not_null
    public $numbered_answer;                // tinyint(1) not_null
    public $hide_answer_message_box;        // tinyint(1) not_null
    public $disabled_answer_mark;           // tinyint(1) not_null
    public $show_max_question;              // tinyint(1) not_null
    public $show_max_question_value;        // int(4) not_null unsigned
    public $show_max_question_percent;      // tinyint(1) not_null
    public $toplist_activated;              // tinyint(1) not_null
    public $toplist_data;                   // text not_null
    public $show_average_result;            // tinyint(1) not_null
    public $prerequisite;                   // tinyint(1) not_null
    public $quiz_modus;                     // tinyint(1) not_null unsigned
    public $show_review_question;           // tinyint(1) not_null
    public $quiz_summary_hide;              // tinyint(1) not_null
    public $skip_question_disabled;         // tinyint(1) not_null
    public $email_notification;             // tinyint(1) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
