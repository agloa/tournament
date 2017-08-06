<?php
/**
 * Table Definition for wp_quiz_question
 */
require_once 'DB/DataObject.php';

class Wp_quiz_question extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_quiz_question';    // table name
    public $ID;                             // int(4) primary_key not_null unsigned
    public $quiz_id;                        // int(4) not_null unsigned
    public $question;                       // mediumtext not_null
    public $sort_order;                     // int(4) not_null
    public $explanation;                    // mediumtext not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
