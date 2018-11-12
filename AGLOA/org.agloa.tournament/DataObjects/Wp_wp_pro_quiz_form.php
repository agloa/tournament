<?php
/**
 * Table Definition for wp_wp_pro_quiz_form
 */
require_once 'DB/DataObject.php';

class Wp_wp_pro_quiz_form extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_wp_pro_quiz_form';    // table name
    public $form_id;                        // int(4) primary_key not_null
    public $quiz_id;                        // int(4) not_null
    public $fieldname;                      // varchar(100) not_null
    public $type;                           // tinyint(1) not_null
    public $required;                       // tinyint(1) not_null unsigned
    public $sort;                           // tinyint(1) not_null
    public $data;                           // mediumtext

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
