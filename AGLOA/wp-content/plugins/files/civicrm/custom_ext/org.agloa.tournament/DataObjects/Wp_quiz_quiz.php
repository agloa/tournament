<?php
/**
 * Table Definition for wp_quiz_quiz
 */
require_once 'DB/DataObject.php';

class Wp_quiz_quiz extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_quiz_quiz';        // table name
    public $ID;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(50) not_null
    public $description;                    // mediumtext not_null
    public $final_screen;                   // mediumtext not_null
    public $added_on;                       // datetime not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
