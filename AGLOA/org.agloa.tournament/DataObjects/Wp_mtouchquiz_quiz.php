<?php
/**
 * Table Definition for wp_mtouchquiz_quiz
 */
require_once 'DB/DataObject.php';

class Wp_mtouchquiz_quiz extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_mtouchquiz_quiz';    // table name
    public $ID;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(100) not_null
    public $description;                    // mediumtext not_null
    public $final_screen;                   // mediumtext not_null
    public $form_code;                      // varchar(100) not_null
    public $added_on;                       // datetime not_null
    public $show_hints;                     // enum(1) not_null default_1
    public $show_start;                     // enum(1) not_null default_1
    public $show_final;                     // enum(1) not_null default_1
    public $random_questions;               // enum(1) not_null
    public $random_answers;                 // enum(1) not_null
    public $multiple_chances;               // enum(1) not_null default_1
    public $single_page;                    // enum(1) not_null
    public $answer_mode;                    // enum(1) not_null default_2
    public $time_limit;                     // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
