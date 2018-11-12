<?php
/**
 * Table Definition for wp_old_options
 */
require_once 'DB/DataObject.php';

class Wp_old_options extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_old_options';      // table name
    public $option_id;                      // bigint(8) primary_key not_null unsigned
    public $blog_id;                        // int(4) not_null
    public $option_name;                    // varchar(64) unique_key not_null
    public $option_value;                   // longtext not_null
    public $autoload;                       // varchar(20) not_null default_yes

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
