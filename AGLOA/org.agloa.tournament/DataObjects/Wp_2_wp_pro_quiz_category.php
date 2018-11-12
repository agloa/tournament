<?php
/**
 * Table Definition for wp_2_wp_pro_quiz_category
 */
require_once 'DB/DataObject.php';

class Wp_2_wp_pro_quiz_category extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_2_wp_pro_quiz_category';    // table name
    public $category_id;                    // int(4) primary_key not_null unsigned
    public $category_name;                  // varchar(200) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
