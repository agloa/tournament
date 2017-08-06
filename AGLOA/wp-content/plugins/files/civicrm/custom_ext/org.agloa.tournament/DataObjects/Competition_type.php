<?php
/**
 * Table Definition for competition_type
 */
require_once 'DB/DataObject.php';

class Competition_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'competition_type';    // table name
    public $id;                             // varchar(20) primary_key not_null
    public $label;                          // varchar(512) not_null
    public $name;                           // varchar(512) not_null
    public $category;                       // varchar(20)
    public $style;                          // varchar(20)
    public $match_size;                     // int(4) not_null unsigned
    public $min_score;                      // decimal(10,0) not_null
    public $max_score;                      // decimal(10,0) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
