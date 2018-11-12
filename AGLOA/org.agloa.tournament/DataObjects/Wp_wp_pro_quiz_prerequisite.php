<?php
/**
 * Table Definition for wp_wp_pro_quiz_prerequisite
 */
require_once 'DB/DataObject.php';

class Wp_wp_pro_quiz_prerequisite extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_wp_pro_quiz_prerequisite';    // table name
    public $prerequisite_quiz_id;           // int(4) primary_key not_null
    public $quiz_id;                        // int(4) primary_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
