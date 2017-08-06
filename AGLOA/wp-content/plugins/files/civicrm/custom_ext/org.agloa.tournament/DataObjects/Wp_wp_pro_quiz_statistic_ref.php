<?php
/**
 * Table Definition for wp_wp_pro_quiz_statistic_ref
 */
require_once 'DB/DataObject.php';

class Wp_wp_pro_quiz_statistic_ref extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_wp_pro_quiz_statistic_ref';    // table name
    public $statistic_ref_id;               // int(4) primary_key not_null unsigned
    public $quiz_id;                        // int(4) multiple_key not_null
    public $user_id;                        // bigint(8) multiple_key not_null unsigned
    public $create_time;                    // int(4) not_null
    public $is_old;                         // tinyint(1) not_null unsigned
    public $form_data;                      // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
