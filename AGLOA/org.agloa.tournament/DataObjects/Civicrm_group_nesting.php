<?php
/**
 * Table Definition for civicrm_group_nesting
 */
require_once 'DB/DataObject.php';

class Civicrm_group_nesting extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_group_nesting';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $child_group_id;                 // int(4) not_null unsigned
    public $parent_group_id;                // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
