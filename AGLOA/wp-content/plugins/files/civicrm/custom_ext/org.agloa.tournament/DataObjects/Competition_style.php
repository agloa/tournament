<?php
/**
 * Table Definition for competition_style
 */
require_once 'DB/DataObject.php';

class Competition_style extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'competition_style';    // table name
    public $id;                             // varchar(20) primary_key not_null
    public $label;                          // varchar(512) not_null
    public $name;                           // varchar(512) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
