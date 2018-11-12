<?php
/**
 * Table Definition for wp_wp_pro_quiz_template
 */
require_once 'DB/DataObject.php';

class Wp_wp_pro_quiz_template extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_wp_pro_quiz_template';    // table name
    public $template_id;                    // int(4) primary_key not_null
    public $name;                           // varchar(200) not_null
    public $type;                           // tinyint(1) not_null unsigned
    public $data;                           // text not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
