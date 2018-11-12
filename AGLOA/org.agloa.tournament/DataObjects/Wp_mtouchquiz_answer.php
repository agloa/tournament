<?php
/**
 * Table Definition for wp_mtouchquiz_answer
 */
require_once 'DB/DataObject.php';

class Wp_mtouchquiz_answer extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_mtouchquiz_answer';    // table name
    public $ID;                             // int(4) primary_key not_null unsigned
    public $question_id;                    // int(4) not_null unsigned
    public $answer;                         // varchar(1024) not_null
    public $hint;                           // varchar(1024) not_null
    public $correct;                        // enum(1) not_null
    public $sort_order;                     // int(4) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
