<?php
/**
 * Table Definition for group_types
 */
require_once 'DB/DataObject.php';

class Group_types extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'group_types';         // table name
    public $option_group_id;                // int(4) not_null unsigned
    public $group_title;                    // varchar(255)
    public $value;                          // varchar(512) not_null
    public $value_label;                    // varchar(512)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
